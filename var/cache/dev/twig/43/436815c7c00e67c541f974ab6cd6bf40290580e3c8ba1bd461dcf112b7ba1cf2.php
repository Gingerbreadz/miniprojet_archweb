<?php

/* admin/new.html.twig */
class __TwigTemplate_c1c61558bf92308c2b9942bc004771f71fc32863878775569e54ed9463784056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "admin/new.html.twig", 1);
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
        $__internal_764348b94e53e3079dc801af0f9d0598209037ec7d1f0445d0df3c5d632e43ba = $this->env->getExtension("native_profiler");
        $__internal_764348b94e53e3079dc801af0f9d0598209037ec7d1f0445d0df3c5d632e43ba->enter($__internal_764348b94e53e3079dc801af0f9d0598209037ec7d1f0445d0df3c5d632e43ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_764348b94e53e3079dc801af0f9d0598209037ec7d1f0445d0df3c5d632e43ba->leave($__internal_764348b94e53e3079dc801af0f9d0598209037ec7d1f0445d0df3c5d632e43ba_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_923556817369f98a42bbd35c3ac91246f5b0d268cfc3f9aa33265caa4bde141d = $this->env->getExtension("native_profiler");
        $__internal_923556817369f98a42bbd35c3ac91246f5b0d268cfc3f9aa33265caa4bde141d->enter($__internal_923556817369f98a42bbd35c3ac91246f5b0d268cfc3f9aa33265caa4bde141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <h1>Gestion des Circuits</h1>
\t
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_923556817369f98a42bbd35c3ac91246f5b0d268cfc3f9aa33265caa4bde141d->leave($__internal_923556817369f98a42bbd35c3ac91246f5b0d268cfc3f9aa33265caa4bde141d_prof);

    }

    public function getTemplateName()
    {
        return "admin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* */
/* {% block main %}*/
/*     <h1>Gestion des Circuits</h1>*/
/* 	*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
