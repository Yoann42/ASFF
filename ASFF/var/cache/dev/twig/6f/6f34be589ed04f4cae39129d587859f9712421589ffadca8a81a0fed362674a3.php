<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cef0d749491a5eeff3236e3fa256147b09b71548b29cfef330b4a93651df9082 extends Twig_Template
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
        $__internal_ba21ef8fb6503b49d748b56252e12373cc7cdb37691057dc7f1a2df7796461f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba21ef8fb6503b49d748b56252e12373cc7cdb37691057dc7f1a2df7796461f3->enter($__internal_ba21ef8fb6503b49d748b56252e12373cc7cdb37691057dc7f1a2df7796461f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_de69602f1ddd1517d47f397a0e87b0e106591dc3de3f201f3143aa47d9c3a5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de69602f1ddd1517d47f397a0e87b0e106591dc3de3f201f3143aa47d9c3a5f4->enter($__internal_de69602f1ddd1517d47f397a0e87b0e106591dc3de3f201f3143aa47d9c3a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ba21ef8fb6503b49d748b56252e12373cc7cdb37691057dc7f1a2df7796461f3->leave($__internal_ba21ef8fb6503b49d748b56252e12373cc7cdb37691057dc7f1a2df7796461f3_prof);

        
        $__internal_de69602f1ddd1517d47f397a0e87b0e106591dc3de3f201f3143aa47d9c3a5f4->leave($__internal_de69602f1ddd1517d47f397a0e87b0e106591dc3de3f201f3143aa47d9c3a5f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
