<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
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
        $__internal_440855de190e716dc3a45dba9a0dda45f8306ce19d75cdfddfccec1095a62e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440855de190e716dc3a45dba9a0dda45f8306ce19d75cdfddfccec1095a62e44->enter($__internal_440855de190e716dc3a45dba9a0dda45f8306ce19d75cdfddfccec1095a62e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_460544854e278db3c5ba5278adc90347aeedebdbcd6942fc37a4bf69fb294d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460544854e278db3c5ba5278adc90347aeedebdbcd6942fc37a4bf69fb294d7e->enter($__internal_460544854e278db3c5ba5278adc90347aeedebdbcd6942fc37a4bf69fb294d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_440855de190e716dc3a45dba9a0dda45f8306ce19d75cdfddfccec1095a62e44->leave($__internal_440855de190e716dc3a45dba9a0dda45f8306ce19d75cdfddfccec1095a62e44_prof);

        
        $__internal_460544854e278db3c5ba5278adc90347aeedebdbcd6942fc37a4bf69fb294d7e->leave($__internal_460544854e278db3c5ba5278adc90347aeedebdbcd6942fc37a4bf69fb294d7e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fed76df0ed5dc29b6679df294628760ab4945ba5e79d0984138bf90ded9e0d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed76df0ed5dc29b6679df294628760ab4945ba5e79d0984138bf90ded9e0d66->enter($__internal_fed76df0ed5dc29b6679df294628760ab4945ba5e79d0984138bf90ded9e0d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12b9432a373aa9c9acfa5f18d4ca54de44b8f37c2a69682abd0ff87b923655b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b9432a373aa9c9acfa5f18d4ca54de44b8f37c2a69682abd0ff87b923655b8->enter($__internal_12b9432a373aa9c9acfa5f18d4ca54de44b8f37c2a69682abd0ff87b923655b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12b9432a373aa9c9acfa5f18d4ca54de44b8f37c2a69682abd0ff87b923655b8->leave($__internal_12b9432a373aa9c9acfa5f18d4ca54de44b8f37c2a69682abd0ff87b923655b8_prof);

        
        $__internal_fed76df0ed5dc29b6679df294628760ab4945ba5e79d0984138bf90ded9e0d66->leave($__internal_fed76df0ed5dc29b6679df294628760ab4945ba5e79d0984138bf90ded9e0d66_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efa77661a174761fd98b3ae07d889488fa6b2aa44463dc54f1e90c3d2083be90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa77661a174761fd98b3ae07d889488fa6b2aa44463dc54f1e90c3d2083be90->enter($__internal_efa77661a174761fd98b3ae07d889488fa6b2aa44463dc54f1e90c3d2083be90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee95164acfa3f3bbff916bcb644d9814bf92dbd8f4496a2471f54de58bd9a6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee95164acfa3f3bbff916bcb644d9814bf92dbd8f4496a2471f54de58bd9a6dc->enter($__internal_ee95164acfa3f3bbff916bcb644d9814bf92dbd8f4496a2471f54de58bd9a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee95164acfa3f3bbff916bcb644d9814bf92dbd8f4496a2471f54de58bd9a6dc->leave($__internal_ee95164acfa3f3bbff916bcb644d9814bf92dbd8f4496a2471f54de58bd9a6dc_prof);

        
        $__internal_efa77661a174761fd98b3ae07d889488fa6b2aa44463dc54f1e90c3d2083be90->leave($__internal_efa77661a174761fd98b3ae07d889488fa6b2aa44463dc54f1e90c3d2083be90_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_09ce336e6db061a1ce260b782afaa51091cab2b41e979cfc472c3f990796d559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ce336e6db061a1ce260b782afaa51091cab2b41e979cfc472c3f990796d559->enter($__internal_09ce336e6db061a1ce260b782afaa51091cab2b41e979cfc472c3f990796d559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_409651c82859e0226d57ebf9b0e9aa07cd700d5db0c70293791b819f2ae6351e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409651c82859e0226d57ebf9b0e9aa07cd700d5db0c70293791b819f2ae6351e->enter($__internal_409651c82859e0226d57ebf9b0e9aa07cd700d5db0c70293791b819f2ae6351e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_409651c82859e0226d57ebf9b0e9aa07cd700d5db0c70293791b819f2ae6351e->leave($__internal_409651c82859e0226d57ebf9b0e9aa07cd700d5db0c70293791b819f2ae6351e_prof);

        
        $__internal_09ce336e6db061a1ce260b782afaa51091cab2b41e979cfc472c3f990796d559->leave($__internal_09ce336e6db061a1ce260b782afaa51091cab2b41e979cfc472c3f990796d559_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f58d4c8b65495c9cdbe77ab784a9b7754722f64333f3658a885b3002427816f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58d4c8b65495c9cdbe77ab784a9b7754722f64333f3658a885b3002427816f4->enter($__internal_f58d4c8b65495c9cdbe77ab784a9b7754722f64333f3658a885b3002427816f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_130c6b29847ac1516695cbd34e18f994e936d34a02c5e24948056fac52c8ebd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130c6b29847ac1516695cbd34e18f994e936d34a02c5e24948056fac52c8ebd5->enter($__internal_130c6b29847ac1516695cbd34e18f994e936d34a02c5e24948056fac52c8ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_130c6b29847ac1516695cbd34e18f994e936d34a02c5e24948056fac52c8ebd5->leave($__internal_130c6b29847ac1516695cbd34e18f994e936d34a02c5e24948056fac52c8ebd5_prof);

        
        $__internal_f58d4c8b65495c9cdbe77ab784a9b7754722f64333f3658a885b3002427816f4->leave($__internal_f58d4c8b65495c9cdbe77ab784a9b7754722f64333f3658a885b3002427816f4_prof);

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
", "base.html.twig", "/home/amd-64/work/STLGenarator/app/Resources/views/base.html.twig");
    }
}
