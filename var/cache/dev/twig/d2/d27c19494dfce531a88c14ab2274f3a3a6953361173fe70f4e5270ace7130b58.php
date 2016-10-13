<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6697b5290e587e91e90977610390cc969961079b4de66714b0d5579223de6907 extends Twig_Template
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
        $__internal_86ef3a4e347e1f873efe532b4b723370858f417fe581df3c319fd3e51b6d1a18 = $this->env->getExtension("native_profiler");
        $__internal_86ef3a4e347e1f873efe532b4b723370858f417fe581df3c319fd3e51b6d1a18->enter($__internal_86ef3a4e347e1f873efe532b4b723370858f417fe581df3c319fd3e51b6d1a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_86ef3a4e347e1f873efe532b4b723370858f417fe581df3c319fd3e51b6d1a18->leave($__internal_86ef3a4e347e1f873efe532b4b723370858f417fe581df3c319fd3e51b6d1a18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
