<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_031c0f15a1328fa7f8fe928d55aa3ce5656f9799e9aed3f846413bbf6b52e733 extends Twig_Template
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
        $__internal_171defd275be6e855bedeb661cd6c9dfd8fd0d5b02244ef3e0c3e6c1abff92e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171defd275be6e855bedeb661cd6c9dfd8fd0d5b02244ef3e0c3e6c1abff92e9->enter($__internal_171defd275be6e855bedeb661cd6c9dfd8fd0d5b02244ef3e0c3e6c1abff92e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d519bc8482f5a71239e41c2d089cf78473eab58e88a44093a813173582b0afe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d519bc8482f5a71239e41c2d089cf78473eab58e88a44093a813173582b0afe6->enter($__internal_d519bc8482f5a71239e41c2d089cf78473eab58e88a44093a813173582b0afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_171defd275be6e855bedeb661cd6c9dfd8fd0d5b02244ef3e0c3e6c1abff92e9->leave($__internal_171defd275be6e855bedeb661cd6c9dfd8fd0d5b02244ef3e0c3e6c1abff92e9_prof);

        
        $__internal_d519bc8482f5a71239e41c2d089cf78473eab58e88a44093a813173582b0afe6->leave($__internal_d519bc8482f5a71239e41c2d089cf78473eab58e88a44093a813173582b0afe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
