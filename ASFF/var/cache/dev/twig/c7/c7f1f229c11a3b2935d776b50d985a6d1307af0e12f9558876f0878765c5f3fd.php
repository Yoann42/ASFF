<?php

/* ASFFClubBundle::layoutClub.html.twig */
class __TwigTemplate_689f101c98654aea2d84390f5736c1018b5cd706e35802101191a0102890e2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFClubBundle::layoutClub.html.twig", 3);
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
        $__internal_78e5ce7cc9262e86b8bfd234222d663d21c348edb5e4b973edc122c205944454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e5ce7cc9262e86b8bfd234222d663d21c348edb5e4b973edc122c205944454->enter($__internal_78e5ce7cc9262e86b8bfd234222d663d21c348edb5e4b973edc122c205944454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutClub.html.twig"));

        $__internal_00ab50bd70a87d67b24e09d6ba109350b9017932438de557cc0ec1892c9a1840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ab50bd70a87d67b24e09d6ba109350b9017932438de557cc0ec1892c9a1840->enter($__internal_00ab50bd70a87d67b24e09d6ba109350b9017932438de557cc0ec1892c9a1840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutClub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e5ce7cc9262e86b8bfd234222d663d21c348edb5e4b973edc122c205944454->leave($__internal_78e5ce7cc9262e86b8bfd234222d663d21c348edb5e4b973edc122c205944454_prof);

        
        $__internal_00ab50bd70a87d67b24e09d6ba109350b9017932438de557cc0ec1892c9a1840->leave($__internal_00ab50bd70a87d67b24e09d6ba109350b9017932438de557cc0ec1892c9a1840_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f308030377a6091d419fd05db3cf5f7d3a5a30cd02b6c3bb9461573bdd39e680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f308030377a6091d419fd05db3cf5f7d3a5a30cd02b6c3bb9461573bdd39e680->enter($__internal_f308030377a6091d419fd05db3cf5f7d3a5a30cd02b6c3bb9461573bdd39e680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd98e2e7831c74986044ff866bf4eccd4773302a2529273a97d0a2e326ae1481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd98e2e7831c74986044ff866bf4eccd4773302a2529273a97d0a2e326ae1481->enter($__internal_dd98e2e7831c74986044ff866bf4eccd4773302a2529273a97d0a2e326ae1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Actualité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dd98e2e7831c74986044ff866bf4eccd4773302a2529273a97d0a2e326ae1481->leave($__internal_dd98e2e7831c74986044ff866bf4eccd4773302a2529273a97d0a2e326ae1481_prof);

        
        $__internal_f308030377a6091d419fd05db3cf5f7d3a5a30cd02b6c3bb9461573bdd39e680->leave($__internal_f308030377a6091d419fd05db3cf5f7d3a5a30cd02b6c3bb9461573bdd39e680_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a466f009de394068442d3209e1f5b95bdd59b931ee0beb48d9f476a98bbbb158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a466f009de394068442d3209e1f5b95bdd59b931ee0beb48d9f476a98bbbb158->enter($__internal_a466f009de394068442d3209e1f5b95bdd59b931ee0beb48d9f476a98bbbb158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_830302d47a02b1f2c340afbaa043d7ba165225883f31d0a942d0e1550aeb5712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830302d47a02b1f2c340afbaa043d7ba165225883f31d0a942d0e1550aeb5712->enter($__internal_830302d47a02b1f2c340afbaa043d7ba165225883f31d0a942d0e1550aeb5712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Le Club</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_830302d47a02b1f2c340afbaa043d7ba165225883f31d0a942d0e1550aeb5712->leave($__internal_830302d47a02b1f2c340afbaa043d7ba165225883f31d0a942d0e1550aeb5712_prof);

        
        $__internal_a466f009de394068442d3209e1f5b95bdd59b931ee0beb48d9f476a98bbbb158->leave($__internal_a466f009de394068442d3209e1f5b95bdd59b931ee0beb48d9f476a98bbbb158_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4a126f3bfbc46c28415e06d4c6ff60f748014c23f3b70c42e0739e8bedf41473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a126f3bfbc46c28415e06d4c6ff60f748014c23f3b70c42e0739e8bedf41473->enter($__internal_4a126f3bfbc46c28415e06d4c6ff60f748014c23f3b70c42e0739e8bedf41473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_2b3321d439bbe2addf69b47c195da76ae926dc0efbd9a8dd0eaf97b497fdd162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3321d439bbe2addf69b47c195da76ae926dc0efbd9a8dd0eaf97b497fdd162->enter($__internal_2b3321d439bbe2addf69b47c195da76ae926dc0efbd9a8dd0eaf97b497fdd162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_2b3321d439bbe2addf69b47c195da76ae926dc0efbd9a8dd0eaf97b497fdd162->leave($__internal_2b3321d439bbe2addf69b47c195da76ae926dc0efbd9a8dd0eaf97b497fdd162_prof);

        
        $__internal_4a126f3bfbc46c28415e06d4c6ff60f748014c23f3b70c42e0739e8bedf41473->leave($__internal_4a126f3bfbc46c28415e06d4c6ff60f748014c23f3b70c42e0739e8bedf41473_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle::layoutClub.html.twig";
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
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/layoutClub.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Actualité - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Le Club</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "ASFFClubBundle::layoutClub.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/layoutClub.html.twig");
    }
}
