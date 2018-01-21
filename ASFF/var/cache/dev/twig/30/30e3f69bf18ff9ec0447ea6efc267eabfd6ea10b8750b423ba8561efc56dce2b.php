<?php

/* @ASFFClub/Le Club/lebureau.html.twig */
class __TwigTemplate_0e20dae3c3818251d800dc0734ce04cc89b08b1561b6989dcfb63445c04eb9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutClub.html.twig", "@ASFFClub/Le Club/lebureau.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutClub.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_264513ed3d223bc72dafe3581fbb7dead991c1ab524039f80171178b920ef046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264513ed3d223bc72dafe3581fbb7dead991c1ab524039f80171178b920ef046->enter($__internal_264513ed3d223bc72dafe3581fbb7dead991c1ab524039f80171178b920ef046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Le Club/lebureau.html.twig"));

        $__internal_9cf8e1294a02a962c768db7d641886c283e4d254ded179a2cb158dc8aaeb2a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf8e1294a02a962c768db7d641886c283e4d254ded179a2cb158dc8aaeb2a70->enter($__internal_9cf8e1294a02a962c768db7d641886c283e4d254ded179a2cb158dc8aaeb2a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Le Club/lebureau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_264513ed3d223bc72dafe3581fbb7dead991c1ab524039f80171178b920ef046->leave($__internal_264513ed3d223bc72dafe3581fbb7dead991c1ab524039f80171178b920ef046_prof);

        
        $__internal_9cf8e1294a02a962c768db7d641886c283e4d254ded179a2cb158dc8aaeb2a70->leave($__internal_9cf8e1294a02a962c768db7d641886c283e4d254ded179a2cb158dc8aaeb2a70_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b910c5f80144b03f3495b4d36956a0f624c059f171a57cb1203cf6f65c1ad7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b910c5f80144b03f3495b4d36956a0f624c059f171a57cb1203cf6f65c1ad7c2->enter($__internal_b910c5f80144b03f3495b4d36956a0f624c059f171a57cb1203cf6f65c1ad7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3f4ba032e3e65c4382c090c708a5030734beefa36aaceb509f750893e50a828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f4ba032e3e65c4382c090c708a5030734beefa36aaceb509f750893e50a828->enter($__internal_c3f4ba032e3e65c4382c090c708a5030734beefa36aaceb509f750893e50a828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Les membres du bureau</h2>

";
        
        $__internal_c3f4ba032e3e65c4382c090c708a5030734beefa36aaceb509f750893e50a828->leave($__internal_c3f4ba032e3e65c4382c090c708a5030734beefa36aaceb509f750893e50a828_prof);

        
        $__internal_b910c5f80144b03f3495b4d36956a0f624c059f171a57cb1203cf6f65c1ad7c2->leave($__internal_b910c5f80144b03f3495b4d36956a0f624c059f171a57cb1203cf6f65c1ad7c2_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/Le Club/lebureau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Le Club/lebureau.html.twig #}

{% extends \"ASFFClubBundle::layoutClub.html.twig\" %}

{% block body %}

  <h2>Les membres du bureau</h2>

{% endblock %}", "@ASFFClub/Le Club/lebureau.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\Le Club\\lebureau.html.twig");
    }
}
