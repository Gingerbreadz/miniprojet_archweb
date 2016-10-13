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
        $__internal_c6a929677ce26fc2bb39e22ea9eab3135d5dc0711ebd637b7dd0e18b193704a0 = $this->env->getExtension("native_profiler");
        $__internal_c6a929677ce26fc2bb39e22ea9eab3135d5dc0711ebd637b7dd0e18b193704a0->enter($__internal_c6a929677ce26fc2bb39e22ea9eab3135d5dc0711ebd637b7dd0e18b193704a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a929677ce26fc2bb39e22ea9eab3135d5dc0711ebd637b7dd0e18b193704a0->leave($__internal_c6a929677ce26fc2bb39e22ea9eab3135d5dc0711ebd637b7dd0e18b193704a0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73c80e7ff28b2da86247ded4b08d3d51e8ce7687c83bf757bfa41cd383112264 = $this->env->getExtension("native_profiler");
        $__internal_73c80e7ff28b2da86247ded4b08d3d51e8ce7687c83bf757bfa41cd383112264->enter($__internal_73c80e7ff28b2da86247ded4b08d3d51e8ce7687c83bf757bfa41cd383112264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_73c80e7ff28b2da86247ded4b08d3d51e8ce7687c83bf757bfa41cd383112264->leave($__internal_73c80e7ff28b2da86247ded4b08d3d51e8ce7687c83bf757bfa41cd383112264_prof);

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
