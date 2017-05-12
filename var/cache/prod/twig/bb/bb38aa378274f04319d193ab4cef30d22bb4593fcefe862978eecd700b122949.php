<?php

/* base.html.twig */
class __TwigTemplate_58122479718743633db9d5305230f20357727ed7582cca3ae29d88f29444bc4a extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
            ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4fe151e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/4fe151e_part_1_bootstrap.min_1.css");
            // line 12
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
            // asset "4fe151e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/4fe151e_part_1_responsive_2.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
            // asset "4fe151e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/4fe151e_part_1_style_3.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
        } else {
            // asset "4fe151e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4fe151e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/4fe151e.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
            ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Leckerli+One|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">
        ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
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
    }

    // line 38
    public function block_navigation($context, array $blocks = array())
    {
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9aaaf5d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9aaaf5d_logo_1.png");
            // line 51
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"WEB SCHOOL\" class=\"img-responsive\">
                            ";
        } else {
            // asset "9aaaf5d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9aaaf5d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9aaaf5d.png");
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "
                ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bb54fd1_part_1_bootstrap.min_1.js");
            // line 86
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
                ";
            // asset "bb54fd1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb54fd1_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bb54fd1_part_1_main_2.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
                ";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb54fd1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bb54fd1.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
                ";
        }
        unset($context["asset_url"]);
        // line 88
        echo "                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
            ";
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
        return array (  240 => 88,  220 => 86,  215 => 85,  212 => 84,  207 => 74,  204 => 73,  184 => 53,  170 => 51,  166 => 50,  153 => 39,  150 => 38,  131 => 21,  128 => 20,  122 => 14,  96 => 12,  92 => 11,  89 => 10,  86 => 9,  80 => 7,  73 => 91,  71 => 84,  61 => 76,  59 => 73,  54 => 70,  52 => 38,  49 => 37,  47 => 20,  40 => 17,  38 => 9,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Users/backend2/Desktop/workspace/symfony1/app/Resources/views/base.html.twig");
    }
}
