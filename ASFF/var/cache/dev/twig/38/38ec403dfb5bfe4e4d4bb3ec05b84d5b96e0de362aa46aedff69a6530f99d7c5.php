<?php

/* @ASFFActualite/Actu/delete.html.twig */
class __TwigTemplate_168f72516010dda036840e30f9cd962eef2f336212094b98258a801459891d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "@ASFFActualite/Actu/delete.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFActualiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49726501150a2a5e354930e53f113d72ff062a9adf6eef5e4ae35a8eff75db19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49726501150a2a5e354930e53f113d72ff062a9adf6eef5e4ae35a8eff75db19->enter($__internal_49726501150a2a5e354930e53f113d72ff062a9adf6eef5e4ae35a8eff75db19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/delete.html.twig"));

        $__internal_4c8f7d027f1b7a60a95ca37978062b8a5e0303b644786b4e584b0b80bb7258ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8f7d027f1b7a60a95ca37978062b8a5e0303b644786b4e584b0b80bb7258ff->enter($__internal_4c8f7d027f1b7a60a95ca37978062b8a5e0303b644786b4e584b0b80bb7258ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49726501150a2a5e354930e53f113d72ff062a9adf6eef5e4ae35a8eff75db19->leave($__internal_49726501150a2a5e354930e53f113d72ff062a9adf6eef5e4ae35a8eff75db19_prof);

        
        $__internal_4c8f7d027f1b7a60a95ca37978062b8a5e0303b644786b4e584b0b80bb7258ff->leave($__internal_4c8f7d027f1b7a60a95ca37978062b8a5e0303b644786b4e584b0b80bb7258ff_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_52987b4554bda4d596d6d2b469330d8150a01cd8e891f4678cdda3ee58a09d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52987b4554bda4d596d6d2b469330d8150a01cd8e891f4678cdda3ee58a09d3e->enter($__internal_52987b4554bda4d596d6d2b469330d8150a01cd8e891f4678cdda3ee58a09d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_90c3fb3830f4acf8a4fa3dd07c33f5dbf26581ec1f059a93f7088505ff512bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c3fb3830f4acf8a4fa3dd07c33f5dbf26581ec1f059a93f7088505ff512bca->enter($__internal_90c3fb3830f4acf8a4fa3dd07c33f5dbf26581ec1f059a93f7088505ff512bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>Supprimer une actualité</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce : \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "titre", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 14
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_delete", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_view", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'actualité
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
        
        $__internal_90c3fb3830f4acf8a4fa3dd07c33f5dbf26581ec1f059a93f7088505ff512bca->leave($__internal_90c3fb3830f4acf8a4fa3dd07c33f5dbf26581ec1f059a93f7088505ff512bca_prof);

        
        $__internal_52987b4554bda4d596d6d2b469330d8150a01cd8e891f4678cdda3ee58a09d3e->leave($__internal_52987b4554bda4d596d6d2b469330d8150a01cd8e891f4678cdda3ee58a09d3e_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/delete.html.twig";
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
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/delete.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>Supprimer une actualité</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce : \"{{ actu.titre }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('asff_actualite_delete', {'id': actu.id}) }}\" method=\"post\">
    <a href=\"{{ path('asff_actualite_view', {'id': actu.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'actualité
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}", "@ASFFActualite/Actu/delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\delete.html.twig");
    }
}
