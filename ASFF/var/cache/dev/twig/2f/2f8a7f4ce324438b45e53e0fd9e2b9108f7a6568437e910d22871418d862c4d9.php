<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_79a8a0131dedfaab5c433d426e069df0d3c343e37accef91302551403c2aa264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_23d7898e7f64a272dae6639589437deba59770a64db0e31931dfd64935429bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d7898e7f64a272dae6639589437deba59770a64db0e31931dfd64935429bc7->enter($__internal_23d7898e7f64a272dae6639589437deba59770a64db0e31931dfd64935429bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_01063942d68c0b831e59af5dd44493e10278aca8c01b219305edd751e03ba9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01063942d68c0b831e59af5dd44493e10278aca8c01b219305edd751e03ba9e0->enter($__internal_01063942d68c0b831e59af5dd44493e10278aca8c01b219305edd751e03ba9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d7898e7f64a272dae6639589437deba59770a64db0e31931dfd64935429bc7->leave($__internal_23d7898e7f64a272dae6639589437deba59770a64db0e31931dfd64935429bc7_prof);

        
        $__internal_01063942d68c0b831e59af5dd44493e10278aca8c01b219305edd751e03ba9e0->leave($__internal_01063942d68c0b831e59af5dd44493e10278aca8c01b219305edd751e03ba9e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2c7928d8a8754abf5783c9acfe35c2dc817b4e581a8b4f4c27915b2fbad42ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c7928d8a8754abf5783c9acfe35c2dc817b4e581a8b4f4c27915b2fbad42ed->enter($__internal_d2c7928d8a8754abf5783c9acfe35c2dc817b4e581a8b4f4c27915b2fbad42ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cd81b7628ba6e211f7e66e9be4979d847dbfcf5c3a8596393a102bf63087deac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd81b7628ba6e211f7e66e9be4979d847dbfcf5c3a8596393a102bf63087deac->enter($__internal_cd81b7628ba6e211f7e66e9be4979d847dbfcf5c3a8596393a102bf63087deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cd81b7628ba6e211f7e66e9be4979d847dbfcf5c3a8596393a102bf63087deac->leave($__internal_cd81b7628ba6e211f7e66e9be4979d847dbfcf5c3a8596393a102bf63087deac_prof);

        
        $__internal_d2c7928d8a8754abf5783c9acfe35c2dc817b4e581a8b4f4c27915b2fbad42ed->leave($__internal_d2c7928d8a8754abf5783c9acfe35c2dc817b4e581a8b4f4c27915b2fbad42ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
