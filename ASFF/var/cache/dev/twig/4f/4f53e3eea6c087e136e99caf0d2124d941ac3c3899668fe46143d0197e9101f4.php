<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_1b12e908dd0497b3299e6bfb06c6672c6c07243230411bf446fbabe85c27b073 extends Twig_Template
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
        $__internal_592c3ed52e167e8d3cc158f27d307f9979c1daa19c394120e67525b0e6f23bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592c3ed52e167e8d3cc158f27d307f9979c1daa19c394120e67525b0e6f23bf8->enter($__internal_592c3ed52e167e8d3cc158f27d307f9979c1daa19c394120e67525b0e6f23bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_530125bc44b9aca1fb9a35781bfc3b5b0a30130c83c0c96afc7a968a21cbf4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530125bc44b9aca1fb9a35781bfc3b5b0a30130c83c0c96afc7a968a21cbf4b3->enter($__internal_530125bc44b9aca1fb9a35781bfc3b5b0a30130c83c0c96afc7a968a21cbf4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_592c3ed52e167e8d3cc158f27d307f9979c1daa19c394120e67525b0e6f23bf8->leave($__internal_592c3ed52e167e8d3cc158f27d307f9979c1daa19c394120e67525b0e6f23bf8_prof);

        
        $__internal_530125bc44b9aca1fb9a35781bfc3b5b0a30130c83c0c96afc7a968a21cbf4b3->leave($__internal_530125bc44b9aca1fb9a35781bfc3b5b0a30130c83c0c96afc7a968a21cbf4b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
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
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\date_widget.html.php");
    }
}
