<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
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
        $__internal_bbff680d14fe30c4321f80ad49031a307a86f1063a827ef867e63ec6eed78948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbff680d14fe30c4321f80ad49031a307a86f1063a827ef867e63ec6eed78948->enter($__internal_bbff680d14fe30c4321f80ad49031a307a86f1063a827ef867e63ec6eed78948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0b581447b3d3ce36174f0ef6e055c3e1293df9fc43714f3e0732b82e305a9ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b581447b3d3ce36174f0ef6e055c3e1293df9fc43714f3e0732b82e305a9ee9->enter($__internal_0b581447b3d3ce36174f0ef6e055c3e1293df9fc43714f3e0732b82e305a9ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbff680d14fe30c4321f80ad49031a307a86f1063a827ef867e63ec6eed78948->leave($__internal_bbff680d14fe30c4321f80ad49031a307a86f1063a827ef867e63ec6eed78948_prof);

        
        $__internal_0b581447b3d3ce36174f0ef6e055c3e1293df9fc43714f3e0732b82e305a9ee9->leave($__internal_0b581447b3d3ce36174f0ef6e055c3e1293df9fc43714f3e0732b82e305a9ee9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a40438cf52e0d375065d8d87630223d1fe949760047aa654a8fb81ab0200bb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40438cf52e0d375065d8d87630223d1fe949760047aa654a8fb81ab0200bb38->enter($__internal_a40438cf52e0d375065d8d87630223d1fe949760047aa654a8fb81ab0200bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a038fd494f520143436a75f8b663cecd2bf1c12e64c41b1945d765db1f2dc298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a038fd494f520143436a75f8b663cecd2bf1c12e64c41b1945d765db1f2dc298->enter($__internal_a038fd494f520143436a75f8b663cecd2bf1c12e64c41b1945d765db1f2dc298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a038fd494f520143436a75f8b663cecd2bf1c12e64c41b1945d765db1f2dc298->leave($__internal_a038fd494f520143436a75f8b663cecd2bf1c12e64c41b1945d765db1f2dc298_prof);

        
        $__internal_a40438cf52e0d375065d8d87630223d1fe949760047aa654a8fb81ab0200bb38->leave($__internal_a40438cf52e0d375065d8d87630223d1fe949760047aa654a8fb81ab0200bb38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a384da2e7775692e6541a98be11706e72c32da8c9d23bdfb369580178414972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a384da2e7775692e6541a98be11706e72c32da8c9d23bdfb369580178414972->enter($__internal_5a384da2e7775692e6541a98be11706e72c32da8c9d23bdfb369580178414972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb80021207363908f2ae2e5b98d8dc54f1a5c0d96e23e0627ffbe7cd210f776b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb80021207363908f2ae2e5b98d8dc54f1a5c0d96e23e0627ffbe7cd210f776b->enter($__internal_bb80021207363908f2ae2e5b98d8dc54f1a5c0d96e23e0627ffbe7cd210f776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb80021207363908f2ae2e5b98d8dc54f1a5c0d96e23e0627ffbe7cd210f776b->leave($__internal_bb80021207363908f2ae2e5b98d8dc54f1a5c0d96e23e0627ffbe7cd210f776b_prof);

        
        $__internal_5a384da2e7775692e6541a98be11706e72c32da8c9d23bdfb369580178414972->leave($__internal_5a384da2e7775692e6541a98be11706e72c32da8c9d23bdfb369580178414972_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_225907b19f1f4d461fec0c0f7bb26662edf25b84d8493048f1730618e14b4eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225907b19f1f4d461fec0c0f7bb26662edf25b84d8493048f1730618e14b4eff->enter($__internal_225907b19f1f4d461fec0c0f7bb26662edf25b84d8493048f1730618e14b4eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5f4540ec0f03af74c265b94d060d5727f3f74ca49697937e3c2b6639e3b8edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f4540ec0f03af74c265b94d060d5727f3f74ca49697937e3c2b6639e3b8edb->enter($__internal_f5f4540ec0f03af74c265b94d060d5727f3f74ca49697937e3c2b6639e3b8edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5f4540ec0f03af74c265b94d060d5727f3f74ca49697937e3c2b6639e3b8edb->leave($__internal_f5f4540ec0f03af74c265b94d060d5727f3f74ca49697937e3c2b6639e3b8edb_prof);

        
        $__internal_225907b19f1f4d461fec0c0f7bb26662edf25b84d8493048f1730618e14b4eff->leave($__internal_225907b19f1f4d461fec0c0f7bb26662edf25b84d8493048f1730618e14b4eff_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ASFF\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
