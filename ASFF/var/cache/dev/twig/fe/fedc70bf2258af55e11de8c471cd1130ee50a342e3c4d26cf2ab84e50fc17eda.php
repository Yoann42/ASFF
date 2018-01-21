<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6eee8cb6203c26f03798467b645679fbb85be24792d84c58bd81a637244ac1a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_58e554f9ece5d94b059daaa027cfb3ebcc606f90a089e9fe5327d9026acf9088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e554f9ece5d94b059daaa027cfb3ebcc606f90a089e9fe5327d9026acf9088->enter($__internal_58e554f9ece5d94b059daaa027cfb3ebcc606f90a089e9fe5327d9026acf9088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ef12f99629338582a9ab9a785869d33eedee7c73a72b02ef1b44cb3476fc8d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef12f99629338582a9ab9a785869d33eedee7c73a72b02ef1b44cb3476fc8d5f->enter($__internal_ef12f99629338582a9ab9a785869d33eedee7c73a72b02ef1b44cb3476fc8d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e554f9ece5d94b059daaa027cfb3ebcc606f90a089e9fe5327d9026acf9088->leave($__internal_58e554f9ece5d94b059daaa027cfb3ebcc606f90a089e9fe5327d9026acf9088_prof);

        
        $__internal_ef12f99629338582a9ab9a785869d33eedee7c73a72b02ef1b44cb3476fc8d5f->leave($__internal_ef12f99629338582a9ab9a785869d33eedee7c73a72b02ef1b44cb3476fc8d5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da2dc618df8d4320506f3c9a06435c66b55f1209f925bb8f9c6b50f5dec7b53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2dc618df8d4320506f3c9a06435c66b55f1209f925bb8f9c6b50f5dec7b53a->enter($__internal_da2dc618df8d4320506f3c9a06435c66b55f1209f925bb8f9c6b50f5dec7b53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a80ed12da67dcb2c9b2d20e58ce8bd0cee3d10e0124318f4f03bdf63d9ae593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a80ed12da67dcb2c9b2d20e58ce8bd0cee3d10e0124318f4f03bdf63d9ae593->enter($__internal_4a80ed12da67dcb2c9b2d20e58ce8bd0cee3d10e0124318f4f03bdf63d9ae593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4a80ed12da67dcb2c9b2d20e58ce8bd0cee3d10e0124318f4f03bdf63d9ae593->leave($__internal_4a80ed12da67dcb2c9b2d20e58ce8bd0cee3d10e0124318f4f03bdf63d9ae593_prof);

        
        $__internal_da2dc618df8d4320506f3c9a06435c66b55f1209f925bb8f9c6b50f5dec7b53a->leave($__internal_da2dc618df8d4320506f3c9a06435c66b55f1209f925bb8f9c6b50f5dec7b53a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
