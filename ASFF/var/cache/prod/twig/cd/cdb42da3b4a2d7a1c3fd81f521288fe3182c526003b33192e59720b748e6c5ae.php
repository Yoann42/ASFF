<?php

/* @ASFFTournois/Tournois/add.html.twig */
class __TwigTemplate_ddc422fedf3a77398c0ac16a1ad5d73b81342774c78114658ba7b822654eda9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFTournoisBundle::layout.html.twig", "@ASFFTournois/Tournois/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <h2>Ajouter un tournois</h2>

  <hr>
  
  ";
        // line 11
        echo twig_include($this->env, $context, "ASFFTournoisBundle:Tournois:form.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFTournois/Tournois/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\add.html.twig");
    }
}
