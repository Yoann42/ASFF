<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ca59c4683ac955ae2209b66f14964cd84843f1d0b43e5e9550be2ee2e14d9195 extends Twig_Template
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
        $__internal_57c004697649398ffb017538076af3f3ed9402beac94458c886f4b5bc518fd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c004697649398ffb017538076af3f3ed9402beac94458c886f4b5bc518fd16->enter($__internal_57c004697649398ffb017538076af3f3ed9402beac94458c886f4b5bc518fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f869907711d5a551ac5ae142ea46ad178f2f1cdf8cec79d32ccf2c5a4f6ccefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f869907711d5a551ac5ae142ea46ad178f2f1cdf8cec79d32ccf2c5a4f6ccefd->enter($__internal_f869907711d5a551ac5ae142ea46ad178f2f1cdf8cec79d32ccf2c5a4f6ccefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_57c004697649398ffb017538076af3f3ed9402beac94458c886f4b5bc518fd16->leave($__internal_57c004697649398ffb017538076af3f3ed9402beac94458c886f4b5bc518fd16_prof);

        
        $__internal_f869907711d5a551ac5ae142ea46ad178f2f1cdf8cec79d32ccf2c5a4f6ccefd->leave($__internal_f869907711d5a551ac5ae142ea46ad178f2f1cdf8cec79d32ccf2c5a4f6ccefd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
