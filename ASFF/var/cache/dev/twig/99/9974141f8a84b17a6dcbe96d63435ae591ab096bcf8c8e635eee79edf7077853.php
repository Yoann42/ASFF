<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_31b2cfc546513b0312611267b9b0746bdaadb4ab2e097ecd0af8289c619a3c1c extends Twig_Template
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
        $__internal_5e81e4eddf46e961c04beff612ec0835745013a7abd3ef15038ae822b5669e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e81e4eddf46e961c04beff612ec0835745013a7abd3ef15038ae822b5669e7f->enter($__internal_5e81e4eddf46e961c04beff612ec0835745013a7abd3ef15038ae822b5669e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_06d34f17d9548155955d0897f8ba3b6fe2efce2616b5c2306f962f01a24fbee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d34f17d9548155955d0897f8ba3b6fe2efce2616b5c2306f962f01a24fbee8->enter($__internal_06d34f17d9548155955d0897f8ba3b6fe2efce2616b5c2306f962f01a24fbee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5e81e4eddf46e961c04beff612ec0835745013a7abd3ef15038ae822b5669e7f->leave($__internal_5e81e4eddf46e961c04beff612ec0835745013a7abd3ef15038ae822b5669e7f_prof);

        
        $__internal_06d34f17d9548155955d0897f8ba3b6fe2efce2616b5c2306f962f01a24fbee8->leave($__internal_06d34f17d9548155955d0897f8ba3b6fe2efce2616b5c2306f962f01a24fbee8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0857bb8156f29d4f5ac6a6fa828ea9e52303971e94ebb9bc2390db86c0d3a27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0857bb8156f29d4f5ac6a6fa828ea9e52303971e94ebb9bc2390db86c0d3a27c->enter($__internal_0857bb8156f29d4f5ac6a6fa828ea9e52303971e94ebb9bc2390db86c0d3a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31a02956d2fb14d3ddd1f08f855234403fc497632ad0d0bc427ba82537d2e488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a02956d2fb14d3ddd1f08f855234403fc497632ad0d0bc427ba82537d2e488->enter($__internal_31a02956d2fb14d3ddd1f08f855234403fc497632ad0d0bc427ba82537d2e488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_31a02956d2fb14d3ddd1f08f855234403fc497632ad0d0bc427ba82537d2e488->leave($__internal_31a02956d2fb14d3ddd1f08f855234403fc497632ad0d0bc427ba82537d2e488_prof);

        
        $__internal_0857bb8156f29d4f5ac6a6fa828ea9e52303971e94ebb9bc2390db86c0d3a27c->leave($__internal_0857bb8156f29d4f5ac6a6fa828ea9e52303971e94ebb9bc2390db86c0d3a27c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_321907ca546bf4c052df1478c748e0dd19bbabd92961699cbe3797b4ec390938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321907ca546bf4c052df1478c748e0dd19bbabd92961699cbe3797b4ec390938->enter($__internal_321907ca546bf4c052df1478c748e0dd19bbabd92961699cbe3797b4ec390938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7e3b8a76468f1e3e1e0a6fcf86b4444853eb0de51586804a06a973d0ce3e19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e3b8a76468f1e3e1e0a6fcf86b4444853eb0de51586804a06a973d0ce3e19c->enter($__internal_c7e3b8a76468f1e3e1e0a6fcf86b4444853eb0de51586804a06a973d0ce3e19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c7e3b8a76468f1e3e1e0a6fcf86b4444853eb0de51586804a06a973d0ce3e19c->leave($__internal_c7e3b8a76468f1e3e1e0a6fcf86b4444853eb0de51586804a06a973d0ce3e19c_prof);

        
        $__internal_321907ca546bf4c052df1478c748e0dd19bbabd92961699cbe3797b4ec390938->leave($__internal_321907ca546bf4c052df1478c748e0dd19bbabd92961699cbe3797b4ec390938_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_510eba56c7bcca9219de1c5fa0b20e12ea41997516cf601fc9abe6ea6f1c40b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510eba56c7bcca9219de1c5fa0b20e12ea41997516cf601fc9abe6ea6f1c40b1->enter($__internal_510eba56c7bcca9219de1c5fa0b20e12ea41997516cf601fc9abe6ea6f1c40b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c001f28773b592a17d85db1b31ea43ec3ad296914b492da923671b86ec06a563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c001f28773b592a17d85db1b31ea43ec3ad296914b492da923671b86ec06a563->enter($__internal_c001f28773b592a17d85db1b31ea43ec3ad296914b492da923671b86ec06a563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c001f28773b592a17d85db1b31ea43ec3ad296914b492da923671b86ec06a563->leave($__internal_c001f28773b592a17d85db1b31ea43ec3ad296914b492da923671b86ec06a563_prof);

        
        $__internal_510eba56c7bcca9219de1c5fa0b20e12ea41997516cf601fc9abe6ea6f1c40b1->leave($__internal_510eba56c7bcca9219de1c5fa0b20e12ea41997516cf601fc9abe6ea6f1c40b1_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
