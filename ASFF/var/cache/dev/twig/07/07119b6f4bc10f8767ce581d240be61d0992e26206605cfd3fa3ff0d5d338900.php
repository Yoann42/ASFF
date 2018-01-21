<?php

/* base.html.twig */
class __TwigTemplate_93293ad6c63d8e7797650250a4b63255498caade7592da4fb7edb6362c490d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cc55ef34a5c8c2f9f51ab41b698569a016503c6063713672306be6a44a43533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc55ef34a5c8c2f9f51ab41b698569a016503c6063713672306be6a44a43533->enter($__internal_5cc55ef34a5c8c2f9f51ab41b698569a016503c6063713672306be6a44a43533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0d5a85bf780629b498e9b1a2ae93af40048b8d1842d83a4e0036ba42e080c30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5a85bf780629b498e9b1a2ae93af40048b8d1842d83a4e0036ba42e080c30b->enter($__internal_0d5a85bf780629b498e9b1a2ae93af40048b8d1842d83a4e0036ba42e080c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5cc55ef34a5c8c2f9f51ab41b698569a016503c6063713672306be6a44a43533->leave($__internal_5cc55ef34a5c8c2f9f51ab41b698569a016503c6063713672306be6a44a43533_prof);

        
        $__internal_0d5a85bf780629b498e9b1a2ae93af40048b8d1842d83a4e0036ba42e080c30b->leave($__internal_0d5a85bf780629b498e9b1a2ae93af40048b8d1842d83a4e0036ba42e080c30b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27b2461c5ba97b2de7893f191a705b0478d4e52557c395e89bf9aeeb38912f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b2461c5ba97b2de7893f191a705b0478d4e52557c395e89bf9aeeb38912f97->enter($__internal_27b2461c5ba97b2de7893f191a705b0478d4e52557c395e89bf9aeeb38912f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4344dfb21e7ff205fdf2802f48d53cd76b99fcc7f5245a8dd210f12bf2c8807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4344dfb21e7ff205fdf2802f48d53cd76b99fcc7f5245a8dd210f12bf2c8807->enter($__internal_a4344dfb21e7ff205fdf2802f48d53cd76b99fcc7f5245a8dd210f12bf2c8807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a4344dfb21e7ff205fdf2802f48d53cd76b99fcc7f5245a8dd210f12bf2c8807->leave($__internal_a4344dfb21e7ff205fdf2802f48d53cd76b99fcc7f5245a8dd210f12bf2c8807_prof);

        
        $__internal_27b2461c5ba97b2de7893f191a705b0478d4e52557c395e89bf9aeeb38912f97->leave($__internal_27b2461c5ba97b2de7893f191a705b0478d4e52557c395e89bf9aeeb38912f97_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ebe77317961b12045bf2233f5592c07f1c5452f1f1b2ce979668c9b16cf1bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebe77317961b12045bf2233f5592c07f1c5452f1f1b2ce979668c9b16cf1bdb->enter($__internal_5ebe77317961b12045bf2233f5592c07f1c5452f1f1b2ce979668c9b16cf1bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eb23074d568a2058c446bf1e174c72964c2a6a40919e6775280bc98b663b005b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb23074d568a2058c446bf1e174c72964c2a6a40919e6775280bc98b663b005b->enter($__internal_eb23074d568a2058c446bf1e174c72964c2a6a40919e6775280bc98b663b005b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eb23074d568a2058c446bf1e174c72964c2a6a40919e6775280bc98b663b005b->leave($__internal_eb23074d568a2058c446bf1e174c72964c2a6a40919e6775280bc98b663b005b_prof);

        
        $__internal_5ebe77317961b12045bf2233f5592c07f1c5452f1f1b2ce979668c9b16cf1bdb->leave($__internal_5ebe77317961b12045bf2233f5592c07f1c5452f1f1b2ce979668c9b16cf1bdb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d62c04cf5c75fed3e7d745f1e85a9a235e2dc165353d143748ee7e3cb55862ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62c04cf5c75fed3e7d745f1e85a9a235e2dc165353d143748ee7e3cb55862ee->enter($__internal_d62c04cf5c75fed3e7d745f1e85a9a235e2dc165353d143748ee7e3cb55862ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae124ab26946b377fd4f8c9339f07353d809ff72b208e53eb8d2541d0e770100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae124ab26946b377fd4f8c9339f07353d809ff72b208e53eb8d2541d0e770100->enter($__internal_ae124ab26946b377fd4f8c9339f07353d809ff72b208e53eb8d2541d0e770100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae124ab26946b377fd4f8c9339f07353d809ff72b208e53eb8d2541d0e770100->leave($__internal_ae124ab26946b377fd4f8c9339f07353d809ff72b208e53eb8d2541d0e770100_prof);

        
        $__internal_d62c04cf5c75fed3e7d745f1e85a9a235e2dc165353d143748ee7e3cb55862ee->leave($__internal_d62c04cf5c75fed3e7d745f1e85a9a235e2dc165353d143748ee7e3cb55862ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bba0d87dda1345fe39ba4dca35ceb121e1694ad55067f399cb1acd42222c2098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba0d87dda1345fe39ba4dca35ceb121e1694ad55067f399cb1acd42222c2098->enter($__internal_bba0d87dda1345fe39ba4dca35ceb121e1694ad55067f399cb1acd42222c2098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b9359a9e099ccd1097d52ea9dc1d754ca55f4bb53932651cde66980719364dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9359a9e099ccd1097d52ea9dc1d754ca55f4bb53932651cde66980719364dfd->enter($__internal_b9359a9e099ccd1097d52ea9dc1d754ca55f4bb53932651cde66980719364dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9359a9e099ccd1097d52ea9dc1d754ca55f4bb53932651cde66980719364dfd->leave($__internal_b9359a9e099ccd1097d52ea9dc1d754ca55f4bb53932651cde66980719364dfd_prof);

        
        $__internal_bba0d87dda1345fe39ba4dca35ceb121e1694ad55067f399cb1acd42222c2098->leave($__internal_bba0d87dda1345fe39ba4dca35ceb121e1694ad55067f399cb1acd42222c2098_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
