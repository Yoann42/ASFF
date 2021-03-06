<?php

/* ASFFUserBundle:MonCompte:index.html.twig */
class __TwigTemplate_a0910c8ded1d50a41725521e57c1342422c654b037e74cddbaea31dbdd955070 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h2>Bonjour ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["ListInscriptionsTournois"] ?? null));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "licence", array()), "html", null, true);
        echo "</center></td>
\t\t\t\t        <td><center><b>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "msn", array()), "html", null, true);
        echo "</b></center></td>
\t\t\t\t        <td><center><b>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "aim", array()), "html", null, true);
        echo "</b></center></td>
\t\t\t\t        <td><center><b>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "yim", array()), "html", null, true);
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
        return array (  143 => 73,  139 => 72,  135 => 71,  131 => 70,  108 => 49,  96 => 43,  92 => 42,  87 => 40,  78 => 34,  72 => 31,  68 => 30,  64 => 29,  61 => 28,  57 => 27,  34 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFUserBundle:MonCompte:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle/Resources/views/MonCompte/index.html.twig");
    }
}
