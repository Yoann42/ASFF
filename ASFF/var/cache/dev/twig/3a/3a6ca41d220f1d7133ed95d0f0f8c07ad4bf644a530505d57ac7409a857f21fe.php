<?php

/* @ASFFTournois/Inscription/delete.html.twig */
class __TwigTemplate_b5e160f83fd741cfa9cbcfd45c56a7892ea0933ccdf9dfca785a5caedbee934e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Inscription/delete.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFTournoisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e9d7463a5ee5d98cb1b457db303eba77a80e2a69677161244871f4c366c7b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9d7463a5ee5d98cb1b457db303eba77a80e2a69677161244871f4c366c7b07->enter($__internal_4e9d7463a5ee5d98cb1b457db303eba77a80e2a69677161244871f4c366c7b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Inscription/delete.html.twig"));

        $__internal_7d879000fb3cedf092c6a5cbfcab7450072710890d56ff01d82433e84bc8befd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d879000fb3cedf092c6a5cbfcab7450072710890d56ff01d82433e84bc8befd->enter($__internal_7d879000fb3cedf092c6a5cbfcab7450072710890d56ff01d82433e84bc8befd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Inscription/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9d7463a5ee5d98cb1b457db303eba77a80e2a69677161244871f4c366c7b07->leave($__internal_4e9d7463a5ee5d98cb1b457db303eba77a80e2a69677161244871f4c366c7b07_prof);

        
        $__internal_7d879000fb3cedf092c6a5cbfcab7450072710890d56ff01d82433e84bc8befd->leave($__internal_7d879000fb3cedf092c6a5cbfcab7450072710890d56ff01d82433e84bc8befd_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8fcc39a3d46249fb4e425456341b8500e41a9a3a806babf20cedba35d92f159d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcc39a3d46249fb4e425456341b8500e41a9a3a806babf20cedba35d92f159d->enter($__internal_8fcc39a3d46249fb4e425456341b8500e41a9a3a806babf20cedba35d92f159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f37d578380319d32f12a24f016d382a9eea8bef9335564c8b2c5271c6bf58281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37d578380319d32f12a24f016d382a9eea8bef9335564c8b2c5271c6bf58281->enter($__internal_f37d578380319d32f12a24f016d382a9eea8bef9335564c8b2c5271c6bf58281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "adversaire", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
\tVotre désinscription est bien prise en compte.
  </div>
  
  <p>
\t<a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste
\t</a>
  </p>

";
        
        $__internal_f37d578380319d32f12a24f016d382a9eea8bef9335564c8b2c5271c6bf58281->leave($__internal_f37d578380319d32f12a24f016d382a9eea8bef9335564c8b2c5271c6bf58281_prof);

        
        $__internal_8fcc39a3d46249fb4e425456341b8500e41a9a3a806babf20cedba35d92f159d->leave($__internal_8fcc39a3d46249fb4e425456341b8500e41a9a3a806babf20cedba35d92f159d_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Inscription/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  56 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/view/Tournois/delete.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>{{ tournois.adversaire }}</h2>
  <i>Par {{ tournois.auteur }}, le {{ tournois.date|date('d/m/Y') }}</i>

  <div class=\"well\">
\tVotre désinscription est bien prise en compte.
  </div>
  
  <p>
\t<a href=\"{{ path('asff_tournois_home') }}\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste
\t</a>
  </p>

{% endblock %}", "@ASFFTournois/Inscription/delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Inscription\\delete.html.twig");
    }
}
