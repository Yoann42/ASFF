<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d566d4424cffdf0f198ad16fd9510ee4a4d2955a242434d0d1c431ce3368a297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_3ae3cc16d3d2366fd09f55c820014d47f1a8abed316528870f6c584ff82e3e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae3cc16d3d2366fd09f55c820014d47f1a8abed316528870f6c584ff82e3e0d->enter($__internal_3ae3cc16d3d2366fd09f55c820014d47f1a8abed316528870f6c584ff82e3e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9a1ceef692e6cd9f496fd421d2c72b89b11ff83e9d4767ce2cd760e26d7223a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1ceef692e6cd9f496fd421d2c72b89b11ff83e9d4767ce2cd760e26d7223a3->enter($__internal_9a1ceef692e6cd9f496fd421d2c72b89b11ff83e9d4767ce2cd760e26d7223a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae3cc16d3d2366fd09f55c820014d47f1a8abed316528870f6c584ff82e3e0d->leave($__internal_3ae3cc16d3d2366fd09f55c820014d47f1a8abed316528870f6c584ff82e3e0d_prof);

        
        $__internal_9a1ceef692e6cd9f496fd421d2c72b89b11ff83e9d4767ce2cd760e26d7223a3->leave($__internal_9a1ceef692e6cd9f496fd421d2c72b89b11ff83e9d4767ce2cd760e26d7223a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dd7d113413a92b6635ddaecc7abf821ea8100099963947bbac7f955532fe694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd7d113413a92b6635ddaecc7abf821ea8100099963947bbac7f955532fe694->enter($__internal_2dd7d113413a92b6635ddaecc7abf821ea8100099963947bbac7f955532fe694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85f878d82cd429f513977e945dbe4571462b7d5a7d759e44e79405a21ec9d8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f878d82cd429f513977e945dbe4571462b7d5a7d759e44e79405a21ec9d8d4->enter($__internal_85f878d82cd429f513977e945dbe4571462b7d5a7d759e44e79405a21ec9d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_85f878d82cd429f513977e945dbe4571462b7d5a7d759e44e79405a21ec9d8d4->leave($__internal_85f878d82cd429f513977e945dbe4571462b7d5a7d759e44e79405a21ec9d8d4_prof);

        
        $__internal_2dd7d113413a92b6635ddaecc7abf821ea8100099963947bbac7f955532fe694->leave($__internal_2dd7d113413a92b6635ddaecc7abf821ea8100099963947bbac7f955532fe694_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0289f5a2070f558fa63610ff650a8d779e5778884388a154c9ad618275dabbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0289f5a2070f558fa63610ff650a8d779e5778884388a154c9ad618275dabbc->enter($__internal_d0289f5a2070f558fa63610ff650a8d779e5778884388a154c9ad618275dabbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f951147dc5f828a4d4e977bc9cca853d51d333c64a20e778bde1bd22b9f8b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f951147dc5f828a4d4e977bc9cca853d51d333c64a20e778bde1bd22b9f8b43->enter($__internal_6f951147dc5f828a4d4e977bc9cca853d51d333c64a20e778bde1bd22b9f8b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6f951147dc5f828a4d4e977bc9cca853d51d333c64a20e778bde1bd22b9f8b43->leave($__internal_6f951147dc5f828a4d4e977bc9cca853d51d333c64a20e778bde1bd22b9f8b43_prof);

        
        $__internal_d0289f5a2070f558fa63610ff650a8d779e5778884388a154c9ad618275dabbc->leave($__internal_d0289f5a2070f558fa63610ff650a8d779e5778884388a154c9ad618275dabbc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da537f26789f1a4da117abb8dd486697d8f6fd6f93c8b767af7afe12494c4277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da537f26789f1a4da117abb8dd486697d8f6fd6f93c8b767af7afe12494c4277->enter($__internal_da537f26789f1a4da117abb8dd486697d8f6fd6f93c8b767af7afe12494c4277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddb2fc50f323f323d43f27b86fcde087cdda50bcba60279b7219912169cfb077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb2fc50f323f323d43f27b86fcde087cdda50bcba60279b7219912169cfb077->enter($__internal_ddb2fc50f323f323d43f27b86fcde087cdda50bcba60279b7219912169cfb077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ddb2fc50f323f323d43f27b86fcde087cdda50bcba60279b7219912169cfb077->leave($__internal_ddb2fc50f323f323d43f27b86fcde087cdda50bcba60279b7219912169cfb077_prof);

        
        $__internal_da537f26789f1a4da117abb8dd486697d8f6fd6f93c8b767af7afe12494c4277->leave($__internal_da537f26789f1a4da117abb8dd486697d8f6fd6f93c8b767af7afe12494c4277_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
