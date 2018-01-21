<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6ed7c3620dda543de5a95670dea168c818956c75a04dba8dee534747caf50a92 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  Mon compte - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
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
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "image", array()))) {
                // line 29
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "image", array()), "webPath", array())), "html", null, true);
                echo "\" width=\"10%\"  height=\"10%\" class=\"img-circle\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "image", array()), "alt", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
    }

    // line 50
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 51
        echo "    ";
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
        return array (  143 => 51,  140 => 50,  134 => 52,  132 => 50,  129 => 49,  125 => 46,  119 => 45,  110 => 42,  105 => 41,  100 => 40,  96 => 39,  93 => 38,  87 => 33,  83 => 31,  75 => 29,  73 => 28,  65 => 23,  61 => 22,  56 => 20,  50 => 16,  48 => 15,  43 => 12,  40 => 11,  33 => 7,  30 => 6,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
