<?php

/* ASFFCoreBundle:Default:index.html.twig */
class __TwigTemplate_10e42d7e2ddc41a63dc151c78a4ba968c26e3085aae42a5754bcbf2da206086f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ASFFCoreBundle::layout.html.twig", "ASFFCoreBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<br>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-3\">
      <h2>Bienvenue ami(e)s Badistes</h2>
    </div>
    <div class=\"col-md-7\">
      <h4>Ce site présente les activités de la section Badminton de l'Association Sportive de Fontenay-le-Fleury ( 78 )</h4>
      <p>N'hésitez pas à nous faire part de toutes vos demandes et remarques pour qu'il réponde au mieux à vos attentes.</p></div></div>
    <div class=\"col-md-1\"></div>
  <br>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"item active\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/carousel/1.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
          </div>

          <div class=\"item\">
            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/carousel/2.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
          </div>

          <div class=\"item\">
            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/carousel/3.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div></div></div>

  <br>
  <br>
  <br>

  <div class=\"row\">
    <div class=\"col-md-4\">
      <a href=\"#\" class=\"btn btn-primary btn-block\"><h4>Interclubs</h4></a>
      <div id=\"InterclubsCarousel\" class=\"carousel slide\" data-ride=\"carousel\" align=\"center\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#InterclubsCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#InterclubsCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#InterclubsCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"item active\">
            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tournois/interclub_vierge.jpg"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\">
          </div>

          <div class=\"item\">
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tournois/interclub_vierge.jpg"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\">
          </div>

          <div class=\"item\">
            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tournois/interclub_vierge.jpg"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#InterclubsCarousel\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#InterclubsCarousel\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div></div>
    <div class=\"col-md-4\">
      <a href=\"#\" class=\"btn btn-primary btn-block\"><h4>Rendez-vous du Club</h4></a>
      <div id=\"ClubCarousel\" class=\"carousel slide\" data-ride=\"carousel\" align=\"center\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#ClubCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"item active\">
            <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/actualites/6.jpeg"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#ClubCarousel\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#ClubCarousel\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div></div>
    <div class=\"col-md-4\">
      <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\" class=\"btn btn-primary btn-block\"><h4>Tournois</h4></a>
      <div id=\"TournoisCarousel\" class=\"carousel slide\" data-ride=\"carousel\" align=\"center\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#TournoisCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#TournoisCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#TournoisCarousel\" data-slide-to=\"2\"></li>
          <li data-target=\"#TournoisCarousel\" data-slide-to=\"3\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"item active\">
            <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($this->getAttribute(($context["listTournois"] ?? null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["listTournois"] ?? null), 0, array(), "array"), "adversaire", array()), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tournois/tournois_vierge.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100px\"/></a>
            <div class=\"carousel-caption\">
              <h3>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["listTournois"] ?? null), 0, array(), "array"), "adversaire", array()), "html", null, true);
        echo "</h3>
              <p>Le ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["listTournois"] ?? null), 0, array(), "array"), "datetournois", array()), "d/m/Y"), "html", null, true);
        echo "</p>
              <p>Limite d'inscription ";
        // line 144
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["listTournois"] ?? null), 0, array(), "array"), "datelimit", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            </div>
          </div>

          ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["listTournois"] ?? null), 1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["tournois"]) {
            // line 149
            echo "            <div class=\"item\">
              <img src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($context["tournois"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tournois/tournois_vierge.jpg"), "html", null, true);
            echo "\" width=\"100%\" height=\"60%\"/></a>
              <div class=\"carousel-caption\">
                <h3>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournois"], "adversaire", array()), "html", null, true);
            echo "</h3>
                <p>Le ";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournois"], "datetournois", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                <p>Limite d'inscription ";
            // line 154
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournois"], "datelimit", array()), "d/m/Y"), "html", null, true);
            echo "</p>
              </div>
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "          </div>
        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#TournoisCarousel\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#TournoisCarousel\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div></div></div></div>

<hr>

<p><a class=\"btn btn-primary btn-lg\" href=\"http://asff-badminton.com\"> Lien vers le site actuel </a></p>


";
    }

    public function getTemplateName()
    {
        return "ASFFCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 158,  244 => 154,  240 => 153,  236 => 152,  229 => 150,  226 => 149,  222 => 148,  215 => 144,  211 => 143,  207 => 142,  198 => 140,  182 => 127,  164 => 112,  136 => 87,  129 => 83,  122 => 79,  86 => 46,  79 => 42,  72 => 38,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFCoreBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
