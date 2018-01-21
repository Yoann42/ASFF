<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_78efcf6c85b8f9bb607a2d3dc3bd0c6dba25235915e702bd8496ff44ddb2a4e5 extends Twig_Template
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
        $__internal_da258de3260a6042bdc7f6cfb164b70d0434dd7de37834e782cb03023e74a2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da258de3260a6042bdc7f6cfb164b70d0434dd7de37834e782cb03023e74a2e6->enter($__internal_da258de3260a6042bdc7f6cfb164b70d0434dd7de37834e782cb03023e74a2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_62ae4067fdf303237c684632fcf3817761434b3168114dbac04b0a31cf74b469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ae4067fdf303237c684632fcf3817761434b3168114dbac04b0a31cf74b469->enter($__internal_62ae4067fdf303237c684632fcf3817761434b3168114dbac04b0a31cf74b469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_da258de3260a6042bdc7f6cfb164b70d0434dd7de37834e782cb03023e74a2e6->leave($__internal_da258de3260a6042bdc7f6cfb164b70d0434dd7de37834e782cb03023e74a2e6_prof);

        
        $__internal_62ae4067fdf303237c684632fcf3817761434b3168114dbac04b0a31cf74b469->leave($__internal_62ae4067fdf303237c684632fcf3817761434b3168114dbac04b0a31cf74b469_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
