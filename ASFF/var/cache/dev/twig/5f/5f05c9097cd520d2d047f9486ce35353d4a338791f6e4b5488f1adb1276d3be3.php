<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_e0da5fee20b4b4340dde1089a4ad64a09b69a02957333cfb8810c2261f7f809b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d55249492bd480b4f84edf04f4542a7b2e62793d8b12d0d3f0b9b116fade9e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55249492bd480b4f84edf04f4542a7b2e62793d8b12d0d3f0b9b116fade9e53->enter($__internal_d55249492bd480b4f84edf04f4542a7b2e62793d8b12d0d3f0b9b116fade9e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_010e720fbc72fc43647d1418b4a07e124b3833d1cb2af18128ff2cd73635d553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010e720fbc72fc43647d1418b4a07e124b3833d1cb2af18128ff2cd73635d553->enter($__internal_010e720fbc72fc43647d1418b4a07e124b3833d1cb2af18128ff2cd73635d553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55249492bd480b4f84edf04f4542a7b2e62793d8b12d0d3f0b9b116fade9e53->leave($__internal_d55249492bd480b4f84edf04f4542a7b2e62793d8b12d0d3f0b9b116fade9e53_prof);

        
        $__internal_010e720fbc72fc43647d1418b4a07e124b3833d1cb2af18128ff2cd73635d553->leave($__internal_010e720fbc72fc43647d1418b4a07e124b3833d1cb2af18128ff2cd73635d553_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18406ff02d47001d1cc9b572d8990176ba4750d83f2da03d835fc0263a1e0ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18406ff02d47001d1cc9b572d8990176ba4750d83f2da03d835fc0263a1e0ecc->enter($__internal_18406ff02d47001d1cc9b572d8990176ba4750d83f2da03d835fc0263a1e0ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d306430b065f83422c29d3ea48c294a8184b27024db6e8a9416571f4c3564a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d306430b065f83422c29d3ea48c294a8184b27024db6e8a9416571f4c3564a37->enter($__internal_d306430b065f83422c29d3ea48c294a8184b27024db6e8a9416571f4c3564a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d306430b065f83422c29d3ea48c294a8184b27024db6e8a9416571f4c3564a37->leave($__internal_d306430b065f83422c29d3ea48c294a8184b27024db6e8a9416571f4c3564a37_prof);

        
        $__internal_18406ff02d47001d1cc9b572d8990176ba4750d83f2da03d835fc0263a1e0ecc->leave($__internal_18406ff02d47001d1cc9b572d8990176ba4750d83f2da03d835fc0263a1e0ecc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
