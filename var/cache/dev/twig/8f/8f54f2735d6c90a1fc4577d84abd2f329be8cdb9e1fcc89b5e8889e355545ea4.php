<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83eb81f7ff1dd3e6f7bdef4ec9f81cc8dc9b9a8b0d317eaf7ec76b0eba13708a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83eb81f7ff1dd3e6f7bdef4ec9f81cc8dc9b9a8b0d317eaf7ec76b0eba13708a->enter($__internal_83eb81f7ff1dd3e6f7bdef4ec9f81cc8dc9b9a8b0d317eaf7ec76b0eba13708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_25e07e47bfe3e4169960c201e898b3fffb7ac359f44744462cd4f9ea37c1a8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e07e47bfe3e4169960c201e898b3fffb7ac359f44744462cd4f9ea37c1a8c6->enter($__internal_25e07e47bfe3e4169960c201e898b3fffb7ac359f44744462cd4f9ea37c1a8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation");
        echo "\"\">Reservations\"</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_83eb81f7ff1dd3e6f7bdef4ec9f81cc8dc9b9a8b0d317eaf7ec76b0eba13708a->leave($__internal_83eb81f7ff1dd3e6f7bdef4ec9f81cc8dc9b9a8b0d317eaf7ec76b0eba13708a_prof);

        
        $__internal_25e07e47bfe3e4169960c201e898b3fffb7ac359f44744462cd4f9ea37c1a8c6->leave($__internal_25e07e47bfe3e4169960c201e898b3fffb7ac359f44744462cd4f9ea37c1a8c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75f38c7c1ff72559755583d8cb934ceaddb3fec9cd809f11371a23a053482ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f38c7c1ff72559755583d8cb934ceaddb3fec9cd809f11371a23a053482ea9->enter($__internal_75f38c7c1ff72559755583d8cb934ceaddb3fec9cd809f11371a23a053482ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9dc4045d57bda359eb7a74f2e9d2e8c3b2d7bafa516872c9f3fd2ecf2e50e8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc4045d57bda359eb7a74f2e9d2e8c3b2d7bafa516872c9f3fd2ecf2e50e8b8->enter($__internal_9dc4045d57bda359eb7a74f2e9d2e8c3b2d7bafa516872c9f3fd2ecf2e50e8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_9dc4045d57bda359eb7a74f2e9d2e8c3b2d7bafa516872c9f3fd2ecf2e50e8b8->leave($__internal_9dc4045d57bda359eb7a74f2e9d2e8c3b2d7bafa516872c9f3fd2ecf2e50e8b8_prof);

        
        $__internal_75f38c7c1ff72559755583d8cb934ceaddb3fec9cd809f11371a23a053482ea9->leave($__internal_75f38c7c1ff72559755583d8cb934ceaddb3fec9cd809f11371a23a053482ea9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bbfd7cb3e541629ab508605550ea0d82b7e022f086c29e201eea7e7636a2db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbfd7cb3e541629ab508605550ea0d82b7e022f086c29e201eea7e7636a2db9->enter($__internal_5bbfd7cb3e541629ab508605550ea0d82b7e022f086c29e201eea7e7636a2db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_324e174cb5e41f27c5c7eab7f9633d88edb01fc6640206cd3eba329214411ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324e174cb5e41f27c5c7eab7f9633d88edb01fc6640206cd3eba329214411ebd->enter($__internal_324e174cb5e41f27c5c7eab7f9633d88edb01fc6640206cd3eba329214411ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_324e174cb5e41f27c5c7eab7f9633d88edb01fc6640206cd3eba329214411ebd->leave($__internal_324e174cb5e41f27c5c7eab7f9633d88edb01fc6640206cd3eba329214411ebd_prof);

        
        $__internal_5bbfd7cb3e541629ab508605550ea0d82b7e022f086c29e201eea7e7636a2db9->leave($__internal_5bbfd7cb3e541629ab508605550ea0d82b7e022f086c29e201eea7e7636a2db9_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_a93a93543834fdce31eb63580864289ec118261d673382b33335eb3e3918a921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93a93543834fdce31eb63580864289ec118261d673382b33335eb3e3918a921->enter($__internal_a93a93543834fdce31eb63580864289ec118261d673382b33335eb3e3918a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d300c750bb8241acd8f188d1e3579f4abbf933f202f29f95b863b8e3f4fa7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d300c750bb8241acd8f188d1e3579f4abbf933f202f29f95b863b8e3f4fa7f9->enter($__internal_8d300c750bb8241acd8f188d1e3579f4abbf933f202f29f95b863b8e3f4fa7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d300c750bb8241acd8f188d1e3579f4abbf933f202f29f95b863b8e3f4fa7f9->leave($__internal_8d300c750bb8241acd8f188d1e3579f4abbf933f202f29f95b863b8e3f4fa7f9_prof);

        
        $__internal_a93a93543834fdce31eb63580864289ec118261d673382b33335eb3e3918a921->leave($__internal_a93a93543834fdce31eb63580864289ec118261d673382b33335eb3e3918a921_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e29956d8fc6f8680237502d9716a2c2d9f7adba2719158ca3c17fcfd3ad9faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e29956d8fc6f8680237502d9716a2c2d9f7adba2719158ca3c17fcfd3ad9faf->enter($__internal_4e29956d8fc6f8680237502d9716a2c2d9f7adba2719158ca3c17fcfd3ad9faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2039558e042ce1d1dd9b553b0666a970c8d2f5bb0636e81f5c46d35f7cf9bccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2039558e042ce1d1dd9b553b0666a970c8d2f5bb0636e81f5c46d35f7cf9bccc->enter($__internal_2039558e042ce1d1dd9b553b0666a970c8d2f5bb0636e81f5c46d35f7cf9bccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2039558e042ce1d1dd9b553b0666a970c8d2f5bb0636e81f5c46d35f7cf9bccc->leave($__internal_2039558e042ce1d1dd9b553b0666a970c8d2f5bb0636e81f5c46d35f7cf9bccc_prof);

        
        $__internal_4e29956d8fc6f8680237502d9716a2c2d9f7adba2719158ca3c17fcfd3ad9faf->leave($__internal_4e29956d8fc6f8680237502d9716a2c2d9f7adba2719158ca3c17fcfd3ad9faf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path(\"home\") }}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\") }}\">Clients</a></li>
            <li><a href=\"\"{{ path(\"reservation\") }}\"\">Reservations\"</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/base.html.twig");
    }
}
