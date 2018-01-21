<?php

/* @ASFFActualite/Actu/add.html.twig */
class __TwigTemplate_608f0554ac5361ec93d9cf794be515dafbe0eb1f564e9c64814116cf84059310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "@ASFFActualite/Actu/add.html.twig", 3);
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
        $__internal_556ce8dd967761ad97b1ac155ac3a1890a5cbf1c0cf713085d7cddbb4374cf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556ce8dd967761ad97b1ac155ac3a1890a5cbf1c0cf713085d7cddbb4374cf71->enter($__internal_556ce8dd967761ad97b1ac155ac3a1890a5cbf1c0cf713085d7cddbb4374cf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/add.html.twig"));

        $__internal_36680e807ab74c64a753a9f9e8412f6935fc5aa0cbca76d024fa98d7e564b408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36680e807ab74c64a753a9f9e8412f6935fc5aa0cbca76d024fa98d7e564b408->enter($__internal_36680e807ab74c64a753a9f9e8412f6935fc5aa0cbca76d024fa98d7e564b408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_556ce8dd967761ad97b1ac155ac3a1890a5cbf1c0cf713085d7cddbb4374cf71->leave($__internal_556ce8dd967761ad97b1ac155ac3a1890a5cbf1c0cf713085d7cddbb4374cf71_prof);

        
        $__internal_36680e807ab74c64a753a9f9e8412f6935fc5aa0cbca76d024fa98d7e564b408->leave($__internal_36680e807ab74c64a753a9f9e8412f6935fc5aa0cbca76d024fa98d7e564b408_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f630694bb8e3bf7df8c71c8d4d660203675bf42ad4d1b995512dc2d5ff49bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f630694bb8e3bf7df8c71c8d4d660203675bf42ad4d1b995512dc2d5ff49bec->enter($__internal_3f630694bb8e3bf7df8c71c8d4d660203675bf42ad4d1b995512dc2d5ff49bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a90a6bfcb2f6afa3eae04e87ef5dca4307a52facf6b3c5d67768fee271899679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90a6bfcb2f6afa3eae04e87ef5dca4307a52facf6b3c5d67768fee271899679->enter($__internal_a90a6bfcb2f6afa3eae04e87ef5dca4307a52facf6b3c5d67768fee271899679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter un article</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "ASFFActualiteBundle:Actu:form.html.twig");
        echo "

";
        
        $__internal_a90a6bfcb2f6afa3eae04e87ef5dca4307a52facf6b3c5d67768fee271899679->leave($__internal_a90a6bfcb2f6afa3eae04e87ef5dca4307a52facf6b3c5d67768fee271899679_prof);

        
        $__internal_3f630694bb8e3bf7df8c71c8d4d660203675bf42ad4d1b995512dc2d5ff49bec->leave($__internal_3f630694bb8e3bf7df8c71c8d4d660203675bf42ad4d1b995512dc2d5ff49bec_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/add.html.twig";
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
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/add.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter un article</h2>

  {{ include(\"ASFFActualiteBundle:Actu:form.html.twig\") }}

{% endblock %}", "@ASFFActualite/Actu/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\add.html.twig");
    }
}
