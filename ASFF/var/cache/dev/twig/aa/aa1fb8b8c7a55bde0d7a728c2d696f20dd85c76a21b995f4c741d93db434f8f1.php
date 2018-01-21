<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_57493729bbd78f47718dd20f478145c6052c214e7a13144f81baf9f991279484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 3);
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
        $__internal_bec61e5ac6a677b6394ed6108a6ac08a9de7060ae93b440ee3d6559a86b77b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec61e5ac6a677b6394ed6108a6ac08a9de7060ae93b440ee3d6559a86b77b34->enter($__internal_bec61e5ac6a677b6394ed6108a6ac08a9de7060ae93b440ee3d6559a86b77b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b66f8a4a9fb16603af77e9693ad1aac19fedd2bc66ad897c0a4a92ec9fe3172b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66f8a4a9fb16603af77e9693ad1aac19fedd2bc66ad897c0a4a92ec9fe3172b->enter($__internal_b66f8a4a9fb16603af77e9693ad1aac19fedd2bc66ad897c0a4a92ec9fe3172b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec61e5ac6a677b6394ed6108a6ac08a9de7060ae93b440ee3d6559a86b77b34->leave($__internal_bec61e5ac6a677b6394ed6108a6ac08a9de7060ae93b440ee3d6559a86b77b34_prof);

        
        $__internal_b66f8a4a9fb16603af77e9693ad1aac19fedd2bc66ad897c0a4a92ec9fe3172b->leave($__internal_b66f8a4a9fb16603af77e9693ad1aac19fedd2bc66ad897c0a4a92ec9fe3172b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53bb7b017fab46701a3fd5849d6303b4a4b1afa6aba3194f7209f5dc61b76ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bb7b017fab46701a3fd5849d6303b4a4b1afa6aba3194f7209f5dc61b76ed0->enter($__internal_53bb7b017fab46701a3fd5849d6303b4a4b1afa6aba3194f7209f5dc61b76ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a1cbe5f812587e73acf9b24945f8baf5654d5245acc966e24f20a7ea072dcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1cbe5f812587e73acf9b24945f8baf5654d5245acc966e24f20a7ea072dcaf->enter($__internal_9a1cbe5f812587e73acf9b24945f8baf5654d5245acc966e24f20a7ea072dcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9a1cbe5f812587e73acf9b24945f8baf5654d5245acc966e24f20a7ea072dcaf->leave($__internal_9a1cbe5f812587e73acf9b24945f8baf5654d5245acc966e24f20a7ea072dcaf_prof);

        
        $__internal_53bb7b017fab46701a3fd5849d6303b4a4b1afa6aba3194f7209f5dc61b76ed0->leave($__internal_53bb7b017fab46701a3fd5849d6303b4a4b1afa6aba3194f7209f5dc61b76ed0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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

{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
