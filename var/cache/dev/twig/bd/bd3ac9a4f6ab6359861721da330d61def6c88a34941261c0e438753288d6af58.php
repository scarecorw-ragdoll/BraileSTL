<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5472197a9615cca948475b890f8f9dbf7313921e10924c2903bc9d99a179f2d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_748f396c89e52bbfafbacf6342d046a1f907b346125008d3c39e4401f0f38596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748f396c89e52bbfafbacf6342d046a1f907b346125008d3c39e4401f0f38596->enter($__internal_748f396c89e52bbfafbacf6342d046a1f907b346125008d3c39e4401f0f38596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6d21fb77165236ce3a8d65e1775d94eca987fbeaf8606ae1311ed7a87f05b31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d21fb77165236ce3a8d65e1775d94eca987fbeaf8606ae1311ed7a87f05b31b->enter($__internal_6d21fb77165236ce3a8d65e1775d94eca987fbeaf8606ae1311ed7a87f05b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748f396c89e52bbfafbacf6342d046a1f907b346125008d3c39e4401f0f38596->leave($__internal_748f396c89e52bbfafbacf6342d046a1f907b346125008d3c39e4401f0f38596_prof);

        
        $__internal_6d21fb77165236ce3a8d65e1775d94eca987fbeaf8606ae1311ed7a87f05b31b->leave($__internal_6d21fb77165236ce3a8d65e1775d94eca987fbeaf8606ae1311ed7a87f05b31b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b78a6680ec732eb35ae8339c5e5d8dfa1e07d8579b83c4785c0cce5dceadd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b78a6680ec732eb35ae8339c5e5d8dfa1e07d8579b83c4785c0cce5dceadd7f->enter($__internal_1b78a6680ec732eb35ae8339c5e5d8dfa1e07d8579b83c4785c0cce5dceadd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7fc55ba4256b9b1c97052c5d18dfdfe9e2906c46f9d1a8305bebabf102f54ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc55ba4256b9b1c97052c5d18dfdfe9e2906c46f9d1a8305bebabf102f54ebb->enter($__internal_7fc55ba4256b9b1c97052c5d18dfdfe9e2906c46f9d1a8305bebabf102f54ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7fc55ba4256b9b1c97052c5d18dfdfe9e2906c46f9d1a8305bebabf102f54ebb->leave($__internal_7fc55ba4256b9b1c97052c5d18dfdfe9e2906c46f9d1a8305bebabf102f54ebb_prof);

        
        $__internal_1b78a6680ec732eb35ae8339c5e5d8dfa1e07d8579b83c4785c0cce5dceadd7f->leave($__internal_1b78a6680ec732eb35ae8339c5e5d8dfa1e07d8579b83c4785c0cce5dceadd7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/amd-64/work/STLGenarator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
