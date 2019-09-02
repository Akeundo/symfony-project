<?php

/* reservations/book.html.twig */
class __TwigTemplate_64c0cb274f827e5d938cbe7702f25fe23a40ed4a35a04d5324219e193814e3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_332b350d53cdaadc5b854ac384c9920b816fbcdc2a58f2fef009533920b641a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332b350d53cdaadc5b854ac384c9920b816fbcdc2a58f2fef009533920b641a6->enter($__internal_332b350d53cdaadc5b854ac384c9920b816fbcdc2a58f2fef009533920b641a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_b535c3dc41891a90f29e85afae5e92157a9c7b6c88b1821221aa20c0c42ead2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b535c3dc41891a90f29e85afae5e92157a9c7b6c88b1821221aa20c0c42ead2c->enter($__internal_b535c3dc41891a90f29e85afae5e92157a9c7b6c88b1821221aa20c0c42ead2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332b350d53cdaadc5b854ac384c9920b816fbcdc2a58f2fef009533920b641a6->leave($__internal_332b350d53cdaadc5b854ac384c9920b816fbcdc2a58f2fef009533920b641a6_prof);

        
        $__internal_b535c3dc41891a90f29e85afae5e92157a9c7b6c88b1821221aa20c0c42ead2c->leave($__internal_b535c3dc41891a90f29e85afae5e92157a9c7b6c88b1821221aa20c0c42ead2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a208b0e4814b1fbd0e478b24932c7d0df9162770027db8373af0e7ba8015855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a208b0e4814b1fbd0e478b24932c7d0df9162770027db8373af0e7ba8015855->enter($__internal_3a208b0e4814b1fbd0e478b24932c7d0df9162770027db8373af0e7ba8015855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8009037388703050b03786067647009acc2774b9f8aaf2ba98be3fb04aa08658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8009037388703050b03786067647009acc2774b9f8aaf2ba98be3fb04aa08658->enter($__internal_8009037388703050b03786067647009acc2774b9f8aaf2ba98be3fb04aa08658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:";
        // line 8
        echo twig_escape_filter($this->env, ($context["id_client"] ?? $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_8009037388703050b03786067647009acc2774b9f8aaf2ba98be3fb04aa08658->leave($__internal_8009037388703050b03786067647009acc2774b9f8aaf2ba98be3fb04aa08658_prof);

        
        $__internal_3a208b0e4814b1fbd0e478b24932c7d0df9162770027db8373af0e7ba8015855->leave($__internal_3a208b0e4814b1fbd0e478b24932c7d0df9162770027db8373af0e7ba8015855_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:{{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/reservations/book.html.twig");
    }
}
