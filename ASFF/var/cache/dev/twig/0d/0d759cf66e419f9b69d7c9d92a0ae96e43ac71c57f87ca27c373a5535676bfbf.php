<?php

/* ASFFClubBundle:Le Club:lebureau.html.twig */
class __TwigTemplate_685503b7e89756ba76c43232bc3b8de48309faa4d039c208206890db5d6b2d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutClub.html.twig", "ASFFClubBundle:Le Club:lebureau.html.twig", 3);
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
        $__internal_7d1aa4d956251e335231cf46340ac3becd98e6e7553f800fe8f00cda98cec9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1aa4d956251e335231cf46340ac3becd98e6e7553f800fe8f00cda98cec9d1->enter($__internal_7d1aa4d956251e335231cf46340ac3becd98e6e7553f800fe8f00cda98cec9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Le Club:lebureau.html.twig"));

        $__internal_f3939e575890d8245e47317fbb8027eaa3e568415b8cfb3011fc54202ee7ab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3939e575890d8245e47317fbb8027eaa3e568415b8cfb3011fc54202ee7ab2c->enter($__internal_f3939e575890d8245e47317fbb8027eaa3e568415b8cfb3011fc54202ee7ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Le Club:lebureau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1aa4d956251e335231cf46340ac3becd98e6e7553f800fe8f00cda98cec9d1->leave($__internal_7d1aa4d956251e335231cf46340ac3becd98e6e7553f800fe8f00cda98cec9d1_prof);

        
        $__internal_f3939e575890d8245e47317fbb8027eaa3e568415b8cfb3011fc54202ee7ab2c->leave($__internal_f3939e575890d8245e47317fbb8027eaa3e568415b8cfb3011fc54202ee7ab2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a797d0da2d03e40362a1eec1822fa0fce893b790054879ae1ff020bb4e9aa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a797d0da2d03e40362a1eec1822fa0fce893b790054879ae1ff020bb4e9aa56->enter($__internal_0a797d0da2d03e40362a1eec1822fa0fce893b790054879ae1ff020bb4e9aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d29074a4e9eef62eeaf59a8902cd44daeb98d9f020a40074323ac08bd1eaa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d29074a4e9eef62eeaf59a8902cd44daeb98d9f020a40074323ac08bd1eaa6c->enter($__internal_5d29074a4e9eef62eeaf59a8902cd44daeb98d9f020a40074323ac08bd1eaa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Les membres du bureau</h2>

";
        
        $__internal_5d29074a4e9eef62eeaf59a8902cd44daeb98d9f020a40074323ac08bd1eaa6c->leave($__internal_5d29074a4e9eef62eeaf59a8902cd44daeb98d9f020a40074323ac08bd1eaa6c_prof);

        
        $__internal_0a797d0da2d03e40362a1eec1822fa0fce893b790054879ae1ff020bb4e9aa56->leave($__internal_0a797d0da2d03e40362a1eec1822fa0fce893b790054879ae1ff020bb4e9aa56_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle:Le Club:lebureau.html.twig";
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
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Le Club/lebureau.html.twig #}

{% extends \"ASFFClubBundle::layoutClub.html.twig\" %}

{% block body %}

  <h2>Les membres du bureau</h2>

{% endblock %}", "ASFFClubBundle:Le Club:lebureau.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/Le Club/lebureau.html.twig");
    }
}
