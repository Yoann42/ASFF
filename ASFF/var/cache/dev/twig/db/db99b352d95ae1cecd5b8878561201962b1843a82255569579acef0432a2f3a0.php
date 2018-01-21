<?php

/* ASFFTournoisBundle:Tournois:index.html.twig */
class __TwigTemplate_2091205f519d28f1c628ca217987627a04f44c1d47a40b7630a0d0f443e5102f extends Twig_Template
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
        $__internal_8db48e46265b6a43678f123fd02d18d8d6e27798896a1937c062f8cf704852ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db48e46265b6a43678f123fd02d18d8d6e27798896a1937c062f8cf704852ec->enter($__internal_8db48e46265b6a43678f123fd02d18d8d6e27798896a1937c062f8cf704852ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:index.html.twig"));

        $__internal_885c42691d13d4a65ec8ec72477cf269e658b7301bb4dc61a0dcae15ee46fafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885c42691d13d4a65ec8ec72477cf269e658b7301bb4dc61a0dcae15ee46fafb->enter($__internal_885c42691d13d4a65ec8ec72477cf269e658b7301bb4dc61a0dcae15ee46fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db48e46265b6a43678f123fd02d18d8d6e27798896a1937c062f8cf704852ec->leave($__internal_8db48e46265b6a43678f123fd02d18d8d6e27798896a1937c062f8cf704852ec_prof);

        
        $__internal_885c42691d13d4a65ec8ec72477cf269e658b7301bb4dc61a0dcae15ee46fafb->leave($__internal_885c42691d13d4a65ec8ec72477cf269e658b7301bb4dc61a0dcae15ee46fafb_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_989120380f34f549a0daf00f8e486d41135f28f20a09c8e4cbff4336e7ad4a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989120380f34f549a0daf00f8e486d41135f28f20a09c8e4cbff4336e7ad4a69->enter($__internal_989120380f34f549a0daf00f8e486d41135f28f20a09c8e4cbff4336e7ad4a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_8716dd9d9240afda5afd06bf7ff2c1bf8e4f7ceb74d180404f5d273a44b74451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8716dd9d9240afda5afd06bf7ff2c1bf8e4f7ceb74d180404f5d273a44b74451->enter($__internal_8716dd9d9240afda5afd06bf7ff2c1bf8e4f7ceb74d180404f5d273a44b74451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")));
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
        
        $__internal_8716dd9d9240afda5afd06bf7ff2c1bf8e4f7ceb74d180404f5d273a44b74451->leave($__internal_8716dd9d9240afda5afd06bf7ff2c1bf8e4f7ceb74d180404f5d273a44b74451_prof);

        
        $__internal_989120380f34f549a0daf00f8e486d41135f28f20a09c8e4cbff4336e7ad4a69->leave($__internal_989120380f34f549a0daf00f8e486d41135f28f20a09c8e4cbff4336e7ad4a69_prof);

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
        return array (  175 => 74,  172 => 73,  169 => 72,  162 => 66,  155 => 64,  147 => 59,  143 => 58,  139 => 57,  131 => 51,  129 => 50,  125 => 48,  119 => 45,  115 => 44,  111 => 43,  106 => 41,  99 => 36,  97 => 35,  93 => 34,  87 => 31,  83 => 30,  79 => 29,  76 => 28,  72 => 27,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Touronis/index.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  

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
          {% for tournois in listTournois %}
          <tr>
            <td><b><center>{{ tournois.adversaire }}</center></b></td>
            <td><center>{{ tournois.datetournois|date('d/m/Y') }}</center></td>
            <td><center>{{ tournois.datelimit|date('d/m/Y') }}</center></td>
            <td>
              <div class=\"btn-group\">
                <a href=\"{{ path('asff_tournois_view', {'id': tournois.id}) }}\" class=\"btn btn-sm btn-default\">Plus d'infos</a>
                {% if is_granted('ROLE_JOUEUR') %}
                  <button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                    <span class=\"sr-only\">Toggle Dropdown</span>
                  </button>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('asff_tournois_view', {'id': tournois.id}) }}\">Plus d'info</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"{{ path('asff_tournois_inscription_add', {'id': tournois.id}) }}\">M'inscrire</a></li>
                    <li><a href=\"{{ path('asff_tournois_inscription_edit', {'id': tournois.id}) }}\">Modifier mon inscription</a></li>
                    <li><a href=\"{{ path('asff_tournois_inscription_delete', {'id': tournois.id}) }}\">Me désinscrire</a></li>
                  </ul>
                {% endif %}
              </div>
            </td>
            {% if is_granted('ROLE_BUREAU') %}
            <td>
              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Admin <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"{{ path('asff_tournois_getinfo', {'id': tournois.id}) }}\">Récupérer les participants</a></li>
                  <li><a href=\"{{ path('asff_tournois_edit', {'id': tournois.id}) }}\">Modifier l'annonce du tournois</a></li>
                  <li><a href=\"{{ path('asff_tournois_delete', {'id': tournois.id}) }}\">Supprimer le tournois</a></li>
                </ul>
              </div>
            </td>
            {% endif %}
          </tr>
          {% endfor %}
        <tbody>
    </table>
  </div>
</div>
  
{# On n'affiche les liens qu'aux membres du bureau #}
  {% if is_granted('ROLE_WEBMASTER') %}
\t  <p>
\t\t<a href=\"{{ path('asff_tournois_add') }}\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-add\"></i>
\t\t  Ajouter un tournois
\t\t</a>
\t  </p>
  {% endif %}
{% endblock %}", "ASFFTournoisBundle:Tournois:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\index.html.twig");
    }
}
