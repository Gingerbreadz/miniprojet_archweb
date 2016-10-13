<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b9af061641f4bad7a6428e400f4497bb1a52468158b2e7ebe13cc7430dbb08e8 extends Twig_Template
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
        $__internal_71bbb7b441c561602d293da68725bbb804b451532313cb6c5b8968b08c293962 = $this->env->getExtension("native_profiler");
        $__internal_71bbb7b441c561602d293da68725bbb804b451532313cb6c5b8968b08c293962->enter($__internal_71bbb7b441c561602d293da68725bbb804b451532313cb6c5b8968b08c293962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_71bbb7b441c561602d293da68725bbb804b451532313cb6c5b8968b08c293962->leave($__internal_71bbb7b441c561602d293da68725bbb804b451532313cb6c5b8968b08c293962_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
