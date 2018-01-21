<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f6eada86c76ddc50569f609c3312179493d7935b698e80192703693b614b1568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4627761378a9ba991c6c15a93fc8c836d2d1eef8f59dc87a339bcd5b1586a0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4627761378a9ba991c6c15a93fc8c836d2d1eef8f59dc87a339bcd5b1586a0cf->enter($__internal_4627761378a9ba991c6c15a93fc8c836d2d1eef8f59dc87a339bcd5b1586a0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3df736f6ab1c21c06f8c4bd74b0541f0b3a0ef05d1873d77d6bd0ac07bbd6c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df736f6ab1c21c06f8c4bd74b0541f0b3a0ef05d1873d77d6bd0ac07bbd6c22->enter($__internal_3df736f6ab1c21c06f8c4bd74b0541f0b3a0ef05d1873d77d6bd0ac07bbd6c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4627761378a9ba991c6c15a93fc8c836d2d1eef8f59dc87a339bcd5b1586a0cf->leave($__internal_4627761378a9ba991c6c15a93fc8c836d2d1eef8f59dc87a339bcd5b1586a0cf_prof);

        
        $__internal_3df736f6ab1c21c06f8c4bd74b0541f0b3a0ef05d1873d77d6bd0ac07bbd6c22->leave($__internal_3df736f6ab1c21c06f8c4bd74b0541f0b3a0ef05d1873d77d6bd0ac07bbd6c22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e24a2d2f399ecc89f3d9b832d5c5fb34ce3abd99c6b9290ae6bd6d57e61f466d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24a2d2f399ecc89f3d9b832d5c5fb34ce3abd99c6b9290ae6bd6d57e61f466d->enter($__internal_e24a2d2f399ecc89f3d9b832d5c5fb34ce3abd99c6b9290ae6bd6d57e61f466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dcd9f7f7a1ea555d94c522fce24e508415e7d454bee3a7b3c13733f7188890f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd9f7f7a1ea555d94c522fce24e508415e7d454bee3a7b3c13733f7188890f0->enter($__internal_dcd9f7f7a1ea555d94c522fce24e508415e7d454bee3a7b3c13733f7188890f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dcd9f7f7a1ea555d94c522fce24e508415e7d454bee3a7b3c13733f7188890f0->leave($__internal_dcd9f7f7a1ea555d94c522fce24e508415e7d454bee3a7b3c13733f7188890f0_prof);

        
        $__internal_e24a2d2f399ecc89f3d9b832d5c5fb34ce3abd99c6b9290ae6bd6d57e61f466d->leave($__internal_e24a2d2f399ecc89f3d9b832d5c5fb34ce3abd99c6b9290ae6bd6d57e61f466d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c15d050633af48dbd90155bf264eaa129854b280be80116a693085f55a4222e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15d050633af48dbd90155bf264eaa129854b280be80116a693085f55a4222e8->enter($__internal_c15d050633af48dbd90155bf264eaa129854b280be80116a693085f55a4222e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa06c4710e8d6a1243ecb6c183771e09106a0059ce1b5a63271499cf8d11e9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa06c4710e8d6a1243ecb6c183771e09106a0059ce1b5a63271499cf8d11e9e2->enter($__internal_aa06c4710e8d6a1243ecb6c183771e09106a0059ce1b5a63271499cf8d11e9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa06c4710e8d6a1243ecb6c183771e09106a0059ce1b5a63271499cf8d11e9e2->leave($__internal_aa06c4710e8d6a1243ecb6c183771e09106a0059ce1b5a63271499cf8d11e9e2_prof);

        
        $__internal_c15d050633af48dbd90155bf264eaa129854b280be80116a693085f55a4222e8->leave($__internal_c15d050633af48dbd90155bf264eaa129854b280be80116a693085f55a4222e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dd0cf3903cd9ffd01f25d186b2f69c7a9ef7e25160febb64f468dcaabfddb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd0cf3903cd9ffd01f25d186b2f69c7a9ef7e25160febb64f468dcaabfddb70->enter($__internal_3dd0cf3903cd9ffd01f25d186b2f69c7a9ef7e25160febb64f468dcaabfddb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26b8f2feeb6007cce2b0f3dcc9d840965f60faa78a3f487ac66f4d708fad1fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b8f2feeb6007cce2b0f3dcc9d840965f60faa78a3f487ac66f4d708fad1fc6->enter($__internal_26b8f2feeb6007cce2b0f3dcc9d840965f60faa78a3f487ac66f4d708fad1fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26b8f2feeb6007cce2b0f3dcc9d840965f60faa78a3f487ac66f4d708fad1fc6->leave($__internal_26b8f2feeb6007cce2b0f3dcc9d840965f60faa78a3f487ac66f4d708fad1fc6_prof);

        
        $__internal_3dd0cf3903cd9ffd01f25d186b2f69c7a9ef7e25160febb64f468dcaabfddb70->leave($__internal_3dd0cf3903cd9ffd01f25d186b2f69c7a9ef7e25160febb64f468dcaabfddb70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
