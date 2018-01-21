<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9ab9bec50e8366e7f5b1309a6ed9c9f31769826be6538a7a5e1f356fb72f7407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "@FOSUser/layout.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f902ddc00d63c382fc93f17382fedb50835533e8f40dc907c5e55823d18cc1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f902ddc00d63c382fc93f17382fedb50835533e8f40dc907c5e55823d18cc1bc->enter($__internal_f902ddc00d63c382fc93f17382fedb50835533e8f40dc907c5e55823d18cc1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_0fb497589c7f6de7ce0e61c18cc6d60efce44a5f9d3b9d0912db467f28427f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb497589c7f6de7ce0e61c18cc6d60efce44a5f9d3b9d0912db467f28427f99->enter($__internal_0fb497589c7f6de7ce0e61c18cc6d60efce44a5f9d3b9d0912db467f28427f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f902ddc00d63c382fc93f17382fedb50835533e8f40dc907c5e55823d18cc1bc->leave($__internal_f902ddc00d63c382fc93f17382fedb50835533e8f40dc907c5e55823d18cc1bc_prof);

        
        $__internal_0fb497589c7f6de7ce0e61c18cc6d60efce44a5f9d3b9d0912db467f28427f99->leave($__internal_0fb497589c7f6de7ce0e61c18cc6d60efce44a5f9d3b9d0912db467f28427f99_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f9700eeccdcd46e50cc3b18e91bff119c8199b302cbc486239dc19a5ef7819a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9700eeccdcd46e50cc3b18e91bff119c8199b302cbc486239dc19a5ef7819a->enter($__internal_5f9700eeccdcd46e50cc3b18e91bff119c8199b302cbc486239dc19a5ef7819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46978f3db12ba26a925134b5c681c757b50b8f0538bdcafe8f2a6642cacfa5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46978f3db12ba26a925134b5c681c757b50b8f0538bdcafe8f2a6642cacfa5ce->enter($__internal_46978f3db12ba26a925134b5c681c757b50b8f0538bdcafe8f2a6642cacfa5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Mon compte - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_46978f3db12ba26a925134b5c681c757b50b8f0538bdcafe8f2a6642cacfa5ce->leave($__internal_46978f3db12ba26a925134b5c681c757b50b8f0538bdcafe8f2a6642cacfa5ce_prof);

        
        $__internal_5f9700eeccdcd46e50cc3b18e91bff119c8199b302cbc486239dc19a5ef7819a->leave($__internal_5f9700eeccdcd46e50cc3b18e91bff119c8199b302cbc486239dc19a5ef7819a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6e5197ac86dea3cba026d24e54086b660661d0e59dd8d63305f1dc51e34712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6e5197ac86dea3cba026d24e54086b660661d0e59dd8d63305f1dc51e34712->enter($__internal_1a6e5197ac86dea3cba026d24e54086b660661d0e59dd8d63305f1dc51e34712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5582fca6053be81529b2bf473a9f9f03ae3c2f82ccb46873e8c38f768e69ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5582fca6053be81529b2bf473a9f9f03ae3c2f82ccb46873e8c38f768e69ebd->enter($__internal_e5582fca6053be81529b2bf473a9f9f03ae3c2f82ccb46873e8c38f768e69ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <div class=\"row\">
    <div class=\"col-md-7\"><h1>Mon compte</h1>
    </div>
    ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "      <div class=\"col-md-2\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-lg btn-block btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action sur mon profil  <span class=\"caret\"></span></button>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Changer mon mot de passe</a></li>
            <li><a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Modifier mes informations</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-md-3\">
        ";
            // line 28
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()))) {
                // line 29
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
                echo "\" width=\"10%\"  height=\"10%\" class=\"img-circle\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()), "alt", array()), "html", null, true);
                echo "\"/>
        ";
            }
            // line 31
            echo "      </div>
    ";
        }
        // line 33
        echo "  </div>
   
  <hr>

  ";
        // line 38
        echo "  <div class=\"row\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 40
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
          ";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </div>

  ";
        // line 49
        echo "  <div class=\"row\">
    ";
        // line 50
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 52
        echo "  </div>

";
        
        $__internal_e5582fca6053be81529b2bf473a9f9f03ae3c2f82ccb46873e8c38f768e69ebd->leave($__internal_e5582fca6053be81529b2bf473a9f9f03ae3c2f82ccb46873e8c38f768e69ebd_prof);

        
        $__internal_1a6e5197ac86dea3cba026d24e54086b660661d0e59dd8d63305f1dc51e34712->leave($__internal_1a6e5197ac86dea3cba026d24e54086b660661d0e59dd8d63305f1dc51e34712_prof);

    }

    // line 50
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71ee97992110016cb3e4e176958540e03fd28cb9c51cdbd11aff1a4e7393277f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ee97992110016cb3e4e176958540e03fd28cb9c51cdbd11aff1a4e7393277f->enter($__internal_71ee97992110016cb3e4e176958540e03fd28cb9c51cdbd11aff1a4e7393277f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0a34dd776c2354ad9bbc2d15426dafe9a6674fa30d71d7ae5ee1f526b881bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a34dd776c2354ad9bbc2d15426dafe9a6674fa30d71d7ae5ee1f526b881bf1->enter($__internal_b0a34dd776c2354ad9bbc2d15426dafe9a6674fa30d71d7ae5ee1f526b881bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 51
        echo "    ";
        
        $__internal_b0a34dd776c2354ad9bbc2d15426dafe9a6674fa30d71d7ae5ee1f526b881bf1->leave($__internal_b0a34dd776c2354ad9bbc2d15426dafe9a6674fa30d71d7ae5ee1f526b881bf1_prof);

        
        $__internal_71ee97992110016cb3e4e176958540e03fd28cb9c51cdbd11aff1a4e7393277f->leave($__internal_71ee97992110016cb3e4e176958540e03fd28cb9c51cdbd11aff1a4e7393277f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 51,  176 => 50,  164 => 52,  162 => 50,  159 => 49,  155 => 46,  149 => 45,  140 => 42,  135 => 41,  130 => 40,  126 => 39,  123 => 38,  117 => 33,  113 => 31,  105 => 29,  103 => 28,  95 => 23,  91 => 22,  86 => 20,  80 => 16,  78 => 15,  73 => 12,  64 => 11,  51 => 7,  42 => 6,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/UserBundle/Resources/views/layout.html.twig #}

{# On étend notre layout #}
{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  Mon compte - {{ parent() }}
{% endblock %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
  <div class=\"row\">
    <div class=\"col-md-7\"><h1>Mon compte</h1>
    </div>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
      <div class=\"col-md-2\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-lg btn-block btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action sur mon profil  <span class=\"caret\"></span></button>
          <ul class=\"dropdown-menu\">
            <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a></li>
            <li><a href=\"{{ path('fos_user_profile_edit') }}\">Modifier mes informations</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-md-3\">
        {% if app.user.image is not null %}
          <img src=\"{{ asset(app.user.image.webPath) }}\" width=\"10%\"  height=\"10%\" class=\"img-circle\" alt=\"{{ app.user.image.alt }}\"/>
        {% endif %}
      </div>
    {% endif %}
  </div>
   
  <hr>

  {# On affiche les messages flash que définissent les contrôleurs du bundle #}
  <div class=\"row\">
    {% for key, messages in app.session.flashbag.all() %}
      {% for message in messages %}
        <div class=\"alert alert-{{ key }}\">
          {{ message|trans({}, 'FOSUserBundle') }}
        </div>
      {% endfor %}
    {% endfor %}
  </div>

  {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
  <div class=\"row\">
    {% block fos_user_content %}
    {% endblock fos_user_content %}
  </div>

{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
