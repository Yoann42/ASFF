<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8a4125dd54b0ad7c0d978ffe1386474e3dcb8908bb3dfdbee27a718086add44a extends Twig_Template
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
        $__internal_991e787a9de4505772207d1059b535c055c3c010c94712a6d630c909143f67f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991e787a9de4505772207d1059b535c055c3c010c94712a6d630c909143f67f8->enter($__internal_991e787a9de4505772207d1059b535c055c3c010c94712a6d630c909143f67f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_026bc47008efabbdfed819f51ca8802aaea26a892062d45aec5dc3d0d8a21f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026bc47008efabbdfed819f51ca8802aaea26a892062d45aec5dc3d0d8a21f36->enter($__internal_026bc47008efabbdfed819f51ca8802aaea26a892062d45aec5dc3d0d8a21f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_991e787a9de4505772207d1059b535c055c3c010c94712a6d630c909143f67f8->leave($__internal_991e787a9de4505772207d1059b535c055c3c010c94712a6d630c909143f67f8_prof);

        
        $__internal_026bc47008efabbdfed819f51ca8802aaea26a892062d45aec5dc3d0d8a21f36->leave($__internal_026bc47008efabbdfed819f51ca8802aaea26a892062d45aec5dc3d0d8a21f36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
