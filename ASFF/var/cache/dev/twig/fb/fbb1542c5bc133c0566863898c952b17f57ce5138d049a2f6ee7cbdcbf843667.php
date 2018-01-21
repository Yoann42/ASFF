<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_af77d0e107a2592fc6add852ae6336d5e14e258677f38e154291140e5b5ef499 extends Twig_Template
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
        $__internal_cff9dbfbc22163ec65276b11c1889a7d6b5060e09b9a25e0cd07df092b255da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff9dbfbc22163ec65276b11c1889a7d6b5060e09b9a25e0cd07df092b255da1->enter($__internal_cff9dbfbc22163ec65276b11c1889a7d6b5060e09b9a25e0cd07df092b255da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_94369e66d2b0b6efdcaf9f58456982d126df14a7b540a4545054719e0888a97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94369e66d2b0b6efdcaf9f58456982d126df14a7b540a4545054719e0888a97c->enter($__internal_94369e66d2b0b6efdcaf9f58456982d126df14a7b540a4545054719e0888a97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_cff9dbfbc22163ec65276b11c1889a7d6b5060e09b9a25e0cd07df092b255da1->leave($__internal_cff9dbfbc22163ec65276b11c1889a7d6b5060e09b9a25e0cd07df092b255da1_prof);

        
        $__internal_94369e66d2b0b6efdcaf9f58456982d126df14a7b540a4545054719e0888a97c->leave($__internal_94369e66d2b0b6efdcaf9f58456982d126df14a7b540a4545054719e0888a97c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
