<?php

/* ASFFActualiteBundle:Actu:add.html.twig */
class __TwigTemplate_08781fb87a9338b2d664e461de5fb1daed028885d184a148e2184b31837c8970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "ASFFActualiteBundle:Actu:add.html.twig", 3);
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
        $__internal_356ff5a9cd62b1d4c46c20c33c151b1c145ca2fcdb4006c7f9a1ae0d2beea69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356ff5a9cd62b1d4c46c20c33c151b1c145ca2fcdb4006c7f9a1ae0d2beea69e->enter($__internal_356ff5a9cd62b1d4c46c20c33c151b1c145ca2fcdb4006c7f9a1ae0d2beea69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:add.html.twig"));

        $__internal_92d06a14a244e1f8a43606e5b9024cffb0e8ea0a0ae64dd23e75abcf26df2988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d06a14a244e1f8a43606e5b9024cffb0e8ea0a0ae64dd23e75abcf26df2988->enter($__internal_92d06a14a244e1f8a43606e5b9024cffb0e8ea0a0ae64dd23e75abcf26df2988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_356ff5a9cd62b1d4c46c20c33c151b1c145ca2fcdb4006c7f9a1ae0d2beea69e->leave($__internal_356ff5a9cd62b1d4c46c20c33c151b1c145ca2fcdb4006c7f9a1ae0d2beea69e_prof);

        
        $__internal_92d06a14a244e1f8a43606e5b9024cffb0e8ea0a0ae64dd23e75abcf26df2988->leave($__internal_92d06a14a244e1f8a43606e5b9024cffb0e8ea0a0ae64dd23e75abcf26df2988_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d3fea90d2c232e8245f8682f64a666b43b7c3868fbe4049d05c46999057535e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3fea90d2c232e8245f8682f64a666b43b7c3868fbe4049d05c46999057535e->enter($__internal_1d3fea90d2c232e8245f8682f64a666b43b7c3868fbe4049d05c46999057535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc8443e3e66915985abbd54165607672fd47b8042f15977e8c0aedb6e8f5804e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8443e3e66915985abbd54165607672fd47b8042f15977e8c0aedb6e8f5804e->enter($__internal_bc8443e3e66915985abbd54165607672fd47b8042f15977e8c0aedb6e8f5804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter un article</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "ASFFActualiteBundle:Actu:form.html.twig");
        echo "

";
        
        $__internal_bc8443e3e66915985abbd54165607672fd47b8042f15977e8c0aedb6e8f5804e->leave($__internal_bc8443e3e66915985abbd54165607672fd47b8042f15977e8c0aedb6e8f5804e_prof);

        
        $__internal_1d3fea90d2c232e8245f8682f64a666b43b7c3868fbe4049d05c46999057535e->leave($__internal_1d3fea90d2c232e8245f8682f64a666b43b7c3868fbe4049d05c46999057535e_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:add.html.twig";
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

{% endblock %}", "ASFFActualiteBundle:Actu:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/add.html.twig");
    }
}
