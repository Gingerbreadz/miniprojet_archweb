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
        $__internal_f5bc06a71bdfa3e9f51d69abf3fcd4914c25ccdedd5538bdc2f1e86261b42981 = $this->env->getExtension("native_profiler");
        $__internal_f5bc06a71bdfa3e9f51d69abf3fcd4914c25ccdedd5538bdc2f1e86261b42981->enter($__internal_f5bc06a71bdfa3e9f51d69abf3fcd4914c25ccdedd5538bdc2f1e86261b42981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f5bc06a71bdfa3e9f51d69abf3fcd4914c25ccdedd5538bdc2f1e86261b42981->leave($__internal_f5bc06a71bdfa3e9f51d69abf3fcd4914c25ccdedd5538bdc2f1e86261b42981_prof);

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
