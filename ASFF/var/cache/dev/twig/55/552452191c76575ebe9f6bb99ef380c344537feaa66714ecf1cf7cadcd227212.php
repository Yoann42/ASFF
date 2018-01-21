<?php

/* ASFFClubBundle:Le Club:association.html.twig */
class __TwigTemplate_89439935a264bbc469c8ba568ad6beb5210f684b48d925bb4aa2162809384cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutClub.html.twig", "ASFFClubBundle:Le Club:association.html.twig", 3);
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
        $__internal_01edbb7864888d0d25a2b44466e8eecd94c6caac0726728c1577122581fa9f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01edbb7864888d0d25a2b44466e8eecd94c6caac0726728c1577122581fa9f99->enter($__internal_01edbb7864888d0d25a2b44466e8eecd94c6caac0726728c1577122581fa9f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Le Club:association.html.twig"));

        $__internal_859831064ccd77fa332fd4a3f1a07cb27d5582bca7ec13bdf6853d5812bd080f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859831064ccd77fa332fd4a3f1a07cb27d5582bca7ec13bdf6853d5812bd080f->enter($__internal_859831064ccd77fa332fd4a3f1a07cb27d5582bca7ec13bdf6853d5812bd080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Le Club:association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01edbb7864888d0d25a2b44466e8eecd94c6caac0726728c1577122581fa9f99->leave($__internal_01edbb7864888d0d25a2b44466e8eecd94c6caac0726728c1577122581fa9f99_prof);

        
        $__internal_859831064ccd77fa332fd4a3f1a07cb27d5582bca7ec13bdf6853d5812bd080f->leave($__internal_859831064ccd77fa332fd4a3f1a07cb27d5582bca7ec13bdf6853d5812bd080f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33735694abe24634001fc8528455ead8f2ed1d7598c0fc6e4e353e9eb259e619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33735694abe24634001fc8528455ead8f2ed1d7598c0fc6e4e353e9eb259e619->enter($__internal_33735694abe24634001fc8528455ead8f2ed1d7598c0fc6e4e353e9eb259e619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_caeb6ec5bcb66bb7f27a377a025e8ebcfd2f4241d7fd6fd2ba72ebf3761dbb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caeb6ec5bcb66bb7f27a377a025e8ebcfd2f4241d7fd6fd2ba72ebf3761dbb4b->enter($__internal_caeb6ec5bcb66bb7f27a377a025e8ebcfd2f4241d7fd6fd2ba72ebf3761dbb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>L'association</h2>

";
        
        $__internal_caeb6ec5bcb66bb7f27a377a025e8ebcfd2f4241d7fd6fd2ba72ebf3761dbb4b->leave($__internal_caeb6ec5bcb66bb7f27a377a025e8ebcfd2f4241d7fd6fd2ba72ebf3761dbb4b_prof);

        
        $__internal_33735694abe24634001fc8528455ead8f2ed1d7598c0fc6e4e353e9eb259e619->leave($__internal_33735694abe24634001fc8528455ead8f2ed1d7598c0fc6e4e353e9eb259e619_prof);

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

{% block body %}

  <h2>L'association</h2>

{% endblock %}", "ASFFClubBundle:Le Club:association.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/Le Club/association.html.twig");
    }
}
