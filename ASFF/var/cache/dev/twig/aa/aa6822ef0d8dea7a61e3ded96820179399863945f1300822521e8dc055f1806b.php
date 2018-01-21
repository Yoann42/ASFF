<?php

/* ASFFActualiteBundle:Actu:index.html.twig */
class __TwigTemplate_5a02b71a57695a3634fa855d9c31180a6056787bbc173d79fe1a688ca16cd510 extends Twig_Template
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
        $__internal_7173a57601a845763a3191b5f267b28d77fb9fef0227a33e8775d6dd7dce0531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7173a57601a845763a3191b5f267b28d77fb9fef0227a33e8775d6dd7dce0531->enter($__internal_7173a57601a845763a3191b5f267b28d77fb9fef0227a33e8775d6dd7dce0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:index.html.twig"));

        $__internal_133993e145fdf6b62e7f116b2003a4af66fc872e1dd2f4690c982fa72ff136e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133993e145fdf6b62e7f116b2003a4af66fc872e1dd2f4690c982fa72ff136e8->enter($__internal_133993e145fdf6b62e7f116b2003a4af66fc872e1dd2f4690c982fa72ff136e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7173a57601a845763a3191b5f267b28d77fb9fef0227a33e8775d6dd7dce0531->leave($__internal_7173a57601a845763a3191b5f267b28d77fb9fef0227a33e8775d6dd7dce0531_prof);

        
        $__internal_133993e145fdf6b62e7f116b2003a4af66fc872e1dd2f4690c982fa72ff136e8->leave($__internal_133993e145fdf6b62e7f116b2003a4af66fc872e1dd2f4690c982fa72ff136e8_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_535c2c2c6173e12fe5223e4e40ae97d84f9884b715d348b2c6307747d7d1d1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535c2c2c6173e12fe5223e4e40ae97d84f9884b715d348b2c6307747d7d1d1e0->enter($__internal_535c2c2c6173e12fe5223e4e40ae97d84f9884b715d348b2c6307747d7d1d1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_bfe118a7fc89b4cbf0636d126de8e30c985d7dc40567f2afd933b8323d82616e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe118a7fc89b4cbf0636d126de8e30c985d7dc40567f2afd933b8323d82616e->enter($__internal_bfe118a7fc89b4cbf0636d126de8e30c985d7dc40567f2afd933b8323d82616e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>Liste des actualités</h2>

  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listActus"]) ? $context["listActus"] : $this->getContext($context, "listActus")));
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
        
        $__internal_bfe118a7fc89b4cbf0636d126de8e30c985d7dc40567f2afd933b8323d82616e->leave($__internal_bfe118a7fc89b4cbf0636d126de8e30c985d7dc40567f2afd933b8323d82616e_prof);

        
        $__internal_535c2c2c6173e12fe5223e4e40ae97d84f9884b715d348b2c6307747d7d1d1e0->leave($__internal_535c2c2c6173e12fe5223e4e40ae97d84f9884b715d348b2c6307747d7d1d1e0_prof);

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

{% endblock %}", "ASFFActualiteBundle:Actu:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\index.html.twig");
    }
}
