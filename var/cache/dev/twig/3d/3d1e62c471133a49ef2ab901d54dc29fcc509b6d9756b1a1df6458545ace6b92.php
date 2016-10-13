<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8fe4b77a258b4b5653c678463629146403fe99fe575b9ac13fdbbfb88b22b457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9038c4b388836572f11bff0ac0b69adf5b7a9c3751c0bf59f597375ba1facaab = $this->env->getExtension("native_profiler");
        $__internal_9038c4b388836572f11bff0ac0b69adf5b7a9c3751c0bf59f597375ba1facaab->enter($__internal_9038c4b388836572f11bff0ac0b69adf5b7a9c3751c0bf59f597375ba1facaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9038c4b388836572f11bff0ac0b69adf5b7a9c3751c0bf59f597375ba1facaab->leave($__internal_9038c4b388836572f11bff0ac0b69adf5b7a9c3751c0bf59f597375ba1facaab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c55288d8926a55196c04b4bc0f95dbda83ffbda4b08a50aa3f597c0a9a5902db = $this->env->getExtension("native_profiler");
        $__internal_c55288d8926a55196c04b4bc0f95dbda83ffbda4b08a50aa3f597c0a9a5902db->enter($__internal_c55288d8926a55196c04b4bc0f95dbda83ffbda4b08a50aa3f597c0a9a5902db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c55288d8926a55196c04b4bc0f95dbda83ffbda4b08a50aa3f597c0a9a5902db->leave($__internal_c55288d8926a55196c04b4bc0f95dbda83ffbda4b08a50aa3f597c0a9a5902db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
