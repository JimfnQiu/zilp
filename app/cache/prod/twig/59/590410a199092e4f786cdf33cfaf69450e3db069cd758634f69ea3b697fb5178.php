<?php

/* TopxiaWebBundle:EsBar:left-list.html.twig */
class __TwigTemplate_96ac81f7fc326d4110e9800a5c3eabcbea0b9bbdeca7b8b83fabf945211d9669 extends Twig_Template
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
        echo "<div class=\"es-bar-menu\">
  <ul class=\"bar-menu-top\">
    ";
        // line 3
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/study-center.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 6)->display($context);
        // line 7
        echo "  </ul>
  <ul class=\"bar-menu-sns\">
    ";
        // line 9
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0)) {
            // line 10
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 10)->display($context);
            // line 11
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 11)->display($context);
            // line 12
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile.enabled", 0)) {
            // line 16
            echo "      <li data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机端"), "html", null, true);
            echo "\">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-phone1\"></i></a>
      </li>
    ";
        }
        // line 20
        echo "    <li class=\"go-top\" style=\"margin:-10px auto 0 auto;\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回到顶端"), "html", null, true);
        echo "\">
      <a href=\"javascript:;\">
        <i class=\"es-icon es-icon-keyboardarrowup\" style=\"margin-bottom:-8px\"></i>
        <span class=\"text-sm\">TOP</span>
      </a>
    </li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:left-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 17,  57 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  38 => 9,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
