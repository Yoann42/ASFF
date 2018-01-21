<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_35f8ba178ff55adade73ce0075dd30a746452cf234fff19aca4b2447e5c74737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6e97b795f614f6197c1d5ff06db17560847059387db75f5669a908dd4898e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e97b795f614f6197c1d5ff06db17560847059387db75f5669a908dd4898e62->enter($__internal_b6e97b795f614f6197c1d5ff06db17560847059387db75f5669a908dd4898e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e41e581863cb4fbbd47b38c8b8e9e00250e1e04f90b2536ba4c92f352283f6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41e581863cb4fbbd47b38c8b8e9e00250e1e04f90b2536ba4c92f352283f6b5->enter($__internal_e41e581863cb4fbbd47b38c8b8e9e00250e1e04f90b2536ba4c92f352283f6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6e97b795f614f6197c1d5ff06db17560847059387db75f5669a908dd4898e62->leave($__internal_b6e97b795f614f6197c1d5ff06db17560847059387db75f5669a908dd4898e62_prof);

        
        $__internal_e41e581863cb4fbbd47b38c8b8e9e00250e1e04f90b2536ba4c92f352283f6b5->leave($__internal_e41e581863cb4fbbd47b38c8b8e9e00250e1e04f90b2536ba4c92f352283f6b5_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_462d698bc995c4ba0cdefa93070ae04f8c23a8d135636e68eb1f76427d813001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462d698bc995c4ba0cdefa93070ae04f8c23a8d135636e68eb1f76427d813001->enter($__internal_462d698bc995c4ba0cdefa93070ae04f8c23a8d135636e68eb1f76427d813001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5a5e78a513817bb07a162d849b4d6aadbbb542caa86d8e02a17905a475d202e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5e78a513817bb07a162d849b4d6aadbbb542caa86d8e02a17905a475d202e1->enter($__internal_5a5e78a513817bb07a162d849b4d6aadbbb542caa86d8e02a17905a475d202e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5a5e78a513817bb07a162d849b4d6aadbbb542caa86d8e02a17905a475d202e1->leave($__internal_5a5e78a513817bb07a162d849b4d6aadbbb542caa86d8e02a17905a475d202e1_prof);

        
        $__internal_462d698bc995c4ba0cdefa93070ae04f8c23a8d135636e68eb1f76427d813001->leave($__internal_462d698bc995c4ba0cdefa93070ae04f8c23a8d135636e68eb1f76427d813001_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89b8f1c3cf32b658061e38bf43e27265171d256599d2615d63dfe50522c145d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b8f1c3cf32b658061e38bf43e27265171d256599d2615d63dfe50522c145d0->enter($__internal_89b8f1c3cf32b658061e38bf43e27265171d256599d2615d63dfe50522c145d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd676120836f859674f0a0fc13e98a6d6704dfd3e2771099fc80f93132e789ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd676120836f859674f0a0fc13e98a6d6704dfd3e2771099fc80f93132e789ee->enter($__internal_fd676120836f859674f0a0fc13e98a6d6704dfd3e2771099fc80f93132e789ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fd676120836f859674f0a0fc13e98a6d6704dfd3e2771099fc80f93132e789ee->leave($__internal_fd676120836f859674f0a0fc13e98a6d6704dfd3e2771099fc80f93132e789ee_prof);

        
        $__internal_89b8f1c3cf32b658061e38bf43e27265171d256599d2615d63dfe50522c145d0->leave($__internal_89b8f1c3cf32b658061e38bf43e27265171d256599d2615d63dfe50522c145d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
