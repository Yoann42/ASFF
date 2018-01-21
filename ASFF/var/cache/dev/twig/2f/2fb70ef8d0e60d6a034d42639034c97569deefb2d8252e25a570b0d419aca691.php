<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_77d35ac6b5618928e73e84cb9666e940a22a2700ed4b88d77ec8a705e806d640 extends Twig_Template
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
        $__internal_270526c0ce76ea631543c2eba26879d592f66114b16888e5d01f17d97c5d78e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270526c0ce76ea631543c2eba26879d592f66114b16888e5d01f17d97c5d78e2->enter($__internal_270526c0ce76ea631543c2eba26879d592f66114b16888e5d01f17d97c5d78e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_415cb7d39e010b1e2de0aaa050117c1dbcbf3f4a860ca692ebeb3d06d5598b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415cb7d39e010b1e2de0aaa050117c1dbcbf3f4a860ca692ebeb3d06d5598b25->enter($__internal_415cb7d39e010b1e2de0aaa050117c1dbcbf3f4a860ca692ebeb3d06d5598b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_270526c0ce76ea631543c2eba26879d592f66114b16888e5d01f17d97c5d78e2->leave($__internal_270526c0ce76ea631543c2eba26879d592f66114b16888e5d01f17d97c5d78e2_prof);

        
        $__internal_415cb7d39e010b1e2de0aaa050117c1dbcbf3f4a860ca692ebeb3d06d5598b25->leave($__internal_415cb7d39e010b1e2de0aaa050117c1dbcbf3f4a860ca692ebeb3d06d5598b25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
