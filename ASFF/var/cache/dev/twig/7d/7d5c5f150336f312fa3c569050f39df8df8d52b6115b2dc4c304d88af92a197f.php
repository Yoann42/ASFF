<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3b13e092ed2dbc403c24c343564d66325a4c99d0275da4dc385a830cd144eac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7615ea79c7fabd4a7fdf7a7ceb177c540ba5c5d3388c65d29990e85c86823dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7615ea79c7fabd4a7fdf7a7ceb177c540ba5c5d3388c65d29990e85c86823dd2->enter($__internal_7615ea79c7fabd4a7fdf7a7ceb177c540ba5c5d3388c65d29990e85c86823dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_4ed48acaf7e9fbcd2cd24cf5cc7c55758fae0bebf4e8657bca143e153dd6430e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed48acaf7e9fbcd2cd24cf5cc7c55758fae0bebf4e8657bca143e153dd6430e->enter($__internal_4ed48acaf7e9fbcd2cd24cf5cc7c55758fae0bebf4e8657bca143e153dd6430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7615ea79c7fabd4a7fdf7a7ceb177c540ba5c5d3388c65d29990e85c86823dd2->leave($__internal_7615ea79c7fabd4a7fdf7a7ceb177c540ba5c5d3388c65d29990e85c86823dd2_prof);

        
        $__internal_4ed48acaf7e9fbcd2cd24cf5cc7c55758fae0bebf4e8657bca143e153dd6430e->leave($__internal_4ed48acaf7e9fbcd2cd24cf5cc7c55758fae0bebf4e8657bca143e153dd6430e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4443b984c3250a573cecb78e8b2b6a6294d34b4d005af0462687c335c9e438d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4443b984c3250a573cecb78e8b2b6a6294d34b4d005af0462687c335c9e438d9->enter($__internal_4443b984c3250a573cecb78e8b2b6a6294d34b4d005af0462687c335c9e438d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18ccb763720b7af027d0d71f8a6eb69d8a8e08df06332048475d8938a7f0d710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ccb763720b7af027d0d71f8a6eb69d8a8e08df06332048475d8938a7f0d710->enter($__internal_18ccb763720b7af027d0d71f8a6eb69d8a8e08df06332048475d8938a7f0d710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_18ccb763720b7af027d0d71f8a6eb69d8a8e08df06332048475d8938a7f0d710->leave($__internal_18ccb763720b7af027d0d71f8a6eb69d8a8e08df06332048475d8938a7f0d710_prof);

        
        $__internal_4443b984c3250a573cecb78e8b2b6a6294d34b4d005af0462687c335c9e438d9->leave($__internal_4443b984c3250a573cecb78e8b2b6a6294d34b4d005af0462687c335c9e438d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
