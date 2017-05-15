<?php

/* TopxiaWebBundle:Attachment/Widget:list.html.twig */
class __TwigTemplate_a32f81a3562b62c19d3659c6482413143bdb48bff4207a500ede033dffc8a44c extends Twig_Template
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
        if (((array_key_exists("attachments", $context)) ? (_twig_default_filter((isset($context["attachments"]) ? $context["attachments"] : null), null)) : (null))) {
            // line 2
            echo "\t";
            $context["attachments"] = (($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), ((isset($context["targetType"]) ? $context["targetType"] : null) . (isset($context["targetId"]) ? $context["targetId"] : null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), ((isset($context["targetType"]) ? $context["targetType"] : null) . (isset($context["targetId"]) ? $context["targetId"] : null)), array(), "array"), null)) : (null));
        } else {
            // line 4
            echo "\t";
            $context["attachments"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("AttachmentList", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null)));
        }
        // line 6
        $this->loadTemplate("TopxiaWebBundle:Attachment:list.html.twig", "TopxiaWebBundle:Attachment/Widget:list.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Attachment/Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
