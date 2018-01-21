<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d338e064d36d480d5411e6ba9a4de303d062a00b920e0b4dfe394ebff33b0282 extends Twig_Template
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
        $__internal_f9c272b681f108220eed05b0e5ffe7430ffae9a7dfb6be87ecea3e41eaf76d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c272b681f108220eed05b0e5ffe7430ffae9a7dfb6be87ecea3e41eaf76d9f->enter($__internal_f9c272b681f108220eed05b0e5ffe7430ffae9a7dfb6be87ecea3e41eaf76d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_65fc335594c6f90060a28c029142975a46d24a8367c7fce2cf8581f36c714c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fc335594c6f90060a28c029142975a46d24a8367c7fce2cf8581f36c714c2e->enter($__internal_65fc335594c6f90060a28c029142975a46d24a8367c7fce2cf8581f36c714c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f9c272b681f108220eed05b0e5ffe7430ffae9a7dfb6be87ecea3e41eaf76d9f->leave($__internal_f9c272b681f108220eed05b0e5ffe7430ffae9a7dfb6be87ecea3e41eaf76d9f_prof);

        
        $__internal_65fc335594c6f90060a28c029142975a46d24a8367c7fce2cf8581f36c714c2e->leave($__internal_65fc335594c6f90060a28c029142975a46d24a8367c7fce2cf8581f36c714c2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
