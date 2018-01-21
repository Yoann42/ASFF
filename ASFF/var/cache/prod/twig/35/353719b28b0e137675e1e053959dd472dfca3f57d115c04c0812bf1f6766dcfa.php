<?php

/* ASFFCoreBundle::layout.html.twig */
class __TwigTemplate_486d4a5f75cf4ddf0d02cb8effc5cc7c63809256bcabb3de2206c01f07eb0c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div class=\"row\">
      <nav class=\"navbar navbar-default navbar-fixed-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span> 
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_core_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" width=\"20%\" height=\"100%\" alt=\"ASFF\"></a>
            </div>
            
            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Le Club
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_association");
        echo "\">L'Association</a></li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_lebureau");
        echo "\">Le bureau</a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_lieuhoraire");
        echo "\">Lieu/Horaires</a></li> 
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_contacts");
        echo "\">Contacts</a></li>
                  </ul>
                </li>
             
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Info Tech
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_liens");
        echo "\">Liens</a></li>
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_reglesdubad");
        echo "\">Règles du bad</a></li>
                    <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_conseils");
        echo "\">Conseils</a></li> 
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_club_formations");
        echo "\">Formations</a></li> 
                  </ul>
                </li>
             
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Compétitions
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_tournois_home");
        echo "\">Tournois extérieur</a></li>
                    <li><a href=\"#\">Tournois intérieur</a></li>
                    <li><a href=\"#\">Interclubs</a></li> 
                    <li><a href=\"#\">Résultats</a></li> 
                  </ul>
                </li>
              
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Les Jeunes
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Ecole de bad</a></li>
                    <li><a href=\"#\">Entrainement</a></li>
                    <li><a href=\"#\">Compétition</a></li> 
                    <li><a href=\"#\">Résultats</a></li> 
                  </ul>
                </li>
              
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Médias
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_actualite_home");
        echo "\">News</a></li>
                    <li><a href=\"#\">Photos</a></li>
                    <li><a href=\"#\">Vidéos</a></li> 
                  </ul>
                </li>

                ";
        // line 87
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 88
            echo "                  <li class=\"active\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asff_user_home");
            echo "\">Mon Compte</a></li>
                ";
        }
        // line 90
        echo "              </ul>

              <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 93
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 94
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span>  Déconnexion</a></li>
                ";
        } else {
            // line 96
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>  Connexion</a></li>
                ";
        }
        // line 98
        echo "              </ul>
            </div>
          </div>
      </nav>
    </div>

    <br><br>

    <div class=\"row\">
      ";
        // line 107
        if (array_key_exists("actu", $context)) {
            // line 108
            echo "        ";
            if ( !(null === ($context["actu"] ?? null))) {
                // line 109
                echo "          ";
                if (($this->getAttribute(($context["actu"] ?? null), "urgent", array()) == true)) {
                    // line 110
                    echo "            <div class=\"container-fluid\" style=\"background-color:#F44336;color:#fff;\">
              <div class=\"col-md-4\">
                <h1>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? null), "titre", array()), "html", null, true);
                    echo "</h1>
              </div>
              <div class=\"col-md-8\">
                <br>
                <h4>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? null), "contenu", array()), "html", null, true);
                    echo "</h4>
              </div>
            </div>
          ";
                }
                // line 120
                echo "        ";
            }
            // line 121
            echo "      ";
        }
        // line 122
        echo "    </div>

    <br><br>

    <div class=\"row\">
      ";
        // line 127
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "    </div>
    
    <br><br>

    <div class=\"row\" style=\"background-color:#ffffe6;\">
      <div class=\"col-md-3\">
        <h4>Gymnase du Levant</h4>
        <div id=\"googleMap\" style=\"width:100%;height:150px;\"></div>

        <script>
          function myMap() 
          {
            var myLatLng = {lat: 48.808739, lng: 2.052802};

            var mapProp= {center:new google.maps.LatLng(48.808739, 2.052802),zoom:15,};
            
          var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
          var marker = new google.maps.Marker({position: myLatLng,map: map,title: 'Gymnase du Levant'});
        }
        </script>

        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBDupu_NhQighgqpVKLTCQQNMzVyIZvmsc&callback=myMap\"></script>
        <br>
      </div>

      <div class=\"col-md-2\">
        <h4>Adresse</h4>
        
      </div>

      <div class=\"col-md-1\">
        <h4>Suivez nous</h4>
        <a href=\"https://www.facebook.com/Badminton.ASFF/\" title=\"Facebook ASFF\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" width=\"30%\" height=\"30%\" alt=\"Facebook\" class=\"img-responsive\"/></a>
        <br>
        <a href=\"#\" title=\"Twitter ASFF\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" width=\"30%\" height=\"30%\" alt=\"Twitter\" class=\"img-responsive\"/></a>
      </div>

      <div class=\"col-md-1\">
        <h4>Partenaires</h4>
      </div>
    </div>

    <div class=\"row\">
      <footer class=\"panel-footer\" style=\"background-color:#595959;color:#ffffff;\">
        <center><p>Tous droits réservés - © ";
        // line 173
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ASFF Badminton</p></center>
      </footer>
    </div>

    ";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        echo "
  </div>
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "ASFF";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
  ";
    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        // line 128
        echo "      ";
    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        // line 178
        echo "      ";
        // line 179
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "ASFFCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 179,  321 => 178,  318 => 177,  314 => 128,  311 => 127,  306 => 13,  304 => 12,  301 => 11,  295 => 9,  288 => 182,  286 => 177,  279 => 173,  266 => 163,  261 => 161,  227 => 129,  225 => 127,  218 => 122,  215 => 121,  212 => 120,  205 => 116,  198 => 112,  194 => 110,  191 => 109,  188 => 108,  186 => 107,  175 => 98,  169 => 96,  163 => 94,  161 => 93,  156 => 90,  150 => 88,  148 => 87,  139 => 81,  114 => 59,  103 => 51,  99 => 50,  95 => 49,  91 => 48,  80 => 40,  76 => 39,  72 => 38,  68 => 37,  54 => 28,  39 => 15,  37 => 11,  32 => 9,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\CoreBundle/Resources/views/layout.html.twig");
    }
}
