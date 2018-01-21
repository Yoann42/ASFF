<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_1900b597e714bc94f46a55b34d5404bd7e4533b18419f4d59042fa832a09f6e1 extends Twig_Template
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
        $__internal_6905ec3e8c7a919953459c35a75b0676469e96d7f5486b2789b1c28ce591807a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6905ec3e8c7a919953459c35a75b0676469e96d7f5486b2789b1c28ce591807a->enter($__internal_6905ec3e8c7a919953459c35a75b0676469e96d7f5486b2789b1c28ce591807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        $__internal_005ca78e66fd0dfcad7374db9c2a5bed00a538ba82d3a07fbdb6d8e13e3c1185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005ca78e66fd0dfcad7374db9c2a5bed00a538ba82d3a07fbdb6d8e13e3c1185->enter($__internal_005ca78e66fd0dfcad7374db9c2a5bed00a538ba82d3a07fbdb6d8e13e3c1185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

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
        
        $__internal_6905ec3e8c7a919953459c35a75b0676469e96d7f5486b2789b1c28ce591807a->leave($__internal_6905ec3e8c7a919953459c35a75b0676469e96d7f5486b2789b1c28ce591807a_prof);

        
        $__internal_005ca78e66fd0dfcad7374db9c2a5bed00a538ba82d3a07fbdb6d8e13e3c1185->leave($__internal_005ca78e66fd0dfcad7374db9c2a5bed00a538ba82d3a07fbdb6d8e13e3c1185_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
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
", "@FOSUser/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
