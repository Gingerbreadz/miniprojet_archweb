<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ed96e63492e3e0a3cf6e20b8008a33e781ab547ff4625721d369c7ab08f03691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7de71f4475f6c7c68e22804bf09dbca6d807d92967eb30c645e02e7268d45657 = $this->env->getExtension("native_profiler");
        $__internal_7de71f4475f6c7c68e22804bf09dbca6d807d92967eb30c645e02e7268d45657->enter($__internal_7de71f4475f6c7c68e22804bf09dbca6d807d92967eb30c645e02e7268d45657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de71f4475f6c7c68e22804bf09dbca6d807d92967eb30c645e02e7268d45657->leave($__internal_7de71f4475f6c7c68e22804bf09dbca6d807d92967eb30c645e02e7268d45657_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b94dcd44bd2916532f187fe139437ffb2e1896da54e80a46a791e20a3eca1bea = $this->env->getExtension("native_profiler");
        $__internal_b94dcd44bd2916532f187fe139437ffb2e1896da54e80a46a791e20a3eca1bea->enter($__internal_b94dcd44bd2916532f187fe139437ffb2e1896da54e80a46a791e20a3eca1bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b94dcd44bd2916532f187fe139437ffb2e1896da54e80a46a791e20a3eca1bea->leave($__internal_b94dcd44bd2916532f187fe139437ffb2e1896da54e80a46a791e20a3eca1bea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
