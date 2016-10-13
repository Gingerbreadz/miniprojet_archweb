<?php

/* circuit/actuality.html.twig */
class __TwigTemplate_65d2f5a60fb7a0333dcf19bc9ac4f541b0f6ccd52f76586b1cb08c1851253959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/actuality.html.twig", 1);
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
        $__internal_e1c462ac84fe9a6f02737d4ab1f4212b3243582b818b14b0722db62a5d1e71f4 = $this->env->getExtension("native_profiler");
        $__internal_e1c462ac84fe9a6f02737d4ab1f4212b3243582b818b14b0722db62a5d1e71f4->enter($__internal_e1c462ac84fe9a6f02737d4ab1f4212b3243582b818b14b0722db62a5d1e71f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/actuality.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c462ac84fe9a6f02737d4ab1f4212b3243582b818b14b0722db62a5d1e71f4->leave($__internal_e1c462ac84fe9a6f02737d4ab1f4212b3243582b818b14b0722db62a5d1e71f4_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_81f3a52ae8ebb00710f72341a10938b9aed0dea800175fe5ae740694e6f1d6f1 = $this->env->getExtension("native_profiler");
        $__internal_81f3a52ae8ebb00710f72341a10938b9aed0dea800175fe5ae740694e6f1d6f1->enter($__internal_81f3a52ae8ebb00710f72341a10938b9aed0dea800175fe5ae740694e6f1d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
";
        
        $__internal_81f3a52ae8ebb00710f72341a10938b9aed0dea800175fe5ae740694e6f1d6f1->leave($__internal_81f3a52ae8ebb00710f72341a10938b9aed0dea800175fe5ae740694e6f1d6f1_prof);

    }

    public function getTemplateName()
    {
        return "circuit/actuality.html.twig";
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
