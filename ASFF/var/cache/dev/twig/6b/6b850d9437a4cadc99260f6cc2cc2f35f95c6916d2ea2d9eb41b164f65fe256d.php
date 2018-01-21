<?php

/* ASFFTournoisBundle:Inscription:delete.html.twig */
class __TwigTemplate_3bbf917ce9661bd1df4744f94b5959daead3e7e186bdd1097adca1921a58f251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Inscription:delete.html.twig", 3);
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
        $__internal_88ac31997d42548f4e94a2dd65381f1a47a72b354291dcadcee7384232d44b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ac31997d42548f4e94a2dd65381f1a47a72b354291dcadcee7384232d44b91->enter($__internal_88ac31997d42548f4e94a2dd65381f1a47a72b354291dcadcee7384232d44b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:delete.html.twig"));

        $__internal_75f1b8d5dc77d941ba1caf10ab2d080a696f50157e1a81edea2e2568416f1d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f1b8d5dc77d941ba1caf10ab2d080a696f50157e1a81edea2e2568416f1d3e->enter($__internal_75f1b8d5dc77d941ba1caf10ab2d080a696f50157e1a81edea2e2568416f1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Inscription:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ac31997d42548f4e94a2dd65381f1a47a72b354291dcadcee7384232d44b91->leave($__internal_88ac31997d42548f4e94a2dd65381f1a47a72b354291dcadcee7384232d44b91_prof);

        
        $__internal_75f1b8d5dc77d941ba1caf10ab2d080a696f50157e1a81edea2e2568416f1d3e->leave($__internal_75f1b8d5dc77d941ba1caf10ab2d080a696f50157e1a81edea2e2568416f1d3e_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8d1ae3f02a66982603be229a77203b09efbb2cda21255449f43b24c50c9e9617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1ae3f02a66982603be229a77203b09efbb2cda21255449f43b24c50c9e9617->enter($__internal_8d1ae3f02a66982603be229a77203b09efbb2cda21255449f43b24c50c9e9617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6fd8f8f7f16ebc0be92c57dbde96a71655c5265f8f284bb4f02439085cba45bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd8f8f7f16ebc0be92c57dbde96a71655c5265f8f284bb4f02439085cba45bc->enter($__internal_6fd8f8f7f16ebc0be92c57dbde96a71655c5265f8f284bb4f02439085cba45bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_6fd8f8f7f16ebc0be92c57dbde96a71655c5265f8f284bb4f02439085cba45bc->leave($__internal_6fd8f8f7f16ebc0be92c57dbde96a71655c5265f8f284bb4f02439085cba45bc_prof);

        
        $__internal_8d1ae3f02a66982603be229a77203b09efbb2cda21255449f43b24c50c9e9617->leave($__internal_8d1ae3f02a66982603be229a77203b09efbb2cda21255449f43b24c50c9e9617_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Inscription:delete.html.twig";
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

{% endblock %}", "ASFFTournoisBundle:Inscription:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/delete.html.twig");
    }
}
