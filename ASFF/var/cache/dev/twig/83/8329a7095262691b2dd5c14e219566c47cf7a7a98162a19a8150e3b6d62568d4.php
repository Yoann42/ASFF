<?php

/* ::base.html.twig */
class __TwigTemplate_f203d69cf999b67a46c962e2db59843a884feea52729d9826631153dea96f4e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c375874a7884923b5c2717dadafdfbc8f9f1ec2e66a13f5b7a2ff2f51b104d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c375874a7884923b5c2717dadafdfbc8f9f1ec2e66a13f5b7a2ff2f51b104d45->enter($__internal_c375874a7884923b5c2717dadafdfbc8f9f1ec2e66a13f5b7a2ff2f51b104d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a24fbf8133f50167b67f88ae0ad1f5b2c36aa85ddde56ca6f6ecbc09e1f1b8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24fbf8133f50167b67f88ae0ad1f5b2c36aa85ddde56ca6f6ecbc09e1f1b8f8->enter($__internal_a24fbf8133f50167b67f88ae0ad1f5b2c36aa85ddde56ca6f6ecbc09e1f1b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c375874a7884923b5c2717dadafdfbc8f9f1ec2e66a13f5b7a2ff2f51b104d45->leave($__internal_c375874a7884923b5c2717dadafdfbc8f9f1ec2e66a13f5b7a2ff2f51b104d45_prof);

        
        $__internal_a24fbf8133f50167b67f88ae0ad1f5b2c36aa85ddde56ca6f6ecbc09e1f1b8f8->leave($__internal_a24fbf8133f50167b67f88ae0ad1f5b2c36aa85ddde56ca6f6ecbc09e1f1b8f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2649f1169d1187fefb991c880dce289c36d6ce734dc7ed1bb0f338d195ee04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2649f1169d1187fefb991c880dce289c36d6ce734dc7ed1bb0f338d195ee04e->enter($__internal_e2649f1169d1187fefb991c880dce289c36d6ce734dc7ed1bb0f338d195ee04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02d4bf5f73fb505ee41131acfe99898f40ef60b9c24bb70850bc6500bac65fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d4bf5f73fb505ee41131acfe99898f40ef60b9c24bb70850bc6500bac65fb5->enter($__internal_02d4bf5f73fb505ee41131acfe99898f40ef60b9c24bb70850bc6500bac65fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02d4bf5f73fb505ee41131acfe99898f40ef60b9c24bb70850bc6500bac65fb5->leave($__internal_02d4bf5f73fb505ee41131acfe99898f40ef60b9c24bb70850bc6500bac65fb5_prof);

        
        $__internal_e2649f1169d1187fefb991c880dce289c36d6ce734dc7ed1bb0f338d195ee04e->leave($__internal_e2649f1169d1187fefb991c880dce289c36d6ce734dc7ed1bb0f338d195ee04e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67a82378b8440d2c2f4973d98edec9d615ebb8ed27d74fd9649782c53af68c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a82378b8440d2c2f4973d98edec9d615ebb8ed27d74fd9649782c53af68c4b->enter($__internal_67a82378b8440d2c2f4973d98edec9d615ebb8ed27d74fd9649782c53af68c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5f6cb554e09dd9a2f4f8715fa3814d649a28a0694d1e914a0aa0defc22805f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6cb554e09dd9a2f4f8715fa3814d649a28a0694d1e914a0aa0defc22805f42->enter($__internal_5f6cb554e09dd9a2f4f8715fa3814d649a28a0694d1e914a0aa0defc22805f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f6cb554e09dd9a2f4f8715fa3814d649a28a0694d1e914a0aa0defc22805f42->leave($__internal_5f6cb554e09dd9a2f4f8715fa3814d649a28a0694d1e914a0aa0defc22805f42_prof);

        
        $__internal_67a82378b8440d2c2f4973d98edec9d615ebb8ed27d74fd9649782c53af68c4b->leave($__internal_67a82378b8440d2c2f4973d98edec9d615ebb8ed27d74fd9649782c53af68c4b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a3854337463b1118de1bf317a887d0e15f973d8df346bff514d0529bf3d8a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3854337463b1118de1bf317a887d0e15f973d8df346bff514d0529bf3d8a6f->enter($__internal_5a3854337463b1118de1bf317a887d0e15f973d8df346bff514d0529bf3d8a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a7ec8602eda885e407b12f88324c43a74eb5a082a0e3fa6b4124eaba1a702e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7ec8602eda885e407b12f88324c43a74eb5a082a0e3fa6b4124eaba1a702e1->enter($__internal_9a7ec8602eda885e407b12f88324c43a74eb5a082a0e3fa6b4124eaba1a702e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a7ec8602eda885e407b12f88324c43a74eb5a082a0e3fa6b4124eaba1a702e1->leave($__internal_9a7ec8602eda885e407b12f88324c43a74eb5a082a0e3fa6b4124eaba1a702e1_prof);

        
        $__internal_5a3854337463b1118de1bf317a887d0e15f973d8df346bff514d0529bf3d8a6f->leave($__internal_5a3854337463b1118de1bf317a887d0e15f973d8df346bff514d0529bf3d8a6f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_133f792eee23e3649b9c1703ef351b285fc66cac99873411815647a30033b387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133f792eee23e3649b9c1703ef351b285fc66cac99873411815647a30033b387->enter($__internal_133f792eee23e3649b9c1703ef351b285fc66cac99873411815647a30033b387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ebfc92a03e20e597292f28e8a7739755365ea6d732151ee0d8e554cd55c325c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebfc92a03e20e597292f28e8a7739755365ea6d732151ee0d8e554cd55c325c->enter($__internal_4ebfc92a03e20e597292f28e8a7739755365ea6d732151ee0d8e554cd55c325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4ebfc92a03e20e597292f28e8a7739755365ea6d732151ee0d8e554cd55c325c->leave($__internal_4ebfc92a03e20e597292f28e8a7739755365ea6d732151ee0d8e554cd55c325c_prof);

        
        $__internal_133f792eee23e3649b9c1703ef351b285fc66cac99873411815647a30033b387->leave($__internal_133f792eee23e3649b9c1703ef351b285fc66cac99873411815647a30033b387_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
