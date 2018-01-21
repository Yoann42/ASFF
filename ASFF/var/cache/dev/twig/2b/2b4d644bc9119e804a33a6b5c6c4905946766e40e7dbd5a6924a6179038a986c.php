<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_ff07da5bf7c317961e155b6bf7a022374c443e5e97c16abd259ca8012920c077 extends Twig_Template
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
        $__internal_9cfb8eecdcfa4c463f689d6e6a61476fca31e90a14fe65b245cbed578c67e44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfb8eecdcfa4c463f689d6e6a61476fca31e90a14fe65b245cbed578c67e44b->enter($__internal_9cfb8eecdcfa4c463f689d6e6a61476fca31e90a14fe65b245cbed578c67e44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_37514fa729818d5694d728055dbc834e3f9d07bbd5717daf8f692eca52611c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37514fa729818d5694d728055dbc834e3f9d07bbd5717daf8f692eca52611c23->enter($__internal_37514fa729818d5694d728055dbc834e3f9d07bbd5717daf8f692eca52611c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo ((((($context["status_code"] ?? $this->getContext($context, "status_code")) . " | ") . ($context["status_text"] ?? $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9cfb8eecdcfa4c463f689d6e6a61476fca31e90a14fe65b245cbed578c67e44b->leave($__internal_9cfb8eecdcfa4c463f689d6e6a61476fca31e90a14fe65b245cbed578c67e44b_prof);

        
        $__internal_37514fa729818d5694d728055dbc834e3f9d07bbd5717daf8f692eca52611c23->leave($__internal_37514fa729818d5694d728055dbc834e3f9d07bbd5717daf8f692eca52611c23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
