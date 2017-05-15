<?php

/* TopxiaWebBundle:Article/Part:detail-tags.html.twig */
class __TwigTemplate_d5c2d806a9cbb8f2bb7cd985816e5a9bf69a678ab8309a6905e2711bc0c181f5 extends Twig_Template
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
        echo "<div class=\"article-tags\">
  ";
        // line 2
        if ((isset($context["tagNames"]) ? $context["tagNames"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标签："), "html", null, true);
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagNames"]) ? $context["tagNames"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tagName"]) {
                // line 4
                echo "    <a class=\"btn-tag\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_tag_show", array("name" => $context["tagName"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  31 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
