<?php

/* @ASFFTournois/Tournois/form.html.twig */
class __TwigTemplate_90661e8ccd880c1e19f872a0c4b9b1efdf5ea231a62dce0e314d026193ef2921 extends Twig_Template
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
        $__internal_b1587b48c66fb6fc8073623b94fbeebed8c995bacc9b4f812129e42d209c7e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1587b48c66fb6fc8073623b94fbeebed8c995bacc9b4f812129e42d209c7e16->enter($__internal_b1587b48c66fb6fc8073623b94fbeebed8c995bacc9b4f812129e42d209c7e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/form.html.twig"));

        $__internal_50d16364d311ad8345126fb283315643598898dd37d492ec4eea9702d57fc96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d16364d311ad8345126fb283315643598898dd37d492ec4eea9702d57fc96d->enter($__internal_50d16364d311ad8345126fb283315643598898dd37d492ec4eea9702d57fc96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/form.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-primary\">
  <div class=\"panel-heading\"><h3>Formulaire de tournois</h3></div>
  <div class=\"panel-body\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adversaire", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adversaire", array()), 'errors');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adversaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTournois", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTournois", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateTournois", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
      </div>
      <div class=\"col-md-5\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateLimit", array()), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateLimit", array()), 'errors');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateLimit", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "TableauxPoules", array()), 'label');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "TableauxPoules", array()), 'errors');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "TableauxPoules", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "series", array()), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "series", array()), 'errors');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "series", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remarque", array()), 'label');
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remarque", array()), 'errors');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remarque", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lienTournois", array()), 'label');
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lienTournois", array()), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lienTournois", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lienLigue", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lienLigue", array()), 'errors');
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lienLigue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'label');
        echo "
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'errors');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-md-5\">
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
      </div>
    </div>

    <br>

    ";
        // line 88
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 93
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 96
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>

  <div class=\"panel-footer\"><i>Attention : ce tournois sera ajouté directement sur la page d'accueil après validation du formulaire</i></div>
  
</div>";
        
        $__internal_b1587b48c66fb6fc8073623b94fbeebed8c995bacc9b4f812129e42d209c7e16->leave($__internal_b1587b48c66fb6fc8073623b94fbeebed8c995bacc9b4f812129e42d209c7e16_prof);

        
        $__internal_50d16364d311ad8345126fb283315643598898dd37d492ec4eea9702d57fc96d->leave($__internal_50d16364d311ad8345126fb283315643598898dd37d492ec4eea9702d57fc96d_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 96,  214 => 93,  208 => 88,  199 => 81,  195 => 80,  191 => 79,  185 => 76,  181 => 75,  177 => 74,  168 => 68,  164 => 67,  160 => 66,  151 => 60,  147 => 59,  143 => 58,  134 => 52,  130 => 51,  126 => 50,  117 => 44,  113 => 43,  109 => 42,  100 => 36,  96 => 35,  92 => 34,  83 => 28,  79 => 27,  75 => 26,  69 => 23,  65 => 22,  61 => 21,  52 => 15,  48 => 14,  44 => 13,  36 => 9,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Tournois/form.html.twig #}

<div class=\"panel panel-primary\">
  <div class=\"panel-heading\"><h3>Formulaire de tournois</h3></div>
  <div class=\"panel-body\">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        {{ form_label(form.adversaire) }}
        {{ form_errors(form.adversaire) }}
        {{ form_widget(form.adversaire, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-5\">
        {{ form_label(form.dateTournois) }}
        {{ form_errors(form.dateTournois) }}
        {{ form_widget(form.dateTournois, {'attr': {'class': 'form-DataType'}}) }}
      </div>
      <div class=\"col-md-5\">
        {{ form_label(form.dateLimit) }}
        {{ form_errors(form.dateLimit) }}
        {{ form_widget(form.dateLimit, {'attr': {'class': 'form-DataType'}}) }}
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        {{ form_label(form.TableauxPoules) }}
        {{ form_errors(form.TableauxPoules) }}
        {{ form_widget(form.TableauxPoules, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        {{ form_label(form.series) }}
        {{ form_errors(form.series) }}
        {{ form_widget(form.series, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        {{ form_label(form.remarque) }}
        {{ form_errors(form.remarque) }}
        {{ form_widget(form.remarque, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        {{ form_label(form.lienTournois) }}
        {{ form_errors(form.lienTournois) }}
        {{ form_widget(form.lienTournois, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        {{ form_label(form.lienLigue) }}
        {{ form_errors(form.lienLigue) }}
        {{ form_widget(form.lienLigue, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

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

    {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
    {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

    {# Génération automatique des champs pas encore écrits.
       Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
       et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}
  </div>

  <div class=\"panel-footer\"><i>Attention : ce tournois sera ajouté directement sur la page d'accueil après validation du formulaire</i></div>
  
</div>", "@ASFFTournois/Tournois/form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\form.html.twig");
    }
}
