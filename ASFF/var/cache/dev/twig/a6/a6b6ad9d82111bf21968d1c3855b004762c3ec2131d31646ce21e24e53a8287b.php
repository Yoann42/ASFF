<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d5c25669ebbb6b69f854cf34f9638852c659aff4ba1bed589fcf608c7d81db4d extends Twig_Template
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
        $__internal_c8ac30a17efdd1172d32a528f8590b010bd5c21b3dce7a5ec9b46f2ae71a9dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ac30a17efdd1172d32a528f8590b010bd5c21b3dce7a5ec9b46f2ae71a9dd3->enter($__internal_c8ac30a17efdd1172d32a528f8590b010bd5c21b3dce7a5ec9b46f2ae71a9dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_16d29e8c9463804b2ddec9d17ff3785cdda1db4232524909af5194ebde19e83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d29e8c9463804b2ddec9d17ff3785cdda1db4232524909af5194ebde19e83c->enter($__internal_16d29e8c9463804b2ddec9d17ff3785cdda1db4232524909af5194ebde19e83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c8ac30a17efdd1172d32a528f8590b010bd5c21b3dce7a5ec9b46f2ae71a9dd3->leave($__internal_c8ac30a17efdd1172d32a528f8590b010bd5c21b3dce7a5ec9b46f2ae71a9dd3_prof);

        
        $__internal_16d29e8c9463804b2ddec9d17ff3785cdda1db4232524909af5194ebde19e83c->leave($__internal_16d29e8c9463804b2ddec9d17ff3785cdda1db4232524909af5194ebde19e83c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
