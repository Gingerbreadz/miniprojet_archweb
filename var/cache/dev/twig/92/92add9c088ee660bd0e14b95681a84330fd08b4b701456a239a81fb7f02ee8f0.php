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
        $__internal_66a4231688b6dbf85940d5024371910ed9de5d630d91c47064cc5e3317665fdd = $this->env->getExtension("native_profiler");
        $__internal_66a4231688b6dbf85940d5024371910ed9de5d630d91c47064cc5e3317665fdd->enter($__internal_66a4231688b6dbf85940d5024371910ed9de5d630d91c47064cc5e3317665fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a4231688b6dbf85940d5024371910ed9de5d630d91c47064cc5e3317665fdd->leave($__internal_66a4231688b6dbf85940d5024371910ed9de5d630d91c47064cc5e3317665fdd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56eaecae3c9befb1237a3c53f73712ab759844ae9484081603786d704803fd5b = $this->env->getExtension("native_profiler");
        $__internal_56eaecae3c9befb1237a3c53f73712ab759844ae9484081603786d704803fd5b->enter($__internal_56eaecae3c9befb1237a3c53f73712ab759844ae9484081603786d704803fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_56eaecae3c9befb1237a3c53f73712ab759844ae9484081603786d704803fd5b->leave($__internal_56eaecae3c9befb1237a3c53f73712ab759844ae9484081603786d704803fd5b_prof);

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
