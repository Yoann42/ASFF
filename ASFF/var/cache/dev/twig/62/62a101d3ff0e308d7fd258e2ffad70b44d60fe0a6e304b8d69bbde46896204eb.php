<?php

/* ASFFTournoisBundle:Tournois:delete.html.twig */
class __TwigTemplate_1073a32a9c983632d9291b1e54072b0a0122be9869bfcb9ed45b22858c482e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Tournois:delete.html.twig", 3);
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
        $__internal_0f64f61b816707b58cb8cb75a933a9ec55e64dbda9c1f717caf70bc39f85c4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f64f61b816707b58cb8cb75a933a9ec55e64dbda9c1f717caf70bc39f85c4ff->enter($__internal_0f64f61b816707b58cb8cb75a933a9ec55e64dbda9c1f717caf70bc39f85c4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:delete.html.twig"));

        $__internal_4b7d28f6e699ce239d099aaa652f858ec782edc1794a7977fe309ea09448393e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7d28f6e699ce239d099aaa652f858ec782edc1794a7977fe309ea09448393e->enter($__internal_4b7d28f6e699ce239d099aaa652f858ec782edc1794a7977fe309ea09448393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFTournoisBundle:Tournois:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f64f61b816707b58cb8cb75a933a9ec55e64dbda9c1f717caf70bc39f85c4ff->leave($__internal_0f64f61b816707b58cb8cb75a933a9ec55e64dbda9c1f717caf70bc39f85c4ff_prof);

        
        $__internal_4b7d28f6e699ce239d099aaa652f858ec782edc1794a7977fe309ea09448393e->leave($__internal_4b7d28f6e699ce239d099aaa652f858ec782edc1794a7977fe309ea09448393e_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_89f2da82a903eaa891dc027c9e893fc01279a78ebe095044ced534994ab9efd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f2da82a903eaa891dc027c9e893fc01279a78ebe095044ced534994ab9efd4->enter($__internal_89f2da82a903eaa891dc027c9e893fc01279a78ebe095044ced534994ab9efd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_4f0eaf14cb0681264e1e76cc501e9ea51c6be4a4a45a2aebeb593835389b1848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0eaf14cb0681264e1e76cc501e9ea51c6be4a4a45a2aebeb593835389b1848->enter($__internal_4f0eaf14cb0681264e1e76cc501e9ea51c6be4a4a45a2aebeb593835389b1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_4f0eaf14cb0681264e1e76cc501e9ea51c6be4a4a45a2aebeb593835389b1848->leave($__internal_4f0eaf14cb0681264e1e76cc501e9ea51c6be4a4a45a2aebeb593835389b1848_prof);

        
        $__internal_89f2da82a903eaa891dc027c9e893fc01279a78ebe095044ced534994ab9efd4->leave($__internal_89f2da82a903eaa891dc027c9e893fc01279a78ebe095044ced534994ab9efd4_prof);

    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Tournois:delete.html.twig";
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

{% endblock %}", "ASFFTournoisBundle:Tournois:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Tournois/delete.html.twig");
    }
}
