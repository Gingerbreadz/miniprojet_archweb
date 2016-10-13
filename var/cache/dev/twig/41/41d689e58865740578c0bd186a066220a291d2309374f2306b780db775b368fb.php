<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f187cd52cab45af5e7bd7beae2f63b3dc50807ab5711586e7e222c76e8bc720b extends Twig_Template
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
        $__internal_0e57497d391e30e31763ec32b9237c8be987085b0dd42694e35d6ba41b2eafdc = $this->env->getExtension("native_profiler");
        $__internal_0e57497d391e30e31763ec32b9237c8be987085b0dd42694e35d6ba41b2eafdc->enter($__internal_0e57497d391e30e31763ec32b9237c8be987085b0dd42694e35d6ba41b2eafdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0e57497d391e30e31763ec32b9237c8be987085b0dd42694e35d6ba41b2eafdc->leave($__internal_0e57497d391e30e31763ec32b9237c8be987085b0dd42694e35d6ba41b2eafdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
