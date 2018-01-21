<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_83903156e41adafbef49f87500139e252a5cdfec3777029dde392d9e0980dc66 extends Twig_Template
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
        $__internal_454c5316c82b720b841e3c04108201e1a137cde23a9b589403fde7e303f19f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454c5316c82b720b841e3c04108201e1a137cde23a9b589403fde7e303f19f17->enter($__internal_454c5316c82b720b841e3c04108201e1a137cde23a9b589403fde7e303f19f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1aac0e8a4032fd508b987df1b758900b901cf611a74ed33a052011cc4f54f368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aac0e8a4032fd508b987df1b758900b901cf611a74ed33a052011cc4f54f368->enter($__internal_1aac0e8a4032fd508b987df1b758900b901cf611a74ed33a052011cc4f54f368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_454c5316c82b720b841e3c04108201e1a137cde23a9b589403fde7e303f19f17->leave($__internal_454c5316c82b720b841e3c04108201e1a137cde23a9b589403fde7e303f19f17_prof);

        
        $__internal_1aac0e8a4032fd508b987df1b758900b901cf611a74ed33a052011cc4f54f368->leave($__internal_1aac0e8a4032fd508b987df1b758900b901cf611a74ed33a052011cc4f54f368_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
