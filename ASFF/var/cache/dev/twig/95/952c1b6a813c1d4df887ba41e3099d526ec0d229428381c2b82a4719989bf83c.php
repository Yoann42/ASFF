<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_f139d3ea367bff995f50d51015fbeafa2c7821568e9aab91bfeafd4980f3fc53 extends Twig_Template
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
        $__internal_e8196a67b1ebdeb7b8767498e2837bc6f454a2c934486eaf60e274fcf54c5a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8196a67b1ebdeb7b8767498e2837bc6f454a2c934486eaf60e274fcf54c5a21->enter($__internal_e8196a67b1ebdeb7b8767498e2837bc6f454a2c934486eaf60e274fcf54c5a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_63e42891e160cca0c4223628c6f9834f53ac2c51ad043489f0a1a4065fcb28ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e42891e160cca0c4223628c6f9834f53ac2c51ad043489f0a1a4065fcb28ed->enter($__internal_63e42891e160cca0c4223628c6f9834f53ac2c51ad043489f0a1a4065fcb28ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_e8196a67b1ebdeb7b8767498e2837bc6f454a2c934486eaf60e274fcf54c5a21->leave($__internal_e8196a67b1ebdeb7b8767498e2837bc6f454a2c934486eaf60e274fcf54c5a21_prof);

        
        $__internal_63e42891e160cca0c4223628c6f9834f53ac2c51ad043489f0a1a4065fcb28ed->leave($__internal_63e42891e160cca0c4223628c6f9834f53ac2c51ad043489f0a1a4065fcb28ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
