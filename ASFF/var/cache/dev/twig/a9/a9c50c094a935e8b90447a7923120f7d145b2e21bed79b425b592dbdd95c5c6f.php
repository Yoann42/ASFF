<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8fa49f2ab3918609c5bab2f64c2987f0e10718de31131fcb612bb63b0a6808d3 extends Twig_Template
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
        $__internal_d9f8a91fc32b64b2bacd9266141990de6008a63400553a9ce463f11e7404f4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f8a91fc32b64b2bacd9266141990de6008a63400553a9ce463f11e7404f4cf->enter($__internal_d9f8a91fc32b64b2bacd9266141990de6008a63400553a9ce463f11e7404f4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b19e87f4cc9e9a8b0e4aa324b59712261d2d2e5ecc99017e9026d9c827779a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19e87f4cc9e9a8b0e4aa324b59712261d2d2e5ecc99017e9026d9c827779a82->enter($__internal_b19e87f4cc9e9a8b0e4aa324b59712261d2d2e5ecc99017e9026d9c827779a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d9f8a91fc32b64b2bacd9266141990de6008a63400553a9ce463f11e7404f4cf->leave($__internal_d9f8a91fc32b64b2bacd9266141990de6008a63400553a9ce463f11e7404f4cf_prof);

        
        $__internal_b19e87f4cc9e9a8b0e4aa324b59712261d2d2e5ecc99017e9026d9c827779a82->leave($__internal_b19e87f4cc9e9a8b0e4aa324b59712261d2d2e5ecc99017e9026d9c827779a82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
