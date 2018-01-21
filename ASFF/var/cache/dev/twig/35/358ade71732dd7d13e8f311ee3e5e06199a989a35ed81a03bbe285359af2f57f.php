<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_277715c0b76261d65d28ab5de8353854fa5a3ab2ae21ff3c62f3e32833d56a6c extends Twig_Template
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
        $__internal_f2f889f1450da0f1f5748828498a42bb4ae3ebcbd07f21b39a84268484b25153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f889f1450da0f1f5748828498a42bb4ae3ebcbd07f21b39a84268484b25153->enter($__internal_f2f889f1450da0f1f5748828498a42bb4ae3ebcbd07f21b39a84268484b25153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9e606cfb9fa6d14caebd9a59e2e1c0f63ef729826692582e8acb548007118155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e606cfb9fa6d14caebd9a59e2e1c0f63ef729826692582e8acb548007118155->enter($__internal_9e606cfb9fa6d14caebd9a59e2e1c0f63ef729826692582e8acb548007118155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f2f889f1450da0f1f5748828498a42bb4ae3ebcbd07f21b39a84268484b25153->leave($__internal_f2f889f1450da0f1f5748828498a42bb4ae3ebcbd07f21b39a84268484b25153_prof);

        
        $__internal_9e606cfb9fa6d14caebd9a59e2e1c0f63ef729826692582e8acb548007118155->leave($__internal_9e606cfb9fa6d14caebd9a59e2e1c0f63ef729826692582e8acb548007118155_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
