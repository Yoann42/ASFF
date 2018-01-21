<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_899a4cbaa3703bfc2850f2d34f9851e5d2fc04ca0142b6f05634b5f0508af1a0 extends Twig_Template
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
        $__internal_8eec80d4c037e3f49fa6db5c57df86704f5a90bf906e2622c4674f9a9079a93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eec80d4c037e3f49fa6db5c57df86704f5a90bf906e2622c4674f9a9079a93d->enter($__internal_8eec80d4c037e3f49fa6db5c57df86704f5a90bf906e2622c4674f9a9079a93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_79bfe2c4eca8bc34b788eae2d1a2d442b407e13406c391bfd1b2d151919978fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bfe2c4eca8bc34b788eae2d1a2d442b407e13406c391bfd1b2d151919978fc->enter($__internal_79bfe2c4eca8bc34b788eae2d1a2d442b407e13406c391bfd1b2d151919978fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8eec80d4c037e3f49fa6db5c57df86704f5a90bf906e2622c4674f9a9079a93d->leave($__internal_8eec80d4c037e3f49fa6db5c57df86704f5a90bf906e2622c4674f9a9079a93d_prof);

        
        $__internal_79bfe2c4eca8bc34b788eae2d1a2d442b407e13406c391bfd1b2d151919978fc->leave($__internal_79bfe2c4eca8bc34b788eae2d1a2d442b407e13406c391bfd1b2d151919978fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
