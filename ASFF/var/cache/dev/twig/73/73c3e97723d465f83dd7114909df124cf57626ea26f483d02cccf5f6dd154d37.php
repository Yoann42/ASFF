<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_2c4e35addf876db81ee6c5a257c59ea5b8c0c18f5388e2c655220096e6aeec93 extends Twig_Template
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
        $__internal_feaeda1ab57663352151df616e6488a713f89091b475b05f57c73191ff7c9c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaeda1ab57663352151df616e6488a713f89091b475b05f57c73191ff7c9c7c->enter($__internal_feaeda1ab57663352151df616e6488a713f89091b475b05f57c73191ff7c9c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_93cf5d07b1a0d9dcfd0fad9618c4d1214f52bc7ee5fe0b8c4dd401d5f5eb1a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cf5d07b1a0d9dcfd0fad9618c4d1214f52bc7ee5fe0b8c4dd401d5f5eb1a09->enter($__internal_93cf5d07b1a0d9dcfd0fad9618c4d1214f52bc7ee5fe0b8c4dd401d5f5eb1a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_feaeda1ab57663352151df616e6488a713f89091b475b05f57c73191ff7c9c7c->leave($__internal_feaeda1ab57663352151df616e6488a713f89091b475b05f57c73191ff7c9c7c_prof);

        
        $__internal_93cf5d07b1a0d9dcfd0fad9618c4d1214f52bc7ee5fe0b8c4dd401d5f5eb1a09->leave($__internal_93cf5d07b1a0d9dcfd0fad9618c4d1214f52bc7ee5fe0b8c4dd401d5f5eb1a09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
