<?php

/* @ASFFActualite/Actu/menu.html.twig */
class __TwigTemplate_33c49d249f35d94125b4237199c4965b363533cf4643aa9e80d35ca523bff694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listActus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_view", array("id" => $this->getAttribute($context["actu"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "titre", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  37 => 10,  33 => 9,  30 => 8,  26 => 7,  22 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFActualite/Actu/menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\menu.html.twig");
    }
}
