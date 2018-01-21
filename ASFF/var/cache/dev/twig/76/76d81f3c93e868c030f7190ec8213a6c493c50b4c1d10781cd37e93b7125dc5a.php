<?php

/* @ASFFTournois/layout.html.twig */
class __TwigTemplate_43c88a44fd3de137b76a0324a3c84b18a7affa63ec045ded7a4ae855d73d181a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@ASFFTournois/layout.html.twig", 3);
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
        $__internal_ebf316454c94ca60314d51cb62970757684601d7347959e155bf3ae56633b874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf316454c94ca60314d51cb62970757684601d7347959e155bf3ae56633b874->enter($__internal_ebf316454c94ca60314d51cb62970757684601d7347959e155bf3ae56633b874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/layout.html.twig"));

        $__internal_4b7624cdb0473b28b6b692bcfef636ed7baa9079fba91be3c9823dbf0ac47c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7624cdb0473b28b6b692bcfef636ed7baa9079fba91be3c9823dbf0ac47c89->enter($__internal_4b7624cdb0473b28b6b692bcfef636ed7baa9079fba91be3c9823dbf0ac47c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf316454c94ca60314d51cb62970757684601d7347959e155bf3ae56633b874->leave($__internal_ebf316454c94ca60314d51cb62970757684601d7347959e155bf3ae56633b874_prof);

        
        $__internal_4b7624cdb0473b28b6b692bcfef636ed7baa9079fba91be3c9823dbf0ac47c89->leave($__internal_4b7624cdb0473b28b6b692bcfef636ed7baa9079fba91be3c9823dbf0ac47c89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb1a76996e3dfa43716a9240be2d9c1ed3c54ea27a404c0f69212de8fee3c538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1a76996e3dfa43716a9240be2d9c1ed3c54ea27a404c0f69212de8fee3c538->enter($__internal_bb1a76996e3dfa43716a9240be2d9c1ed3c54ea27a404c0f69212de8fee3c538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29b9ff3b971b5785a7cdb242b4e85035d2ec762a2f3dcdcdc8485bcfdbf81941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b9ff3b971b5785a7cdb242b4e85035d2ec762a2f3dcdcdc8485bcfdbf81941->enter($__internal_29b9ff3b971b5785a7cdb242b4e85035d2ec762a2f3dcdcdc8485bcfdbf81941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Tournois - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29b9ff3b971b5785a7cdb242b4e85035d2ec762a2f3dcdcdc8485bcfdbf81941->leave($__internal_29b9ff3b971b5785a7cdb242b4e85035d2ec762a2f3dcdcdc8485bcfdbf81941_prof);

        
        $__internal_bb1a76996e3dfa43716a9240be2d9c1ed3c54ea27a404c0f69212de8fee3c538->leave($__internal_bb1a76996e3dfa43716a9240be2d9c1ed3c54ea27a404c0f69212de8fee3c538_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_176ab9f6436301ac99aec6abfa22120d4cc471471828349f2d39e66956b11cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176ab9f6436301ac99aec6abfa22120d4cc471471828349f2d39e66956b11cc2->enter($__internal_176ab9f6436301ac99aec6abfa22120d4cc471471828349f2d39e66956b11cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_136bbae38b2673587bea0853f00f71330db9726b19b5490c8e3c3d3e34ac5ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136bbae38b2673587bea0853f00f71330db9726b19b5490c8e3c3d3e34ac5ae6->enter($__internal_136bbae38b2673587bea0853f00f71330db9726b19b5490c8e3c3d3e34ac5ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Tournois</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_136bbae38b2673587bea0853f00f71330db9726b19b5490c8e3c3d3e34ac5ae6->leave($__internal_136bbae38b2673587bea0853f00f71330db9726b19b5490c8e3c3d3e34ac5ae6_prof);

        
        $__internal_176ab9f6436301ac99aec6abfa22120d4cc471471828349f2d39e66956b11cc2->leave($__internal_176ab9f6436301ac99aec6abfa22120d4cc471471828349f2d39e66956b11cc2_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6350028bdf7d8edbec9a8f86192ce8098b05fccb45efc8b0ce9560022b65c60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6350028bdf7d8edbec9a8f86192ce8098b05fccb45efc8b0ce9560022b65c60b->enter($__internal_6350028bdf7d8edbec9a8f86192ce8098b05fccb45efc8b0ce9560022b65c60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_b6dcf93f0a999c94976c76cd6913153c47ac052883f879b681c952b1843132fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dcf93f0a999c94976c76cd6913153c47ac052883f879b681c952b1843132fd->enter($__internal_b6dcf93f0a999c94976c76cd6913153c47ac052883f879b681c952b1843132fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_b6dcf93f0a999c94976c76cd6913153c47ac052883f879b681c952b1843132fd->leave($__internal_b6dcf93f0a999c94976c76cd6913153c47ac052883f879b681c952b1843132fd_prof);

        
        $__internal_6350028bdf7d8edbec9a8f86192ce8098b05fccb45efc8b0ce9560022b65c60b->leave($__internal_6350028bdf7d8edbec9a8f86192ce8098b05fccb45efc8b0ce9560022b65c60b_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/layout.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Tournois - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Tournois</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "@ASFFTournois/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\layout.html.twig");
    }
}
