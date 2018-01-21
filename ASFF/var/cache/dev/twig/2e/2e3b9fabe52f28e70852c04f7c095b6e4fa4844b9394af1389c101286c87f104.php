<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_51b91f74053097c47c2fd9b6172ae2e392ac1276ad5d3a0e6d3abc3b8a69b736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_dc36d31e91c681d187f7e904b77386f7efc1c4cb84f45210f16087147ef9aa78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc36d31e91c681d187f7e904b77386f7efc1c4cb84f45210f16087147ef9aa78->enter($__internal_dc36d31e91c681d187f7e904b77386f7efc1c4cb84f45210f16087147ef9aa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_7d790ed005dbafd80c9aad5b995c97e1f05f1635181c5564e1f8d6199b5bf763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d790ed005dbafd80c9aad5b995c97e1f05f1635181c5564e1f8d6199b5bf763->enter($__internal_7d790ed005dbafd80c9aad5b995c97e1f05f1635181c5564e1f8d6199b5bf763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc36d31e91c681d187f7e904b77386f7efc1c4cb84f45210f16087147ef9aa78->leave($__internal_dc36d31e91c681d187f7e904b77386f7efc1c4cb84f45210f16087147ef9aa78_prof);

        
        $__internal_7d790ed005dbafd80c9aad5b995c97e1f05f1635181c5564e1f8d6199b5bf763->leave($__internal_7d790ed005dbafd80c9aad5b995c97e1f05f1635181c5564e1f8d6199b5bf763_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e90b9c77bf0db59a2e22442ccd7a58f102da830557aa48e8de814e1b17651e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90b9c77bf0db59a2e22442ccd7a58f102da830557aa48e8de814e1b17651e48->enter($__internal_e90b9c77bf0db59a2e22442ccd7a58f102da830557aa48e8de814e1b17651e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7eaf2d8de164bcb8c5c7e0b61858b6ff663bec2c0621633a411c71b02bf63ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaf2d8de164bcb8c5c7e0b61858b6ff663bec2c0621633a411c71b02bf63ca1->enter($__internal_7eaf2d8de164bcb8c5c7e0b61858b6ff663bec2c0621633a411c71b02bf63ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7eaf2d8de164bcb8c5c7e0b61858b6ff663bec2c0621633a411c71b02bf63ca1->leave($__internal_7eaf2d8de164bcb8c5c7e0b61858b6ff663bec2c0621633a411c71b02bf63ca1_prof);

        
        $__internal_e90b9c77bf0db59a2e22442ccd7a58f102da830557aa48e8de814e1b17651e48->leave($__internal_e90b9c77bf0db59a2e22442ccd7a58f102da830557aa48e8de814e1b17651e48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
