<?php

/* @ASFFTournois/Poona/noclassement.html.twig */
class __TwigTemplate_459ee86ee968b9f9c28bced81244cc856ad0276132662ff75a8bea0fddb724cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@ASFFTournois/Poona/noclassement.html.twig", 3);
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
        $__internal_dd243d0c17087020c099b8aab8b0fc40f01400d5d28b383df3cdd7ea84a7bc95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd243d0c17087020c099b8aab8b0fc40f01400d5d28b383df3cdd7ea84a7bc95->enter($__internal_dd243d0c17087020c099b8aab8b0fc40f01400d5d28b383df3cdd7ea84a7bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Poona/noclassement.html.twig"));

        $__internal_36eb7ad8cd46d017ce89a8d2bef5f7b03d1480b20ab01b0c93c82771df984f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eb7ad8cd46d017ce89a8d2bef5f7b03d1480b20ab01b0c93c82771df984f0b->enter($__internal_36eb7ad8cd46d017ce89a8d2bef5f7b03d1480b20ab01b0c93c82771df984f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Poona/noclassement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd243d0c17087020c099b8aab8b0fc40f01400d5d28b383df3cdd7ea84a7bc95->leave($__internal_dd243d0c17087020c099b8aab8b0fc40f01400d5d28b383df3cdd7ea84a7bc95_prof);

        
        $__internal_36eb7ad8cd46d017ce89a8d2bef5f7b03d1480b20ab01b0c93c82771df984f0b->leave($__internal_36eb7ad8cd46d017ce89a8d2bef5f7b03d1480b20ab01b0c93c82771df984f0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d5bc58856fecbc6f84c60994ba160fee2a2c8dfc15a5639718b221edaa7ed7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5bc58856fecbc6f84c60994ba160fee2a2c8dfc15a5639718b221edaa7ed7c->enter($__internal_0d5bc58856fecbc6f84c60994ba160fee2a2c8dfc15a5639718b221edaa7ed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ecc0cba9bfa2ed83b820c127ccc0d3465fe510354e2fb69c5b8a023bfb3aac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecc0cba9bfa2ed83b820c127ccc0d3465fe510354e2fb69c5b8a023bfb3aac6->enter($__internal_5ecc0cba9bfa2ed83b820c127ccc0d3465fe510354e2fb69c5b8a023bfb3aac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ecc0cba9bfa2ed83b820c127ccc0d3465fe510354e2fb69c5b8a023bfb3aac6->leave($__internal_5ecc0cba9bfa2ed83b820c127ccc0d3465fe510354e2fb69c5b8a023bfb3aac6_prof);

        
        $__internal_0d5bc58856fecbc6f84c60994ba160fee2a2c8dfc15a5639718b221edaa7ed7c->leave($__internal_0d5bc58856fecbc6f84c60994ba160fee2a2c8dfc15a5639718b221edaa7ed7c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e74529c30302e6aa6969eeb9ad8316e4f09b198d80c64019cd1afe6524ed7b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74529c30302e6aa6969eeb9ad8316e4f09b198d80c64019cd1afe6524ed7b57->enter($__internal_e74529c30302e6aa6969eeb9ad8316e4f09b198d80c64019cd1afe6524ed7b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f5a0913a654decdb4e9c98b282b0ce5fa8e8c85f1df4a095f8d5bbfb7700986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5a0913a654decdb4e9c98b282b0ce5fa8e8c85f1df4a095f8d5bbfb7700986->enter($__internal_2f5a0913a654decdb4e9c98b282b0ce5fa8e8c85f1df4a095f8d5bbfb7700986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Classement de ";
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_2f5a0913a654decdb4e9c98b282b0ce5fa8e8c85f1df4a095f8d5bbfb7700986->leave($__internal_2f5a0913a654decdb4e9c98b282b0ce5fa8e8c85f1df4a095f8d5bbfb7700986_prof);

        
        $__internal_e74529c30302e6aa6969eeb9ad8316e4f09b198d80c64019cd1afe6524ed7b57->leave($__internal_e74529c30302e6aa6969eeb9ad8316e4f09b198d80c64019cd1afe6524ed7b57_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_25851d8a51afc91efa716143698312d61f6dc5805656fbb962b9ff9f57def217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25851d8a51afc91efa716143698312d61f6dc5805656fbb962b9ff9f57def217->enter($__internal_25851d8a51afc91efa716143698312d61f6dc5805656fbb962b9ff9f57def217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_ea109fef591954930c55f8c22c5f52b8f6440ca37db15fe37b76d1795314f383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea109fef591954930c55f8c22c5f52b8f6440ca37db15fe37b76d1795314f383->enter($__internal_ea109fef591954930c55f8c22c5f52b8f6440ca37db15fe37b76d1795314f383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t<h2>Désolé mais ta licence n'est pas présente dans la base de données de la Fédé</h2>
\t
  ";
        
        $__internal_ea109fef591954930c55f8c22c5f52b8f6440ca37db15fe37b76d1795314f383->leave($__internal_ea109fef591954930c55f8c22c5f52b8f6440ca37db15fe37b76d1795314f383_prof);

        
        $__internal_25851d8a51afc91efa716143698312d61f6dc5805656fbb962b9ff9f57def217->leave($__internal_25851d8a51afc91efa716143698312d61f6dc5805656fbb962b9ff9f57def217_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Poona/noclassement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  98 => 17,  87 => 21,  84 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/view/Poona/classement.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Classement de {{ nom }}</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
\t<h2>Désolé mais ta licence n'est pas présente dans la base de données de la Fédé</h2>
\t
  {% endblock %}

{% endblock %}
", "@ASFFTournois/Poona/noclassement.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Poona\\noclassement.html.twig");
    }
}
