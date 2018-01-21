<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cd40d4d6dd267236187001fbbb5686b22b7a634a43ac52efcc4dd507502537ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_68770a3362068af5a794e876bd08d7839f8cd6b32826ef93107bde10e6161c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68770a3362068af5a794e876bd08d7839f8cd6b32826ef93107bde10e6161c63->enter($__internal_68770a3362068af5a794e876bd08d7839f8cd6b32826ef93107bde10e6161c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_33ded576de2d442cf40aa4c81fe02ea63cbf84f5d9bc26ba625620149c026187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ded576de2d442cf40aa4c81fe02ea63cbf84f5d9bc26ba625620149c026187->enter($__internal_33ded576de2d442cf40aa4c81fe02ea63cbf84f5d9bc26ba625620149c026187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68770a3362068af5a794e876bd08d7839f8cd6b32826ef93107bde10e6161c63->leave($__internal_68770a3362068af5a794e876bd08d7839f8cd6b32826ef93107bde10e6161c63_prof);

        
        $__internal_33ded576de2d442cf40aa4c81fe02ea63cbf84f5d9bc26ba625620149c026187->leave($__internal_33ded576de2d442cf40aa4c81fe02ea63cbf84f5d9bc26ba625620149c026187_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dee5cf4a665417d92a963c61d6ae334fbb889454705ad9b1ca3ebf1a7369cb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee5cf4a665417d92a963c61d6ae334fbb889454705ad9b1ca3ebf1a7369cb6a->enter($__internal_dee5cf4a665417d92a963c61d6ae334fbb889454705ad9b1ca3ebf1a7369cb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d49e60e85d76bf6dbef62378873c9aed3e18c7aebada22870b9ac0740093ba0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49e60e85d76bf6dbef62378873c9aed3e18c7aebada22870b9ac0740093ba0f->enter($__internal_d49e60e85d76bf6dbef62378873c9aed3e18c7aebada22870b9ac0740093ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d49e60e85d76bf6dbef62378873c9aed3e18c7aebada22870b9ac0740093ba0f->leave($__internal_d49e60e85d76bf6dbef62378873c9aed3e18c7aebada22870b9ac0740093ba0f_prof);

        
        $__internal_dee5cf4a665417d92a963c61d6ae334fbb889454705ad9b1ca3ebf1a7369cb6a->leave($__internal_dee5cf4a665417d92a963c61d6ae334fbb889454705ad9b1ca3ebf1a7369cb6a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
