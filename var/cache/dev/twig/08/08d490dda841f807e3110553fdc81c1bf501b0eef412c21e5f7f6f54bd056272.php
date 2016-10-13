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
        $__internal_bb35f54a6e2ea607d620cae66ba67482e67615bee017b18f6521bd9c987f9d3f = $this->env->getExtension("native_profiler");
        $__internal_bb35f54a6e2ea607d620cae66ba67482e67615bee017b18f6521bd9c987f9d3f->enter($__internal_bb35f54a6e2ea607d620cae66ba67482e67615bee017b18f6521bd9c987f9d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb35f54a6e2ea607d620cae66ba67482e67615bee017b18f6521bd9c987f9d3f->leave($__internal_bb35f54a6e2ea607d620cae66ba67482e67615bee017b18f6521bd9c987f9d3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3faf93984e9fc86586383af7a6bc9404e6a2294a2b4cff540726a9fe1a3346ad = $this->env->getExtension("native_profiler");
        $__internal_3faf93984e9fc86586383af7a6bc9404e6a2294a2b4cff540726a9fe1a3346ad->enter($__internal_3faf93984e9fc86586383af7a6bc9404e6a2294a2b4cff540726a9fe1a3346ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3faf93984e9fc86586383af7a6bc9404e6a2294a2b4cff540726a9fe1a3346ad->leave($__internal_3faf93984e9fc86586383af7a6bc9404e6a2294a2b4cff540726a9fe1a3346ad_prof);

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
