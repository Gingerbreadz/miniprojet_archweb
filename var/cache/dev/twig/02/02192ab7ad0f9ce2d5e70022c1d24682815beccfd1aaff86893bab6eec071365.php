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
        $__internal_ffa50de322f618be97fc642637d09c6b5df5bd96cc6d353fb095b531f7ce16cb = $this->env->getExtension("native_profiler");
        $__internal_ffa50de322f618be97fc642637d09c6b5df5bd96cc6d353fb095b531f7ce16cb->enter($__internal_ffa50de322f618be97fc642637d09c6b5df5bd96cc6d353fb095b531f7ce16cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa50de322f618be97fc642637d09c6b5df5bd96cc6d353fb095b531f7ce16cb->leave($__internal_ffa50de322f618be97fc642637d09c6b5df5bd96cc6d353fb095b531f7ce16cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cb1074f073379472349b4dcc5b91a37208efd0a3bf0018ce5d47a5c839b48f9 = $this->env->getExtension("native_profiler");
        $__internal_8cb1074f073379472349b4dcc5b91a37208efd0a3bf0018ce5d47a5c839b48f9->enter($__internal_8cb1074f073379472349b4dcc5b91a37208efd0a3bf0018ce5d47a5c839b48f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8cb1074f073379472349b4dcc5b91a37208efd0a3bf0018ce5d47a5c839b48f9->leave($__internal_8cb1074f073379472349b4dcc5b91a37208efd0a3bf0018ce5d47a5c839b48f9_prof);

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
