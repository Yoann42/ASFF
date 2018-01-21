<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a05cd48056cf01426bc4a996651f95638cde024966e28ae54b0b0c83c8762e42 extends Twig_Template
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
        $__internal_8e1fae2ac1d070735d6ccb3791bf13314846959ca5f630daca4832b9b3d6e153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1fae2ac1d070735d6ccb3791bf13314846959ca5f630daca4832b9b3d6e153->enter($__internal_8e1fae2ac1d070735d6ccb3791bf13314846959ca5f630daca4832b9b3d6e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_beca1613b0990f80ad2d965edf5a6b40bf8ca62a85989f9f9aadf536a1e95045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beca1613b0990f80ad2d965edf5a6b40bf8ca62a85989f9f9aadf536a1e95045->enter($__internal_beca1613b0990f80ad2d965edf5a6b40bf8ca62a85989f9f9aadf536a1e95045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8e1fae2ac1d070735d6ccb3791bf13314846959ca5f630daca4832b9b3d6e153->leave($__internal_8e1fae2ac1d070735d6ccb3791bf13314846959ca5f630daca4832b9b3d6e153_prof);

        
        $__internal_beca1613b0990f80ad2d965edf5a6b40bf8ca62a85989f9f9aadf536a1e95045->leave($__internal_beca1613b0990f80ad2d965edf5a6b40bf8ca62a85989f9f9aadf536a1e95045_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
