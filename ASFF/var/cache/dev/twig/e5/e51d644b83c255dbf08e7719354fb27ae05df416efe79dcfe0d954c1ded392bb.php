<?php

/* ASFFTournoisBundle:Poona:noclassement.html.twig */
class __TwigTemplate_fa277fcd8c39666abe6f5fdaf777a8069de899c83654821baef22dd5bc9e5eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFTournoisBundle:Poona:noclassement.html.twig", 3);
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
        $__internal_786ec7cfe444d0ad28cce65d60b5c57cc1f46d66a254ff247cb76950389fe5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786ec7cfe444d0ad28cce65d60b5c57cc1f46d66a254ff247cb76950389fe5f7->enter($__internal_786ec7cfe444d0ad28cce65d60b5c57cc1f46d66a254ff247cb76950389fe5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Poona:noclassement.html.twig"));

        $__internal_155bd29e7bc8e58a956a1959066b88018190ac8b099e20bf39bbe8986a151423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155bd29e7bc8e58a956a1959066b88018190ac8b099e20bf39bbe8986a151423->enter($__internal_155bd29e7bc8e58a956a1959066b88018190ac8b099e20bf39bbe8986a151423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Poona:noclassement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_786ec7cfe444d0ad28cce65d60b5c57cc1f46d66a254ff247cb76950389fe5f7->leave($__internal_786ec7cfe444d0ad28cce65d60b5c57cc1f46d66a254ff247cb76950389fe5f7_prof);

        
        $__internal_155bd29e7bc8e58a956a1959066b88018190ac8b099e20bf39bbe8986a151423->leave($__internal_155bd29e7bc8e58a956a1959066b88018190ac8b099e20bf39bbe8986a151423_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b00ceed63a1d9d5df651487757f6b9742b527c01033269c58c8a7aca6689f577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00ceed63a1d9d5df651487757f6b9742b527c01033269c58c8a7aca6689f577->enter($__internal_b00ceed63a1d9d5df651487757f6b9742b527c01033269c58c8a7aca6689f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c64fce6c1cd0d9cacc78d152e856dc4e2084dd24a96dfdb505813e7e6cb8be73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64fce6c1cd0d9cacc78d152e856dc4e2084dd24a96dfdb505813e7e6cb8be73->enter($__internal_c64fce6c1cd0d9cacc78d152e856dc4e2084dd24a96dfdb505813e7e6cb8be73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c64fce6c1cd0d9cacc78d152e856dc4e2084dd24a96dfdb505813e7e6cb8be73->leave($__internal_c64fce6c1cd0d9cacc78d152e856dc4e2084dd24a96dfdb505813e7e6cb8be73_prof);

        
        $__internal_b00ceed63a1d9d5df651487757f6b9742b527c01033269c58c8a7aca6689f577->leave($__internal_b00ceed63a1d9d5df651487757f6b9742b527c01033269c58c8a7aca6689f577_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a5ba66f70f53d0b985e0279b5d13f9f7fcf0610b93f213941bcf4b678c54ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a5ba66f70f53d0b985e0279b5d13f9f7fcf0610b93f213941bcf4b678c54ca->enter($__internal_c4a5ba66f70f53d0b985e0279b5d13f9f7fcf0610b93f213941bcf4b678c54ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7051d1c0e52676d5bf48cc3ab2e43d31a006dfa884f80696454ea1b2090e270a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7051d1c0e52676d5bf48cc3ab2e43d31a006dfa884f80696454ea1b2090e270a->enter($__internal_7051d1c0e52676d5bf48cc3ab2e43d31a006dfa884f80696454ea1b2090e270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7051d1c0e52676d5bf48cc3ab2e43d31a006dfa884f80696454ea1b2090e270a->leave($__internal_7051d1c0e52676d5bf48cc3ab2e43d31a006dfa884f80696454ea1b2090e270a_prof);

        
        $__internal_c4a5ba66f70f53d0b985e0279b5d13f9f7fcf0610b93f213941bcf4b678c54ca->leave($__internal_c4a5ba66f70f53d0b985e0279b5d13f9f7fcf0610b93f213941bcf4b678c54ca_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a25558cf6dc2db4dd713907c6fb6090c6f388072663bf4944acb82e804ef9eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25558cf6dc2db4dd713907c6fb6090c6f388072663bf4944acb82e804ef9eb6->enter($__internal_a25558cf6dc2db4dd713907c6fb6090c6f388072663bf4944acb82e804ef9eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_fbe0538315086437957614a0e32128f36ddc4f63e37b2ba338ae4b9a39065ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe0538315086437957614a0e32128f36ddc4f63e37b2ba338ae4b9a39065ed6->enter($__internal_fbe0538315086437957614a0e32128f36ddc4f63e37b2ba338ae4b9a39065ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t<h2>Désolé mais ta licence n'est pas présente dans la base de données de la Fédé</h2>
\t
  ";
        
        $__internal_fbe0538315086437957614a0e32128f36ddc4f63e37b2ba338ae4b9a39065ed6->leave($__internal_fbe0538315086437957614a0e32128f36ddc4f63e37b2ba338ae4b9a39065ed6_prof);

        
        $__internal_a25558cf6dc2db4dd713907c6fb6090c6f388072663bf4944acb82e804ef9eb6->leave($__internal_a25558cf6dc2db4dd713907c6fb6090c6f388072663bf4944acb82e804ef9eb6_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Poona:noclassement.html.twig";
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
", "ASFFTournoisBundle:Poona:noclassement.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Poona/noclassement.html.twig");
    }
}
