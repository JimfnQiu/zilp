<?php

/* TopxiaWebBundle:Course:Widget/course-grid.html.twig */
class __TwigTemplate_fd0d10a30a440a5b9a6ef9df5f74800a1f016334fcbc940397d0dcc4c51f5dcc extends Twig_Template
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
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">
      ";
        // line 4
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array()) > 0)) {
            // line 5
            echo "        ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()) == 0)) {
                // line 6
                echo "          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        ";
            } else {
                // line 9
                echo "          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        ";
            }
            // line 12
            echo "      ";
        }
        // line 13
        echo "      ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
            // line 14
            echo "        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
            // line 16
            echo "        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      ";
        }
        // line 18
        echo "      ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 19
            echo "        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      ";
        }
        // line 23
        echo "      ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeLazyImg($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()));
        echo "
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      ";
        // line 33
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 34
            echo "      <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 36
        echo "      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
        echo "</span>
      ";
        // line 37
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->canTryLook($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()))) {
            // line 38
            echo "        <span class=\"comment\"><i class=\"es-icon es-icon-playcircleoutline\"></i>试看</span>
      ";
        }
        // line 40
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Widget/course-grid.html.twig", 40)->display(array_merge($context, array("shows" => "price")));
        // line 41
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  105 => 40,  101 => 38,  99 => 37,  94 => 36,  88 => 34,  86 => 33,  79 => 29,  75 => 28,  66 => 23,  60 => 19,  57 => 18,  53 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  37 => 9,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
