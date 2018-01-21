<?php

/* @ASFFTournois/Tournois/view.html.twig */
class __TwigTemplate_15daf29d74ba6c951c19df3a3f6894eb52ef8626c193c79eb34e46179ba9d574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Tournois/view.html.twig", 3);
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
        $__internal_6f32e225d406333b0aaaeb7ee6a0e0a9512294a6048d617f24eea22fc94e8777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f32e225d406333b0aaaeb7ee6a0e0a9512294a6048d617f24eea22fc94e8777->enter($__internal_6f32e225d406333b0aaaeb7ee6a0e0a9512294a6048d617f24eea22fc94e8777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/view.html.twig"));

        $__internal_374c22d2404d21a986c3579e0ab2c2dd7ee5fa3473ec4efe82b064fbedd91bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374c22d2404d21a986c3579e0ab2c2dd7ee5fa3473ec4efe82b064fbedd91bf9->enter($__internal_374c22d2404d21a986c3579e0ab2c2dd7ee5fa3473ec4efe82b064fbedd91bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f32e225d406333b0aaaeb7ee6a0e0a9512294a6048d617f24eea22fc94e8777->leave($__internal_6f32e225d406333b0aaaeb7ee6a0e0a9512294a6048d617f24eea22fc94e8777_prof);

        
        $__internal_374c22d2404d21a986c3579e0ab2c2dd7ee5fa3473ec4efe82b064fbedd91bf9->leave($__internal_374c22d2404d21a986c3579e0ab2c2dd7ee5fa3473ec4efe82b064fbedd91bf9_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1cce7f67cf1367c0abb51300ff0c058e8cc14196bb1a461f5eaf9d73725c332a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cce7f67cf1367c0abb51300ff0c058e8cc14196bb1a461f5eaf9d73725c332a->enter($__internal_1cce7f67cf1367c0abb51300ff0c058e8cc14196bb1a461f5eaf9d73725c332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_350992e11feb16819e19e517c7d4b5f06ff2d175c1696ba319a844bdf38c7e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350992e11feb16819e19e517c7d4b5f06ff2d175c1696ba319a844bdf38c7e87->enter($__internal_350992e11feb16819e19e517c7d4b5f06ff2d175c1696ba319a844bdf38c7e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "  
<div class=\"container-fluid\">
\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-primary\">
\t\t    <div class=\"panel-heading\"><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "adversaire", array()), "html", null, true);
        echo "</h2></div>
\t\t    <div class=\"panel-body\">
\t\t\t    Le tournois de ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "adversaire", array()), "html", null, true);
        echo " aura lieu le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "dateTournois", array()), "d/m/Y"), "html", null, true);
        echo ".
\t\t\t\t<br>
\t\t\t\tLimite d'inscription : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "dateLimit", array()), "d/m/Y"), "html", null, true);
        echo ".
\t\t\t\t
\t\t\t\t";
        // line 16
        if ( !(null === $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "series", array()))) {
            // line 17
            echo "\t\t\t\t<br><br>
\t\t\t\t\tSéries : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "series", array()), "html", null, true);
            echo "
\t\t\t    ";
        }
        // line 20
        echo "\t\t\t\t
\t\t\t\t";
        // line 21
        if ( !(null === $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "TableauxPoules", array()))) {
            // line 22
            echo "\t\t\t\t\tTableaux/Poules : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "TableauxPoules", array()), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t    ";
        }
        // line 25
        echo "\t\t\t\t
\t\t\t\t";
        // line 26
        if ( !(null === $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "remarque", array()))) {
            // line 27
            echo "\t\t\t\t<br><br>
\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "remarque", array()), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t    ";
        }
        // line 31
        echo "\t\t\t\t
\t\t\t\t";
        // line 32
        if ( !(null === $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "lienTournois", array()))) {
            // line 33
            echo "\t\t\t\t<br>
\t\t\t\t\t<a href=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "lienTournois", array()), "html", null, true);
            echo "> Lien vers le site du tournois </a>
\t\t\t    ";
        }
        // line 36
        echo "\t\t\t</div>

