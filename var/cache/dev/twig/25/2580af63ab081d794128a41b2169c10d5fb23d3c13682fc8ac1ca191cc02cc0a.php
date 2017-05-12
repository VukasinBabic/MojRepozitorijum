<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_438bc647316442c6827698de0b7a377527201aa58a1843e9d9f2f2e025d404d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94d459e9c691c5d9112298685f1f93204c8255fe94f125d8e94007bfd83b82c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d459e9c691c5d9112298685f1f93204c8255fe94f125d8e94007bfd83b82c7->enter($__internal_94d459e9c691c5d9112298685f1f93204c8255fe94f125d8e94007bfd83b82c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_9b9e5947faf0966e6391107f86c147b33ff2f59982ed321cd7fa937ebeb424dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9e5947faf0966e6391107f86c147b33ff2f59982ed321cd7fa937ebeb424dc->enter($__internal_9b9e5947faf0966e6391107f86c147b33ff2f59982ed321cd7fa937ebeb424dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d459e9c691c5d9112298685f1f93204c8255fe94f125d8e94007bfd83b82c7->leave($__internal_94d459e9c691c5d9112298685f1f93204c8255fe94f125d8e94007bfd83b82c7_prof);

        
        $__internal_9b9e5947faf0966e6391107f86c147b33ff2f59982ed321cd7fa937ebeb424dc->leave($__internal_9b9e5947faf0966e6391107f86c147b33ff2f59982ed321cd7fa937ebeb424dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18c29253bbd4ae7426253af2f255287cc96809e302cdcb8f4eb4a0035b5cd63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c29253bbd4ae7426253af2f255287cc96809e302cdcb8f4eb4a0035b5cd63c->enter($__internal_18c29253bbd4ae7426253af2f255287cc96809e302cdcb8f4eb4a0035b5cd63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5c8150f0d58d97f625b6d607c824258eeab827bd66727de6ecc8933846338f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c8150f0d58d97f625b6d607c824258eeab827bd66727de6ecc8933846338f6->enter($__internal_c5c8150f0d58d97f625b6d607c824258eeab827bd66727de6ecc8933846338f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c5c8150f0d58d97f625b6d607c824258eeab827bd66727de6ecc8933846338f6->leave($__internal_c5c8150f0d58d97f625b6d607c824258eeab827bd66727de6ecc8933846338f6_prof);

        
        $__internal_18c29253bbd4ae7426253af2f255287cc96809e302cdcb8f4eb4a0035b5cd63c->leave($__internal_18c29253bbd4ae7426253af2f255287cc96809e302cdcb8f4eb4a0035b5cd63c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/backend2/Desktop/workspace/symfony1/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
