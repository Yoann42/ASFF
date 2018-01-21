<?php

/* ASFFTournoisBundle:Tournois:edit.html.twig */
class __TwigTemplate_81d3271a3e405ecf4141447bb89231680dc06b4de711e3c2255fdb1642c708f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Tournois:edit.html.twig", 3);
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
        $__internal_00dff0bb7f677dc7e6069d09d8d6cddd5273491e72a23fee0358467731b409ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dff0bb7f677dc7e6069d09d8d6cddd5273491e72a23fee0358467731b409ab->enter($__internal_00dff0bb7f677dc7e6069d09d8d6cddd5273491e72a23fee0358467731b409ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:edit.html.twig"));

        $__internal_1fe853ccfb1d648df6a66ac4a979d7794ed0ea25872efd1a1235a9e4024fa8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe853ccfb1d648df6a66ac4a979d7794ed0ea25872efd1a1235a9e4024fa8fe->enter($__internal_1fe853ccfb1d648df6a66ac4a979d7794ed0ea25872efd1a1235a9e4024fa8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00dff0bb7f677dc7e6069d09d8d6cddd5273491e72a23fee0358467731b409ab->leave($__internal_00dff0bb7f677dc7e6069d09d8d6cddd5273491e72a23fee0358467731b409ab_prof);

        
        $__internal_1fe853ccfb1d648df6a66ac4a979d7794ed0ea25872efd1a1235a9e4024fa8fe->leave($__internal_1fe853ccfb1d648df6a66ac4a979d7794ed0ea25872efd1a1235a9e4024fa8fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d15b43f53343e14f8d725d0991c28e4901b08d8c95b123b71e0920f2e37714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d15b43f53343e14f8d725d0991c28e4901b08d8c95b123b71e0920f2e37714->enter($__internal_07d15b43f53343e14f8d725d0991c28e4901b08d8c95b123b71e0920f2e37714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8c527309ce6a7202ae1d53f96f7c736e583539b827586ce35543076947bd7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c527309ce6a7202ae1d53f96f7c736e583539b827586ce35543076947bd7c2->enter($__internal_c8c527309ce6a7202ae1d53f96f7c736e583539b827586ce35543076947bd7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Modifier un tournois</h2>

  <hr>

  ";
        // line 11
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Tournois:form.html.twig");
        echo "

";
        
        $__internal_c8c527309ce6a7202ae1d53f96f7c736e583539b827586ce35543076947bd7c2->leave($__internal_c8c527309ce6a7202ae1d53f96f7c736e583539b827586ce35543076947bd7c2_prof);

        
        $__internal_07d15b43f53343e14f8d725d0991c28e4901b08d8c95b123b71e0920f2e37714->leave($__internal_07d15b43f53343e14f8d725d0991c28e4901b08d8c95b123b71e0920f2e37714_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Tournois:edit.html.twig";
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
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Tournois/edit.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block body %}

  <h2>Modifier un tournois</h2>

  <hr>

  {{ include(\"ASFFTournoisBundle:Tournois:form.html.twig\") }}

{% endblock %}", "ASFFTournoisBundle:Tournois:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Tournois/edit.html.twig");
    }
}
