<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_65aaa19179aced71752e7e42227ba0a582569f00dbd125e36a8f767bc69b3f7e extends Twig_Template
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
        $__internal_6ebb051476268f0beb00299f30623054bcb4153861c8dc5fddd78e5f4ef9bff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebb051476268f0beb00299f30623054bcb4153861c8dc5fddd78e5f4ef9bff2->enter($__internal_6ebb051476268f0beb00299f30623054bcb4153861c8dc5fddd78e5f4ef9bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1b5d46b78d6e45e1701cbf4abcf2f4d46ede163dc7bd5af5d25c40ae6b7129f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5d46b78d6e45e1701cbf4abcf2f4d46ede163dc7bd5af5d25c40ae6b7129f0->enter($__internal_1b5d46b78d6e45e1701cbf4abcf2f4d46ede163dc7bd5af5d25c40ae6b7129f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6ebb051476268f0beb00299f30623054bcb4153861c8dc5fddd78e5f4ef9bff2->leave($__internal_6ebb051476268f0beb00299f30623054bcb4153861c8dc5fddd78e5f4ef9bff2_prof);

        
        $__internal_1b5d46b78d6e45e1701cbf4abcf2f4d46ede163dc7bd5af5d25c40ae6b7129f0->leave($__internal_1b5d46b78d6e45e1701cbf4abcf2f4d46ede163dc7bd5af5d25c40ae6b7129f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
