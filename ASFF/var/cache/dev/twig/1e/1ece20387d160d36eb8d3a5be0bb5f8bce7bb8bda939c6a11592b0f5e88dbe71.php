<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_81f577ffa07b149badcdfe071bc15b0ae63e6032b4d8cecaba028bd28f9ec724 extends Twig_Template
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
        $__internal_3453d017acbbd38a962cca736e6a034b9fa66ef7760915a71d936b4687f17a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3453d017acbbd38a962cca736e6a034b9fa66ef7760915a71d936b4687f17a5c->enter($__internal_3453d017acbbd38a962cca736e6a034b9fa66ef7760915a71d936b4687f17a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f9958bc3080e9e447d961a0cd9796af8fbc73bd7d8b8983bddfc3f27df824a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9958bc3080e9e447d961a0cd9796af8fbc73bd7d8b8983bddfc3f27df824a37->enter($__internal_f9958bc3080e9e447d961a0cd9796af8fbc73bd7d8b8983bddfc3f27df824a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3453d017acbbd38a962cca736e6a034b9fa66ef7760915a71d936b4687f17a5c->leave($__internal_3453d017acbbd38a962cca736e6a034b9fa66ef7760915a71d936b4687f17a5c_prof);

        
        $__internal_f9958bc3080e9e447d961a0cd9796af8fbc73bd7d8b8983bddfc3f27df824a37->leave($__internal_f9958bc3080e9e447d961a0cd9796af8fbc73bd7d8b8983bddfc3f27df824a37_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
