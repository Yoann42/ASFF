<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5e28f184c75c9377f41ac2dd3784e2f7d7e4282a633f354d32b3b5927a2c23e6 extends Twig_Template
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
        $__internal_15795aa6fb63173dbe990a7f81cdf73667f262c15da951dd916bceb700010aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15795aa6fb63173dbe990a7f81cdf73667f262c15da951dd916bceb700010aa4->enter($__internal_15795aa6fb63173dbe990a7f81cdf73667f262c15da951dd916bceb700010aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_860cb2f06f5d5cfb26b408252a316ce89d66776c3bd06f1a36b67009f0618e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860cb2f06f5d5cfb26b408252a316ce89d66776c3bd06f1a36b67009f0618e5a->enter($__internal_860cb2f06f5d5cfb26b408252a316ce89d66776c3bd06f1a36b67009f0618e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_15795aa6fb63173dbe990a7f81cdf73667f262c15da951dd916bceb700010aa4->leave($__internal_15795aa6fb63173dbe990a7f81cdf73667f262c15da951dd916bceb700010aa4_prof);

        
        $__internal_860cb2f06f5d5cfb26b408252a316ce89d66776c3bd06f1a36b67009f0618e5a->leave($__internal_860cb2f06f5d5cfb26b408252a316ce89d66776c3bd06f1a36b67009f0618e5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
