<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3a9e06c922f07544893f321077dd58a6327602353492aa30415b1cf1b61af272 extends Twig_Template
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
        $__internal_844a02abc045bd6602fd2feaa62e8ddd9a3498903d61e61e9ef47e35c4b7850a = $this->env->getExtension("native_profiler");
        $__internal_844a02abc045bd6602fd2feaa62e8ddd9a3498903d61e61e9ef47e35c4b7850a->enter($__internal_844a02abc045bd6602fd2feaa62e8ddd9a3498903d61e61e9ef47e35c4b7850a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_844a02abc045bd6602fd2feaa62e8ddd9a3498903d61e61e9ef47e35c4b7850a->leave($__internal_844a02abc045bd6602fd2feaa62e8ddd9a3498903d61e61e9ef47e35c4b7850a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
