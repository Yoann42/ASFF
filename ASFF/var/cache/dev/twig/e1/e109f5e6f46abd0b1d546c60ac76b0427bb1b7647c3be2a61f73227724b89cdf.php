<?php

/* @ASFFActualite/Actu/view.html.twig */
class __TwigTemplate_ff515627489b88c3ef8b044e5a9a9ad8974506c23a025a0a9a8734b11144ed53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "@ASFFActualite/Actu/view.html.twig", 3);
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
        $__internal_61c4e62ee46a5358545cf9ae4252f4daf6a7edbc2fb93a4f3262a0434628fb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c4e62ee46a5358545cf9ae4252f4daf6a7edbc2fb93a4f3262a0434628fb8e->enter($__internal_61c4e62ee46a5358545cf9ae4252f4daf6a7edbc2fb93a4f3262a0434628fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/view.html.twig"));

        $__internal_458f31267a2347f446e8bbd1fd1cb7b32c955d0b44354e62f798b8eeba00ee35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458f31267a2347f446e8bbd1fd1cb7b32c955d0b44354e62f798b8eeba00ee35->enter($__internal_458f31267a2347f446e8bbd1fd1cb7b32c955d0b44354e62f798b8eeba00ee35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61c4e62ee46a5358545cf9ae4252f4daf6a7edbc2fb93a4f3262a0434628fb8e->leave($__internal_61c4e62ee46a5358545cf9ae4252f4daf6a7edbc2fb93a4f3262a0434628fb8e_prof);

        
        $__internal_458f31267a2347f446e8bbd1fd1cb7b32c955d0b44354e62f798b8eeba00ee35->leave($__internal_458f31267a2347f446e8bbd1fd1cb7b32c955d0b44354e62f798b8eeba00ee35_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cb2e4c048b0cd5e763a2ae06c0605a4423d32638093c370ac2537872bf8912ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2e4c048b0cd5e763a2ae06c0605a4423d32638093c370ac2537872bf8912ee->enter($__internal_cb2e4c048b0cd5e763a2ae06c0605a4423d32638093c370ac2537872bf8912ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_25bf49bfe76c676eba9f967005408d71ebf65779a95a91e132d4156cbe2c6bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bf49bfe76c676eba9f967005408d71ebf65779a95a91e132d4156cbe2c6bb7->enter($__internal_25bf49bfe76c676eba9f967005408d71ebf65779a95a91e132d4156cbe2c6bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "

\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "titre", array()), "html", null, true);
        echo "</h2></div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 11
        if ( !(null === $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "image", array()))) {
            // line 12
            echo "\t\t\t    <div class=\"row\">
\t\t\t\t\t<center><img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
\t\t\t\t\t\twidth=\"70%\" 
\t\t\t\t\t\theight=\"70%\"
\t\t\t\t\t\talt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "image", array()), "alt", array()), "html", null, true);
            echo "\"/></center>
\t\t\t\t</div>
\t\t\t";
        }
        // line 19
        echo "\t\t\t<br><br>
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "contenu", array()), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<i>Publier par ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t\t</div>
\t</div>


\t<a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_home");
        echo "\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste
\t</a>

\t";
        // line 34
        echo "\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BUREAU")) {
            // line 35
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_edit", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'actualité
\t\t</a>
\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_delete", array("id" => $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'actualité
\t\t</a>
\t";
        }
        // line 44
        echo "
";
        
        $__internal_25bf49bfe76c676eba9f967005408d71ebf65779a95a91e132d4156cbe2c6bb7->leave($__internal_25bf49bfe76c676eba9f967005408d71ebf65779a95a91e132d4156cbe2c6bb7_prof);

        
        $__internal_cb2e4c048b0cd5e763a2ae06c0605a4423d32638093c370ac2537872bf8912ee->leave($__internal_cb2e4c048b0cd5e763a2ae06c0605a4423d32638093c370ac2537872bf8912ee_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  114 => 39,  106 => 35,  103 => 34,  95 => 28,  85 => 23,  79 => 20,  76 => 19,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/view/Actu/view.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block ocplatform_body %}


\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\"><h2>{{ actu.titre }}</h2></div>
\t\t<div class=\"panel-body\">
\t\t\t{% if actu.image is not null %}
\t\t\t    <div class=\"row\">
\t\t\t\t\t<center><img src=\"{{ asset(actu.image.webPath) }}\"
\t\t\t\t\t\twidth=\"70%\" 
\t\t\t\t\t\theight=\"70%\"
\t\t\t\t\t\talt=\"{{ actu.image.alt }}\"/></center>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<br><br>
\t\t\t{{ actu.contenu }}
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<i>Publier par {{ actu.auteur }}, le {{ actu.date|date('d/m/Y') }}</i>
\t\t</div>
\t</div>


\t<a href=\"{{ path('asff_actualite_home') }}\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste
\t</a>

\t{# On n'affiche les liens qu'aux membres du bureau #}
\t{% if is_granted('ROLE_BUREAU') %}
\t\t<a href=\"{{ path('asff_actualite_edit', {'id': actu.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'actualité
\t\t</a>
\t\t<a href=\"{{ path('asff_actualite_delete', {'id': actu.id}) }}\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'actualité
\t\t</a>
\t{% endif %}

{% endblock %}", "@ASFFActualite/Actu/view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\view.html.twig");
    }
}
