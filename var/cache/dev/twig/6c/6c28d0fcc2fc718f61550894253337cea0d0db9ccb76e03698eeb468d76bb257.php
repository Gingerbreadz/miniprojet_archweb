<?php

/* :circuit:home.html.twig */
class __TwigTemplate_edcb146adccb7bc5eb55b65a1c125f1a599589b2b985cdbdf89f158e8b05c5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:home.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17b91219ec485f919ccb75900bebbd4733b0d38a6c206b9311ed29365596c432 = $this->env->getExtension("native_profiler");
        $__internal_17b91219ec485f919ccb75900bebbd4733b0d38a6c206b9311ed29365596c432->enter($__internal_17b91219ec485f919ccb75900bebbd4733b0d38a6c206b9311ed29365596c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b91219ec485f919ccb75900bebbd4733b0d38a6c206b9311ed29365596c432->leave($__internal_17b91219ec485f919ccb75900bebbd4733b0d38a6c206b9311ed29365596c432_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_4fa98af56d761ec4f6b0d6e9321625451ed6e509d2a85dfccb858c84434b1b2e = $this->env->getExtension("native_profiler");
        $__internal_4fa98af56d761ec4f6b0d6e9321625451ed6e509d2a85dfccb858c84434b1b2e->enter($__internal_4fa98af56d761ec4f6b0d6e9321625451ed6e509d2a85dfccb858c84434b1b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
";
        
        $__internal_4fa98af56d761ec4f6b0d6e9321625451ed6e509d2a85dfccb858c84434b1b2e->leave($__internal_4fa98af56d761ec4f6b0d6e9321625451ed6e509d2a85dfccb858c84434b1b2e_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* {% block main %}*/
/* */
/* {% endblock %}  {# main #}*/
