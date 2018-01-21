<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_885b8b415ff632d13b997effeba48e10fd8a475fb0705d4e94d6555a5c76506c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
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
        $__internal_2395ae0af38f11394afbef367439265734a1e4e669a8b8ac717e85fbe3a0a800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2395ae0af38f11394afbef367439265734a1e4e669a8b8ac717e85fbe3a0a800->enter($__internal_2395ae0af38f11394afbef367439265734a1e4e669a8b8ac717e85fbe3a0a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_c1ff6b0350a125ba9aac7a9fc68f440e4c6aaf6dcc6a18edbf7939f1f8d2f9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ff6b0350a125ba9aac7a9fc68f440e4c6aaf6dcc6a18edbf7939f1f8d2f9f2->enter($__internal_c1ff6b0350a125ba9aac7a9fc68f440e4c6aaf6dcc6a18edbf7939f1f8d2f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2395ae0af38f11394afbef367439265734a1e4e669a8b8ac717e85fbe3a0a800->leave($__internal_2395ae0af38f11394afbef367439265734a1e4e669a8b8ac717e85fbe3a0a800_prof);

        
        $__internal_c1ff6b0350a125ba9aac7a9fc68f440e4c6aaf6dcc6a18edbf7939f1f8d2f9f2->leave($__internal_c1ff6b0350a125ba9aac7a9fc68f440e4c6aaf6dcc6a18edbf7939f1f8d2f9f2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f139343e5fdbaa8c1288b9356c1b51b56e93af9249b50412d9d90f7223d13db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f139343e5fdbaa8c1288b9356c1b51b56e93af9249b50412d9d90f7223d13db->enter($__internal_2f139343e5fdbaa8c1288b9356c1b51b56e93af9249b50412d9d90f7223d13db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b01872e01a53b8017f7220df3016ffe728acb94055e202d3305968747897e70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01872e01a53b8017f7220df3016ffe728acb94055e202d3305968747897e70a->enter($__internal_b01872e01a53b8017f7220df3016ffe728acb94055e202d3305968747897e70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Mon compte - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b01872e01a53b8017f7220df3016ffe728acb94055e202d3305968747897e70a->leave($__internal_b01872e01a53b8017f7220df3016ffe728acb94055e202d3305968747897e70a_prof);

        
        $__internal_2f139343e5fdbaa8c1288b9356c1b51b56e93af9249b50412d9d90f7223d13db->leave($__internal_2f139343e5fdbaa8c1288b9356c1b51b56e93af9249b50412d9d90f7223d13db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f29ac56ea0dc77354f21838eb151678a6d990ce030efd0f3b65adae8cf65fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f29ac56ea0dc77354f21838eb151678a6d990ce030efd0f3b65adae8cf65fc5->enter($__internal_3f29ac56ea0dc77354f21838eb151678a6d990ce030efd0f3b65adae8cf65fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f9d6c5a317c034cd3e3839b975b20fc605903c17820215282ac959c3d27d062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9d6c5a317c034cd3e3839b975b20fc605903c17820215282ac959c3d27d062->enter($__internal_8f9d6c5a317c034cd3e3839b975b20fc605903c17820215282ac959c3d27d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f9d6c5a317c034cd3e3839b975b20fc605903c17820215282ac959c3d27d062->leave($__internal_8f9d6c5a317c034cd3e3839b975b20fc605903c17820215282ac959c3d27d062_prof);

        
        $__internal_3f29ac56ea0dc77354f21838eb151678a6d990ce030efd0f3b65adae8cf65fc5->leave($__internal_3f29ac56ea0dc77354f21838eb151678a6d990ce030efd0f3b65adae8cf65fc5_prof);

    }

    // line 50
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ba09879e0be3c258d934ff73012a69807d5c209169f09156438951b58e30382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba09879e0be3c258d934ff73012a69807d5c209169f09156438951b58e30382->enter($__internal_7ba09879e0be3c258d934ff73012a69807d5c209169f09156438951b58e30382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43b0c1f7146aad175dfb46ff869c5f035aacfd351b5da58867ba29c8fd3d5126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b0c1f7146aad175dfb46ff869c5f035aacfd351b5da58867ba29c8fd3d5126->enter($__internal_43b0c1f7146aad175dfb46ff869c5f035aacfd351b5da58867ba29c8fd3d5126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 51
        echo "    ";
        
        $__internal_43b0c1f7146aad175dfb46ff869c5f035aacfd351b5da58867ba29c8fd3d5126->leave($__internal_43b0c1f7146aad175dfb46ff869c5f035aacfd351b5da58867ba29c8fd3d5126_prof);

        
        $__internal_7ba09879e0be3c258d934ff73012a69807d5c209169f09156438951b58e30382->leave($__internal_7ba09879e0be3c258d934ff73012a69807d5c209169f09156438951b58e30382_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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

{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle/Resources/views/layout.html.twig");
    }
}
