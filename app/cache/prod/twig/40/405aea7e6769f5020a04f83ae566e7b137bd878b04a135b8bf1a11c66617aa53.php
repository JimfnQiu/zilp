<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_ca9a0297201159ae2bf3578b1aa065a4428acfe49688719e696e1daf2e1f6b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
";
        // line 8
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 9
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\" ";
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            echo " class=\"es-mobile\"";
        }
        echo ">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 20
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 21
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 24
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 25
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 26
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")) {
            // line 27
            echo "  <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
  <!--[if lt IE 9]>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 47
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 48
        echo "
</head>
<body ";
        // line 50
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        if (twig_test_empty($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script())) {
            // line 105
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 105)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        } else {
            // line 107
            echo "  ";
            // line 108
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle::script_boot_webpack.html.twig", "TopxiaWebBundle::layout.html.twig", 108)->display($context);
        }
        // line 110
        echo "
</body>
</html>";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 20
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 21
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 33
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 33)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : null), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false)))));
        // line 34
        echo "
    ";
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 37
            echo "      <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/" . $context["path"])), "html", null, true);
            echo "\" rel=\"stylesheet\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
  ";
    }

    // line 47
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "  <div class=\"es-wrap\">

    ";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('full_content', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('bottom', $context, $blocks);
        // line 78
        echo "  </div>

  ";
        // line 80
        $this->displayBlock('esBar', $context, $blocks);
        // line 85
        echo "
  ";
        // line 86
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 98
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        // line 56
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 57)->display($context);
        // line 58
        echo "    ";
    }

    // line 60
    public function block_full_content($context, array $blocks = array())
    {
        // line 61
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 62
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "      </div>

      ";
        // line 67
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 68
        echo "    ";
    }

    // line 61
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
    }

    // line 67
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 71)->display($context);
        // line 72
        echo "    ";
    }

    // line 74
    public function block_footer_mobile($context, array $blocks = array())
    {
        // line 75
        echo "    ";
    }

    // line 77
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 80
    public function block_esBar($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 82
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 82)->display($context);
            // line 83
            echo "    ";
        }
        // line 84
        echo "  ";
    }

    // line 86
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        $context["cloud_consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_consult", "");
        // line 88
        echo "    ";
        if (((((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null) && (($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_setting_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_setting_enabled", array()), 0)) : (0))) && (($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_is_buy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_is_buy", array()), 0)) : (0))) && (($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_js", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_js", array()), "")) : ("")))) {
            // line 89
            echo "      ";
            echo $this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_js", array());
            echo "
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 93
            echo "      ";
            if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 94
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 94)->display($context);
                // line 95
                echo "      ";
            }
            // line 96
            echo "    ";
        }
        // line 97
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 97,  392 => 96,  389 => 95,  386 => 94,  383 => 93,  381 => 92,  378 => 91,  372 => 89,  369 => 88,  366 => 87,  363 => 86,  359 => 84,  356 => 83,  353 => 82,  350 => 81,  347 => 80,  342 => 77,  338 => 75,  335 => 74,  331 => 72,  328 => 71,  325 => 70,  320 => 67,  315 => 64,  310 => 61,  306 => 68,  304 => 67,  300 => 65,  298 => 64,  294 => 62,  291 => 61,  288 => 60,  284 => 58,  281 => 57,  278 => 56,  275 => 55,  267 => 99,  264 => 98,  262 => 86,  259 => 85,  257 => 80,  253 => 78,  251 => 77,  248 => 76,  246 => 74,  243 => 73,  241 => 70,  238 => 69,  236 => 60,  233 => 59,  231 => 55,  227 => 53,  224 => 52,  219 => 47,  214 => 39,  205 => 37,  200 => 36,  197 => 34,  194 => 33,  191 => 32,  188 => 31,  182 => 21,  176 => 20,  165 => 17,  162 => 16,  156 => 110,  152 => 108,  150 => 107,  146 => 105,  144 => 104,  141 => 103,  139 => 52,  130 => 50,  126 => 48,  124 => 47,  118 => 44,  114 => 43,  110 => 41,  108 => 31,  105 => 30,  100 => 28,  95 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  71 => 21,  65 => 20,  62 => 19,  60 => 16,  46 => 9,  44 => 8,  37 => 2,  35 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
