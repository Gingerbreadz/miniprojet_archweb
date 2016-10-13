<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2702019e7e3334ebbd8beeae9f6375633db67711a8086833ce7b0217e268a96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_54d716addd3f4ad5fe38623ce4c48549453f97247268b4b32142d23ad25f4d42 = $this->env->getExtension("native_profiler");
        $__internal_54d716addd3f4ad5fe38623ce4c48549453f97247268b4b32142d23ad25f4d42->enter($__internal_54d716addd3f4ad5fe38623ce4c48549453f97247268b4b32142d23ad25f4d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d716addd3f4ad5fe38623ce4c48549453f97247268b4b32142d23ad25f4d42->leave($__internal_54d716addd3f4ad5fe38623ce4c48549453f97247268b4b32142d23ad25f4d42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bcd8994225b0b03713eebd09066fb83ef7c91b651061470d77207b31003b2b0 = $this->env->getExtension("native_profiler");
        $__internal_9bcd8994225b0b03713eebd09066fb83ef7c91b651061470d77207b31003b2b0->enter($__internal_9bcd8994225b0b03713eebd09066fb83ef7c91b651061470d77207b31003b2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9bcd8994225b0b03713eebd09066fb83ef7c91b651061470d77207b31003b2b0->leave($__internal_9bcd8994225b0b03713eebd09066fb83ef7c91b651061470d77207b31003b2b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
