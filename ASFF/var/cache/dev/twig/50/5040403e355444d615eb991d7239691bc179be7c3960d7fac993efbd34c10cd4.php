<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4b82a5974f3c50029d4018cd4205b094d733f59ee9531d5145c7987a61581541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_990b545377f593bf5e846ac7f9bb149b04ad9753881804437c5ee51a6d62c5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990b545377f593bf5e846ac7f9bb149b04ad9753881804437c5ee51a6d62c5d8->enter($__internal_990b545377f593bf5e846ac7f9bb149b04ad9753881804437c5ee51a6d62c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2b851172ef8345c39b63e4d07aba64b86b9cd2cf51c6c3d68f8d45e633fbbc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b851172ef8345c39b63e4d07aba64b86b9cd2cf51c6c3d68f8d45e633fbbc60->enter($__internal_2b851172ef8345c39b63e4d07aba64b86b9cd2cf51c6c3d68f8d45e633fbbc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_990b545377f593bf5e846ac7f9bb149b04ad9753881804437c5ee51a6d62c5d8->leave($__internal_990b545377f593bf5e846ac7f9bb149b04ad9753881804437c5ee51a6d62c5d8_prof);

        
        $__internal_2b851172ef8345c39b63e4d07aba64b86b9cd2cf51c6c3d68f8d45e633fbbc60->leave($__internal_2b851172ef8345c39b63e4d07aba64b86b9cd2cf51c6c3d68f8d45e633fbbc60_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0c2354509cc229a24ae43ef0bebcbd014f5b56d8492f12819b3d66d91da7875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c2354509cc229a24ae43ef0bebcbd014f5b56d8492f12819b3d66d91da7875->enter($__internal_e0c2354509cc229a24ae43ef0bebcbd014f5b56d8492f12819b3d66d91da7875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_389e66aa9f702d0936de1c3c8b4f0e985242392246a039277609eb309d6fae79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389e66aa9f702d0936de1c3c8b4f0e985242392246a039277609eb309d6fae79->enter($__internal_389e66aa9f702d0936de1c3c8b4f0e985242392246a039277609eb309d6fae79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_389e66aa9f702d0936de1c3c8b4f0e985242392246a039277609eb309d6fae79->leave($__internal_389e66aa9f702d0936de1c3c8b4f0e985242392246a039277609eb309d6fae79_prof);

        
        $__internal_e0c2354509cc229a24ae43ef0bebcbd014f5b56d8492f12819b3d66d91da7875->leave($__internal_e0c2354509cc229a24ae43ef0bebcbd014f5b56d8492f12819b3d66d91da7875_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
