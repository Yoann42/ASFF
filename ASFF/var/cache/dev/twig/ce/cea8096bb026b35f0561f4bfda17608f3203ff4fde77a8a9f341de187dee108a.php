<?php

/* ASFFClubBundle:Info Tech:reglesdubad.html.twig */
class __TwigTemplate_24fcb2617ca73967a841f8de7539a5ac55a62de22dfd43c2bbb17b92d215b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutInfoTech.html.twig", "ASFFClubBundle:Info Tech:reglesdubad.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutInfoTech.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_411b26dbe8f32eb05365817b8be380d98e2b45c4422673b73655a277fcdee335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411b26dbe8f32eb05365817b8be380d98e2b45c4422673b73655a277fcdee335->enter($__internal_411b26dbe8f32eb05365817b8be380d98e2b45c4422673b73655a277fcdee335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Info Tech:reglesdubad.html.twig"));

        $__internal_55467349fa85afd0c1e94d7f09570bf0497c5e173bc1e5e3f93466c5107d99f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55467349fa85afd0c1e94d7f09570bf0497c5e173bc1e5e3f93466c5107d99f7->enter($__internal_55467349fa85afd0c1e94d7f09570bf0497c5e173bc1e5e3f93466c5107d99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Info Tech:reglesdubad.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_411b26dbe8f32eb05365817b8be380d98e2b45c4422673b73655a277fcdee335->leave($__internal_411b26dbe8f32eb05365817b8be380d98e2b45c4422673b73655a277fcdee335_prof);

        
        $__internal_55467349fa85afd0c1e94d7f09570bf0497c5e173bc1e5e3f93466c5107d99f7->leave($__internal_55467349fa85afd0c1e94d7f09570bf0497c5e173bc1e5e3f93466c5107d99f7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45d9bc4119f45fd386556da05b588dd3577c4bd2b8505e22eff27e0c828ad242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d9bc4119f45fd386556da05b588dd3577c4bd2b8505e22eff27e0c828ad242->enter($__internal_45d9bc4119f45fd386556da05b588dd3577c4bd2b8505e22eff27e0c828ad242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6932817be0ce07332e433df984a9c2c5d909da6de346422c8da998ed90f4bfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6932817be0ce07332e433df984a9c2c5d909da6de346422c8da998ed90f4bfce->enter($__internal_6932817be0ce07332e433df984a9c2c5d909da6de346422c8da998ed90f4bfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Les règles au badminton</h2>

";
        
        $__internal_6932817be0ce07332e433df984a9c2c5d909da6de346422c8da998ed90f4bfce->leave($__internal_6932817be0ce07332e433df984a9c2c5d909da6de346422c8da998ed90f4bfce_prof);

        
        $__internal_45d9bc4119f45fd386556da05b588dd3577c4bd2b8505e22eff27e0c828ad242->leave($__internal_45d9bc4119f45fd386556da05b588dd3577c4bd2b8505e22eff27e0c828ad242_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle:Info Tech:reglesdubad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Info Tech/reglesdubad.html.twig #}

{% extends \"ASFFClubBundle::layoutInfoTech.html.twig\" %}

{% block body %}

  <h2>Les règles au badminton</h2>

{% endblock %}", "ASFFClubBundle:Info Tech:reglesdubad.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/Info Tech/reglesdubad.html.twig");
    }
}
