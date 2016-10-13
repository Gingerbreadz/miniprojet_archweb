<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ccb6d3941d6d39187d419946d4ce602100dc1432d8b87291ecce2f92e434b39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_c6701983ceae8690ece88311da34135b6b9a8aefc0d1e8ca91f1ba1f1c36bf26 = $this->env->getExtension("native_profiler");
        $__internal_c6701983ceae8690ece88311da34135b6b9a8aefc0d1e8ca91f1ba1f1c36bf26->enter($__internal_c6701983ceae8690ece88311da34135b6b9a8aefc0d1e8ca91f1ba1f1c36bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6701983ceae8690ece88311da34135b6b9a8aefc0d1e8ca91f1ba1f1c36bf26->leave($__internal_c6701983ceae8690ece88311da34135b6b9a8aefc0d1e8ca91f1ba1f1c36bf26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b4583d184c23881aa4e02d853c54fba8261b040bdb15d74aca3cc4c34c8203c = $this->env->getExtension("native_profiler");
        $__internal_7b4583d184c23881aa4e02d853c54fba8261b040bdb15d74aca3cc4c34c8203c->enter($__internal_7b4583d184c23881aa4e02d853c54fba8261b040bdb15d74aca3cc4c34c8203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b4583d184c23881aa4e02d853c54fba8261b040bdb15d74aca3cc4c34c8203c->leave($__internal_7b4583d184c23881aa4e02d853c54fba8261b040bdb15d74aca3cc4c34c8203c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72485c5ba6d56c6255212c0ca24dcae466319b5731f4da7f12055a4806964395 = $this->env->getExtension("native_profiler");
        $__internal_72485c5ba6d56c6255212c0ca24dcae466319b5731f4da7f12055a4806964395->enter($__internal_72485c5ba6d56c6255212c0ca24dcae466319b5731f4da7f12055a4806964395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72485c5ba6d56c6255212c0ca24dcae466319b5731f4da7f12055a4806964395->leave($__internal_72485c5ba6d56c6255212c0ca24dcae466319b5731f4da7f12055a4806964395_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c94ceac2c8848029a82147065657f288b16d44ea4ec9e4e53044c64be9253c82 = $this->env->getExtension("native_profiler");
        $__internal_c94ceac2c8848029a82147065657f288b16d44ea4ec9e4e53044c64be9253c82->enter($__internal_c94ceac2c8848029a82147065657f288b16d44ea4ec9e4e53044c64be9253c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c94ceac2c8848029a82147065657f288b16d44ea4ec9e4e53044c64be9253c82->leave($__internal_c94ceac2c8848029a82147065657f288b16d44ea4ec9e4e53044c64be9253c82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
