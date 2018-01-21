<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_60836672be4ca8ac418b5e4680c5fa3bd04e5c7a81dbcbf2e61a7999d6962d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da42dd5b1298135cb51bc4321f05bd03b66ff85f134e7473317b8cbb4d825a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da42dd5b1298135cb51bc4321f05bd03b66ff85f134e7473317b8cbb4d825a3d->enter($__internal_da42dd5b1298135cb51bc4321f05bd03b66ff85f134e7473317b8cbb4d825a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_68863d2d90dcee006d5b7714f3926da79543e0be6037fcf1d9cf6faf9a990e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68863d2d90dcee006d5b7714f3926da79543e0be6037fcf1d9cf6faf9a990e16->enter($__internal_68863d2d90dcee006d5b7714f3926da79543e0be6037fcf1d9cf6faf9a990e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_da42dd5b1298135cb51bc4321f05bd03b66ff85f134e7473317b8cbb4d825a3d->leave($__internal_da42dd5b1298135cb51bc4321f05bd03b66ff85f134e7473317b8cbb4d825a3d_prof);

        
        $__internal_68863d2d90dcee006d5b7714f3926da79543e0be6037fcf1d9cf6faf9a990e16->leave($__internal_68863d2d90dcee006d5b7714f3926da79543e0be6037fcf1d9cf6faf9a990e16_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_df821c329432e7566771bb4fde1ee473bbb91f1a09dd63d2754b300fe845583f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df821c329432e7566771bb4fde1ee473bbb91f1a09dd63d2754b300fe845583f->enter($__internal_df821c329432e7566771bb4fde1ee473bbb91f1a09dd63d2754b300fe845583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_34dc0553b8b4e20ff744ead95b9f1e881eec5f7dea7f355d285a089eb67d3be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dc0553b8b4e20ff744ead95b9f1e881eec5f7dea7f355d285a089eb67d3be9->enter($__internal_34dc0553b8b4e20ff744ead95b9f1e881eec5f7dea7f355d285a089eb67d3be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_34dc0553b8b4e20ff744ead95b9f1e881eec5f7dea7f355d285a089eb67d3be9->leave($__internal_34dc0553b8b4e20ff744ead95b9f1e881eec5f7dea7f355d285a089eb67d3be9_prof);

        
        $__internal_df821c329432e7566771bb4fde1ee473bbb91f1a09dd63d2754b300fe845583f->leave($__internal_df821c329432e7566771bb4fde1ee473bbb91f1a09dd63d2754b300fe845583f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b34d7f8d55cd9de0d12d59ae4433e56af1e36ce935b1dfe3f5169910870efe63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34d7f8d55cd9de0d12d59ae4433e56af1e36ce935b1dfe3f5169910870efe63->enter($__internal_b34d7f8d55cd9de0d12d59ae4433e56af1e36ce935b1dfe3f5169910870efe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a99f2bd287021dc94101851950c680942030728b9fd0acbff81f85a6dda2ff3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99f2bd287021dc94101851950c680942030728b9fd0acbff81f85a6dda2ff3d->enter($__internal_a99f2bd287021dc94101851950c680942030728b9fd0acbff81f85a6dda2ff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a99f2bd287021dc94101851950c680942030728b9fd0acbff81f85a6dda2ff3d->leave($__internal_a99f2bd287021dc94101851950c680942030728b9fd0acbff81f85a6dda2ff3d_prof);

        
        $__internal_b34d7f8d55cd9de0d12d59ae4433e56af1e36ce935b1dfe3f5169910870efe63->leave($__internal_b34d7f8d55cd9de0d12d59ae4433e56af1e36ce935b1dfe3f5169910870efe63_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b4cf2b275461f2d023a432990c05dc261707a60b3fe7f4b715011a396be3f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4cf2b275461f2d023a432990c05dc261707a60b3fe7f4b715011a396be3f8d->enter($__internal_2b4cf2b275461f2d023a432990c05dc261707a60b3fe7f4b715011a396be3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_768910d8a8c81e6b6b6f75578908a440e70fd181b395aa55b7e0defd1fc442fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768910d8a8c81e6b6b6f75578908a440e70fd181b395aa55b7e0defd1fc442fd->enter($__internal_768910d8a8c81e6b6b6f75578908a440e70fd181b395aa55b7e0defd1fc442fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_768910d8a8c81e6b6b6f75578908a440e70fd181b395aa55b7e0defd1fc442fd->leave($__internal_768910d8a8c81e6b6b6f75578908a440e70fd181b395aa55b7e0defd1fc442fd_prof);

        
        $__internal_2b4cf2b275461f2d023a432990c05dc261707a60b3fe7f4b715011a396be3f8d->leave($__internal_2b4cf2b275461f2d023a432990c05dc261707a60b3fe7f4b715011a396be3f8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
