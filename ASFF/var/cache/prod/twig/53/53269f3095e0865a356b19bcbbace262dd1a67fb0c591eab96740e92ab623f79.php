<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_5f99cf2266e219f40229a6274bfc53a0bab18621a2a2c67a5ed8a54801eb2508 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "  
  <br>
  
  ";
        // line 10
        echo "  ";
        if (($context["error"] ?? null)) {
            // line 11
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  77 => 34,  73 => 33,  59 => 22,  48 => 15,  45 => 13,  39 => 11,  36 => 10,  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
