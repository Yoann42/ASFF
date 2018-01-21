<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_865c8d7a04a01ab48f7c50f9ded83824f5e0b5abe4862c8211acb371a092c279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_15bd1d7eaa2144d1a52ddcaf11508aac6422f82533924f1abfcecb9675ba2d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bd1d7eaa2144d1a52ddcaf11508aac6422f82533924f1abfcecb9675ba2d5a->enter($__internal_15bd1d7eaa2144d1a52ddcaf11508aac6422f82533924f1abfcecb9675ba2d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_6f8c586719da0caa9b5df9eb87793a2efb0ee5463e1f7d6974ca8549ece07d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8c586719da0caa9b5df9eb87793a2efb0ee5463e1f7d6974ca8549ece07d49->enter($__internal_6f8c586719da0caa9b5df9eb87793a2efb0ee5463e1f7d6974ca8549ece07d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15bd1d7eaa2144d1a52ddcaf11508aac6422f82533924f1abfcecb9675ba2d5a->leave($__internal_15bd1d7eaa2144d1a52ddcaf11508aac6422f82533924f1abfcecb9675ba2d5a_prof);

        
        $__internal_6f8c586719da0caa9b5df9eb87793a2efb0ee5463e1f7d6974ca8549ece07d49->leave($__internal_6f8c586719da0caa9b5df9eb87793a2efb0ee5463e1f7d6974ca8549ece07d49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e8f18baf5611c9ef5d2dea4315c0d09efc98e6d8ba8061b7cc6225b444dbc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8f18baf5611c9ef5d2dea4315c0d09efc98e6d8ba8061b7cc6225b444dbc37->enter($__internal_1e8f18baf5611c9ef5d2dea4315c0d09efc98e6d8ba8061b7cc6225b444dbc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20cdc72209e0636686b60aa5d8cfa22bf9dc782486bad82595fcf3ae60482df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cdc72209e0636686b60aa5d8cfa22bf9dc782486bad82595fcf3ae60482df3->enter($__internal_20cdc72209e0636686b60aa5d8cfa22bf9dc782486bad82595fcf3ae60482df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_20cdc72209e0636686b60aa5d8cfa22bf9dc782486bad82595fcf3ae60482df3->leave($__internal_20cdc72209e0636686b60aa5d8cfa22bf9dc782486bad82595fcf3ae60482df3_prof);

        
        $__internal_1e8f18baf5611c9ef5d2dea4315c0d09efc98e6d8ba8061b7cc6225b444dbc37->leave($__internal_1e8f18baf5611c9ef5d2dea4315c0d09efc98e6d8ba8061b7cc6225b444dbc37_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
