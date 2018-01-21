<?php

/* @ASFFClub/layoutInfoTech.html.twig */
class __TwigTemplate_5cfc49d82a1f74e470f374b6b21b52c54841eef9949422d959903833bc4c8635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@ASFFClub/layoutInfoTech.html.twig", 3);
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
        $__internal_9c992fe26ac1c638b49c045827a7990b3b0abf984e31c45c4df71dbb6658b781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c992fe26ac1c638b49c045827a7990b3b0abf984e31c45c4df71dbb6658b781->enter($__internal_9c992fe26ac1c638b49c045827a7990b3b0abf984e31c45c4df71dbb6658b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/layoutInfoTech.html.twig"));

        $__internal_ca08ac403047186849fbf2b3c2b664c3308a17dd9511265324c8ad429ae2e362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca08ac403047186849fbf2b3c2b664c3308a17dd9511265324c8ad429ae2e362->enter($__internal_ca08ac403047186849fbf2b3c2b664c3308a17dd9511265324c8ad429ae2e362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/layoutInfoTech.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c992fe26ac1c638b49c045827a7990b3b0abf984e31c45c4df71dbb6658b781->leave($__internal_9c992fe26ac1c638b49c045827a7990b3b0abf984e31c45c4df71dbb6658b781_prof);

        
        $__internal_ca08ac403047186849fbf2b3c2b664c3308a17dd9511265324c8ad429ae2e362->leave($__internal_ca08ac403047186849fbf2b3c2b664c3308a17dd9511265324c8ad429ae2e362_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d909ce3e9c09cf7ea3dbe9c1bca0aad78f69bd773b6545f8ccc8ae1ab35ca67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d909ce3e9c09cf7ea3dbe9c1bca0aad78f69bd773b6545f8ccc8ae1ab35ca67e->enter($__internal_d909ce3e9c09cf7ea3dbe9c1bca0aad78f69bd773b6545f8ccc8ae1ab35ca67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d75350ec5d45d18bccdfeb3246f9bd39f33dc30c90a36b6b82184b2357582216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75350ec5d45d18bccdfeb3246f9bd39f33dc30c90a36b6b82184b2357582216->enter($__internal_d75350ec5d45d18bccdfeb3246f9bd39f33dc30c90a36b6b82184b2357582216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Infos Techniques - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d75350ec5d45d18bccdfeb3246f9bd39f33dc30c90a36b6b82184b2357582216->leave($__internal_d75350ec5d45d18bccdfeb3246f9bd39f33dc30c90a36b6b82184b2357582216_prof);

        
        $__internal_d909ce3e9c09cf7ea3dbe9c1bca0aad78f69bd773b6545f8ccc8ae1ab35ca67e->leave($__internal_d909ce3e9c09cf7ea3dbe9c1bca0aad78f69bd773b6545f8ccc8ae1ab35ca67e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dc372e3cef9c811082b5ddfd2084ecfbac0b2d0e98e95a4e92b61ff2672585e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc372e3cef9c811082b5ddfd2084ecfbac0b2d0e98e95a4e92b61ff2672585e->enter($__internal_9dc372e3cef9c811082b5ddfd2084ecfbac0b2d0e98e95a4e92b61ff2672585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcdaebd36ad77b08ca4b8e84eedc4a85316ef4ce6972a7970a83e6bc8a540ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdaebd36ad77b08ca4b8e84eedc4a85316ef4ce6972a7970a83e6bc8a540ea9->enter($__internal_bcdaebd36ad77b08ca4b8e84eedc4a85316ef4ce6972a7970a83e6bc8a540ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bcdaebd36ad77b08ca4b8e84eedc4a85316ef4ce6972a7970a83e6bc8a540ea9->leave($__internal_bcdaebd36ad77b08ca4b8e84eedc4a85316ef4ce6972a7970a83e6bc8a540ea9_prof);

        
        $__internal_9dc372e3cef9c811082b5ddfd2084ecfbac0b2d0e98e95a4e92b61ff2672585e->leave($__internal_9dc372e3cef9c811082b5ddfd2084ecfbac0b2d0e98e95a4e92b61ff2672585e_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_66c858dc047914a2ccd2429983bdffe6ca473cbb3ef398c0f8a34116f8f7c7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c858dc047914a2ccd2429983bdffe6ca473cbb3ef398c0f8a34116f8f7c7af->enter($__internal_66c858dc047914a2ccd2429983bdffe6ca473cbb3ef398c0f8a34116f8f7c7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_785529654ab8529986debb42602a703d223cd3af4913331bad90710ee5075bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785529654ab8529986debb42602a703d223cd3af4913331bad90710ee5075bc8->enter($__internal_785529654ab8529986debb42602a703d223cd3af4913331bad90710ee5075bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_785529654ab8529986debb42602a703d223cd3af4913331bad90710ee5075bc8->leave($__internal_785529654ab8529986debb42602a703d223cd3af4913331bad90710ee5075bc8_prof);

        
        $__internal_66c858dc047914a2ccd2429983bdffe6ca473cbb3ef398c0f8a34116f8f7c7af->leave($__internal_66c858dc047914a2ccd2429983bdffe6ca473cbb3ef398c0f8a34116f8f7c7af_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/layoutInfoTech.html.twig";
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

{% endblock %}", "@ASFFClub/layoutInfoTech.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\layoutInfoTech.html.twig");
    }
}
