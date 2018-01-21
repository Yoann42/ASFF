<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6c63a92b98c020f83e7f88f83293cec5071be7e90f1ea33a77561d1a7a898ccc extends Twig_Template
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
        $__internal_945b01d5390b108fb29bc2a2d685144ec35be7f39dbb2fb4cf257b2a1b49a072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945b01d5390b108fb29bc2a2d685144ec35be7f39dbb2fb4cf257b2a1b49a072->enter($__internal_945b01d5390b108fb29bc2a2d685144ec35be7f39dbb2fb4cf257b2a1b49a072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ac71d6aa07b33cb226cf7eb35a98006c20fa48a7fc5b3b77658822bf0c16bec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac71d6aa07b33cb226cf7eb35a98006c20fa48a7fc5b3b77658822bf0c16bec0->enter($__internal_ac71d6aa07b33cb226cf7eb35a98006c20fa48a7fc5b3b77658822bf0c16bec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_945b01d5390b108fb29bc2a2d685144ec35be7f39dbb2fb4cf257b2a1b49a072->leave($__internal_945b01d5390b108fb29bc2a2d685144ec35be7f39dbb2fb4cf257b2a1b49a072_prof);

        
        $__internal_ac71d6aa07b33cb226cf7eb35a98006c20fa48a7fc5b3b77658822bf0c16bec0->leave($__internal_ac71d6aa07b33cb226cf7eb35a98006c20fa48a7fc5b3b77658822bf0c16bec0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
