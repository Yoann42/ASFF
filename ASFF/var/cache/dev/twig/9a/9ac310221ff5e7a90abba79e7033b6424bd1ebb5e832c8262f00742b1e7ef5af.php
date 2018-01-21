<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_09ba8607697353fe451b2fe7c212c60dc19b1e7489d796451d7e28fb5f301f87 extends Twig_Template
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
        $__internal_65d00ae0ea928a2dc9fe6f4f349f91f59bffa6749c89ab75254ffd8184db24c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d00ae0ea928a2dc9fe6f4f349f91f59bffa6749c89ab75254ffd8184db24c9->enter($__internal_65d00ae0ea928a2dc9fe6f4f349f91f59bffa6749c89ab75254ffd8184db24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2804865c117212c5922dbe306934c14dc32b45a2613e568a26c8ce4af371e7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2804865c117212c5922dbe306934c14dc32b45a2613e568a26c8ce4af371e7c0->enter($__internal_2804865c117212c5922dbe306934c14dc32b45a2613e568a26c8ce4af371e7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_65d00ae0ea928a2dc9fe6f4f349f91f59bffa6749c89ab75254ffd8184db24c9->leave($__internal_65d00ae0ea928a2dc9fe6f4f349f91f59bffa6749c89ab75254ffd8184db24c9_prof);

        
        $__internal_2804865c117212c5922dbe306934c14dc32b45a2613e568a26c8ce4af371e7c0->leave($__internal_2804865c117212c5922dbe306934c14dc32b45a2613e568a26c8ce4af371e7c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
