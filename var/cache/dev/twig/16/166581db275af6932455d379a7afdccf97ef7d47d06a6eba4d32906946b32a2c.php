<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3308837db64c5585e2b74eea8f0ccc7dcbaf5cc61b11b52fb4f5df64f0bba5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b681381c55367870b019e7382c11a6da7220fe37f7134ce2836ae4a886a2f65c = $this->env->getExtension("native_profiler");
        $__internal_b681381c55367870b019e7382c11a6da7220fe37f7134ce2836ae4a886a2f65c->enter($__internal_b681381c55367870b019e7382c11a6da7220fe37f7134ce2836ae4a886a2f65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b681381c55367870b019e7382c11a6da7220fe37f7134ce2836ae4a886a2f65c->leave($__internal_b681381c55367870b019e7382c11a6da7220fe37f7134ce2836ae4a886a2f65c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b05b08829ebe04dfadd619075e92cf7b0ef52f0281f6158792d10efd99dce79 = $this->env->getExtension("native_profiler");
        $__internal_7b05b08829ebe04dfadd619075e92cf7b0ef52f0281f6158792d10efd99dce79->enter($__internal_7b05b08829ebe04dfadd619075e92cf7b0ef52f0281f6158792d10efd99dce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7b05b08829ebe04dfadd619075e92cf7b0ef52f0281f6158792d10efd99dce79->leave($__internal_7b05b08829ebe04dfadd619075e92cf7b0ef52f0281f6158792d10efd99dce79_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
