<?php

/* @ASFFTournois/Poona/classement.html.twig */
class __TwigTemplate_c76ff6389ff4ff7de8d97d409fe1a1f32f367345089c13a9d5e7b9f5e469e3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@ASFFTournois/Poona/classement.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a62bff119cd1f9f9f77fbd3dbe562abdb413e12f0e8a3dae4c12fb5cb9cc015d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62bff119cd1f9f9f77fbd3dbe562abdb413e12f0e8a3dae4c12fb5cb9cc015d->enter($__internal_a62bff119cd1f9f9f77fbd3dbe562abdb413e12f0e8a3dae4c12fb5cb9cc015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Poona/classement.html.twig"));

        $__internal_8f4aa6528836121de349b3d28de6ff514f92b38b416e2bc25eb52b8e50ca4685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4aa6528836121de349b3d28de6ff514f92b38b416e2bc25eb52b8e50ca4685->enter($__internal_8f4aa6528836121de349b3d28de6ff514f92b38b416e2bc25eb52b8e50ca4685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Poona/classement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62bff119cd1f9f9f77fbd3dbe562abdb413e12f0e8a3dae4c12fb5cb9cc015d->leave($__internal_a62bff119cd1f9f9f77fbd3dbe562abdb413e12f0e8a3dae4c12fb5cb9cc015d_prof);

        
        $__internal_8f4aa6528836121de349b3d28de6ff514f92b38b416e2bc25eb52b8e50ca4685->leave($__internal_8f4aa6528836121de349b3d28de6ff514f92b38b416e2bc25eb52b8e50ca4685_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1ac1674ba7e5ac514fb43ffc3fc4bf50b715fcb34dcf01a4d54aa9c49968f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ac1674ba7e5ac514fb43ffc3fc4bf50b715fcb34dcf01a4d54aa9c49968f18->enter($__internal_a1ac1674ba7e5ac514fb43ffc3fc4bf50b715fcb34dcf01a4d54aa9c49968f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_226f95d812fefd3c9f022bcba517ee8e71ad06ca3ad555208fcf8ce3ce58456e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226f95d812fefd3c9f022bcba517ee8e71ad06ca3ad555208fcf8ce3ce58456e->enter($__internal_226f95d812fefd3c9f022bcba517ee8e71ad06ca3ad555208fcf8ce3ce58456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_226f95d812fefd3c9f022bcba517ee8e71ad06ca3ad555208fcf8ce3ce58456e->leave($__internal_226f95d812fefd3c9f022bcba517ee8e71ad06ca3ad555208fcf8ce3ce58456e_prof);

        
        $__internal_a1ac1674ba7e5ac514fb43ffc3fc4bf50b715fcb34dcf01a4d54aa9c49968f18->leave($__internal_a1ac1674ba7e5ac514fb43ffc3fc4bf50b715fcb34dcf01a4d54aa9c49968f18_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d40316a0a230952d1ab7ab65b212e2b777bdd473e888be77d4e430227bab866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d40316a0a230952d1ab7ab65b212e2b777bdd473e888be77d4e430227bab866->enter($__internal_0d40316a0a230952d1ab7ab65b212e2b777bdd473e888be77d4e430227bab866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ac90932179079f1926138d4fe2abbd2bad6f1a69c8cb8bd19d861850ca2b9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac90932179079f1926138d4fe2abbd2bad6f1a69c8cb8bd19d861850ca2b9f0->enter($__internal_6ac90932179079f1926138d4fe2abbd2bad6f1a69c8cb8bd19d861850ca2b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Classement de ";
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 25
        echo "
";
        
        $__internal_6ac90932179079f1926138d4fe2abbd2bad6f1a69c8cb8bd19d861850ca2b9f0->leave($__internal_6ac90932179079f1926138d4fe2abbd2bad6f1a69c8cb8bd19d861850ca2b9f0_prof);

        
        $__internal_0d40316a0a230952d1ab7ab65b212e2b777bdd473e888be77d4e430227bab866->leave($__internal_0d40316a0a230952d1ab7ab65b212e2b777bdd473e888be77d4e430227bab866_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_09b8325d99ace8aed609408fd2bbeb19bdfc36e5bdf91d14748d192f468ce161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b8325d99ace8aed609408fd2bbeb19bdfc36e5bdf91d14748d192f468ce161->enter($__internal_09b8325d99ace8aed609408fd2bbeb19bdfc36e5bdf91d14748d192f468ce161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_89a1926813699895420ad5e090edfb6c0042c4166425237c5d8ee7b7edee48ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a1926813699895420ad5e090edfb6c0042c4166425237c5d8ee7b7edee48ed->enter($__internal_89a1926813699895420ad5e090edfb6c0042c4166425237c5d8ee7b7edee48ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t<h2>Licence n°";
        echo twig_escape_filter($this->env, ($context["licence"] ?? $this->getContext($context, "licence")), "html", null, true);
        echo "</h2>
\t
\t<p>Classement Simple : ";
        // line 20
        echo twig_escape_filter($this->env, ($context["simple"] ?? $this->getContext($context, "simple")), "html", null, true);
        echo "</p>
\t<p>Classement Double : ";
        // line 21
        echo twig_escape_filter($this->env, ($context["double"] ?? $this->getContext($context, "double")), "html", null, true);
        echo "</p>
\t<p>Classement Mixte : ";
        // line 22
        echo twig_escape_filter($this->env, ($context["mixte"] ?? $this->getContext($context, "mixte")), "html", null, true);
        echo "</p>
\t
  ";
        
        $__internal_89a1926813699895420ad5e090edfb6c0042c4166425237c5d8ee7b7edee48ed->leave($__internal_89a1926813699895420ad5e090edfb6c0042c4166425237c5d8ee7b7edee48ed_prof);

        
        $__internal_09b8325d99ace8aed609408fd2bbeb19bdfc36e5bdf91d14748d192f468ce161->leave($__internal_09b8325d99ace8aed609408fd2bbeb19bdfc36e5bdf91d14748d192f468ce161_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Poona/classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 22,  117 => 21,  113 => 20,  107 => 18,  98 => 17,  87 => 25,  84 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/PlatformBundle/Resources/view/Advert/classement.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Classement de {{ nom }}</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
\t<h2>Licence n°{{ licence }}</h2>
\t
\t<p>Classement Simple : {{ simple }}</p>
\t<p>Classement Double : {{ double }}</p>
\t<p>Classement Mixte : {{ mixte }}</p>
\t
  {% endblock %}

{% endblock %}
", "@ASFFTournois/Poona/classement.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Poona\\classement.html.twig");
    }
}
