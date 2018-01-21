<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_773661f6e371255e34ca2b7ec6a9dee43eafb089857e2aa1c828a5ce3202a0bf extends Twig_Template
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
        $__internal_5c781d1c3a49a9adc9b0f6882b05c2d8abe1303e6237c1a41fd4466550a8643c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c781d1c3a49a9adc9b0f6882b05c2d8abe1303e6237c1a41fd4466550a8643c->enter($__internal_5c781d1c3a49a9adc9b0f6882b05c2d8abe1303e6237c1a41fd4466550a8643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_881b6e9899865050584b62ea90f266b6bf469c0a38caf9644fc9e5a0963ede39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881b6e9899865050584b62ea90f266b6bf469c0a38caf9644fc9e5a0963ede39->enter($__internal_881b6e9899865050584b62ea90f266b6bf469c0a38caf9644fc9e5a0963ede39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5c781d1c3a49a9adc9b0f6882b05c2d8abe1303e6237c1a41fd4466550a8643c->leave($__internal_5c781d1c3a49a9adc9b0f6882b05c2d8abe1303e6237c1a41fd4466550a8643c_prof);

        
        $__internal_881b6e9899865050584b62ea90f266b6bf469c0a38caf9644fc9e5a0963ede39->leave($__internal_881b6e9899865050584b62ea90f266b6bf469c0a38caf9644fc9e5a0963ede39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
