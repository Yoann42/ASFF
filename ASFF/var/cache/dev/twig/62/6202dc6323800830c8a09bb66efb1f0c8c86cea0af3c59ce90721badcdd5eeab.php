<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_cd9ef350ecacbeaa286cd0cb0dbeb4f5763e7065a92d88563a61d6e7517afbd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77d3e49504ac1544dedcd502a69d3d473408c97eea0c3bb05a439ebb3b84f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77d3e49504ac1544dedcd502a69d3d473408c97eea0c3bb05a439ebb3b84f35->enter($__internal_f77d3e49504ac1544dedcd502a69d3d473408c97eea0c3bb05a439ebb3b84f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_54f035931b4dcf5c4231b0ab664a4c5b438aeca395144d8672300445cc1a1235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f035931b4dcf5c4231b0ab664a4c5b438aeca395144d8672300445cc1a1235->enter($__internal_54f035931b4dcf5c4231b0ab664a4c5b438aeca395144d8672300445cc1a1235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f77d3e49504ac1544dedcd502a69d3d473408c97eea0c3bb05a439ebb3b84f35->leave($__internal_f77d3e49504ac1544dedcd502a69d3d473408c97eea0c3bb05a439ebb3b84f35_prof);

        
        $__internal_54f035931b4dcf5c4231b0ab664a4c5b438aeca395144d8672300445cc1a1235->leave($__internal_54f035931b4dcf5c4231b0ab664a4c5b438aeca395144d8672300445cc1a1235_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_624353417e6f6a3436ad58170110d6b906f8943b4c7ece5cf3968de155acb952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624353417e6f6a3436ad58170110d6b906f8943b4c7ece5cf3968de155acb952->enter($__internal_624353417e6f6a3436ad58170110d6b906f8943b4c7ece5cf3968de155acb952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_61023550387aee1c8e46d94d758da9d2f41f110cc6c1466eba52afa4b696f210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61023550387aee1c8e46d94d758da9d2f41f110cc6c1466eba52afa4b696f210->enter($__internal_61023550387aee1c8e46d94d758da9d2f41f110cc6c1466eba52afa4b696f210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_61023550387aee1c8e46d94d758da9d2f41f110cc6c1466eba52afa4b696f210->leave($__internal_61023550387aee1c8e46d94d758da9d2f41f110cc6c1466eba52afa4b696f210_prof);

        
        $__internal_624353417e6f6a3436ad58170110d6b906f8943b4c7ece5cf3968de155acb952->leave($__internal_624353417e6f6a3436ad58170110d6b906f8943b4c7ece5cf3968de155acb952_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f561e34803ce38934cbd5ce7e3842cbbb21f7a6f904deaacc8e42a91ffea536b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f561e34803ce38934cbd5ce7e3842cbbb21f7a6f904deaacc8e42a91ffea536b->enter($__internal_f561e34803ce38934cbd5ce7e3842cbbb21f7a6f904deaacc8e42a91ffea536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c0e537e85593a3026d73e042b80841daaff9d6b9d14b6f6b917188a65ecd7fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e537e85593a3026d73e042b80841daaff9d6b9d14b6f6b917188a65ecd7fc5->enter($__internal_c0e537e85593a3026d73e042b80841daaff9d6b9d14b6f6b917188a65ecd7fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c0e537e85593a3026d73e042b80841daaff9d6b9d14b6f6b917188a65ecd7fc5->leave($__internal_c0e537e85593a3026d73e042b80841daaff9d6b9d14b6f6b917188a65ecd7fc5_prof);

        
        $__internal_f561e34803ce38934cbd5ce7e3842cbbb21f7a6f904deaacc8e42a91ffea536b->leave($__internal_f561e34803ce38934cbd5ce7e3842cbbb21f7a6f904deaacc8e42a91ffea536b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ab3a5b147770032ab86c85eaddeeb8f72e422c0ce4cb81624ab08c6a9b87ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab3a5b147770032ab86c85eaddeeb8f72e422c0ce4cb81624ab08c6a9b87ddf->enter($__internal_1ab3a5b147770032ab86c85eaddeeb8f72e422c0ce4cb81624ab08c6a9b87ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bf053879823478ed50d740961b569f32a1ecfc7498b672ba8c856f5a757a1490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf053879823478ed50d740961b569f32a1ecfc7498b672ba8c856f5a757a1490->enter($__internal_bf053879823478ed50d740961b569f32a1ecfc7498b672ba8c856f5a757a1490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf053879823478ed50d740961b569f32a1ecfc7498b672ba8c856f5a757a1490->leave($__internal_bf053879823478ed50d740961b569f32a1ecfc7498b672ba8c856f5a757a1490_prof);

        
        $__internal_1ab3a5b147770032ab86c85eaddeeb8f72e422c0ce4cb81624ab08c6a9b87ddf->leave($__internal_1ab3a5b147770032ab86c85eaddeeb8f72e422c0ce4cb81624ab08c6a9b87ddf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
