<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8ea5844a86fd9d8d317bc8acbaa2d67ad5a6c1ef8dc4cfd1aa2d5737bb4358aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a53a9c74f2d4b38eaba2cca85f0b14a865239f8d88a8ab99727a9a4369588c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a53a9c74f2d4b38eaba2cca85f0b14a865239f8d88a8ab99727a9a4369588c5->enter($__internal_5a53a9c74f2d4b38eaba2cca85f0b14a865239f8d88a8ab99727a9a4369588c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_5af0dd4f68ddca80a39c3681df28ea2a255bcf1fca61e979d9729b7afdd4b36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af0dd4f68ddca80a39c3681df28ea2a255bcf1fca61e979d9729b7afdd4b36a->enter($__internal_5af0dd4f68ddca80a39c3681df28ea2a255bcf1fca61e979d9729b7afdd4b36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a53a9c74f2d4b38eaba2cca85f0b14a865239f8d88a8ab99727a9a4369588c5->leave($__internal_5a53a9c74f2d4b38eaba2cca85f0b14a865239f8d88a8ab99727a9a4369588c5_prof);

        
        $__internal_5af0dd4f68ddca80a39c3681df28ea2a255bcf1fca61e979d9729b7afdd4b36a->leave($__internal_5af0dd4f68ddca80a39c3681df28ea2a255bcf1fca61e979d9729b7afdd4b36a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b9bbd453a36c87b67e83602143bb54426a58b348a2d6e9c9c973b8b557f1449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9bbd453a36c87b67e83602143bb54426a58b348a2d6e9c9c973b8b557f1449->enter($__internal_2b9bbd453a36c87b67e83602143bb54426a58b348a2d6e9c9c973b8b557f1449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7e468df6eebce822e674244c2a98863099ec7f3f650b4b52fbc639a77b157c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e468df6eebce822e674244c2a98863099ec7f3f650b4b52fbc639a77b157c65->enter($__internal_7e468df6eebce822e674244c2a98863099ec7f3f650b4b52fbc639a77b157c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_7e468df6eebce822e674244c2a98863099ec7f3f650b4b52fbc639a77b157c65->leave($__internal_7e468df6eebce822e674244c2a98863099ec7f3f650b4b52fbc639a77b157c65_prof);

        
        $__internal_2b9bbd453a36c87b67e83602143bb54426a58b348a2d6e9c9c973b8b557f1449->leave($__internal_2b9bbd453a36c87b67e83602143bb54426a58b348a2d6e9c9c973b8b557f1449_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
