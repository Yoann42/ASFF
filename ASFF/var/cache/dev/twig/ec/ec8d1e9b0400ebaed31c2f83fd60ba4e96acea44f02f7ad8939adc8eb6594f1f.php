<?php

/* @ASFFActualite/Actu/menu.html.twig */
class __TwigTemplate_b64d8b4eefa66e35413395a5fa66edf671b3634709f7fe3103ae98bf6213717c extends Twig_Template
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
        $__internal_447636f192e898395c687456454dc4467f53e320ccfd2bd60c99134d4d4cbfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447636f192e898395c687456454dc4467f53e320ccfd2bd60c99134d4d4cbfec->enter($__internal_447636f192e898395c687456454dc4467f53e320ccfd2bd60c99134d4d4cbfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/menu.html.twig"));

        $__internal_5e7d42506857495781bf2db9ccbdb893490c42f00f4eb97c96e6ccf584298c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7d42506857495781bf2db9ccbdb893490c42f00f4eb97c96e6ccf584298c0d->enter($__internal_5e7d42506857495781bf2db9ccbdb893490c42f00f4eb97c96e6ccf584298c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/menu.html.twig"));

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
        
        $__internal_447636f192e898395c687456454dc4467f53e320ccfd2bd60c99134d4d4cbfec->leave($__internal_447636f192e898395c687456454dc4467f53e320ccfd2bd60c99134d4d4cbfec_prof);

        
        $__internal_5e7d42506857495781bf2db9ccbdb893490c42f00f4eb97c96e6ccf584298c0d->leave($__internal_5e7d42506857495781bf2db9ccbdb893490c42f00f4eb97c96e6ccf584298c0d_prof);

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
</ul>", "@ASFFActualite/Actu/menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\menu.html.twig");
    }
}
