<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_14476ff75440635dcf97740763a551518bbcfa14b67b150c927240a3daa337fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284cc72608d79a59a01287beed300b73873bb63410187438c1a8b91714bb5305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284cc72608d79a59a01287beed300b73873bb63410187438c1a8b91714bb5305->enter($__internal_284cc72608d79a59a01287beed300b73873bb63410187438c1a8b91714bb5305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a00edd81ed38aa08422e130ddb0ba7de0e9d3d3180c13621e15ed0f62b92167c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00edd81ed38aa08422e130ddb0ba7de0e9d3d3180c13621e15ed0f62b92167c->enter($__internal_a00edd81ed38aa08422e130ddb0ba7de0e9d3d3180c13621e15ed0f62b92167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284cc72608d79a59a01287beed300b73873bb63410187438c1a8b91714bb5305->leave($__internal_284cc72608d79a59a01287beed300b73873bb63410187438c1a8b91714bb5305_prof);

        
        $__internal_a00edd81ed38aa08422e130ddb0ba7de0e9d3d3180c13621e15ed0f62b92167c->leave($__internal_a00edd81ed38aa08422e130ddb0ba7de0e9d3d3180c13621e15ed0f62b92167c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3eda1b259bfdc16ef64ed68ba326c4ed757332cd8d306d5110f4e5a2e4a256a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eda1b259bfdc16ef64ed68ba326c4ed757332cd8d306d5110f4e5a2e4a256a0->enter($__internal_3eda1b259bfdc16ef64ed68ba326c4ed757332cd8d306d5110f4e5a2e4a256a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9200cb1ee0187718819476fc883f1c0ed08796e6b9520f98dc494e7bb8328728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9200cb1ee0187718819476fc883f1c0ed08796e6b9520f98dc494e7bb8328728->enter($__internal_9200cb1ee0187718819476fc883f1c0ed08796e6b9520f98dc494e7bb8328728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9200cb1ee0187718819476fc883f1c0ed08796e6b9520f98dc494e7bb8328728->leave($__internal_9200cb1ee0187718819476fc883f1c0ed08796e6b9520f98dc494e7bb8328728_prof);

        
        $__internal_3eda1b259bfdc16ef64ed68ba326c4ed757332cd8d306d5110f4e5a2e4a256a0->leave($__internal_3eda1b259bfdc16ef64ed68ba326c4ed757332cd8d306d5110f4e5a2e4a256a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\ASFF\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
