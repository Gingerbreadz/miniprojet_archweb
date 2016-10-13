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
        $__internal_55baf916d5f1b0158a25dbbfd8074dbfe246b53f8927f7639ccf901c09b35c88 = $this->env->getExtension("native_profiler");
        $__internal_55baf916d5f1b0158a25dbbfd8074dbfe246b53f8927f7639ccf901c09b35c88->enter($__internal_55baf916d5f1b0158a25dbbfd8074dbfe246b53f8927f7639ccf901c09b35c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55baf916d5f1b0158a25dbbfd8074dbfe246b53f8927f7639ccf901c09b35c88->leave($__internal_55baf916d5f1b0158a25dbbfd8074dbfe246b53f8927f7639ccf901c09b35c88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c006e42ed970fef726c0888499efa117d8847ea67aaadd934f649eebd48d533c = $this->env->getExtension("native_profiler");
        $__internal_c006e42ed970fef726c0888499efa117d8847ea67aaadd934f649eebd48d533c->enter($__internal_c006e42ed970fef726c0888499efa117d8847ea67aaadd934f649eebd48d533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c006e42ed970fef726c0888499efa117d8847ea67aaadd934f649eebd48d533c->leave($__internal_c006e42ed970fef726c0888499efa117d8847ea67aaadd934f649eebd48d533c_prof);

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
