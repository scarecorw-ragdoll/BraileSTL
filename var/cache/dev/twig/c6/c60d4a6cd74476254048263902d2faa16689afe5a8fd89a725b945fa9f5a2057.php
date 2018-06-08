<?php

/* default/download.html.twig */
class __TwigTemplate_703a52e00f0af83184ff32e540d2ad7237f1b785982bd5390ccdfab774dad447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/download.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14d1c8e58d4dc90f6c71066f925d6cdfe815765a86037160eac8fd1f3e16e47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d1c8e58d4dc90f6c71066f925d6cdfe815765a86037160eac8fd1f3e16e47e->enter($__internal_14d1c8e58d4dc90f6c71066f925d6cdfe815765a86037160eac8fd1f3e16e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/download.html.twig"));

        $__internal_ada16d7405718c1ca9675e1cbc7ad5f6a03eb3c6a5a1da61ce589e84e6f763a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada16d7405718c1ca9675e1cbc7ad5f6a03eb3c6a5a1da61ce589e84e6f763a6->enter($__internal_ada16d7405718c1ca9675e1cbc7ad5f6a03eb3c6a5a1da61ce589e84e6f763a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/download.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d1c8e58d4dc90f6c71066f925d6cdfe815765a86037160eac8fd1f3e16e47e->leave($__internal_14d1c8e58d4dc90f6c71066f925d6cdfe815765a86037160eac8fd1f3e16e47e_prof);

        
        $__internal_ada16d7405718c1ca9675e1cbc7ad5f6a03eb3c6a5a1da61ce589e84e6f763a6->leave($__internal_ada16d7405718c1ca9675e1cbc7ad5f6a03eb3c6a5a1da61ce589e84e6f763a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb71d868f12b6ec2e604b2800abae935da5643bcd6465c405b355462c1b38f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb71d868f12b6ec2e604b2800abae935da5643bcd6465c405b355462c1b38f50->enter($__internal_eb71d868f12b6ec2e604b2800abae935da5643bcd6465c405b355462c1b38f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5cda2abb0a99ba9a3a9878cb65bf49445bd9a728dd955e3d94ca5dce4476e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cda2abb0a99ba9a3a9878cb65bf49445bd9a728dd955e3d94ca5dce4476e3c->enter($__internal_b5cda2abb0a99ba9a3a9878cb65bf49445bd9a728dd955e3d94ca5dce4476e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Ваша модель сгенерированна!<br>
    <a href=\"storage/";
        // line 5
        echo twig_escape_filter($this->env, ($context["uid"] ?? $this->getContext($context, "uid")), "html", null, true);
        echo ".stl\" target=\"_blank\">Скачать</a><br>
    <object type=\"image/svg+xml\" data=\"storage/";
        // line 6
        echo twig_escape_filter($this->env, ($context["uid"] ?? $this->getContext($context, "uid")), "html", null, true);
        echo ".svg\" width=\"350\" height=\"350\" >
        Ваш браузер не поддерживает SVG
    </object>
";
        
        $__internal_b5cda2abb0a99ba9a3a9878cb65bf49445bd9a728dd955e3d94ca5dce4476e3c->leave($__internal_b5cda2abb0a99ba9a3a9878cb65bf49445bd9a728dd955e3d94ca5dce4476e3c_prof);

        
        $__internal_eb71d868f12b6ec2e604b2800abae935da5643bcd6465c405b355462c1b38f50->leave($__internal_eb71d868f12b6ec2e604b2800abae935da5643bcd6465c405b355462c1b38f50_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67e4a8f4a4cb62338c3d23756accf8e31e7fb49c87f6dd1409192ab987e53972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e4a8f4a4cb62338c3d23756accf8e31e7fb49c87f6dd1409192ab987e53972->enter($__internal_67e4a8f4a4cb62338c3d23756accf8e31e7fb49c87f6dd1409192ab987e53972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a71e0931eea80d0f79eb08d5e1bc66f2a91a9883839c2a77efbd1441d2dbc7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71e0931eea80d0f79eb08d5e1bc66f2a91a9883839c2a77efbd1441d2dbc7f7->enter($__internal_a71e0931eea80d0f79eb08d5e1bc66f2a91a9883839c2a77efbd1441d2dbc7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <style>
        body {
            background: #F5F5F5;
            font: 18px/1.5 sans-serif;
        }

        h1, h2 {
            line-height: 1.2;
            margin: 0 0 .5em;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 21px;
            margin-bottom: 1em;
        }

        p {
            margin: 0 0 1em 0;
        }

        a {
            color: #0000F0;
        }

        a:hover {
            text-decoration: none;
        }

        code {
            background: #F5F5F5;
            max-width: 100px;
            padding: 2px 6px;
            word-wrap: break-word;
        }

        #wrapper {
            background: #FFF;
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
        }

        #container {
            padding: 2em;
        }

        #welcome, #status {
            margin-bottom: 2em;
        }

        #welcome h1 span {
            display: block;
            font-size: 75%;
        }

        #icon-status, #icon-book {
            float: left;
            height: 64px;
            margin-right: 1em;
            margin-top: -4px;
            width: 64px;
        }

        #icon-book {
            display: none;
        }

        @media (min-width: 768px) {
            #wrapper {
                width: 80%;
                margin: 2em auto;
            }

            #icon-book {
                display: inline-block;
            }

            #status a, #next a {
                display: block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sf-toolbar {
                opacity: 0;
                -webkit-animation: fade-in 1s .2s forwards;
                animation: fade-in 1s .2s forwards;
            }
        }
    </style>
