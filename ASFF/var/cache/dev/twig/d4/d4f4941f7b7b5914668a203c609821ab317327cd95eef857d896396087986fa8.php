<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1c75792a26564538c85c0eef8b8b912a5aded647155de2c75ba85466268cda73 extends Twig_Template
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
        $__internal_8fc8fc0d71295240b538d81b9d6d82a57d815e3971abc732052988d1133081d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc8fc0d71295240b538d81b9d6d82a57d815e3971abc732052988d1133081d5->enter($__internal_8fc8fc0d71295240b538d81b9d6d82a57d815e3971abc732052988d1133081d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f66d3cb1541382f520ce8d6c355cd9a9ab27a2695b1bf53dddff5047df91afbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66d3cb1541382f520ce8d6c355cd9a9ab27a2695b1bf53dddff5047df91afbf->enter($__internal_f66d3cb1541382f520ce8d6c355cd9a9ab27a2695b1bf53dddff5047df91afbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8fc8fc0d71295240b538d81b9d6d82a57d815e3971abc732052988d1133081d5->leave($__internal_8fc8fc0d71295240b538d81b9d6d82a57d815e3971abc732052988d1133081d5_prof);

        
        $__internal_f66d3cb1541382f520ce8d6c355cd9a9ab27a2695b1bf53dddff5047df91afbf->leave($__internal_f66d3cb1541382f520ce8d6c355cd9a9ab27a2695b1bf53dddff5047df91afbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
