<?php

/* ASFFTournoisBundle:Inscription:edit.html.twig */
class __TwigTemplate_20f4527e7bbc1008ecbba0e33e069940492ad0445dd96476994435b6c2f5b828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Inscription:edit.html.twig", 3);
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
        $__internal_fcea0313565e8c12e2395b15775afd017756b7f6c79f410c1c40169b522a0c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcea0313565e8c12e2395b15775afd017756b7f6c79f410c1c40169b522a0c24->enter($__internal_fcea0313565e8c12e2395b15775afd017756b7f6c79f410c1c40169b522a0c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:edit.html.twig"));

        $__internal_1115daab1bd8db86dc363311f736a033faebf2ec634ed5d3556f1d41a8c6e84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1115daab1bd8db86dc363311f736a033faebf2ec634ed5d3556f1d41a8c6e84a->enter($__internal_1115daab1bd8db86dc363311f736a033faebf2ec634ed5d3556f1d41a8c6e84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcea0313565e8c12e2395b15775afd017756b7f6c79f410c1c40169b522a0c24->leave($__internal_fcea0313565e8c12e2395b15775afd017756b7f6c79f410c1c40169b522a0c24_prof);

        
        $__internal_1115daab1bd8db86dc363311f736a033faebf2ec634ed5d3556f1d41a8c6e84a->leave($__internal_1115daab1bd8db86dc363311f736a033faebf2ec634ed5d3556f1d41a8c6e84a_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7823297e5b40fd88fb1627fd95a417f5e015f2d588c3fdf9abcf344d7b90a23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7823297e5b40fd88fb1627fd95a417f5e015f2d588c3fdf9abcf344d7b90a23e->enter($__internal_7823297e5b40fd88fb1627fd95a417f5e015f2d588c3fdf9abcf344d7b90a23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a968590e14784552873418aabd528ef0c80f9d0000c7f15afa713606d59a314f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a968590e14784552873418aabd528ef0c80f9d0000c7f15afa713606d59a314f->enter($__internal_a968590e14784552873418aabd528ef0c80f9d0000c7f15afa713606d59a314f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "adversaire", array()), "html", null, true);
        echo "</h2>
  
  <br>
  
  <h3>Mon classement</h3>
  <p>Simple : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "msn", array()), "html", null, true);
        echo "</p>
  <p>Double : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "aim", array()), "html", null, true);
        echo "</p>
  <p>Mixte : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "yim", array()), "html", null, true);
        echo "</p>
\t\t
  <br>
\t
  ";
        // line 18
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Inscription:form.html.twig");
        echo "
  
  <p>
\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste des tournois
\t</a>
  </p>

";
        
        $__internal_a968590e14784552873418aabd528ef0c80f9d0000c7f15afa713606d59a314f->leave($__internal_a968590e14784552873418aabd528ef0c80f9d0000c7f15afa713606d59a314f_prof);

        
        $__internal_7823297e5b40fd88fb1627fd95a417f5e015f2d588c3fdf9abcf344d7b90a23e->leave($__internal_7823297e5b40fd88fb1627fd95a417f5e015f2d588c3fdf9abcf344d7b90a23e_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Inscription:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  75 => 18,  68 => 14,  64 => 13,  60 => 12,  52 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/view/Tournois/edit.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>{{ tournois.adversaire }}</h2>
  
  <br>
  
  <h3>Mon classement</h3>
  <p>Simple : {{ user.msn }}</p>
  <p>Double : {{ user.aim }}</p>
  <p>Mixte : {{ user.yim }}</p>
\t\t
  <br>
\t
  {{ include(\"ASFFTournoisBundle:Inscription:form.html.twig\") }}
  
  <p>
\t<a href=\"{{ path('asff_tournois_home') }}\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste des tournois
\t</a>
  </p>

{% endblock %}", "ASFFTournoisBundle:Inscription:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/edit.html.twig");
    }
}
