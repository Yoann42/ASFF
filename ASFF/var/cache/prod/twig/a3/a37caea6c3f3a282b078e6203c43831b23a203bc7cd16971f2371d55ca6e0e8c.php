<?php

/* @ASFFActualite/Actu/index.html.twig */
class __TwigTemplate_dbe92ad473cc1a3b3d48ecb2d1cedcc27c8240f74ad6efd9973250d896f1f953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "@ASFFActualite/Actu/index.html.twig", 3);
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
  <h2>Liste des actualités</h2>

  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listActus"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 11
            echo "      <li>
        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_view", array("id" => $this->getAttribute($context["actu"], "id", array()))), "html", null, true);
            echo "\">
          <h4>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "titre", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "auteur", array()), "html", null, true);
            echo ",
        le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</h4>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </ul>
  
";
        // line 24
        echo "  ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BUREAU")) {
            // line 25
            echo "\t  <p>
\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_add");
            echo "\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-add\"></i>
\t\t  Ajouter une actualité
\t\t</a>
\t  </p>
  ";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  83 => 26,  80 => 25,  77 => 24,  73 => 21,  66 => 19,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  42 => 11,  37 => 10,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFActualite/Actu/index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\index.html.twig");
    }
}
