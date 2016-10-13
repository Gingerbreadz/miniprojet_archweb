<?php

/* ::agvoybase.html.twig */
class __TwigTemplate_88bedb168ec45d66de0bb89da847635df3462a65f46e62b31c6ad0cde1e831fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::agvoybase.html.twig", 1);
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
        $__internal_d3782ff3a57bf61d7fd3deee03135d68b1bc5cb70650b75f9e37a46200510e50 = $this->env->getExtension("native_profiler");
        $__internal_d3782ff3a57bf61d7fd3deee03135d68b1bc5cb70650b75f9e37a46200510e50->enter($__internal_d3782ff3a57bf61d7fd3deee03135d68b1bc5cb70650b75f9e37a46200510e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3782ff3a57bf61d7fd3deee03135d68b1bc5cb70650b75f9e37a46200510e50->leave($__internal_d3782ff3a57bf61d7fd3deee03135d68b1bc5cb70650b75f9e37a46200510e50_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_4bafd52979fef190e5d22aac58326624c84d0b7892e249467ef85d3a2bdd1117 = $this->env->getExtension("native_profiler");
        $__internal_4bafd52979fef190e5d22aac58326624c84d0b7892e249467ef85d3a2bdd1117->enter($__internal_4bafd52979fef190e5d22aac58326624c84d0b7892e249467ef85d3a2bdd1117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4bafd52979fef190e5d22aac58326624c84d0b7892e249467ef85d3a2bdd1117->leave($__internal_4bafd52979fef190e5d22aac58326624c84d0b7892e249467ef85d3a2bdd1117_prof);

    }

    // line 22
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_e2fa031f51a285df2937893dbe4ba6884c25f4fa5832387e0c2959f9ac817aa5 = $this->env->getExtension("native_profiler");
        $__internal_e2fa031f51a285df2937893dbe4ba6884c25f4fa5832387e0c2959f9ac817aa5->enter($__internal_e2fa031f51a285df2937893dbe4ba6884c25f4fa5832387e0c2959f9ac817aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        
        $__internal_e2fa031f51a285df2937893dbe4ba6884c25f4fa5832387e0c2959f9ac817aa5->leave($__internal_e2fa031f51a285df2937893dbe4ba6884c25f4fa5832387e0c2959f9ac817aa5_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e0804379266dcc8a83bec5b745201b412bebba1f6549f032d0136c37f2925b8 = $this->env->getExtension("native_profiler");
        $__internal_4e0804379266dcc8a83bec5b745201b412bebba1f6549f032d0136c37f2925b8->enter($__internal_4e0804379266dcc8a83bec5b745201b412bebba1f6549f032d0136c37f2925b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 51
        echo "\t<h4>About</h4>
\t<p>Bienvenue sur notre agence virtuelle.</p>
";
        
        $__internal_4e0804379266dcc8a83bec5b745201b412bebba1f6549f032d0136c37f2925b8->leave($__internal_4e0804379266dcc8a83bec5b745201b412bebba1f6549f032d0136c37f2925b8_prof);

    }

    public function getTemplateName()
    {
        return "::agvoybase.html.twig";
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
