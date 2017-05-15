<?php
namespace Topxia\Service\Common;

use Codeages\Biz\Framework\Context\Biz;
use Codeages\Biz\Framework\Dao\Connection;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Finder\Finder;
use Topxia\Service\Common\Redis\RedisFactory;
use Topxia\Service\User\CurrentUser;

class ServiceKernel
{
    private static $_instance;

    private static $_dispatcher;

    protected $_moduleDirectories = array();

    protected $_moduleConfig = array();

    protected $environment;
    protected $debug;
    protected $booted;

    protected $translator;
    protected $translatorEnabled;

    protected $pluginKernel;

    protected $parameterBag;

    protected $currentUser;

    protected $pool = array();
    protected $connection;

    protected $classMaps = array();

    /**
     * @var Biz
     */
    protected $biz = null;

    public function getRedis($group = 'default')
    {
        $redisFactory = RedisFactory::instance($this);
        $redis        = $redisFactory->getRedis($group);

        if ($redis) {
            return $redis;
        }

        return false;
    }

    public static function create($environment, $debug)
    {
        if (self::$_instance) {
            return self::$_instance;
        }

        $instance              = new self();
        $instance->environment = $environment;
        $instance->debug       = (Boolean) $debug;
        $instance->registerModuleDirectory(realpath(__DIR__.'/../../../'));

        self::$_instance = $instance;

        return $instance;
    }

    /**
     * @return ServiceKernel
     */
    public static function instance()
    {
        if (empty(self::$_instance)) {
            throw new \RuntimeException('The instance of ServiceKernel is not created!');
        }

        self::$_instance->boot();
        return self::$_instance;
    }

    /**
     * @return EventDispatcherInterface
     */
    public static function dispatcher()
    {
        if (self::$_dispatcher) {
            return self::$_dispatcher;
        }

        //@ TODO 新的事件机制通过Symfony Tag形式注入，但是APP接口并没有使用Symfony, 重构接口时去掉判断
        if(defined('RUNTIME_ENV') && RUNTIME_ENV === 'API'){
            self::$_dispatcher = new EventDispatcher();
        }else{
            self::$_dispatcher = self::instance()->biz['dispatcher'];
        }

        return self::$_dispatcher;
    }

    public function boot()
    {
        if (true === $this->booted) {
            return;
        }

        $this->booted = true;

        $moduleConfigCacheFile = $this->getParameter('kernel.root_dir').'/cache/'.$this->environment.'/modules_config.php';

        if (file_exists($moduleConfigCacheFile)) {
            $this->_moduleConfig = include $moduleConfigCacheFile;
        } else {
            $finder = new Finder();
            $finder->directories()->depth('== 0');

            foreach ($this->_moduleDirectories as $dir) {
                if (glob($dir.'/*/Service', GLOB_ONLYDIR)) {
                    $finder->in($dir.'/*/Service');
                }
            }

            foreach ($finder as $dir) {
                $filepath = $dir->getRealPath().'/module_config.php';

                if (file_exists($filepath)) {
                    $this->_moduleConfig = array_merge_recursive($this->_moduleConfig, include $filepath);
                }
            }

            if (!$this->debug) {
                $cache = "<?php \nreturn ".var_export($this->_moduleConfig, true).';';
                file_put_contents($moduleConfigCacheFile, $cache);
            }
        }

        $subscribers = empty($this->_moduleConfig['event_subscriber']) ? array() : $this->_moduleConfig['event_subscriber'];


        foreach ($subscribers as $subscriber) {
            //@ TODO 新的事件机制通过Symfony Tag形式注入，但是APP接口并没有使用Symfony, 重构接口时去掉判断
            if(defined('RUNTIME_ENV') && RUNTIME_ENV === 'API'){
                $this->dispatcher()->addSubscriber(new $subscriber());
            }else{
                $this->biz['subscribers'][] = $subscriber;
            }
        }
    }

    public function setParameterBag($parameterBag)
    {
        $this->parameterBag = $parameterBag;
        return $this;
    }

    public function getParameter($name)
    {
        if (is_null($this->parameterBag)) {
            throw new \RuntimeException('The `ParameterBag` of ServiceKernel is not setted!');
        }

        return $this->parameterBag->get($name);
    }

    public function setTranslator($translator)
    {
        $this->translator = $translator;
        return $this;
    }

