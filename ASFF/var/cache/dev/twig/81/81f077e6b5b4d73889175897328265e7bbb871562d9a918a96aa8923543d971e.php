<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_6585e2061732775d0175bedad18d2090f00905b50ec824856b10ed8851b6d3bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_1d26460827170ca4852f2ad9c795a7bec8aa4724c259bf5d5cc8f420eb7564f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d26460827170ca4852f2ad9c795a7bec8aa4724c259bf5d5cc8f420eb7564f2->enter($__internal_1d26460827170ca4852f2ad9c795a7bec8aa4724c259bf5d5cc8f420eb7564f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_017089f10999c8b1d7027a6606dad3cfbf4b125616b8614a98a49035ce089664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017089f10999c8b1d7027a6606dad3cfbf4b125616b8614a98a49035ce089664->enter($__internal_017089f10999c8b1d7027a6606dad3cfbf4b125616b8614a98a49035ce089664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d26460827170ca4852f2ad9c795a7bec8aa4724c259bf5d5cc8f420eb7564f2->leave($__internal_1d26460827170ca4852f2ad9c795a7bec8aa4724c259bf5d5cc8f420eb7564f2_prof);

        
        $__internal_017089f10999c8b1d7027a6606dad3cfbf4b125616b8614a98a49035ce089664->leave($__internal_017089f10999c8b1d7027a6606dad3cfbf4b125616b8614a98a49035ce089664_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e5007b6ccd8d817df1b629dc2658330d926fdc2806e613babf8449be1e23abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5007b6ccd8d817df1b629dc2658330d926fdc2806e613babf8449be1e23abc->enter($__internal_0e5007b6ccd8d817df1b629dc2658330d926fdc2806e613babf8449be1e23abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8da99bd0e5867dbcf3bddd2a08849af5f5a3413e7fbcb472fc920cf5e9eda45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da99bd0e5867dbcf3bddd2a08849af5f5a3413e7fbcb472fc920cf5e9eda45d->enter($__internal_8da99bd0e5867dbcf3bddd2a08849af5f5a3413e7fbcb472fc920cf5e9eda45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8da99bd0e5867dbcf3bddd2a08849af5f5a3413e7fbcb472fc920cf5e9eda45d->leave($__internal_8da99bd0e5867dbcf3bddd2a08849af5f5a3413e7fbcb472fc920cf5e9eda45d_prof);

        
        $__internal_0e5007b6ccd8d817df1b629dc2658330d926fdc2806e613babf8449be1e23abc->leave($__internal_0e5007b6ccd8d817df1b629dc2658330d926fdc2806e613babf8449be1e23abc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
