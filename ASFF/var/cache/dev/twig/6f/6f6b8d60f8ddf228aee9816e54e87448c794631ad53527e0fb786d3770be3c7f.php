<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e67854d80a139107860b6bab3dbf78781d22abc0a782d028da03908cfc6d2450 extends Twig_Template
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
        $__internal_bc1ea9785b664d357373d36b53ded692704a5ca695e0cd1bc2e051ec2f1376af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1ea9785b664d357373d36b53ded692704a5ca695e0cd1bc2e051ec2f1376af->enter($__internal_bc1ea9785b664d357373d36b53ded692704a5ca695e0cd1bc2e051ec2f1376af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2a2451a684eb3c63a72ec3b0ad859118568fc5c381dad88dd617612d45f420c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2451a684eb3c63a72ec3b0ad859118568fc5c381dad88dd617612d45f420c9->enter($__internal_2a2451a684eb3c63a72ec3b0ad859118568fc5c381dad88dd617612d45f420c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_bc1ea9785b664d357373d36b53ded692704a5ca695e0cd1bc2e051ec2f1376af->leave($__internal_bc1ea9785b664d357373d36b53ded692704a5ca695e0cd1bc2e051ec2f1376af_prof);

        
        $__internal_2a2451a684eb3c63a72ec3b0ad859118568fc5c381dad88dd617612d45f420c9->leave($__internal_2a2451a684eb3c63a72ec3b0ad859118568fc5c381dad88dd617612d45f420c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
