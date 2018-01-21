<?php

/* @ASFFClub/layoutClub.html.twig */
class __TwigTemplate_d8a23afda26f5e86d86e4f188652e951a790ee749ae623a2032fafecf7b8161b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@ASFFClub/layoutClub.html.twig", 3);
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
        $__internal_6f7a3ff107d68c6297a9efb2831acce1ebf5c0b5d6de557f214fca37d8ff5f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7a3ff107d68c6297a9efb2831acce1ebf5c0b5d6de557f214fca37d8ff5f0a->enter($__internal_6f7a3ff107d68c6297a9efb2831acce1ebf5c0b5d6de557f214fca37d8ff5f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/layoutClub.html.twig"));

        $__internal_de9bce90e060731f3218215e93274329ba8e307d6543b813e041c702ce1df13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9bce90e060731f3218215e93274329ba8e307d6543b813e041c702ce1df13c->enter($__internal_de9bce90e060731f3218215e93274329ba8e307d6543b813e041c702ce1df13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFClub/layoutClub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f7a3ff107d68c6297a9efb2831acce1ebf5c0b5d6de557f214fca37d8ff5f0a->leave($__internal_6f7a3ff107d68c6297a9efb2831acce1ebf5c0b5d6de557f214fca37d8ff5f0a_prof);

        
        $__internal_de9bce90e060731f3218215e93274329ba8e307d6543b813e041c702ce1df13c->leave($__internal_de9bce90e060731f3218215e93274329ba8e307d6543b813e041c702ce1df13c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80719ced7bbcc1c0f5fb2b6170bc65899ae37a9766877030a3672a5080b4d28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80719ced7bbcc1c0f5fb2b6170bc65899ae37a9766877030a3672a5080b4d28c->enter($__internal_80719ced7bbcc1c0f5fb2b6170bc65899ae37a9766877030a3672a5080b4d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1acc0c722e06ca7bdb590a06b967532d21b9845ac8b2226d67121749d4c02f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acc0c722e06ca7bdb590a06b967532d21b9845ac8b2226d67121749d4c02f74->enter($__internal_1acc0c722e06ca7bdb590a06b967532d21b9845ac8b2226d67121749d4c02f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Actualité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1acc0c722e06ca7bdb590a06b967532d21b9845ac8b2226d67121749d4c02f74->leave($__internal_1acc0c722e06ca7bdb590a06b967532d21b9845ac8b2226d67121749d4c02f74_prof);

        
        $__internal_80719ced7bbcc1c0f5fb2b6170bc65899ae37a9766877030a3672a5080b4d28c->leave($__internal_80719ced7bbcc1c0f5fb2b6170bc65899ae37a9766877030a3672a5080b4d28c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c14038a7b1426e420fd298ab0d27ff2016f9a72f618e0437a44cf9c371b1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c14038a7b1426e420fd298ab0d27ff2016f9a72f618e0437a44cf9c371b1b4->enter($__internal_b2c14038a7b1426e420fd298ab0d27ff2016f9a72f618e0437a44cf9c371b1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6a705cf203c4e02654e2d8803780a62e37b5ea1c6ad3f8c44736b1fa3032fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a705cf203c4e02654e2d8803780a62e37b5ea1c6ad3f8c44736b1fa3032fe7->enter($__internal_c6a705cf203c4e02654e2d8803780a62e37b5ea1c6ad3f8c44736b1fa3032fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Le Club</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_c6a705cf203c4e02654e2d8803780a62e37b5ea1c6ad3f8c44736b1fa3032fe7->leave($__internal_c6a705cf203c4e02654e2d8803780a62e37b5ea1c6ad3f8c44736b1fa3032fe7_prof);

        
        $__internal_b2c14038a7b1426e420fd298ab0d27ff2016f9a72f618e0437a44cf9c371b1b4->leave($__internal_b2c14038a7b1426e420fd298ab0d27ff2016f9a72f618e0437a44cf9c371b1b4_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9f21c129cd1c72d6b0237f9506dde26d817a3ecad0817d13dc0b30e2fa543dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f21c129cd1c72d6b0237f9506dde26d817a3ecad0817d13dc0b30e2fa543dea->enter($__internal_9f21c129cd1c72d6b0237f9506dde26d817a3ecad0817d13dc0b30e2fa543dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_54aef648e7883a4eaa715dfc69c032b65ce8d3a9b52f0d84cd276d2bf593b8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54aef648e7883a4eaa715dfc69c032b65ce8d3a9b52f0d84cd276d2bf593b8f9->enter($__internal_54aef648e7883a4eaa715dfc69c032b65ce8d3a9b52f0d84cd276d2bf593b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_54aef648e7883a4eaa715dfc69c032b65ce8d3a9b52f0d84cd276d2bf593b8f9->leave($__internal_54aef648e7883a4eaa715dfc69c032b65ce8d3a9b52f0d84cd276d2bf593b8f9_prof);

        
        $__internal_9f21c129cd1c72d6b0237f9506dde26d817a3ecad0817d13dc0b30e2fa543dea->leave($__internal_9f21c129cd1c72d6b0237f9506dde26d817a3ecad0817d13dc0b30e2fa543dea_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFClub/layoutClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/ClubBundle/Resources/views/layoutClub.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Actualité - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Le Club</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "@ASFFClub/layoutClub.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle\\Resources\\views\\layoutClub.html.twig");
    }
}
