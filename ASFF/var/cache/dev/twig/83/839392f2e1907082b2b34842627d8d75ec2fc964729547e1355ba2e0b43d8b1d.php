<?php

/* ASFFTournoisBundle::layout.html.twig */
class __TwigTemplate_3b63b41da48856d222e68be298efa94bb048c6502069dd3e6081d390e01b6763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFTournoisBundle::layout.html.twig", 3);
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
        $__internal_a3947a67270da02e9e684f4e3091df4f47c9a89d6f3999b7f812f5027f0c1856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3947a67270da02e9e684f4e3091df4f47c9a89d6f3999b7f812f5027f0c1856->enter($__internal_a3947a67270da02e9e684f4e3091df4f47c9a89d6f3999b7f812f5027f0c1856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle::layout.html.twig"));

        $__internal_c82627565eda3e5fb31691414c2a3ac919cd3e4e7d7c5740399f747259d2dd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82627565eda3e5fb31691414c2a3ac919cd3e4e7d7c5740399f747259d2dd82->enter($__internal_c82627565eda3e5fb31691414c2a3ac919cd3e4e7d7c5740399f747259d2dd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3947a67270da02e9e684f4e3091df4f47c9a89d6f3999b7f812f5027f0c1856->leave($__internal_a3947a67270da02e9e684f4e3091df4f47c9a89d6f3999b7f812f5027f0c1856_prof);

        
        $__internal_c82627565eda3e5fb31691414c2a3ac919cd3e4e7d7c5740399f747259d2dd82->leave($__internal_c82627565eda3e5fb31691414c2a3ac919cd3e4e7d7c5740399f747259d2dd82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_520134afedd559b03dce69994eadaeffc908f0e5fbb4783e8c7633555cdfdb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520134afedd559b03dce69994eadaeffc908f0e5fbb4783e8c7633555cdfdb2d->enter($__internal_520134afedd559b03dce69994eadaeffc908f0e5fbb4783e8c7633555cdfdb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f47e27fc03406d25bbcb6282acb67fab3491067f2d0bf2833d0d1d061441c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f47e27fc03406d25bbcb6282acb67fab3491067f2d0bf2833d0d1d061441c10->enter($__internal_9f47e27fc03406d25bbcb6282acb67fab3491067f2d0bf2833d0d1d061441c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Tournois - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9f47e27fc03406d25bbcb6282acb67fab3491067f2d0bf2833d0d1d061441c10->leave($__internal_9f47e27fc03406d25bbcb6282acb67fab3491067f2d0bf2833d0d1d061441c10_prof);

        
        $__internal_520134afedd559b03dce69994eadaeffc908f0e5fbb4783e8c7633555cdfdb2d->leave($__internal_520134afedd559b03dce69994eadaeffc908f0e5fbb4783e8c7633555cdfdb2d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17be9ab2bcb81f6e511f41d6d2a71ef8fb451c92b0e92ab1d6da7ce5bef97220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17be9ab2bcb81f6e511f41d6d2a71ef8fb451c92b0e92ab1d6da7ce5bef97220->enter($__internal_17be9ab2bcb81f6e511f41d6d2a71ef8fb451c92b0e92ab1d6da7ce5bef97220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2274d325cef1d75db7f1b0691201b028fd3fcdd9a97c67e294fa6d2b38e4fe38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2274d325cef1d75db7f1b0691201b028fd3fcdd9a97c67e294fa6d2b38e4fe38->enter($__internal_2274d325cef1d75db7f1b0691201b028fd3fcdd9a97c67e294fa6d2b38e4fe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Tournois</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_2274d325cef1d75db7f1b0691201b028fd3fcdd9a97c67e294fa6d2b38e4fe38->leave($__internal_2274d325cef1d75db7f1b0691201b028fd3fcdd9a97c67e294fa6d2b38e4fe38_prof);

        
        $__internal_17be9ab2bcb81f6e511f41d6d2a71ef8fb451c92b0e92ab1d6da7ce5bef97220->leave($__internal_17be9ab2bcb81f6e511f41d6d2a71ef8fb451c92b0e92ab1d6da7ce5bef97220_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a9265bb3a8c2d4f7cb7db16c227a49f734b5be1d41a21e2902a5d76193204eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9265bb3a8c2d4f7cb7db16c227a49f734b5be1d41a21e2902a5d76193204eb6->enter($__internal_a9265bb3a8c2d4f7cb7db16c227a49f734b5be1d41a21e2902a5d76193204eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_cdb138cbb262f24c1c06077cdfd0f3563d8f4fc77cf86cb8644b2efe34b758c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb138cbb262f24c1c06077cdfd0f3563d8f4fc77cf86cb8644b2efe34b758c3->enter($__internal_cdb138cbb262f24c1c06077cdfd0f3563d8f4fc77cf86cb8644b2efe34b758c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_cdb138cbb262f24c1c06077cdfd0f3563d8f4fc77cf86cb8644b2efe34b758c3->leave($__internal_cdb138cbb262f24c1c06077cdfd0f3563d8f4fc77cf86cb8644b2efe34b758c3_prof);

        
        $__internal_a9265bb3a8c2d4f7cb7db16c227a49f734b5be1d41a21e2902a5d76193204eb6->leave($__internal_a9265bb3a8c2d4f7cb7db16c227a49f734b5be1d41a21e2902a5d76193204eb6_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle::layout.html.twig";
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
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/layout.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Tournois - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Tournois</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "ASFFTournoisBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/layout.html.twig");
    }
}
