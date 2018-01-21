<?php

/* ASFFActualiteBundle:Actu:index.html.twig */
class __TwigTemplate_45aafe367fa990fb630ae88ad69aaf51d3315e0b29497cb503aa61bc4398da45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "ASFFActualiteBundle:Actu:index.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFActualiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40d78932a435bf95d7575fbba9258ca4417202d87469105ccff8972a6345141e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d78932a435bf95d7575fbba9258ca4417202d87469105ccff8972a6345141e->enter($__internal_40d78932a435bf95d7575fbba9258ca4417202d87469105ccff8972a6345141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:index.html.twig"));

        $__internal_f50885d29bb91779f034904d5f5f490187176a806ded59af3d60c58bfcef0434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50885d29bb91779f034904d5f5f490187176a806ded59af3d60c58bfcef0434->enter($__internal_f50885d29bb91779f034904d5f5f490187176a806ded59af3d60c58bfcef0434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d78932a435bf95d7575fbba9258ca4417202d87469105ccff8972a6345141e->leave($__internal_40d78932a435bf95d7575fbba9258ca4417202d87469105ccff8972a6345141e_prof);

        
        $__internal_f50885d29bb91779f034904d5f5f490187176a806ded59af3d60c58bfcef0434->leave($__internal_f50885d29bb91779f034904d5f5f490187176a806ded59af3d60c58bfcef0434_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e68f9041b91e803114e2ab935c1972a61dd98fcce8c6323fb916b8c8c207d8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68f9041b91e803114e2ab935c1972a61dd98fcce8c6323fb916b8c8c207d8ca->enter($__internal_e68f9041b91e803114e2ab935c1972a61dd98fcce8c6323fb916b8c8c207d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_d70d59067455c8a8ec98ab3f040347e0869bffdb6adad87e2c493cacbb108e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70d59067455c8a8ec98ab3f040347e0869bffdb6adad87e2c493cacbb108e49->enter($__internal_d70d59067455c8a8ec98ab3f040347e0869bffdb6adad87e2c493cacbb108e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>Liste des actualités</h2>

  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listActus"] ?? $this->getContext($context, "listActus")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 11
            echo "      <li>
        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_view", array("id" => $this->getAttribute($context["actu"], "id", array()))), "html", null, true);
            echo "\">
          <h4>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "titre", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "auteur", array()), "html", null, true);
            echo ",
        le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</h4>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </ul>
  
";
        // line 24
        echo "  ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BUREAU")) {
            // line 25
            echo "\t  <p>
\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_add");
            echo "\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-add\"></i>
\t\t  Ajouter une actualité
\t\t</a>
\t  </p>
  ";
        }
        // line 32
        echo "
";
        
        $__internal_d70d59067455c8a8ec98ab3f040347e0869bffdb6adad87e2c493cacbb108e49->leave($__internal_d70d59067455c8a8ec98ab3f040347e0869bffdb6adad87e2c493cacbb108e49_prof);

        
        $__internal_e68f9041b91e803114e2ab935c1972a61dd98fcce8c6323fb916b8c8c207d8ca->leave($__internal_e68f9041b91e803114e2ab935c1972a61dd98fcce8c6323fb916b8c8c207d8ca_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  101 => 26,  98 => 25,  95 => 24,  91 => 21,  84 => 19,  76 => 16,  72 => 15,  67 => 13,  63 => 12,  60 => 11,  55 => 10,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/index.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>Liste des actualités</h2>

  <ul>
    {% for actu in listActus %}
      <li>
        <a href=\"{{ path('asff_actualite_view', {'id': actu.id}) }}\">
          <h4>{{ actu.titre }}
        </a>
        par {{ actu.auteur }},
        le {{ actu.date|date('d/m/Y') }}</h4>
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>
  
{# On n'affiche les liens qu'aux membres du bureau #}
  {% if is_granted('ROLE_BUREAU') %}
\t  <p>
\t\t<a href=\"{{ path('asff_actualite_add') }}\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-add\"></i>
\t\t  Ajouter une actualité
\t\t</a>
\t  </p>
  {% endif %}

{% endblock %}", "ASFFActualiteBundle:Actu:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/index.html.twig");
    }
}
