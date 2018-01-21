<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_55263ecbb9ae528a86835bc6a3039ac2a9dfde6396452c1c70141709da4aa352 extends Twig_Template
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
        $__internal_b2fae6c5fbd33828e9e5fb81c6a471ddcb71efcad8e585dcd378054bc3cd2293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fae6c5fbd33828e9e5fb81c6a471ddcb71efcad8e585dcd378054bc3cd2293->enter($__internal_b2fae6c5fbd33828e9e5fb81c6a471ddcb71efcad8e585dcd378054bc3cd2293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c1152b05151128029ec98910cb48352228e4e8e27ef15d5f62d115da7f9ca5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1152b05151128029ec98910cb48352228e4e8e27ef15d5f62d115da7f9ca5cc->enter($__internal_c1152b05151128029ec98910cb48352228e4e8e27ef15d5f62d115da7f9ca5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b2fae6c5fbd33828e9e5fb81c6a471ddcb71efcad8e585dcd378054bc3cd2293->leave($__internal_b2fae6c5fbd33828e9e5fb81c6a471ddcb71efcad8e585dcd378054bc3cd2293_prof);

        
        $__internal_c1152b05151128029ec98910cb48352228e4e8e27ef15d5f62d115da7f9ca5cc->leave($__internal_c1152b05151128029ec98910cb48352228e4e8e27ef15d5f62d115da7f9ca5cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
