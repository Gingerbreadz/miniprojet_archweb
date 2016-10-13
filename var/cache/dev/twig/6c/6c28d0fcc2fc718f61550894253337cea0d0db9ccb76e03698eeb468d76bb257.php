<?php

/* circuit/home.html.twig */
class __TwigTemplate_edcb146adccb7bc5eb55b65a1c125f1a599589b2b985cdbdf89f158e8b05c5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/home.html.twig", 1);
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
        $__internal_caab1e1dab9b5d5db830c23dfd3c8aea712c58a346e0c7a451c038f9e38b3633 = $this->env->getExtension("native_profiler");
        $__internal_caab1e1dab9b5d5db830c23dfd3c8aea712c58a346e0c7a451c038f9e38b3633->enter($__internal_caab1e1dab9b5d5db830c23dfd3c8aea712c58a346e0c7a451c038f9e38b3633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caab1e1dab9b5d5db830c23dfd3c8aea712c58a346e0c7a451c038f9e38b3633->leave($__internal_caab1e1dab9b5d5db830c23dfd3c8aea712c58a346e0c7a451c038f9e38b3633_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_9a0aec2697ab50d51f5ecc792dd3c2658b7228ad95672c1415602d7dd93a9e96 = $this->env->getExtension("native_profiler");
        $__internal_9a0aec2697ab50d51f5ecc792dd3c2658b7228ad95672c1415602d7dd93a9e96->enter($__internal_9a0aec2697ab50d51f5ecc792dd3c2658b7228ad95672c1415602d7dd93a9e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
";
        
        $__internal_9a0aec2697ab50d51f5ecc792dd3c2658b7228ad95672c1415602d7dd93a9e96->leave($__internal_9a0aec2697ab50d51f5ecc792dd3c2658b7228ad95672c1415602d7dd93a9e96_prof);

    }

    public function getTemplateName()
    {
        return "circuit/home.html.twig";
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
