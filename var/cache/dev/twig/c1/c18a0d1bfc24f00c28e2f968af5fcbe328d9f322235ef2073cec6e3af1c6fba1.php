<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4ab0f48e35d788846c09bea88b0a9bbc4773e662c28c735c4f7216f52d4696b extends Twig_Template
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
        $__internal_09dbfc48af8ee53b2812115de1f0cad24b0bd5f8db391161bc0a881ed8c2e3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dbfc48af8ee53b2812115de1f0cad24b0bd5f8db391161bc0a881ed8c2e3a9->enter($__internal_09dbfc48af8ee53b2812115de1f0cad24b0bd5f8db391161bc0a881ed8c2e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f32bd8cbac97fb43fede9ba57bb654710ce71b843036d76c07a7f43bb23d9d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32bd8cbac97fb43fede9ba57bb654710ce71b843036d76c07a7f43bb23d9d02->enter($__internal_f32bd8cbac97fb43fede9ba57bb654710ce71b843036d76c07a7f43bb23d9d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09dbfc48af8ee53b2812115de1f0cad24b0bd5f8db391161bc0a881ed8c2e3a9->leave($__internal_09dbfc48af8ee53b2812115de1f0cad24b0bd5f8db391161bc0a881ed8c2e3a9_prof);

        
        $__internal_f32bd8cbac97fb43fede9ba57bb654710ce71b843036d76c07a7f43bb23d9d02->leave($__internal_f32bd8cbac97fb43fede9ba57bb654710ce71b843036d76c07a7f43bb23d9d02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0de18a7f4894d0ac91659a27554f18e603f73344ed6957409a6cc101c5ee0cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de18a7f4894d0ac91659a27554f18e603f73344ed6957409a6cc101c5ee0cf2->enter($__internal_0de18a7f4894d0ac91659a27554f18e603f73344ed6957409a6cc101c5ee0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9708955375b4a8d2fb8df22538c3731741c7094b0c229fd45a262b86cc3924c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9708955375b4a8d2fb8df22538c3731741c7094b0c229fd45a262b86cc3924c9->enter($__internal_9708955375b4a8d2fb8df22538c3731741c7094b0c229fd45a262b86cc3924c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9708955375b4a8d2fb8df22538c3731741c7094b0c229fd45a262b86cc3924c9->leave($__internal_9708955375b4a8d2fb8df22538c3731741c7094b0c229fd45a262b86cc3924c9_prof);

        
        $__internal_0de18a7f4894d0ac91659a27554f18e603f73344ed6957409a6cc101c5ee0cf2->leave($__internal_0de18a7f4894d0ac91659a27554f18e603f73344ed6957409a6cc101c5ee0cf2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a95e39ca7f5e8c7408da5533bcecfb878cc10f4f9f95e1717eda30a3534e3533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95e39ca7f5e8c7408da5533bcecfb878cc10f4f9f95e1717eda30a3534e3533->enter($__internal_a95e39ca7f5e8c7408da5533bcecfb878cc10f4f9f95e1717eda30a3534e3533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac4f8cb9847b91e3b9f07e345a653a6683ba0d40b19f3470526f42f39afeccee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4f8cb9847b91e3b9f07e345a653a6683ba0d40b19f3470526f42f39afeccee->enter($__internal_ac4f8cb9847b91e3b9f07e345a653a6683ba0d40b19f3470526f42f39afeccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac4f8cb9847b91e3b9f07e345a653a6683ba0d40b19f3470526f42f39afeccee->leave($__internal_ac4f8cb9847b91e3b9f07e345a653a6683ba0d40b19f3470526f42f39afeccee_prof);

        
        $__internal_a95e39ca7f5e8c7408da5533bcecfb878cc10f4f9f95e1717eda30a3534e3533->leave($__internal_a95e39ca7f5e8c7408da5533bcecfb878cc10f4f9f95e1717eda30a3534e3533_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4330d79da7c131b51ee5f11c98bf2ef24bedae20b1b23bab4d5a22077528e3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4330d79da7c131b51ee5f11c98bf2ef24bedae20b1b23bab4d5a22077528e3e5->enter($__internal_4330d79da7c131b51ee5f11c98bf2ef24bedae20b1b23bab4d5a22077528e3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2685fc3b71579281a3840ad8429193110148fcad614410b64ec8bcdbc3da4c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2685fc3b71579281a3840ad8429193110148fcad614410b64ec8bcdbc3da4c2c->enter($__internal_2685fc3b71579281a3840ad8429193110148fcad614410b64ec8bcdbc3da4c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2685fc3b71579281a3840ad8429193110148fcad614410b64ec8bcdbc3da4c2c->leave($__internal_2685fc3b71579281a3840ad8429193110148fcad614410b64ec8bcdbc3da4c2c_prof);

        
        $__internal_4330d79da7c131b51ee5f11c98bf2ef24bedae20b1b23bab4d5a22077528e3e5->leave($__internal_4330d79da7c131b51ee5f11c98bf2ef24bedae20b1b23bab4d5a22077528e3e5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/admin/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
