<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4a76d53046f49c7d9485d6f43935f8b111528b017e43cbc89ff87ea1c4449690 extends Twig_Template
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
        $__internal_f1e02b065f0f8f7f43325d7618090d16c75bb7b08918bf6167f0600cee1d1bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e02b065f0f8f7f43325d7618090d16c75bb7b08918bf6167f0600cee1d1bc3->enter($__internal_f1e02b065f0f8f7f43325d7618090d16c75bb7b08918bf6167f0600cee1d1bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9904eae1595a6ed1deda06e3f9b0e775b52b76fe6e636caed983ecd32af13b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9904eae1595a6ed1deda06e3f9b0e775b52b76fe6e636caed983ecd32af13b16->enter($__internal_9904eae1595a6ed1deda06e3f9b0e775b52b76fe6e636caed983ecd32af13b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f1e02b065f0f8f7f43325d7618090d16c75bb7b08918bf6167f0600cee1d1bc3->leave($__internal_f1e02b065f0f8f7f43325d7618090d16c75bb7b08918bf6167f0600cee1d1bc3_prof);

        
        $__internal_9904eae1595a6ed1deda06e3f9b0e775b52b76fe6e636caed983ecd32af13b16->leave($__internal_9904eae1595a6ed1deda06e3f9b0e775b52b76fe6e636caed983ecd32af13b16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
