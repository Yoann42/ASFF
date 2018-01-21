<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2e8ed9dbe010298e2ef0b7de46003cce6f0ff6713eda9d768a4719abcbea8ca7 extends Twig_Template
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
        $__internal_d743bd22deab9419dfbf25bf0d7c19ad359a479f7f2ff594e5516d7a7daa7e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d743bd22deab9419dfbf25bf0d7c19ad359a479f7f2ff594e5516d7a7daa7e2b->enter($__internal_d743bd22deab9419dfbf25bf0d7c19ad359a479f7f2ff594e5516d7a7daa7e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3e39faf8f6cc3217eb0ced6ce86ccc909b1681e87f9a9aba6fa786d9d906abec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e39faf8f6cc3217eb0ced6ce86ccc909b1681e87f9a9aba6fa786d9d906abec->enter($__internal_3e39faf8f6cc3217eb0ced6ce86ccc909b1681e87f9a9aba6fa786d9d906abec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d743bd22deab9419dfbf25bf0d7c19ad359a479f7f2ff594e5516d7a7daa7e2b->leave($__internal_d743bd22deab9419dfbf25bf0d7c19ad359a479f7f2ff594e5516d7a7daa7e2b_prof);

        
        $__internal_3e39faf8f6cc3217eb0ced6ce86ccc909b1681e87f9a9aba6fa786d9d906abec->leave($__internal_3e39faf8f6cc3217eb0ced6ce86ccc909b1681e87f9a9aba6fa786d9d906abec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
