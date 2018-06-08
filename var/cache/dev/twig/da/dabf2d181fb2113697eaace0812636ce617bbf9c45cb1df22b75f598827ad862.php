<?php

/* default/index.html.twig */
class __TwigTemplate_e7dd53a1d59c18ca9afe194e1bc787facc3052bd1f139ee8df3eac6ed5269f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_1709ef0a8c7e2cbfed62ce6edb4f007703241b78c51441056bf2a7a38b807431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1709ef0a8c7e2cbfed62ce6edb4f007703241b78c51441056bf2a7a38b807431->enter($__internal_1709ef0a8c7e2cbfed62ce6edb4f007703241b78c51441056bf2a7a38b807431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_0f8c69083f2662c3d13cf30a8821bcf0bf8ab66621f7c739cc52044fe3209d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8c69083f2662c3d13cf30a8821bcf0bf8ab66621f7c739cc52044fe3209d80->enter($__internal_0f8c69083f2662c3d13cf30a8821bcf0bf8ab66621f7c739cc52044fe3209d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1709ef0a8c7e2cbfed62ce6edb4f007703241b78c51441056bf2a7a38b807431->leave($__internal_1709ef0a8c7e2cbfed62ce6edb4f007703241b78c51441056bf2a7a38b807431_prof);

        
        $__internal_0f8c69083f2662c3d13cf30a8821bcf0bf8ab66621f7c739cc52044fe3209d80->leave($__internal_0f8c69083f2662c3d13cf30a8821bcf0bf8ab66621f7c739cc52044fe3209d80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3387dc84072b995461dd5df0e88152ca55a9863abee902107cb5ab70468a8efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3387dc84072b995461dd5df0e88152ca55a9863abee902107cb5ab70468a8efd->enter($__internal_3387dc84072b995461dd5df0e88152ca55a9863abee902107cb5ab70468a8efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eaf4aecd36a71fcff92881905e8b317d7f3a3e26d942c7b5c1a7358eb11aabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaf4aecd36a71fcff92881905e8b317d7f3a3e26d942c7b5c1a7358eb11aabe->enter($__internal_3eaf4aecd36a71fcff92881905e8b317d7f3a3e26d942c7b5c1a7358eb11aabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form method=\"POST\">
        Текст: <br><input name=\"text\" placeholder=\"Введите текст!\" required style=\"width: 250px;\"><br>
        Колличество символов в строке:<br> <input name=\"line\" type=\"number\" maxlength=\"2\" required style=\"width: 50px;\"><br><br>
        Высота таблицы:<br> <input name=\"rh\" type=\"number\" value=\"10\" maxlength=\"2\" style=\"width: 50px;\"><br><br>
        Радиус точки:<br> <input name=\"cr\" type=\"number\" value=\"6\" maxlength=\"2\" style=\"width: 50px;\"><br>
        Высота точки:<br> <input name=\"ch\" type=\"number\" value=\"10\" maxlength=\"2\"style=\"width: 50px;\"><br>

        <br><br>
        <input type=\"submit\" value=\"Отправить\">
    </form>
";
        
        $__internal_3eaf4aecd36a71fcff92881905e8b317d7f3a3e26d942c7b5c1a7358eb11aabe->leave($__internal_3eaf4aecd36a71fcff92881905e8b317d7f3a3e26d942c7b5c1a7358eb11aabe_prof);

        
        $__internal_3387dc84072b995461dd5df0e88152ca55a9863abee902107cb5ab70468a8efd->leave($__internal_3387dc84072b995461dd5df0e88152ca55a9863abee902107cb5ab70468a8efd_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_460137e5624868dfaa185dfb69c5bc4f6c72197f1fca4a9d7c03f4e5e8fe7f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460137e5624868dfaa185dfb69c5bc4f6c72197f1fca4a9d7c03f4e5e8fe7f89->enter($__internal_460137e5624868dfaa185dfb69c5bc4f6c72197f1fca4a9d7c03f4e5e8fe7f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9861c0dbed41881358cbcb9bb54950706f54d12823e2dae9e9e8d2b111f63ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9861c0dbed41881358cbcb9bb54950706f54d12823e2dae9e9e8d2b111f63ec4->enter($__internal_9861c0dbed41881358cbcb9bb54950706f54d12823e2dae9e9e8d2b111f63ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
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
        
        $__internal_9861c0dbed41881358cbcb9bb54950706f54d12823e2dae9e9e8d2b111f63ec4->leave($__internal_9861c0dbed41881358cbcb9bb54950706f54d12823e2dae9e9e8d2b111f63ec4_prof);

        
        $__internal_460137e5624868dfaa185dfb69c5bc4f6c72197f1fca4a9d7c03f4e5e8fe7f89->leave($__internal_460137e5624868dfaa185dfb69c5bc4f6c72197f1fca4a9d7c03f4e5e8fe7f89_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  70 => 16,  50 => 4,  41 => 3,  11 => 1,);
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
    <form method=\"POST\">
        Текст: <br><input name=\"text\" placeholder=\"Введите текст!\" required style=\"width: 250px;\"><br>
        Колличество символов в строке:<br> <input name=\"line\" type=\"number\" maxlength=\"2\" required style=\"width: 50px;\"><br><br>
        Высота таблицы:<br> <input name=\"rh\" type=\"number\" value=\"10\" maxlength=\"2\" style=\"width: 50px;\"><br><br>
        Радиус точки:<br> <input name=\"cr\" type=\"number\" value=\"6\" maxlength=\"2\" style=\"width: 50px;\"><br>
        Высота точки:<br> <input name=\"ch\" type=\"number\" value=\"10\" maxlength=\"2\"style=\"width: 50px;\"><br>

        <br><br>
        <input type=\"submit\" value=\"Отправить\">
    </form>
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
", "default/index.html.twig", "/home/amd-64/work/STLGenarator/app/Resources/views/default/index.html.twig");
    }
}
