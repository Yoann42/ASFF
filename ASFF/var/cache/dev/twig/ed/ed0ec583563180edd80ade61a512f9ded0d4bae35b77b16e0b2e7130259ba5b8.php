<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f6e7dd162f7904988b8c5ef8aceb94615535bfd4624b3abdc995fcbf4eef13f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_561337a6da73bae50dcd69c37d4f4ec353eb4f04cb847567e8999cd4fa824a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561337a6da73bae50dcd69c37d4f4ec353eb4f04cb847567e8999cd4fa824a67->enter($__internal_561337a6da73bae50dcd69c37d4f4ec353eb4f04cb847567e8999cd4fa824a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7b4796d2708fa418725c45de7f869b786000812b90181b648c1cabfd8d0c9fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4796d2708fa418725c45de7f869b786000812b90181b648c1cabfd8d0c9fda->enter($__internal_7b4796d2708fa418725c45de7f869b786000812b90181b648c1cabfd8d0c9fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_561337a6da73bae50dcd69c37d4f4ec353eb4f04cb847567e8999cd4fa824a67->leave($__internal_561337a6da73bae50dcd69c37d4f4ec353eb4f04cb847567e8999cd4fa824a67_prof);

        
        $__internal_7b4796d2708fa418725c45de7f869b786000812b90181b648c1cabfd8d0c9fda->leave($__internal_7b4796d2708fa418725c45de7f869b786000812b90181b648c1cabfd8d0c9fda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fbb4785d2ff10ee9f494ba093173925eb31ff8f710233bb03bafee884b8e9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbb4785d2ff10ee9f494ba093173925eb31ff8f710233bb03bafee884b8e9f3->enter($__internal_9fbb4785d2ff10ee9f494ba093173925eb31ff8f710233bb03bafee884b8e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3f14eecbebd496be3c580f68753a41e862275a06de063ee53608bb3c80c7951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f14eecbebd496be3c580f68753a41e862275a06de063ee53608bb3c80c7951->enter($__internal_f3f14eecbebd496be3c580f68753a41e862275a06de063ee53608bb3c80c7951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f3f14eecbebd496be3c580f68753a41e862275a06de063ee53608bb3c80c7951->leave($__internal_f3f14eecbebd496be3c580f68753a41e862275a06de063ee53608bb3c80c7951_prof);

        
        $__internal_9fbb4785d2ff10ee9f494ba093173925eb31ff8f710233bb03bafee884b8e9f3->leave($__internal_9fbb4785d2ff10ee9f494ba093173925eb31ff8f710233bb03bafee884b8e9f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
