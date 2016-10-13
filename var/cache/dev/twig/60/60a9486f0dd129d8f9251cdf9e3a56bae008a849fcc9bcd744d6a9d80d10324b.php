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
        $__internal_1070018e52d14505fd32a6a56f0dd3927166993ba22ff3646deca71b21fa6f5d = $this->env->getExtension("native_profiler");
        $__internal_1070018e52d14505fd32a6a56f0dd3927166993ba22ff3646deca71b21fa6f5d->enter($__internal_1070018e52d14505fd32a6a56f0dd3927166993ba22ff3646deca71b21fa6f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1070018e52d14505fd32a6a56f0dd3927166993ba22ff3646deca71b21fa6f5d->leave($__internal_1070018e52d14505fd32a6a56f0dd3927166993ba22ff3646deca71b21fa6f5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0504c656d6196421d3709ad2587d4ac95a7599adf5feae846d92adbfb8c45966 = $this->env->getExtension("native_profiler");
        $__internal_0504c656d6196421d3709ad2587d4ac95a7599adf5feae846d92adbfb8c45966->enter($__internal_0504c656d6196421d3709ad2587d4ac95a7599adf5feae846d92adbfb8c45966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0504c656d6196421d3709ad2587d4ac95a7599adf5feae846d92adbfb8c45966->leave($__internal_0504c656d6196421d3709ad2587d4ac95a7599adf5feae846d92adbfb8c45966_prof);

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
