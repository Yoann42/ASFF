<?php

/* @ASFFTournois/Tournois/edit.html.twig */
class __TwigTemplate_103df370989558204002c793adc9128cec695c652712d09b0ce524002fe4cbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Tournois/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFTournoisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d119e3013af36b3111f09ed490ff5feaeb1a4a62fd56da7fca72d0ab2f39a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d119e3013af36b3111f09ed490ff5feaeb1a4a62fd56da7fca72d0ab2f39a89->enter($__internal_4d119e3013af36b3111f09ed490ff5feaeb1a4a62fd56da7fca72d0ab2f39a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/edit.html.twig"));

        $__internal_3a94867aa3404cb42ce7a126b493a25a82b4920ddbc4cf12f081da17e0fdac78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a94867aa3404cb42ce7a126b493a25a82b4920ddbc4cf12f081da17e0fdac78->enter($__internal_3a94867aa3404cb42ce7a126b493a25a82b4920ddbc4cf12f081da17e0fdac78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d119e3013af36b3111f09ed490ff5feaeb1a4a62fd56da7fca72d0ab2f39a89->leave($__internal_4d119e3013af36b3111f09ed490ff5feaeb1a4a62fd56da7fca72d0ab2f39a89_prof);

        
        $__internal_3a94867aa3404cb42ce7a126b493a25a82b4920ddbc4cf12f081da17e0fdac78->leave($__internal_3a94867aa3404cb42ce7a126b493a25a82b4920ddbc4cf12f081da17e0fdac78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc3894ad7cbea7dbaa0b90ec2021f2d43dfd43cebe6ceb9194ae6444af0eeb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3894ad7cbea7dbaa0b90ec2021f2d43dfd43cebe6ceb9194ae6444af0eeb19->enter($__internal_dc3894ad7cbea7dbaa0b90ec2021f2d43dfd43cebe6ceb9194ae6444af0eeb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c08a5efdd76b275b98e6a2ee02e67122919f25630eae275a3184cf2fea5ce7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08a5efdd76b275b98e6a2ee02e67122919f25630eae275a3184cf2fea5ce7af->enter($__internal_c08a5efdd76b275b98e6a2ee02e67122919f25630eae275a3184cf2fea5ce7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Modifier un tournois</h2>

  <hr>

  ";
        // line 11
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Tournois:form.html.twig");
        echo "

";
        
        $__internal_c08a5efdd76b275b98e6a2ee02e67122919f25630eae275a3184cf2fea5ce7af->leave($__internal_c08a5efdd76b275b98e6a2ee02e67122919f25630eae275a3184cf2fea5ce7af_prof);

        
        $__internal_dc3894ad7cbea7dbaa0b90ec2021f2d43dfd43cebe6ceb9194ae6444af0eeb19->leave($__internal_dc3894ad7cbea7dbaa0b90ec2021f2d43dfd43cebe6ceb9194ae6444af0eeb19_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Tournois/edit.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block body %}

  <h2>Modifier un tournois</h2>

  <hr>

  {{ include(\"ASFFTournoisBundle:Tournois:form.html.twig\") }}

{% endblock %}", "@ASFFTournois/Tournois/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\edit.html.twig");
    }
}
