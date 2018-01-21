<?php

/* @ASFFTournois/Inscription/form.html.twig */
class __TwigTemplate_4578be31b30720cae17b6c4cbf2a3023f9a40487ba50551daaa61108b1a999db extends Twig_Template
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
        // line 2
        echo "


<div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h3>Formulaire d'inscription</h3></div>
      <div class=\"panel-body\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 11
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_simple", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_simple", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_simple", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_double", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_double", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_double", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
      </div>
    </div>
  <br>
    <div class=\"row\">
      <div class=\"col-md-4\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_double", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_double", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_double", array()), 'widget', array("attr" => array("class" => "form-EntityType")));
        echo "
      </div>
      <div class=\"col-md-4\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_double_ext", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_double_ext", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_double_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
      <div class=\"col-md-3\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "club_double_ext", array()), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "club_double_ext", array()), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "club_double_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_mixte", array()), 'label');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_mixte", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "match_mixte", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
      </div>
    </div>
  <br>
    <div class=\"row\">
      <div class=\"col-md-4\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_mixte", array()), 'label');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_mixte", array()), 'errors');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_mixte", array()), 'widget', array("attr" => array("class" => "form-EntityType")));
        echo "
      </div>
      <div class=\"col-md-4\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_mixte_ext", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_mixte_ext", array()), 'errors');
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partenaire_mixte_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
      <div class=\"col-md-3\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "club_mixte_ext", array()), 'label');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "club_mixte_ext", array()), 'errors');
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "club_mixte_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-11\">
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remarque", array()), 'label');
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remarque", array()), 'errors');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remarque", array()), 'widget', array("attr" => array("class" => "form-TextareaType")));
        echo "
      </div>
    </div>

  <br><br>

    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 94
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

    ";
        // line 97
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Inscription/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 97,  209 => 94,  204 => 89,  195 => 83,  191 => 82,  187 => 81,  176 => 73,  172 => 72,  168 => 71,  162 => 68,  158 => 67,  154 => 66,  148 => 63,  144 => 62,  140 => 61,  131 => 55,  127 => 54,  123 => 53,  112 => 45,  108 => 44,  104 => 43,  98 => 40,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  76 => 33,  67 => 27,  63 => 26,  59 => 25,  48 => 17,  44 => 16,  40 => 15,  32 => 11,  27 => 8,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFTournois/Inscription/form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Inscription\\form.html.twig");
    }
}
