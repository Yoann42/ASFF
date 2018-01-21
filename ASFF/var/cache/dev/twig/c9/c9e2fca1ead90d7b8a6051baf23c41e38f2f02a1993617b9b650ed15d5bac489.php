<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_572af4f788fcd5dc771742ed17965d3a2da532d15b2bb7bbd2b0e9bb36403cf6 extends Twig_Template
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
        $__internal_21aa92c4333c00f1764a7b137f6491dd5f1bd6bd7cf4a8af5447f3b255259ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21aa92c4333c00f1764a7b137f6491dd5f1bd6bd7cf4a8af5447f3b255259ac2->enter($__internal_21aa92c4333c00f1764a7b137f6491dd5f1bd6bd7cf4a8af5447f3b255259ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d0cbd9ca9bff3b318946464e804b07aee16c3dc7abbc0551ecca120e276f1332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cbd9ca9bff3b318946464e804b07aee16c3dc7abbc0551ecca120e276f1332->enter($__internal_d0cbd9ca9bff3b318946464e804b07aee16c3dc7abbc0551ecca120e276f1332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_21aa92c4333c00f1764a7b137f6491dd5f1bd6bd7cf4a8af5447f3b255259ac2->leave($__internal_21aa92c4333c00f1764a7b137f6491dd5f1bd6bd7cf4a8af5447f3b255259ac2_prof);

        
        $__internal_d0cbd9ca9bff3b318946464e804b07aee16c3dc7abbc0551ecca120e276f1332->leave($__internal_d0cbd9ca9bff3b318946464e804b07aee16c3dc7abbc0551ecca120e276f1332_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
