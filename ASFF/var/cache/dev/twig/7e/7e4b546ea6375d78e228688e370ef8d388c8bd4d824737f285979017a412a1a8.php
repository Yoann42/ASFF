<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cff0db78bf9781ad199f340550e59e0c856606df94df0bc5d75153f4520e815 extends Twig_Template
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
        $__internal_a979f0c1ffca3aafe0cf2ceb00310aab038e24751ecf92b7c6f7b09007bc3a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a979f0c1ffca3aafe0cf2ceb00310aab038e24751ecf92b7c6f7b09007bc3a08->enter($__internal_a979f0c1ffca3aafe0cf2ceb00310aab038e24751ecf92b7c6f7b09007bc3a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e1f411e0f47021ee3a2e07e507fe6737d61b566883bade50e9c60feede89e5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f411e0f47021ee3a2e07e507fe6737d61b566883bade50e9c60feede89e5f2->enter($__internal_e1f411e0f47021ee3a2e07e507fe6737d61b566883bade50e9c60feede89e5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a979f0c1ffca3aafe0cf2ceb00310aab038e24751ecf92b7c6f7b09007bc3a08->leave($__internal_a979f0c1ffca3aafe0cf2ceb00310aab038e24751ecf92b7c6f7b09007bc3a08_prof);

        
        $__internal_e1f411e0f47021ee3a2e07e507fe6737d61b566883bade50e9c60feede89e5f2->leave($__internal_e1f411e0f47021ee3a2e07e507fe6737d61b566883bade50e9c60feede89e5f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
