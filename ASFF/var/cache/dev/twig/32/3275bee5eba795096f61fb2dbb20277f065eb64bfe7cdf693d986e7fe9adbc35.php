<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_eb9ad79873e51b3acae66af70d50adf30578689054ee725beb719c4db6138b95 extends Twig_Template
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
        $__internal_2f007710edcc7ad7d5cb36c84d0539fc0b201f62f19f535c963fce8ff43fa78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f007710edcc7ad7d5cb36c84d0539fc0b201f62f19f535c963fce8ff43fa78d->enter($__internal_2f007710edcc7ad7d5cb36c84d0539fc0b201f62f19f535c963fce8ff43fa78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0e46ade3510ae92dac8d0fd3e317ec6c861189976c9616c217c56214dbf77777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e46ade3510ae92dac8d0fd3e317ec6c861189976c9616c217c56214dbf77777->enter($__internal_0e46ade3510ae92dac8d0fd3e317ec6c861189976c9616c217c56214dbf77777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2f007710edcc7ad7d5cb36c84d0539fc0b201f62f19f535c963fce8ff43fa78d->leave($__internal_2f007710edcc7ad7d5cb36c84d0539fc0b201f62f19f535c963fce8ff43fa78d_prof);

        
        $__internal_0e46ade3510ae92dac8d0fd3e317ec6c861189976c9616c217c56214dbf77777->leave($__internal_0e46ade3510ae92dac8d0fd3e317ec6c861189976c9616c217c56214dbf77777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
