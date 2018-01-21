<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6cd9628487737abebce64afcf35c3fee2093dbe648548260befef02c0c518e50 extends Twig_Template
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
        $__internal_3c80a64362431223f8dc03afbc431b2856d7610b01434228842a17fc5c6c07a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c80a64362431223f8dc03afbc431b2856d7610b01434228842a17fc5c6c07a9->enter($__internal_3c80a64362431223f8dc03afbc431b2856d7610b01434228842a17fc5c6c07a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_4beb26ceaaedfa00d4a715cd5ac2b8fecdab7ab6290d7cb93add4beac9360d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4beb26ceaaedfa00d4a715cd5ac2b8fecdab7ab6290d7cb93add4beac9360d5a->enter($__internal_4beb26ceaaedfa00d4a715cd5ac2b8fecdab7ab6290d7cb93add4beac9360d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3c80a64362431223f8dc03afbc431b2856d7610b01434228842a17fc5c6c07a9->leave($__internal_3c80a64362431223f8dc03afbc431b2856d7610b01434228842a17fc5c6c07a9_prof);

        
        $__internal_4beb26ceaaedfa00d4a715cd5ac2b8fecdab7ab6290d7cb93add4beac9360d5a->leave($__internal_4beb26ceaaedfa00d4a715cd5ac2b8fecdab7ab6290d7cb93add4beac9360d5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
