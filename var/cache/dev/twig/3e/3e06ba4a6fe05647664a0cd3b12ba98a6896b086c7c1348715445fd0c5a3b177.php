<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_020207ced9c21606f0a322d90a71e722ce23573db7b59a23e729aa3383416d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b087ed787dd3867e7fbd7bfddf789869a187fbf2e4532f98a7979acf317d312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b087ed787dd3867e7fbd7bfddf789869a187fbf2e4532f98a7979acf317d312->enter($__internal_8b087ed787dd3867e7fbd7bfddf789869a187fbf2e4532f98a7979acf317d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_183a7b1feaa9d11000f345dc5fdb1f990be67f21ce146a68e86f42206bbf55cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183a7b1feaa9d11000f345dc5fdb1f990be67f21ce146a68e86f42206bbf55cf->enter($__internal_183a7b1feaa9d11000f345dc5fdb1f990be67f21ce146a68e86f42206bbf55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        
        ";
        // line 17
        $this->displayBlock('navigation', $context, $blocks);
        // line 20
        echo "        
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
        
";
        
        $__internal_8b087ed787dd3867e7fbd7bfddf789869a187fbf2e4532f98a7979acf317d312->leave($__internal_8b087ed787dd3867e7fbd7bfddf789869a187fbf2e4532f98a7979acf317d312_prof);

        
        $__internal_183a7b1feaa9d11000f345dc5fdb1f990be67f21ce146a68e86f42206bbf55cf->leave($__internal_183a7b1feaa9d11000f345dc5fdb1f990be67f21ce146a68e86f42206bbf55cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c3519fa9d7dc9ee5cb8860358ef03a04a090263d63531f03cdc34a81e486dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3519fa9d7dc9ee5cb8860358ef03a04a090263d63531f03cdc34a81e486dea->enter($__internal_0c3519fa9d7dc9ee5cb8860358ef03a04a090263d63531f03cdc34a81e486dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25b44fb2fb7876377213f7588a66e7d03c688710eb61d2de73cb7d5a57e5304b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b44fb2fb7876377213f7588a66e7d03c688710eb61d2de73cb7d5a57e5304b->enter($__internal_25b44fb2fb7876377213f7588a66e7d03c688710eb61d2de73cb7d5a57e5304b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeeeeeeeeeeee!";
        
        $__internal_25b44fb2fb7876377213f7588a66e7d03c688710eb61d2de73cb7d5a57e5304b->leave($__internal_25b44fb2fb7876377213f7588a66e7d03c688710eb61d2de73cb7d5a57e5304b_prof);

        
        $__internal_0c3519fa9d7dc9ee5cb8860358ef03a04a090263d63531f03cdc34a81e486dea->leave($__internal_0c3519fa9d7dc9ee5cb8860358ef03a04a090263d63531f03cdc34a81e486dea_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_366abbd4209dcbb845c289f14d095c4ffabc843c01745a996e0e40fa2c809e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366abbd4209dcbb845c289f14d095c4ffabc843c01745a996e0e40fa2c809e2c->enter($__internal_366abbd4209dcbb845c289f14d095c4ffabc843c01745a996e0e40fa2c809e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be5fe4ae4333ba43d8a65daab0e86eb8ede53c62c14ee1d33d9070a22b1f8247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5fe4ae4333ba43d8a65daab0e86eb8ede53c62c14ee1d33d9070a22b1f8247->enter($__internal_be5fe4ae4333ba43d8a65daab0e86eb8ede53c62c14ee1d33d9070a22b1f8247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            
        ";
        
        $__internal_be5fe4ae4333ba43d8a65daab0e86eb8ede53c62c14ee1d33d9070a22b1f8247->leave($__internal_be5fe4ae4333ba43d8a65daab0e86eb8ede53c62c14ee1d33d9070a22b1f8247_prof);

        
        $__internal_366abbd4209dcbb845c289f14d095c4ffabc843c01745a996e0e40fa2c809e2c->leave($__internal_366abbd4209dcbb845c289f14d095c4ffabc843c01745a996e0e40fa2c809e2c_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_51210c9eca7d5eb7d97c1b26dd8cd0870147e5dce1fa035c6b9776cabcd4eacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51210c9eca7d5eb7d97c1b26dd8cd0870147e5dce1fa035c6b9776cabcd4eacc->enter($__internal_51210c9eca7d5eb7d97c1b26dd8cd0870147e5dce1fa035c6b9776cabcd4eacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_447e4e50233454e716a6742dafb30f880956a9f861cb04388325e560f5bfcb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447e4e50233454e716a6742dafb30f880956a9f861cb04388325e560f5bfcb68->enter($__internal_447e4e50233454e716a6742dafb30f880956a9f861cb04388325e560f5bfcb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "            
        ";
        
        $__internal_447e4e50233454e716a6742dafb30f880956a9f861cb04388325e560f5bfcb68->leave($__internal_447e4e50233454e716a6742dafb30f880956a9f861cb04388325e560f5bfcb68_prof);

        
        $__internal_51210c9eca7d5eb7d97c1b26dd8cd0870147e5dce1fa035c6b9776cabcd4eacc->leave($__internal_51210c9eca7d5eb7d97c1b26dd8cd0870147e5dce1fa035c6b9776cabcd4eacc_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e8f997388d7bfc52ea1663afc5efdc5c544af0b4008868864251f0727db03cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f997388d7bfc52ea1663afc5efdc5c544af0b4008868864251f0727db03cb8->enter($__internal_e8f997388d7bfc52ea1663afc5efdc5c544af0b4008868864251f0727db03cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_7c6c7c31a042bdc9a9c9c5350e93e68717071685388c90f91e4548e824fd4e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6c7c31a042bdc9a9c9c5350e93e68717071685388c90f91e4548e824fd4e74->enter($__internal_7c6c7c31a042bdc9a9c9c5350e93e68717071685388c90f91e4548e824fd4e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 18
        echo "            
        ";
        
        $__internal_7c6c7c31a042bdc9a9c9c5350e93e68717071685388c90f91e4548e824fd4e74->leave($__internal_7c6c7c31a042bdc9a9c9c5350e93e68717071685388c90f91e4548e824fd4e74_prof);

        
        $__internal_e8f997388d7bfc52ea1663afc5efdc5c544af0b4008868864251f0727db03cb8->leave($__internal_e8f997388d7bfc52ea1663afc5efdc5c544af0b4008868864251f0727db03cb8_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b67e7fe2ac0435a6b8ab899467ff6f7bd40f6ba0c8ef8ba4a40e5fa83029d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b67e7fe2ac0435a6b8ab899467ff6f7bd40f6ba0c8ef8ba4a40e5fa83029d9->enter($__internal_64b67e7fe2ac0435a6b8ab899467ff6f7bd40f6ba0c8ef8ba4a40e5fa83029d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1404228bd0bb440493240c20271c4c5f4256b5669f4e7a806c61a27ee2217cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1404228bd0bb440493240c20271c4c5f4256b5669f4e7a806c61a27ee2217cf->enter($__internal_e1404228bd0bb440493240c20271c4c5f4256b5669f4e7a806c61a27ee2217cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        ";
        
        $__internal_e1404228bd0bb440493240c20271c4c5f4256b5669f4e7a806c61a27ee2217cf->leave($__internal_e1404228bd0bb440493240c20271c4c5f4256b5669f4e7a806c61a27ee2217cf_prof);

        
        $__internal_64b67e7fe2ac0435a6b8ab899467ff6f7bd40f6ba0c8ef8ba4a40e5fa83029d9->leave($__internal_64b67e7fe2ac0435a6b8ab899467ff6f7bd40f6ba0c8ef8ba4a40e5fa83029d9_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95b7ea86e605696537888c3b76ee62e621915801579530bec8250c6f9e08d852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b7ea86e605696537888c3b76ee62e621915801579530bec8250c6f9e08d852->enter($__internal_95b7ea86e605696537888c3b76ee62e621915801579530bec8250c6f9e08d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fca2c80650e77b0ba6d16a1e3e4e4e2a19d0802bac980063491694567f738358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca2c80650e77b0ba6d16a1e3e4e4e2a19d0802bac980063491694567f738358->enter($__internal_fca2c80650e77b0ba6d16a1e3e4e4e2a19d0802bac980063491694567f738358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_fca2c80650e77b0ba6d16a1e3e4e4e2a19d0802bac980063491694567f738358->leave($__internal_fca2c80650e77b0ba6d16a1e3e4e4e2a19d0802bac980063491694567f738358_prof);

        
        $__internal_95b7ea86e605696537888c3b76ee62e621915801579530bec8250c6f9e08d852->leave($__internal_95b7ea86e605696537888c3b76ee62e621915801579530bec8250c6f9e08d852_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfa529f51b9547fabe42675260cef3d74f1a9d04e35234f421e019581d519a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa529f51b9547fabe42675260cef3d74f1a9d04e35234f421e019581d519a13->enter($__internal_cfa529f51b9547fabe42675260cef3d74f1a9d04e35234f421e019581d519a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1b325ad48ae78628dd7436b09b53b0320f7401f0bee7a8cc80e753fe4747df28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b325ad48ae78628dd7436b09b53b0320f7401f0bee7a8cc80e753fe4747df28->enter($__internal_1b325ad48ae78628dd7436b09b53b0320f7401f0bee7a8cc80e753fe4747df28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1b325ad48ae78628dd7436b09b53b0320f7401f0bee7a8cc80e753fe4747df28->leave($__internal_1b325ad48ae78628dd7436b09b53b0320f7401f0bee7a8cc80e753fe4747df28_prof);

        
        $__internal_cfa529f51b9547fabe42675260cef3d74f1a9d04e35234f421e019581d519a13->leave($__internal_cfa529f51b9547fabe42675260cef3d74f1a9d04e35234f421e019581d519a13_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 26,  189 => 23,  180 => 22,  170 => 24,  167 => 22,  158 => 21,  147 => 18,  138 => 17,  127 => 14,  118 => 13,  107 => 8,  98 => 7,  80 => 5,  67 => 27,  65 => 26,  62 => 25,  60 => 21,  57 => 20,  55 => 17,  52 => 16,  50 => 13,  45 => 10,  43 => 7,  38 => 5,  32 => 1,);
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
        <title>{% block title %}Welcomeeeeeeeeeeee!{% endblock %}</title>
        
        {% block stylesheets %}
            
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
    </head>
    <body>
        {% block header %}
            
        {% endblock %}
        
        {% block navigation %}
            
        {% endblock %}
        
        {% block body %}
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        {% endblock %}
        
        {% block javascripts %}{% endblock %}
    </body>
</html>
        
", "@FOSUser/layout.html.twig", "/Users/backend2/Desktop/workspace/symfony1/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
