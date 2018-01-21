<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_178cab26be68e090a4aa870c0171c4db36157ce0b09c7bfd879abb9b1e872b3f extends Twig_Template
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
        $__internal_5bf81ac7862140ae8123037fc3f58f9118586c50cfcbcbce3d45526746d4ae41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf81ac7862140ae8123037fc3f58f9118586c50cfcbcbce3d45526746d4ae41->enter($__internal_5bf81ac7862140ae8123037fc3f58f9118586c50cfcbcbce3d45526746d4ae41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8654c5c2dd7fd578cc0574d6401c83f00e7e5e5a06e51de40af2c69f03bc936f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8654c5c2dd7fd578cc0574d6401c83f00e7e5e5a06e51de40af2c69f03bc936f->enter($__internal_8654c5c2dd7fd578cc0574d6401c83f00e7e5e5a06e51de40af2c69f03bc936f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5bf81ac7862140ae8123037fc3f58f9118586c50cfcbcbce3d45526746d4ae41->leave($__internal_5bf81ac7862140ae8123037fc3f58f9118586c50cfcbcbce3d45526746d4ae41_prof);

        
        $__internal_8654c5c2dd7fd578cc0574d6401c83f00e7e5e5a06e51de40af2c69f03bc936f->leave($__internal_8654c5c2dd7fd578cc0574d6401c83f00e7e5e5a06e51de40af2c69f03bc936f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
