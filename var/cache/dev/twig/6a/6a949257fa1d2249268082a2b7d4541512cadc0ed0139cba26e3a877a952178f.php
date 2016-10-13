<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_35bc77b87c8e12f08839617dce86315ee22d72e9f4e35ee8a2081226583b7d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7304f154257b696f6e6f0e90cfecd61ed0f4ed38fb994a661e13f5201b50ed14 = $this->env->getExtension("native_profiler");
        $__internal_7304f154257b696f6e6f0e90cfecd61ed0f4ed38fb994a661e13f5201b50ed14->enter($__internal_7304f154257b696f6e6f0e90cfecd61ed0f4ed38fb994a661e13f5201b50ed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7304f154257b696f6e6f0e90cfecd61ed0f4ed38fb994a661e13f5201b50ed14->leave($__internal_7304f154257b696f6e6f0e90cfecd61ed0f4ed38fb994a661e13f5201b50ed14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6a80159c988893a91e3931dd24868a28777ea6f88bccb05d8faad0fc6fd14bf = $this->env->getExtension("native_profiler");
        $__internal_f6a80159c988893a91e3931dd24868a28777ea6f88bccb05d8faad0fc6fd14bf->enter($__internal_f6a80159c988893a91e3931dd24868a28777ea6f88bccb05d8faad0fc6fd14bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f6a80159c988893a91e3931dd24868a28777ea6f88bccb05d8faad0fc6fd14bf->leave($__internal_f6a80159c988893a91e3931dd24868a28777ea6f88bccb05d8faad0fc6fd14bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
