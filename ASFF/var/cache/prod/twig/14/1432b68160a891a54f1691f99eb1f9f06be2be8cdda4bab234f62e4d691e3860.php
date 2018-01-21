<?php

/* @ASFFTournois/Tournois/form.html.twig */
class __TwigTemplate_7245ede8487df1c27f6d7f71fcf378662b8be6e9f5ddc5f3c1056c2b4a3d4a45 extends Twig_Template
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
  <div class=\"panel-heading\"><h3>Formulaire de tournois</h3></div>
  <div class=\"panel-body\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adversaire", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adversaire", array()), 'errors');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "adversaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateTournois", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateTournois", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateTournois", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
      </div>
      <div class=\"col-md-5\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateLimit", array()), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateLimit", array()), 'errors');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dateLimit", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "TableauxPoules", array()), 'label');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "TableauxPoules", array()), 'errors');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "TableauxPoules", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "series", array()), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "series", array()), 'errors');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "series", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remarque", array()), 'label');
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remarque", array()), 'errors');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "remarque", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lienTournois", array()), 'label');
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lienTournois", array()), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lienTournois", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-10\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lienLigue", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lienLigue", array()), 'errors');
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lienLigue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-5\">
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "auteur", array()), 'label');
        echo "
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "auteur", array()), 'errors');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"col-md-5\">
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'label');
        echo "
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
        echo "
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("attr" => array("class" => "form-DataType")));
        echo "
      </div>
    </div>

    <br>

    ";
        // line 88
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 93
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

    ";
        // line 96
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
  </div>

  <div class=\"panel-footer\"><i>Attention : ce tournois sera ajouté directement sur la page d'accueil après validation du formulaire</i></div>
  
</div>";
    }

    public function getTemplateName()
    {
        return "@ASFFTournois/Tournois/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 96,  208 => 93,  202 => 88,  193 => 81,  189 => 80,  185 => 79,  179 => 76,  175 => 75,  171 => 74,  162 => 68,  158 => 67,  154 => 66,  145 => 60,  141 => 59,  137 => 58,  128 => 52,  124 => 51,  120 => 50,  111 => 44,  107 => 43,  103 => 42,  94 => 36,  90 => 35,  86 => 34,  77 => 28,  73 => 27,  69 => 26,  63 => 23,  59 => 22,  55 => 21,  46 => 15,  42 => 14,  38 => 13,  30 => 9,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ASFFTournois/Tournois/form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\TournoisBundle\\Resources\\views\\Tournois\\form.html.twig");
    }
}
