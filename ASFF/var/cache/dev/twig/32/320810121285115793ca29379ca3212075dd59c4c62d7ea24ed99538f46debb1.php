<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_967ca8f68c8f6949a08940683057c1d6c52f7768ee651df14ca77a90d84a52fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c27027517915ac572047ec52d47e28ad0cef5a64139b373252d64c8f106c215c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27027517915ac572047ec52d47e28ad0cef5a64139b373252d64c8f106c215c->enter($__internal_c27027517915ac572047ec52d47e28ad0cef5a64139b373252d64c8f106c215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_6a976222a9fa04182c477a972702e8fe02c07f6a19183ecbe5a6bae051292a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a976222a9fa04182c477a972702e8fe02c07f6a19183ecbe5a6bae051292a60->enter($__internal_6a976222a9fa04182c477a972702e8fe02c07f6a19183ecbe5a6bae051292a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27027517915ac572047ec52d47e28ad0cef5a64139b373252d64c8f106c215c->leave($__internal_c27027517915ac572047ec52d47e28ad0cef5a64139b373252d64c8f106c215c_prof);

        
        $__internal_6a976222a9fa04182c477a972702e8fe02c07f6a19183ecbe5a6bae051292a60->leave($__internal_6a976222a9fa04182c477a972702e8fe02c07f6a19183ecbe5a6bae051292a60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73c463e9555d4d8b5746461aaa34c26060c0d8bcc7705322007c56247082ad2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c463e9555d4d8b5746461aaa34c26060c0d8bcc7705322007c56247082ad2f->enter($__internal_73c463e9555d4d8b5746461aaa34c26060c0d8bcc7705322007c56247082ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95eab8739f4a749ed4bbd5aa5d1d329edbb192821a5f4fbe9e9703ab42aaa2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95eab8739f4a749ed4bbd5aa5d1d329edbb192821a5f4fbe9e9703ab42aaa2bb->enter($__internal_95eab8739f4a749ed4bbd5aa5d1d329edbb192821a5f4fbe9e9703ab42aaa2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_95eab8739f4a749ed4bbd5aa5d1d329edbb192821a5f4fbe9e9703ab42aaa2bb->leave($__internal_95eab8739f4a749ed4bbd5aa5d1d329edbb192821a5f4fbe9e9703ab42aaa2bb_prof);

        
        $__internal_73c463e9555d4d8b5746461aaa34c26060c0d8bcc7705322007c56247082ad2f->leave($__internal_73c463e9555d4d8b5746461aaa34c26060c0d8bcc7705322007c56247082ad2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
