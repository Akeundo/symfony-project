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
        $__internal_ed8416f3bafe4c43a3a3abd0729ba67b3b8a7e783fd35923f4b98836dc99f05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8416f3bafe4c43a3a3abd0729ba67b3b8a7e783fd35923f4b98836dc99f05a->enter($__internal_ed8416f3bafe4c43a3a3abd0729ba67b3b8a7e783fd35923f4b98836dc99f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_77ebd9ba7368ac9a3cca22731b3d499af7c937c0f3c9771e7153b59155fbceb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ebd9ba7368ac9a3cca22731b3d499af7c937c0f3c9771e7153b59155fbceb9->enter($__internal_77ebd9ba7368ac9a3cca22731b3d499af7c937c0f3c9771e7153b59155fbceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8416f3bafe4c43a3a3abd0729ba67b3b8a7e783fd35923f4b98836dc99f05a->leave($__internal_ed8416f3bafe4c43a3a3abd0729ba67b3b8a7e783fd35923f4b98836dc99f05a_prof);

        
        $__internal_77ebd9ba7368ac9a3cca22731b3d499af7c937c0f3c9771e7153b59155fbceb9->leave($__internal_77ebd9ba7368ac9a3cca22731b3d499af7c937c0f3c9771e7153b59155fbceb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5f34c01002e9cec94fcae38bf7d066076a84269c6ae01a647d959914a3b766a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f34c01002e9cec94fcae38bf7d066076a84269c6ae01a647d959914a3b766a->enter($__internal_a5f34c01002e9cec94fcae38bf7d066076a84269c6ae01a647d959914a3b766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f6b8d94959123a93f9e1b34d1c71fc005e84a7cdcbfce1424bddad2d7f36624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b8d94959123a93f9e1b34d1c71fc005e84a7cdcbfce1424bddad2d7f36624->enter($__internal_9f6b8d94959123a93f9e1b34d1c71fc005e84a7cdcbfce1424bddad2d7f36624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => 1));
        echo "\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_9f6b8d94959123a93f9e1b34d1c71fc005e84a7cdcbfce1424bddad2d7f36624->leave($__internal_9f6b8d94959123a93f9e1b34d1c71fc005e84a7cdcbfce1424bddad2d7f36624_prof);

        
        $__internal_a5f34c01002e9cec94fcae38bf7d066076a84269c6ae01a647d959914a3b766a->leave($__internal_a5f34c01002e9cec94fcae38bf7d066076a84269c6ae01a647d959914a3b766a_prof);

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
        return array (  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client':1 }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/admin/Documents/GitHub/symfony-project/app/Resources/views/clients/index.html.twig");
    }
}
