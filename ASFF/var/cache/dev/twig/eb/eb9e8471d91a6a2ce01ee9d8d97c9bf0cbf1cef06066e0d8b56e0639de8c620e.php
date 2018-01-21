<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fe44b2e9e373333d7e46d6b77dd4baef8b5587690933f07182abbb90250f3b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0594400bf820079629612a918185de065500d90c524d02a0f3ea5400e0423664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0594400bf820079629612a918185de065500d90c524d02a0f3ea5400e0423664->enter($__internal_0594400bf820079629612a918185de065500d90c524d02a0f3ea5400e0423664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4f251ab0e2edebb1e15d3e6ff39010670e9c0b7895a575602c9de9044a94128b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f251ab0e2edebb1e15d3e6ff39010670e9c0b7895a575602c9de9044a94128b->enter($__internal_4f251ab0e2edebb1e15d3e6ff39010670e9c0b7895a575602c9de9044a94128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0594400bf820079629612a918185de065500d90c524d02a0f3ea5400e0423664->leave($__internal_0594400bf820079629612a918185de065500d90c524d02a0f3ea5400e0423664_prof);

        
        $__internal_4f251ab0e2edebb1e15d3e6ff39010670e9c0b7895a575602c9de9044a94128b->leave($__internal_4f251ab0e2edebb1e15d3e6ff39010670e9c0b7895a575602c9de9044a94128b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
