<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_75948f6e8c88110ff59cf605e7203fa6efa15713e1e4027ed08496ee7218e491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASFFUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a91964b637c79486ce99e25459c314d91e1ed6db6da748ec29aebfe5abb6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a91964b637c79486ce99e25459c314d91e1ed6db6da748ec29aebfe5abb6b4->enter($__internal_60a91964b637c79486ce99e25459c314d91e1ed6db6da748ec29aebfe5abb6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_4a8e5b6bc203dcf865ca9aa320501b0ba5240a0c13987e0bff5edfed4a0d674e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8e5b6bc203dcf865ca9aa320501b0ba5240a0c13987e0bff5edfed4a0d674e->enter($__internal_4a8e5b6bc203dcf865ca9aa320501b0ba5240a0c13987e0bff5edfed4a0d674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a91964b637c79486ce99e25459c314d91e1ed6db6da748ec29aebfe5abb6b4->leave($__internal_60a91964b637c79486ce99e25459c314d91e1ed6db6da748ec29aebfe5abb6b4_prof);

        
        $__internal_4a8e5b6bc203dcf865ca9aa320501b0ba5240a0c13987e0bff5edfed4a0d674e->leave($__internal_4a8e5b6bc203dcf865ca9aa320501b0ba5240a0c13987e0bff5edfed4a0d674e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a741104a8fab0255c253413d27f59408f399f99ac8d13233a128e3e83ba61d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a741104a8fab0255c253413d27f59408f399f99ac8d13233a128e3e83ba61d7a->enter($__internal_a741104a8fab0255c253413d27f59408f399f99ac8d13233a128e3e83ba61d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f36f218f6b53280d12ca52b0b9894ed5c33c1959ec28f64332352c3a987cca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f36f218f6b53280d12ca52b0b9894ed5c33c1959ec28f64332352c3a987cca3->enter($__internal_1f36f218f6b53280d12ca52b0b9894ed5c33c1959ec28f64332352c3a987cca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "  
  <br>
  
  ";
        // line 10
        echo "  ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 13
        echo "
  ";
        // line 15
        echo "<form class=\"panel panel-primary\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
  <div class=\"panel-heading\">
    <h2>Connexion</h2>
  </div>
  <div class=\"panel-body\">
    <div class=\"col-md-4\">
      <label for=\"username\">Login :</label>
      <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    </div>
    <div class=\"col-md-4\">
      <label for=\"password\">Mot de passe :</label>
      <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>
    <div class=\"col-md-4\">
      <input type=\"submit\" value=\"Connexion\" />
    </div>
  </div>
  <div class=\"panel-footer\">
    <p>Si vous n'êtes pas encore inscrit, il faut cliquer <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> ici</a></p>
    <p>Vous avez oublié votre mot de passe, c'est par  <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\"> ici</a></p>
  </div>
</form>

";
        
        $__internal_1f36f218f6b53280d12ca52b0b9894ed5c33c1959ec28f64332352c3a987cca3->leave($__internal_1f36f218f6b53280d12ca52b0b9894ed5c33c1959ec28f64332352c3a987cca3_prof);

        
        $__internal_a741104a8fab0255c253413d27f59408f399f99ac8d13233a128e3e83ba61d7a->leave($__internal_a741104a8fab0255c253413d27f59408f399f99ac8d13233a128e3e83ba61d7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  91 => 33,  77 => 22,  66 => 15,  63 => 13,  57 => 11,  54 => 10,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/UserBundle/Resources/views/Security/login.html.twig #}

{% extends \"ASFFUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
  
  <br>
  
  {# S'il y a une erreur, on l'affiche dans un joli cadre #}
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}

  {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
<form class=\"panel panel-primary\" action=\"{{ path('fos_user_security_check') }}\" method=\"POST\">
  <div class=\"panel-heading\">
    <h2>Connexion</h2>
  </div>
  <div class=\"panel-body\">
    <div class=\"col-md-4\">
      <label for=\"username\">Login :</label>
      <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
    </div>
    <div class=\"col-md-4\">
      <label for=\"password\">Mot de passe :</label>
      <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>
    <div class=\"col-md-4\">
      <input type=\"submit\" value=\"Connexion\" />
    </div>
  </div>
  <div class=\"panel-footer\">
    <p>Si vous n'êtes pas encore inscrit, il faut cliquer <a href=\"{{ path('fos_user_registration_register') }}\"> ici</a></p>
    <p>Vous avez oublié votre mot de passe, c'est par  <a href=\"{{ path('fos_user_resetting_request') }}\"> ici</a></p>
  </div>
</form>

{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
