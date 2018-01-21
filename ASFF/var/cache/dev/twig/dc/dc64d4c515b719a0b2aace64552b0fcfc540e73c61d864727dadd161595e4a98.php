<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_24dbbb48bd7bf3371c7bae8ac23b8cb38d98b196499aee5ec6a6fe2ce828ab58 extends Twig_Template
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
        $__internal_adb8dec5e21cd7f67fa1b1da1f24b6fcb21916304c335112fdb5de05300eb9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb8dec5e21cd7f67fa1b1da1f24b6fcb21916304c335112fdb5de05300eb9ff->enter($__internal_adb8dec5e21cd7f67fa1b1da1f24b6fcb21916304c335112fdb5de05300eb9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_c594fc24e70875b0020e0456d24bacd0b6a91e270a37e7bed7575fb96557e60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c594fc24e70875b0020e0456d24bacd0b6a91e270a37e7bed7575fb96557e60d->enter($__internal_c594fc24e70875b0020e0456d24bacd0b6a91e270a37e7bed7575fb96557e60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
        
        $__internal_adb8dec5e21cd7f67fa1b1da1f24b6fcb21916304c335112fdb5de05300eb9ff->leave($__internal_adb8dec5e21cd7f67fa1b1da1f24b6fcb21916304c335112fdb5de05300eb9ff_prof);

        
        $__internal_c594fc24e70875b0020e0456d24bacd0b6a91e270a37e7bed7575fb96557e60d->leave($__internal_c594fc24e70875b0020e0456d24bacd0b6a91e270a37e7bed7575fb96557e60d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
