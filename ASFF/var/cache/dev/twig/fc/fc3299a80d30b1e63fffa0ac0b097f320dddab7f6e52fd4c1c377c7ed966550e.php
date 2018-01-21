<?php

/* @ASFFActualite/layout.html.twig */
class __TwigTemplate_79144823aad87b0afc7a0281c3bad13792b78693b95e72e2da8c31759235979f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@ASFFActualite/layout.html.twig", 3);
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
        $__internal_d7f9d0cfadb695090a6574099fd9c309ce19e2aa5fe6481561879832b9d0f1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f9d0cfadb695090a6574099fd9c309ce19e2aa5fe6481561879832b9d0f1dc->enter($__internal_d7f9d0cfadb695090a6574099fd9c309ce19e2aa5fe6481561879832b9d0f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/layout.html.twig"));

        $__internal_14f366abe3855b7a2352d0baf6eb27692c5ab57ae2764b7be9dc884a0151811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f366abe3855b7a2352d0baf6eb27692c5ab57ae2764b7be9dc884a0151811c->enter($__internal_14f366abe3855b7a2352d0baf6eb27692c5ab57ae2764b7be9dc884a0151811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f9d0cfadb695090a6574099fd9c309ce19e2aa5fe6481561879832b9d0f1dc->leave($__internal_d7f9d0cfadb695090a6574099fd9c309ce19e2aa5fe6481561879832b9d0f1dc_prof);

        
        $__internal_14f366abe3855b7a2352d0baf6eb27692c5ab57ae2764b7be9dc884a0151811c->leave($__internal_14f366abe3855b7a2352d0baf6eb27692c5ab57ae2764b7be9dc884a0151811c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9794987a740501b437ace27d052d916242bc33267fcc25e90d8e225c693db14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9794987a740501b437ace27d052d916242bc33267fcc25e90d8e225c693db14b->enter($__internal_9794987a740501b437ace27d052d916242bc33267fcc25e90d8e225c693db14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc33017076984b1a3e188506d12e2f961b6a6368245d05d87385150f8ad605b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc33017076984b1a3e188506d12e2f961b6a6368245d05d87385150f8ad605b6->enter($__internal_fc33017076984b1a3e188506d12e2f961b6a6368245d05d87385150f8ad605b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Actualité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fc33017076984b1a3e188506d12e2f961b6a6368245d05d87385150f8ad605b6->leave($__internal_fc33017076984b1a3e188506d12e2f961b6a6368245d05d87385150f8ad605b6_prof);

        
        $__internal_9794987a740501b437ace27d052d916242bc33267fcc25e90d8e225c693db14b->leave($__internal_9794987a740501b437ace27d052d916242bc33267fcc25e90d8e225c693db14b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21a742f914a97aef92eb9636ebb4a414547e03855bd69ef2ac6f601ee40eab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21a742f914a97aef92eb9636ebb4a414547e03855bd69ef2ac6f601ee40eab0->enter($__internal_a21a742f914a97aef92eb9636ebb4a414547e03855bd69ef2ac6f601ee40eab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a61b383ddb21b28702107f0e25166f803e84c09d355cad030da356406ce23354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61b383ddb21b28702107f0e25166f803e84c09d355cad030da356406ce23354->enter($__internal_a61b383ddb21b28702107f0e25166f803e84c09d355cad030da356406ce23354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a61b383ddb21b28702107f0e25166f803e84c09d355cad030da356406ce23354->leave($__internal_a61b383ddb21b28702107f0e25166f803e84c09d355cad030da356406ce23354_prof);

        
        $__internal_a21a742f914a97aef92eb9636ebb4a414547e03855bd69ef2ac6f601ee40eab0->leave($__internal_a21a742f914a97aef92eb9636ebb4a414547e03855bd69ef2ac6f601ee40eab0_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5e5462687cde48d76cc37f920153f5a657b19c2f199ebcf5d1d8b4a97fa1d1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5462687cde48d76cc37f920153f5a657b19c2f199ebcf5d1d8b4a97fa1d1de->enter($__internal_5e5462687cde48d76cc37f920153f5a657b19c2f199ebcf5d1d8b4a97fa1d1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0086198aaa2f648236c3717b8e0e4bf14f513847e84b5e9ff107bcd08eff369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0086198aaa2f648236c3717b8e0e4bf14f513847e84b5e9ff107bcd08eff369f->enter($__internal_0086198aaa2f648236c3717b8e0e4bf14f513847e84b5e9ff107bcd08eff369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_0086198aaa2f648236c3717b8e0e4bf14f513847e84b5e9ff107bcd08eff369f->leave($__internal_0086198aaa2f648236c3717b8e0e4bf14f513847e84b5e9ff107bcd08eff369f_prof);

        
        $__internal_5e5462687cde48d76cc37f920153f5a657b19c2f199ebcf5d1d8b4a97fa1d1de->leave($__internal_5e5462687cde48d76cc37f920153f5a657b19c2f199ebcf5d1d8b4a97fa1d1de_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFActualite/layout.html.twig";
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

{% endblock %}", "@ASFFActualite/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\layout.html.twig");
    }
}
