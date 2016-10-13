<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ba84dfe4bb88a5d9fb748889173f7ee77ae8f1f420cd981df9e566eaf05ff50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_5640f84f406ade96db55d01e93f04ccab60249947fa2c092060f21bbb965b499 = $this->env->getExtension("native_profiler");
        $__internal_5640f84f406ade96db55d01e93f04ccab60249947fa2c092060f21bbb965b499->enter($__internal_5640f84f406ade96db55d01e93f04ccab60249947fa2c092060f21bbb965b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5640f84f406ade96db55d01e93f04ccab60249947fa2c092060f21bbb965b499->leave($__internal_5640f84f406ade96db55d01e93f04ccab60249947fa2c092060f21bbb965b499_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c731ef7a11c6de376a227ea6179641d392ce30443646fcad2fac0fac0f67a84 = $this->env->getExtension("native_profiler");
        $__internal_1c731ef7a11c6de376a227ea6179641d392ce30443646fcad2fac0fac0f67a84->enter($__internal_1c731ef7a11c6de376a227ea6179641d392ce30443646fcad2fac0fac0f67a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c731ef7a11c6de376a227ea6179641d392ce30443646fcad2fac0fac0f67a84->leave($__internal_1c731ef7a11c6de376a227ea6179641d392ce30443646fcad2fac0fac0f67a84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b883a706f9b2204249d3ba8ed2f526d7976fb6a11be55629707943b7617cb5d = $this->env->getExtension("native_profiler");
        $__internal_0b883a706f9b2204249d3ba8ed2f526d7976fb6a11be55629707943b7617cb5d->enter($__internal_0b883a706f9b2204249d3ba8ed2f526d7976fb6a11be55629707943b7617cb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b883a706f9b2204249d3ba8ed2f526d7976fb6a11be55629707943b7617cb5d->leave($__internal_0b883a706f9b2204249d3ba8ed2f526d7976fb6a11be55629707943b7617cb5d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d293e7c9d6265f5681fefb5d5a8fe112abf4b2177a736de9fc0c90de004ed32 = $this->env->getExtension("native_profiler");
        $__internal_2d293e7c9d6265f5681fefb5d5a8fe112abf4b2177a736de9fc0c90de004ed32->enter($__internal_2d293e7c9d6265f5681fefb5d5a8fe112abf4b2177a736de9fc0c90de004ed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2d293e7c9d6265f5681fefb5d5a8fe112abf4b2177a736de9fc0c90de004ed32->leave($__internal_2d293e7c9d6265f5681fefb5d5a8fe112abf4b2177a736de9fc0c90de004ed32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
