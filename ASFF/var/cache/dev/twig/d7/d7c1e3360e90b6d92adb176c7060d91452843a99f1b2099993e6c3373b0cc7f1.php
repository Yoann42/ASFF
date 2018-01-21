<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8c03e603097af06867a493636e9e70319aafbe1d672165a0432bc35b3ea00e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_87970d4fe88a1c5b0ba612de320887a6a9f1de611e771827b01f4bcb743b7eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87970d4fe88a1c5b0ba612de320887a6a9f1de611e771827b01f4bcb743b7eb9->enter($__internal_87970d4fe88a1c5b0ba612de320887a6a9f1de611e771827b01f4bcb743b7eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d643406e01ced57d352fd591c09ac55c85d5fcd7df70ecdbfcb4e4dbe85a46e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d643406e01ced57d352fd591c09ac55c85d5fcd7df70ecdbfcb4e4dbe85a46e1->enter($__internal_d643406e01ced57d352fd591c09ac55c85d5fcd7df70ecdbfcb4e4dbe85a46e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87970d4fe88a1c5b0ba612de320887a6a9f1de611e771827b01f4bcb743b7eb9->leave($__internal_87970d4fe88a1c5b0ba612de320887a6a9f1de611e771827b01f4bcb743b7eb9_prof);

        
        $__internal_d643406e01ced57d352fd591c09ac55c85d5fcd7df70ecdbfcb4e4dbe85a46e1->leave($__internal_d643406e01ced57d352fd591c09ac55c85d5fcd7df70ecdbfcb4e4dbe85a46e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76b6d1cf416edde85dec87904f0b02c3393af1032b83063fd0b699a1719b0b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b6d1cf416edde85dec87904f0b02c3393af1032b83063fd0b699a1719b0b2f->enter($__internal_76b6d1cf416edde85dec87904f0b02c3393af1032b83063fd0b699a1719b0b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_263b5fd04c1eb348a5fdc3fae73d5939f3dd680f04c872b78f966cefa96e9ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263b5fd04c1eb348a5fdc3fae73d5939f3dd680f04c872b78f966cefa96e9ae3->enter($__internal_263b5fd04c1eb348a5fdc3fae73d5939f3dd680f04c872b78f966cefa96e9ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_263b5fd04c1eb348a5fdc3fae73d5939f3dd680f04c872b78f966cefa96e9ae3->leave($__internal_263b5fd04c1eb348a5fdc3fae73d5939f3dd680f04c872b78f966cefa96e9ae3_prof);

        
        $__internal_76b6d1cf416edde85dec87904f0b02c3393af1032b83063fd0b699a1719b0b2f->leave($__internal_76b6d1cf416edde85dec87904f0b02c3393af1032b83063fd0b699a1719b0b2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b08f117adabd9f8e80d77105f45010d8b24a74cba7e2631cc64349f31f098c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b08f117adabd9f8e80d77105f45010d8b24a74cba7e2631cc64349f31f098c0->enter($__internal_5b08f117adabd9f8e80d77105f45010d8b24a74cba7e2631cc64349f31f098c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25fdb84b5c76564ba823b41d657b3c9bfea3a3756307e2317ab9a343de9f9497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fdb84b5c76564ba823b41d657b3c9bfea3a3756307e2317ab9a343de9f9497->enter($__internal_25fdb84b5c76564ba823b41d657b3c9bfea3a3756307e2317ab9a343de9f9497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25fdb84b5c76564ba823b41d657b3c9bfea3a3756307e2317ab9a343de9f9497->leave($__internal_25fdb84b5c76564ba823b41d657b3c9bfea3a3756307e2317ab9a343de9f9497_prof);

        
        $__internal_5b08f117adabd9f8e80d77105f45010d8b24a74cba7e2631cc64349f31f098c0->leave($__internal_5b08f117adabd9f8e80d77105f45010d8b24a74cba7e2631cc64349f31f098c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
