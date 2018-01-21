<?php

/* @ASFFTournois/Inscription/edit.html.twig */
class __TwigTemplate_641fcc6b718a1fe69ac9b2430f0b834e0749d394b45921fa4e972c434aee038c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Inscription/edit.html.twig", 3);
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
        $__internal_4851ec7412e5d455a4e002e3c361eb422b59512fb89d58e9925ce6db52904e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4851ec7412e5d455a4e002e3c361eb422b59512fb89d58e9925ce6db52904e5a->enter($__internal_4851ec7412e5d455a4e002e3c361eb422b59512fb89d58e9925ce6db52904e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Inscription/edit.html.twig"));

        $__internal_79da0b5b5f7a6bd07b6d3a998b7b3f5e5dfb2e5f7e14bbd5df12edc049c7db2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79da0b5b5f7a6bd07b6d3a998b7b3f5e5dfb2e5f7e14bbd5df12edc049c7db2b->enter($__internal_79da0b5b5f7a6bd07b6d3a998b7b3f5e5dfb2e5f7e14bbd5df12edc049c7db2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Inscription/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4851ec7412e5d455a4e002e3c361eb422b59512fb89d58e9925ce6db52904e5a->leave($__internal_4851ec7412e5d455a4e002e3c361eb422b59512fb89d58e9925ce6db52904e5a_prof);

        
        $__internal_79da0b5b5f7a6bd07b6d3a998b7b3f5e5dfb2e5f7e14bbd5df12edc049c7db2b->leave($__internal_79da0b5b5f7a6bd07b6d3a998b7b3f5e5dfb2e5f7e14bbd5df12edc049c7db2b_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6c3b54ce0bd9e8f9d1ab2090dc622438aecbbc674a9eff34fd85828dacf7e9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3b54ce0bd9e8f9d1ab2090dc622438aecbbc674a9eff34fd85828dacf7e9e5->enter($__internal_6c3b54ce0bd9e8f9d1ab2090dc622438aecbbc674a9eff34fd85828dacf7e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0b8229ff5b6134705ee3779ef7ebeb9aa29fcba443c3014b72d7d2fb3cbc149f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8229ff5b6134705ee3779ef7ebeb9aa29fcba443c3014b72d7d2fb3cbc149f->enter($__internal_0b8229ff5b6134705ee3779ef7ebeb9aa29fcba443c3014b72d7d2fb3cbc149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_0b8229ff5b6134705ee3779ef7ebeb9aa29fcba443c3014b72d7d2fb3cbc149f->leave($__internal_0b8229ff5b6134705ee3779ef7ebeb9aa29fcba443c3014b72d7d2fb3cbc149f_prof);

        
        $__internal_6c3b54ce0bd9e8f9d1ab2090dc622438aecbbc674a9eff34fd85828dacf7e9e5->leave($__internal_6c3b54ce0bd9e8f9d1ab2090dc622438aecbbc674a9eff34fd85828dacf7e9e5_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Inscription/edit.html.twig";
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

{% endblock %}", "@ASFFTournois/Inscription/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Inscription\\edit.html.twig");
    }
}
