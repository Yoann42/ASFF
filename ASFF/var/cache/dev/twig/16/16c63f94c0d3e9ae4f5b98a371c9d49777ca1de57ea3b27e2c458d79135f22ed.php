<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_876e37ec2c15c54b5dccba5fad8d4471a7160d16fc68586dc1355e168c2f46e9 extends Twig_Template
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
        $__internal_fafd709e10e70b90a21a254fb85d79cb6cb0d87026812ccc6ab92496189b857d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafd709e10e70b90a21a254fb85d79cb6cb0d87026812ccc6ab92496189b857d->enter($__internal_fafd709e10e70b90a21a254fb85d79cb6cb0d87026812ccc6ab92496189b857d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c6cd5f09fdfb1589a6f16a46c50344ea1a48ec90e055b4345d09d36c980c1ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cd5f09fdfb1589a6f16a46c50344ea1a48ec90e055b4345d09d36c980c1ba5->enter($__internal_c6cd5f09fdfb1589a6f16a46c50344ea1a48ec90e055b4345d09d36c980c1ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fafd709e10e70b90a21a254fb85d79cb6cb0d87026812ccc6ab92496189b857d->leave($__internal_fafd709e10e70b90a21a254fb85d79cb6cb0d87026812ccc6ab92496189b857d_prof);

        
        $__internal_c6cd5f09fdfb1589a6f16a46c50344ea1a48ec90e055b4345d09d36c980c1ba5->leave($__internal_c6cd5f09fdfb1589a6f16a46c50344ea1a48ec90e055b4345d09d36c980c1ba5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
