<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e371850243838d01ff9e8e8ace6e85d62913d2a3a73f468c9073daa35eefbbe6 extends Twig_Template
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
        $__internal_98bcd58dd01d4f621e8e86fee5ff57ace147b4335a329e4c1db242e05469f10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bcd58dd01d4f621e8e86fee5ff57ace147b4335a329e4c1db242e05469f10c->enter($__internal_98bcd58dd01d4f621e8e86fee5ff57ace147b4335a329e4c1db242e05469f10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e8e5c7db1d44a333eca1562ac308eff4bb08564ab4a65d65cca1754bb03db953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e5c7db1d44a333eca1562ac308eff4bb08564ab4a65d65cca1754bb03db953->enter($__internal_e8e5c7db1d44a333eca1562ac308eff4bb08564ab4a65d65cca1754bb03db953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_98bcd58dd01d4f621e8e86fee5ff57ace147b4335a329e4c1db242e05469f10c->leave($__internal_98bcd58dd01d4f621e8e86fee5ff57ace147b4335a329e4c1db242e05469f10c_prof);

        
        $__internal_e8e5c7db1d44a333eca1562ac308eff4bb08564ab4a65d65cca1754bb03db953->leave($__internal_e8e5c7db1d44a333eca1562ac308eff4bb08564ab4a65d65cca1754bb03db953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
