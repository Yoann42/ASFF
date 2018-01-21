<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2b1d1ffba66e8f9e8440828838ef16968e0fe06259b2c45b9d41cff430e6fec6 extends Twig_Template
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
        $__internal_95e2a3dc577235045fc906b34c483a16a90d9f72ceb2f8f8b6792a65eaa04b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e2a3dc577235045fc906b34c483a16a90d9f72ceb2f8f8b6792a65eaa04b44->enter($__internal_95e2a3dc577235045fc906b34c483a16a90d9f72ceb2f8f8b6792a65eaa04b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e7141e0cf802feb0e5ac755c63bba956fc1e25c830bd004066b847e07fa066b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7141e0cf802feb0e5ac755c63bba956fc1e25c830bd004066b847e07fa066b7->enter($__internal_e7141e0cf802feb0e5ac755c63bba956fc1e25c830bd004066b847e07fa066b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_95e2a3dc577235045fc906b34c483a16a90d9f72ceb2f8f8b6792a65eaa04b44->leave($__internal_95e2a3dc577235045fc906b34c483a16a90d9f72ceb2f8f8b6792a65eaa04b44_prof);

        
        $__internal_e7141e0cf802feb0e5ac755c63bba956fc1e25c830bd004066b847e07fa066b7->leave($__internal_e7141e0cf802feb0e5ac755c63bba956fc1e25c830bd004066b847e07fa066b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
