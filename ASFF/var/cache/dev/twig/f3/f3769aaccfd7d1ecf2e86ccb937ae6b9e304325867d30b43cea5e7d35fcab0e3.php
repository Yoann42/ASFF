<?php

/* ASFFActualiteBundle:Actu:view.html.twig */
class __TwigTemplate_f294ad715e94df4367b29b79e7d124135732191f0f77c93a066763a3583845ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "ASFFActualiteBundle:Actu:view.html.twig", 3);
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
        $__internal_23c46f91a05f29229595e0a8b256f418c98742eb00812fe9eca0a5111e39d109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c46f91a05f29229595e0a8b256f418c98742eb00812fe9eca0a5111e39d109->enter($__internal_23c46f91a05f29229595e0a8b256f418c98742eb00812fe9eca0a5111e39d109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:view.html.twig"));

        $__internal_caab4fac0bf2b961ad2e25ccef2707b5ddcb3bbc8b23c01bbf9bdff31711f768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caab4fac0bf2b961ad2e25ccef2707b5ddcb3bbc8b23c01bbf9bdff31711f768->enter($__internal_caab4fac0bf2b961ad2e25ccef2707b5ddcb3bbc8b23c01bbf9bdff31711f768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c46f91a05f29229595e0a8b256f418c98742eb00812fe9eca0a5111e39d109->leave($__internal_23c46f91a05f29229595e0a8b256f418c98742eb00812fe9eca0a5111e39d109_prof);

        
        $__internal_caab4fac0bf2b961ad2e25ccef2707b5ddcb3bbc8b23c01bbf9bdff31711f768->leave($__internal_caab4fac0bf2b961ad2e25ccef2707b5ddcb3bbc8b23c01bbf9bdff31711f768_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f934da207e01f852ee0da9da04e7d52a7a0d9d0ed300741b2523d75b87876042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f934da207e01f852ee0da9da04e7d52a7a0d9d0ed300741b2523d75b87876042->enter($__internal_f934da207e01f852ee0da9da04e7d52a7a0d9d0ed300741b2523d75b87876042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_7547939871af9518f2f5c7cf03a4d9cb50aeff9aaa5ebb2fee6938374fd6c3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7547939871af9518f2f5c7cf03a4d9cb50aeff9aaa5ebb2fee6938374fd6c3b4->enter($__internal_7547939871af9518f2f5c7cf03a4d9cb50aeff9aaa5ebb2fee6938374fd6c3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "

\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "titre", array()), "html", null, true);
        echo "</h2></div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 11
        if ( !(null === $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "image", array()))) {
            // line 12
            echo "\t\t\t    <div class=\"row\">
\t\t\t\t\t<center><img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
\t\t\t\t\t\twidth=\"70%\" 
\t\t\t\t\t\theight=\"70%\"
\t\t\t\t\t\talt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "image", array()), "alt", array()), "html", null, true);
            echo "\"/></center>
\t\t\t\t</div>
\t\t\t";
        }
        // line 19
        echo "\t\t\t<br><br>
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "contenu", array()), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<i>Publier par ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t\t</div>
\t</div>


\t<a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_home");
        echo "\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste
\t</a>

\t";
        // line 34
        echo "\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BUREAU")) {
            // line 35
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_edit", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'actualité
\t\t</a>
\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_delete", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'actualité
\t\t</a>
\t";
        }
        // line 44
        echo "
";
        
        $__internal_7547939871af9518f2f5c7cf03a4d9cb50aeff9aaa5ebb2fee6938374fd6c3b4->leave($__internal_7547939871af9518f2f5c7cf03a4d9cb50aeff9aaa5ebb2fee6938374fd6c3b4_prof);

        
        $__internal_f934da207e01f852ee0da9da04e7d52a7a0d9d0ed300741b2523d75b87876042->leave($__internal_f934da207e01f852ee0da9da04e7d52a7a0d9d0ed300741b2523d75b87876042_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  114 => 39,  106 => 35,  103 => 34,  95 => 28,  85 => 23,  79 => 20,  76 => 19,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/view/Actu/view.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block ocplatform_body %}


\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\"><h2>{{ actu.titre }}</h2></div>
\t\t<div class=\"panel-body\">
\t\t\t{% if actu.image is not null %}
\t\t\t    <div class=\"row\">
\t\t\t\t\t<center><img src=\"{{ asset(actu.image.webPath) }}\"
\t\t\t\t\t\twidth=\"70%\" 
\t\t\t\t\t\theight=\"70%\"
\t\t\t\t\t\talt=\"{{ actu.image.alt }}\"/></center>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<br><br>
\t\t\t{{ actu.contenu }}
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<i>Publier par {{ actu.auteur }}, le {{ actu.date|date('d/m/Y') }}</i>
\t\t</div>
\t</div>


\t<a href=\"{{ path('asff_actualite_home') }}\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste
\t</a>

\t{# On n'affiche les liens qu'aux membres du bureau #}
\t{% if is_granted('ROLE_BUREAU') %}
\t\t<a href=\"{{ path('asff_actualite_edit', {'id': actu.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'actualité
\t\t</a>
\t\t<a href=\"{{ path('asff_actualite_delete', {'id': actu.id}) }}\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'actualité
\t\t</a>
\t{% endif %}

{% endblock %}", "ASFFActualiteBundle:Actu:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/view.html.twig");
    }
}
