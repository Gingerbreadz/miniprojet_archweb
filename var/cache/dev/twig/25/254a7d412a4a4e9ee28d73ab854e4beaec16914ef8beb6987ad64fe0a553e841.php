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
        $__internal_651b1cc95067573259b5d25499cfdab23490896cb63d84c7c4b4e381049a9dc3 = $this->env->getExtension("native_profiler");
        $__internal_651b1cc95067573259b5d25499cfdab23490896cb63d84c7c4b4e381049a9dc3->enter($__internal_651b1cc95067573259b5d25499cfdab23490896cb63d84c7c4b4e381049a9dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_651b1cc95067573259b5d25499cfdab23490896cb63d84c7c4b4e381049a9dc3->leave($__internal_651b1cc95067573259b5d25499cfdab23490896cb63d84c7c4b4e381049a9dc3_prof);

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
