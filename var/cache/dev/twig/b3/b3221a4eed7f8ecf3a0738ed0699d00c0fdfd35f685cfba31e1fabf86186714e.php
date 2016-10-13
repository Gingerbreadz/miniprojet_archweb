<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfe1e1deea2abd4a55f260867a0ed0392141dbb1bd75d1028cd7fbfcb855df01 extends Twig_Template
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
        $__internal_22483ee2387d54f6e0aaa20be506cfb6f0d265c0a29ffe16974ab442370139f9 = $this->env->getExtension("native_profiler");
        $__internal_22483ee2387d54f6e0aaa20be506cfb6f0d265c0a29ffe16974ab442370139f9->enter($__internal_22483ee2387d54f6e0aaa20be506cfb6f0d265c0a29ffe16974ab442370139f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_22483ee2387d54f6e0aaa20be506cfb6f0d265c0a29ffe16974ab442370139f9->leave($__internal_22483ee2387d54f6e0aaa20be506cfb6f0d265c0a29ffe16974ab442370139f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
