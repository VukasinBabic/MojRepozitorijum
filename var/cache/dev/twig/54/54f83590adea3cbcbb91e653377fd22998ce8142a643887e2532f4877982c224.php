<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_39e4bbf522a1387e253091922e9aa913af61dd235e52029e7ab1483d7fcfcf11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29e0e21f7f2fddff3a7615972da2fc6f5ab7df2f2aac3d1dd2b4c3fd890bba27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e0e21f7f2fddff3a7615972da2fc6f5ab7df2f2aac3d1dd2b4c3fd890bba27->enter($__internal_29e0e21f7f2fddff3a7615972da2fc6f5ab7df2f2aac3d1dd2b4c3fd890bba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_29df8118bba5ca801f93ee23995060c58c268c1f8b21f93a6233802c3df9d25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29df8118bba5ca801f93ee23995060c58c268c1f8b21f93a6233802c3df9d25c->enter($__internal_29df8118bba5ca801f93ee23995060c58c268c1f8b21f93a6233802c3df9d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e0e21f7f2fddff3a7615972da2fc6f5ab7df2f2aac3d1dd2b4c3fd890bba27->leave($__internal_29e0e21f7f2fddff3a7615972da2fc6f5ab7df2f2aac3d1dd2b4c3fd890bba27_prof);

        
        $__internal_29df8118bba5ca801f93ee23995060c58c268c1f8b21f93a6233802c3df9d25c->leave($__internal_29df8118bba5ca801f93ee23995060c58c268c1f8b21f93a6233802c3df9d25c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_333b8d3ada057808dc46f363a48e77bd78d125b1dd313867f5197834c6549336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333b8d3ada057808dc46f363a48e77bd78d125b1dd313867f5197834c6549336->enter($__internal_333b8d3ada057808dc46f363a48e77bd78d125b1dd313867f5197834c6549336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9c300f05a4447c03e7ba9dd7d1585797b6705dd9a55f539270af0ce63eadb6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c300f05a4447c03e7ba9dd7d1585797b6705dd9a55f539270af0ce63eadb6ff->enter($__internal_9c300f05a4447c03e7ba9dd7d1585797b6705dd9a55f539270af0ce63eadb6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c300f05a4447c03e7ba9dd7d1585797b6705dd9a55f539270af0ce63eadb6ff->leave($__internal_9c300f05a4447c03e7ba9dd7d1585797b6705dd9a55f539270af0ce63eadb6ff_prof);

        
        $__internal_333b8d3ada057808dc46f363a48e77bd78d125b1dd313867f5197834c6549336->leave($__internal_333b8d3ada057808dc46f363a48e77bd78d125b1dd313867f5197834c6549336_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bee6374aeabfe0e175ff7b7e0c68f06642543bb8991e5be23d31832c946d75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bee6374aeabfe0e175ff7b7e0c68f06642543bb8991e5be23d31832c946d75e->enter($__internal_3bee6374aeabfe0e175ff7b7e0c68f06642543bb8991e5be23d31832c946d75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aef005f5d97ff147c307e375cce105d86a449e321bac448e297ae5e2ea8f6cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef005f5d97ff147c307e375cce105d86a449e321bac448e297ae5e2ea8f6cc0->enter($__internal_aef005f5d97ff147c307e375cce105d86a449e321bac448e297ae5e2ea8f6cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aef005f5d97ff147c307e375cce105d86a449e321bac448e297ae5e2ea8f6cc0->leave($__internal_aef005f5d97ff147c307e375cce105d86a449e321bac448e297ae5e2ea8f6cc0_prof);

        
        $__internal_3bee6374aeabfe0e175ff7b7e0c68f06642543bb8991e5be23d31832c946d75e->leave($__internal_3bee6374aeabfe0e175ff7b7e0c68f06642543bb8991e5be23d31832c946d75e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8791a58221a331c8e8b79417d96ebec2783f855feb50a435be0b932d591f5905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8791a58221a331c8e8b79417d96ebec2783f855feb50a435be0b932d591f5905->enter($__internal_8791a58221a331c8e8b79417d96ebec2783f855feb50a435be0b932d591f5905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4bedc7feaa8b98b9b456461402a079b87809f1d53bf90ac34dc9c500d82c2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bedc7feaa8b98b9b456461402a079b87809f1d53bf90ac34dc9c500d82c2dd->enter($__internal_c4bedc7feaa8b98b9b456461402a079b87809f1d53bf90ac34dc9c500d82c2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4bedc7feaa8b98b9b456461402a079b87809f1d53bf90ac34dc9c500d82c2dd->leave($__internal_c4bedc7feaa8b98b9b456461402a079b87809f1d53bf90ac34dc9c500d82c2dd_prof);

        
        $__internal_8791a58221a331c8e8b79417d96ebec2783f855feb50a435be0b932d591f5905->leave($__internal_8791a58221a331c8e8b79417d96ebec2783f855feb50a435be0b932d591f5905_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/backend2/Desktop/workspace/symfony1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
