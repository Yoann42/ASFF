<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6c766c08d120f9bd31be46afa3dd92fb3470d9ce632e3e58626b568a952aab81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36d8cc7a2ab9693a1176962cfa75d81bdd53dc2104d4bfab81a87cd8c7783f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d8cc7a2ab9693a1176962cfa75d81bdd53dc2104d4bfab81a87cd8c7783f7a->enter($__internal_36d8cc7a2ab9693a1176962cfa75d81bdd53dc2104d4bfab81a87cd8c7783f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3e0ef888618abb1c7694bfe49594f0a02781aba64e22fc66e18a7033b4c272b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0ef888618abb1c7694bfe49594f0a02781aba64e22fc66e18a7033b4c272b1->enter($__internal_3e0ef888618abb1c7694bfe49594f0a02781aba64e22fc66e18a7033b4c272b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d8cc7a2ab9693a1176962cfa75d81bdd53dc2104d4bfab81a87cd8c7783f7a->leave($__internal_36d8cc7a2ab9693a1176962cfa75d81bdd53dc2104d4bfab81a87cd8c7783f7a_prof);

        
        $__internal_3e0ef888618abb1c7694bfe49594f0a02781aba64e22fc66e18a7033b4c272b1->leave($__internal_3e0ef888618abb1c7694bfe49594f0a02781aba64e22fc66e18a7033b4c272b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4744e9c6fd9d2349e98bc9b9dc31b82bf88c7a5d9c325724dd749fa496cc388b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4744e9c6fd9d2349e98bc9b9dc31b82bf88c7a5d9c325724dd749fa496cc388b->enter($__internal_4744e9c6fd9d2349e98bc9b9dc31b82bf88c7a5d9c325724dd749fa496cc388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_52f1bfb863d647050102095f7ab8f05e6797c11dbbaca0d7c140765eb3a09cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f1bfb863d647050102095f7ab8f05e6797c11dbbaca0d7c140765eb3a09cd2->enter($__internal_52f1bfb863d647050102095f7ab8f05e6797c11dbbaca0d7c140765eb3a09cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_52f1bfb863d647050102095f7ab8f05e6797c11dbbaca0d7c140765eb3a09cd2->leave($__internal_52f1bfb863d647050102095f7ab8f05e6797c11dbbaca0d7c140765eb3a09cd2_prof);

        
        $__internal_4744e9c6fd9d2349e98bc9b9dc31b82bf88c7a5d9c325724dd749fa496cc388b->leave($__internal_4744e9c6fd9d2349e98bc9b9dc31b82bf88c7a5d9c325724dd749fa496cc388b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
