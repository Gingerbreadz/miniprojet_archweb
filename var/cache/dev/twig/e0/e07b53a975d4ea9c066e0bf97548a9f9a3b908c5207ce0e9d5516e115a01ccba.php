<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_546c1aa06cfc688e2d3029694057a272ce606b0af4265c4529ff0020c7245f32 extends Twig_Template
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
        $__internal_5a24fdd80a02ce20c992c19d44462f4b1b8a158237f3f9cdb842dd6116236c61 = $this->env->getExtension("native_profiler");
        $__internal_5a24fdd80a02ce20c992c19d44462f4b1b8a158237f3f9cdb842dd6116236c61->enter($__internal_5a24fdd80a02ce20c992c19d44462f4b1b8a158237f3f9cdb842dd6116236c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5a24fdd80a02ce20c992c19d44462f4b1b8a158237f3f9cdb842dd6116236c61->leave($__internal_5a24fdd80a02ce20c992c19d44462f4b1b8a158237f3f9cdb842dd6116236c61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
