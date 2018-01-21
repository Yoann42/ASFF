<?php

/* ASFFClubBundle::layoutClub.html.twig */
class __TwigTemplate_73b8b6eca202367223a9404014b6c4bb06ce80b4419e75f4fdfcc129c643e7ed extends Twig_Template
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
        $__internal_9123a672dc2601895e2d10dbb6594a29a9b69718ed4fdd62659d728e265115b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9123a672dc2601895e2d10dbb6594a29a9b69718ed4fdd62659d728e265115b3->enter($__internal_9123a672dc2601895e2d10dbb6594a29a9b69718ed4fdd62659d728e265115b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutClub.html.twig"));

        $__internal_8d2299add7224bb1017d86854f4e07971e656a975df96085a9c1467a3f670e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2299add7224bb1017d86854f4e07971e656a975df96085a9c1467a3f670e07->enter($__internal_8d2299add7224bb1017d86854f4e07971e656a975df96085a9c1467a3f670e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle::layoutClub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9123a672dc2601895e2d10dbb6594a29a9b69718ed4fdd62659d728e265115b3->leave($__internal_9123a672dc2601895e2d10dbb6594a29a9b69718ed4fdd62659d728e265115b3_prof);

        
        $__internal_8d2299add7224bb1017d86854f4e07971e656a975df96085a9c1467a3f670e07->leave($__internal_8d2299add7224bb1017d86854f4e07971e656a975df96085a9c1467a3f670e07_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d69ea23809d5f7fb187f737138d440f31cdb68ff9445a04b860270d3811c074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d69ea23809d5f7fb187f737138d440f31cdb68ff9445a04b860270d3811c074->enter($__internal_3d69ea23809d5f7fb187f737138d440f31cdb68ff9445a04b860270d3811c074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5124c23d75372766d0d060eac60e14a00a3977cf18b2e26c0faacf293fabf896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5124c23d75372766d0d060eac60e14a00a3977cf18b2e26c0faacf293fabf896->enter($__internal_5124c23d75372766d0d060eac60e14a00a3977cf18b2e26c0faacf293fabf896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Actualité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5124c23d75372766d0d060eac60e14a00a3977cf18b2e26c0faacf293fabf896->leave($__internal_5124c23d75372766d0d060eac60e14a00a3977cf18b2e26c0faacf293fabf896_prof);

        
        $__internal_3d69ea23809d5f7fb187f737138d440f31cdb68ff9445a04b860270d3811c074->leave($__internal_3d69ea23809d5f7fb187f737138d440f31cdb68ff9445a04b860270d3811c074_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d7489c736dfa1871d5be08b12e46f4b58929e50757029f05b7b8738bf24c1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7489c736dfa1871d5be08b12e46f4b58929e50757029f05b7b8738bf24c1fb->enter($__internal_6d7489c736dfa1871d5be08b12e46f4b58929e50757029f05b7b8738bf24c1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf9a0078a4e867ea34b37903bed1e7f1e5fcdfca9033eedb6f899ee035d052f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9a0078a4e867ea34b37903bed1e7f1e5fcdfca9033eedb6f899ee035d052f7->enter($__internal_cf9a0078a4e867ea34b37903bed1e7f1e5fcdfca9033eedb6f899ee035d052f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf9a0078a4e867ea34b37903bed1e7f1e5fcdfca9033eedb6f899ee035d052f7->leave($__internal_cf9a0078a4e867ea34b37903bed1e7f1e5fcdfca9033eedb6f899ee035d052f7_prof);

        
        $__internal_6d7489c736dfa1871d5be08b12e46f4b58929e50757029f05b7b8738bf24c1fb->leave($__internal_6d7489c736dfa1871d5be08b12e46f4b58929e50757029f05b7b8738bf24c1fb_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9a3d485557665ef11f5be14238c48ef1a2083dcedd453bb111c44e38bd206077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3d485557665ef11f5be14238c48ef1a2083dcedd453bb111c44e38bd206077->enter($__internal_9a3d485557665ef11f5be14238c48ef1a2083dcedd453bb111c44e38bd206077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e67096805398f449df43f651a6aa3f8d6f4dbdab0f74261a36df2258c5884570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67096805398f449df43f651a6aa3f8d6f4dbdab0f74261a36df2258c5884570->enter($__internal_e67096805398f449df43f651a6aa3f8d6f4dbdab0f74261a36df2258c5884570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_e67096805398f449df43f651a6aa3f8d6f4dbdab0f74261a36df2258c5884570->leave($__internal_e67096805398f449df43f651a6aa3f8d6f4dbdab0f74261a36df2258c5884570_prof);

        
        $__internal_9a3d485557665ef11f5be14238c48ef1a2083dcedd453bb111c44e38bd206077->leave($__internal_9a3d485557665ef11f5be14238c48ef1a2083dcedd453bb111c44e38bd206077_prof);

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

{% endblock %}", "ASFFClubBundle::layoutClub.html.twig", "C:\\wamp64\\www\\Symfony\\ASFF\\src\\ASFF\\ClubBundle\\Resources\\views\\layoutClub.html.twig");
    }
}
