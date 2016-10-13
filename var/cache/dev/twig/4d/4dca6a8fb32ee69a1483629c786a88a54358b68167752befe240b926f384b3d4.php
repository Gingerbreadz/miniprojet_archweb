<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_614867586b9ea708a135ce36232189502481fe13553dc920521200afc3db2400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d17b9e1c566d3aeebdc903d47035759b4dc6b69b7f336e478a26f5e512e1161d = $this->env->getExtension("native_profiler");
        $__internal_d17b9e1c566d3aeebdc903d47035759b4dc6b69b7f336e478a26f5e512e1161d->enter($__internal_d17b9e1c566d3aeebdc903d47035759b4dc6b69b7f336e478a26f5e512e1161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17b9e1c566d3aeebdc903d47035759b4dc6b69b7f336e478a26f5e512e1161d->leave($__internal_d17b9e1c566d3aeebdc903d47035759b4dc6b69b7f336e478a26f5e512e1161d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_636fb4d890ef382fc67652fd85e492f91c2d434f0c430ab41c0a902bc0d30119 = $this->env->getExtension("native_profiler");
        $__internal_636fb4d890ef382fc67652fd85e492f91c2d434f0c430ab41c0a902bc0d30119->enter($__internal_636fb4d890ef382fc67652fd85e492f91c2d434f0c430ab41c0a902bc0d30119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_636fb4d890ef382fc67652fd85e492f91c2d434f0c430ab41c0a902bc0d30119->leave($__internal_636fb4d890ef382fc67652fd85e492f91c2d434f0c430ab41c0a902bc0d30119_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_476ee381d550de2c3f1924fb1b089380ec1ea375db4cc068f7ba19fbf53577f3 = $this->env->getExtension("native_profiler");
        $__internal_476ee381d550de2c3f1924fb1b089380ec1ea375db4cc068f7ba19fbf53577f3->enter($__internal_476ee381d550de2c3f1924fb1b089380ec1ea375db4cc068f7ba19fbf53577f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_476ee381d550de2c3f1924fb1b089380ec1ea375db4cc068f7ba19fbf53577f3->leave($__internal_476ee381d550de2c3f1924fb1b089380ec1ea375db4cc068f7ba19fbf53577f3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
