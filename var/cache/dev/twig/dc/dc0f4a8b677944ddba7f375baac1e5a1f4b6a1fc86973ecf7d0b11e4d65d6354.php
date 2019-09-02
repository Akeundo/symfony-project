<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
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
        $__internal_118857b79a431e3a21a0717f9eab8a95c945b9fea7f4e594c0aa26fd0dec740a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118857b79a431e3a21a0717f9eab8a95c945b9fea7f4e594c0aa26fd0dec740a->enter($__internal_118857b79a431e3a21a0717f9eab8a95c945b9fea7f4e594c0aa26fd0dec740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f96e31361205c187aa6042b938eb66d28174911ff505a2aa92ad07b8ca1e32d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96e31361205c187aa6042b938eb66d28174911ff505a2aa92ad07b8ca1e32d4->enter($__internal_f96e31361205c187aa6042b938eb66d28174911ff505a2aa92ad07b8ca1e32d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118857b79a431e3a21a0717f9eab8a95c945b9fea7f4e594c0aa26fd0dec740a->leave($__internal_118857b79a431e3a21a0717f9eab8a95c945b9fea7f4e594c0aa26fd0dec740a_prof);

        
        $__internal_f96e31361205c187aa6042b938eb66d28174911ff505a2aa92ad07b8ca1e32d4->leave($__internal_f96e31361205c187aa6042b938eb66d28174911ff505a2aa92ad07b8ca1e32d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2d6fd0942ba451a9ee7687f61221bb9482e58b4d2c6be8463be402010423472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d6fd0942ba451a9ee7687f61221bb9482e58b4d2c6be8463be402010423472->enter($__internal_c2d6fd0942ba451a9ee7687f61221bb9482e58b4d2c6be8463be402010423472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_265976c8a490d56a9509a105e521ba4aed1f95f171c029119d73d29ccba63e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265976c8a490d56a9509a105e521ba4aed1f95f171c029119d73d29ccba63e79->enter($__internal_265976c8a490d56a9509a105e521ba4aed1f95f171c029119d73d29ccba63e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_265976c8a490d56a9509a105e521ba4aed1f95f171c029119d73d29ccba63e79->leave($__internal_265976c8a490d56a9509a105e521ba4aed1f95f171c029119d73d29ccba63e79_prof);

        
        $__internal_c2d6fd0942ba451a9ee7687f61221bb9482e58b4d2c6be8463be402010423472->leave($__internal_c2d6fd0942ba451a9ee7687f61221bb9482e58b4d2c6be8463be402010423472_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ee38a58eb9248fad857dd8d6045ad241060d0ff4c048a21bdd42282e09ce4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee38a58eb9248fad857dd8d6045ad241060d0ff4c048a21bdd42282e09ce4cb->enter($__internal_8ee38a58eb9248fad857dd8d6045ad241060d0ff4c048a21bdd42282e09ce4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec64a719e76ba80da089399fcc2f360c24d41d6275f25a3101eb11c094cb3f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec64a719e76ba80da089399fcc2f360c24d41d6275f25a3101eb11c094cb3f88->enter($__internal_ec64a719e76ba80da089399fcc2f360c24d41d6275f25a3101eb11c094cb3f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec64a719e76ba80da089399fcc2f360c24d41d6275f25a3101eb11c094cb3f88->leave($__internal_ec64a719e76ba80da089399fcc2f360c24d41d6275f25a3101eb11c094cb3f88_prof);

        
        $__internal_8ee38a58eb9248fad857dd8d6045ad241060d0ff4c048a21bdd42282e09ce4cb->leave($__internal_8ee38a58eb9248fad857dd8d6045ad241060d0ff4c048a21bdd42282e09ce4cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ceae2253c9a5ae915235792af2a7ac86ab1386aca4390c4f4a593788c5e2ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ceae2253c9a5ae915235792af2a7ac86ab1386aca4390c4f4a593788c5e2ead->enter($__internal_3ceae2253c9a5ae915235792af2a7ac86ab1386aca4390c4f4a593788c5e2ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01008f3c8ec402a599efea153c8eed0a3c31bd5113ba004f536da201693a95f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01008f3c8ec402a599efea153c8eed0a3c31bd5113ba004f536da201693a95f0->enter($__internal_01008f3c8ec402a599efea153c8eed0a3c31bd5113ba004f536da201693a95f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01008f3c8ec402a599efea153c8eed0a3c31bd5113ba004f536da201693a95f0->leave($__internal_01008f3c8ec402a599efea153c8eed0a3c31bd5113ba004f536da201693a95f0_prof);

        
        $__internal_3ceae2253c9a5ae915235792af2a7ac86ab1386aca4390c4f4a593788c5e2ead->leave($__internal_3ceae2253c9a5ae915235792af2a7ac86ab1386aca4390c4f4a593788c5e2ead_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/admin/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
