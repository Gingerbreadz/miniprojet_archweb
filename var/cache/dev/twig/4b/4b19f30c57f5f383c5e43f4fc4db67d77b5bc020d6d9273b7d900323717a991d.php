<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_70db2ba74c15d5690186f3a869c904cfbf434e0651218f26f3fc08d89b8f2b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d9701e963516e5346c5c457a6e6c22e849dc19902732b526a1b639db6de2da09 = $this->env->getExtension("native_profiler");
        $__internal_d9701e963516e5346c5c457a6e6c22e849dc19902732b526a1b639db6de2da09->enter($__internal_d9701e963516e5346c5c457a6e6c22e849dc19902732b526a1b639db6de2da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9701e963516e5346c5c457a6e6c22e849dc19902732b526a1b639db6de2da09->leave($__internal_d9701e963516e5346c5c457a6e6c22e849dc19902732b526a1b639db6de2da09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_876ced512713db456cb93a5a119debe23b2e6dfbdf43569478201eb85cea70cf = $this->env->getExtension("native_profiler");
        $__internal_876ced512713db456cb93a5a119debe23b2e6dfbdf43569478201eb85cea70cf->enter($__internal_876ced512713db456cb93a5a119debe23b2e6dfbdf43569478201eb85cea70cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_876ced512713db456cb93a5a119debe23b2e6dfbdf43569478201eb85cea70cf->leave($__internal_876ced512713db456cb93a5a119debe23b2e6dfbdf43569478201eb85cea70cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
