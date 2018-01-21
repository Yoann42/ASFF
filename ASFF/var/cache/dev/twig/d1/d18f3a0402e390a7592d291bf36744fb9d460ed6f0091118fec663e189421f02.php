<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_9d3c03c356285e1af2df4552d3a51fcff841ae8a98fc464fb2271c005ccc5db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_95cad0feb552e14724c19eacc031140efb2ca554c234b2bb53131f6c5f8571ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cad0feb552e14724c19eacc031140efb2ca554c234b2bb53131f6c5f8571ab->enter($__internal_95cad0feb552e14724c19eacc031140efb2ca554c234b2bb53131f6c5f8571ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_28fa4e3e7371e1d42d918407ba7396d36b318edce725d785bcd6391fa438be39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fa4e3e7371e1d42d918407ba7396d36b318edce725d785bcd6391fa438be39->enter($__internal_28fa4e3e7371e1d42d918407ba7396d36b318edce725d785bcd6391fa438be39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95cad0feb552e14724c19eacc031140efb2ca554c234b2bb53131f6c5f8571ab->leave($__internal_95cad0feb552e14724c19eacc031140efb2ca554c234b2bb53131f6c5f8571ab_prof);

        
        $__internal_28fa4e3e7371e1d42d918407ba7396d36b318edce725d785bcd6391fa438be39->leave($__internal_28fa4e3e7371e1d42d918407ba7396d36b318edce725d785bcd6391fa438be39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f21b2fdf979874e40965f2d17351174037b17ec3ba383cb709b9f1f64143ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f21b2fdf979874e40965f2d17351174037b17ec3ba383cb709b9f1f64143ced->enter($__internal_3f21b2fdf979874e40965f2d17351174037b17ec3ba383cb709b9f1f64143ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e8a1e504d832efa009c8a5d2bad6c0c88d70c36cc13c41acdd73936fef8d910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8a1e504d832efa009c8a5d2bad6c0c88d70c36cc13c41acdd73936fef8d910->enter($__internal_1e8a1e504d832efa009c8a5d2bad6c0c88d70c36cc13c41acdd73936fef8d910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_1e8a1e504d832efa009c8a5d2bad6c0c88d70c36cc13c41acdd73936fef8d910->leave($__internal_1e8a1e504d832efa009c8a5d2bad6c0c88d70c36cc13c41acdd73936fef8d910_prof);

        
        $__internal_3f21b2fdf979874e40965f2d17351174037b17ec3ba383cb709b9f1f64143ced->leave($__internal_3f21b2fdf979874e40965f2d17351174037b17ec3ba383cb709b9f1f64143ced_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
