<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4fc520de828d162ba825fdae9380f21013bd3e53b36b78d90de5baf62d094852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc520de828d162ba825fdae9380f21013bd3e53b36b78d90de5baf62d094852->enter($__internal_4fc520de828d162ba825fdae9380f21013bd3e53b36b78d90de5baf62d094852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_170dcc9c49b49f0955b678ce25d2bfb5cb8b6e53e62f5ce6b87d54d8e2e2d4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170dcc9c49b49f0955b678ce25d2bfb5cb8b6e53e62f5ce6b87d54d8e2e2d4e1->enter($__internal_170dcc9c49b49f0955b678ce25d2bfb5cb8b6e53e62f5ce6b87d54d8e2e2d4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc520de828d162ba825fdae9380f21013bd3e53b36b78d90de5baf62d094852->leave($__internal_4fc520de828d162ba825fdae9380f21013bd3e53b36b78d90de5baf62d094852_prof);

        
        $__internal_170dcc9c49b49f0955b678ce25d2bfb5cb8b6e53e62f5ce6b87d54d8e2e2d4e1->leave($__internal_170dcc9c49b49f0955b678ce25d2bfb5cb8b6e53e62f5ce6b87d54d8e2e2d4e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18f64c00ba158dd714a8e566c2554332d7396469410d0330d0e08a302b5c0e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f64c00ba158dd714a8e566c2554332d7396469410d0330d0e08a302b5c0e03->enter($__internal_18f64c00ba158dd714a8e566c2554332d7396469410d0330d0e08a302b5c0e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6617b4bc5e06d78aac735cb8bca8205054d5851cbfd42efa1a5af7ed86338997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6617b4bc5e06d78aac735cb8bca8205054d5851cbfd42efa1a5af7ed86338997->enter($__internal_6617b4bc5e06d78aac735cb8bca8205054d5851cbfd42efa1a5af7ed86338997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6617b4bc5e06d78aac735cb8bca8205054d5851cbfd42efa1a5af7ed86338997->leave($__internal_6617b4bc5e06d78aac735cb8bca8205054d5851cbfd42efa1a5af7ed86338997_prof);

        
        $__internal_18f64c00ba158dd714a8e566c2554332d7396469410d0330d0e08a302b5c0e03->leave($__internal_18f64c00ba158dd714a8e566c2554332d7396469410d0330d0e08a302b5c0e03_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e17d22f3b1764a4b088127e8401cd02a025104b0343b7bcea9356047c8daffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e17d22f3b1764a4b088127e8401cd02a025104b0343b7bcea9356047c8daffc->enter($__internal_4e17d22f3b1764a4b088127e8401cd02a025104b0343b7bcea9356047c8daffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b558a14cd3f1da245f29f991e34219421099a9ffcce57494540ada1146205bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b558a14cd3f1da245f29f991e34219421099a9ffcce57494540ada1146205bd->enter($__internal_1b558a14cd3f1da245f29f991e34219421099a9ffcce57494540ada1146205bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1b558a14cd3f1da245f29f991e34219421099a9ffcce57494540ada1146205bd->leave($__internal_1b558a14cd3f1da245f29f991e34219421099a9ffcce57494540ada1146205bd_prof);

        
        $__internal_4e17d22f3b1764a4b088127e8401cd02a025104b0343b7bcea9356047c8daffc->leave($__internal_4e17d22f3b1764a4b088127e8401cd02a025104b0343b7bcea9356047c8daffc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99b3c991b7ef6cb1c8b5f049d1ab3a1bad0ee10c09a94b4a70b7d79f125019f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b3c991b7ef6cb1c8b5f049d1ab3a1bad0ee10c09a94b4a70b7d79f125019f4->enter($__internal_99b3c991b7ef6cb1c8b5f049d1ab3a1bad0ee10c09a94b4a70b7d79f125019f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea6e04850f5cbc957f240e09c7a93358021338ad9b9b893abaaa9cb4c8326f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6e04850f5cbc957f240e09c7a93358021338ad9b9b893abaaa9cb4c8326f3e->enter($__internal_ea6e04850f5cbc957f240e09c7a93358021338ad9b9b893abaaa9cb4c8326f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ea6e04850f5cbc957f240e09c7a93358021338ad9b9b893abaaa9cb4c8326f3e->leave($__internal_ea6e04850f5cbc957f240e09c7a93358021338ad9b9b893abaaa9cb4c8326f3e_prof);

        
        $__internal_99b3c991b7ef6cb1c8b5f049d1ab3a1bad0ee10c09a94b4a70b7d79f125019f4->leave($__internal_99b3c991b7ef6cb1c8b5f049d1ab3a1bad0ee10c09a94b4a70b7d79f125019f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ASFF\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
