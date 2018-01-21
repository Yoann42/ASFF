<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ff9d06bc16ead28c06f86d22477405e916cbbab0e6326c66ffa1bad9c6eeb8a0 extends Twig_Template
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
        $__internal_d59ff0f14581165486e7855f0c04fabb032e92f5b4c8fd8d85b54c8b4fedcd72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59ff0f14581165486e7855f0c04fabb032e92f5b4c8fd8d85b54c8b4fedcd72->enter($__internal_d59ff0f14581165486e7855f0c04fabb032e92f5b4c8fd8d85b54c8b4fedcd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3290310a48b07812ca9a9523cc5b3cf415396a9c6053fdd221e8af780b61978c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3290310a48b07812ca9a9523cc5b3cf415396a9c6053fdd221e8af780b61978c->enter($__internal_3290310a48b07812ca9a9523cc5b3cf415396a9c6053fdd221e8af780b61978c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d59ff0f14581165486e7855f0c04fabb032e92f5b4c8fd8d85b54c8b4fedcd72->leave($__internal_d59ff0f14581165486e7855f0c04fabb032e92f5b4c8fd8d85b54c8b4fedcd72_prof);

        
        $__internal_3290310a48b07812ca9a9523cc5b3cf415396a9c6053fdd221e8af780b61978c->leave($__internal_3290310a48b07812ca9a9523cc5b3cf415396a9c6053fdd221e8af780b61978c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
