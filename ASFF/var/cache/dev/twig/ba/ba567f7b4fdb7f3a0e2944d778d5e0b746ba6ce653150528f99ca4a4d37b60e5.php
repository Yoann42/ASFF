<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_65bd8f07adfa47c69459126ae389b872bdc385f7c51156bf31001551487af0a0 extends Twig_Template
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
        $__internal_9168431534d30c9ead1e20428d930dd02c2367a5cc29289d3bedce8c25df5524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9168431534d30c9ead1e20428d930dd02c2367a5cc29289d3bedce8c25df5524->enter($__internal_9168431534d30c9ead1e20428d930dd02c2367a5cc29289d3bedce8c25df5524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ed33c0a861fbdaef027335de84490f8ace01aa3fae845de9fb6e0ef8d453f5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed33c0a861fbdaef027335de84490f8ace01aa3fae845de9fb6e0ef8d453f5b8->enter($__internal_ed33c0a861fbdaef027335de84490f8ace01aa3fae845de9fb6e0ef8d453f5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9168431534d30c9ead1e20428d930dd02c2367a5cc29289d3bedce8c25df5524->leave($__internal_9168431534d30c9ead1e20428d930dd02c2367a5cc29289d3bedce8c25df5524_prof);

        
        $__internal_ed33c0a861fbdaef027335de84490f8ace01aa3fae845de9fb6e0ef8d453f5b8->leave($__internal_ed33c0a861fbdaef027335de84490f8ace01aa3fae845de9fb6e0ef8d453f5b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
