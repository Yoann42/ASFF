<?php

/* @ASFFActualite/Actu/edit.html.twig */
class __TwigTemplate_78b3f6ffca3ad816a73a4db6543b2fe2ae6ecfd28dacf6ad4e7f106c8f1dbe1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFActualiteBundle::layout.html.twig", "@ASFFActualite/Actu/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <h2>Modifier un article</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "ASFFActualiteBundle:Actu:form.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFActualite/Actu/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\edit.html.twig");
    }
}
