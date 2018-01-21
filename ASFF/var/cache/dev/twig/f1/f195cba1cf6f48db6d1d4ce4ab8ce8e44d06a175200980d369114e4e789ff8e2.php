<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_badeef15397a610fb69d426f4b14cd57477c6e0f589685d34c6f24d8966d822f extends Twig_Template
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
        $__internal_f71656ee3e0c5acd728e668960172bba448efb7547279d99bd8b37da5d2e850d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71656ee3e0c5acd728e668960172bba448efb7547279d99bd8b37da5d2e850d->enter($__internal_f71656ee3e0c5acd728e668960172bba448efb7547279d99bd8b37da5d2e850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_90a8b0517f834983b4c6af839f8d61a0fc0e1807d0996aa3cd9cbc819c9cce19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a8b0517f834983b4c6af839f8d61a0fc0e1807d0996aa3cd9cbc819c9cce19->enter($__internal_90a8b0517f834983b4c6af839f8d61a0fc0e1807d0996aa3cd9cbc819c9cce19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f71656ee3e0c5acd728e668960172bba448efb7547279d99bd8b37da5d2e850d->leave($__internal_f71656ee3e0c5acd728e668960172bba448efb7547279d99bd8b37da5d2e850d_prof);

        
        $__internal_90a8b0517f834983b4c6af839f8d61a0fc0e1807d0996aa3cd9cbc819c9cce19->leave($__internal_90a8b0517f834983b4c6af839f8d61a0fc0e1807d0996aa3cd9cbc819c9cce19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
