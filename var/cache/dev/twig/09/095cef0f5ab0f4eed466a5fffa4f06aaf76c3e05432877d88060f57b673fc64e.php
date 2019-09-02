<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_e0d96037954d1382905600b834076b2da7a314440199ab7e5425657a333455c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d96037954d1382905600b834076b2da7a314440199ab7e5425657a333455c9->enter($__internal_e0d96037954d1382905600b834076b2da7a314440199ab7e5425657a333455c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_40d1a7a2a59cc85c725498ba5b8019e0fdf99620b54931862d06e7a906a5315f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d1a7a2a59cc85c725498ba5b8019e0fdf99620b54931862d06e7a906a5315f->enter($__internal_40d1a7a2a59cc85c725498ba5b8019e0fdf99620b54931862d06e7a906a5315f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d96037954d1382905600b834076b2da7a314440199ab7e5425657a333455c9->leave($__internal_e0d96037954d1382905600b834076b2da7a314440199ab7e5425657a333455c9_prof);

        
        $__internal_40d1a7a2a59cc85c725498ba5b8019e0fdf99620b54931862d06e7a906a5315f->leave($__internal_40d1a7a2a59cc85c725498ba5b8019e0fdf99620b54931862d06e7a906a5315f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df43b4a8088153c87e81ad5747420aa6b79da97ddc8abcd8751678e273699476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df43b4a8088153c87e81ad5747420aa6b79da97ddc8abcd8751678e273699476->enter($__internal_df43b4a8088153c87e81ad5747420aa6b79da97ddc8abcd8751678e273699476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f283f4fcca0a352e696b717c5d9b10b201f53d8a7d1a41e07a14b058c1eef0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f283f4fcca0a352e696b717c5d9b10b201f53d8a7d1a41e07a14b058c1eef0f->enter($__internal_5f283f4fcca0a352e696b717c5d9b10b201f53d8a7d1a41e07a14b058c1eef0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_5f283f4fcca0a352e696b717c5d9b10b201f53d8a7d1a41e07a14b058c1eef0f->leave($__internal_5f283f4fcca0a352e696b717c5d9b10b201f53d8a7d1a41e07a14b058c1eef0f_prof);

        
        $__internal_df43b4a8088153c87e81ad5747420aa6b79da97ddc8abcd8751678e273699476->leave($__internal_df43b4a8088153c87e81ad5747420aa6b79da97ddc8abcd8751678e273699476_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/admin/index.html.twig");
    }
}
