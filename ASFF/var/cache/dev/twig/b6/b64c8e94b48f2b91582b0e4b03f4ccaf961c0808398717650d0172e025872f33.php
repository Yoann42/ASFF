<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_96888c231022b8b5a4bbcfa5b2bfe8f4b09dabf91ac0fa283d272f1857e8b60e extends Twig_Template
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
        $__internal_866ecd9e8a976bd5f3295b0d01ec2c81e29d466fedbdb051bc18fc142512ef62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866ecd9e8a976bd5f3295b0d01ec2c81e29d466fedbdb051bc18fc142512ef62->enter($__internal_866ecd9e8a976bd5f3295b0d01ec2c81e29d466fedbdb051bc18fc142512ef62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_24b1b3268f31c65e40dbf37d044607427ebbf75036045681f197f3d42499d801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b1b3268f31c65e40dbf37d044607427ebbf75036045681f197f3d42499d801->enter($__internal_24b1b3268f31c65e40dbf37d044607427ebbf75036045681f197f3d42499d801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_866ecd9e8a976bd5f3295b0d01ec2c81e29d466fedbdb051bc18fc142512ef62->leave($__internal_866ecd9e8a976bd5f3295b0d01ec2c81e29d466fedbdb051bc18fc142512ef62_prof);

        
        $__internal_24b1b3268f31c65e40dbf37d044607427ebbf75036045681f197f3d42499d801->leave($__internal_24b1b3268f31c65e40dbf37d044607427ebbf75036045681f197f3d42499d801_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
