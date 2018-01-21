<?php

/* ASFFCoreBundle:Default:index.html.twig */
class __TwigTemplate_9fbfd67db1020d155935d37a6f386f4ab5abd2aa3864b818579b8ed97418d537 extends Twig_Template
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
        $__internal_c9d535e04f1b8c64e7562966c5b9a7fcbd759d0a68e4298fabbc6c4d452d4a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d535e04f1b8c64e7562966c5b9a7fcbd759d0a68e4298fabbc6c4d452d4a44->enter($__internal_c9d535e04f1b8c64e7562966c5b9a7fcbd759d0a68e4298fabbc6c4d452d4a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFCoreBundle:Default:index.html.twig"));

        $__internal_8ea2ba7063d82a83327fa36a976fee0acc0bd5c7c18c0d224ea2fc146f53ca74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea2ba7063d82a83327fa36a976fee0acc0bd5c7c18c0d224ea2fc146f53ca74->enter($__internal_8ea2ba7063d82a83327fa36a976fee0acc0bd5c7c18c0d224ea2fc146f53ca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASFFCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d535e04f1b8c64e7562966c5b9a7fcbd759d0a68e4298fabbc6c4d452d4a44->leave($__internal_c9d535e04f1b8c64e7562966c5b9a7fcbd759d0a68e4298fabbc6c4d452d4a44_prof);

        
        $__internal_8ea2ba7063d82a83327fa36a976fee0acc0bd5c7c18c0d224ea2fc146f53ca74->leave($__internal_8ea2ba7063d82a83327fa36a976fee0acc0bd5c7c18c0d224ea2fc146f53ca74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0350d998ea5430417bac2215f02778559781c2cbed3cb0f6bb567c04d5254fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0350d998ea5430417bac2215f02778559781c2cbed3cb0f6bb567c04d5254fe->enter($__internal_c0350d998ea5430417bac2215f02778559781c2cbed3cb0f6bb567c04d5254fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31ecd00d2b9d1a603b52ec7b1aa76565e732cc81f4cac95eaefd37e5f62ec2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ecd00d2b9d1a603b52ec7b1aa76565e732cc81f4cac95eaefd37e5f62ec2e3->enter($__internal_31ecd00d2b9d1a603b52ec7b1aa76565e732cc81f4cac95eaefd37e5f62ec2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_31ecd00d2b9d1a603b52ec7b1aa76565e732cc81f4cac95eaefd37e5f62ec2e3->leave($__internal_31ecd00d2b9d1a603b52ec7b1aa76565e732cc81f4cac95eaefd37e5f62ec2e3_prof);

        
        $__internal_c0350d998ea5430417bac2215f02778559781c2cbed3cb0f6bb567c04d5254fe->leave($__internal_c0350d998ea5430417bac2215f02778559781c2cbed3cb0f6bb567c04d5254fe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfde6e9e3f5cea0029a8a8e752e5993474a557931bdfc9dd5de27dd732db9a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfde6e9e3f5cea0029a8a8e752e5993474a557931bdfc9dd5de27dd732db9a3b->enter($__internal_dfde6e9e3f5cea0029a8a8e752e5993474a557931bdfc9dd5de27dd732db9a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b21c86504c18df6f9eb868d439eaecfc8dc2f2cc9c70a7c7aad54a47263f1923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21c86504c18df6f9eb868d439eaecfc8dc2f2cc9c70a7c7aad54a47263f1923->enter($__internal_b21c86504c18df6f9eb868d439eaecfc8dc2f2cc9c70a7c7aad54a47263f1923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")), 0, array(), "array"), "adversaire", array()), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tournois/tournois_vierge.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100px\"/></a>
            <div class=\"carousel-caption\">
              <h3>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")), 0, array(), "array"), "adversaire", array()), "html", null, true);
        echo "</h3>
              <p>Le ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")), 0, array(), "array"), "datetournois", array()), "d/m/Y"), "html", null, true);
        echo "</p>
              <p>Limite d'inscription ";
        // line 144
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")), 0, array(), "array"), "datelimit", array()), "d/m/Y"), "html", null, true);
        echo "</p>
            </div>
          </div>

          ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["listTournois"]) ? $context["listTournois"] : $this->getContext($context, "listTournois")), 1, 3));
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
        
        $__internal_b21c86504c18df6f9eb868d439eaecfc8dc2f2cc9c70a7c7aad54a47263f1923->leave($__internal_b21c86504c18df6f9eb868d439eaecfc8dc2f2cc9c70a7c7aad54a47263f1923_prof);

        
        $__internal_dfde6e9e3f5cea0029a8a8e752e5993474a557931bdfc9dd5de27dd732db9a3b->leave($__internal_dfde6e9e3f5cea0029a8a8e752e5993474a557931bdfc9dd5de27dd732db9a3b_prof);

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
        return array (  284 => 158,  274 => 154,  270 => 153,  266 => 152,  259 => 150,  256 => 149,  252 => 148,  245 => 144,  241 => 143,  237 => 142,  228 => 140,  212 => 127,  194 => 112,  166 => 87,  159 => 83,  152 => 79,  116 => 46,  109 => 42,  102 => 38,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ASFF/CoreBundle/Resources/views/Default/index.html.twig #}

{% extends \"ASFFCoreBundle::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}

{% block body %}

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
            <img src=\"{{ asset('images/carousel/1.jpg') }}\" width=\"100%\" height=\"100%\">
          </div>

          <div class=\"item\">
            <img src=\"{{ asset('images/carousel/2.jpg') }}\" width=\"100%\" height=\"100%\">
          </div>

          <div class=\"item\">
            <img src=\"{{ asset('images/carousel/3.jpg') }}\" width=\"100%\" height=\"100%\">
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
            <img src=\"{{ asset('images/tournois/interclub_vierge.jpg') }}\" width=\"60%\" height=\"60%\">
          </div>

          <div class=\"item\">
            <img src=\"{{ asset('images/tournois/interclub_vierge.jpg') }}\" width=\"60%\" height=\"60%\">
          </div>

          <div class=\"item\">
            <img src=\"{{ asset('images/tournois/interclub_vierge.jpg') }}\" width=\"60%\" height=\"60%\">
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
            <img src=\"{{ asset('images/actualites/6.jpeg') }}\" width=\"60%\" height=\"60%\">
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
      <a href=\"{{ path('asff_tournois_home') }}\" class=\"btn btn-primary btn-block\"><h4>Tournois</h4></a>
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
            <a href=\"{{ path('asff_tournois_view', {'id': listTournois[0].id}) }}\" title=\"{{ listTournois[0].adversaire }}\"><img src=\"{{ asset('images/tournois/tournois_vierge.jpg') }}\" width=\"100%\" height=\"100px\"/></a>
            <div class=\"carousel-caption\">
              <h3>{{ listTournois[0].adversaire }}</h3>
              <p>Le {{ listTournois[0].datetournois|date('d/m/Y') }}</p>
              <p>Limite d'inscription {{ listTournois[0].datelimit|date('d/m/Y') }}</p>
            </div>
          </div>

          {% for tournois in listTournois|slice(1,3) %}
            <div class=\"item\">
              <img src=\"{{ path('asff_tournois_view', {'id': tournois.id}) }}\"><img src=\"{{ asset('images/tournois/tournois_vierge.jpg') }}\" width=\"100%\" height=\"60%\"/></a>
              <div class=\"carousel-caption\">
                <h3>{{ tournois.adversaire }}</h3>
                <p>Le {{ tournois.datetournois|date('d/m/Y') }}</p>
                <p>Limite d'inscription {{ tournois.datelimit|date('d/m/Y') }}</p>
              </div>
            </div>
           {% endfor %}
          </div>
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


{% endblock %}", "ASFFCoreBundle:Default:index.html.twig", "C:\\wamp64\\www\\ASFF\\src\\ASFF\\CoreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
