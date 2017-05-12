<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_015b6f714eaad4dba6d91fdafc520da10aecea24dbc4bf3a1409c547f8b1a8e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c3a12a263d1235ab9068836465f675933ff203b2bb9906a338b520d9b310b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3a12a263d1235ab9068836465f675933ff203b2bb9906a338b520d9b310b01->enter($__internal_8c3a12a263d1235ab9068836465f675933ff203b2bb9906a338b520d9b310b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_23de321aee0afa87d84c29bdc50012d733f9eea005e629e6fa9b5c94759acd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23de321aee0afa87d84c29bdc50012d733f9eea005e629e6fa9b5c94759acd0b->enter($__internal_23de321aee0afa87d84c29bdc50012d733f9eea005e629e6fa9b5c94759acd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c3a12a263d1235ab9068836465f675933ff203b2bb9906a338b520d9b310b01->leave($__internal_8c3a12a263d1235ab9068836465f675933ff203b2bb9906a338b520d9b310b01_prof);

        
        $__internal_23de321aee0afa87d84c29bdc50012d733f9eea005e629e6fa9b5c94759acd0b->leave($__internal_23de321aee0afa87d84c29bdc50012d733f9eea005e629e6fa9b5c94759acd0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52d7b8507284fcea5c0484b12acad5ef84cfc94af982c7c9286beac0f18a3d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d7b8507284fcea5c0484b12acad5ef84cfc94af982c7c9286beac0f18a3d23->enter($__internal_52d7b8507284fcea5c0484b12acad5ef84cfc94af982c7c9286beac0f18a3d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb075fd785b3a929a8fd498dc5433b236e08f77e1db796286ce716d2c0dbb921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb075fd785b3a929a8fd498dc5433b236e08f77e1db796286ce716d2c0dbb921->enter($__internal_fb075fd785b3a929a8fd498dc5433b236e08f77e1db796286ce716d2c0dbb921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fb075fd785b3a929a8fd498dc5433b236e08f77e1db796286ce716d2c0dbb921->leave($__internal_fb075fd785b3a929a8fd498dc5433b236e08f77e1db796286ce716d2c0dbb921_prof);

        
        $__internal_52d7b8507284fcea5c0484b12acad5ef84cfc94af982c7c9286beac0f18a3d23->leave($__internal_52d7b8507284fcea5c0484b12acad5ef84cfc94af982c7c9286beac0f18a3d23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/backend2/Desktop/workspace/symfony1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
