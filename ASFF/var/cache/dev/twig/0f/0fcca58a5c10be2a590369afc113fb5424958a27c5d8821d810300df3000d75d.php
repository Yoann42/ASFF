<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8b3c6498c7016376f1c8df9a6e034f724d1d728d3d2e7d959c0ed8b5d93c996 extends Twig_Template
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
        $__internal_b2f659d323e7160119f6cff1b65a0730a2b938281a26a2a6929b1a3d3ca80f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f659d323e7160119f6cff1b65a0730a2b938281a26a2a6929b1a3d3ca80f91->enter($__internal_b2f659d323e7160119f6cff1b65a0730a2b938281a26a2a6929b1a3d3ca80f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e2dd1d0d569f5e00496cf6e876c339b67843148d56fb58919d62a02c2f933479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dd1d0d569f5e00496cf6e876c339b67843148d56fb58919d62a02c2f933479->enter($__internal_e2dd1d0d569f5e00496cf6e876c339b67843148d56fb58919d62a02c2f933479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b2f659d323e7160119f6cff1b65a0730a2b938281a26a2a6929b1a3d3ca80f91->leave($__internal_b2f659d323e7160119f6cff1b65a0730a2b938281a26a2a6929b1a3d3ca80f91_prof);

        
        $__internal_e2dd1d0d569f5e00496cf6e876c339b67843148d56fb58919d62a02c2f933479->leave($__internal_e2dd1d0d569f5e00496cf6e876c339b67843148d56fb58919d62a02c2f933479_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
