<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be9f7a92d1fa7a7fd313b056de7887f5a38e812bc307c53d781f0368adbf1c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9f7a92d1fa7a7fd313b056de7887f5a38e812bc307c53d781f0368adbf1c74->enter($__internal_be9f7a92d1fa7a7fd313b056de7887f5a38e812bc307c53d781f0368adbf1c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_defaf1a59d020dec594adeb3c6eb667508c3ecb09b7b9614b70bf6f99aa23c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defaf1a59d020dec594adeb3c6eb667508c3ecb09b7b9614b70bf6f99aa23c4b->enter($__internal_defaf1a59d020dec594adeb3c6eb667508c3ecb09b7b9614b70bf6f99aa23c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_be9f7a92d1fa7a7fd313b056de7887f5a38e812bc307c53d781f0368adbf1c74->leave($__internal_be9f7a92d1fa7a7fd313b056de7887f5a38e812bc307c53d781f0368adbf1c74_prof);

        
        $__internal_defaf1a59d020dec594adeb3c6eb667508c3ecb09b7b9614b70bf6f99aa23c4b->leave($__internal_defaf1a59d020dec594adeb3c6eb667508c3ecb09b7b9614b70bf6f99aa23c4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ced6c19e52bd7dfe16b2700b6e2db08eeb4951b960b60f4453805d0b7c2ef9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced6c19e52bd7dfe16b2700b6e2db08eeb4951b960b60f4453805d0b7c2ef9f9->enter($__internal_ced6c19e52bd7dfe16b2700b6e2db08eeb4951b960b60f4453805d0b7c2ef9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10ea058709edf1ca0baca32b61ed34be8c41b05c80e132fba836d9fbe5ee7667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ea058709edf1ca0baca32b61ed34be8c41b05c80e132fba836d9fbe5ee7667->enter($__internal_10ea058709edf1ca0baca32b61ed34be8c41b05c80e132fba836d9fbe5ee7667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10ea058709edf1ca0baca32b61ed34be8c41b05c80e132fba836d9fbe5ee7667->leave($__internal_10ea058709edf1ca0baca32b61ed34be8c41b05c80e132fba836d9fbe5ee7667_prof);

        
        $__internal_ced6c19e52bd7dfe16b2700b6e2db08eeb4951b960b60f4453805d0b7c2ef9f9->leave($__internal_ced6c19e52bd7dfe16b2700b6e2db08eeb4951b960b60f4453805d0b7c2ef9f9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a756ec1a339882531c3759401b4ccd56b036973ae7ef2c94ce4a3ad6ec4b583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a756ec1a339882531c3759401b4ccd56b036973ae7ef2c94ce4a3ad6ec4b583->enter($__internal_0a756ec1a339882531c3759401b4ccd56b036973ae7ef2c94ce4a3ad6ec4b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f18f0abff89175dc6ad300c60f2246cc9ed45720cbab7c35fa6dfa4d655f137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f18f0abff89175dc6ad300c60f2246cc9ed45720cbab7c35fa6dfa4d655f137->enter($__internal_9f18f0abff89175dc6ad300c60f2246cc9ed45720cbab7c35fa6dfa4d655f137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9f18f0abff89175dc6ad300c60f2246cc9ed45720cbab7c35fa6dfa4d655f137->leave($__internal_9f18f0abff89175dc6ad300c60f2246cc9ed45720cbab7c35fa6dfa4d655f137_prof);

        
        $__internal_0a756ec1a339882531c3759401b4ccd56b036973ae7ef2c94ce4a3ad6ec4b583->leave($__internal_0a756ec1a339882531c3759401b4ccd56b036973ae7ef2c94ce4a3ad6ec4b583_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfa9fae1a82a9bbb5007aebf90234bf96568b4abdff172ca1f81b93214dfb951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa9fae1a82a9bbb5007aebf90234bf96568b4abdff172ca1f81b93214dfb951->enter($__internal_dfa9fae1a82a9bbb5007aebf90234bf96568b4abdff172ca1f81b93214dfb951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3ec950698482208b7d698e6bced20fdf5b4d7b38ef940a76e8a2442f53283eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ec950698482208b7d698e6bced20fdf5b4d7b38ef940a76e8a2442f53283eb->enter($__internal_d3ec950698482208b7d698e6bced20fdf5b4d7b38ef940a76e8a2442f53283eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3ec950698482208b7d698e6bced20fdf5b4d7b38ef940a76e8a2442f53283eb->leave($__internal_d3ec950698482208b7d698e6bced20fdf5b4d7b38ef940a76e8a2442f53283eb_prof);

        
        $__internal_dfa9fae1a82a9bbb5007aebf90234bf96568b4abdff172ca1f81b93214dfb951->leave($__internal_dfa9fae1a82a9bbb5007aebf90234bf96568b4abdff172ca1f81b93214dfb951_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/amd-64/work/STLGenarator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
