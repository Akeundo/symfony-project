<?php

/* clients/form.html.twig */
class __TwigTemplate_ce18e47ee04cb7e7ab0432bf867b59c8d6d90ba3d4e79c9d4114516f067d1828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_3e3a8a8c304808507cdef1a89946fd3b20a9c883aa324be424c482ab660f022d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3a8a8c304808507cdef1a89946fd3b20a9c883aa324be424c482ab660f022d->enter($__internal_3e3a8a8c304808507cdef1a89946fd3b20a9c883aa324be424c482ab660f022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_f4699489565fab793132cd5779690f4db71d0a1c38f27a0a06b6c55c7b45dcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4699489565fab793132cd5779690f4db71d0a1c38f27a0a06b6c55c7b45dcb7->enter($__internal_f4699489565fab793132cd5779690f4db71d0a1c38f27a0a06b6c55c7b45dcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3a8a8c304808507cdef1a89946fd3b20a9c883aa324be424c482ab660f022d->leave($__internal_3e3a8a8c304808507cdef1a89946fd3b20a9c883aa324be424c482ab660f022d_prof);

        
        $__internal_f4699489565fab793132cd5779690f4db71d0a1c38f27a0a06b6c55c7b45dcb7->leave($__internal_f4699489565fab793132cd5779690f4db71d0a1c38f27a0a06b6c55c7b45dcb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6048ffa2dbebb65d19a245bb0bbc8dea93a94b5e4db7999c7515635e1ceadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6048ffa2dbebb65d19a245bb0bbc8dea93a94b5e4db7999c7515635e1ceadb->enter($__internal_7b6048ffa2dbebb65d19a245bb0bbc8dea93a94b5e4db7999c7515635e1ceadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7b6b88a5c48744961fd3242e24c8a18cf9c96d2378f8bf56b54b509fbe4ac94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b6b88a5c48744961fd3242e24c8a18cf9c96d2378f8bf56b54b509fbe4ac94->enter($__internal_d7b6b88a5c48744961fd3242e24c8a18cf9c96d2378f8bf56b54b509fbe4ac94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>New Client</h4>
            <form action=\"\" method=\"post\">
                <div class=\"medium-4  columns\">
                    <label>Title</label>
                    <select name=\"form[title]\">
                        <option value=\"mr\">Mr.</option>
                    </select>
                </div>
                <div class=\"medium-4  columns\">
                    <label>Name</label>
                    <input name=\"form[name]\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), "first", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>Last Name</label>
                    <input name=\"form[lastName]\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), "last", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-8  columns\">
                    <label>Address</label>
                    <input name=\"form[address]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "street", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>zip_code</label>
                    <input name=\"form[zipCode]\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "postcode", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>City</label>
                    <input name=\"form[city]\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "city", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>State</label>
                    <input name=\"form[state]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "state", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-12  columns\">
                    <label>Email</label>
                    <input name=\"form[email]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "html", null, true);
        echo "\" type=\"text\"/>
                </div>
                <div class=\"medium-12  columns\">
                    <iframe width=\"1000\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?q=";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "coordinates", array()), "latitude", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "coordinates", array()), "longitude", array()), "html", null, true);
        echo "&hl=es;z=14&amp;output=embed\"></iframe>
                    <br/>
                    <small>
                        <a href=\"https://maps.google.com/maps?q=";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "coordinates", array()), "latitude", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "location", array()), "coordinates", array()), "longitude", array()), "html", null, true);
        echo "&hl=es;z=14&amp;output=embed\" style=\"color:#0000FF;text-align:left\" target=\"_blank\">
                            See map bigger
                        </a>
                    </small>
                </div>

                <div class=\"medium-12  columns\">
                    <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\"/>
                </div>
            </form>
        </div>
    </div>

";
        
        $__internal_d7b6b88a5c48744961fd3242e24c8a18cf9c96d2378f8bf56b54b509fbe4ac94->leave($__internal_d7b6b88a5c48744961fd3242e24c8a18cf9c96d2378f8bf56b54b509fbe4ac94_prof);

        
        $__internal_7b6048ffa2dbebb65d19a245bb0bbc8dea93a94b5e4db7999c7515635e1ceadb->leave($__internal_7b6048ffa2dbebb65d19a245bb0bbc8dea93a94b5e4db7999c7515635e1ceadb_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  112 => 44,  106 => 41,  99 => 37,  92 => 33,  85 => 29,  78 => 25,  71 => 21,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
            <h4>New Client</h4>
            <form action=\"\" method=\"post\">
                <div class=\"medium-4  columns\">
                    <label>Title</label>
                    <select name=\"form[title]\">
                        <option value=\"mr\">Mr.</option>
                    </select>
                </div>
                <div class=\"medium-4  columns\">
                    <label>Name</label>
                    <input name=\"form[name]\" value=\"{{ form.name.first }}\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>Last Name</label>
                    <input name=\"form[lastName]\" value=\"{{ form.name.last }}\" type=\"text\"/>
                </div>
                <div class=\"medium-8  columns\">
                    <label>Address</label>
                    <input name=\"form[address]\" value=\"{{ form.location.street }}\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>zip_code</label>
                    <input name=\"form[zipCode]\" value=\"{{ form.location.postcode }}\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>City</label>
                    <input name=\"form[city]\" value=\"{{ form.location.city }}\" type=\"text\"/>
                </div>
                <div class=\"medium-4  columns\">
                    <label>State</label>
                    <input name=\"form[state]\" value=\"{{ form.location.state }}\" type=\"text\"/>
                </div>
                <div class=\"medium-12  columns\">
                    <label>Email</label>
                    <input name=\"form[email]\" value=\"{{ form.email }}\" type=\"text\"/>
                </div>
                <div class=\"medium-12  columns\">
                    <iframe width=\"1000\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?q={{ form.location.coordinates.latitude }},{{ form.location.coordinates.longitude }}&hl=es;z=14&amp;output=embed\"></iframe>
                    <br/>
                    <small>
                        <a href=\"https://maps.google.com/maps?q={{ form.location.coordinates.latitude }},{{ form.location.coordinates.longitude }}&hl=es;z=14&amp;output=embed\" style=\"color:#0000FF;text-align:left\" target=\"_blank\">
                            See map bigger
                        </a>
                    </small>
                </div>

                <div class=\"medium-12  columns\">
                    <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\"/>
                </div>
            </form>
        </div>
    </div>

{% endblock %}", "clients/form.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/clients/form.html.twig");
    }
}
