<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bd0b07a172dedaf984bc66ff3a0e7f390009db50b4f0e6f1492989d94784add8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e339aba179be7083ca7a1a03cc0ece90adaf6e72fabb6a8e12be2d19215a9d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e339aba179be7083ca7a1a03cc0ece90adaf6e72fabb6a8e12be2d19215a9d16->enter($__internal_e339aba179be7083ca7a1a03cc0ece90adaf6e72fabb6a8e12be2d19215a9d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_155262b8e09a42e3eb86972fc19f371dfaafc3eb702cee8f55cea7cd2abfa482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155262b8e09a42e3eb86972fc19f371dfaafc3eb702cee8f55cea7cd2abfa482->enter($__internal_155262b8e09a42e3eb86972fc19f371dfaafc3eb702cee8f55cea7cd2abfa482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e339aba179be7083ca7a1a03cc0ece90adaf6e72fabb6a8e12be2d19215a9d16->leave($__internal_e339aba179be7083ca7a1a03cc0ece90adaf6e72fabb6a8e12be2d19215a9d16_prof);

        
        $__internal_155262b8e09a42e3eb86972fc19f371dfaafc3eb702cee8f55cea7cd2abfa482->leave($__internal_155262b8e09a42e3eb86972fc19f371dfaafc3eb702cee8f55cea7cd2abfa482_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d163e82d3c4b9adb3de0dcfa2bb0483cfb53c91b34924986ce43d373d54d4093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d163e82d3c4b9adb3de0dcfa2bb0483cfb53c91b34924986ce43d373d54d4093->enter($__internal_d163e82d3c4b9adb3de0dcfa2bb0483cfb53c91b34924986ce43d373d54d4093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_597da060421035a066afe4531c1f9a5d6f4957545d51c80250eec2cf0b83f5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597da060421035a066afe4531c1f9a5d6f4957545d51c80250eec2cf0b83f5ba->enter($__internal_597da060421035a066afe4531c1f9a5d6f4957545d51c80250eec2cf0b83f5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_597da060421035a066afe4531c1f9a5d6f4957545d51c80250eec2cf0b83f5ba->leave($__internal_597da060421035a066afe4531c1f9a5d6f4957545d51c80250eec2cf0b83f5ba_prof);

        
        $__internal_d163e82d3c4b9adb3de0dcfa2bb0483cfb53c91b34924986ce43d373d54d4093->leave($__internal_d163e82d3c4b9adb3de0dcfa2bb0483cfb53c91b34924986ce43d373d54d4093_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
