<?php

/* ASFFTournoisBundle:Inscription:add.html.twig */
class __TwigTemplate_cc5537d5b561254072e7781d2fa6221d69e8be4eadac3ebfd9dda412b7261902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Inscription:add.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFTournoisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f309cb3c5d9c3305860eb997cbbf51de388cc02f2e73255219be9052ba470a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f309cb3c5d9c3305860eb997cbbf51de388cc02f2e73255219be9052ba470a13->enter($__internal_f309cb3c5d9c3305860eb997cbbf51de388cc02f2e73255219be9052ba470a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:add.html.twig"));

        $__internal_35b5c5865d4a25fd7e57289616f989fbb43122365519ebdb24e062ebc0bfa964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b5c5865d4a25fd7e57289616f989fbb43122365519ebdb24e062ebc0bfa964->enter($__internal_35b5c5865d4a25fd7e57289616f989fbb43122365519ebdb24e062ebc0bfa964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f309cb3c5d9c3305860eb997cbbf51de388cc02f2e73255219be9052ba470a13->leave($__internal_f309cb3c5d9c3305860eb997cbbf51de388cc02f2e73255219be9052ba470a13_prof);

        
        $__internal_35b5c5865d4a25fd7e57289616f989fbb43122365519ebdb24e062ebc0bfa964->leave($__internal_35b5c5865d4a25fd7e57289616f989fbb43122365519ebdb24e062ebc0bfa964_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d3875228c6b1d096f936edbe3001732c09ac34d17a9bce9c2c08296d0651410f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3875228c6b1d096f936edbe3001732c09ac34d17a9bce9c2c08296d0651410f->enter($__internal_d3875228c6b1d096f936edbe3001732c09ac34d17a9bce9c2c08296d0651410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_dde51c6018ee2c43df473772f3d61ba63d2d08d728308ddc73954282fb6bc23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde51c6018ee2c43df473772f3d61ba63d2d08d728308ddc73954282fb6bc23e->enter($__internal_dde51c6018ee2c43df473772f3d61ba63d2d08d728308ddc73954282fb6bc23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "adversaire", array()), "html", null, true);
        echo "</h2>

<br>
  
";
        // line 11
        if ((($context["ok"] ?? $this->getContext($context, "ok")) == 0)) {
            // line 12
            echo "\t<div class=\"well\">
\t\tDésolé ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
            echo ", mais tu es déjà inscrit.
\t</div>
";
        } else {
            // line 16
            echo "\t";
            if ((($context["ok"] ?? $this->getContext($context, "ok")) == 1)) {
                // line 17
                echo "\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t";
                // line 19
                echo twig_include($this->env, $context, "ASFFTournoisBundle:Inscription:form.html.twig");
                echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\"><h3>Classement de ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
                echo "</h3></div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th><center>Licence</center></th>
\t\t\t\t\t\t\t\t\t<th><center>Simple</center></th>
\t\t\t\t\t\t\t\t\t<th><center>Double</center></th>
\t\t\t\t\t\t\t\t\t<th><center>Mixte</center></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><center>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "licence", array()), "html", null, true);
                echo "</center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "msn", array()), "html", null, true);
                echo "</b></center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "aim", array()), "html", null, true);
                echo "</b></center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "yim", array()), "html", null, true);
                echo "</b></center></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<center><small><i>Si vous ne voyez pas votre classement c'est que vous n'êtes pas encore classé ou que votre numéro de licence est mal renseigné</i></small></center>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            } else {
                // line 53
                echo "\t\t<div class=\"panel panel-primary\">
\t\t\tDésolé ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
                echo ", mais la date limite d'inscription est atteinte.
\t\t</div>
\t";
            }
        }
        // line 58
        echo "  

<a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\" class=\"btn btn-default\">
\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\tRetour à la liste des tournois
</a>


";
        
        $__internal_dde51c6018ee2c43df473772f3d61ba63d2d08d728308ddc73954282fb6bc23e->leave($__internal_dde51c6018ee2c43df473772f3d61ba63d2d08d728308ddc73954282fb6bc23e_prof);

        
        $__internal_d3875228c6b1d096f936edbe3001732c09ac34d17a9bce9c2c08296d0651410f->leave($__internal_d3875228c6b1d096f936edbe3001732c09ac34d17a9bce9c2c08296d0651410f_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Inscription:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 60,  141 => 58,  134 => 54,  131 => 53,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  84 => 23,  77 => 19,  73 => 17,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  52 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/view/Tournois/add.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block ocplatform_body %}

<h2>{{ tournois.adversaire }}</h2>

<br>
  
{% if ok == 0 %}
\t<div class=\"well\">
\t\tDésolé {{ user.prenom }}, mais tu es déjà inscrit.
\t</div>
{% else %}
\t{% if ok == 1 %}
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t{{ include(\"ASFFTournoisBundle:Inscription:form.html.twig\") }}
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\"><h3>Classement de {{ user.prenom }} {{ user.nom }}</h3></div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th><center>Licence</center></th>
\t\t\t\t\t\t\t\t\t<th><center>Simple</center></th>
\t\t\t\t\t\t\t\t\t<th><center>Double</center></th>
\t\t\t\t\t\t\t\t\t<th><center>Mixte</center></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><center>{{ user.licence }}</center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>{{ user.msn }}</b></center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>{{ user.aim }}</b></center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>{{ user.yim }}</b></center></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<center><small><i>Si vous ne voyez pas votre classement c'est que vous n'êtes pas encore classé ou que votre numéro de licence est mal renseigné</i></small></center>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t<div class=\"panel panel-primary\">
\t\t\tDésolé {{ user.prenom }}, mais la date limite d'inscription est atteinte.
\t\t</div>
\t{% endif %}
{% endif %}
  

<a href=\"{{ path('asff_tournois_home') }}\" class=\"btn btn-default\">
\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\tRetour à la liste des tournois
</a>


{% endblock %}", "ASFFTournoisBundle:Inscription:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/add.html.twig");
    }
}
