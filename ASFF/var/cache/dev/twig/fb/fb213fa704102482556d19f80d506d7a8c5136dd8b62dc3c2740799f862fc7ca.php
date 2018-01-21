<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d51864c676fb4a82194f8c9e09acc37488b51b8683363b5c8355d74d9b2c1c17 extends Twig_Template
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
        $__internal_99fbe9b786cdda7a4df4febdcfee527020ab955362fc9de61081ac840645beae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fbe9b786cdda7a4df4febdcfee527020ab955362fc9de61081ac840645beae->enter($__internal_99fbe9b786cdda7a4df4febdcfee527020ab955362fc9de61081ac840645beae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8c80cfc4a695b938dacbe2d698e1a072fb1278049913e7f7e125f08e7cc7c997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c80cfc4a695b938dacbe2d698e1a072fb1278049913e7f7e125f08e7cc7c997->enter($__internal_8c80cfc4a695b938dacbe2d698e1a072fb1278049913e7f7e125f08e7cc7c997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_99fbe9b786cdda7a4df4febdcfee527020ab955362fc9de61081ac840645beae->leave($__internal_99fbe9b786cdda7a4df4febdcfee527020ab955362fc9de61081ac840645beae_prof);

        
        $__internal_8c80cfc4a695b938dacbe2d698e1a072fb1278049913e7f7e125f08e7cc7c997->leave($__internal_8c80cfc4a695b938dacbe2d698e1a072fb1278049913e7f7e125f08e7cc7c997_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
