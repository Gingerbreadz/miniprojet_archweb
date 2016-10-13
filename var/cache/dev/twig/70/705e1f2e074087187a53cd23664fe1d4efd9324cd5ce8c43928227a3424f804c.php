<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c43e5a1689b0d0b65395e9859f6ac4131858871eaca3254f53391a0ec6265f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6b2794c48b4f94b4e952c119eaa6e4dfec8cdba72eb6db3afbcae6a0e23967d = $this->env->getExtension("native_profiler");
        $__internal_c6b2794c48b4f94b4e952c119eaa6e4dfec8cdba72eb6db3afbcae6a0e23967d->enter($__internal_c6b2794c48b4f94b4e952c119eaa6e4dfec8cdba72eb6db3afbcae6a0e23967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c6b2794c48b4f94b4e952c119eaa6e4dfec8cdba72eb6db3afbcae6a0e23967d->leave($__internal_c6b2794c48b4f94b4e952c119eaa6e4dfec8cdba72eb6db3afbcae6a0e23967d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_db01e8ecd57d7162c60f3307ba1352afecd82e2d5b4a2fe9b2aafbcd25465587 = $this->env->getExtension("native_profiler");
        $__internal_db01e8ecd57d7162c60f3307ba1352afecd82e2d5b4a2fe9b2aafbcd25465587->enter($__internal_db01e8ecd57d7162c60f3307ba1352afecd82e2d5b4a2fe9b2aafbcd25465587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_db01e8ecd57d7162c60f3307ba1352afecd82e2d5b4a2fe9b2aafbcd25465587->leave($__internal_db01e8ecd57d7162c60f3307ba1352afecd82e2d5b4a2fe9b2aafbcd25465587_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d09d028d09d8267be7ca2ccb0d56d3dfc4aaf35aaf716b6cb98c5ac3ce69a225 = $this->env->getExtension("native_profiler");
        $__internal_d09d028d09d8267be7ca2ccb0d56d3dfc4aaf35aaf716b6cb98c5ac3ce69a225->enter($__internal_d09d028d09d8267be7ca2ccb0d56d3dfc4aaf35aaf716b6cb98c5ac3ce69a225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d09d028d09d8267be7ca2ccb0d56d3dfc4aaf35aaf716b6cb98c5ac3ce69a225->leave($__internal_d09d028d09d8267be7ca2ccb0d56d3dfc4aaf35aaf716b6cb98c5ac3ce69a225_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e0959f35430bf7f106e4657e842a419cfad7f94579e8affcfcd2f84e424a744 = $this->env->getExtension("native_profiler");
        $__internal_1e0959f35430bf7f106e4657e842a419cfad7f94579e8affcfcd2f84e424a744->enter($__internal_1e0959f35430bf7f106e4657e842a419cfad7f94579e8affcfcd2f84e424a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e0959f35430bf7f106e4657e842a419cfad7f94579e8affcfcd2f84e424a744->leave($__internal_1e0959f35430bf7f106e4657e842a419cfad7f94579e8affcfcd2f84e424a744_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
