<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2a940aaff42131f1ef2f96c9c45093a3c79b000d49648260729b3db4fb557fe2 extends Twig_Template
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
        $__internal_25db639d74339b31ec7e7800d42fe882c84f88eeb9b7a769c3a3359b3069e39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25db639d74339b31ec7e7800d42fe882c84f88eeb9b7a769c3a3359b3069e39b->enter($__internal_25db639d74339b31ec7e7800d42fe882c84f88eeb9b7a769c3a3359b3069e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_34232919d374b78de4e3e0528499cf050816e65d231ec2c37b5391683f0d2f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34232919d374b78de4e3e0528499cf050816e65d231ec2c37b5391683f0d2f50->enter($__internal_34232919d374b78de4e3e0528499cf050816e65d231ec2c37b5391683f0d2f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_25db639d74339b31ec7e7800d42fe882c84f88eeb9b7a769c3a3359b3069e39b->leave($__internal_25db639d74339b31ec7e7800d42fe882c84f88eeb9b7a769c3a3359b3069e39b_prof);

        
        $__internal_34232919d374b78de4e3e0528499cf050816e65d231ec2c37b5391683f0d2f50->leave($__internal_34232919d374b78de4e3e0528499cf050816e65d231ec2c37b5391683f0d2f50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
