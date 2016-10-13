<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5e3731aff5262ba766b7df5ced53717aae4357d12660f68872d906f50f5e5f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6451bab465487ee3a0b3570fcda3ff449a29fd26890a8ed8ba651fdf7597cf4f = $this->env->getExtension("native_profiler");
        $__internal_6451bab465487ee3a0b3570fcda3ff449a29fd26890a8ed8ba651fdf7597cf4f->enter($__internal_6451bab465487ee3a0b3570fcda3ff449a29fd26890a8ed8ba651fdf7597cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6451bab465487ee3a0b3570fcda3ff449a29fd26890a8ed8ba651fdf7597cf4f->leave($__internal_6451bab465487ee3a0b3570fcda3ff449a29fd26890a8ed8ba651fdf7597cf4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5524bee1f62ded1130a7a0dcabf9113ec6efa94b9cb7182fc2e6876fb1a6a0d8 = $this->env->getExtension("native_profiler");
        $__internal_5524bee1f62ded1130a7a0dcabf9113ec6efa94b9cb7182fc2e6876fb1a6a0d8->enter($__internal_5524bee1f62ded1130a7a0dcabf9113ec6efa94b9cb7182fc2e6876fb1a6a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5524bee1f62ded1130a7a0dcabf9113ec6efa94b9cb7182fc2e6876fb1a6a0d8->leave($__internal_5524bee1f62ded1130a7a0dcabf9113ec6efa94b9cb7182fc2e6876fb1a6a0d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
