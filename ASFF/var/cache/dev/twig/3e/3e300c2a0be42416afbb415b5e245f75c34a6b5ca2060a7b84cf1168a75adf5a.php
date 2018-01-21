<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3ed5e50ed2490e2a3eb84923ecca6ec6fedd2af2a64fdfb00a2f18e179dfe1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_13a188157c580ed63d126c58b7998b8a5937470a4c3b008161085d6818ee419f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a188157c580ed63d126c58b7998b8a5937470a4c3b008161085d6818ee419f->enter($__internal_13a188157c580ed63d126c58b7998b8a5937470a4c3b008161085d6818ee419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_39cd6d35af95bb47aa19f37c0d41b3d77f450ce0967188de480b7f2cd184addb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cd6d35af95bb47aa19f37c0d41b3d77f450ce0967188de480b7f2cd184addb->enter($__internal_39cd6d35af95bb47aa19f37c0d41b3d77f450ce0967188de480b7f2cd184addb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a188157c580ed63d126c58b7998b8a5937470a4c3b008161085d6818ee419f->leave($__internal_13a188157c580ed63d126c58b7998b8a5937470a4c3b008161085d6818ee419f_prof);

        
        $__internal_39cd6d35af95bb47aa19f37c0d41b3d77f450ce0967188de480b7f2cd184addb->leave($__internal_39cd6d35af95bb47aa19f37c0d41b3d77f450ce0967188de480b7f2cd184addb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b175b14fbb924df14e61edecbbfcdee19f9d635cef54ed71759a379c033671d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b175b14fbb924df14e61edecbbfcdee19f9d635cef54ed71759a379c033671d5->enter($__internal_b175b14fbb924df14e61edecbbfcdee19f9d635cef54ed71759a379c033671d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_53dde79b4796e82de591282768603113d2d4a899604cbc78f2dc7b825ce2cbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dde79b4796e82de591282768603113d2d4a899604cbc78f2dc7b825ce2cbef->enter($__internal_53dde79b4796e82de591282768603113d2d4a899604cbc78f2dc7b825ce2cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_53dde79b4796e82de591282768603113d2d4a899604cbc78f2dc7b825ce2cbef->leave($__internal_53dde79b4796e82de591282768603113d2d4a899604cbc78f2dc7b825ce2cbef_prof);

        
        $__internal_b175b14fbb924df14e61edecbbfcdee19f9d635cef54ed71759a379c033671d5->leave($__internal_b175b14fbb924df14e61edecbbfcdee19f9d635cef54ed71759a379c033671d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
