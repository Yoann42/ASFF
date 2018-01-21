<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5544c4b532c80ec31e341431ee4776b3d27fcfff955ffe815489b243dbbb6af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de75383f5508e9889a09cb8772f03ab9a8d361f410b4973b8fbbb165d7db3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de75383f5508e9889a09cb8772f03ab9a8d361f410b4973b8fbbb165d7db3a7->enter($__internal_6de75383f5508e9889a09cb8772f03ab9a8d361f410b4973b8fbbb165d7db3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cf76252bd163ff8d606dda63b38789bd473ca3d19038669880c3ef95d070e5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf76252bd163ff8d606dda63b38789bd473ca3d19038669880c3ef95d070e5c5->enter($__internal_cf76252bd163ff8d606dda63b38789bd473ca3d19038669880c3ef95d070e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de75383f5508e9889a09cb8772f03ab9a8d361f410b4973b8fbbb165d7db3a7->leave($__internal_6de75383f5508e9889a09cb8772f03ab9a8d361f410b4973b8fbbb165d7db3a7_prof);

        
        $__internal_cf76252bd163ff8d606dda63b38789bd473ca3d19038669880c3ef95d070e5c5->leave($__internal_cf76252bd163ff8d606dda63b38789bd473ca3d19038669880c3ef95d070e5c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fb8f67bf0a969da3f9a00514c19df4c530a928eb04ede8de07d99518be09a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb8f67bf0a969da3f9a00514c19df4c530a928eb04ede8de07d99518be09a2b->enter($__internal_2fb8f67bf0a969da3f9a00514c19df4c530a928eb04ede8de07d99518be09a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71306df236bfe8f1fe3bdae0b3f43200a261c7a4ec8b826dde78bd4bb4fd9843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71306df236bfe8f1fe3bdae0b3f43200a261c7a4ec8b826dde78bd4bb4fd9843->enter($__internal_71306df236bfe8f1fe3bdae0b3f43200a261c7a4ec8b826dde78bd4bb4fd9843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71306df236bfe8f1fe3bdae0b3f43200a261c7a4ec8b826dde78bd4bb4fd9843->leave($__internal_71306df236bfe8f1fe3bdae0b3f43200a261c7a4ec8b826dde78bd4bb4fd9843_prof);

        
        $__internal_2fb8f67bf0a969da3f9a00514c19df4c530a928eb04ede8de07d99518be09a2b->leave($__internal_2fb8f67bf0a969da3f9a00514c19df4c530a928eb04ede8de07d99518be09a2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7989e0fd292d976b0bf5b192a10fbe24921f77e5403b6d534db6b46382a38717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7989e0fd292d976b0bf5b192a10fbe24921f77e5403b6d534db6b46382a38717->enter($__internal_7989e0fd292d976b0bf5b192a10fbe24921f77e5403b6d534db6b46382a38717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88e0378b73d0daeda8b6c6a6f386fe4cbbc7351c5e9aeef59df1a1fa3923a6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e0378b73d0daeda8b6c6a6f386fe4cbbc7351c5e9aeef59df1a1fa3923a6ed->enter($__internal_88e0378b73d0daeda8b6c6a6f386fe4cbbc7351c5e9aeef59df1a1fa3923a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88e0378b73d0daeda8b6c6a6f386fe4cbbc7351c5e9aeef59df1a1fa3923a6ed->leave($__internal_88e0378b73d0daeda8b6c6a6f386fe4cbbc7351c5e9aeef59df1a1fa3923a6ed_prof);

        
        $__internal_7989e0fd292d976b0bf5b192a10fbe24921f77e5403b6d534db6b46382a38717->leave($__internal_7989e0fd292d976b0bf5b192a10fbe24921f77e5403b6d534db6b46382a38717_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a99167d36cc25793ebfc25acd57da99a080f5b2d38e3494611e790d4ed90e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a99167d36cc25793ebfc25acd57da99a080f5b2d38e3494611e790d4ed90e0e->enter($__internal_5a99167d36cc25793ebfc25acd57da99a080f5b2d38e3494611e790d4ed90e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_680c306c141af7bb40d8da39deae72626b02e31f08c1ff7f385701552ac9e058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680c306c141af7bb40d8da39deae72626b02e31f08c1ff7f385701552ac9e058->enter($__internal_680c306c141af7bb40d8da39deae72626b02e31f08c1ff7f385701552ac9e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_680c306c141af7bb40d8da39deae72626b02e31f08c1ff7f385701552ac9e058->leave($__internal_680c306c141af7bb40d8da39deae72626b02e31f08c1ff7f385701552ac9e058_prof);

        
        $__internal_5a99167d36cc25793ebfc25acd57da99a080f5b2d38e3494611e790d4ed90e0e->leave($__internal_5a99167d36cc25793ebfc25acd57da99a080f5b2d38e3494611e790d4ed90e0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
