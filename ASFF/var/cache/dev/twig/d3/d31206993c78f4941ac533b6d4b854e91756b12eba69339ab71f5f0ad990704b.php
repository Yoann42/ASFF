<?php

/* ASFFTournoisBundle:Poona:classement.html.twig */
class __TwigTemplate_eb3dcf12da926938c4cf7cfd3e7de2240e4d03ebfb85bc66a91a6ece800950db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFTournoisBundle:Poona:classement.html.twig", 3);
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
        $__internal_3663b77a5d3c1b3c271b94145991f1ec9a46874428f4e132fee4616aa0a7aa24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3663b77a5d3c1b3c271b94145991f1ec9a46874428f4e132fee4616aa0a7aa24->enter($__internal_3663b77a5d3c1b3c271b94145991f1ec9a46874428f4e132fee4616aa0a7aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Poona:classement.html.twig"));

        $__internal_3f3779263ff3e720d751f0a7792f127a00da7a57f337af05034c2ab6a5755071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3779263ff3e720d751f0a7792f127a00da7a57f337af05034c2ab6a5755071->enter($__internal_3f3779263ff3e720d751f0a7792f127a00da7a57f337af05034c2ab6a5755071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Poona:classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3663b77a5d3c1b3c271b94145991f1ec9a46874428f4e132fee4616aa0a7aa24->leave($__internal_3663b77a5d3c1b3c271b94145991f1ec9a46874428f4e132fee4616aa0a7aa24_prof);

        
        $__internal_3f3779263ff3e720d751f0a7792f127a00da7a57f337af05034c2ab6a5755071->leave($__internal_3f3779263ff3e720d751f0a7792f127a00da7a57f337af05034c2ab6a5755071_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_193b8f6c1da63b60905c7a984f9b88feeb12054aa1ba3ca30294395645e89068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193b8f6c1da63b60905c7a984f9b88feeb12054aa1ba3ca30294395645e89068->enter($__internal_193b8f6c1da63b60905c7a984f9b88feeb12054aa1ba3ca30294395645e89068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b93ccc3cdfa1499a6456cdc5333ed397740f0e8ebb0106c11c31563c68dadddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93ccc3cdfa1499a6456cdc5333ed397740f0e8ebb0106c11c31563c68dadddb->enter($__internal_b93ccc3cdfa1499a6456cdc5333ed397740f0e8ebb0106c11c31563c68dadddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b93ccc3cdfa1499a6456cdc5333ed397740f0e8ebb0106c11c31563c68dadddb->leave($__internal_b93ccc3cdfa1499a6456cdc5333ed397740f0e8ebb0106c11c31563c68dadddb_prof);

        
        $__internal_193b8f6c1da63b60905c7a984f9b88feeb12054aa1ba3ca30294395645e89068->leave($__internal_193b8f6c1da63b60905c7a984f9b88feeb12054aa1ba3ca30294395645e89068_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9b55d5fd0744350088abaf7ea350a05ed5b2033bad94856873f5c281bb1031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9b55d5fd0744350088abaf7ea350a05ed5b2033bad94856873f5c281bb1031->enter($__internal_5e9b55d5fd0744350088abaf7ea350a05ed5b2033bad94856873f5c281bb1031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5973b816f9815d80d671e8615c6521fbfe164c028992ffebbe9e166d82461132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5973b816f9815d80d671e8615c6521fbfe164c028992ffebbe9e166d82461132->enter($__internal_5973b816f9815d80d671e8615c6521fbfe164c028992ffebbe9e166d82461132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Classement de ";
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 25
        echo "
";
        
        $__internal_5973b816f9815d80d671e8615c6521fbfe164c028992ffebbe9e166d82461132->leave($__internal_5973b816f9815d80d671e8615c6521fbfe164c028992ffebbe9e166d82461132_prof);

        
        $__internal_5e9b55d5fd0744350088abaf7ea350a05ed5b2033bad94856873f5c281bb1031->leave($__internal_5e9b55d5fd0744350088abaf7ea350a05ed5b2033bad94856873f5c281bb1031_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e0e83ea9bb9f591c7d2fd0e8a131bdcf8591dd21220d74802cd1eeb314f30612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e83ea9bb9f591c7d2fd0e8a131bdcf8591dd21220d74802cd1eeb314f30612->enter($__internal_e0e83ea9bb9f591c7d2fd0e8a131bdcf8591dd21220d74802cd1eeb314f30612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f7bf4c224cd2b5614c8ca7f79dd3fa5512c12a1982d061cffc26c7f31279467f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bf4c224cd2b5614c8ca7f79dd3fa5512c12a1982d061cffc26c7f31279467f->enter($__internal_f7bf4c224cd2b5614c8ca7f79dd3fa5512c12a1982d061cffc26c7f31279467f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t<h2>Licence n°";
        echo twig_escape_filter($this->env, ($context["licence"] ?? $this->getContext($context, "licence")), "html", null, true);
        echo "</h2>
\t
\t<p>Classement Simple : ";
        // line 20
        echo twig_escape_filter($this->env, ($context["simple"] ?? $this->getContext($context, "simple")), "html", null, true);
        echo "</p>
\t<p>Classement Double : ";
        // line 21
        echo twig_escape_filter($this->env, ($context["double"] ?? $this->getContext($context, "double")), "html", null, true);
        echo "</p>
\t<p>Classement Mixte : ";
        // line 22
        echo twig_escape_filter($this->env, ($context["mixte"] ?? $this->getContext($context, "mixte")), "html", null, true);
        echo "</p>
\t
  ";
        
        $__internal_f7bf4c224cd2b5614c8ca7f79dd3fa5512c12a1982d061cffc26c7f31279467f->leave($__internal_f7bf4c224cd2b5614c8ca7f79dd3fa5512c12a1982d061cffc26c7f31279467f_prof);

        
        $__internal_e0e83ea9bb9f591c7d2fd0e8a131bdcf8591dd21220d74802cd1eeb314f30612->leave($__internal_e0e83ea9bb9f591c7d2fd0e8a131bdcf8591dd21220d74802cd1eeb314f30612_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Poona:classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 22,  117 => 21,  113 => 20,  107 => 18,  98 => 17,  87 => 25,  84 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/PlatformBundle/Resources/view/Advert/classement.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Classement de {{ nom }}</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
\t<h2>Licence n°{{ licence }}</h2>
\t
\t<p>Classement Simple : {{ simple }}</p>
\t<p>Classement Double : {{ double }}</p>
\t<p>Classement Mixte : {{ mixte }}</p>
\t
  {% endblock %}

{% endblock %}
", "ASFFTournoisBundle:Poona:classement.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Poona/classement.html.twig");
    }
}
