<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_abf063c762b63a028d72506b4d0acb9660f7665b6b26f33ae1f17aabf34cd6bc extends Twig_Template
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
        $__internal_38fee31242e54dd8e88ed4d80f08f3d6380cade069d1574d7b12041cb8ce2f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fee31242e54dd8e88ed4d80f08f3d6380cade069d1574d7b12041cb8ce2f58->enter($__internal_38fee31242e54dd8e88ed4d80f08f3d6380cade069d1574d7b12041cb8ce2f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_429d5fe2a79d673648affd165123d8f5171a4e7f9eea2ee91a4231e961e27ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429d5fe2a79d673648affd165123d8f5171a4e7f9eea2ee91a4231e961e27ece->enter($__internal_429d5fe2a79d673648affd165123d8f5171a4e7f9eea2ee91a4231e961e27ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_38fee31242e54dd8e88ed4d80f08f3d6380cade069d1574d7b12041cb8ce2f58->leave($__internal_38fee31242e54dd8e88ed4d80f08f3d6380cade069d1574d7b12041cb8ce2f58_prof);

        
        $__internal_429d5fe2a79d673648affd165123d8f5171a4e7f9eea2ee91a4231e961e27ece->leave($__internal_429d5fe2a79d673648affd165123d8f5171a4e7f9eea2ee91a4231e961e27ece_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
