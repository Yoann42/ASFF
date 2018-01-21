<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_eb2b32c6b8bb39cededffb89da090f1bd493170840f33ab100ab02918bbc47d3 extends Twig_Template
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
        $__internal_81e94271a8c032e46cdab210fcaac184968a127d7115eedb95fe9429542b2e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e94271a8c032e46cdab210fcaac184968a127d7115eedb95fe9429542b2e9b->enter($__internal_81e94271a8c032e46cdab210fcaac184968a127d7115eedb95fe9429542b2e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_baf470666945ff7f8cbb18e720057923ed3f36355957cb8cbde969b1020abf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf470666945ff7f8cbb18e720057923ed3f36355957cb8cbde969b1020abf9d->enter($__internal_baf470666945ff7f8cbb18e720057923ed3f36355957cb8cbde969b1020abf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_81e94271a8c032e46cdab210fcaac184968a127d7115eedb95fe9429542b2e9b->leave($__internal_81e94271a8c032e46cdab210fcaac184968a127d7115eedb95fe9429542b2e9b_prof);

        
        $__internal_baf470666945ff7f8cbb18e720057923ed3f36355957cb8cbde969b1020abf9d->leave($__internal_baf470666945ff7f8cbb18e720057923ed3f36355957cb8cbde969b1020abf9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
