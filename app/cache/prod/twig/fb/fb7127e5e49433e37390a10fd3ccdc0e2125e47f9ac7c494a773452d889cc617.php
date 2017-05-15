<?php

/* TopxiaWebBundle:Common:share-dropdown.html.twig */
class __TwigTemplate_d95665599575d14813c841a64ad5e36af3b94caeb589eb82f2e6420dc30a3ee6 extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : null) == "course")) {
            // line 2
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array());
            // line 3
            echo "  ";
            $context["summary"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array()), 50);
            // line 4
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "我正在学习《%course%》，收获巨大哦，一起来学习吧！"), array("%course%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array())));
            // line 5
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
            // line 6
            echo "  ";
            $context["picture"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png");
            // line 7
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array());
        } elseif ((        // line 8
(isset($context["type"]) ? $context["type"] : null) == "classroom")) {
            // line 9
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array());
            // line 10
            echo "  ";
            $context["summary"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array()), 50);
            // line 11
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.classroomShareContent"), array("{{" => "「%", "}}" => "%」")), "我正在学习「%classroom%」，收获巨大哦，一起来学习吧！"), array("%classroom%" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array())));
            // line 12
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())));
            // line 13
            echo "  ";
            $context["picture"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png");
            // line 14
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array());
        } elseif ((        // line 15
(isset($context["type"]) ? $context["type"] : null) == "article")) {
            // line 16
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array());
            // line 17
            echo "  ";
            $context["summary"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array()), 50);
            // line 18
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.articleShareContent"), array("{{" => "「%", "}}" => "%」")), "我正在看「%articletitle%」，关注「%sitename%」，分享知识，成就未来。"), array("%articletitle%" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "%sitename%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name")));
            // line 19
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array())));
            // line 20
            echo "  ";
            $context["picture"] = "";
            // line 21
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array());
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : null) == "group_thread")) {
            // line 23
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array());
            // line 24
            echo "  ";
            $context["summary"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), 50);
            // line 25
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.groupShareContent"), array("{{" => "「%", "}}" => "%」")), "我正在「%groupname%」小组，看到「%threadname%」，很不错哦，一起来看看吧！"), array("%groupname%" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "%threadname%" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array())));
            // line 26
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("group_thread_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array())));
            // line 27
            echo "  ";
            $context["picture"] = "";
            // line 28
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array());
        } elseif ((        // line 29
(isset($context["type"]) ? $context["type"] : null) == "open_course")) {
            // line 30
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array());
            // line 31
            echo "  ";
            $context["summary"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array()), 50);
            // line 32
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "我正在学习《%course%》，收获巨大哦，一起来学习吧！"), array("%course%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array())));
            // line 33
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
            // line 34
            echo "  ";
            $context["picture"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png");
            // line 35
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array());
        }
        // line 37
        echo "
<div class=\"dropdown-menu ";
        // line 38
        if (((array_key_exists("right", $context)) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : null), false)) : (false))) {
            echo "pull-right";
        }
        echo " js-social-share-params\" data-title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\" data-summary=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("summary", $context)) ? (_twig_default_filter((isset($context["summary"]) ? $context["summary"] : null), "")) : ("")), "html", null, true);
        echo "\" data-message=\"";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" data-picture=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("picture", $context)) ? (_twig_default_filter((isset($context["picture"]) ? $context["picture"] : null), "")) : ("")), "html", null, true);
        echo "\">
  ";
        // line 39
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Point")) {
            // line 40
            echo "    <input type=\"hidden\" class=\"point-share-url\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("share_point", array("id" => (isset($context["id"]) ? $context["id"] : null), "title" => (isset($context["title"]) ? $context["title"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
            echo "\">
  ";
        }
        // line 42
        echo "
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到微信"), "html", null, true);
        echo "\" data-share=\"weixin\" data-qrcode-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("common_qrcode", array("text" => (isset($context["url"]) ? $context["url"] : null))), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到新浪微博"), "html", null, true);
        echo "\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到QQ好友"), "html", null, true);
        echo "\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享到QQ空间"), "html", null, true);
        echo "\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>

";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("common/share-dropdown"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:share-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  164 => 46,  160 => 45,  156 => 44,  150 => 43,  147 => 42,  141 => 40,  139 => 39,  123 => 38,  120 => 37,  116 => 35,  113 => 34,  110 => 33,  107 => 32,  104 => 31,  101 => 30,  99 => 29,  96 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
