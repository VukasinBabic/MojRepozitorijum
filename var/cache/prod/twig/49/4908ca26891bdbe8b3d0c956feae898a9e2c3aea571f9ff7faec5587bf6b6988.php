<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_de0abe9dace799d752f5e8046caa7a6f58ef296e219098f10b6ab95734be3698 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcomeeeeeeeeeeee!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            
        ";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "            
        ";
    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        // line 18
        echo "            
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        ";
    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 23
        echo "            ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  111 => 23,  108 => 22,  104 => 24,  101 => 22,  98 => 21,  93 => 18,  90 => 17,  85 => 14,  82 => 13,  77 => 8,  74 => 7,  68 => 5,  61 => 27,  59 => 26,  56 => 25,  54 => 21,  51 => 20,  49 => 17,  46 => 16,  44 => 13,  39 => 10,  37 => 7,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/Users/backend2/Desktop/workspace/symfony1/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
