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
        $__internal_51ddc826d3217dde09c963fffa06351cf872e032e0f8874f6a86973d2ccadbaf = $this->env->getExtension("native_profiler");
        $__internal_51ddc826d3217dde09c963fffa06351cf872e032e0f8874f6a86973d2ccadbaf->enter($__internal_51ddc826d3217dde09c963fffa06351cf872e032e0f8874f6a86973d2ccadbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_51ddc826d3217dde09c963fffa06351cf872e032e0f8874f6a86973d2ccadbaf->leave($__internal_51ddc826d3217dde09c963fffa06351cf872e032e0f8874f6a86973d2ccadbaf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c54b0cb5963bf1e7af9826eb5def9f9a20d5f5180d67767c69f92de91c78ab38 = $this->env->getExtension("native_profiler");
        $__internal_c54b0cb5963bf1e7af9826eb5def9f9a20d5f5180d67767c69f92de91c78ab38->enter($__internal_c54b0cb5963bf1e7af9826eb5def9f9a20d5f5180d67767c69f92de91c78ab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c54b0cb5963bf1e7af9826eb5def9f9a20d5f5180d67767c69f92de91c78ab38->leave($__internal_c54b0cb5963bf1e7af9826eb5def9f9a20d5f5180d67767c69f92de91c78ab38_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2127f959b6ede4d1b4af1465a7e276e8395a6ea05c8054a46433e02916545df9 = $this->env->getExtension("native_profiler");
        $__internal_2127f959b6ede4d1b4af1465a7e276e8395a6ea05c8054a46433e02916545df9->enter($__internal_2127f959b6ede4d1b4af1465a7e276e8395a6ea05c8054a46433e02916545df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_2127f959b6ede4d1b4af1465a7e276e8395a6ea05c8054a46433e02916545df9->leave($__internal_2127f959b6ede4d1b4af1465a7e276e8395a6ea05c8054a46433e02916545df9_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_c3db04e3715877944f98d1493e4f052edcd91f6f059a74734efbd8c4cbab8398 = $this->env->getExtension("native_profiler");
        $__internal_c3db04e3715877944f98d1493e4f052edcd91f6f059a74734efbd8c4cbab8398->enter($__internal_c3db04e3715877944f98d1493e4f052edcd91f6f059a74734efbd8c4cbab8398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_c3db04e3715877944f98d1493e4f052edcd91f6f059a74734efbd8c4cbab8398->leave($__internal_c3db04e3715877944f98d1493e4f052edcd91f6f059a74734efbd8c4cbab8398_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e16b0a02f1a6eb032fb98df3e620ee4309cec41b29baf974d4da3607eb6fa5c = $this->env->getExtension("native_profiler");
        $__internal_2e16b0a02f1a6eb032fb98df3e620ee4309cec41b29baf974d4da3607eb6fa5c->enter($__internal_2e16b0a02f1a6eb032fb98df3e620ee4309cec41b29baf974d4da3607eb6fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e16b0a02f1a6eb032fb98df3e620ee4309cec41b29baf974d4da3607eb6fa5c->leave($__internal_2e16b0a02f1a6eb032fb98df3e620ee4309cec41b29baf974d4da3607eb6fa5c_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_c79e14a46dbf3d8a18d46d6d3cd7ca7bf349065adc2fd9cc809448a2dae6ce4b = $this->env->getExtension("native_profiler");
        $__internal_c79e14a46dbf3d8a18d46d6d3cd7ca7bf349065adc2fd9cc809448a2dae6ce4b->enter($__internal_c79e14a46dbf3d8a18d46d6d3cd7ca7bf349065adc2fd9cc809448a2dae6ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_c79e14a46dbf3d8a18d46d6d3cd7ca7bf349065adc2fd9cc809448a2dae6ce4b->leave($__internal_c79e14a46dbf3d8a18d46d6d3cd7ca7bf349065adc2fd9cc809448a2dae6ce4b_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0c8280cf095d101da6d4c15e88367892307eb50bb6ce04309062e17500522dba = $this->env->getExtension("native_profiler");
        $__internal_0c8280cf095d101da6d4c15e88367892307eb50bb6ce04309062e17500522dba->enter($__internal_0c8280cf095d101da6d4c15e88367892307eb50bb6ce04309062e17500522dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_0c8280cf095d101da6d4c15e88367892307eb50bb6ce04309062e17500522dba->leave($__internal_0c8280cf095d101da6d4c15e88367892307eb50bb6ce04309062e17500522dba_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_404100146089b49c0ce246892e79a1fa119363b28f5d61f7219817538865a83f = $this->env->getExtension("native_profiler");
        $__internal_404100146089b49c0ce246892e79a1fa119363b28f5d61f7219817538865a83f->enter($__internal_404100146089b49c0ce246892e79a1fa119363b28f5d61f7219817538865a83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><p>FOOTER</p></footer>";
        
        $__internal_404100146089b49c0ce246892e79a1fa119363b28f5d61f7219817538865a83f->leave($__internal_404100146089b49c0ce246892e79a1fa119363b28f5d61f7219817538865a83f_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c50a4305f82a567812573a41777dbccde73b130c89599b8550aa6ea274dad315 = $this->env->getExtension("native_profiler");
        $__internal_c50a4305f82a567812573a41777dbccde73b130c89599b8550aa6ea274dad315->enter($__internal_c50a4305f82a567812573a41777dbccde73b130c89599b8550aa6ea274dad315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c50a4305f82a567812573a41777dbccde73b130c89599b8550aa6ea274dad315->leave($__internal_c50a4305f82a567812573a41777dbccde73b130c89599b8550aa6ea274dad315_prof);

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
