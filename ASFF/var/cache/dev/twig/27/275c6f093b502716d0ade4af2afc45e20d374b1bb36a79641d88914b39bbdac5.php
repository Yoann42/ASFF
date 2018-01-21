<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6a6a31272debe58f423308ac57c0bb350e83169423a3b3c61ae04de197e4346 extends Twig_Template
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
        $__internal_332f9744f30e06fbff0515ebd7d6e2da3df318a382daf42b733f2b6c8247d9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332f9744f30e06fbff0515ebd7d6e2da3df318a382daf42b733f2b6c8247d9a0->enter($__internal_332f9744f30e06fbff0515ebd7d6e2da3df318a382daf42b733f2b6c8247d9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_740532e5508a1d7703b17e52b7671c5f35b137b2e7c4643b596d295d1b20c2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740532e5508a1d7703b17e52b7671c5f35b137b2e7c4643b596d295d1b20c2cf->enter($__internal_740532e5508a1d7703b17e52b7671c5f35b137b2e7c4643b596d295d1b20c2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332f9744f30e06fbff0515ebd7d6e2da3df318a382daf42b733f2b6c8247d9a0->leave($__internal_332f9744f30e06fbff0515ebd7d6e2da3df318a382daf42b733f2b6c8247d9a0_prof);

        
        $__internal_740532e5508a1d7703b17e52b7671c5f35b137b2e7c4643b596d295d1b20c2cf->leave($__internal_740532e5508a1d7703b17e52b7671c5f35b137b2e7c4643b596d295d1b20c2cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9764ca81184b80ccdaf9b4bda6e42a2ea6a24e763908c2031ba79b6aa415e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9764ca81184b80ccdaf9b4bda6e42a2ea6a24e763908c2031ba79b6aa415e93->enter($__internal_f9764ca81184b80ccdaf9b4bda6e42a2ea6a24e763908c2031ba79b6aa415e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44880d39d9f92702403ee7c10844ee298776ffff21c28dfb87181e18f0a25202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44880d39d9f92702403ee7c10844ee298776ffff21c28dfb87181e18f0a25202->enter($__internal_44880d39d9f92702403ee7c10844ee298776ffff21c28dfb87181e18f0a25202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_44880d39d9f92702403ee7c10844ee298776ffff21c28dfb87181e18f0a25202->leave($__internal_44880d39d9f92702403ee7c10844ee298776ffff21c28dfb87181e18f0a25202_prof);

        
        $__internal_f9764ca81184b80ccdaf9b4bda6e42a2ea6a24e763908c2031ba79b6aa415e93->leave($__internal_f9764ca81184b80ccdaf9b4bda6e42a2ea6a24e763908c2031ba79b6aa415e93_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d2b133c16245c9b63f05d4e6adfb0df9770fd687485612c21567e21623a7b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2b133c16245c9b63f05d4e6adfb0df9770fd687485612c21567e21623a7b8f->enter($__internal_4d2b133c16245c9b63f05d4e6adfb0df9770fd687485612c21567e21623a7b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5dfcff389855e554de0f8108619898bc1041034034a9dadeb2fb7f0f80eca972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfcff389855e554de0f8108619898bc1041034034a9dadeb2fb7f0f80eca972->enter($__internal_5dfcff389855e554de0f8108619898bc1041034034a9dadeb2fb7f0f80eca972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5dfcff389855e554de0f8108619898bc1041034034a9dadeb2fb7f0f80eca972->leave($__internal_5dfcff389855e554de0f8108619898bc1041034034a9dadeb2fb7f0f80eca972_prof);

        
        $__internal_4d2b133c16245c9b63f05d4e6adfb0df9770fd687485612c21567e21623a7b8f->leave($__internal_4d2b133c16245c9b63f05d4e6adfb0df9770fd687485612c21567e21623a7b8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d326246936316f0cc9e644495cafab8125613b75137a1968dce8ea09633b017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d326246936316f0cc9e644495cafab8125613b75137a1968dce8ea09633b017->enter($__internal_8d326246936316f0cc9e644495cafab8125613b75137a1968dce8ea09633b017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ab0eb209e5de98bbe73a010046ea23fe45935418e96f3904d8233d8acdab206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab0eb209e5de98bbe73a010046ea23fe45935418e96f3904d8233d8acdab206->enter($__internal_3ab0eb209e5de98bbe73a010046ea23fe45935418e96f3904d8233d8acdab206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3ab0eb209e5de98bbe73a010046ea23fe45935418e96f3904d8233d8acdab206->leave($__internal_3ab0eb209e5de98bbe73a010046ea23fe45935418e96f3904d8233d8acdab206_prof);

        
        $__internal_8d326246936316f0cc9e644495cafab8125613b75137a1968dce8ea09633b017->leave($__internal_8d326246936316f0cc9e644495cafab8125613b75137a1968dce8ea09633b017_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
