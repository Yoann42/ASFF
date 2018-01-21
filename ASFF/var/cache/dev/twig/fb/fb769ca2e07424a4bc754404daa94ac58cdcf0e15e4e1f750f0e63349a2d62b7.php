<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_df1aed5f36201d327adbf1c000d9916be65b7b12871cc8dd64cc23812c301f61 extends Twig_Template
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
        $__internal_2efb7b9681dcc82db7b70920feac4f78c6974f87b632a932d5b0e0ffeee1a73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efb7b9681dcc82db7b70920feac4f78c6974f87b632a932d5b0e0ffeee1a73f->enter($__internal_2efb7b9681dcc82db7b70920feac4f78c6974f87b632a932d5b0e0ffeee1a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ebe2fb816cc3588458717b794503b835d52ce3a987c91bb1023124ded32f3465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe2fb816cc3588458717b794503b835d52ce3a987c91bb1023124ded32f3465->enter($__internal_ebe2fb816cc3588458717b794503b835d52ce3a987c91bb1023124ded32f3465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2efb7b9681dcc82db7b70920feac4f78c6974f87b632a932d5b0e0ffeee1a73f->leave($__internal_2efb7b9681dcc82db7b70920feac4f78c6974f87b632a932d5b0e0ffeee1a73f_prof);

        
        $__internal_ebe2fb816cc3588458717b794503b835d52ce3a987c91bb1023124ded32f3465->leave($__internal_ebe2fb816cc3588458717b794503b835d52ce3a987c91bb1023124ded32f3465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
