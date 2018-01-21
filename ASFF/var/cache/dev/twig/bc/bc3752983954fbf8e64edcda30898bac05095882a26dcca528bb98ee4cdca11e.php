<?php

/* ASFFActualiteBundle:Actu:menu.html.twig */
class __TwigTemplate_5c0421b6b936cfed82514864004a87e4dc0227376a0f39affbfe105d4a00162f extends Twig_Template
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
        $__internal_435c48e28861c16939db8b842205c6a3c7558f9eec8bb881b1509ca6e71fed64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435c48e28861c16939db8b842205c6a3c7558f9eec8bb881b1509ca6e71fed64->enter($__internal_435c48e28861c16939db8b842205c6a3c7558f9eec8bb881b1509ca6e71fed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:menu.html.twig"));

        $__internal_a5c1ea76b1901da24ae51da36fd03110d6ea8e3077d9a83b06f56fc78ba6eedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c1ea76b1901da24ae51da36fd03110d6ea8e3077d9a83b06f56fc78ba6eedc->enter($__internal_a5c1ea76b1901da24ae51da36fd03110d6ea8e3077d9a83b06f56fc78ba6eedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFActualiteBundle:Actu:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listActus"] ?? $this->getContext($context, "listActus")));
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
        
        $__internal_435c48e28861c16939db8b842205c6a3c7558f9eec8bb881b1509ca6e71fed64->leave($__internal_435c48e28861c16939db8b842205c6a3c7558f9eec8bb881b1509ca6e71fed64_prof);

        
        $__internal_a5c1ea76b1901da24ae51da36fd03110d6ea8e3077d9a83b06f56fc78ba6eedc->leave($__internal_a5c1ea76b1901da24ae51da36fd03110d6ea8e3077d9a83b06f56fc78ba6eedc_prof);

    }

    public function getTemplateName()
    {
        return "ASFFActualiteBundle:Actu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  28 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for actu in listActus %}
    <li>
      <a href=\"{{ path('asff_actualite_view', {'id': actu.id}) }}\">
        {{ actu.titre }}
      </a>
    </li>
  {% endfor %}
</ul>", "ASFFActualiteBundle:Actu:menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle/Resources/views/Actu/menu.html.twig");
    }
}
