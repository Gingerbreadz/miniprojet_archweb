<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_aba150982115a689f4e4c8db8615ebe2e8f44919ead3322c540d39f4144bafef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7570f90602391c13b32f8a96ebce9cd9cbf48e61f051c5a0c4ce9fa0089a5781 = $this->env->getExtension("native_profiler");
        $__internal_7570f90602391c13b32f8a96ebce9cd9cbf48e61f051c5a0c4ce9fa0089a5781->enter($__internal_7570f90602391c13b32f8a96ebce9cd9cbf48e61f051c5a0c4ce9fa0089a5781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7570f90602391c13b32f8a96ebce9cd9cbf48e61f051c5a0c4ce9fa0089a5781->leave($__internal_7570f90602391c13b32f8a96ebce9cd9cbf48e61f051c5a0c4ce9fa0089a5781_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c86f90101ef8a7fdd8c87ba73985207269de3449aaccc8a578dca2ff6fb4cc2 = $this->env->getExtension("native_profiler");
        $__internal_9c86f90101ef8a7fdd8c87ba73985207269de3449aaccc8a578dca2ff6fb4cc2->enter($__internal_9c86f90101ef8a7fdd8c87ba73985207269de3449aaccc8a578dca2ff6fb4cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9c86f90101ef8a7fdd8c87ba73985207269de3449aaccc8a578dca2ff6fb4cc2->leave($__internal_9c86f90101ef8a7fdd8c87ba73985207269de3449aaccc8a578dca2ff6fb4cc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