";
        
        $__internal_a71e0931eea80d0f79eb08d5e1bc66f2a91a9883839c2a77efbd1441d2dbc7f7->leave($__internal_a71e0931eea80d0f79eb08d5e1bc66f2a91a9883839c2a77efbd1441d2dbc7f7_prof);

        
        $__internal_67e4a8f4a4cb62338c3d23756accf8e31e7fb49c87f6dd1409192ab987e53972->leave($__internal_67e4a8f4a4cb62338c3d23756accf8e31e7fb49c87f6dd1409192ab987e53972_prof);

    }

    public function getTemplateName()
    {
        return "default/download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  71 => 11,  57 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Ваша модель сгенерированна!<br>
    <a href=\"storage/{{ uid }}.stl\" target=\"_blank\">Скачать</a><br>
    <object type=\"image/svg+xml\" data=\"storage/{{ uid }}.svg\" width=\"350\" height=\"350\" >
        Ваш браузер не поддерживает SVG
    </object>
{% endblock %}

{% block stylesheets %}
    <style>
        body {
            background: #F5F5F5;
            font: 18px/1.5 sans-serif;
        }

        h1, h2 {
            line-height: 1.2;
            margin: 0 0 .5em;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 21px;
            margin-bottom: 1em;
        }

        p {
            margin: 0 0 1em 0;
        }

        a {
            color: #0000F0;
        }

        a:hover {
            text-decoration: none;
        }

        code {
            background: #F5F5F5;
            max-width: 100px;
            padding: 2px 6px;
            word-wrap: break-word;
        }

        #wrapper {
            background: #FFF;
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
        }

        #container {
            padding: 2em;
        }

        #welcome, #status {
            margin-bottom: 2em;
        }

        #welcome h1 span {
            display: block;
            font-size: 75%;
        }

        #icon-status, #icon-book {
            float: left;
            height: 64px;
            margin-right: 1em;
            margin-top: -4px;
            width: 64px;
        }

        #icon-book {
            display: none;
        }

        @media (min-width: 768px) {
            #wrapper {
                width: 80%;
                margin: 2em auto;
            }

            #icon-book {
                display: inline-block;
            }

            #status a, #next a {
                display: block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sf-toolbar {
                opacity: 0;
                -webkit-animation: fade-in 1s .2s forwards;
                animation: fade-in 1s .2s forwards;
            }
        }
    </style>
{% endblock %}
", "default/download.html.twig", "/home/amd-64/work/STLGenarator/app/Resources/views/default/download.html.twig");
    }
}
