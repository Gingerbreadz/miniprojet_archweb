<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_70db2ba74c15d5690186f3a869c904cfbf434e0651218f26f3fc08d89b8f2b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7accdde262d717531b1511c476a3de613b2043b4ffc01f6211f0e1fe8d237b33 = $this->env->getExtension("native_profiler");
        $__internal_7accdde262d717531b1511c476a3de613b2043b4ffc01f6211f0e1fe8d237b33->enter($__internal_7accdde262d717531b1511c476a3de613b2043b4ffc01f6211f0e1fe8d237b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7accdde262d717531b1511c476a3de613b2043b4ffc01f6211f0e1fe8d237b33->leave($__internal_7accdde262d717531b1511c476a3de613b2043b4ffc01f6211f0e1fe8d237b33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1240781dc14d7023c9040a35cb09b1be5ebe2e9d14cbb0d96754c1d1c1a6d17b = $this->env->getExtension("native_profiler");
        $__internal_1240781dc14d7023c9040a35cb09b1be5ebe2e9d14cbb0d96754c1d1c1a6d17b->enter($__internal_1240781dc14d7023c9040a35cb09b1be5ebe2e9d14cbb0d96754c1d1c1a6d17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1240781dc14d7023c9040a35cb09b1be5ebe2e9d14cbb0d96754c1d1c1a6d17b->leave($__internal_1240781dc14d7023c9040a35cb09b1be5ebe2e9d14cbb0d96754c1d1c1a6d17b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
