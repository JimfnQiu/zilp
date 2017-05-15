<?php

/* TopxiaWebBundle:Article/Part:detail-related-article.html.twig */
class __TwigTemplate_83c4842b0db32451f5c20b4d72c5da3f19de082fb2b6794618471d8fc00897ad extends Twig_Template
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
        if ((isset($context["sameTagArticles"]) ? $context["sameTagArticles"] : null)) {
            // line 2
            echo "<div class=\"related-article\">
  <div class=\"row\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sameTagArticles"]) ? $context["sameTagArticles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sameTagArticle"]) {
                // line 5
                echo "    <a class=\"col-sm-4\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["sameTagArticle"], "id", array()))), "html", null, true);
                echo "\">
      <div class=\"related-item\">
        <div class=\"title\">
          ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["sameTagArticle"], "title", array()), "html", null, true);
                echo "
        </div>
        <img class=\"img-responsive\" src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($context["sameTagArticle"], "thumb", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sameTagArticle"], "title", array()), "html", null, true);
                echo "\">
        <div class=\"image-overlay\"></div>
      </div>
    </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sameTagArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-related-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  41 => 10,  36 => 8,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
