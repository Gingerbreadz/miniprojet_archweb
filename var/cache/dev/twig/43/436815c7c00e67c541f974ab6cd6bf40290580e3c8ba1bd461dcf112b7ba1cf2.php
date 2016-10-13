<?php

/* :admin:new.html.twig */
class __TwigTemplate_c1c61558bf92308c2b9942bc004771f71fc32863878775569e54ed9463784056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":admin:new.html.twig", 1);
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
        $__internal_914e09f193ab4f221bd335515d595382e2e92da549fd85db41fe479696dc178a = $this->env->getExtension("native_profiler");
        $__internal_914e09f193ab4f221bd335515d595382e2e92da549fd85db41fe479696dc178a->enter($__internal_914e09f193ab4f221bd335515d595382e2e92da549fd85db41fe479696dc178a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914e09f193ab4f221bd335515d595382e2e92da549fd85db41fe479696dc178a->leave($__internal_914e09f193ab4f221bd335515d595382e2e92da549fd85db41fe479696dc178a_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_26e38492bdaffd28338a77a6783413697a8278ae9a1df819c15df0dcf94390d6 = $this->env->getExtension("native_profiler");
        $__internal_26e38492bdaffd28338a77a6783413697a8278ae9a1df819c15df0dcf94390d6->enter($__internal_26e38492bdaffd28338a77a6783413697a8278ae9a1df819c15df0dcf94390d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_26e38492bdaffd28338a77a6783413697a8278ae9a1df819c15df0dcf94390d6->leave($__internal_26e38492bdaffd28338a77a6783413697a8278ae9a1df819c15df0dcf94390d6_prof);

    }

    public function getTemplateName()
    {
        return ":admin:new.html.twig";
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
