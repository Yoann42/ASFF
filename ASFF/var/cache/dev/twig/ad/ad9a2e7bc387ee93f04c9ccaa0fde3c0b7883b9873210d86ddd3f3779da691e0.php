<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c572855406e15cc85a7d9baefb5d29a71b37e41ea5e80efa5f6eabf3e730fa71 extends Twig_Template
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
        $__internal_bee42343bc1b68c7dbfecefc616efc42b6ffc76c5c202b08517cc653ae399aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee42343bc1b68c7dbfecefc616efc42b6ffc76c5c202b08517cc653ae399aa4->enter($__internal_bee42343bc1b68c7dbfecefc616efc42b6ffc76c5c202b08517cc653ae399aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2449494dc16a4bf24517a6a68b26448664f7e625b82f61f4346d899c05eb03ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2449494dc16a4bf24517a6a68b26448664f7e625b82f61f4346d899c05eb03ab->enter($__internal_2449494dc16a4bf24517a6a68b26448664f7e625b82f61f4346d899c05eb03ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bee42343bc1b68c7dbfecefc616efc42b6ffc76c5c202b08517cc653ae399aa4->leave($__internal_bee42343bc1b68c7dbfecefc616efc42b6ffc76c5c202b08517cc653ae399aa4_prof);

        
        $__internal_2449494dc16a4bf24517a6a68b26448664f7e625b82f61f4346d899c05eb03ab->leave($__internal_2449494dc16a4bf24517a6a68b26448664f7e625b82f61f4346d899c05eb03ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
