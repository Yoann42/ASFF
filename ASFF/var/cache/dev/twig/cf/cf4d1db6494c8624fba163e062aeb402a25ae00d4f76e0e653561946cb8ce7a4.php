<?php

/* ASFFTournoisBundle:Inscription:form.html.twig */
class __TwigTemplate_1e86946ce75da0b2a73d322379eace9787ce8349012881c883d376eea868d6da extends Twig_Template
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
        $__internal_d77f9fd9b0a68278c1e7149af2b39bb3312baa7ee9f73fb19187f3fc89cb8cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77f9fd9b0a68278c1e7149af2b39bb3312baa7ee9f73fb19187f3fc89cb8cb1->enter($__internal_d77f9fd9b0a68278c1e7149af2b39bb3312baa7ee9f73fb19187f3fc89cb8cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:form.html.twig"));

        $__internal_eb0fdc2e22b51709778d620206b44633d4e03dd167b747136156a21a33d9e575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0fdc2e22b51709778d620206b44633d4e03dd167b747136156a21a33d9e575->enter($__internal_eb0fdc2e22b51709778d620206b44633d4e03dd167b747136156a21a33d9e575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:form.html.twig"));

        // line 2
        echo "


<div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h3>Formulaire d'inscription</h3></div>
      <div class=\"panel-body\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 11
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_simple", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_simple", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_simple", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_double", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_double", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_double", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
      </div>
    </div>
  <br>
    <div class=\"row\">
      <div class=\"col-md-4\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_double", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_double", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_double", array()), 'widget', array("attr" => array("class" => "form-EntityType")));
        echo "
      </div>
      <div class=\"col-md-4\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_double_ext", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_double_ext", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_double_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
      <div class=\"col-md-3\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "club_double_ext", array()), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "club_double_ext", array()), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "club_double_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_mixte", array()), 'label');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_mixte", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "match_mixte", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
      </div>
    </div>
  <br>
    <div class=\"row\">
      <div class=\"col-md-4\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_mixte", array()), 'label');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_mixte", array()), 'errors');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_mixte", array()), 'widget', array("attr" => array("class" => "form-EntityType")));
        echo "
      </div>
      <div class=\"col-md-4\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_mixte_ext", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_mixte_ext", array()), 'errors');
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "partenaire_mixte_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
      <div class=\"col-md-3\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "club_mixte_ext", array()), 'label');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "club_mixte_ext", array()), 'errors');
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "club_mixte_ext", array()), 'widget', array("attr" => array("class" => "form-TextType")));
        echo "
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-11\">
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remarque", array()), 'label');
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remarque", array()), 'errors');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remarque", array()), 'widget', array("attr" => array("class" => "form-TextareaType")));
        echo "
      </div>
    </div>

  <br><br>

    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 94
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 97
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>";
        
        $__internal_d77f9fd9b0a68278c1e7149af2b39bb3312baa7ee9f73fb19187f3fc89cb8cb1->leave($__internal_d77f9fd9b0a68278c1e7149af2b39bb3312baa7ee9f73fb19187f3fc89cb8cb1_prof);

        
        $__internal_eb0fdc2e22b51709778d620206b44633d4e03dd167b747136156a21a33d9e575->leave($__internal_eb0fdc2e22b51709778d620206b44633d4e03dd167b747136156a21a33d9e575_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Inscription:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 97,  215 => 94,  210 => 89,  201 => 83,  197 => 82,  193 => 81,  182 => 73,  178 => 72,  174 => 71,  168 => 68,  164 => 67,  160 => 66,  154 => 63,  150 => 62,  146 => 61,  137 => 55,  133 => 54,  129 => 53,  118 => 45,  114 => 44,  110 => 43,  104 => 40,  100 => 39,  96 => 38,  90 => 35,  86 => 34,  82 => 33,  73 => 27,  69 => 26,  65 => 25,  54 => 17,  50 => 16,  46 => 15,  38 => 11,  33 => 8,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Inscription/form.html.twig #}



<div class=\"panel panel-primary\">
      <div class=\"panel-heading\"><h3>Formulaire d'inscription</h3></div>
      <div class=\"panel-body\">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}

    <div class=\"row\">
      <div class=\"col-md-5\">
        {{ form_label(form.match_simple) }}
        {{ form_errors(form.match_simple) }}
        {{ form_widget(form.match_simple, {'attr': {'class': 'form-CheckBoxType'}}) }}
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-5\">
        {{ form_label(form.match_double) }}
        {{ form_errors(form.match_double) }}
        {{ form_widget(form.match_double, {'attr': {'class': 'form-CheckBoxType'}}) }}
      </div>
    </div>
  <br>
    <div class=\"row\">
      <div class=\"col-md-4\">
        {{ form_label(form.partenaire_double) }}
        {{ form_errors(form.partenaire_double) }}
        {{ form_widget(form.partenaire_double, {'attr': {'class': 'form-EntityType'}}) }}
      </div>
      <div class=\"col-md-4\">
        {{ form_label(form.partenaire_double_ext) }}
        {{ form_errors(form.partenaire_double_ext) }}
        {{ form_widget(form.partenaire_double_ext, {'attr': {'class': 'form-TextType'}}) }}
      </div>
      <div class=\"col-md-3\">
        {{ form_label(form.club_double_ext) }}
        {{ form_errors(form.club_double_ext) }}
        {{ form_widget(form.club_double_ext, {'attr': {'class': 'form-TextType'}}) }}
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-5\">
        {{ form_label(form.match_mixte) }}
        {{ form_errors(form.match_mixte) }}
        {{ form_widget(form.match_mixte, {'attr': {'class': 'form-CheckBoxType'}}) }}
      </div>
    </div>
  <br>
    <div class=\"row\">
      <div class=\"col-md-4\">
        {{ form_label(form.partenaire_mixte) }}
        {{ form_errors(form.partenaire_mixte) }}
        {{ form_widget(form.partenaire_mixte, {'attr': {'class': 'form-EntityType'}}) }}
      </div>
      <div class=\"col-md-4\">
        {{ form_label(form.partenaire_mixte_ext) }}
        {{ form_errors(form.partenaire_mixte_ext) }}
        {{ form_widget(form.partenaire_mixte_ext, {'attr': {'class': 'form-TextType'}}) }}
      </div>
      <div class=\"col-md-3\">
        {{ form_label(form.club_mixte_ext) }}
        {{ form_errors(form.club_mixte_ext) }}
        {{ form_widget(form.club_mixte_ext, {'attr': {'class': 'form-TextType'}}) }}
      </div>
    </div>

  <br><br>

    <div class=\"row\">
      <div class=\"col-md-11\">
        {{ form_label(form.remarque) }}
        {{ form_errors(form.remarque) }}
        {{ form_widget(form.remarque, {'attr': {'class': 'form-TextareaType'}}) }}
      </div>
    </div>

  <br><br>

    {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

    {# Génération automatique des champs pas encore écrits.
       Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
       et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}
  </div>
</div>", "ASFFTournoisBundle:Inscription:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/form.html.twig");
    }
}
