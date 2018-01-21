<?php

/* ASFFActualiteBundle::layout.html.twig */
class __TwigTemplate_7b217126ed8156922932196b5b77c6f77e7c6f2987ca862e89c3a570ba497654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFActualiteBundle::layout.html.twig", 3);
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
        $__internal_3cf711c1480eaf1a5d4ab860b6a2b6f4eecdf88075d896c41915351200b02df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf711c1480eaf1a5d4ab860b6a2b6f4eecdf88075d896c41915351200b02df1->enter($__internal_3cf711c1480eaf1a5d4ab860b6a2b6f4eecdf88075d896c41915351200b02df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle::layout.html.twig"));

        $__internal_968155fa9111e1e48dc95a30f22652bacdc550e81ac3d30f73cb1466d2cc933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968155fa9111e1e48dc95a30f22652bacdc550e81ac3d30f73cb1466d2cc933c->enter($__internal_968155fa9111e1e48dc95a30f22652bacdc550e81ac3d30f73cb1466d2cc933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cf711c1480eaf1a5d4ab860b6a2b6f4eecdf88075d896c41915351200b02df1->leave($__internal_3cf711c1480eaf1a5d4ab860b6a2b6f4eecdf88075d896c41915351200b02df1_prof);

        
        $__internal_968155fa9111e1e48dc95a30f22652bacdc550e81ac3d30f73cb1466d2cc933c->leave($__internal_968155fa9111e1e48dc95a30f22652bacdc550e81ac3d30f73cb1466d2cc933c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92ec6b967d3621774b9b7f1c39b5db9ace03c5b4cc9582fe5cbd3f25ea97fdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ec6b967d3621774b9b7f1c39b5db9ace03c5b4cc9582fe5cbd3f25ea97fdaf->enter($__internal_92ec6b967d3621774b9b7f1c39b5db9ace03c5b4cc9582fe5cbd3f25ea97fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ede9f0af7f01e785c6f62c7c4f024067b60a29871ddca139d88ece5aa842d9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede9f0af7f01e785c6f62c7c4f024067b60a29871ddca139d88ece5aa842d9e0->enter($__internal_ede9f0af7f01e785c6f62c7c4f024067b60a29871ddca139d88ece5aa842d9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Actualité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ede9f0af7f01e785c6f62c7c4f024067b60a29871ddca139d88ece5aa842d9e0->leave($__internal_ede9f0af7f01e785c6f62c7c4f024067b60a29871ddca139d88ece5aa842d9e0_prof);

        
        $__internal_92ec6b967d3621774b9b7f1c39b5db9ace03c5b4cc9582fe5cbd3f25ea97fdaf->leave($__internal_92ec6b967d3621774b9b7f1c39b5db9ace03c5b4cc9582fe5cbd3f25ea97fdaf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_237b97e544d9adc32c34d3750a5fccf73ae2900ff80909b3d461a7adc6e806e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237b97e544d9adc32c34d3750a5fccf73ae2900ff80909b3d461a7adc6e806e6->enter($__internal_237b97e544d9adc32c34d3750a5fccf73ae2900ff80909b3d461a7adc6e806e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb2256023426f93651cd34080297d2eb06f878ccd85d02ba4aec85a2e549fd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2256023426f93651cd34080297d2eb06f878ccd85d02ba4aec85a2e549fd25->enter($__internal_fb2256023426f93651cd34080297d2eb06f878ccd85d02ba4aec85a2e549fd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Actualités</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_fb2256023426f93651cd34080297d2eb06f878ccd85d02ba4aec85a2e549fd25->leave($__internal_fb2256023426f93651cd34080297d2eb06f878ccd85d02ba4aec85a2e549fd25_prof);

        
        $__internal_237b97e544d9adc32c34d3750a5fccf73ae2900ff80909b3d461a7adc6e806e6->leave($__internal_237b97e544d9adc32c34d3750a5fccf73ae2900ff80909b3d461a7adc6e806e6_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cc8c7f2d4ac6dcde38078b4469e74363bb1d31232ee6f9cc716b98a0c71f7b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8c7f2d4ac6dcde38078b4469e74363bb1d31232ee6f9cc716b98a0c71f7b61->enter($__internal_cc8c7f2d4ac6dcde38078b4469e74363bb1d31232ee6f9cc716b98a0c71f7b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1d41e09151a2031110aa055ce78a7261d91d7e0bc7d41932eea37de01a9606cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d41e09151a2031110aa055ce78a7261d91d7e0bc7d41932eea37de01a9606cb->enter($__internal_1d41e09151a2031110aa055ce78a7261d91d7e0bc7d41932eea37de01a9606cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_1d41e09151a2031110aa055ce78a7261d91d7e0bc7d41932eea37de01a9606cb->leave($__internal_1d41e09151a2031110aa055ce78a7261d91d7e0bc7d41932eea37de01a9606cb_prof);

        
        $__internal_cc8c7f2d4ac6dcde38078b4469e74363bb1d31232ee6f9cc716b98a0c71f7b61->leave($__internal_cc8c7f2d4ac6dcde38078b4469e74363bb1d31232ee6f9cc716b98a0c71f7b61_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle::layout.html.twig";
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
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/layout.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Actualité - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Actualités</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "ASFFActualiteBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/layout.html.twig");
    }
}
