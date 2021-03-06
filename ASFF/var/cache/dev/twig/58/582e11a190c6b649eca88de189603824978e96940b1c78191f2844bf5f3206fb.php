<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0384360fc06b9b67bb808eca2e09fae0c89912d620d57c18eff4bd9a40ca7168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_080f5a834c744154d9e88387e145d908670b7fe083a0266b0b327fde1fea1f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080f5a834c744154d9e88387e145d908670b7fe083a0266b0b327fde1fea1f53->enter($__internal_080f5a834c744154d9e88387e145d908670b7fe083a0266b0b327fde1fea1f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_5124819545697b89a653d39f71c2409d3aed54261bbebe9b5aa6e425cb26a8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5124819545697b89a653d39f71c2409d3aed54261bbebe9b5aa6e425cb26a8d5->enter($__internal_5124819545697b89a653d39f71c2409d3aed54261bbebe9b5aa6e425cb26a8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080f5a834c744154d9e88387e145d908670b7fe083a0266b0b327fde1fea1f53->leave($__internal_080f5a834c744154d9e88387e145d908670b7fe083a0266b0b327fde1fea1f53_prof);

        
        $__internal_5124819545697b89a653d39f71c2409d3aed54261bbebe9b5aa6e425cb26a8d5->leave($__internal_5124819545697b89a653d39f71c2409d3aed54261bbebe9b5aa6e425cb26a8d5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e8f659dd9bf3f62396d508c2e682eb95f84b3f4cf6507c48a22ff59ddefd012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8f659dd9bf3f62396d508c2e682eb95f84b3f4cf6507c48a22ff59ddefd012->enter($__internal_5e8f659dd9bf3f62396d508c2e682eb95f84b3f4cf6507c48a22ff59ddefd012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44be80717ff0462ed8af074a03ce5f3cd3c0fcc757d3560b5e700abbfa542258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44be80717ff0462ed8af074a03ce5f3cd3c0fcc757d3560b5e700abbfa542258->enter($__internal_44be80717ff0462ed8af074a03ce5f3cd3c0fcc757d3560b5e700abbfa542258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_44be80717ff0462ed8af074a03ce5f3cd3c0fcc757d3560b5e700abbfa542258->leave($__internal_44be80717ff0462ed8af074a03ce5f3cd3c0fcc757d3560b5e700abbfa542258_prof);

        
        $__internal_5e8f659dd9bf3f62396d508c2e682eb95f84b3f4cf6507c48a22ff59ddefd012->leave($__internal_5e8f659dd9bf3f62396d508c2e682eb95f84b3f4cf6507c48a22ff59ddefd012_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
