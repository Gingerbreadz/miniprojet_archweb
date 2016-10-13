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
        $__internal_db20d51532eb3c6ead7e700e5301f2e6ebc2527d74addfe96476b34198661374 = $this->env->getExtension("native_profiler");
        $__internal_db20d51532eb3c6ead7e700e5301f2e6ebc2527d74addfe96476b34198661374->enter($__internal_db20d51532eb3c6ead7e700e5301f2e6ebc2527d74addfe96476b34198661374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_db20d51532eb3c6ead7e700e5301f2e6ebc2527d74addfe96476b34198661374->leave($__internal_db20d51532eb3c6ead7e700e5301f2e6ebc2527d74addfe96476b34198661374_prof);

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
