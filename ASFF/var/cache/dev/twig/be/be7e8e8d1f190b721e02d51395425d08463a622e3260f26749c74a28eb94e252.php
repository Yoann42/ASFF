<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_85091390762a0a5f5cb57fe17329755498b8bec010ebb5c4077cc22bf0844579 extends Twig_Template
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
        $__internal_804aca8070ca7383ca68a894eba698bc3872f48aa4ed1953efed334a65dbb2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804aca8070ca7383ca68a894eba698bc3872f48aa4ed1953efed334a65dbb2e8->enter($__internal_804aca8070ca7383ca68a894eba698bc3872f48aa4ed1953efed334a65dbb2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c08b4c519f29038425521cc49c981e62f4df6f3a872e1e4a62deb83132264392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08b4c519f29038425521cc49c981e62f4df6f3a872e1e4a62deb83132264392->enter($__internal_c08b4c519f29038425521cc49c981e62f4df6f3a872e1e4a62deb83132264392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_804aca8070ca7383ca68a894eba698bc3872f48aa4ed1953efed334a65dbb2e8->leave($__internal_804aca8070ca7383ca68a894eba698bc3872f48aa4ed1953efed334a65dbb2e8_prof);

        
        $__internal_c08b4c519f29038425521cc49c981e62f4df6f3a872e1e4a62deb83132264392->leave($__internal_c08b4c519f29038425521cc49c981e62f4df6f3a872e1e4a62deb83132264392_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
