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
        $__internal_b506244925a6d78e5e9098d51d38314d8e799726209b834c93d35235994a4c54 = $this->env->getExtension("native_profiler");
        $__internal_b506244925a6d78e5e9098d51d38314d8e799726209b834c93d35235994a4c54->enter($__internal_b506244925a6d78e5e9098d51d38314d8e799726209b834c93d35235994a4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b506244925a6d78e5e9098d51d38314d8e799726209b834c93d35235994a4c54->leave($__internal_b506244925a6d78e5e9098d51d38314d8e799726209b834c93d35235994a4c54_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f43e50487f5a0768506b328b6e4e56656ea671d0cedf5ab9ff1e6c12d4705618 = $this->env->getExtension("native_profiler");
        $__internal_f43e50487f5a0768506b328b6e4e56656ea671d0cedf5ab9ff1e6c12d4705618->enter($__internal_f43e50487f5a0768506b328b6e4e56656ea671d0cedf5ab9ff1e6c12d4705618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                           

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
        // line 22
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 42
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
";
        
        $__internal_f43e50487f5a0768506b328b6e4e56656ea671d0cedf5ab9ff1e6c12d4705618->leave($__internal_f43e50487f5a0768506b328b6e4e56656ea671d0cedf5ab9ff1e6c12d4705618_prof);

    }

    // line 22
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_a9014fcaaad7f891614209d5488e6e66596b72936da32b09a9335045d1fb8947 = $this->env->getExtension("native_profiler");
        $__internal_a9014fcaaad7f891614209d5488e6e66596b72936da32b09a9335045d1fb8947->enter($__internal_a9014fcaaad7f891614209d5488e6e66596b72936da32b09a9335045d1fb8947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 23
        echo "                                    <li>
                                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("page_accueil");
        echo "\">Accueil</a>
                                    </li>
                                     <li>
                                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("page_actualite");
        echo "\">Actualités</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\"> Nos offres</a> 
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"> login</a>
                                    </li>
                                ";
        // line 41
        echo "                                ";
        
        $__internal_a9014fcaaad7f891614209d5488e6e66596b72936da32b09a9335045d1fb8947->leave($__internal_a9014fcaaad7f891614209d5488e6e66596b72936da32b09a9335045d1fb8947_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a91f801d166eadf18502f29f3ab4a2ee844df3dd55c8ec5888cee37d8a6357f2 = $this->env->getExtension("native_profiler");
        $__internal_a91f801d166eadf18502f29f3ab4a2ee844df3dd55c8ec5888cee37d8a6357f2->enter($__internal_a91f801d166eadf18502f29f3ab4a2ee844df3dd55c8ec5888cee37d8a6357f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 51
        echo "\t<h4>About</h4>
\t<p>Bienvenue sur notre agence virtuelle.</p>
";
        
        $__internal_a91f801d166eadf18502f29f3ab4a2ee844df3dd55c8ec5888cee37d8a6357f2->leave($__internal_a91f801d166eadf18502f29f3ab4a2ee844df3dd55c8ec5888cee37d8a6357f2_prof);

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
        return array (  122 => 51,  116 => 50,  109 => 41,  104 => 33,  98 => 30,  92 => 27,  86 => 24,  83 => 23,  77 => 22,  64 => 42,  62 => 22,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                            */
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
/*                                         <a href="{{ path('page_accueil') }}">Accueil</a>*/
/*                                     </li>*/
/*                                      <li>*/
/*                                         <a href="{{ path('page_actualite') }}">Actualités</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('circuit_index') }}"> Nos offres</a> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('fos_user_security_login') }}"> login</a>*/
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
