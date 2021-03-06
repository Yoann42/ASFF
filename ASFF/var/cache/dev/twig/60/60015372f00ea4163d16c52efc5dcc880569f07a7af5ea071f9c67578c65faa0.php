<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08cb262f401b86e992d1004fbf010831700bf01c8a8e8de713bcccee294436cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da465182012eeebb7ba81d989f93868885ded1d95f5e3f5b3f5161dd09db8262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da465182012eeebb7ba81d989f93868885ded1d95f5e3f5b3f5161dd09db8262->enter($__internal_da465182012eeebb7ba81d989f93868885ded1d95f5e3f5b3f5161dd09db8262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3c8d4027a3abc34667a5aa231ce9a7d9b94220a012632a82ac32106ec80e235a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8d4027a3abc34667a5aa231ce9a7d9b94220a012632a82ac32106ec80e235a->enter($__internal_3c8d4027a3abc34667a5aa231ce9a7d9b94220a012632a82ac32106ec80e235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da465182012eeebb7ba81d989f93868885ded1d95f5e3f5b3f5161dd09db8262->leave($__internal_da465182012eeebb7ba81d989f93868885ded1d95f5e3f5b3f5161dd09db8262_prof);

        
        $__internal_3c8d4027a3abc34667a5aa231ce9a7d9b94220a012632a82ac32106ec80e235a->leave($__internal_3c8d4027a3abc34667a5aa231ce9a7d9b94220a012632a82ac32106ec80e235a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce03251ec0aafda3371eabcdbb46d3dc03cdbec23eae891fd38d345ade1d1e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce03251ec0aafda3371eabcdbb46d3dc03cdbec23eae891fd38d345ade1d1e3e->enter($__internal_ce03251ec0aafda3371eabcdbb46d3dc03cdbec23eae891fd38d345ade1d1e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f35a4fb7eb10eae47cb1bba483e9978e6d0215e7e03d6b0327f588452166bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f35a4fb7eb10eae47cb1bba483e9978e6d0215e7e03d6b0327f588452166bb6->enter($__internal_7f35a4fb7eb10eae47cb1bba483e9978e6d0215e7e03d6b0327f588452166bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7f35a4fb7eb10eae47cb1bba483e9978e6d0215e7e03d6b0327f588452166bb6->leave($__internal_7f35a4fb7eb10eae47cb1bba483e9978e6d0215e7e03d6b0327f588452166bb6_prof);

        
        $__internal_ce03251ec0aafda3371eabcdbb46d3dc03cdbec23eae891fd38d345ade1d1e3e->leave($__internal_ce03251ec0aafda3371eabcdbb46d3dc03cdbec23eae891fd38d345ade1d1e3e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3b85a20998e94ffbe1b2c23301e088f2f4f502ff33f07d4716ec345f7664f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b85a20998e94ffbe1b2c23301e088f2f4f502ff33f07d4716ec345f7664f9c->enter($__internal_a3b85a20998e94ffbe1b2c23301e088f2f4f502ff33f07d4716ec345f7664f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3d014f39b6f7a366cfe61f82133c2d37faa1e506b6d927e714d2df85a2f2ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d014f39b6f7a366cfe61f82133c2d37faa1e506b6d927e714d2df85a2f2ab4->enter($__internal_a3d014f39b6f7a366cfe61f82133c2d37faa1e506b6d927e714d2df85a2f2ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3d014f39b6f7a366cfe61f82133c2d37faa1e506b6d927e714d2df85a2f2ab4->leave($__internal_a3d014f39b6f7a366cfe61f82133c2d37faa1e506b6d927e714d2df85a2f2ab4_prof);

        
        $__internal_a3b85a20998e94ffbe1b2c23301e088f2f4f502ff33f07d4716ec345f7664f9c->leave($__internal_a3b85a20998e94ffbe1b2c23301e088f2f4f502ff33f07d4716ec345f7664f9c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dff89f546374d571fbb4380844b8c8ee005b0f2418db8388d6d382a1efe450b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dff89f546374d571fbb4380844b8c8ee005b0f2418db8388d6d382a1efe450b->enter($__internal_8dff89f546374d571fbb4380844b8c8ee005b0f2418db8388d6d382a1efe450b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21a21172d727b6de28476fde997ea267a24797f147a7614f97be39a4c26fc826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a21172d727b6de28476fde997ea267a24797f147a7614f97be39a4c26fc826->enter($__internal_21a21172d727b6de28476fde997ea267a24797f147a7614f97be39a4c26fc826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_21a21172d727b6de28476fde997ea267a24797f147a7614f97be39a4c26fc826->leave($__internal_21a21172d727b6de28476fde997ea267a24797f147a7614f97be39a4c26fc826_prof);

        
        $__internal_8dff89f546374d571fbb4380844b8c8ee005b0f2418db8388d6d382a1efe450b->leave($__internal_8dff89f546374d571fbb4380844b8c8ee005b0f2418db8388d6d382a1efe450b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
