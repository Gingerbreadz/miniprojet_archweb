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
        $__internal_c1f23b3db67eedb92451f997bdfec0b11df2163610cf8ef01b5395ec842732e2 = $this->env->getExtension("native_profiler");
        $__internal_c1f23b3db67eedb92451f997bdfec0b11df2163610cf8ef01b5395ec842732e2->enter($__internal_c1f23b3db67eedb92451f997bdfec0b11df2163610cf8ef01b5395ec842732e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c1f23b3db67eedb92451f997bdfec0b11df2163610cf8ef01b5395ec842732e2->leave($__internal_c1f23b3db67eedb92451f997bdfec0b11df2163610cf8ef01b5395ec842732e2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_95e49c4623b814d92f5ace3c8c7d4544f172d9bec9cf259abd34f342b680c723 = $this->env->getExtension("native_profiler");
        $__internal_95e49c4623b814d92f5ace3c8c7d4544f172d9bec9cf259abd34f342b680c723->enter($__internal_95e49c4623b814d92f5ace3c8c7d4544f172d9bec9cf259abd34f342b680c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_95e49c4623b814d92f5ace3c8c7d4544f172d9bec9cf259abd34f342b680c723->leave($__internal_95e49c4623b814d92f5ace3c8c7d4544f172d9bec9cf259abd34f342b680c723_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_799a33ae12475d797761d5ca6e0a0a5bb3899fe8e4ef6b71bbece66730bbcb01 = $this->env->getExtension("native_profiler");
        $__internal_799a33ae12475d797761d5ca6e0a0a5bb3899fe8e4ef6b71bbece66730bbcb01->enter($__internal_799a33ae12475d797761d5ca6e0a0a5bb3899fe8e4ef6b71bbece66730bbcb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_799a33ae12475d797761d5ca6e0a0a5bb3899fe8e4ef6b71bbece66730bbcb01->leave($__internal_799a33ae12475d797761d5ca6e0a0a5bb3899fe8e4ef6b71bbece66730bbcb01_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e4932d970ac0c6a3d706b5996dc4421db7ea45c72648a4c49f91f02e129a23c8 = $this->env->getExtension("native_profiler");
        $__internal_e4932d970ac0c6a3d706b5996dc4421db7ea45c72648a4c49f91f02e129a23c8->enter($__internal_e4932d970ac0c6a3d706b5996dc4421db7ea45c72648a4c49f91f02e129a23c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e4932d970ac0c6a3d706b5996dc4421db7ea45c72648a4c49f91f02e129a23c8->leave($__internal_e4932d970ac0c6a3d706b5996dc4421db7ea45c72648a4c49f91f02e129a23c8_prof);

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
