<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_8a9a6214557f30e459a869ad52f5404abb894f5da2661cb851dd9de14ef3d9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_cc934fbe96b52f61134e4188aaad46751931310da9ba8e45c4be64d23a6bd502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc934fbe96b52f61134e4188aaad46751931310da9ba8e45c4be64d23a6bd502->enter($__internal_cc934fbe96b52f61134e4188aaad46751931310da9ba8e45c4be64d23a6bd502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_0da65e30372252ce839cbe16e1bea7f5dc1d36c4338a2f3c79f20579af7f1649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da65e30372252ce839cbe16e1bea7f5dc1d36c4338a2f3c79f20579af7f1649->enter($__internal_0da65e30372252ce839cbe16e1bea7f5dc1d36c4338a2f3c79f20579af7f1649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc934fbe96b52f61134e4188aaad46751931310da9ba8e45c4be64d23a6bd502->leave($__internal_cc934fbe96b52f61134e4188aaad46751931310da9ba8e45c4be64d23a6bd502_prof);

        
        $__internal_0da65e30372252ce839cbe16e1bea7f5dc1d36c4338a2f3c79f20579af7f1649->leave($__internal_0da65e30372252ce839cbe16e1bea7f5dc1d36c4338a2f3c79f20579af7f1649_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a23080337999264ef95be37ed49e6ee525f0d0ceb581498aaf076d69a7ea0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a23080337999264ef95be37ed49e6ee525f0d0ceb581498aaf076d69a7ea0bb->enter($__internal_6a23080337999264ef95be37ed49e6ee525f0d0ceb581498aaf076d69a7ea0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd8a0f493d949fdfc905bee736a18c8f174884b55d2d0990c1a7fcac77c2757c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8a0f493d949fdfc905bee736a18c8f174884b55d2d0990c1a7fcac77c2757c->enter($__internal_fd8a0f493d949fdfc905bee736a18c8f174884b55d2d0990c1a7fcac77c2757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fd8a0f493d949fdfc905bee736a18c8f174884b55d2d0990c1a7fcac77c2757c->leave($__internal_fd8a0f493d949fdfc905bee736a18c8f174884b55d2d0990c1a7fcac77c2757c_prof);

        
        $__internal_6a23080337999264ef95be37ed49e6ee525f0d0ceb581498aaf076d69a7ea0bb->leave($__internal_6a23080337999264ef95be37ed49e6ee525f0d0ceb581498aaf076d69a7ea0bb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
