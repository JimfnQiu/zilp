<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * appProdProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 3; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'app.locale_listener' => 'getApp_LocaleListenerService',
            'app.user_locale_listener' => 'getApp_UserLocaleListenerService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'assets.path_package' => 'getAssets_PathPackageService',
            'authentication_handler' => 'getAuthenticationHandlerService',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService',
            'biz' => 'getBizService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'codeages_plugin.dict_collector' => 'getCodeagesPlugin_DictCollectorService',
            'codeages_plugin.dict_twig_extension' => 'getCodeagesPlugin_DictTwigExtensionService',
            'codeages_plugin.slot_collector' => 'getCodeagesPlugin_SlotCollectorService',
            'codeages_plugin.slot_manager' => 'getCodeagesPlugin_SlotManagerService',
            'codeages_plugin.theme.file_locator' => 'getCodeagesPlugin_Theme_FileLocatorService',
            'codeages_plugin.theme.templating.locator' => 'getCodeagesPlugin_Theme_Templating_LocatorService',
            'codeags_plugin.event.lazy_subscribers' => 'getCodeagsPlugin_Event_LazySubscribersService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine.entity_manager.config' => 'getDoctrine_EntityManager_ConfigService',
            'doctrine.entity_manager.driver.yaml' => 'getDoctrine_EntityManager_Driver_YamlService',
            'doctrine.orm.entity_manager' => 'getDoctrine_Orm_EntityManagerService',
            'endroid.qrcode.twig.extension' => 'getEndroid_Qrcode_Twig_ExtensionService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.default_category' => 'getForm_Type_DefaultCategoryService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.gender' => 'getForm_Type_GenderService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.tags' => 'getForm_Type_TagsService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type.user_role' => 'getForm_Type_UserRoleService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'kernel.controller.permission_listener' => 'getKernel_Controller_PermissionListenerService',
            'kernel.listener.ajax_exception_listener' => 'getKernel_Listener_AjaxExceptionListenerService',
            'kernel.listener.kernel_request_listener' => 'getKernel_Listener_KernelRequestListenerService',
            'kernel.listener.kernel_response_listener' => 'getKernel_Listener_KernelResponseListenerService',
            'kernel.listener.user_login_token_listener' => 'getKernel_Listener_UserLoginTokenListenerService',
            'kernel.response.permission_listener' => 'getKernel_Response_PermissionListenerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'oauth2.client_manager' => 'getOauth2_ClientManagerService',
            'oauth2.grant_type.authorization_code' => 'getOauth2_GrantType_AuthorizationCodeService',
            'oauth2.grant_type.client_credentials' => 'getOauth2_GrantType_ClientCredentialsService',
            'oauth2.grant_type.refresh_token' => 'getOauth2_GrantType_RefreshTokenService',
            'oauth2.grant_type.user_credentials' => 'getOauth2_GrantType_UserCredentialsService',
            'oauth2.request' => 'getOauth2_RequestService',
            'oauth2.response' => 'getOauth2_ResponseService',
            'oauth2.scope_manager' => 'getOauth2_ScopeManagerService',
            'oauth2.server' => 'getOauth2_ServerService',
            'oauth2.storage.access_token' => 'getOauth2_Storage_AccessTokenService',
            'oauth2.storage.authorization_code' => 'getOauth2_Storage_AuthorizationCodeService',
            'oauth2.storage.client_credentials' => 'getOauth2_Storage_ClientCredentialsService',
            'oauth2.storage.refresh_token' => 'getOauth2_Storage_RefreshTokenService',
            'oauth2.storage.scope' => 'getOauth2_Storage_ScopeService',
            'oauth2.storage.user_credentials' => 'getOauth2_Storage_UserCredentialsService',
            'oauth2.user_provider' => 'getOauth2_UserProviderService',
            'permission.twig.permission_extension' => 'getPermission_Twig_PermissionExtensionService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'routing.loader.yml' => 'getRouting_Loader_YmlService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler.factory' => 'getSession_Handler_FactoryService',
            'session.handler.pdo' => 'getSession_Handler_PdoService',
            'session.handler.pdo.connection' => 'getSession_Handler_Pdo_ConnectionService',
            'session.handler.redis' => 'getSession_Handler_RedisService',
            'session.handler.redis.factory' => 'getSession_Handler_Redis_FactoryService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'topxia.data_dict.gender' => 'getTopxia_DataDict_GenderService',
            'topxia.data_dict.user_role' => 'getTopxia_DataDict_UserRoleService',
            'topxia.target_helper' => 'getTopxia_TargetHelperService',
            'topxia.timemachine' => 'getTopxia_TimemachineService',
            'topxia.twig.block_extension' => 'getTopxia_Twig_BlockExtensionService',
            'topxia.twig.cache_extension' => 'getTopxia_Twig_CacheExtensionService',
            'topxia.twig.cache_provider' => 'getTopxia_Twig_CacheProviderService',
            'topxia.twig.cache_strategy' => 'getTopxia_Twig_CacheStrategyService',
            'topxia.twig.data_extension' => 'getTopxia_Twig_DataExtensionService',
            'topxia.twig.dictionary_extension' => 'getTopxia_Twig_DictionaryExtensionService',
            'topxia.twig.file_cache' => 'getTopxia_Twig_FileCacheService',
            'topxia.twig.html_extension' => 'getTopxia_Twig_HtmlExtensionService',
            'topxia.twig.order_extension' => 'getTopxia_Twig_OrderExtensionService',
            'topxia.twig.theme_extension' => 'getTopxia_Twig_ThemeExtensionService',
            'topxia.twig.uploader_extension' => 'getTopxia_Twig_UploaderExtensionService',
            'topxia.twig.web_extension' => 'getTopxia_Twig_WebExtensionService',
            'topxia.user_provider' => 'getTopxia_UserProviderService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'user.login_generate_notification_handler' => 'getUser_LoginGenerateNotificationHandlerService',
            'user.login_listener' => 'getUser_LoginListenerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'mailer' => 'swiftmailer.mailer.default',
            'session.handler' => 'session.handler.factory',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'templating.locator' => 'codeages_plugin.theme.templating.locator',
            'translator' => 'translator.default',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), false);
    }

    /*
     * Gets the 'app.locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Listener\LocaleListener A Topxia\WebBundle\Listener\LocaleListener instance
     */
    protected function getApp_LocaleListenerService()
    {
        return $this->services['app.locale_listener'] = new \Topxia\WebBundle\Listener\LocaleListener('zh_CN');
    }

    /*
     * Gets the 'app.user_locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Listener\UserLocaleListener A Topxia\WebBundle\Listener\UserLocaleListener instance
     */
    protected function getApp_UserLocaleListenerService()
    {
        return $this->services['app.user_locale_listener'] = new \Topxia\WebBundle\Listener\UserLocaleListener($this->get('session'));
    }

    /*
     * Gets the 'assets._version__default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy A Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy instance
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('7.5.12', '%s?%s');
    }

    /*
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /*
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Topxia\WebBundle\Twig\Asset\PathPackage('', $this->get('assets._version__default'), $this->get('assets.context')), array());
    }

    /*
     * Gets the 'assets.path_package' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Asset\PathPackage A Topxia\WebBundle\Twig\Asset\PathPackage instance
     */
    protected function getAssets_PathPackageService()
    {
        return $this->services['assets.path_package'] = new \Topxia\WebBundle\Twig\Asset\PathPackage('', '', $this->get('assets.context'));
    }

    /*
     * Gets the 'authentication_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\Service\Common\LoginListener A Topxia\Service\Common\LoginListener instance
     */
    protected function getAuthenticationHandlerService()
    {
        return $this->services['authentication_handler'] = new \Topxia\Service\Common\LoginListener();
    }

    /*
     * Gets the 'bazinga.jstranslation.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Controller\Controller A Bazinga\Bundle\JsTranslationBundle\Controller\Controller instance
     */
    protected function getBazinga_Jstranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.jstranslation.controller'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Controller\Controller($this->get('translator.default'), $this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), (__DIR__.'/bazinga-js-translation'), false, 'en', 'messages', '86400');

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'bazinga.jstranslation.translation_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper A Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper instance
     */
    protected function getBazinga_Jstranslation_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.jstranslation.translation_dumper'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper($this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), $this->get('router'), $this->get('filesystem'), 'en', 'messages', array(), array());

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'bazinga.jstranslation.translation_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder A Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder instance
     */
    protected function getBazinga_Jstranslation_TranslationFinderService()
    {
        return $this->services['bazinga.jstranslation.translation_finder'] = new \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder($this->get('kernel'));
    }

    /*
     * Gets the 'biz' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\Biz\Framework\Context\Biz A Codeages\Biz\Framework\Context\Biz instance
     */
    protected function getBizService()
    {
        return $this->services['biz'] = new \Codeages\Biz\Framework\Context\Biz(array('debug' => false, 'db.options' => array('dbname' => 'jx_zilp', 'user' => 'root', 'password' => 'root', 'host' => '127.0.0.1', 'port' => 3306, 'driver' => 'pdo_mysql', 'charset' => 'UTF8'), 'root_directory' => ($this->targetDirs[2].'/../'), 'cache_directory' => __DIR__, 'log_directory' => ($this->targetDirs[2].'\\logs'), 'plugin.directory' => ($this->targetDirs[2].'/../plugins'), 'plugin.config_file' => ($this->targetDirs[2].'/config/plugin_installed.php')));
    }

    /*
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /*
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('codeages_plugin.theme.templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array(($this->targetDirs[2].'/../web/customize') => 'customize', ($this->targetDirs[2].'/../src/Topxia/WebBundle/Resources/views') => 'topxiaweb', ($this->targetDirs[2].'/../web/themes') => 'theme', ($this->targetDirs[2].'/../') => 'root')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array(($this->targetDirs[2].'/../web/customize') => 'customize', ($this->targetDirs[2].'/../src/Topxia/WebBundle/Resources/views') => 'topxiaweb', ($this->targetDirs[2].'/../web/themes') => 'theme', ($this->targetDirs[2].'/../') => 'root')))));
    }

    /*
     * Gets the 'codeages_plugin.dict_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\PluginBundle\System\DictCollector A Codeages\PluginBundle\System\DictCollector instance
     */
    protected function getCodeagesPlugin_DictCollectorService()
    {
        return $this->services['codeages_plugin.dict_collector'] = new \Codeages\PluginBundle\System\DictCollector(array(0 => ($this->targetDirs[3].'\\src\\Topxia\\WebBundle/Resources/config/dict.yml')), __DIR__, false);
    }

    /*
     * Gets the 'codeages_plugin.dict_twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\PluginBundle\Twig\DictExtension A Codeages\PluginBundle\Twig\DictExtension instance
     */
    protected function getCodeagesPlugin_DictTwigExtensionService()
    {
        return $this->services['codeages_plugin.dict_twig_extension'] = new \Codeages\PluginBundle\Twig\DictExtension($this->get('codeages_plugin.dict_collector'));
    }

    /*
     * Gets the 'codeages_plugin.slot_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\PluginBundle\System\Slot\SlotInjectionCollector A Codeages\PluginBundle\System\Slot\SlotInjectionCollector instance
     */
    protected function getCodeagesPlugin_SlotCollectorService()
    {
        return $this->services['codeages_plugin.slot_collector'] = new \Codeages\PluginBundle\System\Slot\SlotInjectionCollector(array(), __DIR__, false);
    }

    /*
     * Gets the 'codeages_plugin.slot_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\PluginBundle\System\Slot\SlotManager A Codeages\PluginBundle\System\Slot\SlotManager instance
     */
    protected function getCodeagesPlugin_SlotManagerService()
    {
        return $this->services['codeages_plugin.slot_manager'] = new \Codeages\PluginBundle\System\Slot\SlotManager($this->get('codeages_plugin.slot_collector'), $this);
    }

    /*
     * Gets the 'codeages_plugin.theme.file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\PluginBundle\Locator\ThemeFileLocator A Codeages\PluginBundle\Locator\ThemeFileLocator instance
     */
    protected function getCodeagesPlugin_Theme_FileLocatorService()
    {
        return $this->services['codeages_plugin.theme.file_locator'] = new \Codeages\PluginBundle\Locator\ThemeFileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /*
     * Gets the 'codeages_plugin.theme.templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getCodeagesPlugin_Theme_Templating_LocatorService()
    {
        return $this->services['codeages_plugin.theme.templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('codeages_plugin.theme.file_locator'), __DIR__);
    }

    /*
     * Gets the 'codeags_plugin.event.lazy_subscribers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Codeages\PluginBundle\Event\LazySubscribers A Codeages\PluginBundle\Event\LazySubscribers instance
     */
    protected function getCodeagsPlugin_Event_LazySubscribersService()
    {
        return $this->services['codeags_plugin.event.lazy_subscribers'] = new \Codeages\PluginBundle\Event\LazySubscribers($this);
    }

    /*
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }

    /*
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, NULL, true, NULL);
    }

    /*
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the 'doctrine.entity_manager.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\Setup A Doctrine\ORM\Tools\Setup instance
     */
    protected function getDoctrine_EntityManager_ConfigService()
    {
        $this->services['doctrine.entity_manager.config'] = $instance = \Doctrine\ORM\Tools\Setup::createConfiguration(true);

        $instance->setMetadataDriverImpl($this->get('doctrine.entity_manager.driver.yaml'));
        $instance->setEntityNamespaces(array('OAuth2ServerBundle' => 'OAuth2\\ServerBundle\\Entity'));

        return $instance;
    }

    /*
     * Gets the 'doctrine.entity_manager.driver.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver A Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver instance
     */
    protected function getDoctrine_EntityManager_Driver_YamlService()
    {
        return $this->services['doctrine.entity_manager.driver.yaml'] = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array(($this->targetDirs[2].'/../vendor/bshaffer/oauth2-server-bundle/OAuth2/ServerBundle/Resources/config/doctrine') => 'OAuth2\\ServerBundle\\Entity'));
    }

    /*
     * Gets the 'doctrine.orm.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->services['doctrine.orm.entity_manager'] = \Doctrine\ORM\EntityManager::create(array('driver' => 'pdo_mysql', 'user' => 'root', 'password' => 'root', 'dbname' => 'jx_zilp', 'host' => '127.0.0.1', 'port' => 3306), $this->get('doctrine.entity_manager.config'));
    }

    /*
     * Gets the 'endroid.qrcode.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension A Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension instance
     */
    protected function getEndroid_Qrcode_Twig_ExtensionService()
    {
        $this->services['endroid.qrcode.twig.extension'] = $instance = new \Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension();

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('security.interactive_login', array(0 => 'user.login_listener', 1 => 'onSecurityInteractivelogin'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'user.login_generate_notification_handler', 1 => 'onSecurityInteractivelogin'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'app.user_locale_listener', 1 => 'onInteractiveLogin'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'kernel.listener.ajax_exception_listener', 1 => 'onKernelException'), 255);
        $instance->addListenerService('kernel.request', array(0 => 'kernel.listener.kernel_request_listener', 1 => 'onKernelRequest'), 255);
        $instance->addListenerService('kernel.response', array(0 => 'kernel.listener.kernel_response_listener', 1 => 'onKernelResponse'), 255);
        $instance->addListenerService('kernel.request', array(0 => 'kernel.listener.user_login_token_listener', 1 => 'onGetUserLoginListener'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'kernel.controller.permission_listener', 1 => 'onKernelController'), 255);
        $instance->addListenerService('kernel.response', array(0 => 'kernel.response.permission_listener', 1 => 'onKernelResponse'), 255);
        $instance->addSubscriberService('app.locale_listener', 'Topxia\\WebBundle\\Listener\\LocaleListener');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');

        return $instance;
    }

    /*
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /*
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /*
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'default_category' => 'form.type.default_category', 'Topxia\\WebBundle\\Form\\Common\\DefaultCategoryType' => 'form.type.default_category', 'user_role' => 'form.type.user_role', 'Topxia\\WebBundle\\Form\\Common\\UserRoleType' => 'form.type.user_role', 'tags' => 'form.type.tags', 'Topxia\\WebBundle\\Form\\Common\\TagsType' => 'form.type.tags', 'gender' => 'form.type.gender', 'Topxia\\WebBundle\\Form\\Common\\GenderType' => 'form.type.gender'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator'))), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /*
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the 'form.type.default_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Form\Common\DefaultCategoryType A Topxia\WebBundle\Form\Common\DefaultCategoryType instance
     */
    protected function getForm_Type_DefaultCategoryService()
    {
        return $this->services['form.type.default_category'] = new \Topxia\WebBundle\Form\Common\DefaultCategoryType();
    }

    /*
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /*
     * Gets the 'form.type.gender' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Form\Common\GenderType A Topxia\WebBundle\Form\Common\GenderType instance
     */
    protected function getForm_Type_GenderService()
    {
        return $this->services['form.type.gender'] = new \Topxia\WebBundle\Form\Common\GenderType();
    }

    /*
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the 'form.type.tags' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Form\Common\TagsType A Topxia\WebBundle\Form\Common\TagsType instance
     */
    protected function getForm_Type_TagsService()
    {
        return $this->services['form.type.tags'] = new \Topxia\WebBundle\Form\Common\TagsType();
    }

    /*
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the 'form.type.user_role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Form\Common\UserRoleType A Topxia\WebBundle\Form\Common\UserRoleType instance
     */
    protected function getForm_Type_UserRoleService()
    {
        return $this->services['form.type.user_role'] = new \Topxia\WebBundle\Form\Common\UserRoleType();
    }

    /*
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /*
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /*
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /*
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator.default'), 'validators');
    }

    /*
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /*
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /*
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /*
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), false);
    }

    /*
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /*
     * Gets the 'kernel.controller.permission_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Permission\Listener\KernelControllerListener A Permission\Listener\KernelControllerListener instance
     */
    protected function getKernel_Controller_PermissionListenerService()
    {
        return $this->services['kernel.controller.permission_listener'] = new \Permission\Listener\KernelControllerListener($this, array(0 => '/^\\/admin/'));
    }

    /*
     * Gets the 'kernel.listener.ajax_exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Listener\AjaxExceptionListener A Topxia\WebBundle\Listener\AjaxExceptionListener instance
     */
    protected function getKernel_Listener_AjaxExceptionListenerService()
    {
        return $this->services['kernel.listener.ajax_exception_listener'] = new \Topxia\WebBundle\Listener\AjaxExceptionListener($this);
    }

    /*
     * Gets the 'kernel.listener.kernel_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Listener\KernelRequestListener A Topxia\WebBundle\Listener\KernelRequestListener instance
     */
    protected function getKernel_Listener_KernelRequestListenerService()
    {
        return $this->services['kernel.listener.kernel_request_listener'] = new \Topxia\WebBundle\Listener\KernelRequestListener($this);
    }

    /*
     * Gets the 'kernel.listener.kernel_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Listener\KernelResponseListener A Topxia\WebBundle\Listener\KernelResponseListener instance
     */
    protected function getKernel_Listener_KernelResponseListenerService()
    {
        return $this->services['kernel.listener.kernel_response_listener'] = new \Topxia\WebBundle\Listener\KernelResponseListener($this);
    }

    /*
     * Gets the 'kernel.listener.user_login_token_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Listener\UserLoginTokenListener A Topxia\WebBundle\Listener\UserLoginTokenListener instance
     */
    protected function getKernel_Listener_UserLoginTokenListenerService()
    {
        return $this->services['kernel.listener.user_login_token_listener'] = new \Topxia\WebBundle\Listener\UserLoginTokenListener($this);
    }

    /*
     * Gets the 'kernel.response.permission_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Permission\Listener\KernelResponseListener A Permission\Listener\KernelResponseListener instance
     */
    protected function getKernel_Response_PermissionListenerService()
    {
        return $this->services['kernel.response.permission_listener'] = new \Permission\Listener\KernelResponseListener($this);
    }

    /*
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'zh_CN', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);
    }

    /*
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);
    }

    /*
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'oauth2.client_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Manager\ClientManager A OAuth2\ServerBundle\Manager\ClientManager instance
     */
    protected function getOauth2_ClientManagerService()
    {
        return $this->services['oauth2.client_manager'] = new \OAuth2\ServerBundle\Manager\ClientManager($this->get('doctrine.orm.entity_manager'), $this->get('oauth2.scope_manager'));
    }

    /*
     * Gets the 'oauth2.grant_type.authorization_code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\GrantType\AuthorizationCode A OAuth2\GrantType\AuthorizationCode instance
     */
    protected function getOauth2_GrantType_AuthorizationCodeService()
    {
        return $this->services['oauth2.grant_type.authorization_code'] = new \OAuth2\GrantType\AuthorizationCode($this->get('oauth2.storage.authorization_code'));
    }

    /*
     * Gets the 'oauth2.grant_type.client_credentials' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\GrantType\ClientCredentials A OAuth2\GrantType\ClientCredentials instance
     */
    protected function getOauth2_GrantType_ClientCredentialsService()
    {
        return $this->services['oauth2.grant_type.client_credentials'] = new \OAuth2\GrantType\ClientCredentials($this->get('oauth2.storage.client_credentials'));
    }

    /*
     * Gets the 'oauth2.grant_type.refresh_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\GrantType\RefreshToken A OAuth2\GrantType\RefreshToken instance
     */
    protected function getOauth2_GrantType_RefreshTokenService()
    {
        return $this->services['oauth2.grant_type.refresh_token'] = new \OAuth2\GrantType\RefreshToken($this->get('oauth2.storage.refresh_token'), array('always_issue_new_refresh_token' => false));
    }

    /*
     * Gets the 'oauth2.grant_type.user_credentials' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\GrantType\UserCredentials A OAuth2\GrantType\UserCredentials instance
     */
    protected function getOauth2_GrantType_UserCredentialsService()
    {
        return $this->services['oauth2.grant_type.user_credentials'] = new \OAuth2\GrantType\UserCredentials($this->get('oauth2.storage.user_credentials'));
    }

    /*
     * Gets the 'oauth2.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\HttpFoundationBridge\Request A OAuth2\HttpFoundationBridge\Request instance
     *
     * @throws InactiveScopeException when the 'oauth2.request' service is requested while the 'request' scope is not active
     */
    protected function getOauth2_RequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('oauth2.request', 'request');
        }

        return $this->services['oauth2.request'] = $this->scopedServices['request']['oauth2.request'] = \OAuth2\HttpFoundationBridge\Request::createFromRequest($this->get('request'));
    }

    /*
     * Gets the 'oauth2.response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\HttpFoundationBridge\Response A OAuth2\HttpFoundationBridge\Response instance
     */
    protected function getOauth2_ResponseService()
    {
        return $this->services['oauth2.response'] = new \OAuth2\HttpFoundationBridge\Response();
    }

    /*
     * Gets the 'oauth2.scope_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Manager\ScopeManager A OAuth2\ServerBundle\Manager\ScopeManager instance
     */
    protected function getOauth2_ScopeManagerService()
    {
        return $this->services['oauth2.scope_manager'] = new \OAuth2\ServerBundle\Manager\ScopeManager($this->get('doctrine.orm.entity_manager'));
    }

    /*
     * Gets the 'oauth2.server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\Server A OAuth2\Server instance
     */
    protected function getOauth2_ServerService()
    {
        return $this->services['oauth2.server'] = new \OAuth2\Server(array(0 => $this->get('oauth2.storage.client_credentials'), 1 => $this->get('oauth2.storage.access_token'), 2 => $this->get('oauth2.storage.authorization_code'), 3 => $this->get('oauth2.storage.user_credentials'), 4 => $this->get('oauth2.storage.refresh_token'), 5 => $this->get('oauth2.storage.scope')));
    }

    /*
     * Gets the 'oauth2.storage.access_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Storage\AccessToken A OAuth2\ServerBundle\Storage\AccessToken instance
     */
    protected function getOauth2_Storage_AccessTokenService()
    {
        return $this->services['oauth2.storage.access_token'] = new \OAuth2\ServerBundle\Storage\AccessToken($this->get('doctrine.orm.entity_manager'));
    }

    /*
     * Gets the 'oauth2.storage.authorization_code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Storage\AuthorizationCode A OAuth2\ServerBundle\Storage\AuthorizationCode instance
     */
    protected function getOauth2_Storage_AuthorizationCodeService()
    {
        return $this->services['oauth2.storage.authorization_code'] = new \OAuth2\ServerBundle\Storage\AuthorizationCode($this->get('doctrine.orm.entity_manager'));
    }

    /*
     * Gets the 'oauth2.storage.client_credentials' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Storage\ClientCredentials A OAuth2\ServerBundle\Storage\ClientCredentials instance
     */
    protected function getOauth2_Storage_ClientCredentialsService()
    {
        return $this->services['oauth2.storage.client_credentials'] = new \OAuth2\ServerBundle\Storage\ClientCredentials($this->get('doctrine.orm.entity_manager'));
    }

    /*
     * Gets the 'oauth2.storage.refresh_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Storage\RefreshToken A OAuth2\ServerBundle\Storage\RefreshToken instance
     */
    protected function getOauth2_Storage_RefreshTokenService()
    {
        return $this->services['oauth2.storage.refresh_token'] = new \OAuth2\ServerBundle\Storage\RefreshToken($this->get('doctrine.orm.entity_manager'));
    }

    /*
     * Gets the 'oauth2.storage.scope' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Storage\Scope A OAuth2\ServerBundle\Storage\Scope instance
     */
    protected function getOauth2_Storage_ScopeService()
    {
        return $this->services['oauth2.storage.scope'] = new \OAuth2\ServerBundle\Storage\Scope($this->get('doctrine.orm.entity_manager'), $this->get('oauth2.scope_manager'));
    }

    /*
     * Gets the 'oauth2.storage.user_credentials' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\Storage\UserCredentials A OAuth2\ServerBundle\Storage\UserCredentials instance
     */
    protected function getOauth2_Storage_UserCredentialsService()
    {
        return $this->services['oauth2.storage.user_credentials'] = new \OAuth2\ServerBundle\Storage\UserCredentials($this->get('doctrine.orm.entity_manager'), $this->get('oauth2.user_provider'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'oauth2.user_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuth2\ServerBundle\User\OAuth2UserProvider A OAuth2\ServerBundle\User\OAuth2UserProvider instance
     */
    protected function getOauth2_UserProviderService()
    {
        return $this->services['oauth2.user_provider'] = new \OAuth2\ServerBundle\User\OAuth2UserProvider($this->get('doctrine.orm.entity_manager'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'permission.twig.permission_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Permission\PermissionBundle\TwigExtension\PermissionExtension A Permission\PermissionBundle\TwigExtension\PermissionExtension instance
     */
    protected function getPermission_Twig_PermissionExtensionService()
    {
        return $this->services['permission.twig.permission_extension'] = new \Permission\PermissionBundle\TwigExtension\PermissionExtension($this);
    }

    /*
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /*
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Permission\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /*
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader($this->get('routing.loader.yml'));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /*
     * Gets the 'routing.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Permission\Loader\YamlFileLoader A Permission\Loader\YamlFileLoader instance
     */
    protected function getRouting_Loader_YmlService()
    {
        return $this->services['routing.loader.yml'] = new \Permission\Loader\YamlFileLoader($this->get('file_locator'));
    }

    /*
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /*
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /*
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /*
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Topxia\\Service\\User\\CurrentUser' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha256', 1 => true, 2 => 5000))));
    }

    /*
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('/.*'))), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /*
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('topxia.user_provider');
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/task');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/my');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/settings');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/message');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/course');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/user');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/app');

        $o = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/setting');

        $p = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logs');

        $q = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/upgrade');

        $r = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/optimize');

        $s = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');

        $t = new \Symfony\Component\HttpFoundation\RequestMatcher('/.*');

        $u = new \Symfony\Component\Security\Http\AccessMap();
        $u->add($h, array(0 => 'ROLE_USER'), NULL);
        $u->add($i, array(0 => 'ROLE_USER'), NULL);
        $u->add($j, array(0 => 'ROLE_USER'), NULL);
        $u->add($k, array(0 => 'ROLE_USER'), NULL);
        $u->add($l, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($m, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($n, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($o, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($p, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($q, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($r, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($s, array(0 => 'ROLE_BACKEND'), NULL);
        $u->add($t, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);

        $v = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $w = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $c), 'qyjszzvk6u8gwosg8ss0g04w8w8gc88', 'main', array('lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $a);

        $x = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $v, new \Topxia\WebBundle\Handler\LogoutSuccessHandler($v, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout'));
        $x->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $x->addHandler($w);

        $y = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');

        $z = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, $y, $v, 'main', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Topxia\WebBundle\Handler\AuthenticationSuccessHandler($v, array()), array('login_path' => 'login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path'), 'main'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Topxia\WebBundle\Handler\AuthenticationFailureHandler($f, $v, array(), $a), array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path')), array('check_path' => 'login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $d, NULL);
        $z->setRememberMeServices($w);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($u, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $c), 'main', $a, $d), 2 => $x, 3 => $z, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($b, $w, $g, $a, $d, true, $y), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '591964b34eef88.71755224', $a, $g), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $u, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $v, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $v, 'login', false), NULL, NULL, $a, false));
    }

    /*
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /*
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the 'security.user_checker.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /*
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(NULL);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /*
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the 'session.handler.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SessionHandlerInterface A SessionHandlerInterface instance
     */
    protected function getSession_Handler_FactoryService()
    {
        return $this->services['session.handler.factory'] = \Topxia\Service\Common\SessionHandlerFactory::getSessionHandler($this);
    }

    /*
     * Gets the 'session.handler.pdo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Handler\UserPdoSessionHandler A Topxia\WebBundle\Handler\UserPdoSessionHandler instance
     */
    protected function getSession_Handler_PdoService()
    {
        return $this->services['session.handler.pdo'] = new \Topxia\WebBundle\Handler\UserPdoSessionHandler($this->get('session.handler.pdo.connection'), array('db_table' => 'sessions', 'db_id_col' => 'sess_id', 'db_data_col' => 'sess_data', 'db_time_col' => 'sess_time', 'db_lifetime_col' => 'sess_lifetime', 'db_user_id_col' => 'sess_user_id'), $this->get('security.token_storage'));
    }

    /*
     * Gets the 'session.handler.pdo.connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PDO A PDO instance
     */
    protected function getSession_Handler_Pdo_ConnectionService()
    {
        $this->services['session.handler.pdo.connection'] = $instance = new \PDO('mysql:host=127.0.0.1;port=3306;dbname=jx_zilp', 'root', 'root');

        $instance->setAttribute(3, 2);

        return $instance;
    }

    /*
     * Gets the 'session.handler.redis' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Handler\RedisSessionHandler A Topxia\WebBundle\Handler\RedisSessionHandler instance
     */
    protected function getSession_Handler_RedisService()
    {
        return $this->services['session.handler.redis'] = new \Topxia\WebBundle\Handler\RedisSessionHandler($this->get('session.handler.redis.factory'), $this->get('security.token_storage'));
    }

    /*
     * Gets the 'session.handler.redis.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\Service\Common\Redis\RedisFactory A Topxia\Service\Common\Redis\RedisFactory instance
     */
    protected function getSession_Handler_Redis_FactoryService()
    {
        return $this->services['session.handler.redis.factory'] = \Topxia\Service\Common\Redis\RedisFactory::instance($this);
    }

    /*
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler.factory'), $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler.factory'), $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /*
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /*
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('codeages_plugin.theme.templating.locator'));
    }

    /*
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /*
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /*
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /*
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('codeages_plugin.theme.templating.locator'));
    }

    /*
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'topxia.data_dict.gender' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\DataDict\GenderDict A Topxia\WebBundle\DataDict\GenderDict instance
     */
    protected function getTopxia_DataDict_GenderService()
    {
        return $this->services['topxia.data_dict.gender'] = new \Topxia\WebBundle\DataDict\GenderDict();
    }

    /*
     * Gets the 'topxia.data_dict.user_role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\DataDict\UserRoleDict A Topxia\WebBundle\DataDict\UserRoleDict instance
     */
    protected function getTopxia_DataDict_UserRoleService()
    {
        return $this->services['topxia.data_dict.user_role'] = new \Topxia\WebBundle\DataDict\UserRoleDict();
    }

    /*
     * Gets the 'topxia.target_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Util\TargetHelper A Topxia\WebBundle\Util\TargetHelper instance
     */
    protected function getTopxia_TargetHelperService()
    {
        return $this->services['topxia.target_helper'] = new \Topxia\WebBundle\Util\TargetHelper($this);
    }

    /*
     * Gets the 'topxia.timemachine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\Common\TimeMachine A Topxia\Common\TimeMachine instance
     */
    protected function getTopxia_TimemachineService()
    {
        return $this->services['topxia.timemachine'] = new \Topxia\Common\TimeMachine('Asia/Shanghai');
    }

    /*
     * Gets the 'topxia.twig.block_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\BlockExtension A Topxia\WebBundle\Twig\Extension\BlockExtension instance
     */
    protected function getTopxia_Twig_BlockExtensionService()
    {
        return $this->services['topxia.twig.block_extension'] = new \Topxia\WebBundle\Twig\Extension\BlockExtension($this);
    }

    /*
     * Gets the 'topxia.twig.cache_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Asm89\Twig\CacheExtension\Extension A Asm89\Twig\CacheExtension\Extension instance
     */
    protected function getTopxia_Twig_CacheExtensionService()
    {
        return $this->services['topxia.twig.cache_extension'] = new \Asm89\Twig\CacheExtension\Extension($this->get('topxia.twig.cache_strategy'));
    }

    /*
     * Gets the 'topxia.twig.cache_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Asm89\Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter A Asm89\Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter instance
     */
    protected function getTopxia_Twig_CacheProviderService()
    {
        return $this->services['topxia.twig.cache_provider'] = new \Asm89\Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter($this->get('topxia.twig.file_cache'));
    }

    /*
     * Gets the 'topxia.twig.cache_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\Service\Common\LifetimeCacheStrategy A Topxia\Service\Common\LifetimeCacheStrategy instance
     */
    protected function getTopxia_Twig_CacheStrategyService()
    {
        return $this->services['topxia.twig.cache_strategy'] = new \Topxia\Service\Common\LifetimeCacheStrategy($this->get('topxia.twig.cache_provider'));
    }

    /*
     * Gets the 'topxia.twig.data_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\DataExtension A Topxia\WebBundle\Twig\Extension\DataExtension instance
     */
    protected function getTopxia_Twig_DataExtensionService()
    {
        return $this->services['topxia.twig.data_extension'] = new \Topxia\WebBundle\Twig\Extension\DataExtension();
    }

    /*
     * Gets the 'topxia.twig.dictionary_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\DictionaryExtension A Topxia\WebBundle\Twig\Extension\DictionaryExtension instance
     */
    protected function getTopxia_Twig_DictionaryExtensionService()
    {
        return $this->services['topxia.twig.dictionary_extension'] = new \Topxia\WebBundle\Twig\Extension\DictionaryExtension();
    }

    /*
     * Gets the 'topxia.twig.file_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\Service\Common\FilesystemCache A Topxia\Service\Common\FilesystemCache instance
     */
    protected function getTopxia_Twig_FileCacheService()
    {
        return $this->services['topxia.twig.file_cache'] = new \Topxia\Service\Common\FilesystemCache($this);
    }

    /*
     * Gets the 'topxia.twig.html_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\HtmlExtension A Topxia\WebBundle\Twig\Extension\HtmlExtension instance
     */
    protected function getTopxia_Twig_HtmlExtensionService()
    {
        return $this->services['topxia.twig.html_extension'] = new \Topxia\WebBundle\Twig\Extension\HtmlExtension($this);
    }

    /*
     * Gets the 'topxia.twig.order_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\OrderExtension A Topxia\WebBundle\Twig\Extension\OrderExtension instance
     */
    protected function getTopxia_Twig_OrderExtensionService()
    {
        return $this->services['topxia.twig.order_extension'] = new \Topxia\WebBundle\Twig\Extension\OrderExtension($this);
    }

    /*
     * Gets the 'topxia.twig.theme_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\ThemeExtension A Topxia\WebBundle\Twig\Extension\ThemeExtension instance
     */
    protected function getTopxia_Twig_ThemeExtensionService()
    {
        return $this->services['topxia.twig.theme_extension'] = new \Topxia\WebBundle\Twig\Extension\ThemeExtension($this);
    }

    /*
     * Gets the 'topxia.twig.uploader_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\UploaderExtension A Topxia\WebBundle\Twig\Extension\UploaderExtension instance
     */
    protected function getTopxia_Twig_UploaderExtensionService()
    {
        return $this->services['topxia.twig.uploader_extension'] = new \Topxia\WebBundle\Twig\Extension\UploaderExtension($this);
    }

    /*
     * Gets the 'topxia.twig.web_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Twig\Extension\WebExtension A Topxia\WebBundle\Twig\Extension\WebExtension instance
     */
    protected function getTopxia_Twig_WebExtensionService()
    {
        return $this->services['topxia.twig.web_extension'] = new \Topxia\WebBundle\Twig\Extension\WebExtension($this);
    }

    /*
     * Gets the 'topxia.user_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\Service\User\UserProvider A Topxia\Service\User\UserProvider instance
     */
    protected function getTopxia_UserProviderService()
    {
        return $this->services['topxia.user_provider'] = new \Topxia\Service\User\UserProvider($this);
    }

    /*
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /*
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /*
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[3].'\\src\\Topxia\\WebBundle/Resources/translations\\messages.en.yml'), 4 => ($this->targetDirs[3].'\\src\\Topxia\\AdminBundle/Resources/translations\\messages.en.yml'), 5 => ($this->targetDirs[3].'\\src\\Classroom\\ClassroomBundle/Resources/translations\\messages.en.yml'), 6 => ($this->targetDirs[3].'\\src\\MaterialLib\\MaterialLibBundle/Resources/translations\\messages.en.yml'), 7 => ($this->targetDirs[3].'\\src\\SensitiveWord\\SensitiveWordBundle/Resources/translations\\messages.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\src\\Org\\OrgBundle/Resources/translations\\messages.fr.xlf'), 4 => ($this->targetDirs[3].'\\src\\Custom\\AdminBundle/Resources/translations\\messages.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.th.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'\\src\\Topxia\\WebBundle/Resources/translations\\messages.zh_CN.yml'), 4 => ($this->targetDirs[2].'/Resources/translations\\messages.zh_CN.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ua.xlf')), 'ug_CN' => array(0 => ($this->targetDirs[3].'\\src\\Topxia\\WebBundle/Resources/translations\\messages.ug_CN.yml')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'zh_CN'));

        return $instance;
    }

    /*
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }

    /*
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('request_stack');
        $b = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('fragment.handler');

        $d = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, $b);

        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($a);
        }
        $e->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'paths' => array(($this->targetDirs[2].'/../web/customize') => 'customize', ($this->targetDirs[2].'/../src/Topxia/WebBundle/Resources/views') => 'topxiaweb', ($this->targetDirs[2].'/../web/themes') => 'theme', ($this->targetDirs[2].'/../') => 'root'), 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension($this->get('topxia.twig.web_extension'));
        $instance->addExtension($this->get('topxia.twig.html_extension'));
        $instance->addExtension($this->get('topxia.twig.dictionary_extension'));
        $instance->addExtension($this->get('topxia.twig.data_extension'));
        $instance->addExtension($this->get('topxia.twig.block_extension'));
        $instance->addExtension($this->get('topxia.twig.uploader_extension'));
        $instance->addExtension($this->get('topxia.twig.theme_extension'));
        $instance->addExtension($this->get('topxia.twig.order_extension'));
        $instance->addExtension($this->get('topxia.twig.cache_extension'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $d));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($c));
        $instance->addExtension($d);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension($this->get('endroid.qrcode.twig.extension'));
        $instance->addExtension($this->get('permission.twig.permission_extension'));
        $instance->addExtension(new \Codeages\PluginBundle\Twig\HtmlExtension());
        $instance->addExtension(new \Codeages\PluginBundle\Twig\SlotExtension($this->get('codeages_plugin.slot_manager')));
        $instance->addExtension($this->get('codeages_plugin.dict_twig_extension'));
        $instance->addGlobal('app', $e);
        $instance->addGlobal('disabled_features', array());
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /*
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }

    /*
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /*
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('codeages_plugin.theme.templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[2].'/../web/customize'), 'customize');
        $instance->addPath(($this->targetDirs[2].'/../src/Topxia/WebBundle/Resources/views'), 'topxiaweb');
        $instance->addPath(($this->targetDirs[2].'/../web/themes'), 'theme');
        $instance->addPath(($this->targetDirs[2].'/../'), 'root');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[2].'/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\src\\Topxia\\WebBundle/Resources/views'), 'TopxiaWeb');
        $instance->addPath(($this->targetDirs[3].'\\src\\Topxia\\AdminBundle/Resources/views'), 'TopxiaAdmin');
        $instance->addPath(($this->targetDirs[3].'\\src\\Topxia\\MobileBundle/Resources/views'), 'TopxiaMobile');
        $instance->addPath(($this->targetDirs[3].'\\src\\Topxia\\MobileBundleV2/Resources/views'), 'TopxiaMobileBundleV2');
        $instance->addPath(($this->targetDirs[3].'\\src\\Classroom\\ClassroomBundle/Resources/views'), 'Classroom');
        $instance->addPath(($this->targetDirs[3].'\\src\\MaterialLib\\MaterialLibBundle/Resources/views'), 'MaterialLib');
        $instance->addPath(($this->targetDirs[3].'\\src\\SensitiveWord\\SensitiveWordBundle/Resources/views'), 'SensitiveWord');
        $instance->addPath(($this->targetDirs[3].'\\src\\Org\\OrgBundle/Resources/views'), 'Org');
        $instance->addPath(($this->targetDirs[3].'\\src\\Permission\\PermissionBundle/Resources/views'), 'Permission');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\willdurand\\js-translation-bundle\\Bazinga\\Bundle\\JsTranslationBundle/Resources/views'), 'BazingaJsTranslation');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\bshaffer\\oauth2-server-bundle\\OAuth2\\ServerBundle/Resources/views'), 'OAuth2Server');
        $instance->addPath(($this->targetDirs[3].'\\src\\Custom\\AdminBundle/Resources/views'), 'CustomAdmin');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /*
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('qyjszzvk6u8gwosg8ss0g04w8w8gc88');
    }

    /*
     * Gets the 'user.login_generate_notification_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Handler\GenerateNotificationHandler A Topxia\WebBundle\Handler\GenerateNotificationHandler instance
     */
    protected function getUser_LoginGenerateNotificationHandlerService()
    {
        return $this->services['user.login_generate_notification_handler'] = new \Topxia\WebBundle\Handler\GenerateNotificationHandler($this);
    }

    /*
     * Gets the 'user.login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Topxia\WebBundle\Handler\LoginSuccessHandler A Topxia\WebBundle\Handler\LoginSuccessHandler instance
     */
    protected function getUser_LoginListenerService()
    {
        return $this->services['user.login_listener'] = new \Topxia\WebBundle\Handler\LoginSuccessHandler($this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /*
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array());

        return $instance;
    }

    /*
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /*
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /*
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = $this->get('security.role_hierarchy');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Permission\PermissionBundle\Security\AdminVoter(), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 3 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a)));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.user_checker.main');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Topxia\WebBundle\Handler\AuthenticationProvider($this->get('topxia.user_provider'), $a, 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($a, 'qyjszzvk6u8gwosg8ss0g04w8w8gc88', 'main'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('591964b34eef88.71755224')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /*
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_TEACHER' => array(0 => 'ROLE_USER'), 'ROLE_BACKEND' => array(0 => 'ROLE_USER'), 'ROLE_ADMIN' => array(0 => 'ROLE_TEACHER', 1 => 'ROLE_BACKEND'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /*
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Codeages\\PluginBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'EndroidQrCodeBundle' => 'Endroid\\Bundle\\QrCodeBundle\\EndroidQrCodeBundle',
                'TopxiaWebBundle' => 'Topxia\\WebBundle\\TopxiaWebBundle',
                'TopxiaAdminBundle' => 'Topxia\\AdminBundle\\TopxiaAdminBundle',
                'TopxiaMobileBundle' => 'Topxia\\MobileBundle\\TopxiaMobileBundle',
                'TopxiaMobileBundleV2' => 'Topxia\\MobileBundleV2\\TopxiaMobileBundleV2',
                'ClassroomBundle' => 'Classroom\\ClassroomBundle\\ClassroomBundle',
                'MaterialLibBundle' => 'MaterialLib\\MaterialLibBundle\\MaterialLibBundle',
                'SensitiveWordBundle' => 'SensitiveWord\\SensitiveWordBundle\\SensitiveWordBundle',
                'OrgBundle' => 'Org\\OrgBundle\\OrgBundle',
                'PermissionBundle' => 'Permission\\PermissionBundle\\PermissionBundle',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'OAuth2ServerBundle' => 'OAuth2\\ServerBundle\\OAuth2ServerBundle',
                'CodeagesPluginBundle' => 'Codeages\\PluginBundle\\CodeagesPluginBundle',
                'CustomWebBundle' => 'Custom\\WebBundle\\CustomWebBundle',
                'CustomAdminBundle' => 'Custom\\AdminBundle\\CustomAdminBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'role_hierarchy' => array(
                'ROLE_TEACHER' => 'ROLE_USER',
                'ROLE_BACKEND' => 'ROLE_USER',
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_TEACHER',
                    1 => 'ROLE_BACKEND',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'register_fileds' => array(
                'email' => 'required',
                'nickname' => 'required',
                'password' => 'required',
                'repassword' => 'required',
            ),
            'disabled_features' => array(

            ),
            'cloud_convertor' => array(
                'HLSVideo' => array(
                    'video' => array(
                        'low' => array(
                            0 => '240k',
                            1 => '440k',
                            2 => '640k',
                        ),
                        'normal' => array(
                            0 => '440k',
                            1 => '640k',
                            2 => '1000k',
                        ),
                        'high' => array(
                            0 => '640k',
                            1 => '1000k',
                            2 => '1500k',
                        ),
                    ),
                    'audio' => array(
                        'low' => array(
                            0 => '32k',
                            1 => '48k',
                            2 => '64k',
                        ),
                        'normal' => array(
                            0 => '48k',
                            1 => '64k',
                            2 => '96k',
                        ),
                        'high' => array(
                            0 => '64k',
                            1 => '96k',
                            2 => '128k',
                        ),
                    ),
                    'segtime' => 10,
                ),
                'HLSAudio' => array(
                    'low' => '64k',
                    'normal' => '96k',
                    'high' => '128k',
                ),
                'audio' => array(
                    'shd' => 'mp3',
                ),
                'ppt' => array(
                    'density' => 150,
                    'quality' => 80,
                    'resize' => 1200,
                ),
            ),
            'cloud_client' => array(
                'arguments' => array(
                    'videoCommands' => array(
                        'avthumb/m3u8/segtime/10/preset/video_240k' => 'sd',
                        'avthumb/m3u8/segtime/10/preset/video_440k' => 'hd',
                        'avthumb/m3u8/segtime/10/preset/video_640k' => 'shd',
                    ),
                    'audioCommands' => array(
                        'avthumb/mp3' => 'shd',
                    ),
                    'pptCommands' => array(
                        'odconv/pdf' => 'pdf',
                    ),
                ),
            ),
            'cdn_path' => 'http://cdn.staticfile.org',
            'cloud.video_player' => 'http://cdn.staticfile.org/GrindPlayerCN/1.0.2/GrindPlayer.swf',
            'cloud.video_player_watermark_plugin' => 'http://cdn.staticfile.org/GrindPlayerCN/1.0.2/Watermake-1.0.3.swf',
            'cloud.video_player_fingerprint_plugin' => 'http://cdn.staticfile.org/GrindPlayerCN/1.0.2/Fingerprint-1.0.1.swf',
            'keyword.filter' => 'Topxia\\Service\\Common\\EsKeywordFilter',
            'route_white_list' => array(
                0 => '/passport/notify',
                1 => '/oauth/v2/token',
                2 => '/uploader/upload_callback',
                3 => '/uploader/process_callback',
                4 => '/coin/pay/return/alipay',
                5 => '/coin/pay/notify/alipay',
                6 => '/coin/pay/notify/wxpay',
                7 => '/pay/center/pay/alipay/return',
                8 => '/pay/center/pay/wxpay/notify',
                9 => '/pay/center/pay/alipay/notify',
                10 => '/live/verify',
                11 => '/course/order/pay/alipay/notify',
                12 => '/vip/pay_notify/alipay',
                13 => '/uploadfile/upload',
                14 => '/uploadfile/cloud_convertcallback',
                15 => '/uploadfile/cloud_convertcallback2',
                16 => '/uploadfile/cloud_convertcallback3',
                17 => '/uploadfile/cloud_convertheadleadercallback',
                18 => '/disk/upload',
                19 => '/file/upload',
                20 => '/editor/upload',
                21 => '/disk/convert/callback',
                22 => '/partner/phpwind/api/notify',
                23 => '/partner/discuz/api/notify',
                24 => '/live/auth',
                25 => '/edu_cloud/sms_callback',
                26 => '/bddServer/callback',
                27 => '/pay/center/pay/llpay/return',
                28 => '/pay/center/pay/llpay/notify',
            ),
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => 3306,
            'database_name' => 'jx_zilp',
            'database_user' => 'root',
            'database_password' => 'root',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'zh_CN',
            'secret' => 'qyjszzvk6u8gwosg8ss0g04w8w8gc88',
            'webpack_base_url' => 'http://jxdl.szzlpcm.com',
            'user_partner' => 'none',
            'biz_config' => array(
                'debug' => false,
                'db.options' => array(
                    'dbname' => 'jx_zilp',
                    'user' => 'root',
                    'password' => 'root',
                    'host' => '127.0.0.1',
                    'port' => 3306,
                    'driver' => 'pdo_mysql',
                    'charset' => 'UTF8',
                ),
                'root_directory' => ($this->targetDirs[2].'/../'),
                'cache_directory' => __DIR__,
                'log_directory' => ($this->targetDirs[2].'\\logs'),
                'plugin.directory' => ($this->targetDirs[2].'/../plugins'),
                'plugin.config_file' => ($this->targetDirs[2].'/config/plugin_installed.php'),
            ),
            'doctrine.config_paths' => array(
                'E:\\WWW\\zilp\\app/../vendor/bshaffer/oauth2-server-bundle/OAuth2/ServerBundle/Resources/config/doctrine' => 'OAuth2\\ServerBundle\\Entity',
            ),
            'session.handler.pdo.options' => array(
                'db_table' => 'sessions',
                'db_id_col' => 'sess_id',
                'db_data_col' => 'sess_data',
                'db_time_col' => 'sess_time',
                'db_lifetime_col' => 'sess_lifetime',
                'db_user_id_col' => 'sess_user_id',
            ),
            'topxia.disk.local_directory' => ($this->targetDirs[2].'/data/udisk'),
            'topxia.disk.cloud_video_fop' => 'avthumb/mp4/r/30/vb/512k/vcodec/libx264/ar/22050/ab/64k/acodec/libfaac',
            'topxia.disk.upgrade_dir' => ($this->targetDirs[2].'/data/upgrade'),
            'topxia.disk.update_dir' => ($this->targetDirs[2].'/data/upgrade'),
            'topxia.disk.backup_dir' => ($this->targetDirs[2].'/data/backup'),
            'topxia.upload.public_directory' => ($this->targetDirs[2].'/../web/files'),
            'topxia.upload.public_url_path' => '/files',
            'topxia.upload.private_directory' => ($this->targetDirs[2].'/data/private_files'),
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'qyjszzvk6u8gwosg8ss0g04w8w8gc88',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'zh_CN',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Permission\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing.yml'),
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => 0,
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(
                'ROLE_TEACHER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_BACKEND' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_TEACHER',
                    1 => 'ROLE_BACKEND',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Topxia\\WebBundle\\Handler\\AuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'endroid_qrcode.size' => 200,
            'theme_jianmo_name' => '简墨',
            'theme_jianmo_default' => array(
                'maincolor' => 'default',
                'navigationcolor' => 'default',
                'blocks' => array(
                    'left' => array(
                        0 => array(
                            'title' => '',
                            'count' => '12',
                            'orderBy' => 'latest',
                            'background' => '',
                            'categoryId' => 0,
                            'code' => 'course-grid-with-condition-index',
                            'categoryCount' => '4',
                            'defaultTitle' => '网校课程',
                            'subTitle' => '',
                            'defaultSubTitle' => '精选网校课程，满足你的学习兴趣。',
                            'id' => 'latestCourse',
                        ),
                        1 => array(
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'live-course',
                            'defaultTitle' => '近期直播',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '实时跟踪直播课程，避免课程遗漏。',
                            'id' => 'RecentLiveCourses',
                        ),
                        2 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'middle-banner',
                            'defaultTitle' => '中部banner',
                            'id' => 'middle-banner',
                        ),
                        3 => array(
                            'title' => '',
                            'count' => '4',
                            'code' => 'recommend-classroom',
                            'defaultTitle' => '推荐班级',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '班级化学习体系，给你更多的课程相关服务。',
                            'id' => 'RecommendClassrooms',
                        ),
                        4 => array(
                            'title' => '',
                            'count' => '6',
                            'code' => 'groups',
                            'defaultTitle' => '动态',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '参与小组，结交更多同学，关注课程动态。',
                            'select1' => 'checked',
                            'select2' => 'checked',
                            'select3' => '',
                            'select4' => '',
                            'id' => 'hotGroups',
                        ),
                        5 => array(
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'recommend-teacher',
                            'defaultTitle' => '推荐教师',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '名师汇集，保证教学质量与学习效果。',
                            'id' => 'RecommendTeachers',
                        ),
                        6 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'friend-link',
                            'defaultTitle' => '友情链接',
                            'id' => 'friendLink',
                        ),
                        7 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'footer-link',
                            'defaultTitle' => '底部链接',
                            'id' => 'footerLink',
                        ),
                    ),
                ),
                'bottom' => 'simple',
            ),
            'theme_jianmo_all' => array(
                'maincolor' => 'default',
                'navigationcolor' => 'default',
                'blocks' => array(
                    'left' => array(
                        0 => array(
                            'title' => '',
                            'count' => '12',
                            'orderBy' => 'latest',
                            'background' => '',
                            'categoryId' => 0,
                            'code' => 'course-grid-with-condition-index',
                            'categoryCount' => '4',
                            'defaultTitle' => '网校课程',
                            'subTitle' => '',
                            'defaultSubTitle' => '精选网校课程，满足你的学习兴趣。',
                            'id' => 'latestCourse',
                        ),
                        1 => array(
                            'title' => '',
                            'count' => '12',
                            'orderBy' => 'latest',
                            'background' => '',
                            'categoryId' => 0,
                            'code' => 'open-course',
                            'categoryCount' => '4',
                            'defaultTitle' => '公开课',
                            'subTitle' => '',
                            'defaultSubTitle' => '公开课。',
                            'id' => 'latestOpenCourse',
                        ),
                        2 => array(
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'live-course',
                            'defaultTitle' => '近期直播',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '实时跟踪直播课程，避免课程遗漏。',
                            'id' => 'RecentLiveCourses',
                        ),
                        3 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'middle-banner',
                            'defaultTitle' => '中部banner',
                            'id' => 'middle-banner',
                        ),
                        4 => array(
                            'title' => '',
                            'count' => '4',
                            'code' => 'recommend-classroom',
                            'defaultTitle' => '推荐班级',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '班级化学习体系，给你更多的课程相关服务。',
                            'id' => 'RecommendClassrooms',
                        ),
                        5 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'advertisement-banner',
                            'defaultTitle' => '中部广告banner',
                            'id' => 'advertisement-banner',
                        ),
                        6 => array(
                            'title' => '',
                            'count' => '6',
                            'code' => 'groups',
                            'defaultTitle' => '动态',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '参与小组，结交更多同学，关注课程动态。',
                            'select1' => 'checked',
                            'select2' => 'checked',
                            'select3' => '',
                            'select4' => '',
                            'id' => 'hotGroups',
                        ),
                        7 => array(
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'recommend-teacher',
                            'defaultTitle' => '推荐教师',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '名师汇集，保证教学质量与学习效果。',
                            'id' => 'RecommendTeachers',
                        ),
                        8 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'friend-link',
                            'defaultTitle' => '友情链接',
                            'id' => 'friendLink',
                        ),
                        9 => array(
                            'title' => '',
                            'count' => '',
                            'code' => 'footer-link',
                            'defaultTitle' => '底部链接',
                            'id' => 'footerLink',
                        ),
                    ),
                ),
                'bottom' => 'simple',
            ),
            'permission.path_regular_expression' => array(
                0 => '/^\\/admin/',
            ),
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'oauth2.server.class' => 'OAuth2\\Server',
            'oauth2.request.class' => 'OAuth2\\HttpFoundationBridge\\Request',
            'oauth2.request_factory.class' => 'OAuth2\\HttpFoundationBridge\\Request',
            'oauth2.response.class' => 'OAuth2\\HttpFoundationBridge\\Response',
            'oauth2.storage.client_credentials.class' => 'OAuth2\\ServerBundle\\Storage\\ClientCredentials',
            'oauth2.storage.access_token.class' => 'OAuth2\\ServerBundle\\Storage\\AccessToken',
            'oauth2.storage.authorization_code.class' => 'OAuth2\\ServerBundle\\Storage\\AuthorizationCode',
            'oauth2.storage.user_credentials.class' => 'OAuth2\\ServerBundle\\Storage\\UserCredentials',
            'oauth2.storage.refresh_token.class' => 'OAuth2\\ServerBundle\\Storage\\RefreshToken',
            'oauth2.storage.scope.class' => 'OAuth2\\ServerBundle\\Storage\\Scope',
            'oauth2.grant_type.client_credentials.class' => 'OAuth2\\GrantType\\ClientCredentials',
            'oauth2.grant_type.authorization_code.class' => 'OAuth2\\GrantType\\AuthorizationCode',
            'oauth2.grant_type.refresh_token.class' => 'OAuth2\\GrantType\\RefreshToken',
            'oauth2.grant_type.user_credentials.class' => 'OAuth2\\GrantType\\UserCredentials',
            'oauth2.user_provider.class' => 'OAuth2\\ServerBundle\\User\\OAuth2UserProvider',
            'oauth2.client_manager.class' => 'OAuth2\\ServerBundle\\Manager\\ClientManager',
            'oauth2.scope_manager.class' => 'OAuth2\\ServerBundle\\Manager\\ScopeManager',
            'console.command.ids' => array(

            ),
        );
    }
}
