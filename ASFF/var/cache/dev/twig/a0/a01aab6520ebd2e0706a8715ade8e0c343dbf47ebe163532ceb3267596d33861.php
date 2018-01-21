<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_230c986406482c0500223938999c894f7bcc029cdbc8f3700210bd37783371c6 extends Twig_Template
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
        $__internal_a8e6277011079f2b012f3d7791fc1d503e6c4a71fe2472c1d994bb4eb6b8fd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e6277011079f2b012f3d7791fc1d503e6c4a71fe2472c1d994bb4eb6b8fd48->enter($__internal_a8e6277011079f2b012f3d7791fc1d503e6c4a71fe2472c1d994bb4eb6b8fd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_747506beb8249f77ff24ea2ea3ca87d4253d7e34df2bac71a0eb787d6c113ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747506beb8249f77ff24ea2ea3ca87d4253d7e34df2bac71a0eb787d6c113ac7->enter($__internal_747506beb8249f77ff24ea2ea3ca87d4253d7e34df2bac71a0eb787d6c113ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a8e6277011079f2b012f3d7791fc1d503e6c4a71fe2472c1d994bb4eb6b8fd48->leave($__internal_a8e6277011079f2b012f3d7791fc1d503e6c4a71fe2472c1d994bb4eb6b8fd48_prof);

        
        $__internal_747506beb8249f77ff24ea2ea3ca87d4253d7e34df2bac71a0eb787d6c113ac7->leave($__internal_747506beb8249f77ff24ea2ea3ca87d4253d7e34df2bac71a0eb787d6c113ac7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
