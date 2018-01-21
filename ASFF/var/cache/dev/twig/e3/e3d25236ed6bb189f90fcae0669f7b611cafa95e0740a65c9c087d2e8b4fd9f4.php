<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_79174ff2b717b21a267e0fee5cdbd861d119e41cab7bc10d98d84114214ede0c extends Twig_Template
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
        $__internal_9b4903d4526869150d1461a795100756ce4fd42aa44ba760d5f7f8727b251ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4903d4526869150d1461a795100756ce4fd42aa44ba760d5f7f8727b251ee4->enter($__internal_9b4903d4526869150d1461a795100756ce4fd42aa44ba760d5f7f8727b251ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1bb24ebc68103e9a15cd3cd80b6038b28a8728e08d82d73c699a868f58a8eec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb24ebc68103e9a15cd3cd80b6038b28a8728e08d82d73c699a868f58a8eec6->enter($__internal_1bb24ebc68103e9a15cd3cd80b6038b28a8728e08d82d73c699a868f58a8eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9b4903d4526869150d1461a795100756ce4fd42aa44ba760d5f7f8727b251ee4->leave($__internal_9b4903d4526869150d1461a795100756ce4fd42aa44ba760d5f7f8727b251ee4_prof);

        
        $__internal_1bb24ebc68103e9a15cd3cd80b6038b28a8728e08d82d73c699a868f58a8eec6->leave($__internal_1bb24ebc68103e9a15cd3cd80b6038b28a8728e08d82d73c699a868f58a8eec6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
