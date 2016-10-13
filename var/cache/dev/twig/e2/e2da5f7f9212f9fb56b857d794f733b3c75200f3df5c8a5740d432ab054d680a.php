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
        $__internal_ede759691588cb32d98c9477841ecae0a0ed6bab8bd2b9a6bba2359c31b68469 = $this->env->getExtension("native_profiler");
        $__internal_ede759691588cb32d98c9477841ecae0a0ed6bab8bd2b9a6bba2359c31b68469->enter($__internal_ede759691588cb32d98c9477841ecae0a0ed6bab8bd2b9a6bba2359c31b68469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede759691588cb32d98c9477841ecae0a0ed6bab8bd2b9a6bba2359c31b68469->leave($__internal_ede759691588cb32d98c9477841ecae0a0ed6bab8bd2b9a6bba2359c31b68469_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e88d1c6525dd4d7df6661c30b92fbe4369244ef43d4be54dab34fbd6efaf10e4 = $this->env->getExtension("native_profiler");
        $__internal_e88d1c6525dd4d7df6661c30b92fbe4369244ef43d4be54dab34fbd6efaf10e4->enter($__internal_e88d1c6525dd4d7df6661c30b92fbe4369244ef43d4be54dab34fbd6efaf10e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e88d1c6525dd4d7df6661c30b92fbe4369244ef43d4be54dab34fbd6efaf10e4->leave($__internal_e88d1c6525dd4d7df6661c30b92fbe4369244ef43d4be54dab34fbd6efaf10e4_prof);

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
