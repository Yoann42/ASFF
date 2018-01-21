<?php

/* ASFFTournoisBundle:Tournois:add.html.twig */
class __TwigTemplate_9ef7c0a7c3b2129d54d7911733d68769a4aa3a8e218831361c005424bfcf474f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Tournois:add.html.twig", 3);
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
        $__internal_2cabcdfb57a0e6003782cf5d10a7cd76156ee7fa383f6645e48a22cd5fd67412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cabcdfb57a0e6003782cf5d10a7cd76156ee7fa383f6645e48a22cd5fd67412->enter($__internal_2cabcdfb57a0e6003782cf5d10a7cd76156ee7fa383f6645e48a22cd5fd67412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:add.html.twig"));

        $__internal_b19504a8b11eed30e8bbe47de0467c7c1dd9c4b428af98620536b952f464dfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19504a8b11eed30e8bbe47de0467c7c1dd9c4b428af98620536b952f464dfae->enter($__internal_b19504a8b11eed30e8bbe47de0467c7c1dd9c4b428af98620536b952f464dfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cabcdfb57a0e6003782cf5d10a7cd76156ee7fa383f6645e48a22cd5fd67412->leave($__internal_2cabcdfb57a0e6003782cf5d10a7cd76156ee7fa383f6645e48a22cd5fd67412_prof);

        
        $__internal_b19504a8b11eed30e8bbe47de0467c7c1dd9c4b428af98620536b952f464dfae->leave($__internal_b19504a8b11eed30e8bbe47de0467c7c1dd9c4b428af98620536b952f464dfae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_329360efec8776d38d1233dbab1764f4e94c9d06aa6b3f4ed251cab9d7ca7bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329360efec8776d38d1233dbab1764f4e94c9d06aa6b3f4ed251cab9d7ca7bf4->enter($__internal_329360efec8776d38d1233dbab1764f4e94c9d06aa6b3f4ed251cab9d7ca7bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c3b8d3dc2f328e54a8e01c844aced3b8e19d0ede49f7c65b95dfe2c709e1e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b8d3dc2f328e54a8e01c844aced3b8e19d0ede49f7c65b95dfe2c709e1e8f->enter($__internal_1c3b8d3dc2f328e54a8e01c844aced3b8e19d0ede49f7c65b95dfe2c709e1e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter un tournois</h2>

  <hr>
  
  ";
        // line 11
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Tournois:form.html.twig");
        echo "

";
        
        $__internal_1c3b8d3dc2f328e54a8e01c844aced3b8e19d0ede49f7c65b95dfe2c709e1e8f->leave($__internal_1c3b8d3dc2f328e54a8e01c844aced3b8e19d0ede49f7c65b95dfe2c709e1e8f_prof);

        
        $__internal_329360efec8776d38d1233dbab1764f4e94c9d06aa6b3f4ed251cab9d7ca7bf4->leave($__internal_329360efec8776d38d1233dbab1764f4e94c9d06aa6b3f4ed251cab9d7ca7bf4_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Tournois:add.html.twig";
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

{% endblock %}", "ASFFTournoisBundle:Tournois:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Tournois/add.html.twig");
    }
}