    public function getTranslator()
    {
        if (is_null($this->translator)) {
            throw new \RuntimeException('The `Translator` of ServiceKernel is not setted!');
        }

        return $this->translator;
    }

    public function setTranslatorEnabled($boolean = true)
    {
        $this->translatorEnabled = $boolean;
        return $this;
    }

    public function getTranslatorEnabled()
    {
        return $this->translatorEnabled;
    }

    public function hasParameter($name)
    {
        if (is_null($this->parameterBag)) {
            throw new \RuntimeException('The `ParameterBag` of ServiceKernel is not setted!');
        }

        return $this->parameterBag->has($name);
    }

    public function setCurrentUser($currentUser)
    {
        $this->currentUser = $currentUser;
        return $this;
    }

    /**
     * @return CurrentUser
     */
    public function getCurrentUser()
    {
        if (is_null($this->currentUser)) {
            throw new \RuntimeException('The `CurrentUser` of ServiceKernel is not setted!');
        }

        return $this->currentUser;
    }

    public function setEnvVariable(array $env)
    {
        $this->env = $env;
        return $this;
    }

    public function getEnvVariable($key = null)
    {
        if (empty($key)) {
            return $this->env;
        }

        if (!isset($this->env[$key])) {
            throw new \RuntimeException("Environment variable `{$key}` is not exist.");
        }

        return $this->env[$key];
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return $this->biz['db'];
    }

    public function createService($name)
    {
        if (empty($this->pool[$name])) {
            $class = $this->getClassName('service', $name);
            $this->pool[$name] = new  $class();
        }

        return $this->pool[$name];
    }

    public function createDao($name)
    {
        if (empty($this->pool[$name])) {
            $class = $this->getClassName('dao', $name);
            $dao   = new $class();
            $dao->setConnection($this->getConnection());
            $dao->setRedis($this->getRedis());
            $this->pool[$name] = $dao;
        }

        return $this->pool[$name];
    }

    public function getEnvironment()
    {
        return $this->environment;
    }

    public function isDebug()
    {
        return $this->debug;
    }

    public function registerModuleDirectory($dir)
    {
        $this->_moduleDirectories[] = $dir;
        return $this;
    }

    public function getModuleDirectories()
    {
        return $this->_moduleDirectories;
    }

    public function getModuleConfig($key, $default = null)
    {
        if (!isset($this->_moduleConfig[$key])) {
            return $default;
        }

        return $this->_moduleConfig[$key];
    }

    public function transArray($messages, $arguments = array(), $domain = null, $locale = null)
    {
        foreach ($messages as &$message) {
            $message = $this->trans($message, $arguments, $domain, $locale);
        }
        return $messages;
    }

    public function trans($message, $arguments = array(), $domain = null, $locale = null)
    {
        if ($this->getTranslatorEnabled()) {
            return $this->getTranslator()->trans($message, $arguments, $domain, $locale);
        }
        return strtr((string) $message, $arguments);
    }

    protected function getClassName($type, $name)
    {
        $classMap = $this->getClassMap($type);

        if (isset($classMap[$name])) {
            return $classMap[$name];
        }

        if (strpos($name, ':') > 0) {
            list($namespace, $name) = explode(':', $name, 2);
            $namespace .= '\\Service';
        } else {
            $namespace = substr(__NAMESPACE__, 0, -strlen('Common') - 1);
        }

        list($module, $className) = explode('.', $name);

        $type = strtolower($type);

        if ($type == 'dao') {
            return $namespace.'\\'.$module.'\\Dao\\Impl\\'.$className.'Impl';
        }

        return $namespace.'\\'.$module.'\\Impl\\'.$className.'Impl';
    }

    public function setBiz(Biz $biz)
    {
        $this->biz = $biz;
        return $this;
    }

    public function getBiz()
    {
        if (!$this->biz) {
            throw new \RuntimeException('The `Biz Container` of ServiceKernel is not setted!');
        }
        return $this->biz;
    }

    protected function getClassMap($type)
    {
        if (isset($this->classMaps[$type])) {
            return $this->classMaps[$type];
        }

        $key = ($type == 'dao') ? 'topxia_daos' : 'topxia_services';

        if (!$this->hasParameter($key)) {
            $this->classMaps[$type] = array();
        } else {
            $this->classMaps[$type] = $this->getParameter($key);
        }

        return $this->classMaps[$type];
    }
}
