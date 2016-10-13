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
        $__internal_8d14906f75634afced2715a7cc21441a09b0172c561330a344eff0977df47e8d = $this->env->getExtension("native_profiler");
        $__internal_8d14906f75634afced2715a7cc21441a09b0172c561330a344eff0977df47e8d->enter($__internal_8d14906f75634afced2715a7cc21441a09b0172c561330a344eff0977df47e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d14906f75634afced2715a7cc21441a09b0172c561330a344eff0977df47e8d->leave($__internal_8d14906f75634afced2715a7cc21441a09b0172c561330a344eff0977df47e8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e658f37731779ab48106baf7483f582e17b5d5f917ba770abd76930dce38f28 = $this->env->getExtension("native_profiler");
        $__internal_4e658f37731779ab48106baf7483f582e17b5d5f917ba770abd76930dce38f28->enter($__internal_4e658f37731779ab48106baf7483f582e17b5d5f917ba770abd76930dce38f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4e658f37731779ab48106baf7483f582e17b5d5f917ba770abd76930dce38f28->leave($__internal_4e658f37731779ab48106baf7483f582e17b5d5f917ba770abd76930dce38f28_prof);

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
