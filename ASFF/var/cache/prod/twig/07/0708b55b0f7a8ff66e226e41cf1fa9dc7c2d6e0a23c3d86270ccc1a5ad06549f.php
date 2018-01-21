<?php

/* @ASFFActualite/Actu/form.html.twig */
class __TwigTemplate_9d2331bd2e4bb8853cdbc5903178dcbbc0c7af3620660ea6560c758a272b22df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "


<div class=\"panel panel-primary\">
  <div class=\"panel-heading\"><h3>Formulaire des actualités</h3></div>
  <div class=\"panel-body\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 11
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'label');
        echo "
          ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors');
        echo "
          ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenu", array()), 'label');
        echo "
          ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenu", array()), 'errors');
        echo "
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "image", array()), 'label');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "image", array()), 'errors');
        echo "
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-HiddenType")));
        echo "
        </div>
      </div>

      <br>

      <div class=\"row\">
        <div class=\"col-md-5\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "auteur", array()), 'label');
        echo "
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "auteur", array()), 'errors');
        echo "
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-5\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'label');
        echo "
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
        echo "
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
        </div>
      </div>
      
      <br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "publier", array()), 'label');
        echo "
          ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "publier", array()), 'errors');
        echo "
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "publier", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "urgent", array()), 'label');
        echo "
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "urgent", array()), 'errors');
        echo "
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "urgent", array()), 'widget', array("attr" => array("class" => "form-CheckBoxType")));
        echo "
        </div>
      </div>

      <br><br>

      <div class=\"row\">
        <div class=\"col-md-10\">
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>
      </div>

    ";
        // line 85
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

    ";
        // line 88
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

  </div>

  <div class=\"panel-footer\"><i>Attention : cette actualité sera ajoutée directement sur la page d'accueil après validation du formulaire</i></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@ASFFActualite/Actu/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 88,  173 => 85,  166 => 78,  155 => 70,  151 => 69,  147 => 68,  138 => 62,  134 => 61,  130 => 60,  119 => 52,  115 => 51,  111 => 50,  105 => 47,  101 => 46,  97 => 45,  86 => 37,  82 => 36,  78 => 35,  67 => 27,  63 => 26,  59 => 25,  48 => 17,  44 => 16,  40 => 15,  32 => 11,  27 => 8,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFActualite/Actu/form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ActualiteBundle\\Resources\\views\\Actu\\form.html.twig");
    }
}
