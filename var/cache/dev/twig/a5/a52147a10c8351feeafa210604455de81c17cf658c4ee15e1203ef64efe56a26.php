<?php

/* base.html.twig */
class __TwigTemplate_e55a339a51112ec3e9aed2809c08796a5b7e73c9d0942a3677fe90b2e48afb2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30d24bdf373461210f7e3d2fbc101bdfa39fc76c2934221102bfe97f5b096937 = $this->env->getExtension("native_profiler");
        $__internal_30d24bdf373461210f7e3d2fbc101bdfa39fc76c2934221102bfe97f5b096937->enter($__internal_30d24bdf373461210f7e3d2fbc101bdfa39fc76c2934221102bfe97f5b096937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        
    \t<div class=\"container body-container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        </div>
    \t
        ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_30d24bdf373461210f7e3d2fbc101bdfa39fc76c2934221102bfe97f5b096937->leave($__internal_30d24bdf373461210f7e3d2fbc101bdfa39fc76c2934221102bfe97f5b096937_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6de78f04f3e083f04bfb31130af0d5d89f386983b12e6dbc70e8c6f0cb54447 = $this->env->getExtension("native_profiler");
        $__internal_e6de78f04f3e083f04bfb31130af0d5d89f386983b12e6dbc70e8c6f0cb54447->enter($__internal_e6de78f04f3e083f04bfb31130af0d5d89f386983b12e6dbc70e8c6f0cb54447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6de78f04f3e083f04bfb31130af0d5d89f386983b12e6dbc70e8c6f0cb54447->leave($__internal_e6de78f04f3e083f04bfb31130af0d5d89f386983b12e6dbc70e8c6f0cb54447_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bde2950eb0f7ca956e5a710d3d93ff8800ac7879f56224592a754e0973aab6b = $this->env->getExtension("native_profiler");
        $__internal_2bde2950eb0f7ca956e5a710d3d93ff8800ac7879f56224592a754e0973aab6b->enter($__internal_2bde2950eb0f7ca956e5a710d3d93ff8800ac7879f56224592a754e0973aab6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_2bde2950eb0f7ca956e5a710d3d93ff8800ac7879f56224592a754e0973aab6b->leave($__internal_2bde2950eb0f7ca956e5a710d3d93ff8800ac7879f56224592a754e0973aab6b_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_fa5270ad0d67be467ba1ed2015e4008aa2690e1559d1ad9607e0758c38998967 = $this->env->getExtension("native_profiler");
        $__internal_fa5270ad0d67be467ba1ed2015e4008aa2690e1559d1ad9607e0758c38998967->enter($__internal_fa5270ad0d67be467ba1ed2015e4008aa2690e1559d1ad9607e0758c38998967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_fa5270ad0d67be467ba1ed2015e4008aa2690e1559d1ad9607e0758c38998967->leave($__internal_fa5270ad0d67be467ba1ed2015e4008aa2690e1559d1ad9607e0758c38998967_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_00c5c065177cdd6848df25cd8dd158da60fb8e4674f0c9e5c66a15585a63c3a3 = $this->env->getExtension("native_profiler");
        $__internal_00c5c065177cdd6848df25cd8dd158da60fb8e4674f0c9e5c66a15585a63c3a3->enter($__internal_00c5c065177cdd6848df25cd8dd158da60fb8e4674f0c9e5c66a15585a63c3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 19
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 21
        $this->displayBlock('main', $context, $blocks);
        // line 22
        echo "                    </div>
                    
                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 25
        $this->displayBlock('sidebar', $context, $blocks);
        // line 26
        echo "                    </div>
            ";
        
        $__internal_00c5c065177cdd6848df25cd8dd158da60fb8e4674f0c9e5c66a15585a63c3a3->leave($__internal_00c5c065177cdd6848df25cd8dd158da60fb8e4674f0c9e5c66a15585a63c3a3_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_b134da10779e4d54b53c33fd8947903e0c65d482602023feae4f6f162394e8bd = $this->env->getExtension("native_profiler");
        $__internal_b134da10779e4d54b53c33fd8947903e0c65d482602023feae4f6f162394e8bd->enter($__internal_b134da10779e4d54b53c33fd8947903e0c65d482602023feae4f6f162394e8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b134da10779e4d54b53c33fd8947903e0c65d482602023feae4f6f162394e8bd->leave($__internal_b134da10779e4d54b53c33fd8947903e0c65d482602023feae4f6f162394e8bd_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_de49a7c6d96e6abf04fd6e93412d083aa28f59de329516093f4361a19ed8d75e = $this->env->getExtension("native_profiler");
        $__internal_de49a7c6d96e6abf04fd6e93412d083aa28f59de329516093f4361a19ed8d75e->enter($__internal_de49a7c6d96e6abf04fd6e93412d083aa28f59de329516093f4361a19ed8d75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_de49a7c6d96e6abf04fd6e93412d083aa28f59de329516093f4361a19ed8d75e->leave($__internal_de49a7c6d96e6abf04fd6e93412d083aa28f59de329516093f4361a19ed8d75e_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f5d2e03e95acbe6acd7b16764e635a2305c2e51f554a36e8085147cb1125bd50 = $this->env->getExtension("native_profiler");
        $__internal_f5d2e03e95acbe6acd7b16764e635a2305c2e51f554a36e8085147cb1125bd50->enter($__internal_f5d2e03e95acbe6acd7b16764e635a2305c2e51f554a36e8085147cb1125bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><p>FOOTER</p></footer>";
        
        $__internal_f5d2e03e95acbe6acd7b16764e635a2305c2e51f554a36e8085147cb1125bd50->leave($__internal_f5d2e03e95acbe6acd7b16764e635a2305c2e51f554a36e8085147cb1125bd50_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a34a5ea07c967e99bcff01709844d9d79ecda069047fd2d27fec66ad30d4210b = $this->env->getExtension("native_profiler");
        $__internal_a34a5ea07c967e99bcff01709844d9d79ecda069047fd2d27fec66ad30d4210b->enter($__internal_a34a5ea07c967e99bcff01709844d9d79ecda069047fd2d27fec66ad30d4210b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a34a5ea07c967e99bcff01709844d9d79ecda069047fd2d27fec66ad30d4210b->leave($__internal_a34a5ea07c967e99bcff01709844d9d79ecda069047fd2d27fec66ad30d4210b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 33,  189 => 32,  183 => 31,  171 => 30,  159 => 25,  148 => 21,  140 => 26,  138 => 25,  133 => 22,  131 => 21,  126 => 19,  122 => 17,  116 => 16,  104 => 13,  94 => 8,  88 => 7,  76 => 6,  67 => 35,  64 => 31,  62 => 30,  58 => 28,  56 => 16,  52 => 14,  50 => 13,  43 => 10,  41 => 7,  37 => 6,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     	{% block header %}<header><p>HEADER</p></header>{% endblock %}*/
/*         */
/*     	<div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/*                     */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}SIDEBAR{% endblock %}*/
/*                     </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     	*/
/*         {% block footer %}<footer><p>FOOTER</p></footer>{% endblock %}*/
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         	<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
