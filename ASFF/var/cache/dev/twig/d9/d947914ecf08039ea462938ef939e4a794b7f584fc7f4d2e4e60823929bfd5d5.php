<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7d29810473eed6f101893c95be9d6df3897fdf0a3b6a0016c395e5bf9251bd13 extends Twig_Template
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
        $__internal_c0fe60db65c0cfbbbee3b00bcb52036a93676792c05812fa5ec4fac895ad0b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fe60db65c0cfbbbee3b00bcb52036a93676792c05812fa5ec4fac895ad0b68->enter($__internal_c0fe60db65c0cfbbbee3b00bcb52036a93676792c05812fa5ec4fac895ad0b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1c3f2bf91efc11bc420cc6e950c5ed7354c32f69c27397b02669e42e291e4a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3f2bf91efc11bc420cc6e950c5ed7354c32f69c27397b02669e42e291e4a21->enter($__internal_1c3f2bf91efc11bc420cc6e950c5ed7354c32f69c27397b02669e42e291e4a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c0fe60db65c0cfbbbee3b00bcb52036a93676792c05812fa5ec4fac895ad0b68->leave($__internal_c0fe60db65c0cfbbbee3b00bcb52036a93676792c05812fa5ec4fac895ad0b68_prof);

        
        $__internal_1c3f2bf91efc11bc420cc6e950c5ed7354c32f69c27397b02669e42e291e4a21->leave($__internal_1c3f2bf91efc11bc420cc6e950c5ed7354c32f69c27397b02669e42e291e4a21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