\t\t\t<div class=\"panel-footer\">
\t\t\t\t<i>Ajouter par ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"btn-group\">
\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour à la liste</a>
\t\t\t";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JOUEUR")) {
            // line 46
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_add", array("id" => $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-ok-circle\"></i>Je m'inscris</a>
\t\t\t";
        }
        // line 48
        echo "\t\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BUREAU")) {
            // line 49
            echo "\t\t\t<div class=\"btn-group\">
\t\t        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t          Administration <span class=\"caret\"></span>
\t\t        </button>
\t\t        <ul class=\"dropdown-menu\">
\t\t          <li><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_getinfo", array("id" => $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "id", array()))), "html", null, true);
            echo "\">Récupérer les participants</a></li>
\t\t          <li role=\"separator\" class=\"divider\"></li>
\t\t          <li><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_edit", array("id" => $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "id", array()))), "html", null, true);
            echo "\">Modifier l'annonce du tournois</a></li>
\t\t          <li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_delete", array("id" => $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "id", array()))), "html", null, true);
            echo "\">Supprimer le tournois</a></li>
\t\t        </ul>
\t\t      </div>
\t\t\t";
        }
        // line 61
        echo "\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-primary\">
\t\t    <div class=\"panel-heading\"><h3> Qui est inscrit ? </h3></div>
\t\t    <div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t      <tr>
\t\t\t\t        <th><center>Date d'inscription</center></th>
\t\t\t\t        <th><center>Nom</center></th>
\t\t\t\t        <th><center>Prénom</center></th>
\t\t\t\t        <th><center>Simple</center></th>
\t\t\t\t        <th><center>Double</center></th>
\t\t\t\t        <th><center>Mixte</center></th>
\t\t\t\t      </tr>
\t\t\t\t    </thead>

