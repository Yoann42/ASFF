<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_782ce0945e76b29e77a9d33770368088f1bfeedd7913879877af7441033f19b0 extends Twig_Template
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
        $__internal_11cec9508be948a42c8786f4bfaf4c064b75d8ebb0f127ecfa3c42d7ed6264b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cec9508be948a42c8786f4bfaf4c064b75d8ebb0f127ecfa3c42d7ed6264b0->enter($__internal_11cec9508be948a42c8786f4bfaf4c064b75d8ebb0f127ecfa3c42d7ed6264b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_455d7fa736fba3c954f686fb2e1ee214092eb1bbf120269388f93db36f09bcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455d7fa736fba3c954f686fb2e1ee214092eb1bbf120269388f93db36f09bcbb->enter($__internal_455d7fa736fba3c954f686fb2e1ee214092eb1bbf120269388f93db36f09bcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_11cec9508be948a42c8786f4bfaf4c064b75d8ebb0f127ecfa3c42d7ed6264b0->leave($__internal_11cec9508be948a42c8786f4bfaf4c064b75d8ebb0f127ecfa3c42d7ed6264b0_prof);

        
        $__internal_455d7fa736fba3c954f686fb2e1ee214092eb1bbf120269388f93db36f09bcbb->leave($__internal_455d7fa736fba3c954f686fb2e1ee214092eb1bbf120269388f93db36f09bcbb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
