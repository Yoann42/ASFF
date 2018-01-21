<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_7906858bd95e1db9c5a6c8b3cd31fae1e75569577f4f23ed575bf3a51aafb111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a6921062bd4aead0b455bf3b687c79c076c831154c88fd3c5a152b207c3b6fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6921062bd4aead0b455bf3b687c79c076c831154c88fd3c5a152b207c3b6fcd->enter($__internal_a6921062bd4aead0b455bf3b687c79c076c831154c88fd3c5a152b207c3b6fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_527675a8d98ec9da476e6c63091e41f752ab16f24856f225b67cd4c03603858c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527675a8d98ec9da476e6c63091e41f752ab16f24856f225b67cd4c03603858c->enter($__internal_527675a8d98ec9da476e6c63091e41f752ab16f24856f225b67cd4c03603858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6921062bd4aead0b455bf3b687c79c076c831154c88fd3c5a152b207c3b6fcd->leave($__internal_a6921062bd4aead0b455bf3b687c79c076c831154c88fd3c5a152b207c3b6fcd_prof);

        
        $__internal_527675a8d98ec9da476e6c63091e41f752ab16f24856f225b67cd4c03603858c->leave($__internal_527675a8d98ec9da476e6c63091e41f752ab16f24856f225b67cd4c03603858c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54a9172958e378e88590df1402a72ffafe0262e9c75b89cbbd50ffc27a3cfda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a9172958e378e88590df1402a72ffafe0262e9c75b89cbbd50ffc27a3cfda8->enter($__internal_54a9172958e378e88590df1402a72ffafe0262e9c75b89cbbd50ffc27a3cfda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b25deb9135193c2ff075e452702ac9e28241b948927000e964e2c3681cce52c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25deb9135193c2ff075e452702ac9e28241b948927000e964e2c3681cce52c8->enter($__internal_b25deb9135193c2ff075e452702ac9e28241b948927000e964e2c3681cce52c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b25deb9135193c2ff075e452702ac9e28241b948927000e964e2c3681cce52c8->leave($__internal_b25deb9135193c2ff075e452702ac9e28241b948927000e964e2c3681cce52c8_prof);

        
        $__internal_54a9172958e378e88590df1402a72ffafe0262e9c75b89cbbd50ffc27a3cfda8->leave($__internal_54a9172958e378e88590df1402a72ffafe0262e9c75b89cbbd50ffc27a3cfda8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
