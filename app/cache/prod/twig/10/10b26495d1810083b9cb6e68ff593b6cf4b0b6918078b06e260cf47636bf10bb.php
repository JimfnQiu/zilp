<?php

/* TopxiaWebBundle:Article/Widget:sidebar.html.twig */
class __TwigTemplate_cf1acc7a180c8d5a680c8539f6afaddf245620384c23c7f2dd205e8cb5cabd01 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Article/Widget:sidebar.html.twig", 1);
        // line 2
        echo "  <!-- 热门资讯 -->
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Article:popularArticlesBlock"));
        echo "
  <!-- 热门标签 -->

  ";
        // line 6
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig", "TopxiaWebBundle:Article/Widget:sidebar.html.twig", 6)->display($context);
        // line 7
        echo "
  <!-- 热门评论 -->
  <div class=\"panel panel-default hot-comments\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
        <i class=\"es-icon es-icon-textsms\"></i>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门评论"), "html", null, true);
        echo "
      </h3>
    </div>
    <div class=\"panel-body\">

    ";
        // line 17
        $context["posts"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("PopularArticlePosts", array("count" => 10));
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "      <div class=\"media media-hot-comment\">
        <div class=\"media-body\">
          <div class=\"pull-left\">
            ";
            // line 22
            echo $context["web_macro"]->getuser_avatar($this->getAttribute($context["post"], "user", array()), "", "avatar-sm");
            echo "
          </div>
          <div class=\"comments-info\">
            ";
            // line 25
            echo $context["web_macro"]->getuser_link($this->getAttribute($context["post"], "user", array()), "");
            echo "
            <span class=\"mhs\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评论于"), "html", null, true);
            echo "</span>
            <a class=\"link-dark\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($this->getAttribute($context["post"], "article", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "article", array()), "title", array()), "html", null, true);
            echo "</a>
          </div>
          <div class=\"comments-content\">
           ";
            // line 30
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->subTextFilter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->atFilter($this->getAttribute($context["post"], "content", array()), $this->getAttribute($context["post"], "ats", array())), 60);
            echo "
          </div>
        </div>
      </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("一个评论都没有！"), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
  </div>
</div>
<!-- 推荐资讯 -->
";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Article:recommendArticlesBlock"));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Widget:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  101 => 37,  92 => 35,  82 => 30,  74 => 27,  70 => 26,  66 => 25,  60 => 22,  55 => 19,  49 => 18,  47 => 17,  39 => 12,  32 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
