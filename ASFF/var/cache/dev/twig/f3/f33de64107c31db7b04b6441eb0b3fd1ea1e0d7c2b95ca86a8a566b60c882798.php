<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_86b628c2408a7e19b555c184047927c1cf6022bab7f09bd1790c7c3d822a38b9 extends Twig_Template
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
        $__internal_093e261d778d14d345de09dc13de3f0de6a8ff05e8188a3855b9189fd87f4abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093e261d778d14d345de09dc13de3f0de6a8ff05e8188a3855b9189fd87f4abe->enter($__internal_093e261d778d14d345de09dc13de3f0de6a8ff05e8188a3855b9189fd87f4abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b6f595f83b9ce09c58ffbb66a4f7b6e97fcf4b11e2c95b3bf81e3a47f49f0307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f595f83b9ce09c58ffbb66a4f7b6e97fcf4b11e2c95b3bf81e3a47f49f0307->enter($__internal_b6f595f83b9ce09c58ffbb66a4f7b6e97fcf4b11e2c95b3bf81e3a47f49f0307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_093e261d778d14d345de09dc13de3f0de6a8ff05e8188a3855b9189fd87f4abe->leave($__internal_093e261d778d14d345de09dc13de3f0de6a8ff05e8188a3855b9189fd87f4abe_prof);

        
        $__internal_b6f595f83b9ce09c58ffbb66a4f7b6e97fcf4b11e2c95b3bf81e3a47f49f0307->leave($__internal_b6f595f83b9ce09c58ffbb66a4f7b6e97fcf4b11e2c95b3bf81e3a47f49f0307_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
