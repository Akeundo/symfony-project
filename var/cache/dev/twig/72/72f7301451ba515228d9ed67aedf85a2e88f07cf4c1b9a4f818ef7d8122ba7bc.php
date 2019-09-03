<?php

/* clients/index.html.twig */
class __TwigTemplate_01553599b1627482f7dcac53533ad427a13e26fde9cc797f725c5f6906645da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0075678547b96007ed65901817a73efeb7da0cebccca1a990d9eef4dce802f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0075678547b96007ed65901817a73efeb7da0cebccca1a990d9eef4dce802f82->enter($__internal_0075678547b96007ed65901817a73efeb7da0cebccca1a990d9eef4dce802f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_e1cbb0d4ff99980dfa375319a6ba18fe67d11645c65f325cc029e130adf257a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cbb0d4ff99980dfa375319a6ba18fe67d11645c65f325cc029e130adf257a1->enter($__internal_e1cbb0d4ff99980dfa375319a6ba18fe67d11645c65f325cc029e130adf257a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0075678547b96007ed65901817a73efeb7da0cebccca1a990d9eef4dce802f82->leave($__internal_0075678547b96007ed65901817a73efeb7da0cebccca1a990d9eef4dce802f82_prof);

        
        $__internal_e1cbb0d4ff99980dfa375319a6ba18fe67d11645c65f325cc029e130adf257a1->leave($__internal_e1cbb0d4ff99980dfa375319a6ba18fe67d11645c65f325cc029e130adf257a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03c391e056195aede55f84c512b24e98e5e378b9d58696cdfd62103f11b5cd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c391e056195aede55f84c512b24e98e5e378b9d58696cdfd62103f11b5cd92->enter($__internal_03c391e056195aede55f84c512b24e98e5e378b9d58696cdfd62103f11b5cd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30c2f2c0e87536e453f3bf004a11efea1125dd9212cdd400adf0ea3eee2d5d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c2f2c0e87536e453f3bf004a11efea1125dd9212cdd400adf0ea3eee2d5d25->enter($__internal_30c2f2c0e87536e453f3bf004a11efea1125dd9212cdd400adf0ea3eee2d5d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>Clients</h4>
            <div class=\"medium-2  columns\">
                <a class=\"button\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\">ADD NEW CLIENT</a>
            </div>

            <table class=\"stack\">
                <thead>
                    <tr>
                        <th width=\"200\">Name</th>
                        <th width=\"200\">Email</th>
                        <th width=\"200\">Action</th>
                    </tr>
                </thead>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "title", array())), "html", null, true);
            echo ".
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "first", array())), "html", null, true);
            echo "
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "last", array())), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"hollow button\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => $this->getAttribute($context["loop"], "index", array()))), "html", null, true);
            echo "\">EDIT</a>
                            <a class=\"hollow button warning\" href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => "sample"));
            echo "\">BOOK A ROOM</a>
                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_30c2f2c0e87536e453f3bf004a11efea1125dd9212cdd400adf0ea3eee2d5d25->leave($__internal_30c2f2c0e87536e453f3bf004a11efea1125dd9212cdd400adf0ea3eee2d5d25_prof);

        
        $__internal_03c391e056195aede55f84c512b24e98e5e378b9d58696cdfd62103f11b5cd92->leave($__internal_03c391e056195aede55f84c512b24e98e5e378b9d58696cdfd62103f11b5cd92_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  112 => 29,  108 => 28,  103 => 26,  98 => 24,  94 => 23,  90 => 22,  87 => 21,  70 => 20,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>Clients</h4>
            <div class=\"medium-2  columns\">
                <a class=\"button\" href=\"{{ path(\"new_client\") }}\">ADD NEW CLIENT</a>
            </div>

            <table class=\"stack\">
                <thead>
                    <tr>
                        <th width=\"200\">Name</th>
                        <th width=\"200\">Email</th>
                        <th width=\"200\">Action</th>
                    </tr>
                </thead>
                {% for client in clients %}
                    <tr>
                        <td>{{ client.name.title | capitalize }}.
                            {{ client.name.first | capitalize }}
                            {{ client.name.last | capitalize }}
                        </td>
                        <td>{{ client.email }}</td>
                        <td>
                            <a class=\"hollow button\" href=\"{{ path(\"modify_client\", { 'id_client': loop.index } )}}\">EDIT</a>
                            <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': 'sample' }) }}\">BOOK A ROOM</a>
                        </td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>
    </div>
</div>{% endblock %}", "clients/index.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/clients/index.html.twig");
    }
}
