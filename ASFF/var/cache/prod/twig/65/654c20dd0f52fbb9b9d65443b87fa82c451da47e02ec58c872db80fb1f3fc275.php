<?php

/* ASFFTournoisBundle:Inscription:edit.html.twig */
class __TwigTemplate_958f35a970c60f60de288f07c181aebc9ce1219d0fb9382428f8264cb8555b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "ASFFTournoisBundle:Inscription:edit.html.twig", 3);
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
  
  <br>
  
  <h3>Mon classement</h3>
  <p>Simple : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "msn", array()), "html", null, true);
        echo "</p>
  <p>Double : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "aim", array()), "html", null, true);
        echo "</p>
  <p>Mixte : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "yim", array()), "html", null, true);
        echo "</p>
\t\t
  <br>
\t
  ";
        // line 18
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Inscription:form.html.twig");
        echo "
  
  <p>
\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\" class=\"btn btn-default\">
\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\tRetour à la liste des tournois
\t</a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Inscription:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  57 => 18,  50 => 14,  46 => 13,  42 => 12,  34 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFTournoisBundle:Inscription:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Inscription/edit.html.twig");
    }
}
