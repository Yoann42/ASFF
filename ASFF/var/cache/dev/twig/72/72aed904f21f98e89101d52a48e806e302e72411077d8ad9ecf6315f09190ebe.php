<?php

/* ASFFClubBundle:Info Tech:formations.html.twig */
class __TwigTemplate_5898ee8278b97b817283b6b442b91044f9911839a39ec1b12197cef021bc0e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFClubBundle::layoutInfoTech.html.twig", "ASFFClubBundle:Info Tech:formations.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFClubBundle::layoutInfoTech.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df266e9d609c3ce5659056d92c1c16e0e831c0f8f7e64e3e332e5b23877f225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df266e9d609c3ce5659056d92c1c16e0e831c0f8f7e64e3e332e5b23877f225->enter($__internal_9df266e9d609c3ce5659056d92c1c16e0e831c0f8f7e64e3e332e5b23877f225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Info Tech:formations.html.twig"));

        $__internal_df9cc093a4b1b601087772f74be3a0272df062e72fbb03af54319515a3b81309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9cc093a4b1b601087772f74be3a0272df062e72fbb03af54319515a3b81309->enter($__internal_df9cc093a4b1b601087772f74be3a0272df062e72fbb03af54319515a3b81309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFClubBundle:Info Tech:formations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df266e9d609c3ce5659056d92c1c16e0e831c0f8f7e64e3e332e5b23877f225->leave($__internal_9df266e9d609c3ce5659056d92c1c16e0e831c0f8f7e64e3e332e5b23877f225_prof);

        
        $__internal_df9cc093a4b1b601087772f74be3a0272df062e72fbb03af54319515a3b81309->leave($__internal_df9cc093a4b1b601087772f74be3a0272df062e72fbb03af54319515a3b81309_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96aac30edd6e8c7927ae47b88357ebddd4f8d27bc49a51169366c2af5e69dfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96aac30edd6e8c7927ae47b88357ebddd4f8d27bc49a51169366c2af5e69dfec->enter($__internal_96aac30edd6e8c7927ae47b88357ebddd4f8d27bc49a51169366c2af5e69dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f89b7f93d1375e3ef07b4ae68e5bdc3da4a119fb2e93e7400e0911d81490fe9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89b7f93d1375e3ef07b4ae68e5bdc3da4a119fb2e93e7400e0911d81490fe9f->enter($__internal_f89b7f93d1375e3ef07b4ae68e5bdc3da4a119fb2e93e7400e0911d81490fe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Formations</h2>

";
        
        $__internal_f89b7f93d1375e3ef07b4ae68e5bdc3da4a119fb2e93e7400e0911d81490fe9f->leave($__internal_f89b7f93d1375e3ef07b4ae68e5bdc3da4a119fb2e93e7400e0911d81490fe9f_prof);

        
        $__internal_96aac30edd6e8c7927ae47b88357ebddd4f8d27bc49a51169366c2af5e69dfec->leave($__internal_96aac30edd6e8c7927ae47b88357ebddd4f8d27bc49a51169366c2af5e69dfec_prof);

    }

    public function getTemplateName()
    {
        return "ASFFClubBundle:Info Tech:formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/Info Tech/formations.html.twig #}

{% extends \"ASFFClubBundle::layoutInfoTech.html.twig\" %}

{% block body %}

  <h2>Formations</h2>

{% endblock %}", "ASFFClubBundle:Info Tech:formations.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/Info Tech/formations.html.twig");
    }
}
