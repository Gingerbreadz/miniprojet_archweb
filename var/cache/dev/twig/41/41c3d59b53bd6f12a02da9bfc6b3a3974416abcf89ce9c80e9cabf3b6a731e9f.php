<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ccb6d3941d6d39187d419946d4ce602100dc1432d8b87291ecce2f92e434b39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7c3fc977653217fd5ae605c867f06d41eae74547c7dd24d70da30bb0e1a51ce = $this->env->getExtension("native_profiler");
        $__internal_f7c3fc977653217fd5ae605c867f06d41eae74547c7dd24d70da30bb0e1a51ce->enter($__internal_f7c3fc977653217fd5ae605c867f06d41eae74547c7dd24d70da30bb0e1a51ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c3fc977653217fd5ae605c867f06d41eae74547c7dd24d70da30bb0e1a51ce->leave($__internal_f7c3fc977653217fd5ae605c867f06d41eae74547c7dd24d70da30bb0e1a51ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_acf893744e967057bf599c845992d41fe7d6fa3e2922dd44575e067bf7be6475 = $this->env->getExtension("native_profiler");
        $__internal_acf893744e967057bf599c845992d41fe7d6fa3e2922dd44575e067bf7be6475->enter($__internal_acf893744e967057bf599c845992d41fe7d6fa3e2922dd44575e067bf7be6475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_acf893744e967057bf599c845992d41fe7d6fa3e2922dd44575e067bf7be6475->leave($__internal_acf893744e967057bf599c845992d41fe7d6fa3e2922dd44575e067bf7be6475_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45bf34eeb39e18974c3b3620d61ba7373a59ea012e6a75682878be9b47928fb7 = $this->env->getExtension("native_profiler");
        $__internal_45bf34eeb39e18974c3b3620d61ba7373a59ea012e6a75682878be9b47928fb7->enter($__internal_45bf34eeb39e18974c3b3620d61ba7373a59ea012e6a75682878be9b47928fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45bf34eeb39e18974c3b3620d61ba7373a59ea012e6a75682878be9b47928fb7->leave($__internal_45bf34eeb39e18974c3b3620d61ba7373a59ea012e6a75682878be9b47928fb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0177d931b617c551fdbb669cb0e506117141517bfe2406e9865d90d8855e37c = $this->env->getExtension("native_profiler");
        $__internal_c0177d931b617c551fdbb669cb0e506117141517bfe2406e9865d90d8855e37c->enter($__internal_c0177d931b617c551fdbb669cb0e506117141517bfe2406e9865d90d8855e37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0177d931b617c551fdbb669cb0e506117141517bfe2406e9865d90d8855e37c->leave($__internal_c0177d931b617c551fdbb669cb0e506117141517bfe2406e9865d90d8855e37c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
