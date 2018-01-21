<?php

/* ASFFActualiteBundle::layout.html.twig */
class __TwigTemplate_d78d9498070479c9cd265046de2f98bd3973386d77cc82edcd6be4adc9debaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFActualiteBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c30038f689b9dddfa87deb3b76dc7d583b99c17fc2d3d8773f8d97b5a7f650c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c30038f689b9dddfa87deb3b76dc7d583b99c17fc2d3d8773f8d97b5a7f650c->enter($__internal_5c30038f689b9dddfa87deb3b76dc7d583b99c17fc2d3d8773f8d97b5a7f650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle::layout.html.twig"));

        $__internal_12b949642e96380365543acf13d0d9ed3c3805e8443e6bf91b1049fa0afa11f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b949642e96380365543acf13d0d9ed3c3805e8443e6bf91b1049fa0afa11f2->enter($__internal_12b949642e96380365543acf13d0d9ed3c3805e8443e6bf91b1049fa0afa11f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c30038f689b9dddfa87deb3b76dc7d583b99c17fc2d3d8773f8d97b5a7f650c->leave($__internal_5c30038f689b9dddfa87deb3b76dc7d583b99c17fc2d3d8773f8d97b5a7f650c_prof);

        
        $__internal_12b949642e96380365543acf13d0d9ed3c3805e8443e6bf91b1049fa0afa11f2->leave($__internal_12b949642e96380365543acf13d0d9ed3c3805e8443e6bf91b1049fa0afa11f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a9b18544eaf6ae86d66a1da725ffd43ceb44a59ed7c61beb1a33cb418c74ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9b18544eaf6ae86d66a1da725ffd43ceb44a59ed7c61beb1a33cb418c74ae0->enter($__internal_8a9b18544eaf6ae86d66a1da725ffd43ceb44a59ed7c61beb1a33cb418c74ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bc977c3ea3c8994eed66549ec71761296103b68b0eaa32d556bba6f773519f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc977c3ea3c8994eed66549ec71761296103b68b0eaa32d556bba6f773519f1->enter($__internal_9bc977c3ea3c8994eed66549ec71761296103b68b0eaa32d556bba6f773519f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Actualité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9bc977c3ea3c8994eed66549ec71761296103b68b0eaa32d556bba6f773519f1->leave($__internal_9bc977c3ea3c8994eed66549ec71761296103b68b0eaa32d556bba6f773519f1_prof);

        
        $__internal_8a9b18544eaf6ae86d66a1da725ffd43ceb44a59ed7c61beb1a33cb418c74ae0->leave($__internal_8a9b18544eaf6ae86d66a1da725ffd43ceb44a59ed7c61beb1a33cb418c74ae0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8513c93f6d69d820145b880926301b73d2672f8be910f78e121489189e911dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8513c93f6d69d820145b880926301b73d2672f8be910f78e121489189e911dd->enter($__internal_d8513c93f6d69d820145b880926301b73d2672f8be910f78e121489189e911dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9770a2c7cfd4f57906b9cef4b2deb239719f702f83e18c0f1369dc8181c4367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9770a2c7cfd4f57906b9cef4b2deb239719f702f83e18c0f1369dc8181c4367->enter($__internal_c9770a2c7cfd4f57906b9cef4b2deb239719f702f83e18c0f1369dc8181c4367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Actualités</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_c9770a2c7cfd4f57906b9cef4b2deb239719f702f83e18c0f1369dc8181c4367->leave($__internal_c9770a2c7cfd4f57906b9cef4b2deb239719f702f83e18c0f1369dc8181c4367_prof);

        
        $__internal_d8513c93f6d69d820145b880926301b73d2672f8be910f78e121489189e911dd->leave($__internal_d8513c93f6d69d820145b880926301b73d2672f8be910f78e121489189e911dd_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_53c1d5ec0a40959c0d0d370f4fed31ca300a60bb6ec134a3bc90708a306d112a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c1d5ec0a40959c0d0d370f4fed31ca300a60bb6ec134a3bc90708a306d112a->enter($__internal_53c1d5ec0a40959c0d0d370f4fed31ca300a60bb6ec134a3bc90708a306d112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_acf85b310b81339c3f2b200309fcf68fe085d3b37002431bfb8947451d18754c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf85b310b81339c3f2b200309fcf68fe085d3b37002431bfb8947451d18754c->enter($__internal_acf85b310b81339c3f2b200309fcf68fe085d3b37002431bfb8947451d18754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_acf85b310b81339c3f2b200309fcf68fe085d3b37002431bfb8947451d18754c->leave($__internal_acf85b310b81339c3f2b200309fcf68fe085d3b37002431bfb8947451d18754c_prof);

        
        $__internal_53c1d5ec0a40959c0d0d370f4fed31ca300a60bb6ec134a3bc90708a306d112a->leave($__internal_53c1d5ec0a40959c0d0d370f4fed31ca300a60bb6ec134a3bc90708a306d112a_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/layout.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Actualité - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Actualités</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "ASFFActualiteBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\layout.html.twig");
    }
}
