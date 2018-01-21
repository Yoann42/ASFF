<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_68b147fd731af6f3063c1b95607c9ccfd971ecaec7d170f660f75bee50716352 extends Twig_Template
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
        $__internal_a0fbb1e1115d383d47468050b73f79d28f1a8265e99911cd618fb720a264e004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fbb1e1115d383d47468050b73f79d28f1a8265e99911cd618fb720a264e004->enter($__internal_a0fbb1e1115d383d47468050b73f79d28f1a8265e99911cd618fb720a264e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c61c98e5191455df465381ede638122eb65792c201fa156b17bd8949657757a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61c98e5191455df465381ede638122eb65792c201fa156b17bd8949657757a1->enter($__internal_c61c98e5191455df465381ede638122eb65792c201fa156b17bd8949657757a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a0fbb1e1115d383d47468050b73f79d28f1a8265e99911cd618fb720a264e004->leave($__internal_a0fbb1e1115d383d47468050b73f79d28f1a8265e99911cd618fb720a264e004_prof);

        
        $__internal_c61c98e5191455df465381ede638122eb65792c201fa156b17bd8949657757a1->leave($__internal_c61c98e5191455df465381ede638122eb65792c201fa156b17bd8949657757a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
