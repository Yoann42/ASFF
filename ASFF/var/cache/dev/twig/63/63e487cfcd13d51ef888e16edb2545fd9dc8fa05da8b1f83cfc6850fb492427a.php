<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d5698b33a199af55f06f9cb3a26a5c0f8acf2924b663136b9f05e4f288556884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac5c0d2ffd457cb54318fa003533d0a17f089c6e881449380fc942ee45642d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5c0d2ffd457cb54318fa003533d0a17f089c6e881449380fc942ee45642d7e->enter($__internal_ac5c0d2ffd457cb54318fa003533d0a17f089c6e881449380fc942ee45642d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8d1327a9e0dee777ea790203f300478c1f9fdb4f6157e38e03ef80fab049e8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1327a9e0dee777ea790203f300478c1f9fdb4f6157e38e03ef80fab049e8ef->enter($__internal_8d1327a9e0dee777ea790203f300478c1f9fdb4f6157e38e03ef80fab049e8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ac5c0d2ffd457cb54318fa003533d0a17f089c6e881449380fc942ee45642d7e->leave($__internal_ac5c0d2ffd457cb54318fa003533d0a17f089c6e881449380fc942ee45642d7e_prof);

        
        $__internal_8d1327a9e0dee777ea790203f300478c1f9fdb4f6157e38e03ef80fab049e8ef->leave($__internal_8d1327a9e0dee777ea790203f300478c1f9fdb4f6157e38e03ef80fab049e8ef_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f36fcbcaa4fe8853f6dd789673d7c60b73386ab5a4400bcf798149d9c40e777e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36fcbcaa4fe8853f6dd789673d7c60b73386ab5a4400bcf798149d9c40e777e->enter($__internal_f36fcbcaa4fe8853f6dd789673d7c60b73386ab5a4400bcf798149d9c40e777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3813f684ce32f958234534f6e0d288c3d52b6115756dbe9d77ccc3ac47a244bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3813f684ce32f958234534f6e0d288c3d52b6115756dbe9d77ccc3ac47a244bd->enter($__internal_3813f684ce32f958234534f6e0d288c3d52b6115756dbe9d77ccc3ac47a244bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3813f684ce32f958234534f6e0d288c3d52b6115756dbe9d77ccc3ac47a244bd->leave($__internal_3813f684ce32f958234534f6e0d288c3d52b6115756dbe9d77ccc3ac47a244bd_prof);

        
        $__internal_f36fcbcaa4fe8853f6dd789673d7c60b73386ab5a4400bcf798149d9c40e777e->leave($__internal_f36fcbcaa4fe8853f6dd789673d7c60b73386ab5a4400bcf798149d9c40e777e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
