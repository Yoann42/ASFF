<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_859fa28498b62522c84356bc9caa3b0a3df20e5446009ba4b473d657a098ad3d extends Twig_Template
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
        $__internal_a3d02f986c1295d532e3c1bd40ecd3dec83b64ed90a6be48f21d0f8357d9ce90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d02f986c1295d532e3c1bd40ecd3dec83b64ed90a6be48f21d0f8357d9ce90->enter($__internal_a3d02f986c1295d532e3c1bd40ecd3dec83b64ed90a6be48f21d0f8357d9ce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2cb2a3d66382933fc7cbe40d57c78d6beac527b6d5db1e38b51eeb9d7b91db14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb2a3d66382933fc7cbe40d57c78d6beac527b6d5db1e38b51eeb9d7b91db14->enter($__internal_2cb2a3d66382933fc7cbe40d57c78d6beac527b6d5db1e38b51eeb9d7b91db14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a3d02f986c1295d532e3c1bd40ecd3dec83b64ed90a6be48f21d0f8357d9ce90->leave($__internal_a3d02f986c1295d532e3c1bd40ecd3dec83b64ed90a6be48f21d0f8357d9ce90_prof);

        
        $__internal_2cb2a3d66382933fc7cbe40d57c78d6beac527b6d5db1e38b51eeb9d7b91db14->leave($__internal_2cb2a3d66382933fc7cbe40d57c78d6beac527b6d5db1e38b51eeb9d7b91db14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
