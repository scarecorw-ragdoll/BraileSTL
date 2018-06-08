<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f72ee2eb852d2f441060fc8500979df6c7f6123d903b420ca676c28f23a19e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f72ee2eb852d2f441060fc8500979df6c7f6123d903b420ca676c28f23a19e5->enter($__internal_0f72ee2eb852d2f441060fc8500979df6c7f6123d903b420ca676c28f23a19e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b23b9468a9a7da3b4790d8e36d1ed125444fb6a0a5db81b030f7e8be90edaeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23b9468a9a7da3b4790d8e36d1ed125444fb6a0a5db81b030f7e8be90edaeef->enter($__internal_b23b9468a9a7da3b4790d8e36d1ed125444fb6a0a5db81b030f7e8be90edaeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f72ee2eb852d2f441060fc8500979df6c7f6123d903b420ca676c28f23a19e5->leave($__internal_0f72ee2eb852d2f441060fc8500979df6c7f6123d903b420ca676c28f23a19e5_prof);

        
        $__internal_b23b9468a9a7da3b4790d8e36d1ed125444fb6a0a5db81b030f7e8be90edaeef->leave($__internal_b23b9468a9a7da3b4790d8e36d1ed125444fb6a0a5db81b030f7e8be90edaeef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61f821e881241fbed5ac55f99795e909ea767b6f700badd77635749bf6196f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f821e881241fbed5ac55f99795e909ea767b6f700badd77635749bf6196f03->enter($__internal_61f821e881241fbed5ac55f99795e909ea767b6f700badd77635749bf6196f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0723d1b2ed0ff386374b381e4c08dc9abb738a3df792cf76d0189c131a29f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0723d1b2ed0ff386374b381e4c08dc9abb738a3df792cf76d0189c131a29f67->enter($__internal_c0723d1b2ed0ff386374b381e4c08dc9abb738a3df792cf76d0189c131a29f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c0723d1b2ed0ff386374b381e4c08dc9abb738a3df792cf76d0189c131a29f67->leave($__internal_c0723d1b2ed0ff386374b381e4c08dc9abb738a3df792cf76d0189c131a29f67_prof);

        
        $__internal_61f821e881241fbed5ac55f99795e909ea767b6f700badd77635749bf6196f03->leave($__internal_61f821e881241fbed5ac55f99795e909ea767b6f700badd77635749bf6196f03_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a08da61b2f1dafc5e4b30f619a4068b3f89834c984ee699d0637961a395f5c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08da61b2f1dafc5e4b30f619a4068b3f89834c984ee699d0637961a395f5c87->enter($__internal_a08da61b2f1dafc5e4b30f619a4068b3f89834c984ee699d0637961a395f5c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a742f6f837f28137eb4fd21f8f8db0881e7a384aa6603fced293d6b6afb32b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a742f6f837f28137eb4fd21f8f8db0881e7a384aa6603fced293d6b6afb32b77->enter($__internal_a742f6f837f28137eb4fd21f8f8db0881e7a384aa6603fced293d6b6afb32b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a742f6f837f28137eb4fd21f8f8db0881e7a384aa6603fced293d6b6afb32b77->leave($__internal_a742f6f837f28137eb4fd21f8f8db0881e7a384aa6603fced293d6b6afb32b77_prof);

        
        $__internal_a08da61b2f1dafc5e4b30f619a4068b3f89834c984ee699d0637961a395f5c87->leave($__internal_a08da61b2f1dafc5e4b30f619a4068b3f89834c984ee699d0637961a395f5c87_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1b23ee06ee5e369d105a3925321cfe589077fc31f0dbc9d22759f56497636e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b23ee06ee5e369d105a3925321cfe589077fc31f0dbc9d22759f56497636e8->enter($__internal_d1b23ee06ee5e369d105a3925321cfe589077fc31f0dbc9d22759f56497636e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85487a3953e72057d3354ac5783da8e8e7e2512100a047d62220fe2eab1f4477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85487a3953e72057d3354ac5783da8e8e7e2512100a047d62220fe2eab1f4477->enter($__internal_85487a3953e72057d3354ac5783da8e8e7e2512100a047d62220fe2eab1f4477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_85487a3953e72057d3354ac5783da8e8e7e2512100a047d62220fe2eab1f4477->leave($__internal_85487a3953e72057d3354ac5783da8e8e7e2512100a047d62220fe2eab1f4477_prof);

        
        $__internal_d1b23ee06ee5e369d105a3925321cfe589077fc31f0dbc9d22759f56497636e8->leave($__internal_d1b23ee06ee5e369d105a3925321cfe589077fc31f0dbc9d22759f56497636e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/amd-64/work/STLGenarator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
