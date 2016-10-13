<?php

/* circuit/show.html.twig */
class __TwigTemplate_2c4f00b02547cef842011cb28720fb13fb7256436f5f3661c6872d9a0db57f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1f089e7be661c7e5359ad26fa3060f02c1144261796f0b4e8c45fd09ef18808 = $this->env->getExtension("native_profiler");
        $__internal_d1f089e7be661c7e5359ad26fa3060f02c1144261796f0b4e8c45fd09ef18808->enter($__internal_d1f089e7be661c7e5359ad26fa3060f02c1144261796f0b4e8c45fd09ef18808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f089e7be661c7e5359ad26fa3060f02c1144261796f0b4e8c45fd09ef18808->leave($__internal_d1f089e7be661c7e5359ad26fa3060f02c1144261796f0b4e8c45fd09ef18808_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_830a9426589124280bbd8c5651c3cc10301eb399a3b03e5e0305499293e5734b = $this->env->getExtension("native_profiler");
        $__internal_830a9426589124280bbd8c5651c3cc10301eb399a3b03e5e0305499293e5734b->enter($__internal_830a9426589124280bbd8c5651c3cc10301eb399a3b03e5e0305499293e5734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    \t
\t<div class=\"circuit\">
    \t<h2>
       \t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "description", array()), "html", null, true);
        echo "
       \t</h2>
    \t
    \t<h3>Détails</h3>
\t\t<div class=\"circuit_details\">
\t\t
\t\t\t<p>Description: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t\t<p>Départ de ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeDepart", array()), "html", null, true);
        echo " pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "dureeCircuit", array()), "html", null, true);
        echo " j. de voyage à travers le ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "paysDepart", array()), "html", null, true);
        echo ", pour terminer à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeArrivee", array()), "html", null, true);
        echo ".</p>
\t\t\t
\t\t\t<h3>Étapes</h3>
\t\t \t<table>
\t\t \t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t    \t<th>Numéro</th>
\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t<th>Nombre jours</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
 \t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "etapes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 29
            echo "\t \t\t<tr>
\t\t\t   <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "numeroEtape", array()), "html", null, true);
            echo "</td>
\t\t\t   <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "villeEtape", array()), "html", null, true);
            echo "</td> 
\t\t\t   <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "nombreJours", array()), "html", null, true);
            echo " j.</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " ";
        // line 35
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t</div> ";
        // line 38
        echo "\t\t
\t\t<div class=\"programmations\">
\t\t<h3>Programmations de ce circuit</h3>
\t\t<table>
\t\t \t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t    \t<th>Date de départ</th>
\t\t\t\t\t\t<th>Nombre de personnes</th>
\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "programmations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["programmation"]) {
            // line 51
            echo "\t\t\t<tr>
\t\t\t   <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programmation"], "dateDepart", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t   <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmation"], "nombrePersonnes", array()), "html", null, true);
            echo "</td> 
\t\t\t   <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmation"], "prix", array()), "html", null, true);
            echo " euros</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t</table>
\t</div> ";
        // line 59
        echo "    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Retour à la liste</a>
        </li>
    </ul>
\t</div> ";
        // line 65
        echo "    
";
        
        $__internal_830a9426589124280bbd8c5651c3cc10301eb399a3b03e5e0305499293e5734b->leave($__internal_830a9426589124280bbd8c5651c3cc10301eb399a3b03e5e0305499293e5734b_prof);

    }

    public function getTemplateName()
    {
        return "circuit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  156 => 61,  152 => 59,  149 => 57,  140 => 54,  136 => 53,  132 => 52,  129 => 51,  125 => 50,  111 => 38,  107 => 35,  105 => 34,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  59 => 15,  54 => 13,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     	*/
/* 	<div class="circuit">*/
/*     	<h2>*/
/*        		{{ circuit.description }}*/
/*        	</h2>*/
/*     	*/
/*     	<h3>Détails</h3>*/
/* 		<div class="circuit_details">*/
/* 		*/
/* 			<p>Description: {{ circuit.description }}</p>*/
/* 			*/
/* 			<p>Départ de {{ circuit.villeDepart }} pour {{ circuit.dureeCircuit }} j. de voyage à travers le {{ circuit.paysDepart }}, pour terminer à {{ circuit.villeArrivee }}.</p>*/
/* 			*/
/* 			<h3>Étapes</h3>*/
/* 		 	<table>*/
/* 		 		<thead>*/
/* 					<tr>*/
/* 				    	<th>Numéro</th>*/
/* 						<th>Ville</th>*/
/* 						<th>Nombre jours</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/*  			{% for etape in circuit.etapes %}*/
/* 	 		<tr>*/
/* 			   <td>{{ etape.numeroEtape }}</td>*/
/* 			   <td>{{ etape.villeEtape }}</td> */
/* 			   <td>{{ etape.nombreJours }} j.</td>*/
/* 			</tr>*/
/* 			{% endfor %} {# circuit.etapes #}*/
/* 			</tbody>*/
/* 			</table>*/
/* 		</div> {# circuit_details #}*/
/* 		*/
/* 		<div class="programmations">*/
/* 		<h3>Programmations de ce circuit</h3>*/
/* 		<table>*/
/* 		 		<thead>*/
/* 					<tr>*/
/* 				    	<th>Date de départ</th>*/
/* 						<th>Nombre de personnes</th>*/
/* 						<th>Prix</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 		{%  for programmation in circuit.programmations %}*/
/* 			<tr>*/
/* 			   <td>{{ programmation.dateDepart|date('d-m-Y')  }}</td>*/
/* 			   <td>{{ programmation.nombrePersonnes }}</td> */
/* 			   <td>{{ programmation.prix }} euros</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</table>*/
/* 	</div> {# programmations #}*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('circuit_index') }}">Retour à la liste</a>*/
/*         </li>*/
/*     </ul>*/
/* 	</div> {# circuit #}*/
/*     */
/* {% endblock %}  {# main #}*/
/* */
