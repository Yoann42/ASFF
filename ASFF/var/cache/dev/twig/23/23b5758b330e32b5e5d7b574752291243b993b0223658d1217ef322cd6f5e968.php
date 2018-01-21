<?php

/* @ASFFTournois/Tournois/add.html.twig */
class __TwigTemplate_d7dee238827bfd881a7dae5f1053bf3ca1511e6ee78603ddeea5d2e34110644e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Tournois/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFTournoisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcd72951af90eeb14045dfdef806b6bbf1e2d16939d55c459e8ff6b3ee20f9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd72951af90eeb14045dfdef806b6bbf1e2d16939d55c459e8ff6b3ee20f9b0->enter($__internal_bcd72951af90eeb14045dfdef806b6bbf1e2d16939d55c459e8ff6b3ee20f9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/add.html.twig"));

        $__internal_3988a9eec35404dfa6698ff149ef8c124986a6b2bcfced490fe05ac52295c048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3988a9eec35404dfa6698ff149ef8c124986a6b2bcfced490fe05ac52295c048->enter($__internal_3988a9eec35404dfa6698ff149ef8c124986a6b2bcfced490fe05ac52295c048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd72951af90eeb14045dfdef806b6bbf1e2d16939d55c459e8ff6b3ee20f9b0->leave($__internal_bcd72951af90eeb14045dfdef806b6bbf1e2d16939d55c459e8ff6b3ee20f9b0_prof);

        
        $__internal_3988a9eec35404dfa6698ff149ef8c124986a6b2bcfced490fe05ac52295c048->leave($__internal_3988a9eec35404dfa6698ff149ef8c124986a6b2bcfced490fe05ac52295c048_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_987e408b6078286e3fdca853583a20f138cbebd94ddf583310689685f8454fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987e408b6078286e3fdca853583a20f138cbebd94ddf583310689685f8454fc4->enter($__internal_987e408b6078286e3fdca853583a20f138cbebd94ddf583310689685f8454fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1eafeea96e48e688fb7faffad13e40fa732a562dc0243bb4c79633d3ea1a3cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eafeea96e48e688fb7faffad13e40fa732a562dc0243bb4c79633d3ea1a3cc6->enter($__internal_1eafeea96e48e688fb7faffad13e40fa732a562dc0243bb4c79633d3ea1a3cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter un tournois</h2>

  <hr>
  
  ";
        // line 11
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Tournois:form.html.twig");
        echo "

";
        
        $__internal_1eafeea96e48e688fb7faffad13e40fa732a562dc0243bb4c79633d3ea1a3cc6->leave($__internal_1eafeea96e48e688fb7faffad13e40fa732a562dc0243bb4c79633d3ea1a3cc6_prof);

        
        $__internal_987e408b6078286e3fdca853583a20f138cbebd94ddf583310689685f8454fc4->leave($__internal_987e408b6078286e3fdca853583a20f138cbebd94ddf583310689685f8454fc4_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Tournois/add.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter un tournois</h2>

  <hr>
  
  {{ include(\"ASFFTournoisBundle:Tournois:form.html.twig\") }}

{% endblock %}", "@ASFFTournois/Tournois/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\add.html.twig");
    }
}
