<?php

/* ASFFClubBundle::layoutInfoTech.html.twig */
class __TwigTemplate_abf5ca5a01c62a9a607267a42504e11d8105b5e8a7cb8cedfd64ac821749102f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFClubBundle::layoutInfoTech.html.twig", 3);
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
        $__internal_9125d3645b741367ccefeaa021fbbdbf9d34fc24b85cfe234e8c34537d0ab4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9125d3645b741367ccefeaa021fbbdbf9d34fc24b85cfe234e8c34537d0ab4d6->enter($__internal_9125d3645b741367ccefeaa021fbbdbf9d34fc24b85cfe234e8c34537d0ab4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutInfoTech.html.twig"));

        $__internal_4ae182c764dbb0a167981e09d0c1900c7d032e45dff76051829f8d353f16f900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae182c764dbb0a167981e09d0c1900c7d032e45dff76051829f8d353f16f900->enter($__internal_4ae182c764dbb0a167981e09d0c1900c7d032e45dff76051829f8d353f16f900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutInfoTech.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9125d3645b741367ccefeaa021fbbdbf9d34fc24b85cfe234e8c34537d0ab4d6->leave($__internal_9125d3645b741367ccefeaa021fbbdbf9d34fc24b85cfe234e8c34537d0ab4d6_prof);

        
        $__internal_4ae182c764dbb0a167981e09d0c1900c7d032e45dff76051829f8d353f16f900->leave($__internal_4ae182c764dbb0a167981e09d0c1900c7d032e45dff76051829f8d353f16f900_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d6ce171f534f3d32e2b9330e0f032c35398df1c6ca31daf2dc066a1315746c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6ce171f534f3d32e2b9330e0f032c35398df1c6ca31daf2dc066a1315746c7->enter($__internal_7d6ce171f534f3d32e2b9330e0f032c35398df1c6ca31daf2dc066a1315746c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d59292cdce9c4e57d0faf876cf46d2a853e3b7358156c26ad0677e63cebff987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59292cdce9c4e57d0faf876cf46d2a853e3b7358156c26ad0677e63cebff987->enter($__internal_d59292cdce9c4e57d0faf876cf46d2a853e3b7358156c26ad0677e63cebff987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Infos Techniques - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d59292cdce9c4e57d0faf876cf46d2a853e3b7358156c26ad0677e63cebff987->leave($__internal_d59292cdce9c4e57d0faf876cf46d2a853e3b7358156c26ad0677e63cebff987_prof);

        
        $__internal_7d6ce171f534f3d32e2b9330e0f032c35398df1c6ca31daf2dc066a1315746c7->leave($__internal_7d6ce171f534f3d32e2b9330e0f032c35398df1c6ca31daf2dc066a1315746c7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_de3b6c5359f6dd712bc446490dbfb30443fdb292f5c26f6e1ccf609211a2e001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3b6c5359f6dd712bc446490dbfb30443fdb292f5c26f6e1ccf609211a2e001->enter($__internal_de3b6c5359f6dd712bc446490dbfb30443fdb292f5c26f6e1ccf609211a2e001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66099254eeba753f2031d702164a60a0fd563999ec298089f6471a3453742c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66099254eeba753f2031d702164a60a0fd563999ec298089f6471a3453742c8c->enter($__internal_66099254eeba753f2031d702164a60a0fd563999ec298089f6471a3453742c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Informations techniques</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_66099254eeba753f2031d702164a60a0fd563999ec298089f6471a3453742c8c->leave($__internal_66099254eeba753f2031d702164a60a0fd563999ec298089f6471a3453742c8c_prof);

        
        $__internal_de3b6c5359f6dd712bc446490dbfb30443fdb292f5c26f6e1ccf609211a2e001->leave($__internal_de3b6c5359f6dd712bc446490dbfb30443fdb292f5c26f6e1ccf609211a2e001_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e29f9e16b18c80314a454b23771df6766e58d98b54aacf6aa333c44453d57d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29f9e16b18c80314a454b23771df6766e58d98b54aacf6aa333c44453d57d6c->enter($__internal_e29f9e16b18c80314a454b23771df6766e58d98b54aacf6aa333c44453d57d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e109181021e3a077bc3ec0d2e8222cebd3761885b04a66811ffc611be704061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e109181021e3a077bc3ec0d2e8222cebd3761885b04a66811ffc611be704061c->enter($__internal_e109181021e3a077bc3ec0d2e8222cebd3761885b04a66811ffc611be704061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_e109181021e3a077bc3ec0d2e8222cebd3761885b04a66811ffc611be704061c->leave($__internal_e109181021e3a077bc3ec0d2e8222cebd3761885b04a66811ffc611be704061c_prof);

        
        $__internal_e29f9e16b18c80314a454b23771df6766e58d98b54aacf6aa333c44453d57d6c->leave($__internal_e29f9e16b18c80314a454b23771df6766e58d98b54aacf6aa333c44453d57d6c_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle::layoutInfoTech.html.twig";
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
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/layoutInfoTech.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Infos Techniques - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Informations techniques</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "ASFFClubBundle::layoutInfoTech.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/layoutInfoTech.html.twig");
    }
}
