<?php

/* ASFFUserBundle:MonCompte:index.html.twig */
class __TwigTemplate_e78694f617b3f2a2cf41d173453a58c800d9c5e24af7f44b5e6c7287cd1201ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFUserBundle::layout.html.twig", "ASFFUserBundle:MonCompte:index.html.twig", 3);
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
        $__internal_c8a500e1eb8225609181c7016c9b3c3e86e28bb877f93ebd4c24e1bc98994b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a500e1eb8225609181c7016c9b3c3e86e28bb877f93ebd4c24e1bc98994b9c->enter($__internal_c8a500e1eb8225609181c7016c9b3c3e86e28bb877f93ebd4c24e1bc98994b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFUserBundle:MonCompte:index.html.twig"));

        $__internal_ff7e14046411d8232294b9bd02e694b52501458c6dd4ef819f3aabcf9db46f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7e14046411d8232294b9bd02e694b52501458c6dd4ef819f3aabcf9db46f21->enter($__internal_ff7e14046411d8232294b9bd02e694b52501458c6dd4ef819f3aabcf9db46f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFUserBundle:MonCompte:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a500e1eb8225609181c7016c9b3c3e86e28bb877f93ebd4c24e1bc98994b9c->leave($__internal_c8a500e1eb8225609181c7016c9b3c3e86e28bb877f93ebd4c24e1bc98994b9c_prof);

        
        $__internal_ff7e14046411d8232294b9bd02e694b52501458c6dd4ef819f3aabcf9db46f21->leave($__internal_ff7e14046411d8232294b9bd02e694b52501458c6dd4ef819f3aabcf9db46f21_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bb3d0f89a387afa000f5fb4a185b08e869fc57a1e80c36030f7abdbc6c64d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb3d0f89a387afa000f5fb4a185b08e869fc57a1e80c36030f7abdbc6c64d7e->enter($__internal_4bb3d0f89a387afa000f5fb4a185b08e869fc57a1e80c36030f7abdbc6c64d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a156328b025fe98c50a51bb227935c4cf647ba05d6d7f93bdaef8d4685aa9704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a156328b025fe98c50a51bb227935c4cf647ba05d6d7f93bdaef8d4685aa9704->enter($__internal_a156328b025fe98c50a51bb227935c4cf647ba05d6d7f93bdaef8d4685aa9704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a156328b025fe98c50a51bb227935c4cf647ba05d6d7f93bdaef8d4685aa9704->leave($__internal_a156328b025fe98c50a51bb227935c4cf647ba05d6d7f93bdaef8d4685aa9704_prof);

        
        $__internal_4bb3d0f89a387afa000f5fb4a185b08e869fc57a1e80c36030f7abdbc6c64d7e->leave($__internal_4bb3d0f89a387afa000f5fb4a185b08e869fc57a1e80c36030f7abdbc6c64d7e_prof);

    }

    public function getTemplateName()
    {
        return "ASFFUserBundle:MonCompte:index.html.twig";
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

{% endblock fos_user_content %}", "ASFFUserBundle:MonCompte:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle/Resources/views/MonCompte/index.html.twig");
    }
}
