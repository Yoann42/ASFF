<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3f7d5830534aa51de4c0e3933988f2a18cb330f3fc02afaefbe615f8d9ac60f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_d0d711883121f277a48deeec436447905710952c8e89a209d859caef450d2194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d711883121f277a48deeec436447905710952c8e89a209d859caef450d2194->enter($__internal_d0d711883121f277a48deeec436447905710952c8e89a209d859caef450d2194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_1ad154a8bef0ca6bab613d07e535554f5fedd60ef3b070397b563a3106e0a5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad154a8bef0ca6bab613d07e535554f5fedd60ef3b070397b563a3106e0a5f6->enter($__internal_1ad154a8bef0ca6bab613d07e535554f5fedd60ef3b070397b563a3106e0a5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d711883121f277a48deeec436447905710952c8e89a209d859caef450d2194->leave($__internal_d0d711883121f277a48deeec436447905710952c8e89a209d859caef450d2194_prof);

        
        $__internal_1ad154a8bef0ca6bab613d07e535554f5fedd60ef3b070397b563a3106e0a5f6->leave($__internal_1ad154a8bef0ca6bab613d07e535554f5fedd60ef3b070397b563a3106e0a5f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2aa15232161c95a7de4bef8455d96c99cbcb18e93698433fb20e6e7e8b3defdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa15232161c95a7de4bef8455d96c99cbcb18e93698433fb20e6e7e8b3defdc->enter($__internal_2aa15232161c95a7de4bef8455d96c99cbcb18e93698433fb20e6e7e8b3defdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9fcdd70fb4a57acfd77e3095e1c0412cf15975381b52936b39c56e506263c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fcdd70fb4a57acfd77e3095e1c0412cf15975381b52936b39c56e506263c56->enter($__internal_c9fcdd70fb4a57acfd77e3095e1c0412cf15975381b52936b39c56e506263c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c9fcdd70fb4a57acfd77e3095e1c0412cf15975381b52936b39c56e506263c56->leave($__internal_c9fcdd70fb4a57acfd77e3095e1c0412cf15975381b52936b39c56e506263c56_prof);

        
        $__internal_2aa15232161c95a7de4bef8455d96c99cbcb18e93698433fb20e6e7e8b3defdc->leave($__internal_2aa15232161c95a7de4bef8455d96c99cbcb18e93698433fb20e6e7e8b3defdc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
