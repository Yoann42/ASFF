<?php

/* ASFFClubBundle:Le Club:association.html.twig */
class __TwigTemplate_0ee399a75294a0784c0ae99dd11e3e80e1e477c06400e5a932bb83b7d2b0b092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutClub.html.twig", "ASFFClubBundle:Le Club:association.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutClub.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1cefdf688f1b64010024248181faba386cbbb78a45c608b296dfc23220bc416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cefdf688f1b64010024248181faba386cbbb78a45c608b296dfc23220bc416->enter($__internal_e1cefdf688f1b64010024248181faba386cbbb78a45c608b296dfc23220bc416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Le Club:association.html.twig"));

        $__internal_faf844b4b1c60d47d4a9ebe421f7cb27e1a910cc9f1ff48f6f2973fb0ebe1b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf844b4b1c60d47d4a9ebe421f7cb27e1a910cc9f1ff48f6f2973fb0ebe1b6f->enter($__internal_faf844b4b1c60d47d4a9ebe421f7cb27e1a910cc9f1ff48f6f2973fb0ebe1b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Le Club:association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1cefdf688f1b64010024248181faba386cbbb78a45c608b296dfc23220bc416->leave($__internal_e1cefdf688f1b64010024248181faba386cbbb78a45c608b296dfc23220bc416_prof);

        
        $__internal_faf844b4b1c60d47d4a9ebe421f7cb27e1a910cc9f1ff48f6f2973fb0ebe1b6f->leave($__internal_faf844b4b1c60d47d4a9ebe421f7cb27e1a910cc9f1ff48f6f2973fb0ebe1b6f_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_946b4c05cdae7884eaab93fb8999fd9a2160fd72252785e51a6fd91761adfd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946b4c05cdae7884eaab93fb8999fd9a2160fd72252785e51a6fd91761adfd67->enter($__internal_946b4c05cdae7884eaab93fb8999fd9a2160fd72252785e51a6fd91761adfd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_af77ebaa672afe72dd0a2f9ee68bc3a7a125f86736f8ca68fc91d52b5da959e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af77ebaa672afe72dd0a2f9ee68bc3a7a125f86736f8ca68fc91d52b5da959e7->enter($__internal_af77ebaa672afe72dd0a2f9ee68bc3a7a125f86736f8ca68fc91d52b5da959e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>L'association</h2>

";
        
        $__internal_af77ebaa672afe72dd0a2f9ee68bc3a7a125f86736f8ca68fc91d52b5da959e7->leave($__internal_af77ebaa672afe72dd0a2f9ee68bc3a7a125f86736f8ca68fc91d52b5da959e7_prof);

        
        $__internal_946b4c05cdae7884eaab93fb8999fd9a2160fd72252785e51a6fd91761adfd67->leave($__internal_946b4c05cdae7884eaab93fb8999fd9a2160fd72252785e51a6fd91761adfd67_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle:Le Club:association.html.twig";
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

{% block ocplatform_body %}

  <h2>L'association</h2>

{% endblock %}", "ASFFClubBundle:Le Club:association.html.twig", "C:\\wamp64\\www\\Symfony\\ASFF\\src\\ASFF\\ClubBundle\\Resources\\views\\Le Club\\association.html.twig");
    }
}
