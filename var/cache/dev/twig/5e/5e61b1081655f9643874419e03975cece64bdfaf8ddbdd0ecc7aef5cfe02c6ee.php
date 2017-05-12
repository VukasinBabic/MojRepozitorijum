<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_20c778684597340d81efbe6e3d0cc641678e16d9aff57f996dd76b74145f24ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_eda29d56873a861a1e0ea656a9f017219587c40d07541e5a3ee10132cdb00fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda29d56873a861a1e0ea656a9f017219587c40d07541e5a3ee10132cdb00fa0->enter($__internal_eda29d56873a861a1e0ea656a9f017219587c40d07541e5a3ee10132cdb00fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eed32219e4ce605304c5a73dbb9fb8803478e0760d1dd564b1d53829c946b395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed32219e4ce605304c5a73dbb9fb8803478e0760d1dd564b1d53829c946b395->enter($__internal_eed32219e4ce605304c5a73dbb9fb8803478e0760d1dd564b1d53829c946b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eda29d56873a861a1e0ea656a9f017219587c40d07541e5a3ee10132cdb00fa0->leave($__internal_eda29d56873a861a1e0ea656a9f017219587c40d07541e5a3ee10132cdb00fa0_prof);

        
        $__internal_eed32219e4ce605304c5a73dbb9fb8803478e0760d1dd564b1d53829c946b395->leave($__internal_eed32219e4ce605304c5a73dbb9fb8803478e0760d1dd564b1d53829c946b395_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10d076db882edfbbf3911290f638bab807c4c71f58cdd3ee1a72af2e3b2d4f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d076db882edfbbf3911290f638bab807c4c71f58cdd3ee1a72af2e3b2d4f66->enter($__internal_10d076db882edfbbf3911290f638bab807c4c71f58cdd3ee1a72af2e3b2d4f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c321eb1d73150bac03fb9696861d9bbff911027a89d9a786e2083ad7f3b2253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c321eb1d73150bac03fb9696861d9bbff911027a89d9a786e2083ad7f3b2253b->enter($__internal_c321eb1d73150bac03fb9696861d9bbff911027a89d9a786e2083ad7f3b2253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c321eb1d73150bac03fb9696861d9bbff911027a89d9a786e2083ad7f3b2253b->leave($__internal_c321eb1d73150bac03fb9696861d9bbff911027a89d9a786e2083ad7f3b2253b_prof);

        
        $__internal_10d076db882edfbbf3911290f638bab807c4c71f58cdd3ee1a72af2e3b2d4f66->leave($__internal_10d076db882edfbbf3911290f638bab807c4c71f58cdd3ee1a72af2e3b2d4f66_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73b97265d8f3d6200f21c8cbcdc244c129c3bcffcb33d32695f0c59382af18af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b97265d8f3d6200f21c8cbcdc244c129c3bcffcb33d32695f0c59382af18af->enter($__internal_73b97265d8f3d6200f21c8cbcdc244c129c3bcffcb33d32695f0c59382af18af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa5722d65017a645a00202531a009feb8ae26bc652c8f6786a203270ed7d3c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5722d65017a645a00202531a009feb8ae26bc652c8f6786a203270ed7d3c92->enter($__internal_aa5722d65017a645a00202531a009feb8ae26bc652c8f6786a203270ed7d3c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aa5722d65017a645a00202531a009feb8ae26bc652c8f6786a203270ed7d3c92->leave($__internal_aa5722d65017a645a00202531a009feb8ae26bc652c8f6786a203270ed7d3c92_prof);

        
        $__internal_73b97265d8f3d6200f21c8cbcdc244c129c3bcffcb33d32695f0c59382af18af->leave($__internal_73b97265d8f3d6200f21c8cbcdc244c129c3bcffcb33d32695f0c59382af18af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0f1fc50cab0e83834c22145106d1af76c180badca6ef911c5d9f0dc2f61afbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f1fc50cab0e83834c22145106d1af76c180badca6ef911c5d9f0dc2f61afbc->enter($__internal_a0f1fc50cab0e83834c22145106d1af76c180badca6ef911c5d9f0dc2f61afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a9725050c0790e08fdcf61c82dab3209e51b787f223e3032d97dc9391a15a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9725050c0790e08fdcf61c82dab3209e51b787f223e3032d97dc9391a15a56->enter($__internal_5a9725050c0790e08fdcf61c82dab3209e51b787f223e3032d97dc9391a15a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5a9725050c0790e08fdcf61c82dab3209e51b787f223e3032d97dc9391a15a56->leave($__internal_5a9725050c0790e08fdcf61c82dab3209e51b787f223e3032d97dc9391a15a56_prof);

        
        $__internal_a0f1fc50cab0e83834c22145106d1af76c180badca6ef911c5d9f0dc2f61afbc->leave($__internal_a0f1fc50cab0e83834c22145106d1af76c180badca6ef911c5d9f0dc2f61afbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/backend2/Desktop/workspace/symfony1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
