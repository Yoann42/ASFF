<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9616c2bb8809e78f4b904ef4931484f512b081640e13b7c2cf4f30c796f41074 extends Twig_Template
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
        $__internal_75f753577ddc2ed54decd6b13878e22847318300ee87547a2f2be6695f174ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f753577ddc2ed54decd6b13878e22847318300ee87547a2f2be6695f174ab9->enter($__internal_75f753577ddc2ed54decd6b13878e22847318300ee87547a2f2be6695f174ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_55b8054da10ef627a71957ba215acec36eb69edf291c1416cdcc81759f6bccfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b8054da10ef627a71957ba215acec36eb69edf291c1416cdcc81759f6bccfe->enter($__internal_55b8054da10ef627a71957ba215acec36eb69edf291c1416cdcc81759f6bccfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_75f753577ddc2ed54decd6b13878e22847318300ee87547a2f2be6695f174ab9->leave($__internal_75f753577ddc2ed54decd6b13878e22847318300ee87547a2f2be6695f174ab9_prof);

        
        $__internal_55b8054da10ef627a71957ba215acec36eb69edf291c1416cdcc81759f6bccfe->leave($__internal_55b8054da10ef627a71957ba215acec36eb69edf291c1416cdcc81759f6bccfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
