<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_85635fcd8980cf8f50a863cb062996652550c269f5704e767995d2df68da91f2 extends Twig_Template
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
        $__internal_be6976943e49d17d8ddb2992c57e60200b73a972ca2860526aa5d862f9f2d44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6976943e49d17d8ddb2992c57e60200b73a972ca2860526aa5d862f9f2d44c->enter($__internal_be6976943e49d17d8ddb2992c57e60200b73a972ca2860526aa5d862f9f2d44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_bc668d748d3ff4069c7da6f32f31dbcbf14a0c4853c5c5c4a94c6c5b9279e153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc668d748d3ff4069c7da6f32f31dbcbf14a0c4853c5c5c4a94c6c5b9279e153->enter($__internal_bc668d748d3ff4069c7da6f32f31dbcbf14a0c4853c5c5c4a94c6c5b9279e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_be6976943e49d17d8ddb2992c57e60200b73a972ca2860526aa5d862f9f2d44c->leave($__internal_be6976943e49d17d8ddb2992c57e60200b73a972ca2860526aa5d862f9f2d44c_prof);

        
        $__internal_bc668d748d3ff4069c7da6f32f31dbcbf14a0c4853c5c5c4a94c6c5b9279e153->leave($__internal_bc668d748d3ff4069c7da6f32f31dbcbf14a0c4853c5c5c4a94c6c5b9279e153_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85121464b5dbc5b87d38c0b7fb15dbc5e73a887930b93661db27fc8b56ede993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85121464b5dbc5b87d38c0b7fb15dbc5e73a887930b93661db27fc8b56ede993->enter($__internal_85121464b5dbc5b87d38c0b7fb15dbc5e73a887930b93661db27fc8b56ede993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24e027c6ef0cb2ed3f02a0c303e005d723970cf1fef7c2e021a7ac8d33addae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e027c6ef0cb2ed3f02a0c303e005d723970cf1fef7c2e021a7ac8d33addae1->enter($__internal_24e027c6ef0cb2ed3f02a0c303e005d723970cf1fef7c2e021a7ac8d33addae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_24e027c6ef0cb2ed3f02a0c303e005d723970cf1fef7c2e021a7ac8d33addae1->leave($__internal_24e027c6ef0cb2ed3f02a0c303e005d723970cf1fef7c2e021a7ac8d33addae1_prof);

        
        $__internal_85121464b5dbc5b87d38c0b7fb15dbc5e73a887930b93661db27fc8b56ede993->leave($__internal_85121464b5dbc5b87d38c0b7fb15dbc5e73a887930b93661db27fc8b56ede993_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea094ea871501affaa4eb50b86d2abafca70d7b89d8aa4c93ac083bc48e80416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea094ea871501affaa4eb50b86d2abafca70d7b89d8aa4c93ac083bc48e80416->enter($__internal_ea094ea871501affaa4eb50b86d2abafca70d7b89d8aa4c93ac083bc48e80416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5dc28bc10f36cec4c79b6d1a53f7995539775849e8c925a404e902424974e480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc28bc10f36cec4c79b6d1a53f7995539775849e8c925a404e902424974e480->enter($__internal_5dc28bc10f36cec4c79b6d1a53f7995539775849e8c925a404e902424974e480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5dc28bc10f36cec4c79b6d1a53f7995539775849e8c925a404e902424974e480->leave($__internal_5dc28bc10f36cec4c79b6d1a53f7995539775849e8c925a404e902424974e480_prof);

        
        $__internal_ea094ea871501affaa4eb50b86d2abafca70d7b89d8aa4c93ac083bc48e80416->leave($__internal_ea094ea871501affaa4eb50b86d2abafca70d7b89d8aa4c93ac083bc48e80416_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1632ac69f5406636a3783d7d869041e5349d9da442541172b777433fafbe8deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1632ac69f5406636a3783d7d869041e5349d9da442541172b777433fafbe8deb->enter($__internal_1632ac69f5406636a3783d7d869041e5349d9da442541172b777433fafbe8deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b3bfc4b0fd45718369d4bccb6859769e1e64ba2fedc9779eb00a8fc343207fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3bfc4b0fd45718369d4bccb6859769e1e64ba2fedc9779eb00a8fc343207fe->enter($__internal_0b3bfc4b0fd45718369d4bccb6859769e1e64ba2fedc9779eb00a8fc343207fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b3bfc4b0fd45718369d4bccb6859769e1e64ba2fedc9779eb00a8fc343207fe->leave($__internal_0b3bfc4b0fd45718369d4bccb6859769e1e64ba2fedc9779eb00a8fc343207fe_prof);

        
        $__internal_1632ac69f5406636a3783d7d869041e5349d9da442541172b777433fafbe8deb->leave($__internal_1632ac69f5406636a3783d7d869041e5349d9da442541172b777433fafbe8deb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
