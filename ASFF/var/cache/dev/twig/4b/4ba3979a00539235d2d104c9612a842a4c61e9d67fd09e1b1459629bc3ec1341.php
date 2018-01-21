<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4c4c8ac8e0e37cd4aa94b71f9afb6030089a1829faba33be1a78542d59087450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_420b76e20f96336b0d55dcef99df70a0b92e7a2acd11807f1a7bd27d08e8e5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420b76e20f96336b0d55dcef99df70a0b92e7a2acd11807f1a7bd27d08e8e5c6->enter($__internal_420b76e20f96336b0d55dcef99df70a0b92e7a2acd11807f1a7bd27d08e8e5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d50b7edda0988793f80baeaf507a562f6e55e6b34c56584447f0369e7681fa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50b7edda0988793f80baeaf507a562f6e55e6b34c56584447f0369e7681fa91->enter($__internal_d50b7edda0988793f80baeaf507a562f6e55e6b34c56584447f0369e7681fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_420b76e20f96336b0d55dcef99df70a0b92e7a2acd11807f1a7bd27d08e8e5c6->leave($__internal_420b76e20f96336b0d55dcef99df70a0b92e7a2acd11807f1a7bd27d08e8e5c6_prof);

        
        $__internal_d50b7edda0988793f80baeaf507a562f6e55e6b34c56584447f0369e7681fa91->leave($__internal_d50b7edda0988793f80baeaf507a562f6e55e6b34c56584447f0369e7681fa91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc48a7fc59778fb5d39d463cef5dffa6fd87d1a59a465fa82179188e1b7f168c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc48a7fc59778fb5d39d463cef5dffa6fd87d1a59a465fa82179188e1b7f168c->enter($__internal_fc48a7fc59778fb5d39d463cef5dffa6fd87d1a59a465fa82179188e1b7f168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac0a39bf449df224d3c4e32483d46a34a190ce6e27e9ad0ebadbed5aa72b0564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0a39bf449df224d3c4e32483d46a34a190ce6e27e9ad0ebadbed5aa72b0564->enter($__internal_ac0a39bf449df224d3c4e32483d46a34a190ce6e27e9ad0ebadbed5aa72b0564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ac0a39bf449df224d3c4e32483d46a34a190ce6e27e9ad0ebadbed5aa72b0564->leave($__internal_ac0a39bf449df224d3c4e32483d46a34a190ce6e27e9ad0ebadbed5aa72b0564_prof);

        
        $__internal_fc48a7fc59778fb5d39d463cef5dffa6fd87d1a59a465fa82179188e1b7f168c->leave($__internal_fc48a7fc59778fb5d39d463cef5dffa6fd87d1a59a465fa82179188e1b7f168c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_97cc5a6d48ce9bc62fd0122f60dd3f5a5db3f1bb989783dcc51cfc2ef519eed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cc5a6d48ce9bc62fd0122f60dd3f5a5db3f1bb989783dcc51cfc2ef519eed7->enter($__internal_97cc5a6d48ce9bc62fd0122f60dd3f5a5db3f1bb989783dcc51cfc2ef519eed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54c7d44c72b9ce55792b0e6c9355be3121365dfa000704b04fbb33ffe95bad28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c7d44c72b9ce55792b0e6c9355be3121365dfa000704b04fbb33ffe95bad28->enter($__internal_54c7d44c72b9ce55792b0e6c9355be3121365dfa000704b04fbb33ffe95bad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_54c7d44c72b9ce55792b0e6c9355be3121365dfa000704b04fbb33ffe95bad28->leave($__internal_54c7d44c72b9ce55792b0e6c9355be3121365dfa000704b04fbb33ffe95bad28_prof);

        
        $__internal_97cc5a6d48ce9bc62fd0122f60dd3f5a5db3f1bb989783dcc51cfc2ef519eed7->leave($__internal_97cc5a6d48ce9bc62fd0122f60dd3f5a5db3f1bb989783dcc51cfc2ef519eed7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
