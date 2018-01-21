<?php

/* ASFFActualiteBundle:Actu:edit.html.twig */
class __TwigTemplate_80b4306f10042ee646ddc535a40c44ecbcd8de35a96f712aae3fa48d512652c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "ASFFActualiteBundle:Actu:edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFActualiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7104edc50f4500d0c424f28d4416b9aaa16e06c3ef6356d28fb44efbf3b1d7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7104edc50f4500d0c424f28d4416b9aaa16e06c3ef6356d28fb44efbf3b1d7de->enter($__internal_7104edc50f4500d0c424f28d4416b9aaa16e06c3ef6356d28fb44efbf3b1d7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:edit.html.twig"));

        $__internal_27b7fb89681e9219a6dec92ceb071b66a698d9f2293a78b733eed8c11cbdce1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b7fb89681e9219a6dec92ceb071b66a698d9f2293a78b733eed8c11cbdce1e->enter($__internal_27b7fb89681e9219a6dec92ceb071b66a698d9f2293a78b733eed8c11cbdce1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7104edc50f4500d0c424f28d4416b9aaa16e06c3ef6356d28fb44efbf3b1d7de->leave($__internal_7104edc50f4500d0c424f28d4416b9aaa16e06c3ef6356d28fb44efbf3b1d7de_prof);

        
        $__internal_27b7fb89681e9219a6dec92ceb071b66a698d9f2293a78b733eed8c11cbdce1e->leave($__internal_27b7fb89681e9219a6dec92ceb071b66a698d9f2293a78b733eed8c11cbdce1e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6702ed3f60bd0d37554c4be06484ce1e425e930310e45bb247895a70b795d3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6702ed3f60bd0d37554c4be06484ce1e425e930310e45bb247895a70b795d3b8->enter($__internal_6702ed3f60bd0d37554c4be06484ce1e425e930310e45bb247895a70b795d3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78f686ff58fbb54e9f1faf418c0bc9a50c7c417cafbc0234ce73468ab641afaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f686ff58fbb54e9f1faf418c0bc9a50c7c417cafbc0234ce73468ab641afaa->enter($__internal_78f686ff58fbb54e9f1faf418c0bc9a50c7c417cafbc0234ce73468ab641afaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Modifier un article</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "ASFFActualiteBundle:Actu:form.html.twig");
        echo "

";
        
        $__internal_78f686ff58fbb54e9f1faf418c0bc9a50c7c417cafbc0234ce73468ab641afaa->leave($__internal_78f686ff58fbb54e9f1faf418c0bc9a50c7c417cafbc0234ce73468ab641afaa_prof);

        
        $__internal_6702ed3f60bd0d37554c4be06484ce1e425e930310e45bb247895a70b795d3b8->leave($__internal_6702ed3f60bd0d37554c4be06484ce1e425e930310e45bb247895a70b795d3b8_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/edit.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block body %}

  <h2>Modifier un article</h2>

  {{ include(\"ASFFActualiteBundle:Actu:form.html.twig\") }}

{% endblock %}", "ASFFActualiteBundle:Actu:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/edit.html.twig");
    }
}
