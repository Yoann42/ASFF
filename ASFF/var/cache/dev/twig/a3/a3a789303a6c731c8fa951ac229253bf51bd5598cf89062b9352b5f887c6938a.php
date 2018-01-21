<?php

/* ASFFClubBundle::layoutInfoTech.html.twig */
class __TwigTemplate_851a305d1d33fe8aecb774b1f5276e33bfc8dce5761e27bb28f3062c957c9438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFClubBundle::layoutInfoTech.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a2790038a0824a8c400a82731020041546f7b393cb29bd49cf5594969ccc237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2790038a0824a8c400a82731020041546f7b393cb29bd49cf5594969ccc237->enter($__internal_8a2790038a0824a8c400a82731020041546f7b393cb29bd49cf5594969ccc237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutInfoTech.html.twig"));

        $__internal_e9d2959fd0e9a6658e31753bc8f20bf284ecc6744cf6dd927c404af8e8a9bfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d2959fd0e9a6658e31753bc8f20bf284ecc6744cf6dd927c404af8e8a9bfd7->enter($__internal_e9d2959fd0e9a6658e31753bc8f20bf284ecc6744cf6dd927c404af8e8a9bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutInfoTech.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2790038a0824a8c400a82731020041546f7b393cb29bd49cf5594969ccc237->leave($__internal_8a2790038a0824a8c400a82731020041546f7b393cb29bd49cf5594969ccc237_prof);

        
        $__internal_e9d2959fd0e9a6658e31753bc8f20bf284ecc6744cf6dd927c404af8e8a9bfd7->leave($__internal_e9d2959fd0e9a6658e31753bc8f20bf284ecc6744cf6dd927c404af8e8a9bfd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_002e25bb3a5d45f48a8b19fcae8d865b8dae212e406fa70e531627ee43442850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002e25bb3a5d45f48a8b19fcae8d865b8dae212e406fa70e531627ee43442850->enter($__internal_002e25bb3a5d45f48a8b19fcae8d865b8dae212e406fa70e531627ee43442850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e687d36c9a4a2b5d0418eac80381d28469504829a05f9561595db004eec7f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e687d36c9a4a2b5d0418eac80381d28469504829a05f9561595db004eec7f9d->enter($__internal_2e687d36c9a4a2b5d0418eac80381d28469504829a05f9561595db004eec7f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Infos Techniques - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2e687d36c9a4a2b5d0418eac80381d28469504829a05f9561595db004eec7f9d->leave($__internal_2e687d36c9a4a2b5d0418eac80381d28469504829a05f9561595db004eec7f9d_prof);

        
        $__internal_002e25bb3a5d45f48a8b19fcae8d865b8dae212e406fa70e531627ee43442850->leave($__internal_002e25bb3a5d45f48a8b19fcae8d865b8dae212e406fa70e531627ee43442850_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e94fa02dfb10e80d83cbcb51e4ea20a15c93f1bf00fabb9c6c3150529cdc7e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94fa02dfb10e80d83cbcb51e4ea20a15c93f1bf00fabb9c6c3150529cdc7e83->enter($__internal_e94fa02dfb10e80d83cbcb51e4ea20a15c93f1bf00fabb9c6c3150529cdc7e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c45bc33a3c7e508cc996ea0ba1a9922508eff40c47fcb0c02727eec13ccdb6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45bc33a3c7e508cc996ea0ba1a9922508eff40c47fcb0c02727eec13ccdb6f1->enter($__internal_c45bc33a3c7e508cc996ea0ba1a9922508eff40c47fcb0c02727eec13ccdb6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Informations techniques</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_c45bc33a3c7e508cc996ea0ba1a9922508eff40c47fcb0c02727eec13ccdb6f1->leave($__internal_c45bc33a3c7e508cc996ea0ba1a9922508eff40c47fcb0c02727eec13ccdb6f1_prof);

        
        $__internal_e94fa02dfb10e80d83cbcb51e4ea20a15c93f1bf00fabb9c6c3150529cdc7e83->leave($__internal_e94fa02dfb10e80d83cbcb51e4ea20a15c93f1bf00fabb9c6c3150529cdc7e83_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cbff210dc9948d7e03b865b6f0f18f1dd544a920580afb38da58b8bba7d820e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbff210dc9948d7e03b865b6f0f18f1dd544a920580afb38da58b8bba7d820e6->enter($__internal_cbff210dc9948d7e03b865b6f0f18f1dd544a920580afb38da58b8bba7d820e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_fd2edeb51b4e2322987979dd8642fd321fb2caaf91e6e3c4c3972802c1be323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2edeb51b4e2322987979dd8642fd321fb2caaf91e6e3c4c3972802c1be323d->enter($__internal_fd2edeb51b4e2322987979dd8642fd321fb2caaf91e6e3c4c3972802c1be323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_fd2edeb51b4e2322987979dd8642fd321fb2caaf91e6e3c4c3972802c1be323d->leave($__internal_fd2edeb51b4e2322987979dd8642fd321fb2caaf91e6e3c4c3972802c1be323d_prof);

        
        $__internal_cbff210dc9948d7e03b865b6f0f18f1dd544a920580afb38da58b8bba7d820e6->leave($__internal_cbff210dc9948d7e03b865b6f0f18f1dd544a920580afb38da58b8bba7d820e6_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle::layoutInfoTech.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/layoutInfoTech.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Infos Techniques - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Informations techniques</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "ASFFClubBundle::layoutInfoTech.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\layoutInfoTech.html.twig");
    }
}
