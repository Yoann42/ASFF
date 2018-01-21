<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3e7fbece81f7eec3a9ba51924cff234ef4295d885530a3c9dca9645154116c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_617ed07d05a3d0fb0f4306cd7e9032d00dabca55383dfaa2e73933c8992a58c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617ed07d05a3d0fb0f4306cd7e9032d00dabca55383dfaa2e73933c8992a58c6->enter($__internal_617ed07d05a3d0fb0f4306cd7e9032d00dabca55383dfaa2e73933c8992a58c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_df3f59d3d66ca301e92851bdbadfc883b1d9798c64769885ac4c507b7f02bc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3f59d3d66ca301e92851bdbadfc883b1d9798c64769885ac4c507b7f02bc46->enter($__internal_df3f59d3d66ca301e92851bdbadfc883b1d9798c64769885ac4c507b7f02bc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617ed07d05a3d0fb0f4306cd7e9032d00dabca55383dfaa2e73933c8992a58c6->leave($__internal_617ed07d05a3d0fb0f4306cd7e9032d00dabca55383dfaa2e73933c8992a58c6_prof);

        
        $__internal_df3f59d3d66ca301e92851bdbadfc883b1d9798c64769885ac4c507b7f02bc46->leave($__internal_df3f59d3d66ca301e92851bdbadfc883b1d9798c64769885ac4c507b7f02bc46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fa9ca460035d3418004c4c67eab47f254f551a69a9d340d06f5dee90bb05537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa9ca460035d3418004c4c67eab47f254f551a69a9d340d06f5dee90bb05537->enter($__internal_0fa9ca460035d3418004c4c67eab47f254f551a69a9d340d06f5dee90bb05537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fef266779030fe64246858a742932be98ef20c41f990a500786568898792972a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef266779030fe64246858a742932be98ef20c41f990a500786568898792972a->enter($__internal_fef266779030fe64246858a742932be98ef20c41f990a500786568898792972a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fef266779030fe64246858a742932be98ef20c41f990a500786568898792972a->leave($__internal_fef266779030fe64246858a742932be98ef20c41f990a500786568898792972a_prof);

        
        $__internal_0fa9ca460035d3418004c4c67eab47f254f551a69a9d340d06f5dee90bb05537->leave($__internal_0fa9ca460035d3418004c4c67eab47f254f551a69a9d340d06f5dee90bb05537_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
