<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2482a38638cab51b900471e3de0e33bca525ada44d04507d6c99c7d1e6fd8096 extends Twig_Template
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
        $__internal_1819971a42e40664ffae5d1e3d419d06cc8b39af5e6c38a8e4c01d97c15353d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1819971a42e40664ffae5d1e3d419d06cc8b39af5e6c38a8e4c01d97c15353d3->enter($__internal_1819971a42e40664ffae5d1e3d419d06cc8b39af5e6c38a8e4c01d97c15353d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0ceb642ed323a69d0d03036be74e87c3d813058f33aa59a1181b136096c8f3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ceb642ed323a69d0d03036be74e87c3d813058f33aa59a1181b136096c8f3d2->enter($__internal_0ceb642ed323a69d0d03036be74e87c3d813058f33aa59a1181b136096c8f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1819971a42e40664ffae5d1e3d419d06cc8b39af5e6c38a8e4c01d97c15353d3->leave($__internal_1819971a42e40664ffae5d1e3d419d06cc8b39af5e6c38a8e4c01d97c15353d3_prof);

        
        $__internal_0ceb642ed323a69d0d03036be74e87c3d813058f33aa59a1181b136096c8f3d2->leave($__internal_0ceb642ed323a69d0d03036be74e87c3d813058f33aa59a1181b136096c8f3d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
