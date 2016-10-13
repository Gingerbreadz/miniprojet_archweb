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
        $__internal_6fd650398400d27b5e2622e97a55173cfa22ed3fa54c754de0711455ae799f9d = $this->env->getExtension("native_profiler");
        $__internal_6fd650398400d27b5e2622e97a55173cfa22ed3fa54c754de0711455ae799f9d->enter($__internal_6fd650398400d27b5e2622e97a55173cfa22ed3fa54c754de0711455ae799f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6fd650398400d27b5e2622e97a55173cfa22ed3fa54c754de0711455ae799f9d->leave($__internal_6fd650398400d27b5e2622e97a55173cfa22ed3fa54c754de0711455ae799f9d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20538c4f32eef8cc3c68f772813eb287fce6fb009ba684dc047b3d65b7e56d07 = $this->env->getExtension("native_profiler");
        $__internal_20538c4f32eef8cc3c68f772813eb287fce6fb009ba684dc047b3d65b7e56d07->enter($__internal_20538c4f32eef8cc3c68f772813eb287fce6fb009ba684dc047b3d65b7e56d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_20538c4f32eef8cc3c68f772813eb287fce6fb009ba684dc047b3d65b7e56d07->leave($__internal_20538c4f32eef8cc3c68f772813eb287fce6fb009ba684dc047b3d65b7e56d07_prof);

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
