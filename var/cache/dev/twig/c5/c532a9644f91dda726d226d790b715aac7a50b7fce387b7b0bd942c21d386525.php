<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_db56c9cd1fd0114be990b23efe803955997bf6762a8847db9dee35a55d234844 extends Twig_Template
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
        $__internal_fef36996380dd9043eecf28997df0d82205ea2b5a13cfdf52c94c5effe88642b = $this->env->getExtension("native_profiler");
        $__internal_fef36996380dd9043eecf28997df0d82205ea2b5a13cfdf52c94c5effe88642b->enter($__internal_fef36996380dd9043eecf28997df0d82205ea2b5a13cfdf52c94c5effe88642b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fef36996380dd9043eecf28997df0d82205ea2b5a13cfdf52c94c5effe88642b->leave($__internal_fef36996380dd9043eecf28997df0d82205ea2b5a13cfdf52c94c5effe88642b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
