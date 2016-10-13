<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0a38e723d31e749277356c2eb0c1f99278a83c6ce00ebb278dcbddf48fa1f5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3bdf446c4ede602767c2f6bb7519e38e53a497f730ba48030aaf9c7d17baaaed = $this->env->getExtension("native_profiler");
        $__internal_3bdf446c4ede602767c2f6bb7519e38e53a497f730ba48030aaf9c7d17baaaed->enter($__internal_3bdf446c4ede602767c2f6bb7519e38e53a497f730ba48030aaf9c7d17baaaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bdf446c4ede602767c2f6bb7519e38e53a497f730ba48030aaf9c7d17baaaed->leave($__internal_3bdf446c4ede602767c2f6bb7519e38e53a497f730ba48030aaf9c7d17baaaed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d044b9f42f84085c3ae7581a3c48a4dc453c46620bcc60a238b42f56ec0d5ce = $this->env->getExtension("native_profiler");
        $__internal_8d044b9f42f84085c3ae7581a3c48a4dc453c46620bcc60a238b42f56ec0d5ce->enter($__internal_8d044b9f42f84085c3ae7581a3c48a4dc453c46620bcc60a238b42f56ec0d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8d044b9f42f84085c3ae7581a3c48a4dc453c46620bcc60a238b42f56ec0d5ce->leave($__internal_8d044b9f42f84085c3ae7581a3c48a4dc453c46620bcc60a238b42f56ec0d5ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
