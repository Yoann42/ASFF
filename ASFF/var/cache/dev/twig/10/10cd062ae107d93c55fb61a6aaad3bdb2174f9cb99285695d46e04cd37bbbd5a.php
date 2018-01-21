<?php

/* @ASFFActualite/Actu/form.html.twig */
class __TwigTemplate_946c8817d7b09a0e533b511bc42046013b2c4049f5957cab6414ec8f1a239082 extends Twig_Template
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
        $__internal_13241376f62d14103b21d4bd39e147f8daca0623df805469bcaea38146949daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13241376f62d14103b21d4bd39e147f8daca0623df805469bcaea38146949daf->enter($__internal_13241376f62d14103b21d4bd39e147f8daca0623df805469bcaea38146949daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/form.html.twig"));

        $__internal_f6605509c29e3bf1243a40fa586b80d0ab3514907e2594fc1e1ccd016b905281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6605509c29e3bf1243a40fa586b80d0ab3514907e2594fc1e1ccd016b905281->enter($__internal_f6605509c29e3bf1243a40fa586b80d0ab3514907e2594fc1e1ccd016b905281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/form.html.twig"));

        // line 2
        echo "


<div class=\"panel panel-primary\">
  <div class=\"panel-heading\"><h3>Formulaire des actualités</h3></div>
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
        <div class=\"col-md-10\">
          ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
          ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
          ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'label');
        echo "
          ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'label');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-HiddenType")));
        echo "
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-5\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'label');
        echo "
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'errors');
        echo "
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-5\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
        </div>
      </div>
      
      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publier", array()), 'label');
        echo "
          ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publier", array()), 'errors');
        echo "
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publier", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "urgent", array()), 'label');
        echo "
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "urgent", array()), 'errors');
        echo "
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "urgent", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
        </div>
      </div>

      <br><br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>
      </div>

    ";
        // line 85
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 88
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>

  <div class=\"panel-footer\"><i>Attention : cette actualité sera ajoutée directement sur la page d'accueil après validation du formulaire</i></div>
</div>";
        
        $__internal_13241376f62d14103b21d4bd39e147f8daca0623df805469bcaea38146949daf->leave($__internal_13241376f62d14103b21d4bd39e147f8daca0623df805469bcaea38146949daf_prof);

        
        $__internal_f6605509c29e3bf1243a40fa586b80d0ab3514907e2594fc1e1ccd016b905281->leave($__internal_f6605509c29e3bf1243a40fa586b80d0ab3514907e2594fc1e1ccd016b905281_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 88,  179 => 85,  172 => 78,  161 => 70,  157 => 69,  153 => 68,  144 => 62,  140 => 61,  136 => 60,  125 => 52,  121 => 51,  117 => 50,  111 => 47,  107 => 46,  103 => 45,  92 => 37,  88 => 36,  84 => 35,  73 => 27,  69 => 26,  65 => 25,  54 => 17,  50 => 16,  46 => 15,  38 => 11,  33 => 8,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/form.html.twig #}



<div class=\"panel panel-primary\">
  <div class=\"panel-heading\"><h3>Formulaire des actualités</h3></div>
  <div class=\"panel-body\">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}

      <div class=\"row\">
        <div class=\"col-md-10\">
          {{ form_label(form.titre) }}
          {{ form_errors(form.titre) }}
          {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          {{ form_label(form.contenu) }}
          {{ form_errors(form.contenu) }}
          {{ form_widget(form.contenu, {'attr': {'class': 'form-control'}}) }}
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          {{ form_label(form.image) }}
          {{ form_errors(form.image) }}
          {{ form_widget(form.image.file, {'attr': {'class': 'form-HiddenType'}}) }}
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-5\">
          {{ form_label(form.auteur) }}
          {{ form_errors(form.auteur) }}
          {{ form_widget(form.auteur, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col-md-5\">
          {{ form_label(form.date) }}
          {{ form_errors(form.date) }}
          {{ form_widget(form.date, {'attr': {'class': 'form-DataType'}}) }}
        </div>
      </div>
      
      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          {{ form_label(form.publier) }}
          {{ form_errors(form.publier) }}
          {{ form_widget(form.publier, {'attr': {'class': 'form-CheckBoxType'}}) }}
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-10\">
          {{ form_label(form.urgent) }}
          {{ form_errors(form.urgent) }}
          {{ form_widget(form.urgent, {'attr': {'class': 'form-CheckBoxType'}}) }}
        </div>
      </div>

      <br><br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
        </div>
      </div>

    {# Génération automatique des champs pas encore écrits.
       Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
       et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}

  </div>

  <div class=\"panel-footer\"><i>Attention : cette actualité sera ajoutée directement sur la page d'accueil après validation du formulaire</i></div>
</div>", "@ASFFActualite/Actu/form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\form.html.twig");
    }
}
