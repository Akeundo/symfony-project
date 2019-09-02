<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d0db16ac630cfe1a0c858b7bde73c120b6d119a537dd4cc07e08836dcfb2fdd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46659b3c34d33be126910abb3f5feb4ae058dd9a06fed78a39682b8b81956f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46659b3c34d33be126910abb3f5feb4ae058dd9a06fed78a39682b8b81956f36->enter($__internal_46659b3c34d33be126910abb3f5feb4ae058dd9a06fed78a39682b8b81956f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_7de2d5e7c5e98370f601533e5f33eaa41dc8ce802c9c47a2ee02f0a044938755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de2d5e7c5e98370f601533e5f33eaa41dc8ce802c9c47a2ee02f0a044938755->enter($__internal_7de2d5e7c5e98370f601533e5f33eaa41dc8ce802c9c47a2ee02f0a044938755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_46659b3c34d33be126910abb3f5feb4ae058dd9a06fed78a39682b8b81956f36->leave($__internal_46659b3c34d33be126910abb3f5feb4ae058dd9a06fed78a39682b8b81956f36_prof);

        
        $__internal_7de2d5e7c5e98370f601533e5f33eaa41dc8ce802c9c47a2ee02f0a044938755->leave($__internal_7de2d5e7c5e98370f601533e5f33eaa41dc8ce802c9c47a2ee02f0a044938755_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/admin/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
