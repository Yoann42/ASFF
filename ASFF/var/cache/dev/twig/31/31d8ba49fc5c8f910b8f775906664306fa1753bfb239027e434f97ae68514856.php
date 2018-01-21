<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_05151ca90d16151150b4ab8f901902195b957fd2e8adc539d41c1a47d1b12abd extends Twig_Template
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
        $__internal_cfe4b0ddf7c0dab12d79c84a9640b0e31e193fb9ec75b59beb8ff3ca2db7ce58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe4b0ddf7c0dab12d79c84a9640b0e31e193fb9ec75b59beb8ff3ca2db7ce58->enter($__internal_cfe4b0ddf7c0dab12d79c84a9640b0e31e193fb9ec75b59beb8ff3ca2db7ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_cc2600a5f0a59bea00d23eb98a5202987ff86f91fcf78c994f932dc40ad81d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2600a5f0a59bea00d23eb98a5202987ff86f91fcf78c994f932dc40ad81d10->enter($__internal_cc2600a5f0a59bea00d23eb98a5202987ff86f91fcf78c994f932dc40ad81d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cfe4b0ddf7c0dab12d79c84a9640b0e31e193fb9ec75b59beb8ff3ca2db7ce58->leave($__internal_cfe4b0ddf7c0dab12d79c84a9640b0e31e193fb9ec75b59beb8ff3ca2db7ce58_prof);

        
        $__internal_cc2600a5f0a59bea00d23eb98a5202987ff86f91fcf78c994f932dc40ad81d10->leave($__internal_cc2600a5f0a59bea00d23eb98a5202987ff86f91fcf78c994f932dc40ad81d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
