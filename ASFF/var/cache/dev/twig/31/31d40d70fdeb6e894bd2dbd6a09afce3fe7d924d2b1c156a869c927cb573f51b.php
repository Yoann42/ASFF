<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_6a3ff7144c520480c98444c4caf51e4a09406b55a8833ded539588f7d7ad4443 extends Twig_Template
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
        $__internal_586637c1d2aa2e8ffb85ef97f56ece7e9b895d3ec0a50ae923e86ed544602bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586637c1d2aa2e8ffb85ef97f56ece7e9b895d3ec0a50ae923e86ed544602bf5->enter($__internal_586637c1d2aa2e8ffb85ef97f56ece7e9b895d3ec0a50ae923e86ed544602bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_2aefcf1ef1d989da3c15901d0131597b1c0730b5b369e5277b0577e6ef1cff55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aefcf1ef1d989da3c15901d0131597b1c0730b5b369e5277b0577e6ef1cff55->enter($__internal_2aefcf1ef1d989da3c15901d0131597b1c0730b5b369e5277b0577e6ef1cff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_586637c1d2aa2e8ffb85ef97f56ece7e9b895d3ec0a50ae923e86ed544602bf5->leave($__internal_586637c1d2aa2e8ffb85ef97f56ece7e9b895d3ec0a50ae923e86ed544602bf5_prof);

        
        $__internal_2aefcf1ef1d989da3c15901d0131597b1c0730b5b369e5277b0577e6ef1cff55->leave($__internal_2aefcf1ef1d989da3c15901d0131597b1c0730b5b369e5277b0577e6ef1cff55_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8e75cdc8977483a8bc0400198dfed8df46f581cb51ee94a5ad2ed9a64438867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e75cdc8977483a8bc0400198dfed8df46f581cb51ee94a5ad2ed9a64438867->enter($__internal_e8e75cdc8977483a8bc0400198dfed8df46f581cb51ee94a5ad2ed9a64438867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_778c2123878824483e4d9d48e16bfc6c7bd9f92a41af2548f9957b24ee6adb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778c2123878824483e4d9d48e16bfc6c7bd9f92a41af2548f9957b24ee6adb6a->enter($__internal_778c2123878824483e4d9d48e16bfc6c7bd9f92a41af2548f9957b24ee6adb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_778c2123878824483e4d9d48e16bfc6c7bd9f92a41af2548f9957b24ee6adb6a->leave($__internal_778c2123878824483e4d9d48e16bfc6c7bd9f92a41af2548f9957b24ee6adb6a_prof);

        
        $__internal_e8e75cdc8977483a8bc0400198dfed8df46f581cb51ee94a5ad2ed9a64438867->leave($__internal_e8e75cdc8977483a8bc0400198dfed8df46f581cb51ee94a5ad2ed9a64438867_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c7c8b28e64434e17b12bfdd2bb7e6176941894aaf7ef00111146a10d3c8ab318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c8b28e64434e17b12bfdd2bb7e6176941894aaf7ef00111146a10d3c8ab318->enter($__internal_c7c8b28e64434e17b12bfdd2bb7e6176941894aaf7ef00111146a10d3c8ab318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e02e13f2e1a6c126049f9e5077dd4bc8145eb0636e1d6846321b7006158dba52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02e13f2e1a6c126049f9e5077dd4bc8145eb0636e1d6846321b7006158dba52->enter($__internal_e02e13f2e1a6c126049f9e5077dd4bc8145eb0636e1d6846321b7006158dba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e02e13f2e1a6c126049f9e5077dd4bc8145eb0636e1d6846321b7006158dba52->leave($__internal_e02e13f2e1a6c126049f9e5077dd4bc8145eb0636e1d6846321b7006158dba52_prof);

        
        $__internal_c7c8b28e64434e17b12bfdd2bb7e6176941894aaf7ef00111146a10d3c8ab318->leave($__internal_c7c8b28e64434e17b12bfdd2bb7e6176941894aaf7ef00111146a10d3c8ab318_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_98510b2aeeb157d619299401beb0ed5bcb13f9f673a1eb2f9f307350935b4701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98510b2aeeb157d619299401beb0ed5bcb13f9f673a1eb2f9f307350935b4701->enter($__internal_98510b2aeeb157d619299401beb0ed5bcb13f9f673a1eb2f9f307350935b4701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d335700c8b39a64a16fe687451e126142dcb7095508235c0528d2f23e8d39903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d335700c8b39a64a16fe687451e126142dcb7095508235c0528d2f23e8d39903->enter($__internal_d335700c8b39a64a16fe687451e126142dcb7095508235c0528d2f23e8d39903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d335700c8b39a64a16fe687451e126142dcb7095508235c0528d2f23e8d39903->leave($__internal_d335700c8b39a64a16fe687451e126142dcb7095508235c0528d2f23e8d39903_prof);

        
        $__internal_98510b2aeeb157d619299401beb0ed5bcb13f9f673a1eb2f9f307350935b4701->leave($__internal_98510b2aeeb157d619299401beb0ed5bcb13f9f673a1eb2f9f307350935b4701_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
