<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_822f0381d3ca48cd6269a6e2336e7605dcdba19066f23e058424ca3859def13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_44f872d89d56a68924cb40e1b7441bf8b87ce517414bd3c51897454176bf67e2 = $this->env->getExtension("native_profiler");
        $__internal_44f872d89d56a68924cb40e1b7441bf8b87ce517414bd3c51897454176bf67e2->enter($__internal_44f872d89d56a68924cb40e1b7441bf8b87ce517414bd3c51897454176bf67e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f872d89d56a68924cb40e1b7441bf8b87ce517414bd3c51897454176bf67e2->leave($__internal_44f872d89d56a68924cb40e1b7441bf8b87ce517414bd3c51897454176bf67e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76ff40f1ad6f69244dc91db74f75fb3021441ddd8fdc35f794c78b8f8afa2d3e = $this->env->getExtension("native_profiler");
        $__internal_76ff40f1ad6f69244dc91db74f75fb3021441ddd8fdc35f794c78b8f8afa2d3e->enter($__internal_76ff40f1ad6f69244dc91db74f75fb3021441ddd8fdc35f794c78b8f8afa2d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_76ff40f1ad6f69244dc91db74f75fb3021441ddd8fdc35f794c78b8f8afa2d3e->leave($__internal_76ff40f1ad6f69244dc91db74f75fb3021441ddd8fdc35f794c78b8f8afa2d3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
