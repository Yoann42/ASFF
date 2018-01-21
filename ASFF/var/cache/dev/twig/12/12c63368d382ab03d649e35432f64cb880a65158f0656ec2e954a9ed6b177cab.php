<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_52d929376a345d72a23783c44c9f2f11da39e58413b748fb8b296ff508b348e6 extends Twig_Template
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
        $__internal_32184b8038e51929086c952e3c543c9658b34b2d321c5e78f738e2f13f1d655f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32184b8038e51929086c952e3c543c9658b34b2d321c5e78f738e2f13f1d655f->enter($__internal_32184b8038e51929086c952e3c543c9658b34b2d321c5e78f738e2f13f1d655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_c042fda6b799a991fc623a5aa4aa417698bd2e6b4e12650607652388afc7e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c042fda6b799a991fc623a5aa4aa417698bd2e6b4e12650607652388afc7e067->enter($__internal_c042fda6b799a991fc623a5aa4aa417698bd2e6b4e12650607652388afc7e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_32184b8038e51929086c952e3c543c9658b34b2d321c5e78f738e2f13f1d655f->leave($__internal_32184b8038e51929086c952e3c543c9658b34b2d321c5e78f738e2f13f1d655f_prof);

        
        $__internal_c042fda6b799a991fc623a5aa4aa417698bd2e6b4e12650607652388afc7e067->leave($__internal_c042fda6b799a991fc623a5aa4aa417698bd2e6b4e12650607652388afc7e067_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
