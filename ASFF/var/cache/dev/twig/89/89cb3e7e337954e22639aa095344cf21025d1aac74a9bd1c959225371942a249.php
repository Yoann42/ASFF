<?php

/* @ASFFTournois/Tournois/delete.html.twig */
class __TwigTemplate_37387aeb8e210f34c7bc019ed4e09b46d97d24846998cf02389667be9c5a9f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Tournois/delete.html.twig", 3);
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
        $__internal_812ed5e1f5904fe6ec91b1366465d94766affc37882dd2c41250751b00d03fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ed5e1f5904fe6ec91b1366465d94766affc37882dd2c41250751b00d03fe3->enter($__internal_812ed5e1f5904fe6ec91b1366465d94766affc37882dd2c41250751b00d03fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/delete.html.twig"));

        $__internal_024bacf305d5e47a3eb6c4a12fabd911cba854555ee170e4b528ef88710f5187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024bacf305d5e47a3eb6c4a12fabd911cba854555ee170e4b528ef88710f5187->enter($__internal_024bacf305d5e47a3eb6c4a12fabd911cba854555ee170e4b528ef88710f5187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFTournois/Tournois/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812ed5e1f5904fe6ec91b1366465d94766affc37882dd2c41250751b00d03fe3->leave($__internal_812ed5e1f5904fe6ec91b1366465d94766affc37882dd2c41250751b00d03fe3_prof);

        
        $__internal_024bacf305d5e47a3eb6c4a12fabd911cba854555ee170e4b528ef88710f5187->leave($__internal_024bacf305d5e47a3eb6c4a12fabd911cba854555ee170e4b528ef88710f5187_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d84095fa54213e8b28594128b8700ea35a2e24857a45147d612cab3ee0ff2ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84095fa54213e8b28594128b8700ea35a2e24857a45147d612cab3ee0ff2ad5->enter($__internal_d84095fa54213e8b28594128b8700ea35a2e24857a45147d612cab3ee0ff2ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f951ac49279026aa4fd9592b5b1e98a8b8b23703d2c55378d68696f8fc6efed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f951ac49279026aa4fd9592b5b1e98a8b8b23703d2c55378d68696f8fc6efed1->enter($__internal_f951ac49279026aa4fd9592b5b1e98a8b8b23703d2c55378d68696f8fc6efed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>Supprimer un tournois</h2>

  <p>
    Etes-vous certain de vouloir supprimer ce tournois : \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "adversaire", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 14
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_delete", array("id" => $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute(($context["tournois"] ?? $this->getContext($context, "tournois")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des tournois
    </a>
    ";
        // line 20
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 22
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_f951ac49279026aa4fd9592b5b1e98a8b8b23703d2c55378d68696f8fc6efed1->leave($__internal_f951ac49279026aa4fd9592b5b1e98a8b8b23703d2c55378d68696f8fc6efed1_prof);

        
        $__internal_d84095fa54213e8b28594128b8700ea35a2e24857a45147d612cab3ee0ff2ad5->leave($__internal_d84095fa54213e8b28594128b8700ea35a2e24857a45147d612cab3ee0ff2ad5_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  73 => 20,  66 => 15,  61 => 14,  55 => 10,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/TournoisBundle/Resources/views/Tournois/delete.html.twig #}

{% extends \"ASFFTournoisBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>Supprimer un tournois</h2>

  <p>
    Etes-vous certain de vouloir supprimer ce tournois : \"{{ tournois.adversaire }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('asff_tournois_delete', {'id': tournois.id}) }}\" method=\"post\">
    <a href=\"{{ path('asff_tournois_view', {'id': tournois.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste des tournois
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}", "@ASFFTournois/Tournois/delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\delete.html.twig");
    }
}
