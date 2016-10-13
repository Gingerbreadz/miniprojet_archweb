<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fed94fb5a7c8c0848a44e8974569fac0945e319ef2285048643d8a3b12c95446 extends Twig_Template
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
        $__internal_47d5cc606c9570da2f96b185be78b71bb7b2a4b20fa87c8b7dce0111bdad44db = $this->env->getExtension("native_profiler");
        $__internal_47d5cc606c9570da2f96b185be78b71bb7b2a4b20fa87c8b7dce0111bdad44db->enter($__internal_47d5cc606c9570da2f96b185be78b71bb7b2a4b20fa87c8b7dce0111bdad44db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_47d5cc606c9570da2f96b185be78b71bb7b2a4b20fa87c8b7dce0111bdad44db->leave($__internal_47d5cc606c9570da2f96b185be78b71bb7b2a4b20fa87c8b7dce0111bdad44db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
