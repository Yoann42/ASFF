<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_57586faf24238085dc920c1bfad1bbec7a21c6fe3126d43b07b570f1071cd047 extends Twig_Template
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
        $__internal_48b80a9da481782eaf6d42b7a2997c65eb54aaa7d9d8203909db95a2c35a03c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b80a9da481782eaf6d42b7a2997c65eb54aaa7d9d8203909db95a2c35a03c4->enter($__internal_48b80a9da481782eaf6d42b7a2997c65eb54aaa7d9d8203909db95a2c35a03c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f5df8c322bb7dfc75abbda974b841debfd425b1b642af3d4ce37eb7249ac3a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5df8c322bb7dfc75abbda974b841debfd425b1b642af3d4ce37eb7249ac3a7c->enter($__internal_f5df8c322bb7dfc75abbda974b841debfd425b1b642af3d4ce37eb7249ac3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_48b80a9da481782eaf6d42b7a2997c65eb54aaa7d9d8203909db95a2c35a03c4->leave($__internal_48b80a9da481782eaf6d42b7a2997c65eb54aaa7d9d8203909db95a2c35a03c4_prof);

        
        $__internal_f5df8c322bb7dfc75abbda974b841debfd425b1b642af3d4ce37eb7249ac3a7c->leave($__internal_f5df8c322bb7dfc75abbda974b841debfd425b1b642af3d4ce37eb7249ac3a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
