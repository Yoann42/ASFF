<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1f9debfcd4a29b5594da43f054275154523cf81a7e855beed4ed00abbbd58796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d6fc055d8d5dd92244c8ed1f78fa623029e14b30eb753a62f6472d6bfb9dae59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fc055d8d5dd92244c8ed1f78fa623029e14b30eb753a62f6472d6bfb9dae59->enter($__internal_d6fc055d8d5dd92244c8ed1f78fa623029e14b30eb753a62f6472d6bfb9dae59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_656c9790af42d17319ccce05acb21d0aa222907eb9ad98366b4a3178687a26d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656c9790af42d17319ccce05acb21d0aa222907eb9ad98366b4a3178687a26d9->enter($__internal_656c9790af42d17319ccce05acb21d0aa222907eb9ad98366b4a3178687a26d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6fc055d8d5dd92244c8ed1f78fa623029e14b30eb753a62f6472d6bfb9dae59->leave($__internal_d6fc055d8d5dd92244c8ed1f78fa623029e14b30eb753a62f6472d6bfb9dae59_prof);

        
        $__internal_656c9790af42d17319ccce05acb21d0aa222907eb9ad98366b4a3178687a26d9->leave($__internal_656c9790af42d17319ccce05acb21d0aa222907eb9ad98366b4a3178687a26d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_990ec8341a448c223053b02e415be4f4642ed2b2180e2cd7710e80d626b6e4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990ec8341a448c223053b02e415be4f4642ed2b2180e2cd7710e80d626b6e4a6->enter($__internal_990ec8341a448c223053b02e415be4f4642ed2b2180e2cd7710e80d626b6e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a7451e646b46edaa00a9e33cdd25b2878c786eb2362e42c4b6090d5dc79f231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7451e646b46edaa00a9e33cdd25b2878c786eb2362e42c4b6090d5dc79f231->enter($__internal_2a7451e646b46edaa00a9e33cdd25b2878c786eb2362e42c4b6090d5dc79f231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2a7451e646b46edaa00a9e33cdd25b2878c786eb2362e42c4b6090d5dc79f231->leave($__internal_2a7451e646b46edaa00a9e33cdd25b2878c786eb2362e42c4b6090d5dc79f231_prof);

        
        $__internal_990ec8341a448c223053b02e415be4f4642ed2b2180e2cd7710e80d626b6e4a6->leave($__internal_990ec8341a448c223053b02e415be4f4642ed2b2180e2cd7710e80d626b6e4a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
