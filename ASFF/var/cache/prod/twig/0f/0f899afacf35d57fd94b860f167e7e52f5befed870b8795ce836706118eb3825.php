<?php

/* @ASFFTournois/Tournois/view.html.twig */
class __TwigTemplate_132a753e1cb298b1cd5b98c9b8374ab40e2233236978eeb494020a59f146f206 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 6
        echo "  
<div class=\"container-fluid\">
\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-primary\">
\t\t    <div class=\"panel-heading\"><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "adversaire", array()), "html", null, true);
        echo "</h2></div>
\t\t    <div class=\"panel-body\">
\t\t\t    Le tournois de ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "adversaire", array()), "html", null, true);
        echo " aura lieu le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "dateTournois", array()), "d/m/Y"), "html", null, true);
        echo ".
\t\t\t\t<br>
\t\t\t\tLimite d'inscription : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "dateLimit", array()), "d/m/Y"), "html", null, true);
        echo ".
\t\t\t\t
\t\t\t\t";
        // line 16
        if ( !(null === $this->getAttribute(($context["tournois"] ?? null), "series", array()))) {
            // line 17
            echo "\t\t\t\t<br><br>
\t\t\t\t\tSéries : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "series", array()), "html", null, true);
            echo "
\t\t\t    ";
        }
        // line 20
        echo "\t\t\t\t
\t\t\t\t";
        // line 21
        if ( !(null === $this->getAttribute(($context["tournois"] ?? null), "TableauxPoules", array()))) {
            // line 22
            echo "\t\t\t\t\tTableaux/Poules : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "TableauxPoules", array()), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t    ";
        }
        // line 25
        echo "\t\t\t\t
\t\t\t\t";
        // line 26
        if ( !(null === $this->getAttribute(($context["tournois"] ?? null), "remarque", array()))) {
            // line 27
            echo "\t\t\t\t<br><br>
\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "remarque", array()), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t    ";
        }
        // line 31
        echo "\t\t\t\t
\t\t\t\t";
        // line 32
        if ( !(null === $this->getAttribute(($context["tournois"] ?? null), "lienTournois", array()))) {
            // line 33
            echo "\t\t\t\t<br>
\t\t\t\t\t<a href=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "lienTournois", array()), "html", null, true);
            echo "> Lien vers le site du tournois </a>
\t\t\t    ";
        }
        // line 36
        echo "\t\t\t</div>

\t\t\t<div class=\"panel-footer\">
\t\t\t\t<i>Ajouter par ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_add", array("id" => $this->getAttribute(($context["tournois"] ?? null), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_getinfo", array("id" => $this->getAttribute(($context["tournois"] ?? null), "id", array()))), "html", null, true);
            echo "\">Récupérer les participants</a></li>
\t\t          <li role=\"separator\" class=\"divider\"></li>
\t\t          <li><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_edit", array("id" => $this->getAttribute(($context["tournois"] ?? null), "id", array()))), "html", null, true);
            echo "\">Modifier l'annonce du tournois</a></li>
\t\t          <li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_delete", array("id" => $this->getAttribute(($context["tournois"] ?? null), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["ListInscrit"] ?? null));
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
        return array (  243 => 108,  235 => 105,  231 => 103,  227 => 101,  225 => 100,  221 => 98,  217 => 96,  213 => 94,  211 => 93,  207 => 91,  203 => 89,  199 => 87,  197 => 86,  192 => 84,  188 => 83,  184 => 82,  181 => 81,  177 => 80,  156 => 61,  149 => 57,  145 => 56,  140 => 54,  133 => 49,  130 => 48,  124 => 46,  122 => 45,  118 => 44,  108 => 39,  103 => 36,  98 => 34,  95 => 33,  93 => 32,  90 => 31,  84 => 28,  81 => 27,  79 => 26,  76 => 25,  69 => 22,  67 => 21,  64 => 20,  59 => 18,  56 => 17,  54 => 16,  49 => 14,  42 => 12,  37 => 10,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFTournois/Tournois/view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\view.html.twig");
    }
}
