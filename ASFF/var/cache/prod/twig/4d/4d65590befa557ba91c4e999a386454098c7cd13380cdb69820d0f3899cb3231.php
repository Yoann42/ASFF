<?php

/* ASFFActualiteBundle:Actu:view.html.twig */
class __TwigTemplate_82c07f5942401baa44f6cb8db32837e0a400a2b85593f459f9b667af9bae6699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "ASFFActualiteBundle:Actu:view.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 6
        echo "

\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? null), "titre", array()), "html", null, true);
        echo "</h2></div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 11
        if ( !(null === $this->getAttribute(($context["actu"] ?? null), "image", array()))) {
            // line 12
            echo "\t\t\t    <div class=\"row\">
\t\t\t\t\t<center><img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actu"] ?? null), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
\t\t\t\t\t\twidth=\"70%\" 
\t\t\t\t\t\theight=\"70%\"
\t\t\t\t\t\talt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["actu"] ?? null), "image", array()), "alt", array()), "html", null, true);
            echo "\"/></center>
\t\t\t\t</div>
\t\t\t";
        }
        // line 19
        echo "\t\t\t<br><br>
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? null), "contenu", array()), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<i>Publier par ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? null), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["actu"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_edit", array("id" => $this->getAttribute(($context["actu"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'actualité
\t\t</a>
\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_delete", array("id" => $this->getAttribute(($context["actu"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'actualité
\t\t</a>
\t";
        }
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  96 => 39,  88 => 35,  85 => 34,  77 => 28,  67 => 23,  61 => 20,  58 => 19,  52 => 16,  46 => 13,  43 => 12,  41 => 11,  36 => 9,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFActualiteBundle:Actu:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/view.html.twig");
    }
}
