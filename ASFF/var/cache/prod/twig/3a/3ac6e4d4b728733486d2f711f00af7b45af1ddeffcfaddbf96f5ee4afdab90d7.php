<?php

/* ASFFTournoisBundle:Inscription:delete.html.twig */
class __TwigTemplate_b5e8bbda967ed7db4cba40a771953de7af24a76db60e0e763409b6345d89d13d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "adversaire", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tournois"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
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
        return array (  50 => 15,  38 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFTournoisBundle:Inscription:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/delete.html.twig");
    }
}
