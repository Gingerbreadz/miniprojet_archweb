<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_55b5e0219fb187e48365bcdb93cff426cb18c9553510a2eb428a596dfc1093fa extends Twig_Template
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
        $__internal_308a32479daab673994ceab4ede34ba512a6fe13bd26f9d40a1ca276b079ace4 = $this->env->getExtension("native_profiler");
        $__internal_308a32479daab673994ceab4ede34ba512a6fe13bd26f9d40a1ca276b079ace4->enter($__internal_308a32479daab673994ceab4ede34ba512a6fe13bd26f9d40a1ca276b079ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_308a32479daab673994ceab4ede34ba512a6fe13bd26f9d40a1ca276b079ace4->leave($__internal_308a32479daab673994ceab4ede34ba512a6fe13bd26f9d40a1ca276b079ace4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
