<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_104b684d00bee1d502d772162864518fe2c4b83da413b810b91c2f9f6e12ab7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_b4989f197540a9ba56addd871eb0a3b72440285a808ccbc574725a622a825042 = $this->env->getExtension("native_profiler");
        $__internal_b4989f197540a9ba56addd871eb0a3b72440285a808ccbc574725a622a825042->enter($__internal_b4989f197540a9ba56addd871eb0a3b72440285a808ccbc574725a622a825042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4989f197540a9ba56addd871eb0a3b72440285a808ccbc574725a622a825042->leave($__internal_b4989f197540a9ba56addd871eb0a3b72440285a808ccbc574725a622a825042_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cac30a3f65b2b96370527a6a8fade8868da04d926f3c7439741c88edb4438c22 = $this->env->getExtension("native_profiler");
        $__internal_cac30a3f65b2b96370527a6a8fade8868da04d926f3c7439741c88edb4438c22->enter($__internal_cac30a3f65b2b96370527a6a8fade8868da04d926f3c7439741c88edb4438c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cac30a3f65b2b96370527a6a8fade8868da04d926f3c7439741c88edb4438c22->leave($__internal_cac30a3f65b2b96370527a6a8fade8868da04d926f3c7439741c88edb4438c22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
