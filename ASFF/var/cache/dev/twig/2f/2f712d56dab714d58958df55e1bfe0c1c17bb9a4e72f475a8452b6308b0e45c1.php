<?php

/* @ASFFUser/MonCompte/index.html.twig */
class __TwigTemplate_ad073ec3bb85a3747b18a7f9c1ccd926b161f38f82263d3aeb6dc45fe7fd34a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFUserBundle::layout.html.twig", "@ASFFUser/MonCompte/index.html.twig", 3);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55409b04d3122184286521c297825b461e0900187db041efec86a3357d5563f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55409b04d3122184286521c297825b461e0900187db041efec86a3357d5563f9->enter($__internal_55409b04d3122184286521c297825b461e0900187db041efec86a3357d5563f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFUser/MonCompte/index.html.twig"));

        $__internal_04a17cd598591520762ddb83404ebd87b62e0f13c9e23502d024b4ba4b301957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a17cd598591520762ddb83404ebd87b62e0f13c9e23502d024b4ba4b301957->enter($__internal_04a17cd598591520762ddb83404ebd87b62e0f13c9e23502d024b4ba4b301957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFUser/MonCompte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55409b04d3122184286521c297825b461e0900187db041efec86a3357d5563f9->leave($__internal_55409b04d3122184286521c297825b461e0900187db041efec86a3357d5563f9_prof);

        
        $__internal_04a17cd598591520762ddb83404ebd87b62e0f13c9e23502d024b4ba4b301957->leave($__internal_04a17cd598591520762ddb83404ebd87b62e0f13c9e23502d024b4ba4b301957_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_435f995be4c73f51817bcf875c81e040087b7af8a6f31da7e72d5a10c7465484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435f995be4c73f51817bcf875c81e040087b7af8a6f31da7e72d5a10c7465484->enter($__internal_435f995be4c73f51817bcf875c81e040087b7af8a6f31da7e72d5a10c7465484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b99494bfe4d6c8e947f48dd1a0dc923c9604a146571b9dda929cdf32f5fe585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b99494bfe4d6c8e947f48dd1a0dc923c9604a146571b9dda929cdf32f5fe585->enter($__internal_7b99494bfe4d6c8e947f48dd1a0dc923c9604a146571b9dda929cdf32f5fe585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t<h2>Bonjour ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</h2>
  
\t<br>


\t<div class=\"col-md-8\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\"><h3>Mes inscriptions aux tournois</h3></div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><center>Tournois</center></th>
\t\t\t\t\t\t\t<th><center>Date du tournois</center></th>
\t\t\t\t\t\t\t<th><center>Limite d'inscription</center></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ListInscriptionsTournois"] ?? $this->getContext($context, "ListInscriptionsTournois")));
        foreach ($context['_seq'] as $context["_key"] => $context["UsersTournois"]) {
            // line 28
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b><center>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "adversaire", array()), "html", null, true);
            echo "</center></b></td>
\t\t\t\t\t\t\t\t<td><center>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "datetournois", array()), "d/m/Y"), "html", null, true);
            echo "</center></td>
\t\t\t\t\t\t\t\t<td><center>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "datelimit", array()), "d/m/Y"), "html", null, true);
            echo "</center></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">Plus d'infos</a>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "id", array()))), "html", null, true);
            echo "\">Plus d'info</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_edit", array("id" => $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "id", array()))), "html", null, true);
            echo "\">Modifier mon inscription</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_delete", array("id" => $this->getAttribute($this->getAttribute($context["UsersTournois"], "tournois", array()), "id", array()))), "html", null, true);
            echo "\">Me désinscrire</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UsersTournois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\"><h3>Mon classement</h3></div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t      <tr>
\t\t\t\t        <th><center>Licence</center></th>
\t\t\t\t        <th><center>Simple</center></th>
\t\t\t\t        <th><center>Double</center></th>
\t\t\t\t        <th><center>Mixte</center></th>
\t\t\t\t      </tr>
\t\t\t\t    </thead>

\t\t\t\t    <tbody>
\t\t\t\t      <tr>
\t\t\t\t        <td><center>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "licence", array()), "html", null, true);
        echo "</center></td>
