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
        $__internal_c4f80b23277125c2053cf56a05aa26c56c605c6eb5e82351d2bcf1e4dfbf96fb = $this->env->getExtension("native_profiler");
        $__internal_c4f80b23277125c2053cf56a05aa26c56c605c6eb5e82351d2bcf1e4dfbf96fb->enter($__internal_c4f80b23277125c2053cf56a05aa26c56c605c6eb5e82351d2bcf1e4dfbf96fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f80b23277125c2053cf56a05aa26c56c605c6eb5e82351d2bcf1e4dfbf96fb->leave($__internal_c4f80b23277125c2053cf56a05aa26c56c605c6eb5e82351d2bcf1e4dfbf96fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe48342ed9c4d532092697d2e0e5e3b6687ad143edb21660c26cfba247557f19 = $this->env->getExtension("native_profiler");
        $__internal_fe48342ed9c4d532092697d2e0e5e3b6687ad143edb21660c26cfba247557f19->enter($__internal_fe48342ed9c4d532092697d2e0e5e3b6687ad143edb21660c26cfba247557f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fe48342ed9c4d532092697d2e0e5e3b6687ad143edb21660c26cfba247557f19->leave($__internal_fe48342ed9c4d532092697d2e0e5e3b6687ad143edb21660c26cfba247557f19_prof);

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
