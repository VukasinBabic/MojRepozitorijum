<?php

/* base.html.twig */
class __TwigTemplate_ca371b499a1b84f7d4f609e17b97cca4d5abe5493791f2f600ac1b67aee903e4 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7ca3729de43b699c0ed581e2a0f1e4ccf2ec015ff70715446ab1bf353ff9ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ca3729de43b699c0ed581e2a0f1e4ccf2ec015ff70715446ab1bf353ff9ec7->enter($__internal_c7ca3729de43b699c0ed581e2a0f1e4ccf2ec015ff70715446ab1bf353ff9ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9f47fcbf2fb285c36e0a5e72ec6c32ded25a627ce7d35961b121312dab851a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f47fcbf2fb285c36e0a5e72ec6c32ded25a627ce7d35961b121312dab851a2->enter($__internal_a9f47fcbf2fb285c36e0a5e72ec6c32ded25a627ce7d35961b121312dab851a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "        
        ";
        // line 38
        $this->displayBlock('navigation', $context, $blocks);
        // line 70
        echo "        
        <main>
            <div class=\"container\">
                ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "            </div>
        </main>
        
        <footer>
            <div class=\"container\">
                <p> Copyright &copy; Cubes School , Backend Course</p>
                <a href=\"#top\"><span class=\"fa fa-chevron-circle-up\"></span></a>
            </div>
            ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "        </footer>
    </body>
</html>
";
        
        $__internal_c7ca3729de43b699c0ed581e2a0f1e4ccf2ec015ff70715446ab1bf353ff9ec7->leave($__internal_c7ca3729de43b699c0ed581e2a0f1e4ccf2ec015ff70715446ab1bf353ff9ec7_prof);

        
        $__internal_a9f47fcbf2fb285c36e0a5e72ec6c32ded25a627ce7d35961b121312dab851a2->leave($__internal_a9f47fcbf2fb285c36e0a5e72ec6c32ded25a627ce7d35961b121312dab851a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4c60eb1e4d5d927568dfb962da9c5f32610e856f896ad5d8fb269119d305467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c60eb1e4d5d927568dfb962da9c5f32610e856f896ad5d8fb269119d305467->enter($__internal_c4c60eb1e4d5d927568dfb962da9c5f32610e856f896ad5d8fb269119d305467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3ad5d8cf410c8de260820a3ab2d8ccdad9c9857b597b15d767b49044f35f3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ad5d8cf410c8de260820a3ab2d8ccdad9c9857b597b15d767b49044f35f3eb->enter($__internal_a3ad5d8cf410c8de260820a3ab2d8ccdad9c9857b597b15d767b49044f35f3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3ad5d8cf410c8de260820a3ab2d8ccdad9c9857b597b15d767b49044f35f3eb->leave($__internal_a3ad5d8cf410c8de260820a3ab2d8ccdad9c9857b597b15d767b49044f35f3eb_prof);

        
        $__internal_c4c60eb1e4d5d927568dfb962da9c5f32610e856f896ad5d8fb269119d305467->leave($__internal_c4c60eb1e4d5d927568dfb962da9c5f32610e856f896ad5d8fb269119d305467_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56de5999f5dcbfac6089c7d9cd2282b9cdc92bd55901c060ec5623ef0249ce24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56de5999f5dcbfac6089c7d9cd2282b9cdc92bd55901c060ec5623ef0249ce24->enter($__internal_56de5999f5dcbfac6089c7d9cd2282b9cdc92bd55901c060ec5623ef0249ce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_910a4d5b80ccc3c77c3dfaa24518ad8b6dc6771470183dd2b9d2d6daeb698bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910a4d5b80ccc3c77c3dfaa24518ad8b6dc6771470183dd2b9d2d6daeb698bf9->enter($__internal_910a4d5b80ccc3c77c3dfaa24518ad8b6dc6771470183dd2b9d2d6daeb698bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
            ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4fe151e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4fe151e_part_1_bootstrap.min_1.css");
            // line 12
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
            // asset "4fe151e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4fe151e_part_1_responsive_2.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
            // asset "4fe151e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4fe151e_part_1_style_3.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
        } else {
            // asset "4fe151e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4fe151e.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Leckerli+One|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">
        ";
        
        $__internal_910a4d5b80ccc3c77c3dfaa24518ad8b6dc6771470183dd2b9d2d6daeb698bf9->leave($__internal_910a4d5b80ccc3c77c3dfaa24518ad8b6dc6771470183dd2b9d2d6daeb698bf9_prof);

        
        $__internal_56de5999f5dcbfac6089c7d9cd2282b9cdc92bd55901c060ec5623ef0249ce24->leave($__internal_56de5999f5dcbfac6089c7d9cd2282b9cdc92bd55901c060ec5623ef0249ce24_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_82812101814d5e1cecb8bdc54326d7339d822912847a5b9d5d2152ed7d618f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82812101814d5e1cecb8bdc54326d7339d822912847a5b9d5d2152ed7d618f38->enter($__internal_82812101814d5e1cecb8bdc54326d7339d822912847a5b9d5d2152ed7d618f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7d4463580a045f787c224ab0ed40dc1ac64ae1f811c93172641a297ec6a98903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4463580a045f787c224ab0ed40dc1ac64ae1f811c93172641a297ec6a98903->enter($__internal_7d4463580a045f787c224ab0ed40dc1ac64ae1f811c93172641a297ec6a98903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "            <header>
                <div class=\"header-top text-center\">
                    <div class=\"container\">
                        <ul class=\"sign-in list-inline\">
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">Register</a></li>
                        </ul>
                        <div class=\"social\">
                            <a href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-linkedin\"></span></a>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_7d4463580a045f787c224ab0ed40dc1ac64ae1f811c93172641a297ec6a98903->leave($__internal_7d4463580a045f787c224ab0ed40dc1ac64ae1f811c93172641a297ec6a98903_prof);

        
        $__internal_82812101814d5e1cecb8bdc54326d7339d822912847a5b9d5d2152ed7d618f38->leave($__internal_82812101814d5e1cecb8bdc54326d7339d822912847a5b9d5d2152ed7d618f38_prof);

    }

    // line 38
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a3263378962c2d6334806b63be8ec37e6128107b6d2d24da3b075f2c3cc52e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3263378962c2d6334806b63be8ec37e6128107b6d2d24da3b075f2c3cc52e2f->enter($__internal_a3263378962c2d6334806b63be8ec37e6128107b6d2d24da3b075f2c3cc52e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_49c74db34c8b3f6c7e4813dfeebdd4e7195147c1ca5fe370ad4e526f346f7b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c74db34c8b3f6c7e4813dfeebdd4e7195147c1ca5fe370ad4e526f346f7b37->enter($__internal_49c74db34c8b3f6c7e4813dfeebdd4e7195147c1ca5fe370ad4e526f346f7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 39
        echo "            <nav class=\"navbar navbar-default text-uppercase\" style=\"background-color: #e1e1e1;\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">
                            ";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9aaaf5d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9aaaf5d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9aaaf5d_logo_1.png");
            // line 51
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"WEB SCHOOL\" class=\"img-responsive\">
                            ";
        } else {
            // asset "9aaaf5d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9aaaf5d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9aaaf5d.png");
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"WEB SCHOOL\" class=\"img-responsive\">
                            ";
        }
        unset($context["asset_url"]);
        // line 53
        echo "                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-menu\">
                        <ul class=\"nav navbar-nav navbar-right text-center\">
                            <li><a class=\"active\" href=\"#\">home</a></li>
                            <li><a href=\"#\">about</a></li>
                            <li><a href=\"#\">services</a></li>
                            <li><a href=\"#\">portfolio</a></li>
                            <li><a href=\"#\">tim</a></li>
                            <li><a href=\"#\">blog</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        ";
        
        $__internal_49c74db34c8b3f6c7e4813dfeebdd4e7195147c1ca5fe370ad4e526f346f7b37->leave($__internal_49c74db34c8b3f6c7e4813dfeebdd4e7195147c1ca5fe370ad4e526f346f7b37_prof);

        
        $__internal_a3263378962c2d6334806b63be8ec37e6128107b6d2d24da3b075f2c3cc52e2f->leave($__internal_a3263378962c2d6334806b63be8ec37e6128107b6d2d24da3b075f2c3cc52e2f_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d682780a2129f988248044bf0e83609b6ffb67e69813eb22efdddda0420fde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d682780a2129f988248044bf0e83609b6ffb67e69813eb22efdddda0420fde8->enter($__internal_4d682780a2129f988248044bf0e83609b6ffb67e69813eb22efdddda0420fde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_800aa22acc5299170ab1a0da580d8f04d5e5c8049e902be55d14d7a052898c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800aa22acc5299170ab1a0da580d8f04d5e5c8049e902be55d14d7a052898c36->enter($__internal_800aa22acc5299170ab1a0da580d8f04d5e5c8049e902be55d14d7a052898c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "
                ";
        
        $__internal_800aa22acc5299170ab1a0da580d8f04d5e5c8049e902be55d14d7a052898c36->leave($__internal_800aa22acc5299170ab1a0da580d8f04d5e5c8049e902be55d14d7a052898c36_prof);

        
        $__internal_4d682780a2129f988248044bf0e83609b6ffb67e69813eb22efdddda0420fde8->leave($__internal_4d682780a2129f988248044bf0e83609b6ffb67e69813eb22efdddda0420fde8_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b933e555337208e19486aab725dfbd046ed3dbd52447cb745d69da3754eed60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b933e555337208e19486aab725dfbd046ed3dbd52447cb745d69da3754eed60->enter($__internal_8b933e555337208e19486aab725dfbd046ed3dbd52447cb745d69da3754eed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e927739dd16f0665c6a48990f02257250e16faab75dc3e5b3ccf493ab43a78bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e927739dd16f0665c6a48990f02257250e16faab75dc3e5b3ccf493ab43a78bd->enter($__internal_e927739dd16f0665c6a48990f02257250e16faab75dc3e5b3ccf493ab43a78bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bb54fd1_part_1_bootstrap.min_1.js");
            // line 86
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                ";
            // asset "bb54fd1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb54fd1_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bb54fd1_part_1_main_2.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                ";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb54fd1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                ";
        }
        unset($context["asset_url"]);
        // line 88
        echo "                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
            ";
        
        $__internal_e927739dd16f0665c6a48990f02257250e16faab75dc3e5b3ccf493ab43a78bd->leave($__internal_e927739dd16f0665c6a48990f02257250e16faab75dc3e5b3ccf493ab43a78bd_prof);

        
        $__internal_8b933e555337208e19486aab725dfbd046ed3dbd52447cb745d69da3754eed60->leave($__internal_8b933e555337208e19486aab725dfbd046ed3dbd52447cb745d69da3754eed60_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 88,  298 => 86,  293 => 85,  284 => 84,  273 => 74,  264 => 73,  238 => 53,  224 => 51,  220 => 50,  207 => 39,  198 => 38,  173 => 21,  164 => 20,  152 => 14,  126 => 12,  122 => 11,  119 => 10,  110 => 9,  92 => 7,  79 => 91,  77 => 84,  67 => 76,  65 => 73,  60 => 70,  58 => 38,  55 => 37,  53 => 20,  46 => 17,  44 => 9,  39 => 7,  31 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        
        {% block stylesheets %}
            <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
            {% stylesheets '@AppBundle/Resources/public/css/*' %}
                <link href=\"{{ asset_url }}\" rel=\"stylesheet\">
            {% endstylesheets %}
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Leckerli+One|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}
            <header>
                <div class=\"header-top text-center\">
                    <div class=\"container\">
                        <ul class=\"sign-in list-inline\">
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">Register</a></li>
                        </ul>
                        <div class=\"social\">
                            <a href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                            <a href=\"#\"><span class=\"fa fa-linkedin\"></span></a>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}
        
        {% block navigation %}
            <nav class=\"navbar navbar-default text-uppercase\" style=\"background-color: #e1e1e1;\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">
                            {% image '@AppBundle/Resources/public/img/logo.png' %}
                            <img src=\"{{ asset_url }}\" alt=\"WEB SCHOOL\" class=\"img-responsive\">
                            {% endimage %}
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-menu\">
                        <ul class=\"nav navbar-nav navbar-right text-center\">
                            <li><a class=\"active\" href=\"#\">home</a></li>
                            <li><a href=\"#\">about</a></li>
                            <li><a href=\"#\">services</a></li>
                            <li><a href=\"#\">portfolio</a></li>
                            <li><a href=\"#\">tim</a></li>
                            <li><a href=\"#\">blog</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        {% endblock %}
        
        <main>
            <div class=\"container\">
                {% block body %}

                {% endblock %}
            </div>
        </main>
        
        <footer>
            <div class=\"container\">
                <p> Copyright &copy; Cubes School , Backend Course</p>
                <a href=\"#top\"><span class=\"fa fa-chevron-circle-up\"></span></a>
            </div>
            {% block javascripts %}
                {% javascripts '@AppBundle/Resources/public/js/*' %}
                    <script src=\"{{ asset_url }}\"></script>
                {% endjavascripts %}
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
            {% endblock %}
        </footer>
    </body>
</html>
", "base.html.twig", "/Users/backend2/Desktop/workspace/symfony1/app/Resources/views/base.html.twig");
    }
}
