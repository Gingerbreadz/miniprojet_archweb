<?php

/* :circuit:index.html.twig */
class __TwigTemplate_3442ef048e7becd63d5c2131557045606e0dd37ba9355c140855326e84df9bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:index.html.twig", 1);
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
        $__internal_ea2945efd7b89b05299dfeb74b5f0d19281824571e7d5940085b8063ba50092c = $this->env->getExtension("native_profiler");
        $__internal_ea2945efd7b89b05299dfeb74b5f0d19281824571e7d5940085b8063ba50092c->enter($__internal_ea2945efd7b89b05299dfeb74b5f0d19281824571e7d5940085b8063ba50092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2945efd7b89b05299dfeb74b5f0d19281824571e7d5940085b8063ba50092c->leave($__internal_ea2945efd7b89b05299dfeb74b5f0d19281824571e7d5940085b8063ba50092c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_86a788be72d26f5d0ecc8a14dfa49c88a942518f51a05308678f65fa99197aad = $this->env->getExtension("native_profiler");
        $__internal_86a788be72d26f5d0ecc8a14dfa49c88a942518f51a05308678f65fa99197aad->enter($__internal_86a788be72d26f5d0ecc8a14dfa49c88a942518f51a05308678f65fa99197aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Nos circuits</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Paysdepart</th>
                <th>Villedepart</th>
                <th>Villearrivee</th>
                <th>Dureecircuit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">détails</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    
";
        
        $__internal_86a788be72d26f5d0ecc8a14dfa49c88a942518f51a05308678f65fa99197aad->leave($__internal_86a788be72d26f5d0ecc8a14dfa49c88a942518f51a05308678f65fa99197aad_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1>Nos circuits</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Description</th>*/
/*                 <th>Paysdepart</th>*/
/*                 <th>Villedepart</th>*/
/*                 <th>Villearrivee</th>*/
/*                 <th>Dureecircuit</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for circuit in circuits %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('circuit_show', { 'id': circuit.id }) }}">{{ circuit.id }}</a></td>*/
/*                 <td>{{ circuit.description }}</td>*/
/*                 <td>{{ circuit.paysDepart }}</td>*/
/*                 <td>{{ circuit.villeDepart }}</td>*/
/*                 <td>{{ circuit.villeArrivee }}</td>*/
/*                 <td>{{ circuit.dureeCircuit }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">détails</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/* {% endblock %} {# main #}*/
/* */
