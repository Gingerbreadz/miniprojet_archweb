<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0e4f5cca58a973bf152a539019dd31fb609c8aef83fd483bbcda55f5bb74fd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_788e23366c077b8f792c88adb67f25b59126463c44c7b1f69e10be9bf33a5e38 = $this->env->getExtension("native_profiler");
        $__internal_788e23366c077b8f792c88adb67f25b59126463c44c7b1f69e10be9bf33a5e38->enter($__internal_788e23366c077b8f792c88adb67f25b59126463c44c7b1f69e10be9bf33a5e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_788e23366c077b8f792c88adb67f25b59126463c44c7b1f69e10be9bf33a5e38->leave($__internal_788e23366c077b8f792c88adb67f25b59126463c44c7b1f69e10be9bf33a5e38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
