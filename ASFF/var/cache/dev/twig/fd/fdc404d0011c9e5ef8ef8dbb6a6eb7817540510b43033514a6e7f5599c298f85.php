<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44b005f1e2122dd0357a53304e7fb049c6dcb25a1c0522ff5bae8bb279734450 extends Twig_Template
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
        $__internal_f29c20a43513f5d230e65f9a158a5c0d08cf23464d2eff0e1467839cbde90a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29c20a43513f5d230e65f9a158a5c0d08cf23464d2eff0e1467839cbde90a16->enter($__internal_f29c20a43513f5d230e65f9a158a5c0d08cf23464d2eff0e1467839cbde90a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_153a102b1f2632313684b4327a89a3082971d5d6b950c792f04ea46e675f9c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153a102b1f2632313684b4327a89a3082971d5d6b950c792f04ea46e675f9c50->enter($__internal_153a102b1f2632313684b4327a89a3082971d5d6b950c792f04ea46e675f9c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f29c20a43513f5d230e65f9a158a5c0d08cf23464d2eff0e1467839cbde90a16->leave($__internal_f29c20a43513f5d230e65f9a158a5c0d08cf23464d2eff0e1467839cbde90a16_prof);

        
        $__internal_153a102b1f2632313684b4327a89a3082971d5d6b950c792f04ea46e675f9c50->leave($__internal_153a102b1f2632313684b4327a89a3082971d5d6b950c792f04ea46e675f9c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
