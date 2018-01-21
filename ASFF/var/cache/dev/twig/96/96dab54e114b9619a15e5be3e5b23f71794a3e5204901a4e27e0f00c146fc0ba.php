<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_cd578170e93eee88c17030098e1da580e2234250ed44d18a0c51b1f8f3b8df44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_c78f58371df5217b695357fe37f863602638f365cfd8f65ce2e7406218d7f685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78f58371df5217b695357fe37f863602638f365cfd8f65ce2e7406218d7f685->enter($__internal_c78f58371df5217b695357fe37f863602638f365cfd8f65ce2e7406218d7f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5364b8b2d1fcf555fff3a7086a7fe4b236814069f44f7d98606ea4ca5b5d7a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5364b8b2d1fcf555fff3a7086a7fe4b236814069f44f7d98606ea4ca5b5d7a7f->enter($__internal_5364b8b2d1fcf555fff3a7086a7fe4b236814069f44f7d98606ea4ca5b5d7a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78f58371df5217b695357fe37f863602638f365cfd8f65ce2e7406218d7f685->leave($__internal_c78f58371df5217b695357fe37f863602638f365cfd8f65ce2e7406218d7f685_prof);

        
        $__internal_5364b8b2d1fcf555fff3a7086a7fe4b236814069f44f7d98606ea4ca5b5d7a7f->leave($__internal_5364b8b2d1fcf555fff3a7086a7fe4b236814069f44f7d98606ea4ca5b5d7a7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_668c0137d7b8118629ebf326987f4296d314a344c13fc6c9999bd8b9e129cb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668c0137d7b8118629ebf326987f4296d314a344c13fc6c9999bd8b9e129cb13->enter($__internal_668c0137d7b8118629ebf326987f4296d314a344c13fc6c9999bd8b9e129cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f228f6a6b23e15f06300426d7e62cd1eaa1f9c95285bfacc76c6b3fbf343eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f228f6a6b23e15f06300426d7e62cd1eaa1f9c95285bfacc76c6b3fbf343eca->enter($__internal_6f228f6a6b23e15f06300426d7e62cd1eaa1f9c95285bfacc76c6b3fbf343eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6f228f6a6b23e15f06300426d7e62cd1eaa1f9c95285bfacc76c6b3fbf343eca->leave($__internal_6f228f6a6b23e15f06300426d7e62cd1eaa1f9c95285bfacc76c6b3fbf343eca_prof);

        
        $__internal_668c0137d7b8118629ebf326987f4296d314a344c13fc6c9999bd8b9e129cb13->leave($__internal_668c0137d7b8118629ebf326987f4296d314a344c13fc6c9999bd8b9e129cb13_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a9b6f2396eb78e3b57ef6a73f103d9d62a4e458f95f05422c8d2ca7626f675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a9b6f2396eb78e3b57ef6a73f103d9d62a4e458f95f05422c8d2ca7626f675->enter($__internal_41a9b6f2396eb78e3b57ef6a73f103d9d62a4e458f95f05422c8d2ca7626f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9598ffdea82826e23581481c8724fc11ec7bd59924a852737f3cb5f3f1d58c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9598ffdea82826e23581481c8724fc11ec7bd59924a852737f3cb5f3f1d58c24->enter($__internal_9598ffdea82826e23581481c8724fc11ec7bd59924a852737f3cb5f3f1d58c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9598ffdea82826e23581481c8724fc11ec7bd59924a852737f3cb5f3f1d58c24->leave($__internal_9598ffdea82826e23581481c8724fc11ec7bd59924a852737f3cb5f3f1d58c24_prof);

        
        $__internal_41a9b6f2396eb78e3b57ef6a73f103d9d62a4e458f95f05422c8d2ca7626f675->leave($__internal_41a9b6f2396eb78e3b57ef6a73f103d9d62a4e458f95f05422c8d2ca7626f675_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
