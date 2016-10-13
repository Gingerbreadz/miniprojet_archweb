<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f5ea36e6c67849dfb4d3f34aa7543bb28f7ee36acca80793ded40db8525f9319 extends Twig_Template
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
        $__internal_f2115f606141703fa6dbe0f56b8984f987054ded723df947e6e15991143436ec = $this->env->getExtension("native_profiler");
        $__internal_f2115f606141703fa6dbe0f56b8984f987054ded723df947e6e15991143436ec->enter($__internal_f2115f606141703fa6dbe0f56b8984f987054ded723df947e6e15991143436ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f2115f606141703fa6dbe0f56b8984f987054ded723df947e6e15991143436ec->leave($__internal_f2115f606141703fa6dbe0f56b8984f987054ded723df947e6e15991143436ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
