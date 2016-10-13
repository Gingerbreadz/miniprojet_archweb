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
        $__internal_8284590f1c455f456e24ce6527968afddc845a74d32a0c2397a0db9fe705f3d7 = $this->env->getExtension("native_profiler");
        $__internal_8284590f1c455f456e24ce6527968afddc845a74d32a0c2397a0db9fe705f3d7->enter($__internal_8284590f1c455f456e24ce6527968afddc845a74d32a0c2397a0db9fe705f3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8284590f1c455f456e24ce6527968afddc845a74d32a0c2397a0db9fe705f3d7->leave($__internal_8284590f1c455f456e24ce6527968afddc845a74d32a0c2397a0db9fe705f3d7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cda1f7094f533c6f44ab0088c718a0b39238319b7e0657f9fc96ecb2a5c5acf6 = $this->env->getExtension("native_profiler");
        $__internal_cda1f7094f533c6f44ab0088c718a0b39238319b7e0657f9fc96ecb2a5c5acf6->enter($__internal_cda1f7094f533c6f44ab0088c718a0b39238319b7e0657f9fc96ecb2a5c5acf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cda1f7094f533c6f44ab0088c718a0b39238319b7e0657f9fc96ecb2a5c5acf6->leave($__internal_cda1f7094f533c6f44ab0088c718a0b39238319b7e0657f9fc96ecb2a5c5acf6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_437aec31b3c61be93aed92c92c4d3834a810b2a20cd27ccc8388d2f476450065 = $this->env->getExtension("native_profiler");
        $__internal_437aec31b3c61be93aed92c92c4d3834a810b2a20cd27ccc8388d2f476450065->enter($__internal_437aec31b3c61be93aed92c92c4d3834a810b2a20cd27ccc8388d2f476450065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_437aec31b3c61be93aed92c92c4d3834a810b2a20cd27ccc8388d2f476450065->leave($__internal_437aec31b3c61be93aed92c92c4d3834a810b2a20cd27ccc8388d2f476450065_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2137903f433193b28b5cf21aabfda14177ac96e100a74fb568b417c9f20da3cf = $this->env->getExtension("native_profiler");
        $__internal_2137903f433193b28b5cf21aabfda14177ac96e100a74fb568b417c9f20da3cf->enter($__internal_2137903f433193b28b5cf21aabfda14177ac96e100a74fb568b417c9f20da3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2137903f433193b28b5cf21aabfda14177ac96e100a74fb568b417c9f20da3cf->leave($__internal_2137903f433193b28b5cf21aabfda14177ac96e100a74fb568b417c9f20da3cf_prof);

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
