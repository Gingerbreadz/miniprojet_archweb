<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c7161cdd596177a9a83a12f1dacce0e842c8f0d38b4bb9dd94469e17b4e3bc2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f79035bf273e2c87e750bdb96facac083818dbb6cd6714620cc9ef16d1881b3b = $this->env->getExtension("native_profiler");
        $__internal_f79035bf273e2c87e750bdb96facac083818dbb6cd6714620cc9ef16d1881b3b->enter($__internal_f79035bf273e2c87e750bdb96facac083818dbb6cd6714620cc9ef16d1881b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f79035bf273e2c87e750bdb96facac083818dbb6cd6714620cc9ef16d1881b3b->leave($__internal_f79035bf273e2c87e750bdb96facac083818dbb6cd6714620cc9ef16d1881b3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
