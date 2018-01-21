<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_dc9c9f43613864f525bb798bd8739fccf760fc8ffd8a522153fb3295677ba6fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae0b495d0a270c4eb50e2656a197091d65c99d761bb721ecf6c0ad94b6b3edb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0b495d0a270c4eb50e2656a197091d65c99d761bb721ecf6c0ad94b6b3edb6->enter($__internal_ae0b495d0a270c4eb50e2656a197091d65c99d761bb721ecf6c0ad94b6b3edb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_52c1fd935d567aff5ba040d88a2d714d5d2c0db01f8790e29338acb4bcc670d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c1fd935d567aff5ba040d88a2d714d5d2c0db01f8790e29338acb4bcc670d2->enter($__internal_52c1fd935d567aff5ba040d88a2d714d5d2c0db01f8790e29338acb4bcc670d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ae0b495d0a270c4eb50e2656a197091d65c99d761bb721ecf6c0ad94b6b3edb6->leave($__internal_ae0b495d0a270c4eb50e2656a197091d65c99d761bb721ecf6c0ad94b6b3edb6_prof);

        
        $__internal_52c1fd935d567aff5ba040d88a2d714d5d2c0db01f8790e29338acb4bcc670d2->leave($__internal_52c1fd935d567aff5ba040d88a2d714d5d2c0db01f8790e29338acb4bcc670d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
