<?php

/* ASFFActualiteBundle:Actu:delete.html.twig */
class __TwigTemplate_d44c7fda9be3cc2938501ac713144a5994bb1331071dd6c29125838a4acb1290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "ASFFActualiteBundle:Actu:delete.html.twig", 3);
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
        $__internal_23ffa0249d507a8466a47bfcd8aa9264ab4f77e1ad7e8ee33d080c2e8921e962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ffa0249d507a8466a47bfcd8aa9264ab4f77e1ad7e8ee33d080c2e8921e962->enter($__internal_23ffa0249d507a8466a47bfcd8aa9264ab4f77e1ad7e8ee33d080c2e8921e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:delete.html.twig"));

        $__internal_72c56b7319c98dd1ab630c05e6a2d7bc26276d6aa0e72a706a4b5b40e45a6bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c56b7319c98dd1ab630c05e6a2d7bc26276d6aa0e72a706a4b5b40e45a6bc2->enter($__internal_72c56b7319c98dd1ab630c05e6a2d7bc26276d6aa0e72a706a4b5b40e45a6bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ffa0249d507a8466a47bfcd8aa9264ab4f77e1ad7e8ee33d080c2e8921e962->leave($__internal_23ffa0249d507a8466a47bfcd8aa9264ab4f77e1ad7e8ee33d080c2e8921e962_prof);

        
        $__internal_72c56b7319c98dd1ab630c05e6a2d7bc26276d6aa0e72a706a4b5b40e45a6bc2->leave($__internal_72c56b7319c98dd1ab630c05e6a2d7bc26276d6aa0e72a706a4b5b40e45a6bc2_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9769791fdfbea838bd058063a1e2ab5a1abfd4aae1f15a442c4d2afe32d71be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9769791fdfbea838bd058063a1e2ab5a1abfd4aae1f15a442c4d2afe32d71be4->enter($__internal_9769791fdfbea838bd058063a1e2ab5a1abfd4aae1f15a442c4d2afe32d71be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_b2993fc92cf80f9510ff859fefe2c0afac00106fec89834abf3e1594bffcf59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2993fc92cf80f9510ff859fefe2c0afac00106fec89834abf3e1594bffcf59c->enter($__internal_b2993fc92cf80f9510ff859fefe2c0afac00106fec89834abf3e1594bffcf59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_b2993fc92cf80f9510ff859fefe2c0afac00106fec89834abf3e1594bffcf59c->leave($__internal_b2993fc92cf80f9510ff859fefe2c0afac00106fec89834abf3e1594bffcf59c_prof);

        
        $__internal_9769791fdfbea838bd058063a1e2ab5a1abfd4aae1f15a442c4d2afe32d71be4->leave($__internal_9769791fdfbea838bd058063a1e2ab5a1abfd4aae1f15a442c4d2afe32d71be4_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:delete.html.twig";
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

{% endblock %}", "ASFFActualiteBundle:Actu:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/delete.html.twig");
    }
}
