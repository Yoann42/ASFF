<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e1b901e78f632ebd9a7e2324cdfb77b6cbdef82f5d659999301f54117bb9f6be extends Twig_Template
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
        $__internal_e2b0aef0e630e7d55ca5b27f288f433310aaf420d086a1fe26f3810dd3d1a8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b0aef0e630e7d55ca5b27f288f433310aaf420d086a1fe26f3810dd3d1a8e9->enter($__internal_e2b0aef0e630e7d55ca5b27f288f433310aaf420d086a1fe26f3810dd3d1a8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7810fcfdc8864718cb426a504540fa71e4dbf386b62be268f1217727c20445c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7810fcfdc8864718cb426a504540fa71e4dbf386b62be268f1217727c20445c6->enter($__internal_7810fcfdc8864718cb426a504540fa71e4dbf386b62be268f1217727c20445c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2b0aef0e630e7d55ca5b27f288f433310aaf420d086a1fe26f3810dd3d1a8e9->leave($__internal_e2b0aef0e630e7d55ca5b27f288f433310aaf420d086a1fe26f3810dd3d1a8e9_prof);

        
        $__internal_7810fcfdc8864718cb426a504540fa71e4dbf386b62be268f1217727c20445c6->leave($__internal_7810fcfdc8864718cb426a504540fa71e4dbf386b62be268f1217727c20445c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b7e1c7e6b1c9995e5cf6a90ae79d65a30fcb0a9048e8aa56c4b2eded8c8ee367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e1c7e6b1c9995e5cf6a90ae79d65a30fcb0a9048e8aa56c4b2eded8c8ee367->enter($__internal_b7e1c7e6b1c9995e5cf6a90ae79d65a30fcb0a9048e8aa56c4b2eded8c8ee367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_dd1526d74ad778f56a64220e10ab7b94a7738aea6664df22f8cca80f6f63bb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1526d74ad778f56a64220e10ab7b94a7738aea6664df22f8cca80f6f63bb08->enter($__internal_dd1526d74ad778f56a64220e10ab7b94a7738aea6664df22f8cca80f6f63bb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_dd1526d74ad778f56a64220e10ab7b94a7738aea6664df22f8cca80f6f63bb08->leave($__internal_dd1526d74ad778f56a64220e10ab7b94a7738aea6664df22f8cca80f6f63bb08_prof);

        
        $__internal_b7e1c7e6b1c9995e5cf6a90ae79d65a30fcb0a9048e8aa56c4b2eded8c8ee367->leave($__internal_b7e1c7e6b1c9995e5cf6a90ae79d65a30fcb0a9048e8aa56c4b2eded8c8ee367_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e6e8f7a83e0d762b1524d2e9b1048ea62259dcb0ecd4521899e8160cd3f0208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6e8f7a83e0d762b1524d2e9b1048ea62259dcb0ecd4521899e8160cd3f0208->enter($__internal_8e6e8f7a83e0d762b1524d2e9b1048ea62259dcb0ecd4521899e8160cd3f0208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1994c266182888384967872b4ac47ce7f2e74820062c24dc858f522b17158833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1994c266182888384967872b4ac47ce7f2e74820062c24dc858f522b17158833->enter($__internal_1994c266182888384967872b4ac47ce7f2e74820062c24dc858f522b17158833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1994c266182888384967872b4ac47ce7f2e74820062c24dc858f522b17158833->leave($__internal_1994c266182888384967872b4ac47ce7f2e74820062c24dc858f522b17158833_prof);

        
        $__internal_8e6e8f7a83e0d762b1524d2e9b1048ea62259dcb0ecd4521899e8160cd3f0208->leave($__internal_8e6e8f7a83e0d762b1524d2e9b1048ea62259dcb0ecd4521899e8160cd3f0208_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_feccb9f8f13c6b3d5f3c0a44f5c3affc1ccbcdb82ffc5266b47448b6756ecae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feccb9f8f13c6b3d5f3c0a44f5c3affc1ccbcdb82ffc5266b47448b6756ecae0->enter($__internal_feccb9f8f13c6b3d5f3c0a44f5c3affc1ccbcdb82ffc5266b47448b6756ecae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_359d766f4176845daaf8f5b0c19cc8d02f6534610d79675481d92c7888075cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359d766f4176845daaf8f5b0c19cc8d02f6534610d79675481d92c7888075cce->enter($__internal_359d766f4176845daaf8f5b0c19cc8d02f6534610d79675481d92c7888075cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_359d766f4176845daaf8f5b0c19cc8d02f6534610d79675481d92c7888075cce->leave($__internal_359d766f4176845daaf8f5b0c19cc8d02f6534610d79675481d92c7888075cce_prof);

        
        $__internal_feccb9f8f13c6b3d5f3c0a44f5c3affc1ccbcdb82ffc5266b47448b6756ecae0->leave($__internal_feccb9f8f13c6b3d5f3c0a44f5c3affc1ccbcdb82ffc5266b47448b6756ecae0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
