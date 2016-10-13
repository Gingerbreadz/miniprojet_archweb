<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ba84dfe4bb88a5d9fb748889173f7ee77ae8f1f420cd981df9e566eaf05ff50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0957e2f9135dc9850d621142cd21f8ebc6d35d7d6b2e41787e962d810fad5862 = $this->env->getExtension("native_profiler");
        $__internal_0957e2f9135dc9850d621142cd21f8ebc6d35d7d6b2e41787e962d810fad5862->enter($__internal_0957e2f9135dc9850d621142cd21f8ebc6d35d7d6b2e41787e962d810fad5862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0957e2f9135dc9850d621142cd21f8ebc6d35d7d6b2e41787e962d810fad5862->leave($__internal_0957e2f9135dc9850d621142cd21f8ebc6d35d7d6b2e41787e962d810fad5862_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ae22327144774435cd1dc2da30d50c8654ff86ad4807a45019febeec4398d37 = $this->env->getExtension("native_profiler");
        $__internal_0ae22327144774435cd1dc2da30d50c8654ff86ad4807a45019febeec4398d37->enter($__internal_0ae22327144774435cd1dc2da30d50c8654ff86ad4807a45019febeec4398d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ae22327144774435cd1dc2da30d50c8654ff86ad4807a45019febeec4398d37->leave($__internal_0ae22327144774435cd1dc2da30d50c8654ff86ad4807a45019febeec4398d37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8661de8639ecc99fb02012ff13b631eac46ebef420cca75564b3d7c2f21a61c = $this->env->getExtension("native_profiler");
        $__internal_f8661de8639ecc99fb02012ff13b631eac46ebef420cca75564b3d7c2f21a61c->enter($__internal_f8661de8639ecc99fb02012ff13b631eac46ebef420cca75564b3d7c2f21a61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8661de8639ecc99fb02012ff13b631eac46ebef420cca75564b3d7c2f21a61c->leave($__internal_f8661de8639ecc99fb02012ff13b631eac46ebef420cca75564b3d7c2f21a61c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f31566bebbf7e1e290d6dce35e4029542c64b87e6dff6902bac8fd66c1e5bc84 = $this->env->getExtension("native_profiler");
        $__internal_f31566bebbf7e1e290d6dce35e4029542c64b87e6dff6902bac8fd66c1e5bc84->enter($__internal_f31566bebbf7e1e290d6dce35e4029542c64b87e6dff6902bac8fd66c1e5bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f31566bebbf7e1e290d6dce35e4029542c64b87e6dff6902bac8fd66c1e5bc84->leave($__internal_f31566bebbf7e1e290d6dce35e4029542c64b87e6dff6902bac8fd66c1e5bc84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
