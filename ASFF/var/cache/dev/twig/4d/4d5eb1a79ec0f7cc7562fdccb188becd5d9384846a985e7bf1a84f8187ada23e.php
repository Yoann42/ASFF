<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_4c7aeca523461d05242f3684dd1ce1d69101085de8a394719f01b1c1389b1fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_76ac15a7d998a7187bfa81dcdb33a9b7ae613e907bc698263c4ec1ca443b92b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ac15a7d998a7187bfa81dcdb33a9b7ae613e907bc698263c4ec1ca443b92b8->enter($__internal_76ac15a7d998a7187bfa81dcdb33a9b7ae613e907bc698263c4ec1ca443b92b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_f6d8c9653d9adfc632e8d1175af095997c6cafee547bf0e038992d5fea853f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d8c9653d9adfc632e8d1175af095997c6cafee547bf0e038992d5fea853f42->enter($__internal_f6d8c9653d9adfc632e8d1175af095997c6cafee547bf0e038992d5fea853f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ac15a7d998a7187bfa81dcdb33a9b7ae613e907bc698263c4ec1ca443b92b8->leave($__internal_76ac15a7d998a7187bfa81dcdb33a9b7ae613e907bc698263c4ec1ca443b92b8_prof);

        
        $__internal_f6d8c9653d9adfc632e8d1175af095997c6cafee547bf0e038992d5fea853f42->leave($__internal_f6d8c9653d9adfc632e8d1175af095997c6cafee547bf0e038992d5fea853f42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96a300397ee457073010d361808d2c211a3e6139a053a98e25ddf1194aed6d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a300397ee457073010d361808d2c211a3e6139a053a98e25ddf1194aed6d3e->enter($__internal_96a300397ee457073010d361808d2c211a3e6139a053a98e25ddf1194aed6d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a3f61ac109132c0982dd71b680e4430620c70c9cf996dbe84a7001ce89b6145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3f61ac109132c0982dd71b680e4430620c70c9cf996dbe84a7001ce89b6145->enter($__internal_8a3f61ac109132c0982dd71b680e4430620c70c9cf996dbe84a7001ce89b6145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_8a3f61ac109132c0982dd71b680e4430620c70c9cf996dbe84a7001ce89b6145->leave($__internal_8a3f61ac109132c0982dd71b680e4430620c70c9cf996dbe84a7001ce89b6145_prof);

        
        $__internal_96a300397ee457073010d361808d2c211a3e6139a053a98e25ddf1194aed6d3e->leave($__internal_96a300397ee457073010d361808d2c211a3e6139a053a98e25ddf1194aed6d3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
