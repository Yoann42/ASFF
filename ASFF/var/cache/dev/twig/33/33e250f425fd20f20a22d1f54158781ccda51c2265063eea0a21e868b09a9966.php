<?php

/* @ASFFClub/Le Club/association.html.twig */
class __TwigTemplate_8f9a93eff5006f99ba8840bc596f789b3140bfd1062c99532c1f04edc9f5f7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutClub.html.twig", "@ASFFClub/Le Club/association.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutClub.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_635cc0966074c76b1686f9b0e474495692dc3ac45b23deedb94c837b702cc67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635cc0966074c76b1686f9b0e474495692dc3ac45b23deedb94c837b702cc67a->enter($__internal_635cc0966074c76b1686f9b0e474495692dc3ac45b23deedb94c837b702cc67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Le Club/association.html.twig"));

        $__internal_9ebbb7d70424bf813284e29821edd9fec88ab23651ff7cb3911f2e3ed2a5cbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebbb7d70424bf813284e29821edd9fec88ab23651ff7cb3911f2e3ed2a5cbfb->enter($__internal_9ebbb7d70424bf813284e29821edd9fec88ab23651ff7cb3911f2e3ed2a5cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Le Club/association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_635cc0966074c76b1686f9b0e474495692dc3ac45b23deedb94c837b702cc67a->leave($__internal_635cc0966074c76b1686f9b0e474495692dc3ac45b23deedb94c837b702cc67a_prof);

        
        $__internal_9ebbb7d70424bf813284e29821edd9fec88ab23651ff7cb3911f2e3ed2a5cbfb->leave($__internal_9ebbb7d70424bf813284e29821edd9fec88ab23651ff7cb3911f2e3ed2a5cbfb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63ae43713ffe5ff1236084b0454a620271d2d347bae0ef8a20c83f3f730bb337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ae43713ffe5ff1236084b0454a620271d2d347bae0ef8a20c83f3f730bb337->enter($__internal_63ae43713ffe5ff1236084b0454a620271d2d347bae0ef8a20c83f3f730bb337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6edd8e42acf40ca324ad06d6963864058595a8c22d123ade6bcd55cb6d56543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6edd8e42acf40ca324ad06d6963864058595a8c22d123ade6bcd55cb6d56543->enter($__internal_b6edd8e42acf40ca324ad06d6963864058595a8c22d123ade6bcd55cb6d56543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>L'association</h2>

";
        
        $__internal_b6edd8e42acf40ca324ad06d6963864058595a8c22d123ade6bcd55cb6d56543->leave($__internal_b6edd8e42acf40ca324ad06d6963864058595a8c22d123ade6bcd55cb6d56543_prof);

        
        $__internal_63ae43713ffe5ff1236084b0454a620271d2d347bae0ef8a20c83f3f730bb337->leave($__internal_63ae43713ffe5ff1236084b0454a620271d2d347bae0ef8a20c83f3f730bb337_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/Le Club/association.html.twig";
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
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Le Club/association.html.twig #}

{% extends \"ASFFClubBundle::layoutClub.html.twig\" %}

{% block body %}

  <h2>L'association</h2>

{% endblock %}", "@ASFFClub/Le Club/association.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\Le Club\\association.html.twig");
    }
}
