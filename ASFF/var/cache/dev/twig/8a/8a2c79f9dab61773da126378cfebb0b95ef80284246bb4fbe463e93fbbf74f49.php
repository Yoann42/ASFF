<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_de11fff26ee630b5addae6e6d911671c0b27f8ba27246a6b0c194d1d551964dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b51cea1a4faabfaf92e180c529c59ecce8aa9927b1228c20ff7e09d945712c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51cea1a4faabfaf92e180c529c59ecce8aa9927b1228c20ff7e09d945712c0a->enter($__internal_b51cea1a4faabfaf92e180c529c59ecce8aa9927b1228c20ff7e09d945712c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a56bc706364ee1aee9598d2107062eef3f21bb1efd9fe66d0b7e13edfc626a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56bc706364ee1aee9598d2107062eef3f21bb1efd9fe66d0b7e13edfc626a12->enter($__internal_a56bc706364ee1aee9598d2107062eef3f21bb1efd9fe66d0b7e13edfc626a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51cea1a4faabfaf92e180c529c59ecce8aa9927b1228c20ff7e09d945712c0a->leave($__internal_b51cea1a4faabfaf92e180c529c59ecce8aa9927b1228c20ff7e09d945712c0a_prof);

        
        $__internal_a56bc706364ee1aee9598d2107062eef3f21bb1efd9fe66d0b7e13edfc626a12->leave($__internal_a56bc706364ee1aee9598d2107062eef3f21bb1efd9fe66d0b7e13edfc626a12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7753fdd6cc9a203bb8a6553a3beba44227f50eda40e533733862ade5d471529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7753fdd6cc9a203bb8a6553a3beba44227f50eda40e533733862ade5d471529->enter($__internal_f7753fdd6cc9a203bb8a6553a3beba44227f50eda40e533733862ade5d471529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9192fcbd6ac1c50f282b9b6f6eb935d6f2e1a6fd8963a22a21575058a2d3d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9192fcbd6ac1c50f282b9b6f6eb935d6f2e1a6fd8963a22a21575058a2d3d856->enter($__internal_9192fcbd6ac1c50f282b9b6f6eb935d6f2e1a6fd8963a22a21575058a2d3d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9192fcbd6ac1c50f282b9b6f6eb935d6f2e1a6fd8963a22a21575058a2d3d856->leave($__internal_9192fcbd6ac1c50f282b9b6f6eb935d6f2e1a6fd8963a22a21575058a2d3d856_prof);

        
        $__internal_f7753fdd6cc9a203bb8a6553a3beba44227f50eda40e533733862ade5d471529->leave($__internal_f7753fdd6cc9a203bb8a6553a3beba44227f50eda40e533733862ade5d471529_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de2afcb49855350e40a591c6c78180972ff349c33b02656677ff9c2bb9f8296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de2afcb49855350e40a591c6c78180972ff349c33b02656677ff9c2bb9f8296->enter($__internal_7de2afcb49855350e40a591c6c78180972ff349c33b02656677ff9c2bb9f8296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ba328cc7b45e09b91461f192999b7b5c6509e0d1dc887b2d2755d8c97bd67fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba328cc7b45e09b91461f192999b7b5c6509e0d1dc887b2d2755d8c97bd67fa->enter($__internal_8ba328cc7b45e09b91461f192999b7b5c6509e0d1dc887b2d2755d8c97bd67fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8ba328cc7b45e09b91461f192999b7b5c6509e0d1dc887b2d2755d8c97bd67fa->leave($__internal_8ba328cc7b45e09b91461f192999b7b5c6509e0d1dc887b2d2755d8c97bd67fa_prof);

        
        $__internal_7de2afcb49855350e40a591c6c78180972ff349c33b02656677ff9c2bb9f8296->leave($__internal_7de2afcb49855350e40a591c6c78180972ff349c33b02656677ff9c2bb9f8296_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
