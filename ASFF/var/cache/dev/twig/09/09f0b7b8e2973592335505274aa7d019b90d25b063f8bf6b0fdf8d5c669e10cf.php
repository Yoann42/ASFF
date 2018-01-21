<?php

/* @ASFFClub/Info Tech/formations.html.twig */
class __TwigTemplate_0de0bbb8a0ffe8755815be59c8380857c42c8d012f77656161eefadf967ca98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutInfoTech.html.twig", "@ASFFClub/Info Tech/formations.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutInfoTech.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d82472aeb8e657904f9ac62f7d434684c9491ff80fb0527c17f7098fb8dadaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d82472aeb8e657904f9ac62f7d434684c9491ff80fb0527c17f7098fb8dadaf->enter($__internal_4d82472aeb8e657904f9ac62f7d434684c9491ff80fb0527c17f7098fb8dadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Info Tech/formations.html.twig"));

        $__internal_84459fb4a19a1284cb60cca01de578c0b18a8f257c0bd554b76dd8f688634683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84459fb4a19a1284cb60cca01de578c0b18a8f257c0bd554b76dd8f688634683->enter($__internal_84459fb4a19a1284cb60cca01de578c0b18a8f257c0bd554b76dd8f688634683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Info Tech/formations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d82472aeb8e657904f9ac62f7d434684c9491ff80fb0527c17f7098fb8dadaf->leave($__internal_4d82472aeb8e657904f9ac62f7d434684c9491ff80fb0527c17f7098fb8dadaf_prof);

        
        $__internal_84459fb4a19a1284cb60cca01de578c0b18a8f257c0bd554b76dd8f688634683->leave($__internal_84459fb4a19a1284cb60cca01de578c0b18a8f257c0bd554b76dd8f688634683_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a2fa08f399150c2cd0cc1e533b9f837237fc9f49405e042e29ee3de9f8958eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2fa08f399150c2cd0cc1e533b9f837237fc9f49405e042e29ee3de9f8958eb->enter($__internal_4a2fa08f399150c2cd0cc1e533b9f837237fc9f49405e042e29ee3de9f8958eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0916733a2a59f38d5fb76cb29f6ed2753f7b922b7aa34a3e536304bca136bfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0916733a2a59f38d5fb76cb29f6ed2753f7b922b7aa34a3e536304bca136bfae->enter($__internal_0916733a2a59f38d5fb76cb29f6ed2753f7b922b7aa34a3e536304bca136bfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Formations</h2>

";
        
        $__internal_0916733a2a59f38d5fb76cb29f6ed2753f7b922b7aa34a3e536304bca136bfae->leave($__internal_0916733a2a59f38d5fb76cb29f6ed2753f7b922b7aa34a3e536304bca136bfae_prof);

        
        $__internal_4a2fa08f399150c2cd0cc1e533b9f837237fc9f49405e042e29ee3de9f8958eb->leave($__internal_4a2fa08f399150c2cd0cc1e533b9f837237fc9f49405e042e29ee3de9f8958eb_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/Info Tech/formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Info Tech/formations.html.twig #}

{% extends \"ASFFClubBundle::layoutInfoTech.html.twig\" %}

{% block body %}

  <h2>Formations</h2>

{% endblock %}", "@ASFFClub/Info Tech/formations.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\Info Tech\\formations.html.twig");
    }
}
