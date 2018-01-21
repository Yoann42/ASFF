<?php

/* ASFFTournoisBundle:Inscription:add.html.twig */
class __TwigTemplate_3ad22541b2905f2861bcadcb7b597b7b409b193b5c2cb59ef471a7285c29206a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "adversaire", array()), "html", null, true);
        echo "</h2>

<br>
  
";
        // line 11
        if ((($context["ok"] ?? null) == 0)) {
            // line 12
            echo "\t<div class=\"well\">
\t\tDésolé ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
            echo ", mais tu es déjà inscrit.
\t</div>
";
        } else {
            // line 16
            echo "\t";
            if ((($context["ok"] ?? null) == 1)) {
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nom", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "licence", array()), "html", null, true);
                echo "</center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "msn", array()), "html", null, true);
                echo "</b></center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "aim", array()), "html", null, true);
                echo "</b></center></td>
\t\t\t\t\t\t\t\t\t<td><center><b>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "yim", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
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
        return array (  127 => 60,  123 => 58,  116 => 54,  113 => 53,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  66 => 23,  59 => 19,  55 => 17,  52 => 16,  46 => 13,  43 => 12,  41 => 11,  34 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFTournoisBundle:Inscription:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/add.html.twig");
    }
}
