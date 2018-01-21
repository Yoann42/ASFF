<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_aa195f3a4c725df4744bfab58d995c4577c7a4a2cf2e160e486d4416b9475296 extends Twig_Template
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
        $__internal_99f01a97a8e16b102ffdf0d80376b3d19f4c955060cf30db1f22f9bf1f8252cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f01a97a8e16b102ffdf0d80376b3d19f4c955060cf30db1f22f9bf1f8252cb->enter($__internal_99f01a97a8e16b102ffdf0d80376b3d19f4c955060cf30db1f22f9bf1f8252cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_5d3a5728fdfd0a391608632f5e3114f1bcf0bca3c33fb0c6582a293bf5bfca47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3a5728fdfd0a391608632f5e3114f1bcf0bca3c33fb0c6582a293bf5bfca47->enter($__internal_5d3a5728fdfd0a391608632f5e3114f1bcf0bca3c33fb0c6582a293bf5bfca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_99f01a97a8e16b102ffdf0d80376b3d19f4c955060cf30db1f22f9bf1f8252cb->leave($__internal_99f01a97a8e16b102ffdf0d80376b3d19f4c955060cf30db1f22f9bf1f8252cb_prof);

        
        $__internal_5d3a5728fdfd0a391608632f5e3114f1bcf0bca3c33fb0c6582a293bf5bfca47->leave($__internal_5d3a5728fdfd0a391608632f5e3114f1bcf0bca3c33fb0c6582a293bf5bfca47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
