<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ef7eebaafeeca0ed88aa457bdc4826b35b7e0ccff3b768bdfce66f6a8758b0fd extends Twig_Template
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
        $__internal_6f18e8c20bb225a3714f20f71ac925b70f531271479421b49baca07663295280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f18e8c20bb225a3714f20f71ac925b70f531271479421b49baca07663295280->enter($__internal_6f18e8c20bb225a3714f20f71ac925b70f531271479421b49baca07663295280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_743fa8d9d7b43e667daf9f0cc3d32e8592b23eca499eb621c8619d32efb9b9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743fa8d9d7b43e667daf9f0cc3d32e8592b23eca499eb621c8619d32efb9b9b7->enter($__internal_743fa8d9d7b43e667daf9f0cc3d32e8592b23eca499eb621c8619d32efb9b9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6f18e8c20bb225a3714f20f71ac925b70f531271479421b49baca07663295280->leave($__internal_6f18e8c20bb225a3714f20f71ac925b70f531271479421b49baca07663295280_prof);

        
        $__internal_743fa8d9d7b43e667daf9f0cc3d32e8592b23eca499eb621c8619d32efb9b9b7->leave($__internal_743fa8d9d7b43e667daf9f0cc3d32e8592b23eca499eb621c8619d32efb9b9b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
