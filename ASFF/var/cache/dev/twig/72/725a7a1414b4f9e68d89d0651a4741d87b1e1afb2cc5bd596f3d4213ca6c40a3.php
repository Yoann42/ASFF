<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_09f8f22973614fd9cf4e42ff2a8584b8edfd402e090e9bfe5e8a733af2c5c755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 3);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_069a564afd1cce1999d261a2f91269b7d8d5b6be495a5b68c771b5c6eea8a629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069a564afd1cce1999d261a2f91269b7d8d5b6be495a5b68c771b5c6eea8a629->enter($__internal_069a564afd1cce1999d261a2f91269b7d8d5b6be495a5b68c771b5c6eea8a629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_cc6eb2890518afd822239f7e9823d8357ac51a69917b21cbd685cca1b2d73831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6eb2890518afd822239f7e9823d8357ac51a69917b21cbd685cca1b2d73831->enter($__internal_cc6eb2890518afd822239f7e9823d8357ac51a69917b21cbd685cca1b2d73831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_069a564afd1cce1999d261a2f91269b7d8d5b6be495a5b68c771b5c6eea8a629->leave($__internal_069a564afd1cce1999d261a2f91269b7d8d5b6be495a5b68c771b5c6eea8a629_prof);

        
        $__internal_cc6eb2890518afd822239f7e9823d8357ac51a69917b21cbd685cca1b2d73831->leave($__internal_cc6eb2890518afd822239f7e9823d8357ac51a69917b21cbd685cca1b2d73831_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41a10de753e1d2a30cd99359c7e5416430bec6865b939f1e115dec557ecd735f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a10de753e1d2a30cd99359c7e5416430bec6865b939f1e115dec557ecd735f->enter($__internal_41a10de753e1d2a30cd99359c7e5416430bec6865b939f1e115dec557ecd735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e4e2dd1201bfdedd1f79647ba22a24ff47b32519bb9931fde23b2c2b4b8470dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e2dd1201bfdedd1f79647ba22a24ff47b32519bb9931fde23b2c2b4b8470dc->enter($__internal_e4e2dd1201bfdedd1f79647ba22a24ff47b32519bb9931fde23b2c2b4b8470dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  
<br>
  
";
        // line 10
        echo "<form class=\"panel panel-primary\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
\t<div class=\"panel-heading\">
\t\t<h2>Inscription</h2>
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
 \t\t<div><input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></div>
\t</div>
</form>
  
  

";
        
        $__internal_e4e2dd1201bfdedd1f79647ba22a24ff47b32519bb9931fde23b2c2b4b8470dc->leave($__internal_e4e2dd1201bfdedd1f79647ba22a24ff47b32519bb9931fde23b2c2b4b8470dc_prof);

        
        $__internal_41a10de753e1d2a30cd99359c7e5416430bec6865b939f1e115dec557ecd735f->leave($__internal_41a10de753e1d2a30cd99359c7e5416430bec6865b939f1e115dec557ecd735f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 15,  54 => 10,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/UserBundle/Resources/views/Registration/register.html.twig #}

{% extends \"ASFFUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
  
<br>
  
{# Le formulaire d'inscription #}
<form class=\"panel panel-primary\" action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">
\t<div class=\"panel-heading\">
\t\t<h2>Inscription</h2>
\t</div>
\t<div class=\"panel-body\">
\t\t{{ form_widget(form) }}
 \t\t<div><input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" /></div>
\t</div>
</form>
  
  

{% endblock fos_user_content %}", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
