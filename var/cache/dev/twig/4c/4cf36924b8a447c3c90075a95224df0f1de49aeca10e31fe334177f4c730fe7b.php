<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_0bb7beb516a8ea9aa8e1cd088e18258ae10423377f7bf5159e0674728e76e0b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb7beb516a8ea9aa8e1cd088e18258ae10423377f7bf5159e0674728e76e0b9->enter($__internal_0bb7beb516a8ea9aa8e1cd088e18258ae10423377f7bf5159e0674728e76e0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_4ef7fce26d38cbff2aef0856048396df4f301b9761e51540abedc8b08c381b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef7fce26d38cbff2aef0856048396df4f301b9761e51540abedc8b08c381b67->enter($__internal_4ef7fce26d38cbff2aef0856048396df4f301b9761e51540abedc8b08c381b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bb7beb516a8ea9aa8e1cd088e18258ae10423377f7bf5159e0674728e76e0b9->leave($__internal_0bb7beb516a8ea9aa8e1cd088e18258ae10423377f7bf5159e0674728e76e0b9_prof);

        
        $__internal_4ef7fce26d38cbff2aef0856048396df4f301b9761e51540abedc8b08c381b67->leave($__internal_4ef7fce26d38cbff2aef0856048396df4f301b9761e51540abedc8b08c381b67_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5436ce317fdfbf4c18f08a7335a89a02de71d3c92aefcb7d505982a1cffbb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5436ce317fdfbf4c18f08a7335a89a02de71d3c92aefcb7d505982a1cffbb00->enter($__internal_d5436ce317fdfbf4c18f08a7335a89a02de71d3c92aefcb7d505982a1cffbb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0e16547196511e9547b22fd23bf459cb409c770ae777a950b2dcdb0544aca59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e16547196511e9547b22fd23bf459cb409c770ae777a950b2dcdb0544aca59->enter($__internal_f0e16547196511e9547b22fd23bf459cb409c770ae777a950b2dcdb0544aca59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_f0e16547196511e9547b22fd23bf459cb409c770ae777a950b2dcdb0544aca59->leave($__internal_f0e16547196511e9547b22fd23bf459cb409c770ae777a950b2dcdb0544aca59_prof);

        
        $__internal_d5436ce317fdfbf4c18f08a7335a89a02de71d3c92aefcb7d505982a1cffbb00->leave($__internal_d5436ce317fdfbf4c18f08a7335a89a02de71d3c92aefcb7d505982a1cffbb00_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/reservations/index.html.twig");
    }
}
