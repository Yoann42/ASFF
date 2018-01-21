<?php

/* ASFFTournoisBundle:Poona:classement.html.twig */
class __TwigTemplate_ec45be4e96f799bad400960952497252fcef296ac94c45a1865b70fd6b628336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFTournoisBundle:Poona:classement.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Classement de ";
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 25
        echo "
";
    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 18
        echo "\t<h2>Licence n°";
        echo twig_escape_filter($this->env, ($context["licence"] ?? null), "html", null, true);
        echo "</h2>
\t
\t<p>Classement Simple : ";
        // line 20
        echo twig_escape_filter($this->env, ($context["simple"] ?? null), "html", null, true);
        echo "</p>
\t<p>Classement Double : ";
        // line 21
        echo twig_escape_filter($this->env, ($context["double"] ?? null), "html", null, true);
        echo "</p>
\t<p>Classement Mixte : ";
        // line 22
        echo twig_escape_filter($this->env, ($context["mixte"] ?? null), "html", null, true);
        echo "</p>
\t
  ";
    }

    public function getTemplateName()
    {
        return "ASFFTournoisBundle:Poona:classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  75 => 21,  71 => 20,  65 => 18,  62 => 17,  57 => 25,  54 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFTournoisBundle:Poona:classement.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle/Resources/views/Poona/classement.html.twig");
    }
}
