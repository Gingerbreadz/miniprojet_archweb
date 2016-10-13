<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d0c76454bf8845ec2daa7f4505ab646779e78731ba64c3f00232eb55af211acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f98ebfb4e3cb8c2c120e416ab039fab50e713849e073e7356d3c9e5035c71278 = $this->env->getExtension("native_profiler");
        $__internal_f98ebfb4e3cb8c2c120e416ab039fab50e713849e073e7356d3c9e5035c71278->enter($__internal_f98ebfb4e3cb8c2c120e416ab039fab50e713849e073e7356d3c9e5035c71278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98ebfb4e3cb8c2c120e416ab039fab50e713849e073e7356d3c9e5035c71278->leave($__internal_f98ebfb4e3cb8c2c120e416ab039fab50e713849e073e7356d3c9e5035c71278_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1ed04aa5db72bcfeef29cff40f2cafa6b654312d4de1b802ba57a27defca750 = $this->env->getExtension("native_profiler");
        $__internal_e1ed04aa5db72bcfeef29cff40f2cafa6b654312d4de1b802ba57a27defca750->enter($__internal_e1ed04aa5db72bcfeef29cff40f2cafa6b654312d4de1b802ba57a27defca750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e1ed04aa5db72bcfeef29cff40f2cafa6b654312d4de1b802ba57a27defca750->leave($__internal_e1ed04aa5db72bcfeef29cff40f2cafa6b654312d4de1b802ba57a27defca750_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