\t\t\t\t    <tbody>
\t\t\t\t\t    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ListInscrit"] ?? $this->getContext($context, "ListInscrit")));
        foreach ($context['_seq'] as $context["_key"] => $context["Inscrit"]) {
            // line 81
            echo "\t\t\t\t\t      <tr>
\t\t\t\t\t        <td><center>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Inscrit"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</center></td>
\t\t\t\t\t        <td><center>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Inscrit"], "user", array()), "nom", array()), "html", null, true);
            echo "</center></td>
\t\t\t\t\t        <td><center>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Inscrit"], "user", array()), "prenom", array()), "html", null, true);
            echo "</center></td>
\t\t\t\t\t        <td>
\t\t\t\t\t        \t";
            // line 86
            if (($this->getAttribute($context["Inscrit"], "MatchSimple", array()) == true)) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t<center>Oui</center>
\t\t\t\t\t\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t<center>Non</center>
\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t        \t";
            // line 93
            if (($this->getAttribute($context["Inscrit"], "MatchDouble", array()) == true)) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\t<center>Oui</center>
\t\t\t\t\t\t\t\t";
            } else {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t<center>Non</center>
\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t        \t";
            // line 100
            if (($this->getAttribute($context["Inscrit"], "MatchMixte", array()) == true)) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t<center>Oui</center>
\t\t\t\t\t\t\t\t";
            } else {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t<center>Non</center>
\t\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t      </tr>
\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Inscrit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t    <tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

\t
<br><hr><br>
\t


\t

";
        
        $__internal_350992e11feb16819e19e517c7d4b5f06ff2d175c1696ba319a844bdf38c7e87->leave($__internal_350992e11feb16819e19e517c7d4b5f06ff2d175c1696ba319a844bdf38c7e87_prof);

        
        $__internal_1cce7f67cf1367c0abb51300ff0c058e8cc14196bb1a461f5eaf9d73725c332a->leave($__internal_1cce7f67cf1367c0abb51300ff0c058e8cc14196bb1a461f5eaf9d73725c332a_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 108,  253 => 105,  249 => 103,  245 => 101,  243 => 100,  239 => 98,  235 => 96,  231 => 94,  229 => 93,  225 => 91,  221 => 89,  217 => 87,  215 => 86,  210 => 84,  206 => 83,  202 => 82,  199 => 81,  195 => 80,  174 => 61,  167 => 57,  163 => 56,  158 => 54,  151 => 49,  148 => 48,  142 => 46,  140 => 45,  136 => 44,  126 => 39,  121 => 36,  116 => 34,  113 => 33,  111 => 32,  108 => 31,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  87 => 22,  85 => 21,  82 => 20,  77 => 18,  74 => 17,  72 => 16,  67 => 14,  60 => 12,  55 => 10,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/view/Tournois/view.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block ocplatform_body %}
  
<div class=\"container-fluid\">
\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-primary\">
\t\t    <div class=\"panel-heading\"><h2>{{ tournois.adversaire }}</h2></div>
\t\t    <div class=\"panel-body\">
\t\t\t    Le tournois de {{ tournois.adversaire }} aura lieu le {{ tournois.dateTournois|date('d/m/Y') }}.
\t\t\t\t<br>
\t\t\t\tLimite d'inscription : {{ tournois.dateLimit|date('d/m/Y') }}.
\t\t\t\t
\t\t\t\t{% if tournois.series is not null %}
\t\t\t\t<br><br>
\t\t\t\t\tSéries : {{ tournois.series }}
\t\t\t    {% endif %}
\t\t\t\t
\t\t\t\t{% if tournois.TableauxPoules is not null %}
\t\t\t\t\tTableaux/Poules : {{ tournois.TableauxPoules }}
\t\t\t\t<br>
\t\t\t    {% endif %}
\t\t\t\t
\t\t\t\t{% if tournois.remarque is not null %}
\t\t\t\t<br><br>
\t\t\t\t\t{{ tournois.remarque }}
\t\t\t\t<br>
\t\t\t    {% endif %}
\t\t\t\t
\t\t\t\t{% if tournois.lienTournois is not null %}
\t\t\t\t<br>
\t\t\t\t\t<a href={{ tournois.lienTournois }}> Lien vers le site du tournois </a>
\t\t\t    {% endif %}
\t\t\t</div>

\t\t\t<div class=\"panel-footer\">
\t\t\t\t<i>Ajouter par {{ tournois.auteur }}, le {{ tournois.date|date('d/m/Y') }}</i>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"btn-group\">
\t\t\t<a href=\"{{ path('asff_tournois_home') }}\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour à la liste</a>
\t\t\t{% if is_granted('ROLE_JOUEUR') %}
\t\t\t\t<a href=\"{{ path('asff_tournois_inscription_add', {'id': tournois.id}) }}\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-ok-circle\"></i>Je m'inscris</a>
\t\t\t{% endif %}
\t\t\t{% if is_granted('ROLE_BUREAU') %}
\t\t\t<div class=\"btn-group\">
\t\t        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t          Administration <span class=\"caret\"></span>
\t\t        </button>
\t\t        <ul class=\"dropdown-menu\">
\t\t          <li><a href=\"{{ path('asff_tournois_getinfo', {'id': tournois.id}) }}\">Récupérer les participants</a></li>
\t\t          <li role=\"separator\" class=\"divider\"></li>
\t\t          <li><a href=\"{{ path('asff_tournois_edit', {'id': tournois.id}) }}\">Modifier l'annonce du tournois</a></li>
\t\t          <li><a href=\"{{ path('asff_tournois_delete', {'id': tournois.id}) }}\">Supprimer le tournois</a></li>
\t\t        </ul>
\t\t      </div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-primary\">
\t\t    <div class=\"panel-heading\"><h3> Qui est inscrit ? </h3></div>
\t\t    <div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t      <tr>
\t\t\t\t        <th><center>Date d'inscription</center></th>
\t\t\t\t        <th><center>Nom</center></th>
\t\t\t\t        <th><center>Prénom</center></th>
\t\t\t\t        <th><center>Simple</center></th>
\t\t\t\t        <th><center>Double</center></th>
\t\t\t\t        <th><center>Mixte</center></th>
\t\t\t\t      </tr>
\t\t\t\t    </thead>

\t\t\t\t    <tbody>
\t\t\t\t\t    {% for Inscrit in ListInscrit %}
\t\t\t\t\t      <tr>
\t\t\t\t\t        <td><center>{{ Inscrit.date|date('d-m-Y') }}</center></td>
\t\t\t\t\t        <td><center>{{ Inscrit.user.nom }}</center></td>
\t\t\t\t\t        <td><center>{{ Inscrit.user.prenom }}</center></td>
\t\t\t\t\t        <td>
\t\t\t\t\t        \t{% if Inscrit.MatchSimple == true %}
\t\t\t\t\t\t\t\t\t<center>Oui</center>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<center>Non</center>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t        \t{% if Inscrit.MatchDouble == true %}
\t\t\t\t\t\t\t\t\t<center>Oui</center>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<center>Non</center>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t        \t{% if Inscrit.MatchMixte == true %}
\t\t\t\t\t\t\t\t\t<center>Oui</center>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<center>Non</center>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t      </tr>
\t\t\t\t\t    {% endfor %}
\t\t\t\t    <tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

\t
<br><hr><br>
\t


\t

{% endblock %}", "@ASFFTournois/Tournois/view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\view.html.twig");
    }
}
