<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cb8137a99d5bf144d6f739dc1934509bd1864afdef45b94f98e60619c39d39e8 extends Twig_Template
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
        $__internal_ffd0749b5ddec5d44df43bc44759b3d041c3075e8e5ffeb318f0d5934e846de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd0749b5ddec5d44df43bc44759b3d041c3075e8e5ffeb318f0d5934e846de5->enter($__internal_ffd0749b5ddec5d44df43bc44759b3d041c3075e8e5ffeb318f0d5934e846de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_65d8865cf114e300a7c92bf5f80573c3fa302e34a6f505486211453f023d6a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d8865cf114e300a7c92bf5f80573c3fa302e34a6f505486211453f023d6a77->enter($__internal_65d8865cf114e300a7c92bf5f80573c3fa302e34a6f505486211453f023d6a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ffd0749b5ddec5d44df43bc44759b3d041c3075e8e5ffeb318f0d5934e846de5->leave($__internal_ffd0749b5ddec5d44df43bc44759b3d041c3075e8e5ffeb318f0d5934e846de5_prof);

        
        $__internal_65d8865cf114e300a7c92bf5f80573c3fa302e34a6f505486211453f023d6a77->leave($__internal_65d8865cf114e300a7c92bf5f80573c3fa302e34a6f505486211453f023d6a77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
