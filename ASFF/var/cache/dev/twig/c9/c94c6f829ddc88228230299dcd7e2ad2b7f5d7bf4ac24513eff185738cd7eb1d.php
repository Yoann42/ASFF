<?php

/* @ASFFActualite/Actu/index.html.twig */
class __TwigTemplate_1908f451946fd36e3e933e0f0bdb668b1c570b019cc0a127371b5587ad680d20 extends Twig_Template
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
        $__internal_660f385235e691027a0fdf64d7521f4e17577e8d17044a155aa7c44a380a41c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660f385235e691027a0fdf64d7521f4e17577e8d17044a155aa7c44a380a41c2->enter($__internal_660f385235e691027a0fdf64d7521f4e17577e8d17044a155aa7c44a380a41c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/index.html.twig"));

        $__internal_20381472d7c938bfd6d943bdcdce34c53df1fe43b8df3f3e58455f4ec916f498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20381472d7c938bfd6d943bdcdce34c53df1fe43b8df3f3e58455f4ec916f498->enter($__internal_20381472d7c938bfd6d943bdcdce34c53df1fe43b8df3f3e58455f4ec916f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFActualite/Actu/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660f385235e691027a0fdf64d7521f4e17577e8d17044a155aa7c44a380a41c2->leave($__internal_660f385235e691027a0fdf64d7521f4e17577e8d17044a155aa7c44a380a41c2_prof);

        
        $__internal_20381472d7c938bfd6d943bdcdce34c53df1fe43b8df3f3e58455f4ec916f498->leave($__internal_20381472d7c938bfd6d943bdcdce34c53df1fe43b8df3f3e58455f4ec916f498_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1c0caedf8f15e26207a95eecfc5db7c5d5a22805f1aeb0a23488bb410a488f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0caedf8f15e26207a95eecfc5db7c5d5a22805f1aeb0a23488bb410a488f45->enter($__internal_1c0caedf8f15e26207a95eecfc5db7c5d5a22805f1aeb0a23488bb410a488f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0096b7d88f894c8fabfc3d0488c42846b9b2cfa4bfa413e19b251c919499d1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0096b7d88f894c8fabfc3d0488c42846b9b2cfa4bfa413e19b251c919499d1fc->enter($__internal_0096b7d88f894c8fabfc3d0488c42846b9b2cfa4bfa413e19b251c919499d1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>Liste des actualités</h2>

  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listActus"] ?? $this->getContext($context, "listActus")));
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
        
        $__internal_0096b7d88f894c8fabfc3d0488c42846b9b2cfa4bfa413e19b251c919499d1fc->leave($__internal_0096b7d88f894c8fabfc3d0488c42846b9b2cfa4bfa413e19b251c919499d1fc_prof);

        
        $__internal_1c0caedf8f15e26207a95eecfc5db7c5d5a22805f1aeb0a23488bb410a488f45->leave($__internal_1c0caedf8f15e26207a95eecfc5db7c5d5a22805f1aeb0a23488bb410a488f45_prof);

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
        return array (  110 => 32,  101 => 26,  98 => 25,  95 => 24,  91 => 21,  84 => 19,  76 => 16,  72 => 15,  67 => 13,  63 => 12,  60 => 11,  55 => 10,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ActualiteBundle/Resources/views/Actu/index.html.twig #}

{% extends \"ASFFActualiteBundle::layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>Liste des actualités</h2>

  <ul>
    {% for actu in listActus %}
      <li>
        <a href=\"{{ path('asff_actualite_view', {'id': actu.id}) }}\">
          <h4>{{ actu.titre }}
        </a>
        par {{ actu.auteur }},
        le {{ actu.date|date('d/m/Y') }}</h4>
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>
  
{# On n'affiche les liens qu'aux membres du bureau #}
  {% if is_granted('ROLE_BUREAU') %}
\t  <p>
\t\t<a href=\"{{ path('asff_actualite_add') }}\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-add\"></i>
\t\t  Ajouter une actualité
\t\t</a>
\t  </p>
  {% endif %}

{% endblock %}", "@ASFFActualite/Actu/index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\index.html.twig");
    }
}
