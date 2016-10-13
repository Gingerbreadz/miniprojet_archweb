<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_834f9fd419149c7b77b5b234b5245edcba2783b084194d37b0a5469e0850e494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66c87eec8ac1d82d1cc6282a5261e6556024cb3ccd5725e2a2137db1b9685fea = $this->env->getExtension("native_profiler");
        $__internal_66c87eec8ac1d82d1cc6282a5261e6556024cb3ccd5725e2a2137db1b9685fea->enter($__internal_66c87eec8ac1d82d1cc6282a5261e6556024cb3ccd5725e2a2137db1b9685fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c87eec8ac1d82d1cc6282a5261e6556024cb3ccd5725e2a2137db1b9685fea->leave($__internal_66c87eec8ac1d82d1cc6282a5261e6556024cb3ccd5725e2a2137db1b9685fea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af349582685815bcbd4f388a58cb2db0550cd81d2858ae1c4c7fa26ba7a66bc9 = $this->env->getExtension("native_profiler");
        $__internal_af349582685815bcbd4f388a58cb2db0550cd81d2858ae1c4c7fa26ba7a66bc9->enter($__internal_af349582685815bcbd4f388a58cb2db0550cd81d2858ae1c4c7fa26ba7a66bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_af349582685815bcbd4f388a58cb2db0550cd81d2858ae1c4c7fa26ba7a66bc9->leave($__internal_af349582685815bcbd4f388a58cb2db0550cd81d2858ae1c4c7fa26ba7a66bc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
