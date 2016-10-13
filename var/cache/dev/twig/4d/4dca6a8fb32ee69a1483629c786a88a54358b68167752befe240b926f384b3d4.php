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
        $__internal_3a3f3269f0163d68bcfe40037cb23316c292e5f59f7797655a991ff6d3ba4aae = $this->env->getExtension("native_profiler");
        $__internal_3a3f3269f0163d68bcfe40037cb23316c292e5f59f7797655a991ff6d3ba4aae->enter($__internal_3a3f3269f0163d68bcfe40037cb23316c292e5f59f7797655a991ff6d3ba4aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3f3269f0163d68bcfe40037cb23316c292e5f59f7797655a991ff6d3ba4aae->leave($__internal_3a3f3269f0163d68bcfe40037cb23316c292e5f59f7797655a991ff6d3ba4aae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c82d9a1120ce4429f02596280df3df6c6303dbc7495272b0e022ad5798ea323 = $this->env->getExtension("native_profiler");
        $__internal_5c82d9a1120ce4429f02596280df3df6c6303dbc7495272b0e022ad5798ea323->enter($__internal_5c82d9a1120ce4429f02596280df3df6c6303dbc7495272b0e022ad5798ea323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c82d9a1120ce4429f02596280df3df6c6303dbc7495272b0e022ad5798ea323->leave($__internal_5c82d9a1120ce4429f02596280df3df6c6303dbc7495272b0e022ad5798ea323_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8baa230dcc79425c6129914723053418ef5c8d8f97158f0ad96f82e1b76362 = $this->env->getExtension("native_profiler");
        $__internal_9c8baa230dcc79425c6129914723053418ef5c8d8f97158f0ad96f82e1b76362->enter($__internal_9c8baa230dcc79425c6129914723053418ef5c8d8f97158f0ad96f82e1b76362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c8baa230dcc79425c6129914723053418ef5c8d8f97158f0ad96f82e1b76362->leave($__internal_9c8baa230dcc79425c6129914723053418ef5c8d8f97158f0ad96f82e1b76362_prof);

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
