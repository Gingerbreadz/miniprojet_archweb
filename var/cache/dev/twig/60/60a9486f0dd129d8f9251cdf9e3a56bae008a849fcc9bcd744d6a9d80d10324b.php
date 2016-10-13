<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_932cc94b3ea4d0d3a5e0582c14f1a362aef994d200b983b6ab4125c33ae3fb4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9faea9ac09f4e0781cab026544da3c4dc191026016b2f28951e491ef8a85d06e = $this->env->getExtension("native_profiler");
        $__internal_9faea9ac09f4e0781cab026544da3c4dc191026016b2f28951e491ef8a85d06e->enter($__internal_9faea9ac09f4e0781cab026544da3c4dc191026016b2f28951e491ef8a85d06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9faea9ac09f4e0781cab026544da3c4dc191026016b2f28951e491ef8a85d06e->leave($__internal_9faea9ac09f4e0781cab026544da3c4dc191026016b2f28951e491ef8a85d06e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02ec2db666cb626f092ec956bf371d57510ff45111ef6d1023af37cd4bb420a5 = $this->env->getExtension("native_profiler");
        $__internal_02ec2db666cb626f092ec956bf371d57510ff45111ef6d1023af37cd4bb420a5->enter($__internal_02ec2db666cb626f092ec956bf371d57510ff45111ef6d1023af37cd4bb420a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_02ec2db666cb626f092ec956bf371d57510ff45111ef6d1023af37cd4bb420a5->leave($__internal_02ec2db666cb626f092ec956bf371d57510ff45111ef6d1023af37cd4bb420a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
