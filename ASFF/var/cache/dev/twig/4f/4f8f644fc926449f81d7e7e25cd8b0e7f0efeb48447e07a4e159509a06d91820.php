<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c53b8fb89ccf835af7f32c2a7843da761cabedce2a7748c45fe9a1403818fe35 extends Twig_Template
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
        $__internal_becff526b449c3fb10108bc9052db1e5067e3e5c8418d56e31ccfeed3e32a91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becff526b449c3fb10108bc9052db1e5067e3e5c8418d56e31ccfeed3e32a91d->enter($__internal_becff526b449c3fb10108bc9052db1e5067e3e5c8418d56e31ccfeed3e32a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0c94a87173c46e07e931d71a051e772c0e84673331e8346a24ece928b166960a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c94a87173c46e07e931d71a051e772c0e84673331e8346a24ece928b166960a->enter($__internal_0c94a87173c46e07e931d71a051e772c0e84673331e8346a24ece928b166960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_becff526b449c3fb10108bc9052db1e5067e3e5c8418d56e31ccfeed3e32a91d->leave($__internal_becff526b449c3fb10108bc9052db1e5067e3e5c8418d56e31ccfeed3e32a91d_prof);

        
        $__internal_0c94a87173c46e07e931d71a051e772c0e84673331e8346a24ece928b166960a->leave($__internal_0c94a87173c46e07e931d71a051e772c0e84673331e8346a24ece928b166960a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25be662dcd6d27f9f0704ba8edebc4d57d2e94ecb177ce6319ce1b8b65bf42d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25be662dcd6d27f9f0704ba8edebc4d57d2e94ecb177ce6319ce1b8b65bf42d0->enter($__internal_25be662dcd6d27f9f0704ba8edebc4d57d2e94ecb177ce6319ce1b8b65bf42d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dbcbbdb430d61d4541a6184c4c3ddcc742c3854164a177cdcf80b221a53c27bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcbbdb430d61d4541a6184c4c3ddcc742c3854164a177cdcf80b221a53c27bf->enter($__internal_dbcbbdb430d61d4541a6184c4c3ddcc742c3854164a177cdcf80b221a53c27bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_dbcbbdb430d61d4541a6184c4c3ddcc742c3854164a177cdcf80b221a53c27bf->leave($__internal_dbcbbdb430d61d4541a6184c4c3ddcc742c3854164a177cdcf80b221a53c27bf_prof);

        
        $__internal_25be662dcd6d27f9f0704ba8edebc4d57d2e94ecb177ce6319ce1b8b65bf42d0->leave($__internal_25be662dcd6d27f9f0704ba8edebc4d57d2e94ecb177ce6319ce1b8b65bf42d0_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
