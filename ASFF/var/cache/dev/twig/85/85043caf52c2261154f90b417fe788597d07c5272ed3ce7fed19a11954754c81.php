<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0d6d6cc749d78749f9c75ec3d1ad5155aa0475c91f733b8bf22255917d2e1ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 3);
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
        $__internal_3d0888120ff6040dac5639eee604139ff33e2295a790326f9580cf2a88603bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0888120ff6040dac5639eee604139ff33e2295a790326f9580cf2a88603bc2->enter($__internal_3d0888120ff6040dac5639eee604139ff33e2295a790326f9580cf2a88603bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_31387aa6e1e1d4d216c96dcb44f807a14c1bacee0fa76c54e644e1c6c0052e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31387aa6e1e1d4d216c96dcb44f807a14c1bacee0fa76c54e644e1c6c0052e92->enter($__internal_31387aa6e1e1d4d216c96dcb44f807a14c1bacee0fa76c54e644e1c6c0052e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0888120ff6040dac5639eee604139ff33e2295a790326f9580cf2a88603bc2->leave($__internal_3d0888120ff6040dac5639eee604139ff33e2295a790326f9580cf2a88603bc2_prof);

        
        $__internal_31387aa6e1e1d4d216c96dcb44f807a14c1bacee0fa76c54e644e1c6c0052e92->leave($__internal_31387aa6e1e1d4d216c96dcb44f807a14c1bacee0fa76c54e644e1c6c0052e92_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_828724ec467dd0e4c9a986163f8333dd7ee979caa741c0896970db911cdfc041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828724ec467dd0e4c9a986163f8333dd7ee979caa741c0896970db911cdfc041->enter($__internal_828724ec467dd0e4c9a986163f8333dd7ee979caa741c0896970db911cdfc041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0aecdf064d43f6e4068d5af9537ffdb8259e49437d75d66288c34ea6aecc839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0aecdf064d43f6e4068d5af9537ffdb8259e49437d75d66288c34ea6aecc839->enter($__internal_c0aecdf064d43f6e4068d5af9537ffdb8259e49437d75d66288c34ea6aecc839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c0aecdf064d43f6e4068d5af9537ffdb8259e49437d75d66288c34ea6aecc839->leave($__internal_c0aecdf064d43f6e4068d5af9537ffdb8259e49437d75d66288c34ea6aecc839_prof);

        
        $__internal_828724ec467dd0e4c9a986163f8333dd7ee979caa741c0896970db911cdfc041->leave($__internal_828724ec467dd0e4c9a986163f8333dd7ee979caa741c0896970db911cdfc041_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
  
  

{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
