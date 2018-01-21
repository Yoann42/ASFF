<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dc6b38419a0f86b09ec1855e77f12cf9730ee91fb4ce6cf34fa8b75fd77d7c50 extends Twig_Template
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
        $__internal_db661e51f1615ca2f2d3eb493b9e63770be9c6d2c6f7235b0de088d4f75a2378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db661e51f1615ca2f2d3eb493b9e63770be9c6d2c6f7235b0de088d4f75a2378->enter($__internal_db661e51f1615ca2f2d3eb493b9e63770be9c6d2c6f7235b0de088d4f75a2378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a33dd88a025fc87325485b6ba9d190276e0a14c303bdfa7aff97cf533d3909ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33dd88a025fc87325485b6ba9d190276e0a14c303bdfa7aff97cf533d3909ba->enter($__internal_a33dd88a025fc87325485b6ba9d190276e0a14c303bdfa7aff97cf533d3909ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_db661e51f1615ca2f2d3eb493b9e63770be9c6d2c6f7235b0de088d4f75a2378->leave($__internal_db661e51f1615ca2f2d3eb493b9e63770be9c6d2c6f7235b0de088d4f75a2378_prof);

        
        $__internal_a33dd88a025fc87325485b6ba9d190276e0a14c303bdfa7aff97cf533d3909ba->leave($__internal_a33dd88a025fc87325485b6ba9d190276e0a14c303bdfa7aff97cf533d3909ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
