<?php

/* ASFFTournoisBundle::layout.html.twig */
class __TwigTemplate_c5ffb5ceda0867e086de818e215cac5e0a7bad946895dba5c9f62c9337be01f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFTournoisBundle::layout.html.twig", 3);
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
        $__internal_5eb9313ca79bc241d53873a22e57078054abbe883509d3a85ec2096570d42195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb9313ca79bc241d53873a22e57078054abbe883509d3a85ec2096570d42195->enter($__internal_5eb9313ca79bc241d53873a22e57078054abbe883509d3a85ec2096570d42195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle::layout.html.twig"));

        $__internal_b605e9c0de0a630028f8f3397c681773caa17727281eaaca593b740f7e2677a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b605e9c0de0a630028f8f3397c681773caa17727281eaaca593b740f7e2677a4->enter($__internal_b605e9c0de0a630028f8f3397c681773caa17727281eaaca593b740f7e2677a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb9313ca79bc241d53873a22e57078054abbe883509d3a85ec2096570d42195->leave($__internal_5eb9313ca79bc241d53873a22e57078054abbe883509d3a85ec2096570d42195_prof);

        
        $__internal_b605e9c0de0a630028f8f3397c681773caa17727281eaaca593b740f7e2677a4->leave($__internal_b605e9c0de0a630028f8f3397c681773caa17727281eaaca593b740f7e2677a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_196a5bef155727e28655f1fc8746262aa40e1758d4212c7525eda8ec991b47da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196a5bef155727e28655f1fc8746262aa40e1758d4212c7525eda8ec991b47da->enter($__internal_196a5bef155727e28655f1fc8746262aa40e1758d4212c7525eda8ec991b47da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ef2c8de241e08baa79fb0eb56de61f077ddd668482386140e8d7e56e490bcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef2c8de241e08baa79fb0eb56de61f077ddd668482386140e8d7e56e490bcc2->enter($__internal_3ef2c8de241e08baa79fb0eb56de61f077ddd668482386140e8d7e56e490bcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Tournois - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3ef2c8de241e08baa79fb0eb56de61f077ddd668482386140e8d7e56e490bcc2->leave($__internal_3ef2c8de241e08baa79fb0eb56de61f077ddd668482386140e8d7e56e490bcc2_prof);

        
        $__internal_196a5bef155727e28655f1fc8746262aa40e1758d4212c7525eda8ec991b47da->leave($__internal_196a5bef155727e28655f1fc8746262aa40e1758d4212c7525eda8ec991b47da_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef4c723edf1f306a771598d8040b264c7a02f29de7489f2e840654b05da0ea4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4c723edf1f306a771598d8040b264c7a02f29de7489f2e840654b05da0ea4d->enter($__internal_ef4c723edf1f306a771598d8040b264c7a02f29de7489f2e840654b05da0ea4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9d5f00dd998a5820d9646e27e6bed26c9d010f2c7bf418cea81dbee13f4991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d5f00dd998a5820d9646e27e6bed26c9d010f2c7bf418cea81dbee13f4991d->enter($__internal_d9d5f00dd998a5820d9646e27e6bed26c9d010f2c7bf418cea81dbee13f4991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9d5f00dd998a5820d9646e27e6bed26c9d010f2c7bf418cea81dbee13f4991d->leave($__internal_d9d5f00dd998a5820d9646e27e6bed26c9d010f2c7bf418cea81dbee13f4991d_prof);

        
        $__internal_ef4c723edf1f306a771598d8040b264c7a02f29de7489f2e840654b05da0ea4d->leave($__internal_ef4c723edf1f306a771598d8040b264c7a02f29de7489f2e840654b05da0ea4d_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5d6ba0d0695ea74b1ffe546e5538dffc90ab93f68f5baeb8cd3ade5423e8257b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6ba0d0695ea74b1ffe546e5538dffc90ab93f68f5baeb8cd3ade5423e8257b->enter($__internal_5d6ba0d0695ea74b1ffe546e5538dffc90ab93f68f5baeb8cd3ade5423e8257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1c97a16da54a1cec0cf6f171194a46da2b782d0bfb8416d690ed3d427fe21c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c97a16da54a1cec0cf6f171194a46da2b782d0bfb8416d690ed3d427fe21c5e->enter($__internal_1c97a16da54a1cec0cf6f171194a46da2b782d0bfb8416d690ed3d427fe21c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_1c97a16da54a1cec0cf6f171194a46da2b782d0bfb8416d690ed3d427fe21c5e->leave($__internal_1c97a16da54a1cec0cf6f171194a46da2b782d0bfb8416d690ed3d427fe21c5e_prof);

        
        $__internal_5d6ba0d0695ea74b1ffe546e5538dffc90ab93f68f5baeb8cd3ade5423e8257b->leave($__internal_5d6ba0d0695ea74b1ffe546e5538dffc90ab93f68f5baeb8cd3ade5423e8257b_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle::layout.html.twig";
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

{% endblock %}", "ASFFTournoisBundle::layout.html.twig", "C:\\wamp64\\www\\ASFF\\src\\ASFF\\TournoisBundle\\Resources\\views\\layout.html.twig");
    }
}
