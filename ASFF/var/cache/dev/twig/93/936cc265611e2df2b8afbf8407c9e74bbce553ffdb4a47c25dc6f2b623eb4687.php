<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_205b2ac35478344787631595b6594cb4926294c10458a9e135b3979e62994493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b9146c03a24c257e8f2e1c069249d45e885e1d46993a78c59f61c751cd4665f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9146c03a24c257e8f2e1c069249d45e885e1d46993a78c59f61c751cd4665f->enter($__internal_9b9146c03a24c257e8f2e1c069249d45e885e1d46993a78c59f61c751cd4665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_6d3f2aae4828b4d18b8712e6ffac997ef4ad2b9a805b05fda43a73bc74aa831a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3f2aae4828b4d18b8712e6ffac997ef4ad2b9a805b05fda43a73bc74aa831a->enter($__internal_6d3f2aae4828b4d18b8712e6ffac997ef4ad2b9a805b05fda43a73bc74aa831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b9146c03a24c257e8f2e1c069249d45e885e1d46993a78c59f61c751cd4665f->leave($__internal_9b9146c03a24c257e8f2e1c069249d45e885e1d46993a78c59f61c751cd4665f_prof);

        
        $__internal_6d3f2aae4828b4d18b8712e6ffac997ef4ad2b9a805b05fda43a73bc74aa831a->leave($__internal_6d3f2aae4828b4d18b8712e6ffac997ef4ad2b9a805b05fda43a73bc74aa831a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba8464fd0e3ec87dcdefda97ea0ce70ac2885d802492c3bbc498b2c7cca3e2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8464fd0e3ec87dcdefda97ea0ce70ac2885d802492c3bbc498b2c7cca3e2e5->enter($__internal_ba8464fd0e3ec87dcdefda97ea0ce70ac2885d802492c3bbc498b2c7cca3e2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_204da6643b83616229828ae1f2e0da59c78049c24f1c8b8ca9133fcf22e00294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204da6643b83616229828ae1f2e0da59c78049c24f1c8b8ca9133fcf22e00294->enter($__internal_204da6643b83616229828ae1f2e0da59c78049c24f1c8b8ca9133fcf22e00294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_204da6643b83616229828ae1f2e0da59c78049c24f1c8b8ca9133fcf22e00294->leave($__internal_204da6643b83616229828ae1f2e0da59c78049c24f1c8b8ca9133fcf22e00294_prof);

        
        $__internal_ba8464fd0e3ec87dcdefda97ea0ce70ac2885d802492c3bbc498b2c7cca3e2e5->leave($__internal_ba8464fd0e3ec87dcdefda97ea0ce70ac2885d802492c3bbc498b2c7cca3e2e5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
