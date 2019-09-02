<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7db9032a528ac897a0aa9513cc3133c8d4ad9f605b092b4c3753ff5351bfb33d extends Twig_Template
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
        $__internal_6cf082bd47ecdf8209fd6312cff5533e84b150fa7b4cb8f425e37e96f13b8f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf082bd47ecdf8209fd6312cff5533e84b150fa7b4cb8f425e37e96f13b8f04->enter($__internal_6cf082bd47ecdf8209fd6312cff5533e84b150fa7b4cb8f425e37e96f13b8f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a7ef69a65c112f4a0ad4a4c4082e36d3843697fb2075b1e0ac3233db9ec20b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ef69a65c112f4a0ad4a4c4082e36d3843697fb2075b1e0ac3233db9ec20b4f->enter($__internal_a7ef69a65c112f4a0ad4a4c4082e36d3843697fb2075b1e0ac3233db9ec20b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cf082bd47ecdf8209fd6312cff5533e84b150fa7b4cb8f425e37e96f13b8f04->leave($__internal_6cf082bd47ecdf8209fd6312cff5533e84b150fa7b4cb8f425e37e96f13b8f04_prof);

        
        $__internal_a7ef69a65c112f4a0ad4a4c4082e36d3843697fb2075b1e0ac3233db9ec20b4f->leave($__internal_a7ef69a65c112f4a0ad4a4c4082e36d3843697fb2075b1e0ac3233db9ec20b4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27c52d53558ecc4566d7a548ba7e3d99fdfaec06e773c953be29341f2ce340f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c52d53558ecc4566d7a548ba7e3d99fdfaec06e773c953be29341f2ce340f4->enter($__internal_27c52d53558ecc4566d7a548ba7e3d99fdfaec06e773c953be29341f2ce340f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e44a4930bc869bf6c42138d568b14067fcc8ca23f672700f3655882e2ec2b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e44a4930bc869bf6c42138d568b14067fcc8ca23f672700f3655882e2ec2b41->enter($__internal_2e44a4930bc869bf6c42138d568b14067fcc8ca23f672700f3655882e2ec2b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2e44a4930bc869bf6c42138d568b14067fcc8ca23f672700f3655882e2ec2b41->leave($__internal_2e44a4930bc869bf6c42138d568b14067fcc8ca23f672700f3655882e2ec2b41_prof);

        
        $__internal_27c52d53558ecc4566d7a548ba7e3d99fdfaec06e773c953be29341f2ce340f4->leave($__internal_27c52d53558ecc4566d7a548ba7e3d99fdfaec06e773c953be29341f2ce340f4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d004572a07030146d522100aed746f29354397ed5e7cdf3382641e5d18cf5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d004572a07030146d522100aed746f29354397ed5e7cdf3382641e5d18cf5a3->enter($__internal_7d004572a07030146d522100aed746f29354397ed5e7cdf3382641e5d18cf5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c661d153898bd4b4883d2efbe60aa9f68c557944d95e708d87d85a3afbcbd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c661d153898bd4b4883d2efbe60aa9f68c557944d95e708d87d85a3afbcbd84->enter($__internal_1c661d153898bd4b4883d2efbe60aa9f68c557944d95e708d87d85a3afbcbd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1c661d153898bd4b4883d2efbe60aa9f68c557944d95e708d87d85a3afbcbd84->leave($__internal_1c661d153898bd4b4883d2efbe60aa9f68c557944d95e708d87d85a3afbcbd84_prof);

        
        $__internal_7d004572a07030146d522100aed746f29354397ed5e7cdf3382641e5d18cf5a3->leave($__internal_7d004572a07030146d522100aed746f29354397ed5e7cdf3382641e5d18cf5a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0b6e50770d078c4b6cc2f14b7c978d1fae98f6cd976fba96ca1a40f9ce7c36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b6e50770d078c4b6cc2f14b7c978d1fae98f6cd976fba96ca1a40f9ce7c36e->enter($__internal_e0b6e50770d078c4b6cc2f14b7c978d1fae98f6cd976fba96ca1a40f9ce7c36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3090b4769623ee01796a36da4aeebee089fd3595b381f8f936b012e7138f1f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3090b4769623ee01796a36da4aeebee089fd3595b381f8f936b012e7138f1f6f->enter($__internal_3090b4769623ee01796a36da4aeebee089fd3595b381f8f936b012e7138f1f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3090b4769623ee01796a36da4aeebee089fd3595b381f8f936b012e7138f1f6f->leave($__internal_3090b4769623ee01796a36da4aeebee089fd3595b381f8f936b012e7138f1f6f_prof);

        
        $__internal_e0b6e50770d078c4b6cc2f14b7c978d1fae98f6cd976fba96ca1a40f9ce7c36e->leave($__internal_e0b6e50770d078c4b6cc2f14b7c978d1fae98f6cd976fba96ca1a40f9ce7c36e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/admin/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
