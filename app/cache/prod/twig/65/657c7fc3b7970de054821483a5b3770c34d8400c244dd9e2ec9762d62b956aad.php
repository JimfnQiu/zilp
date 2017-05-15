<?php

/* TopxiaWebBundle:Default:navigation-li.html.twig */
class __TwigTemplate_04e63d9c1017102180d8ab576792ef48c624bf1e29af722b0a76ebb4f697f8dc extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
            echo "nav-hover";
        }
        if (((isset($context["siteNav"]) ? $context["siteNav"] : null) && ((isset($context["siteNav"]) ? $context["siteNav"] : null) == $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "url", array())))) {
            echo " active ";
        }
        echo "\">
  <a href=\"";
        // line 2
        if ($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "url", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->navigationUrlFilter($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "url", array())), "html", null, true);
        } else {
            echo "javascript:;";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "isNewWin", array())) {
            echo "target=\"_blank\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "name", array()), "html", null, true);
        echo " ";
        if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
  ";
        // line 3
        if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
            // line 4
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subNavs"]) ? $context["subNavs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                    // line 6
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                    echo "\"  ";
                    if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
  ";
        }
        // line 10
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:navigation-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  73 => 8,  57 => 6,  52 => 5,  49 => 4,  47 => 3,  29 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
