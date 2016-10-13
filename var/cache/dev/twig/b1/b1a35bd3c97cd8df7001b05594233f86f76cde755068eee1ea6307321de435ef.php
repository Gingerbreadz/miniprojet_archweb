<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_1c1f37a7e7aaf4538731b855cfca5f6da1de89b6854745485796182e94b28bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_671d95cfcb8f75c1132745c8c3f6d093d081585737e67b276541294b6f044d6f = $this->env->getExtension("native_profiler");
        $__internal_671d95cfcb8f75c1132745c8c3f6d093d081585737e67b276541294b6f044d6f->enter($__internal_671d95cfcb8f75c1132745c8c3f6d093d081585737e67b276541294b6f044d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_671d95cfcb8f75c1132745c8c3f6d093d081585737e67b276541294b6f044d6f->leave($__internal_671d95cfcb8f75c1132745c8c3f6d093d081585737e67b276541294b6f044d6f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d2191c9a1604fcf14d58db083cf72bfb37872510477da4b41e25ce7ca4d40a5 = $this->env->getExtension("native_profiler");
        $__internal_9d2191c9a1604fcf14d58db083cf72bfb37872510477da4b41e25ce7ca4d40a5->enter($__internal_9d2191c9a1604fcf14d58db083cf72bfb37872510477da4b41e25ce7ca4d40a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9d2191c9a1604fcf14d58db083cf72bfb37872510477da4b41e25ce7ca4d40a5->leave($__internal_9d2191c9a1604fcf14d58db083cf72bfb37872510477da4b41e25ce7ca4d40a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
