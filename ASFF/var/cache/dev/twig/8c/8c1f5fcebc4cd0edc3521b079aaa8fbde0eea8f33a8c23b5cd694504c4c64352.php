<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0b3155eb34ecdb05f1eb5ab75db756d27f71d2037b51ddd0b56d0744b028a7cd extends Twig_Template
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
        $__internal_d54e524402fee90578b71830990613ba00b198c8bb6e3b148c818ee7a1cbd0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54e524402fee90578b71830990613ba00b198c8bb6e3b148c818ee7a1cbd0e5->enter($__internal_d54e524402fee90578b71830990613ba00b198c8bb6e3b148c818ee7a1cbd0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_182f651e49ff23bc477aa5637669bf633c6990048a4047e6fc578e228daeb653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182f651e49ff23bc477aa5637669bf633c6990048a4047e6fc578e228daeb653->enter($__internal_182f651e49ff23bc477aa5637669bf633c6990048a4047e6fc578e228daeb653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d54e524402fee90578b71830990613ba00b198c8bb6e3b148c818ee7a1cbd0e5->leave($__internal_d54e524402fee90578b71830990613ba00b198c8bb6e3b148c818ee7a1cbd0e5_prof);

        
        $__internal_182f651e49ff23bc477aa5637669bf633c6990048a4047e6fc578e228daeb653->leave($__internal_182f651e49ff23bc477aa5637669bf633c6990048a4047e6fc578e228daeb653_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
