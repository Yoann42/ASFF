<?php

/* @ASFFClub/Info Tech/reglesdubad.html.twig */
class __TwigTemplate_a8175d67ecdc012e6333faa4b388df39ca2236aa4bdcd072797e3f58cc7da2f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutInfoTech.html.twig", "@ASFFClub/Info Tech/reglesdubad.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutInfoTech.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c215b01a112bf9abd116b2e9a6f805413b7853122056a9793b1faad0f86c5096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c215b01a112bf9abd116b2e9a6f805413b7853122056a9793b1faad0f86c5096->enter($__internal_c215b01a112bf9abd116b2e9a6f805413b7853122056a9793b1faad0f86c5096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Info Tech/reglesdubad.html.twig"));

        $__internal_5398c3c9331f125229df01ce86d7169f777eed843e79a6147492b57fb97c6d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5398c3c9331f125229df01ce86d7169f777eed843e79a6147492b57fb97c6d5c->enter($__internal_5398c3c9331f125229df01ce86d7169f777eed843e79a6147492b57fb97c6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/Info Tech/reglesdubad.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c215b01a112bf9abd116b2e9a6f805413b7853122056a9793b1faad0f86c5096->leave($__internal_c215b01a112bf9abd116b2e9a6f805413b7853122056a9793b1faad0f86c5096_prof);

        
        $__internal_5398c3c9331f125229df01ce86d7169f777eed843e79a6147492b57fb97c6d5c->leave($__internal_5398c3c9331f125229df01ce86d7169f777eed843e79a6147492b57fb97c6d5c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_decc9d5503c44c16273ba7c8abf0c2d283817b4ae0d7787dede92186824f3fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_decc9d5503c44c16273ba7c8abf0c2d283817b4ae0d7787dede92186824f3fa0->enter($__internal_decc9d5503c44c16273ba7c8abf0c2d283817b4ae0d7787dede92186824f3fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b3d2a89a221d31dc4a805b4423eb671eba9844383a01595279802bc845f7ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3d2a89a221d31dc4a805b4423eb671eba9844383a01595279802bc845f7ad7->enter($__internal_0b3d2a89a221d31dc4a805b4423eb671eba9844383a01595279802bc845f7ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Les règles au badminton</h2>

";
        
        $__internal_0b3d2a89a221d31dc4a805b4423eb671eba9844383a01595279802bc845f7ad7->leave($__internal_0b3d2a89a221d31dc4a805b4423eb671eba9844383a01595279802bc845f7ad7_prof);

        
        $__internal_decc9d5503c44c16273ba7c8abf0c2d283817b4ae0d7787dede92186824f3fa0->leave($__internal_decc9d5503c44c16273ba7c8abf0c2d283817b4ae0d7787dede92186824f3fa0_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/Info Tech/reglesdubad.html.twig";
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
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Info Tech/reglesdubad.html.twig #}

{% extends \"ASFFClubBundle::layoutInfoTech.html.twig\" %}

{% block body %}

  <h2>Les règles au badminton</h2>

{% endblock %}", "@ASFFClub/Info Tech/reglesdubad.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\Info Tech\\reglesdubad.html.twig");
    }
}
