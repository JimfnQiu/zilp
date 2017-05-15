<?php

/* TopxiaWebBundle:Login:ajax.html.twig */
class __TwigTemplate_2052ea785e08092e641401810ce8907852412c6284ba420685e4e4c7c66dd023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Login:ajax.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["modal_class"] = "login-modal";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录%name%", array("%name%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name"))), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"login-ajax-form\" class=\"form-vertical form-vertical-small\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

  <div class=\"alert alert-danger\" style=\"display:none;\"></div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"text\" id=\"ajax-username\" name=\"_username\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"password\" id=\"ajax-password\" name=\"_password\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"form-group mbl text-muted\">
    <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("记住密码"), "html", null, true);
        echo "
  </div>

  <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo "</button>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
<script>
\tapp.load('auth/login-ajax');
</script>

";
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "<div class=\"text-left text-sm\">
  <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("找回密码"), "html", null, true);
        echo "</a>
  <span class=\"text-muted mhs\">|</span>
  <span class=\"text-muted\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
  <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即注册"), "html", null, true);
        echo "</a>
</div>

";
        // line 49
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.enabled")) {
            // line 50
            echo "  <div class=\"social-login\">
    <span>
      ";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
    </span>
    <div class=\"line\"></div>
  </div>
";
        }
        // line 57
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 57,  134 => 52,  130 => 50,  128 => 49,  120 => 46,  116 => 45,  109 => 43,  106 => 42,  103 => 41,  92 => 33,  86 => 30,  79 => 26,  71 => 21,  66 => 19,  58 => 14,  53 => 12,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
