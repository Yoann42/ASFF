<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0e661b60267e7925ff72cfccff190a70f909db4db33761a772d5ed33c7f771c8 extends Twig_Template
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
        $__internal_5b3785091e38c7d28c79b2f9c36189aa39b9aafe1e8a76608579fe72b6beb2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3785091e38c7d28c79b2f9c36189aa39b9aafe1e8a76608579fe72b6beb2a7->enter($__internal_5b3785091e38c7d28c79b2f9c36189aa39b9aafe1e8a76608579fe72b6beb2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4899b62597febec69f4010b51c1b89d3c92a8c5971698de8edab5b69a395f2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4899b62597febec69f4010b51c1b89d3c92a8c5971698de8edab5b69a395f2d3->enter($__internal_4899b62597febec69f4010b51c1b89d3c92a8c5971698de8edab5b69a395f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5b3785091e38c7d28c79b2f9c36189aa39b9aafe1e8a76608579fe72b6beb2a7->leave($__internal_5b3785091e38c7d28c79b2f9c36189aa39b9aafe1e8a76608579fe72b6beb2a7_prof);

        
        $__internal_4899b62597febec69f4010b51c1b89d3c92a8c5971698de8edab5b69a395f2d3->leave($__internal_4899b62597febec69f4010b51c1b89d3c92a8c5971698de8edab5b69a395f2d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
