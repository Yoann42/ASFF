<?php

/* ASFFTournoisBundle:Tournois:index.html.twig */
class __TwigTemplate_41c9dc661a6777ca42f90950a57499a5c813a991ce7c7db8a2586233f1db2451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Tournois:index.html.twig", 3);
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
  

<br><br>

<div class=\"panel panel-primary\">
  <div class=\"panel-heading\"><h2>Liste des tournois</h2></div>
  <div class=\"panel-body\">

    <table class=\"table\">
      <thead>
          <tr>
            <th><center>Tournois</center></th>
            <th><center>Date du tournois</center></th>
            <th><center>Limite d'inscription</center></th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listTournois"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tournois"]) {
            // line 28
            echo "          <tr>
            <td><b><center>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournois"], "adversaire", array()), "html", null, true);
            echo "</center></b></td>
            <td><center>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournois"], "datetournois", array()), "d/m/Y"), "html", null, true);
            echo "</center></td>
            <td><center>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournois"], "datelimit", array()), "d/m/Y"), "html", null, true);
            echo "</center></td>
            <td>
              <div class=\"btn-group\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">Plus d'infos</a>
                ";
            // line 35
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JOUEUR")) {
                // line 36
                echo "                  <button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                    <span class=\"sr-only\">Toggle Dropdown</span>
                  </button>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">Plus d'info</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_add", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">M'inscrire</a></li>
                    <li><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_edit", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">Modifier mon inscription</a></li>
                    <li><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_inscription_delete", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">Me désinscrire</a></li>
                  </ul>
                ";
            }
            // line 48
            echo "              </div>
            </td>
            ";
            // line 50
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BUREAU")) {
                // line 51
                echo "            <td>
              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Admin <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_getinfo", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">Récupérer les participants</a></li>
                  <li><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_edit", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">Modifier l'annonce du tournois</a></li>
                  <li><a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_delete", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
                echo "\">Supprimer le tournois</a></li>
                </ul>
              </div>
            </td>
            ";
            }
            // line 64
            echo "          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        <tbody>
    </table>
  </div>
</div>
  
";
        // line 72
        echo "  ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_WEBMASTER")) {
            // line 73
            echo "\t  <p>
\t\t<a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_add");
            echo "\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-add\"></i>
\t\t  Ajouter un tournois
\t\t</a>
\t  </p>
  ";
        }
    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Tournois:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 74,  154 => 73,  151 => 72,  144 => 66,  137 => 64,  129 => 59,  125 => 58,  121 => 57,  113 => 51,  111 => 50,  107 => 48,  101 => 45,  97 => 44,  93 => 43,  88 => 41,  81 => 36,  79 => 35,  75 => 34,  69 => 31,  65 => 30,  61 => 29,  58 => 28,  54 => 27,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFTournoisBundle:Tournois:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Tournois/index.html.twig");
    }
}
