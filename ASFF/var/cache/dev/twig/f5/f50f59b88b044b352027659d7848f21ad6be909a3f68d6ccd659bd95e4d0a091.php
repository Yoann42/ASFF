<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_85dd107dac03774cdade834c09bf3ec2a72bb61d970d80ed23be9c94f1f7f617 extends Twig_Template
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
        $__internal_2fc6f409636857597ba73fee6a612a4781ab01ac7d822e30c25b675036c0fdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc6f409636857597ba73fee6a612a4781ab01ac7d822e30c25b675036c0fdec->enter($__internal_2fc6f409636857597ba73fee6a612a4781ab01ac7d822e30c25b675036c0fdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2a19669f06567c0aaa161dd5f52ab1eba872cf0bd71b795277515a96eee1737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a19669f06567c0aaa161dd5f52ab1eba872cf0bd71b795277515a96eee1737f->enter($__internal_2a19669f06567c0aaa161dd5f52ab1eba872cf0bd71b795277515a96eee1737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2fc6f409636857597ba73fee6a612a4781ab01ac7d822e30c25b675036c0fdec->leave($__internal_2fc6f409636857597ba73fee6a612a4781ab01ac7d822e30c25b675036c0fdec_prof);

        
        $__internal_2a19669f06567c0aaa161dd5f52ab1eba872cf0bd71b795277515a96eee1737f->leave($__internal_2a19669f06567c0aaa161dd5f52ab1eba872cf0bd71b795277515a96eee1737f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
