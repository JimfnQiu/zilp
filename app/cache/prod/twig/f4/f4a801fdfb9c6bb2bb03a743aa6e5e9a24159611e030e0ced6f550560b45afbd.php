<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_69f60a696a8927b76459e74802382da06803d5538ce125a8239c041d694fd6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["appDownload"] = (( !((array_key_exists("custom", $context)) ? (_twig_default_filter((isset($context["custom"]) ? $context["custom"] : null), 0)) : (0)) && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isESCopyright()) && (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile"), "enabled", array()), null)) : (null)));
        // line 7
        if ((isset($context["appDownload"]) ? $context["appDownload"] : null)) {
            // line 8
            $context["bodyClass"] = "homepage  has-app";
        } else {
            // line 10
            $context["bodyClass"] = "homepage";
        }
        // line 13
        $context["siteNav"] = "/";
        // line 14
        $context["script_controller"] = "index";
        // line 15
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 17
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 18
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "confirmConfig", array())));
        // line 19
        $context["allConfig"] = $this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "allConfig", array());
        // line 21
        $context["isIndex"] = true;
        // line 22
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 24
    public function block_full_content($context, array $blocks = array())
    {
        // line 25
        echo "  ";
        if ((isset($context["appDownload"]) ? $context["appDownload"] : null)) {
            // line 26
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 28
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 29
                echo "      ";
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 32
            echo "
      ";
            // line 33
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 34
            echo "      ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && ((isset($context["code"]) ? $context["code"] : null) == "category-course"))) {
                // line 35
                echo "        ";
                $context["code"] = "recommend-course";
                // line 36
                echo "      ";
            }
            // line 37
            echo "
      ";
            // line 38
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 39
            echo "      ";
            if (((isset($context["code"]) ? $context["code"] : null) == "friend-link")) {
                // line 40
                echo "         ";
                $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : null)) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 40)->display(array_merge($context, array("friendlyLinks" => (isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : null))));
                // line 41
                echo "      ";
            } elseif (((isset($context["code"]) ? $context["code"] : null) != "footer-link")) {
                // line 42
                echo "        ";
                if (((isset($context["code"]) ? $context["code"] : null) != "course-grid-with-condition-index")) {
                    // line 43
                    echo "          ";
                    $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
                    $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . (isset($context["code"]) ? $context["code"] : null)), 600                    );
                    $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                    if ($asm89CacheBody2 === false) {
                        ob_start();
                            // line 44
                            echo "            ";
                            $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : null)) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 44)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                            // line 45
                            echo "          ";
                        
                        $asm89CacheBody2 = ob_get_clean();
                        $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                    }
                    echo $asm89CacheBody2;
                    // line 46
                    echo "        ";
                } else {
                    // line 47
                    echo "          ";
                    $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : null)) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 47)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "      ";
            }
            // line 50
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig", "TopxiaWebBundle:Default:index.html.twig", 51)->display(array_merge($context, array("mobile_tool_bar" => "index")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 51,  176 => 50,  173 => 49,  170 => 48,  167 => 47,  164 => 46,  157 => 45,  154 => 44,  147 => 43,  144 => 42,  141 => 41,  138 => 40,  135 => 39,  133 => 38,  130 => 37,  127 => 36,  124 => 35,  121 => 34,  119 => 33,  116 => 32,  98 => 31,  88 => 29,  81 => 28,  75 => 26,  72 => 25,  69 => 24,  63 => 4,  57 => 3,  53 => 1,  51 => 22,  49 => 21,  47 => 19,  45 => 18,  43 => 17,  41 => 15,  39 => 14,  37 => 13,  34 => 10,  31 => 8,  29 => 7,  27 => 6,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
