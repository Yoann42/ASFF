<?php

/* @ASFFCore/layout.html.twig */
class __TwigTemplate_2c157bc5bf1de408985ede5d1302c157d4c1914961cb079fd8ecb3f9c6e07e53 extends Twig_Template
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
        $__internal_32814c6be969a9805d5f340c6e5c0ddb8e7af926f66a9ff3cc4430fcfe1bea11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32814c6be969a9805d5f340c6e5c0ddb8e7af926f66a9ff3cc4430fcfe1bea11->enter($__internal_32814c6be969a9805d5f340c6e5c0ddb8e7af926f66a9ff3cc4430fcfe1bea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFCore/layout.html.twig"));

        $__internal_29eb55c49726a2cff2b0ce8ed6c0c2d6f7820d8acb77c5310d19596b2350dd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eb55c49726a2cff2b0ce8ed6c0c2d6f7820d8acb77c5310d19596b2350dd92->enter($__internal_29eb55c49726a2cff2b0ce8ed6c0c2d6f7820d8acb77c5310d19596b2350dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASFFCore/layout.html.twig"));

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
            if ( !(null === ($context["actu"] ?? $this->getContext($context, "actu")))) {
                // line 109
                echo "          ";
                if (($this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "urgent", array()) == true)) {
                    // line 110
                    echo "            <div class=\"container-fluid\" style=\"background-color:#F44336;color:#fff;\">
              <div class=\"col-md-4\">
                <h1>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "titre", array()), "html", null, true);
                    echo "</h1>
              </div>
              <div class=\"col-md-8\">
                <br>
                <h4>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["actu"] ?? $this->getContext($context, "actu")), "contenu", array()), "html", null, true);
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
        
        $__internal_32814c6be969a9805d5f340c6e5c0ddb8e7af926f66a9ff3cc4430fcfe1bea11->leave($__internal_32814c6be969a9805d5f340c6e5c0ddb8e7af926f66a9ff3cc4430fcfe1bea11_prof);

        
        $__internal_29eb55c49726a2cff2b0ce8ed6c0c2d6f7820d8acb77c5310d19596b2350dd92->leave($__internal_29eb55c49726a2cff2b0ce8ed6c0c2d6f7820d8acb77c5310d19596b2350dd92_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_054c22e883a0bf42152cbf10b2a2bb9993651f57a08f4d4e9512417d03f2a14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054c22e883a0bf42152cbf10b2a2bb9993651f57a08f4d4e9512417d03f2a14a->enter($__internal_054c22e883a0bf42152cbf10b2a2bb9993651f57a08f4d4e9512417d03f2a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_403e9620efc7bf146bffe90fde469cdc035600c4053b0958917a4544c43305c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403e9620efc7bf146bffe90fde469cdc035600c4053b0958917a4544c43305c8->enter($__internal_403e9620efc7bf146bffe90fde469cdc035600c4053b0958917a4544c43305c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ASFF";
        
        $__internal_403e9620efc7bf146bffe90fde469cdc035600c4053b0958917a4544c43305c8->leave($__internal_403e9620efc7bf146bffe90fde469cdc035600c4053b0958917a4544c43305c8_prof);

        
        $__internal_054c22e883a0bf42152cbf10b2a2bb9993651f57a08f4d4e9512417d03f2a14a->leave($__internal_054c22e883a0bf42152cbf10b2a2bb9993651f57a08f4d4e9512417d03f2a14a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2de81df080deeff1ba552bee4ae00ea7fd107a0f84cac83a48846ea0b155e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2de81df080deeff1ba552bee4ae00ea7fd107a0f84cac83a48846ea0b155e2c->enter($__internal_a2de81df080deeff1ba552bee4ae00ea7fd107a0f84cac83a48846ea0b155e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cfa9ccbf8e7960cc9f1c1acdb11e409691f03831b9d4f8408508612c25a63c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa9ccbf8e7960cc9f1c1acdb11e409691f03831b9d4f8408508612c25a63c9a->enter($__internal_cfa9ccbf8e7960cc9f1c1acdb11e409691f03831b9d4f8408508612c25a63c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
  ";
        
        $__internal_cfa9ccbf8e7960cc9f1c1acdb11e409691f03831b9d4f8408508612c25a63c9a->leave($__internal_cfa9ccbf8e7960cc9f1c1acdb11e409691f03831b9d4f8408508612c25a63c9a_prof);

        
        $__internal_a2de81df080deeff1ba552bee4ae00ea7fd107a0f84cac83a48846ea0b155e2c->leave($__internal_a2de81df080deeff1ba552bee4ae00ea7fd107a0f84cac83a48846ea0b155e2c_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_e460019310052491b80537827ba829df793b86ebdf037c14596d9029655668e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e460019310052491b80537827ba829df793b86ebdf037c14596d9029655668e6->enter($__internal_e460019310052491b80537827ba829df793b86ebdf037c14596d9029655668e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfad6426d393d42541216f059cc036a7977f0a7eb14084bbdff5c31ce3ad485c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfad6426d393d42541216f059cc036a7977f0a7eb14084bbdff5c31ce3ad485c->enter($__internal_bfad6426d393d42541216f059cc036a7977f0a7eb14084bbdff5c31ce3ad485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 128
        echo "      ";
        
        $__internal_bfad6426d393d42541216f059cc036a7977f0a7eb14084bbdff5c31ce3ad485c->leave($__internal_bfad6426d393d42541216f059cc036a7977f0a7eb14084bbdff5c31ce3ad485c_prof);

        
        $__internal_e460019310052491b80537827ba829df793b86ebdf037c14596d9029655668e6->leave($__internal_e460019310052491b80537827ba829df793b86ebdf037c14596d9029655668e6_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25adea4966c5f2d8bf5aa57891557534c1b8bbf40e7fdc15a4a37632adf00bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25adea4966c5f2d8bf5aa57891557534c1b8bbf40e7fdc15a4a37632adf00bfa->enter($__internal_25adea4966c5f2d8bf5aa57891557534c1b8bbf40e7fdc15a4a37632adf00bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_504f2bbbde005b0a8a1d15a37d8f502776ba5b1c127ce2ab2fb1e1152be1b3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504f2bbbde005b0a8a1d15a37d8f502776ba5b1c127ce2ab2fb1e1152be1b3ca->enter($__internal_504f2bbbde005b0a8a1d15a37d8f502776ba5b1c127ce2ab2fb1e1152be1b3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "      ";
        // line 179
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_504f2bbbde005b0a8a1d15a37d8f502776ba5b1c127ce2ab2fb1e1152be1b3ca->leave($__internal_504f2bbbde005b0a8a1d15a37d8f502776ba5b1c127ce2ab2fb1e1152be1b3ca_prof);

        
        $__internal_25adea4966c5f2d8bf5aa57891557534c1b8bbf40e7fdc15a4a37632adf00bfa->leave($__internal_25adea4966c5f2d8bf5aa57891557534c1b8bbf40e7fdc15a4a37632adf00bfa_prof);

    }

    public function getTemplateName()
    {
        return "@ASFFCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 179,  375 => 178,  366 => 177,  356 => 128,  347 => 127,  336 => 13,  334 => 12,  325 => 11,  307 => 9,  294 => 182,  292 => 177,  285 => 173,  272 => 163,  267 => 161,  233 => 129,  231 => 127,  224 => 122,  221 => 121,  218 => 120,  211 => 116,  204 => 112,  200 => 110,  197 => 109,  194 => 108,  192 => 107,  181 => 98,  175 => 96,  169 => 94,  167 => 93,  162 => 90,  156 => 88,  154 => 87,  145 => 81,  120 => 59,  109 => 51,  105 => 50,  101 => 49,  97 => 48,  86 => 40,  82 => 39,  78 => 38,  74 => 37,  60 => 28,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}ASFF{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
  {% endblock %}
</head>

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
              <a class=\"navbar-brand\" href=\"{{ path('asff_core_homepage') }}\"><img src=\"{{ asset('images/logo.jpg') }}\" width=\"20%\" height=\"100%\" alt=\"ASFF\"></a>
            </div>
            
            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
              <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Le Club
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('asff_club_association') }}\">L'Association</a></li>
                    <li><a href=\"{{ path('asff_club_lebureau') }}\">Le bureau</a></li>
                    <li><a href=\"{{ path('asff_club_lieuhoraire') }}\">Lieu/Horaires</a></li> 
                    <li><a href=\"{{ path('asff_club_contacts') }}\">Contacts</a></li>
                  </ul>
                </li>
             
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Info Tech
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('asff_club_liens') }}\">Liens</a></li>
                    <li><a href=\"{{ path('asff_club_reglesdubad') }}\">Règles du bad</a></li>
                    <li><a href=\"{{ path('asff_club_conseils') }}\">Conseils</a></li> 
                    <li><a href=\"{{ path('asff_club_formations') }}\">Formations</a></li> 
                  </ul>
                </li>
             
                <li class=\"dropdown\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Compétitions
                  <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('asff_tournois_home') }}\">Tournois extérieur</a></li>
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
                    <li><a href=\"{{ path('asff_actualite_home') }}\">News</a></li>
                    <li><a href=\"#\">Photos</a></li>
                    <li><a href=\"#\">Vidéos</a></li> 
                  </ul>
                </li>

                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                  <li class=\"active\"><a href=\"{{ path('asff_user_home') }}\">Mon Compte</a></li>
                {% endif %}
              </ul>

              <ul class=\"nav navbar-nav navbar-right\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                  <li><a href=\"{{ path('fos_user_security_logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span>  Déconnexion</a></li>
                {% else %}
                  <li><a href=\"{{ path('fos_user_security_logout') }}\"><span class=\"glyphicon glyphicon-log-in\"></span>  Connexion</a></li>
                {% endif %}
              </ul>
            </div>
          </div>
      </nav>
    </div>

    <br><br>

    <div class=\"row\">
      {% if actu is defined %}
        {% if actu is not null %}
          {% if actu.urgent == true %}
            <div class=\"container-fluid\" style=\"background-color:#F44336;color:#fff;\">
              <div class=\"col-md-4\">
                <h1>{{ actu.titre }}</h1>
              </div>
              <div class=\"col-md-8\">
                <br>
                <h4>{{ actu.contenu }}</h4>
              </div>
            </div>
          {% endif %}
        {% endif %}
      {% endif %}
    </div>

    <br><br>

    <div class=\"row\">
      {% block body %}
      {% endblock %}
    </div>
    
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
        <a href=\"https://www.facebook.com/Badminton.ASFF/\" title=\"Facebook ASFF\"><img src=\"{{ asset('images/facebook.png') }}\" width=\"30%\" height=\"30%\" alt=\"Facebook\" class=\"img-responsive\"/></a>
        <br>
        <a href=\"#\" title=\"Twitter ASFF\"><img src=\"{{ asset('images/twitter.png') }}\" width=\"30%\" height=\"30%\" alt=\"Twitter\" class=\"img-responsive\"/></a>
      </div>

      <div class=\"col-md-1\">
        <h4>Partenaires</h4>
      </div>
    </div>

    <div class=\"row\">
      <footer class=\"panel-footer\" style=\"background-color:#595959;color:#ffffff;\">
        <center><p>Tous droits réservés - © {{ 'now'|date('Y') }} ASFF Badminton</p></center>
      </footer>
    </div>

    {% block javascripts %}
      {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    {% endblock %}

  </div>
</body>
</html>", "@ASFFCore/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
