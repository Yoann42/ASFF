<?php

/* @ASFFActualite/Actu/edit.html.twig */
class __TwigTemplate_80747bfa7dc563925c28a2bcba81974c08c4f71cefe5c8520d9eee1fcb31c1c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "@ASFFActualite/Actu/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFActualiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49230de00b87a49a46fbaacfa8ac0f3a57228b7f9350a879cb40311da667f5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49230de00b87a49a46fbaacfa8ac0f3a57228b7f9350a879cb40311da667f5b0->enter($__internal_49230de00b87a49a46fbaacfa8ac0f3a57228b7f9350a879cb40311da667f5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/edit.html.twig"));

        $__internal_ab841ad44605a5e2e9967e56f7a1e57382b51951bfb9ae5726185aaebcdcc0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab841ad44605a5e2e9967e56f7a1e57382b51951bfb9ae5726185aaebcdcc0d6->enter($__internal_ab841ad44605a5e2e9967e56f7a1e57382b51951bfb9ae5726185aaebcdcc0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49230de00b87a49a46fbaacfa8ac0f3a57228b7f9350a879cb40311da667f5b0->leave($__internal_49230de00b87a49a46fbaacfa8ac0f3a57228b7f9350a879cb40311da667f5b0_prof);

        
        $__internal_ab841ad44605a5e2e9967e56f7a1e57382b51951bfb9ae5726185aaebcdcc0d6->leave($__internal_ab841ad44605a5e2e9967e56f7a1e57382b51951bfb9ae5726185aaebcdcc0d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88cdf08f36ac8f1f714d2dc4b9d0df1f78bf5e08267b02bdc576273c1769309d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88cdf08f36ac8f1f714d2dc4b9d0df1f78bf5e08267b02bdc576273c1769309d->enter($__internal_88cdf08f36ac8f1f714d2dc4b9d0df1f78bf5e08267b02bdc576273c1769309d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a125fd8dd812f9d4e92b3e2bf2bbb015403ead7ddec09c9a325ef17e658104f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a125fd8dd812f9d4e92b3e2bf2bbb015403ead7ddec09c9a325ef17e658104f4->enter($__internal_a125fd8dd812f9d4e92b3e2bf2bbb015403ead7ddec09c9a325ef17e658104f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Modifier un article</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "ASFFActualiteBundle:Actu:form.html.twig");
        echo "

";
        
        $__internal_a125fd8dd812f9d4e92b3e2bf2bbb015403ead7ddec09c9a325ef17e658104f4->leave($__internal_a125fd8dd812f9d4e92b3e2bf2bbb015403ead7ddec09c9a325ef17e658104f4_prof);

        
        $__internal_88cdf08f36ac8f1f714d2dc4b9d0df1f78bf5e08267b02bdc576273c1769309d->leave($__internal_88cdf08f36ac8f1f714d2dc4b9d0df1f78bf5e08267b02bdc576273c1769309d_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/edit.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block body %}

  <h2>Modifier un article</h2>

  {{ include(\"ASFFActualiteBundle:Actu:form.html.twig\") }}

{% endblock %}", "@ASFFActualite/Actu/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\edit.html.twig");
    }
}
