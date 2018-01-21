<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_5d529361cbd3a87b2df25f1ea1cae7bc6f34857f854d8d38556f9832921bed69 extends Twig_Template
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
        $__internal_fbad057b9d4e56f5d4d96e29f2cd073b8404ed334201053434c479973aa20275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbad057b9d4e56f5d4d96e29f2cd073b8404ed334201053434c479973aa20275->enter($__internal_fbad057b9d4e56f5d4d96e29f2cd073b8404ed334201053434c479973aa20275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bd614d381d68465ffa3d3c1327e8cfe8b2d1463e65758736d2db06b6f585bcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd614d381d68465ffa3d3c1327e8cfe8b2d1463e65758736d2db06b6f585bcdd->enter($__internal_bd614d381d68465ffa3d3c1327e8cfe8b2d1463e65758736d2db06b6f585bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fbad057b9d4e56f5d4d96e29f2cd073b8404ed334201053434c479973aa20275->leave($__internal_fbad057b9d4e56f5d4d96e29f2cd073b8404ed334201053434c479973aa20275_prof);

        
        $__internal_bd614d381d68465ffa3d3c1327e8cfe8b2d1463e65758736d2db06b6f585bcdd->leave($__internal_bd614d381d68465ffa3d3c1327e8cfe8b2d1463e65758736d2db06b6f585bcdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
