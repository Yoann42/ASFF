<?php

/* ASFFClubBundle:Default:index.html.twig */
class __TwigTemplate_7ea6e59610a256d0f8c24b3aec9eae2dc6daf3d6c9427b7be7d2b9ec7472d6b2 extends Twig_Template
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
        // line 1
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "ASFFClubBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ASFFClubBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ASFF\\ClubBundle/Resources/views/Default/index.html.twig");
    }
}
