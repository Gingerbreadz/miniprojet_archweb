<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c66c4a741512c0e91df75ca0d2b2680f3d475b68b4ddfe7d63975b143396f998 extends Twig_Template
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
        $__internal_afb76d2943542b8e09c3aadad0d5d68bc898025c82fa9a66ba7988701f36dd27 = $this->env->getExtension("native_profiler");
        $__internal_afb76d2943542b8e09c3aadad0d5d68bc898025c82fa9a66ba7988701f36dd27->enter($__internal_afb76d2943542b8e09c3aadad0d5d68bc898025c82fa9a66ba7988701f36dd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_afb76d2943542b8e09c3aadad0d5d68bc898025c82fa9a66ba7988701f36dd27->leave($__internal_afb76d2943542b8e09c3aadad0d5d68bc898025c82fa9a66ba7988701f36dd27_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f5fd69fd49abc69ba54fe9ef0b6d5fcdd89a27d3443a99b36e8fb15f3e37074 = $this->env->getExtension("native_profiler");
        $__internal_9f5fd69fd49abc69ba54fe9ef0b6d5fcdd89a27d3443a99b36e8fb15f3e37074->enter($__internal_9f5fd69fd49abc69ba54fe9ef0b6d5fcdd89a27d3443a99b36e8fb15f3e37074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f5fd69fd49abc69ba54fe9ef0b6d5fcdd89a27d3443a99b36e8fb15f3e37074->leave($__internal_9f5fd69fd49abc69ba54fe9ef0b6d5fcdd89a27d3443a99b36e8fb15f3e37074_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6461f7e0654bcea1e1f65ab09a2655efb05167bc561d30e95d605f6e18bad7fb = $this->env->getExtension("native_profiler");
        $__internal_6461f7e0654bcea1e1f65ab09a2655efb05167bc561d30e95d605f6e18bad7fb->enter($__internal_6461f7e0654bcea1e1f65ab09a2655efb05167bc561d30e95d605f6e18bad7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6461f7e0654bcea1e1f65ab09a2655efb05167bc561d30e95d605f6e18bad7fb->leave($__internal_6461f7e0654bcea1e1f65ab09a2655efb05167bc561d30e95d605f6e18bad7fb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6856b78f00f353603aff2f2a918c3fb4c30edd674420a9f4f296a72313feb00e = $this->env->getExtension("native_profiler");
        $__internal_6856b78f00f353603aff2f2a918c3fb4c30edd674420a9f4f296a72313feb00e->enter($__internal_6856b78f00f353603aff2f2a918c3fb4c30edd674420a9f4f296a72313feb00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6856b78f00f353603aff2f2a918c3fb4c30edd674420a9f4f296a72313feb00e->leave($__internal_6856b78f00f353603aff2f2a918c3fb4c30edd674420a9f4f296a72313feb00e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
