<?php

/* TopxiaWebBundle:EsBar:index.html.twig */
class __TwigTemplate_7619756fcced20dd312c572d0028b3e7858bbd9d6567e16be7995df0333d2caa extends Twig_Template
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
        echo "<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  <!-- 左侧列表 -->
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:EsBar:left-list.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 5)->display($context);
        // line 6
        echo "
  <!-- 列表内容 -->
  ";
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 9
            echo "    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      ";
            // line 11
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/notification.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 11)->display($context);
            // line 12
            echo "    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      ";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 16)->display($context);
            // line 17
            echo "    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      ";
            // line 21
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 21)->display($context);
            // line 22
            echo "    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      ";
            // line 27
            echo "    </div>

    <!-- 学习历史 -->
    ";
            // line 39
            echo "
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/consult.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 42)->display($context);
        // line 43
        echo "
</div>

";
        // line 46
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("es-bar/index");
        // line 47
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("notification/notification");
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  82 => 47,  80 => 46,  75 => 43,  73 => 42,  70 => 41,  66 => 39,  61 => 27,  55 => 22,  53 => 21,  47 => 17,  45 => 16,  39 => 12,  37 => 11,  33 => 9,  31 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