\t\t\t\t        <td><center><b>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "msn", array()), "html", null, true);
        echo "</b></center></td>
\t\t\t\t        <td><center><b>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "aim", array()), "html", null, true);
        echo "</b></center></td>
\t\t\t\t        <td><center><b>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "yim", array()), "html", null, true);
        echo "</b></center></td>
\t\t\t\t      </tr>
\t\t\t\t    <tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<center><small><i>Si vous ne voyez pas votre classement c'est que vous n'êtes pas encore classé ou que votre numéro de licence est mal renseigné</i></small></center>
\t\t\t</div>
\t\t</div>
\t</div>
 
\t<br>

";
        
        $__internal_7b99494bfe4d6c8e947f48dd1a0dc923c9604a146571b9dda929cdf32f5fe585->leave($__internal_7b99494bfe4d6c8e947f48dd1a0dc923c9604a146571b9dda929cdf32f5fe585_prof);

        
        $__internal_435f995be4c73f51817bcf875c81e040087b7af8a6f31da7e72d5a10c7465484->leave($__internal_435f995be4c73f51817bcf875c81e040087b7af8a6f31da7e72d5a10c7465484_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFUser/MonCompte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  157 => 72,  153 => 71,  149 => 70,  126 => 49,  114 => 43,  110 => 42,  105 => 40,  96 => 34,  90 => 31,  86 => 30,  82 => 29,  79 => 28,  75 => 27,  52 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/UserBundle/Resources/views/MonComte/index.html.twig #}

{% extends \"ASFFUserBundle::layout.html.twig\" %}

{% block fos_user_content %}

\t<h2>Bonjour {{ user.prenom }}</h2>
  
\t<br>


\t<div class=\"col-md-8\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\"><h3>Mes inscriptions aux tournois</h3></div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><center>Tournois</center></th>
\t\t\t\t\t\t\t<th><center>Date du tournois</center></th>
\t\t\t\t\t\t\t<th><center>Limite d'inscription</center></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for UsersTournois in ListInscriptionsTournois %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b><center>{{ UsersTournois.tournois.adversaire }}</center></b></td>
\t\t\t\t\t\t\t\t<td><center>{{ UsersTournois.tournois.datetournois|date('d/m/Y') }}</center></td>
\t\t\t\t\t\t\t\t<td><center>{{ UsersTournois.tournois.datelimit|date('d/m/Y') }}</center></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('asff_tournois_view', {'id': UsersTournois.tournois.id}) }}\" class=\"btn btn-sm btn-default\">Plus d'infos</a>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('asff_tournois_view', {'id': UsersTournois.tournois.id}) }}\">Plus d'info</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('asff_tournois_inscription_edit', {'id': UsersTournois.tournois.id}) }}\">Modifier mon inscription</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('asff_tournois_inscription_delete', {'id': UsersTournois.tournois.id}) }}\">Me désinscrire</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\"><h3>Mon classement</h3></div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t      <tr>
\t\t\t\t        <th><center>Licence</center></th>
\t\t\t\t        <th><center>Simple</center></th>
\t\t\t\t        <th><center>Double</center></th>
\t\t\t\t        <th><center>Mixte</center></th>
\t\t\t\t      </tr>
\t\t\t\t    </thead>

\t\t\t\t    <tbody>
\t\t\t\t      <tr>
\t\t\t\t        <td><center>{{ user.licence }}</center></td>
\t\t\t\t        <td><center><b>{{ user.msn }}</b></center></td>
\t\t\t\t        <td><center><b>{{ user.aim }}</b></center></td>
\t\t\t\t        <td><center><b>{{ user.yim }}</b></center></td>
\t\t\t\t      </tr>
\t\t\t\t    <tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<center><small><i>Si vous ne voyez pas votre classement c'est que vous n'êtes pas encore classé ou que votre numéro de licence est mal renseigné</i></small></center>
\t\t\t</div>
\t\t</div>
\t</div>
 
\t<br>

{% endblock fos_user_content %}", "@ASFFUser/MonCompte/index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle\\Resources\\views\\MonCompte\\index.html.twig");
    }
}
