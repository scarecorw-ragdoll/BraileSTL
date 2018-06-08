<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0d0e3bb8b1271f8df474ed8a490c6e52c864a0e2a27173672b3e8aa128a00e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0e3bb8b1271f8df474ed8a490c6e52c864a0e2a27173672b3e8aa128a00e79->enter($__internal_0d0e3bb8b1271f8df474ed8a490c6e52c864a0e2a27173672b3e8aa128a00e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_51c4de7a6b879f42a13f7ab7983d22cfd67f2d5a1fdb36550e3cdeb0a7617db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c4de7a6b879f42a13f7ab7983d22cfd67f2d5a1fdb36550e3cdeb0a7617db5->enter($__internal_51c4de7a6b879f42a13f7ab7983d22cfd67f2d5a1fdb36550e3cdeb0a7617db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0e3bb8b1271f8df474ed8a490c6e52c864a0e2a27173672b3e8aa128a00e79->leave($__internal_0d0e3bb8b1271f8df474ed8a490c6e52c864a0e2a27173672b3e8aa128a00e79_prof);

        
        $__internal_51c4de7a6b879f42a13f7ab7983d22cfd67f2d5a1fdb36550e3cdeb0a7617db5->leave($__internal_51c4de7a6b879f42a13f7ab7983d22cfd67f2d5a1fdb36550e3cdeb0a7617db5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b62132f262075f42bef4308f5150ba4d2622e8f1c565bc32630e8dcedb25259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b62132f262075f42bef4308f5150ba4d2622e8f1c565bc32630e8dcedb25259->enter($__internal_9b62132f262075f42bef4308f5150ba4d2622e8f1c565bc32630e8dcedb25259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7151a15cc6aac24b80465c2246d8bf42f3e45ce420b1a020b76ffb3700f9680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7151a15cc6aac24b80465c2246d8bf42f3e45ce420b1a020b76ffb3700f9680->enter($__internal_c7151a15cc6aac24b80465c2246d8bf42f3e45ce420b1a020b76ffb3700f9680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7151a15cc6aac24b80465c2246d8bf42f3e45ce420b1a020b76ffb3700f9680->leave($__internal_c7151a15cc6aac24b80465c2246d8bf42f3e45ce420b1a020b76ffb3700f9680_prof);

        
        $__internal_9b62132f262075f42bef4308f5150ba4d2622e8f1c565bc32630e8dcedb25259->leave($__internal_9b62132f262075f42bef4308f5150ba4d2622e8f1c565bc32630e8dcedb25259_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8f207b3eb1a52b03043939dca659e7f824853c9439fc7ab6cb63eb8e7662c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f207b3eb1a52b03043939dca659e7f824853c9439fc7ab6cb63eb8e7662c4c->enter($__internal_c8f207b3eb1a52b03043939dca659e7f824853c9439fc7ab6cb63eb8e7662c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d42c760c1b75ca35621245a954a2839a361e4ba7ac6c4f2899d1256858fa48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d42c760c1b75ca35621245a954a2839a361e4ba7ac6c4f2899d1256858fa48d->enter($__internal_5d42c760c1b75ca35621245a954a2839a361e4ba7ac6c4f2899d1256858fa48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d42c760c1b75ca35621245a954a2839a361e4ba7ac6c4f2899d1256858fa48d->leave($__internal_5d42c760c1b75ca35621245a954a2839a361e4ba7ac6c4f2899d1256858fa48d_prof);

        
        $__internal_c8f207b3eb1a52b03043939dca659e7f824853c9439fc7ab6cb63eb8e7662c4c->leave($__internal_c8f207b3eb1a52b03043939dca659e7f824853c9439fc7ab6cb63eb8e7662c4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_363e4d5b5f7d4b3cb2b2aa2f3e987fec729d9a9a598d54ea4d26cddd1426f41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363e4d5b5f7d4b3cb2b2aa2f3e987fec729d9a9a598d54ea4d26cddd1426f41e->enter($__internal_363e4d5b5f7d4b3cb2b2aa2f3e987fec729d9a9a598d54ea4d26cddd1426f41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5f0953b264e68cce912db5e9ca12b69258013754db28bc06ff9851a0e8913b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f0953b264e68cce912db5e9ca12b69258013754db28bc06ff9851a0e8913b6->enter($__internal_a5f0953b264e68cce912db5e9ca12b69258013754db28bc06ff9851a0e8913b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5f0953b264e68cce912db5e9ca12b69258013754db28bc06ff9851a0e8913b6->leave($__internal_a5f0953b264e68cce912db5e9ca12b69258013754db28bc06ff9851a0e8913b6_prof);

        
        $__internal_363e4d5b5f7d4b3cb2b2aa2f3e987fec729d9a9a598d54ea4d26cddd1426f41e->leave($__internal_363e4d5b5f7d4b3cb2b2aa2f3e987fec729d9a9a598d54ea4d26cddd1426f41e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/amd-64/work/STLGenarator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
