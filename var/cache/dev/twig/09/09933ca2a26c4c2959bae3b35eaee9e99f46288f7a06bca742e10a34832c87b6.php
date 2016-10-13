<?php

/* agvoybase.html.twig */
class __TwigTemplate_88bedb168ec45d66de0bb89da847635df3462a65f46e62b31c6ad0cde1e831fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agvoybase.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c304df99bb49d3f7841367a43dfeb4059fb6ee999bdf92d24bb4d616eada3c3c = $this->env->getExtension("native_profiler");
        $__internal_c304df99bb49d3f7841367a43dfeb4059fb6ee999bdf92d24bb4d616eada3c3c->enter($__internal_c304df99bb49d3f7841367a43dfeb4059fb6ee999bdf92d24bb4d616eada3c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c304df99bb49d3f7841367a43dfeb4059fb6ee999bdf92d24bb4d616eada3c3c->leave($__internal_c304df99bb49d3f7841367a43dfeb4059fb6ee999bdf92d24bb4d616eada3c3c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_5fd47d8f62f3dc8845bf8361add2d4074029bdb14ec84fd1ee0b5135ce8b4449 = $this->env->getExtension("native_profiler");
        $__internal_5fd47d8f62f3dc8845bf8361add2d4074029bdb14ec84fd1ee0b5135ce8b4449->enter($__internal_5fd47d8f62f3dc8845bf8361add2d4074029bdb14ec84fd1ee0b5135ce8b4449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Accueil Symfony
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">

                                ";
        // line 24
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 35
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
";
        
        $__internal_5fd47d8f62f3dc8845bf8361add2d4074029bdb14ec84fd1ee0b5135ce8b4449->leave($__internal_5fd47d8f62f3dc8845bf8361add2d4074029bdb14ec84fd1ee0b5135ce8b4449_prof);

    }

    // line 24
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_420b1fb0e8a21e7216d8fb5542a8307578bfd31126868ea7df6d124a24f49914 = $this->env->getExtension("native_profiler");
        $__internal_420b1fb0e8a21e7216d8fb5542a8307578bfd31126868ea7df6d124a24f49914->enter($__internal_420b1fb0e8a21e7216d8fb5542a8307578bfd31126868ea7df6d124a24f49914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 25
        echo "                                    <li>
                                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Accueil</a>
                                    </li>
                                ";
        // line 34
        echo "                                ";
        
        $__internal_420b1fb0e8a21e7216d8fb5542a8307578bfd31126868ea7df6d124a24f49914->leave($__internal_420b1fb0e8a21e7216d8fb5542a8307578bfd31126868ea7df6d124a24f49914_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4337524f8e9b4ee23d173baf0919eadefae901052b3143dba51e8c936c576b36 = $this->env->getExtension("native_profiler");
        $__internal_4337524f8e9b4ee23d173baf0919eadefae901052b3143dba51e8c936c576b36->enter($__internal_4337524f8e9b4ee23d173baf0919eadefae901052b3143dba51e8c936c576b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 44
        echo "\t<h4>About</h4>
\t<p>Bienvenue sur notre agence virtuelle.</p>
";
        
        $__internal_4337524f8e9b4ee23d173baf0919eadefae901052b3143dba51e8c936c576b36->leave($__internal_4337524f8e9b4ee23d173baf0919eadefae901052b3143dba51e8c936c576b36_prof);

    }

    public function getTemplateName()
    {
        return "agvoybase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  103 => 43,  96 => 34,  91 => 26,  88 => 25,  82 => 24,  69 => 35,  67 => 24,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Accueil Symfony*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('circuit_index') }}">Accueil</a>*/
/*                                     </li>*/
/*                                 {# {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li>*/
/*            								<a href="{{ path('admin_post_new') }}">Nouveau post</a>                         */
/* 									</li>*/
/*                                     {% endif %}*/
/*                                     #}*/
/*                                 {% endblock %}*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* {% endblock %}*/
/*         */
/* {% block sidebar %}*/
/* 	<h4>About</h4>*/
/* 	<p>Bienvenue sur notre agence virtuelle.</p>*/
/* {% endblock %}*/
