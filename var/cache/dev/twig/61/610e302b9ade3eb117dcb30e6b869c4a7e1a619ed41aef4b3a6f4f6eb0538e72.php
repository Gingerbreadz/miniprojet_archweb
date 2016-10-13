<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4a4d49fe7ac7978d9279398f619419e82b673e0c17c0caba74d9f47deadfc503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_41619b283cfd844af2069f813b4e0dbd743f92a71d3eb809d864ac671407ffa8 = $this->env->getExtension("native_profiler");
        $__internal_41619b283cfd844af2069f813b4e0dbd743f92a71d3eb809d864ac671407ffa8->enter($__internal_41619b283cfd844af2069f813b4e0dbd743f92a71d3eb809d864ac671407ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41619b283cfd844af2069f813b4e0dbd743f92a71d3eb809d864ac671407ffa8->leave($__internal_41619b283cfd844af2069f813b4e0dbd743f92a71d3eb809d864ac671407ffa8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_267099229a44902dea4d2b11980830463eca45327ef9b8758ce11c841c9d7787 = $this->env->getExtension("native_profiler");
        $__internal_267099229a44902dea4d2b11980830463eca45327ef9b8758ce11c841c9d7787->enter($__internal_267099229a44902dea4d2b11980830463eca45327ef9b8758ce11c841c9d7787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_267099229a44902dea4d2b11980830463eca45327ef9b8758ce11c841c9d7787->leave($__internal_267099229a44902dea4d2b11980830463eca45327ef9b8758ce11c841c9d7787_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
