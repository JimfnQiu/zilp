<?php

/* TopxiaWebBundle:Article/Part:detail-post-form.html.twig */
class __TwigTemplate_80f49be95912a1899cc658e1877afd808826a8682db351097058c9cb3419bb61 extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "\t<form class=\"es-commet\" id=\"thread-post-form\" method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_post", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">
\t  <div class=\"es-commet-header\">
\t    ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文章评论"), "html", null, true);
            echo "<span class=\"badge badge-primary thread-post-num\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "postNum", array()), "html", null, true);
            echo "</span>
\t  </div>
\t  
\t  <textarea class=\"form-control form-control-o\" rows=\"6\" placeholder=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您的想法"), "html", null, true);
            echo "\" name=\"content\"></textarea>
\t\t \t
\t  <div class=\"form-group clearfix\">
\t    <button type=\"submit\" class=\"btn btn-default pull-right ";
            // line 10
            if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                echo "disabled";
            }
            echo "\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在评论"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发表评论"), "html", null, true);
            echo "</button>
\t  </div>
\t  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
\t</form>
";
        } else {
            // line 15
            echo "\t<div class=\"empty\">
    你还没有登录，请先<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">登录</a>或<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">注册</a>！
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-post-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  52 => 12,  41 => 10,  35 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
