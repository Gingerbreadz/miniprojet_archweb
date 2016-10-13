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
        $__internal_423f3cbbee7db82c2b0b0d23471ad6d89f7fab7d37a2e0d2b06588d657a24b40 = $this->env->getExtension("native_profiler");
        $__internal_423f3cbbee7db82c2b0b0d23471ad6d89f7fab7d37a2e0d2b06588d657a24b40->enter($__internal_423f3cbbee7db82c2b0b0d23471ad6d89f7fab7d37a2e0d2b06588d657a24b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423f3cbbee7db82c2b0b0d23471ad6d89f7fab7d37a2e0d2b06588d657a24b40->leave($__internal_423f3cbbee7db82c2b0b0d23471ad6d89f7fab7d37a2e0d2b06588d657a24b40_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98140e710eb7ea63cc9e699529dfddcc61b882ff718cf57905c9aa1a6150945f = $this->env->getExtension("native_profiler");
        $__internal_98140e710eb7ea63cc9e699529dfddcc61b882ff718cf57905c9aa1a6150945f->enter($__internal_98140e710eb7ea63cc9e699529dfddcc61b882ff718cf57905c9aa1a6150945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_98140e710eb7ea63cc9e699529dfddcc61b882ff718cf57905c9aa1a6150945f->leave($__internal_98140e710eb7ea63cc9e699529dfddcc61b882ff718cf57905c9aa1a6150945f_prof);

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
