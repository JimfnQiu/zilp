<?php

/* TopxiaWebBundle:Default:middle-banner.html.twig */
class __TwigTemplate_2ba1857ffc272d3696cae08a5e6e182e88aff9732dd72f694ee08e31913e146c extends Twig_Template
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
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:middle_banner");
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
