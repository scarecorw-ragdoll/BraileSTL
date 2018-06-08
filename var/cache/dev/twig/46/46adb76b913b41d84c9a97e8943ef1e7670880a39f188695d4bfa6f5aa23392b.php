<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7954b0026c29a1aea8a72575117d51dfae17a25283b008975695a3b05f9366d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7954b0026c29a1aea8a72575117d51dfae17a25283b008975695a3b05f9366d7->enter($__internal_7954b0026c29a1aea8a72575117d51dfae17a25283b008975695a3b05f9366d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2a41704ceb33d07e4a03a38672fe4d996e7ced5fe2f9a893dc1ad7d3aa49aa12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a41704ceb33d07e4a03a38672fe4d996e7ced5fe2f9a893dc1ad7d3aa49aa12->enter($__internal_2a41704ceb33d07e4a03a38672fe4d996e7ced5fe2f9a893dc1ad7d3aa49aa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7954b0026c29a1aea8a72575117d51dfae17a25283b008975695a3b05f9366d7->leave($__internal_7954b0026c29a1aea8a72575117d51dfae17a25283b008975695a3b05f9366d7_prof);

        
        $__internal_2a41704ceb33d07e4a03a38672fe4d996e7ced5fe2f9a893dc1ad7d3aa49aa12->leave($__internal_2a41704ceb33d07e4a03a38672fe4d996e7ced5fe2f9a893dc1ad7d3aa49aa12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee948816dc9214617caba2ed8fbbe927dc2b4ece4f2669156489fff8507e3ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee948816dc9214617caba2ed8fbbe927dc2b4ece4f2669156489fff8507e3ffa->enter($__internal_ee948816dc9214617caba2ed8fbbe927dc2b4ece4f2669156489fff8507e3ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c7ac555ba44a9b2e2e5f433361afdd77b8e35c2e9eb5058212ad806bd5d8d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7ac555ba44a9b2e2e5f433361afdd77b8e35c2e9eb5058212ad806bd5d8d12->enter($__internal_4c7ac555ba44a9b2e2e5f433361afdd77b8e35c2e9eb5058212ad806bd5d8d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4c7ac555ba44a9b2e2e5f433361afdd77b8e35c2e9eb5058212ad806bd5d8d12->leave($__internal_4c7ac555ba44a9b2e2e5f433361afdd77b8e35c2e9eb5058212ad806bd5d8d12_prof);

        
        $__internal_ee948816dc9214617caba2ed8fbbe927dc2b4ece4f2669156489fff8507e3ffa->leave($__internal_ee948816dc9214617caba2ed8fbbe927dc2b4ece4f2669156489fff8507e3ffa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6251d316188ac5227848d2c67b558921ea658b9d477a746c5a289110279d75e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6251d316188ac5227848d2c67b558921ea658b9d477a746c5a289110279d75e6->enter($__internal_6251d316188ac5227848d2c67b558921ea658b9d477a746c5a289110279d75e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9360b1103b9fa1b0b347986643c901ecc7bf5b651d7f99b164a0643993f235fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9360b1103b9fa1b0b347986643c901ecc7bf5b651d7f99b164a0643993f235fa->enter($__internal_9360b1103b9fa1b0b347986643c901ecc7bf5b651d7f99b164a0643993f235fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9360b1103b9fa1b0b347986643c901ecc7bf5b651d7f99b164a0643993f235fa->leave($__internal_9360b1103b9fa1b0b347986643c901ecc7bf5b651d7f99b164a0643993f235fa_prof);

        
        $__internal_6251d316188ac5227848d2c67b558921ea658b9d477a746c5a289110279d75e6->leave($__internal_6251d316188ac5227848d2c67b558921ea658b9d477a746c5a289110279d75e6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_94111978d3cab89528dcad58664c33c7b3aa38186f3ad4d06a4dd361c7aee06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94111978d3cab89528dcad58664c33c7b3aa38186f3ad4d06a4dd361c7aee06f->enter($__internal_94111978d3cab89528dcad58664c33c7b3aa38186f3ad4d06a4dd361c7aee06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ea742ac1ad9d291707cec11ae3d867ccb31c59f5d47560d7fbc583ac068a7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea742ac1ad9d291707cec11ae3d867ccb31c59f5d47560d7fbc583ac068a7e8->enter($__internal_5ea742ac1ad9d291707cec11ae3d867ccb31c59f5d47560d7fbc583ac068a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5ea742ac1ad9d291707cec11ae3d867ccb31c59f5d47560d7fbc583ac068a7e8->leave($__internal_5ea742ac1ad9d291707cec11ae3d867ccb31c59f5d47560d7fbc583ac068a7e8_prof);

        
        $__internal_94111978d3cab89528dcad58664c33c7b3aa38186f3ad4d06a4dd361c7aee06f->leave($__internal_94111978d3cab89528dcad58664c33c7b3aa38186f3ad4d06a4dd361c7aee06f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/amd-64/work/STLGenarator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
