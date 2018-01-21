<?php

/* @ASFFClub/Le Club/lieuhoraire.html.twig */
class __TwigTemplate_4cbe94d6379a2f8297fc04fdcb5ef4eb8438351a46ad9b056fdfd0066c2defcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutClub.html.twig", "@ASFFClub/Le Club/lieuhoraire.html.twig", 3);
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
        $__internal_ea16569a22217d823ac14d8be8328b135ee8fa29bdab75ca259dffd0b50b2ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea16569a22217d823ac14d8be8328b135ee8fa29bdab75ca259dffd0b50b2ffd->enter($__internal_ea16569a22217d823ac14d8be8328b135ee8fa29bdab75ca259dffd0b50b2ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Le Club/lieuhoraire.html.twig"));

        $__internal_a453aa91d9731d532cb603d42458e51ec312760d3f22b12adfd8c76c2b899832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a453aa91d9731d532cb603d42458e51ec312760d3f22b12adfd8c76c2b899832->enter($__internal_a453aa91d9731d532cb603d42458e51ec312760d3f22b12adfd8c76c2b899832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Le Club/lieuhoraire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea16569a22217d823ac14d8be8328b135ee8fa29bdab75ca259dffd0b50b2ffd->leave($__internal_ea16569a22217d823ac14d8be8328b135ee8fa29bdab75ca259dffd0b50b2ffd_prof);

        
        $__internal_a453aa91d9731d532cb603d42458e51ec312760d3f22b12adfd8c76c2b899832->leave($__internal_a453aa91d9731d532cb603d42458e51ec312760d3f22b12adfd8c76c2b899832_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd1a7574c6ed92a58a4072487e00aadb38ebfefc5775e4fffd52507c20801cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1a7574c6ed92a58a4072487e00aadb38ebfefc5775e4fffd52507c20801cf1->enter($__internal_bd1a7574c6ed92a58a4072487e00aadb38ebfefc5775e4fffd52507c20801cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b894b8ef32ffcc22bbca765b7b9630fd7bea4da4a1e79f6f8d4e09e8e91ac410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b894b8ef32ffcc22bbca765b7b9630fd7bea4da4a1e79f6f8d4e09e8e91ac410->enter($__internal_b894b8ef32ffcc22bbca765b7b9630fd7bea4da4a1e79f6f8d4e09e8e91ac410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Les lieux et horaires d'entraînement</h2>

";
        
        $__internal_b894b8ef32ffcc22bbca765b7b9630fd7bea4da4a1e79f6f8d4e09e8e91ac410->leave($__internal_b894b8ef32ffcc22bbca765b7b9630fd7bea4da4a1e79f6f8d4e09e8e91ac410_prof);

        
        $__internal_bd1a7574c6ed92a58a4072487e00aadb38ebfefc5775e4fffd52507c20801cf1->leave($__internal_bd1a7574c6ed92a58a4072487e00aadb38ebfefc5775e4fffd52507c20801cf1_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/Le Club/lieuhoraire.html.twig";
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
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Le Club/lieuhoraire.html.twig #}

{% extends \"ASFFClubBundle::layoutClub.html.twig\" %}

{% block body %}

  <h2>Les lieux et horaires d'entraînement</h2>

{% endblock %}", "@ASFFClub/Le Club/lieuhoraire.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\Le Club\\lieuhoraire.html.twig");
    }
}
