<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_2d0c511cca59152ef2ab77b1b8ce0c7176a56c0695fb411d2b584a70956b1b2f extends Twig_Template
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
        $__internal_8fcc0930c9ce791b8c2f5859b50754b0e006d41e33f71bf11e1c6a12c6b5b188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcc0930c9ce791b8c2f5859b50754b0e006d41e33f71bf11e1c6a12c6b5b188->enter($__internal_8fcc0930c9ce791b8c2f5859b50754b0e006d41e33f71bf11e1c6a12c6b5b188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4e585f11a857190c46da0c99a36b7de7fed81a291b01555e1e0e3cc4be65bf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e585f11a857190c46da0c99a36b7de7fed81a291b01555e1e0e3cc4be65bf3f->enter($__internal_4e585f11a857190c46da0c99a36b7de7fed81a291b01555e1e0e3cc4be65bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8fcc0930c9ce791b8c2f5859b50754b0e006d41e33f71bf11e1c6a12c6b5b188->leave($__internal_8fcc0930c9ce791b8c2f5859b50754b0e006d41e33f71bf11e1c6a12c6b5b188_prof);

        
        $__internal_4e585f11a857190c46da0c99a36b7de7fed81a291b01555e1e0e3cc4be65bf3f->leave($__internal_4e585f11a857190c46da0c99a36b7de7fed81a291b01555e1e0e3cc4be65bf3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
