<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b20f02bd1cd34fecf6f0691c13587792dd738b954597c5393ec43be7b700dfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20f02bd1cd34fecf6f0691c13587792dd738b954597c5393ec43be7b700dfa3->enter($__internal_b20f02bd1cd34fecf6f0691c13587792dd738b954597c5393ec43be7b700dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cf243f8425ae9cee808c8bbd5cb8927052415dcaafb6bad33fadff97cf2246fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf243f8425ae9cee808c8bbd5cb8927052415dcaafb6bad33fadff97cf2246fa->enter($__internal_cf243f8425ae9cee808c8bbd5cb8927052415dcaafb6bad33fadff97cf2246fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b20f02bd1cd34fecf6f0691c13587792dd738b954597c5393ec43be7b700dfa3->leave($__internal_b20f02bd1cd34fecf6f0691c13587792dd738b954597c5393ec43be7b700dfa3_prof);

        
        $__internal_cf243f8425ae9cee808c8bbd5cb8927052415dcaafb6bad33fadff97cf2246fa->leave($__internal_cf243f8425ae9cee808c8bbd5cb8927052415dcaafb6bad33fadff97cf2246fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b5bf96185c44d8f464b6d3ee56366d1f874a3046034cfaaab1ef598726fd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b5bf96185c44d8f464b6d3ee56366d1f874a3046034cfaaab1ef598726fd19->enter($__internal_66b5bf96185c44d8f464b6d3ee56366d1f874a3046034cfaaab1ef598726fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8b5dd5029d39c378a458d53a7b5bdb1c78bf74fb7565ed0dc397392818c679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b5dd5029d39c378a458d53a7b5bdb1c78bf74fb7565ed0dc397392818c679b->enter($__internal_a8b5dd5029d39c378a458d53a7b5bdb1c78bf74fb7565ed0dc397392818c679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a8b5dd5029d39c378a458d53a7b5bdb1c78bf74fb7565ed0dc397392818c679b->leave($__internal_a8b5dd5029d39c378a458d53a7b5bdb1c78bf74fb7565ed0dc397392818c679b_prof);

        
        $__internal_66b5bf96185c44d8f464b6d3ee56366d1f874a3046034cfaaab1ef598726fd19->leave($__internal_66b5bf96185c44d8f464b6d3ee56366d1f874a3046034cfaaab1ef598726fd19_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a87ff282a6a99e116fecf452fe7f4435d603cb122cabbac467ed79aa869edd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87ff282a6a99e116fecf452fe7f4435d603cb122cabbac467ed79aa869edd75->enter($__internal_a87ff282a6a99e116fecf452fe7f4435d603cb122cabbac467ed79aa869edd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d1c9f3a2a93398e838d355e35e1cc240f9b384adf2f89c3a9522d70b1b6aecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1c9f3a2a93398e838d355e35e1cc240f9b384adf2f89c3a9522d70b1b6aecd->enter($__internal_0d1c9f3a2a93398e838d355e35e1cc240f9b384adf2f89c3a9522d70b1b6aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0d1c9f3a2a93398e838d355e35e1cc240f9b384adf2f89c3a9522d70b1b6aecd->leave($__internal_0d1c9f3a2a93398e838d355e35e1cc240f9b384adf2f89c3a9522d70b1b6aecd_prof);

        
        $__internal_a87ff282a6a99e116fecf452fe7f4435d603cb122cabbac467ed79aa869edd75->leave($__internal_a87ff282a6a99e116fecf452fe7f4435d603cb122cabbac467ed79aa869edd75_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_890a1bb53a721acd75b222d1728ddebbb2f25da23053c824c7b20724b053ba02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890a1bb53a721acd75b222d1728ddebbb2f25da23053c824c7b20724b053ba02->enter($__internal_890a1bb53a721acd75b222d1728ddebbb2f25da23053c824c7b20724b053ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23ecd698ceca9245deb671d46a69c2bf1afb996dacfd17eefa102adb0dd32462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ecd698ceca9245deb671d46a69c2bf1afb996dacfd17eefa102adb0dd32462->enter($__internal_23ecd698ceca9245deb671d46a69c2bf1afb996dacfd17eefa102adb0dd32462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23ecd698ceca9245deb671d46a69c2bf1afb996dacfd17eefa102adb0dd32462->leave($__internal_23ecd698ceca9245deb671d46a69c2bf1afb996dacfd17eefa102adb0dd32462_prof);

        
        $__internal_890a1bb53a721acd75b222d1728ddebbb2f25da23053c824c7b20724b053ba02->leave($__internal_890a1bb53a721acd75b222d1728ddebbb2f25da23053c824c7b20724b053ba02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\ASFF\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
