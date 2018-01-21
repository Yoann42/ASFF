<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_fa0888b62b7c1c28bb288260e5bb29dc9a55c26e1bc63aff05b0d0a932a60a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_edf5576f10d723b3a13a1a5a41c0c562f80a7a4972b14df2722f3e5ba77eefda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf5576f10d723b3a13a1a5a41c0c562f80a7a4972b14df2722f3e5ba77eefda->enter($__internal_edf5576f10d723b3a13a1a5a41c0c562f80a7a4972b14df2722f3e5ba77eefda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_195f272a2cbf6cd3bd3a2e1534ae0cd4f87ca653b6ddf23b81540cdba640c913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195f272a2cbf6cd3bd3a2e1534ae0cd4f87ca653b6ddf23b81540cdba640c913->enter($__internal_195f272a2cbf6cd3bd3a2e1534ae0cd4f87ca653b6ddf23b81540cdba640c913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf5576f10d723b3a13a1a5a41c0c562f80a7a4972b14df2722f3e5ba77eefda->leave($__internal_edf5576f10d723b3a13a1a5a41c0c562f80a7a4972b14df2722f3e5ba77eefda_prof);

        
        $__internal_195f272a2cbf6cd3bd3a2e1534ae0cd4f87ca653b6ddf23b81540cdba640c913->leave($__internal_195f272a2cbf6cd3bd3a2e1534ae0cd4f87ca653b6ddf23b81540cdba640c913_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3adfc8150222b50d38a5614d74ffb8614eb8f5cf658d6ebb680f3b3dde98b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3adfc8150222b50d38a5614d74ffb8614eb8f5cf658d6ebb680f3b3dde98b75->enter($__internal_e3adfc8150222b50d38a5614d74ffb8614eb8f5cf658d6ebb680f3b3dde98b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c67e186be5f284a2bfcf14b9d3199713dae8c9fdbabd67ddfabbb4e02b7751b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67e186be5f284a2bfcf14b9d3199713dae8c9fdbabd67ddfabbb4e02b7751b8->enter($__internal_c67e186be5f284a2bfcf14b9d3199713dae8c9fdbabd67ddfabbb4e02b7751b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c67e186be5f284a2bfcf14b9d3199713dae8c9fdbabd67ddfabbb4e02b7751b8->leave($__internal_c67e186be5f284a2bfcf14b9d3199713dae8c9fdbabd67ddfabbb4e02b7751b8_prof);

        
        $__internal_e3adfc8150222b50d38a5614d74ffb8614eb8f5cf658d6ebb680f3b3dde98b75->leave($__internal_e3adfc8150222b50d38a5614d74ffb8614eb8f5cf658d6ebb680f3b3dde98b75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
