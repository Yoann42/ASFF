<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a686256500119ca182d26320c4048740aa4d706a56db41fa4ef56ec8c02d57ee extends Twig_Template
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
        $__internal_f32bd034311a12327628221b03e288c44a742bd3e209fc3873d78c2524bf1792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32bd034311a12327628221b03e288c44a742bd3e209fc3873d78c2524bf1792->enter($__internal_f32bd034311a12327628221b03e288c44a742bd3e209fc3873d78c2524bf1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5b41f1b08e76258ba3579d4a01d03971ad24a297cdc258b21bf4424602044a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b41f1b08e76258ba3579d4a01d03971ad24a297cdc258b21bf4424602044a3a->enter($__internal_5b41f1b08e76258ba3579d4a01d03971ad24a297cdc258b21bf4424602044a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f32bd034311a12327628221b03e288c44a742bd3e209fc3873d78c2524bf1792->leave($__internal_f32bd034311a12327628221b03e288c44a742bd3e209fc3873d78c2524bf1792_prof);

        
        $__internal_5b41f1b08e76258ba3579d4a01d03971ad24a297cdc258b21bf4424602044a3a->leave($__internal_5b41f1b08e76258ba3579d4a01d03971ad24a297cdc258b21bf4424602044a3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
