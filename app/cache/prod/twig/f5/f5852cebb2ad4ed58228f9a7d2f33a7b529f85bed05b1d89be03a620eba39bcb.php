<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_71b5c5f04b8c2497b6e779311939d421bdc3ea765fd7d224d62dde804102136a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          ";
        // line 17
        $context["navigations"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("NavigationsTree", array());
        // line 18
        echo "          ";
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 18)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => true)));
        // line 19
        echo "        </ul>
      </div>
    </div>
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 26
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.logo")) {
            // line 27
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath(("../" . $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
      ";
        } else {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
      ";
        }
        // line 31
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 35
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 35)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => false)));
        // line 36
        echo "    </ul>
    <div class=\"navbar-user ";
        // line 37
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 40
            echo "          <li class=\"user-avatar-li nav-hover\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\" class=\"dropdown-header\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
              <li><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人主页"), "html", null, true);
            echo "</a></li>
              <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
            echo "</a></li>
              <li class=\"hidden-lg user-nav-li-my\">
                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
                  <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 50
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
            }
            // line 51
            echo "                </a>
              </li>
              <li><a href=\"";
            // line 53
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("账户中心"), "html", null, true);
            echo "</a></li>

              ";
            // line 55
            if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 57
            echo "
              <li class=\"hidden-lg\"><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "</a></li>
              <li class=\"hidden-lg\"><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a></li>
              ";
            // line 60
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 61
                echo "                <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换电脑版"), "html", null, true);
                echo "</a></li>
              ";
            } elseif (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("wap.enabled") == 1)) {
                // line 64
                echo "                <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换触屏版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 67
            echo "              <li class=\"user-nav-li-logout\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出登录"), "html", null, true);
            echo "</a></li>
            </ul>
          </li>
          <li class=\"visible-lg\">
            <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
              ";
            // line 72
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 73
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
                echo "
              ";
            } else {
                // line 75
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
                echo "
              ";
            }
            // line 77
            echo "            </a>
          </li>
          <li class=\"visible-lg nav-hover\">

            ";
            // line 81
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0))) {
                // line 82
                echo "              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            ";
            } elseif (( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 83
(isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 84
                echo "              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            ";
            } else {
                // line 86
                echo "              <a><i class=\"es-icon es-icon-mail\"></i></a>
            ";
            }
            // line 88
            echo "
            <ul class=\"dropdown-menu\" role=\"menu\">
              ";
            // line 90
            if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 91
                echo "                <li>
                  <a href=\"";
                // line 92
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
                echo "\">
                    <span class=\"pull-right num\">";
                // line 93
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                    <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            // line 98
            echo "              <li>
                <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\">
                  <span class=\"pull-right num\">";
            // line 100
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                  <i class=\"es-icon es-icon-mail\"></i>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "
                </a>
              </li>
            </ul>
          </li>
        ";
        } else {
            // line 107
            echo "          <li class=\"user-avatar-li nav-hover visible-xs\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"user-nav-li-login\"><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-denglu\"></i>
                ";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
              <li class=\"user-nav-li-register\"><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-zhuce\"></i>
                ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
              ";
            // line 118
            if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
                // line 119
                echo "                <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>
                  ";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换电脑版"), "html", null, true);
                echo "</a></li>
              ";
            } elseif (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("wap.enabled") == 1)) {
                // line 123
                echo "                <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>              
                  ";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换触屏版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 127
            echo "            </ul>
          </li>
          <li class=\"hidden-xs\"><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
          <li class=\"hidden-xs\"><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 132
        echo "        ";
        // line 133
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>
";
        // line 143
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("default/header.js");
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 143,  368 => 136,  363 => 134,  360 => 133,  358 => 132,  351 => 130,  345 => 129,  341 => 127,  336 => 125,  332 => 123,  327 => 121,  323 => 119,  321 => 118,  317 => 117,  312 => 115,  308 => 114,  303 => 112,  297 => 109,  293 => 107,  284 => 101,  278 => 100,  274 => 99,  271 => 98,  264 => 94,  258 => 93,  254 => 92,  251 => 91,  249 => 90,  245 => 88,  241 => 86,  237 => 84,  235 => 83,  232 => 82,  230 => 81,  224 => 77,  218 => 75,  212 => 73,  210 => 72,  206 => 71,  196 => 67,  191 => 65,  188 => 64,  183 => 62,  180 => 61,  178 => 60,  168 => 59,  158 => 58,  155 => 57,  146 => 55,  135 => 53,  131 => 51,  125 => 50,  121 => 49,  114 => 47,  108 => 46,  104 => 45,  98 => 42,  94 => 40,  92 => 39,  85 => 37,  82 => 36,  80 => 35,  74 => 31,  68 => 29,  62 => 27,  60 => 26,  56 => 25,  48 => 19,  45 => 18,  43 => 17,  34 => 11,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
