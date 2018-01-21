<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1b4f8e9c1470b97daf04ae1643f09aff2f17ca7b27b6f8ae3cf9ea44eb0753a7 extends Twig_Template
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
        $__internal_53a90611774c02a24cc54b19cb66bbeda9470a6eb9b77db6e7b0224ce5178de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a90611774c02a24cc54b19cb66bbeda9470a6eb9b77db6e7b0224ce5178de5->enter($__internal_53a90611774c02a24cc54b19cb66bbeda9470a6eb9b77db6e7b0224ce5178de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_51f1b28fccb9e84b20f75cc42210f0628963b6e0a118aafb1150f210352a0b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f1b28fccb9e84b20f75cc42210f0628963b6e0a118aafb1150f210352a0b3c->enter($__internal_51f1b28fccb9e84b20f75cc42210f0628963b6e0a118aafb1150f210352a0b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_53a90611774c02a24cc54b19cb66bbeda9470a6eb9b77db6e7b0224ce5178de5->leave($__internal_53a90611774c02a24cc54b19cb66bbeda9470a6eb9b77db6e7b0224ce5178de5_prof);

        
        $__internal_51f1b28fccb9e84b20f75cc42210f0628963b6e0a118aafb1150f210352a0b3c->leave($__internal_51f1b28fccb9e84b20f75cc42210f0628963b6e0a118aafb1150f210352a0b3c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
