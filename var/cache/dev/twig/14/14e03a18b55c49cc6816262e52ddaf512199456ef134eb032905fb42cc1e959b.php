<?php

/* :circuit:actuality.html.twig */
class __TwigTemplate_65d2f5a60fb7a0333dcf19bc9ac4f541b0f6ccd52f76586b1cb08c1851253959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:actuality.html.twig", 1);
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
        $__internal_25db8d9e2fb9d6ebd0a1921f77f9f1fa32dbb07d46472d9c47433073428fd954 = $this->env->getExtension("native_profiler");
        $__internal_25db8d9e2fb9d6ebd0a1921f77f9f1fa32dbb07d46472d9c47433073428fd954->enter($__internal_25db8d9e2fb9d6ebd0a1921f77f9f1fa32dbb07d46472d9c47433073428fd954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:actuality.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25db8d9e2fb9d6ebd0a1921f77f9f1fa32dbb07d46472d9c47433073428fd954->leave($__internal_25db8d9e2fb9d6ebd0a1921f77f9f1fa32dbb07d46472d9c47433073428fd954_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_6f647b9fc1efd6615dc67151ce693692d00461806e7719a7a316877a33eeacc4 = $this->env->getExtension("native_profiler");
        $__internal_6f647b9fc1efd6615dc67151ce693692d00461806e7719a7a316877a33eeacc4->enter($__internal_6f647b9fc1efd6615dc67151ce693692d00461806e7719a7a316877a33eeacc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
";
        
        $__internal_6f647b9fc1efd6615dc67151ce693692d00461806e7719a7a316877a33eeacc4->leave($__internal_6f647b9fc1efd6615dc67151ce693692d00461806e7719a7a316877a33eeacc4_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:actuality.html.twig";
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
