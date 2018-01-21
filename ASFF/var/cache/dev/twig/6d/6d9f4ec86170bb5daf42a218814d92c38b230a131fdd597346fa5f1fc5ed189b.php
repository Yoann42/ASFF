<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9723ee684bedfcab68fcf4c0be160b555835be4eea0fea26ffd3b7ba52470f7d extends Twig_Template
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
        $__internal_b5b4f5a031b7cb7b5c392ee8e6dd73e92381ecc478db55f4ea49bab38565980b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b4f5a031b7cb7b5c392ee8e6dd73e92381ecc478db55f4ea49bab38565980b->enter($__internal_b5b4f5a031b7cb7b5c392ee8e6dd73e92381ecc478db55f4ea49bab38565980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_8c920722a3363ab9b1b91ad095b20f14c10de2e8c1b96b8de8f0c2acbc010432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c920722a3363ab9b1b91ad095b20f14c10de2e8c1b96b8de8f0c2acbc010432->enter($__internal_8c920722a3363ab9b1b91ad095b20f14c10de2e8c1b96b8de8f0c2acbc010432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b5b4f5a031b7cb7b5c392ee8e6dd73e92381ecc478db55f4ea49bab38565980b->leave($__internal_b5b4f5a031b7cb7b5c392ee8e6dd73e92381ecc478db55f4ea49bab38565980b_prof);

        
        $__internal_8c920722a3363ab9b1b91ad095b20f14c10de2e8c1b96b8de8f0c2acbc010432->leave($__internal_8c920722a3363ab9b1b91ad095b20f14c10de2e8c1b96b8de8f0c2acbc010432_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
