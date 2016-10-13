<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0fcfbc6497858be1d0ef264cbeb47475af55ca171a1cc1fa5b7b8b391fa8e121 extends Twig_Template
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
        $__internal_d385b14a4e6f1450a422ca1fa7932e231e12be6891ca32b36d7233dd8dba1c22 = $this->env->getExtension("native_profiler");
        $__internal_d385b14a4e6f1450a422ca1fa7932e231e12be6891ca32b36d7233dd8dba1c22->enter($__internal_d385b14a4e6f1450a422ca1fa7932e231e12be6891ca32b36d7233dd8dba1c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d385b14a4e6f1450a422ca1fa7932e231e12be6891ca32b36d7233dd8dba1c22->leave($__internal_d385b14a4e6f1450a422ca1fa7932e231e12be6891ca32b36d7233dd8dba1c22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
