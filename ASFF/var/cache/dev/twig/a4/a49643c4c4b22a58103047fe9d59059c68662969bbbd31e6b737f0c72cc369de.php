<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_91783a72c05b85bcd309c24da26cb4b8d22187f51f26e422e65aed29d5be906e extends Twig_Template
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
        $__internal_cdeed3b3f8c79f946a0670bf3a67b68b2095f69e6fdcb950750a3813c444a0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdeed3b3f8c79f946a0670bf3a67b68b2095f69e6fdcb950750a3813c444a0dd->enter($__internal_cdeed3b3f8c79f946a0670bf3a67b68b2095f69e6fdcb950750a3813c444a0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d8d482c3ea570c89287d4b4fc5c1580fddae64cd1bfa9281a20dd3dfed226179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d482c3ea570c89287d4b4fc5c1580fddae64cd1bfa9281a20dd3dfed226179->enter($__internal_d8d482c3ea570c89287d4b4fc5c1580fddae64cd1bfa9281a20dd3dfed226179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cdeed3b3f8c79f946a0670bf3a67b68b2095f69e6fdcb950750a3813c444a0dd->leave($__internal_cdeed3b3f8c79f946a0670bf3a67b68b2095f69e6fdcb950750a3813c444a0dd_prof);

        
        $__internal_d8d482c3ea570c89287d4b4fc5c1580fddae64cd1bfa9281a20dd3dfed226179->leave($__internal_d8d482c3ea570c89287d4b4fc5c1580fddae64cd1bfa9281a20dd3dfed226179_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
