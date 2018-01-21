<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_77dad6b6f27f35264099ccfcbee0aff720a0d1695774604477e11da1f3f813e8 extends Twig_Template
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
        $__internal_ae9c05adc34ec5aec9dbb5626a7baf8af0f3afef3b4e4fc882386d22bc6550ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9c05adc34ec5aec9dbb5626a7baf8af0f3afef3b4e4fc882386d22bc6550ad->enter($__internal_ae9c05adc34ec5aec9dbb5626a7baf8af0f3afef3b4e4fc882386d22bc6550ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eb104230f2183c53e4b73fcd091f84225c1f18959f0465b8b9329b78b3771d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb104230f2183c53e4b73fcd091f84225c1f18959f0465b8b9329b78b3771d1e->enter($__internal_eb104230f2183c53e4b73fcd091f84225c1f18959f0465b8b9329b78b3771d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ae9c05adc34ec5aec9dbb5626a7baf8af0f3afef3b4e4fc882386d22bc6550ad->leave($__internal_ae9c05adc34ec5aec9dbb5626a7baf8af0f3afef3b4e4fc882386d22bc6550ad_prof);

        
        $__internal_eb104230f2183c53e4b73fcd091f84225c1f18959f0465b8b9329b78b3771d1e->leave($__internal_eb104230f2183c53e4b73fcd091f84225c1f18959f0465b8b9329b78b3771d1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
