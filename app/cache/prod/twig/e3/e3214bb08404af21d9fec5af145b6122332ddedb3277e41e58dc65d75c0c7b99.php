<?php

/* TopxiaWebBundle:EsBar:ListContent/consult.html.twig */
class __TwigTemplate_ba95564f0c4e0dbe06041c1143812750883fbeb0ae4f1cdcf852f3e8c0a2569e extends Twig_Template
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
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0)) {
            // line 2
            echo "  ";
            $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
            // line 3
            echo "  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\">
      ";
            // line 5
            $context["countQq"] = 0;
            // line 6
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if (( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array())))) {
                    // line 7
                    echo "        ";
                    $context["countQq"] = 1;
                    // line 8
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
      ";
            // line 10
            if (((isset($context["countQq"]) ? $context["countQq"] : null) > 0)) {
                // line 11
                echo "      <div class=\"row mtm\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                    if (( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array())))) {
                        // line 13
                        echo "          ";
                        if ((($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                            // line 14
                            echo "            <div class=\"col-xs-6 mbm text-overflow\">
              <a class=\"link-light\" href=\"";
                            // line 15
                            echo $this->getAttribute($context["qq"], "url", array());
                            echo "\" target=\"_blank\"><img class=\"mrs\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                            echo "\" alt=\"\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击这里给我发消息"), "html", null, true);
                            echo "\" alt=\"\">
                ";
                            // line 16
                            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                            echo "
              </a>
            </div>
          ";
                        } else {
                            // line 20
                            echo "            <div class=\"col-xs-6 mbm text-overflow\">
              <a class=\"link-light\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                            // line 21
                            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                            echo "&site=qq&menu=yes\" target=\"_blank\"><img class=\"mrs\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                            echo "\" alt=\"\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击这里给我发消息"), "html", null, true);
                            echo "\" alt=\"\">
                ";
                            // line 22
                            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                            echo "
              </a>
            </div>
          ";
                        }
                        // line 26
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "      </div>
      <hr>
      ";
            }
            // line 30
            echo "
      <div class=\"row\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if (( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array())))) {
                    // line 33
                    echo "          <div class=\"col-xs-6 mbm\">
            <p class=\"text-overflow\">
              <img class=\"mrs\" src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq_group.png"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                    echo "
            </p>

            ";
                    // line 39
                    if ( !(($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 40
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                        echo "
              </p>
            ";
                    }
                    // line 44
                    echo "
            ";
                    // line 45
                    if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 46
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 47
                        echo $this->getAttribute($context["qqgroup"], "url", array());
                        echo "
              </p>
            ";
                    }
                    // line 50
                    echo "
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
    </div>

    <div id=\"bar-phone-content\">
      ";
            // line 57
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()))) {
                // line 58
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作时间：%worktime%", array("%worktime%" => $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()))), "html", null, true);
                echo "</p>
      ";
            }
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                    // line 61
                    echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-phone mrm\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                    echo "</p>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()))) {
                // line 64
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱："), "html", null, true);
                echo " <a class=\"link-light\" href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            // line 66
            echo "    </div>

    ";
            // line 68
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()))) {
                // line 69
                echo "      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
                echo "\" alt=\"\">
      </div>
    ";
            }
            // line 73
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 73,  221 => 70,  218 => 69,  216 => 68,  212 => 66,  202 => 64,  199 => 63,  187 => 61,  181 => 60,  175 => 58,  173 => 57,  167 => 53,  158 => 50,  152 => 47,  149 => 46,  147 => 45,  144 => 44,  138 => 41,  135 => 40,  133 => 39,  127 => 36,  123 => 35,  119 => 33,  114 => 32,  110 => 30,  105 => 27,  98 => 26,  91 => 22,  83 => 21,  80 => 20,  73 => 16,  65 => 15,  62 => 14,  59 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  39 => 8,  36 => 7,  30 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
