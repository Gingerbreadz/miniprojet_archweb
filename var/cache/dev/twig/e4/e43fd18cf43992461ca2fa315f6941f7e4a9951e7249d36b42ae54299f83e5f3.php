<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_44b7882dfdd3e700f41f22dbc0909f861d591510862c7db8635c02654eaa9daa extends Twig_Template
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
        $__internal_184e716357cac174d39c1254c79359fd0025bfef6fa80df52df7488de474be0e = $this->env->getExtension("native_profiler");
        $__internal_184e716357cac174d39c1254c79359fd0025bfef6fa80df52df7488de474be0e->enter($__internal_184e716357cac174d39c1254c79359fd0025bfef6fa80df52df7488de474be0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_184e716357cac174d39c1254c79359fd0025bfef6fa80df52df7488de474be0e->leave($__internal_184e716357cac174d39c1254c79359fd0025bfef6fa80df52df7488de474be0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
