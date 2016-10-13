<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a265b051be85ee6163c09c903fd27f39e1534f5492ba3eb5b722ff827bf6280c extends Twig_Template
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
        $__internal_371c83a4cbc2f274da9d5a4c677955fe9735ff38a7c0b5c8646bcc433b965d44 = $this->env->getExtension("native_profiler");
        $__internal_371c83a4cbc2f274da9d5a4c677955fe9735ff38a7c0b5c8646bcc433b965d44->enter($__internal_371c83a4cbc2f274da9d5a4c677955fe9735ff38a7c0b5c8646bcc433b965d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_371c83a4cbc2f274da9d5a4c677955fe9735ff38a7c0b5c8646bcc433b965d44->leave($__internal_371c83a4cbc2f274da9d5a4c677955fe9735ff38a7c0b5c8646bcc433b965d44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
