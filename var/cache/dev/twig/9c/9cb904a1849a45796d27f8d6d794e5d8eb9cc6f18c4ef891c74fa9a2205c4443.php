<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9c919e083001548e3bb111b5d0776414eb072922c81aa31fdacd9231fc153f75 extends Twig_Template
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
        $__internal_c1e0bac8a33d177b5e1e52df81c3e00d3771a50454dd3e4bd251fa12573e83a9 = $this->env->getExtension("native_profiler");
        $__internal_c1e0bac8a33d177b5e1e52df81c3e00d3771a50454dd3e4bd251fa12573e83a9->enter($__internal_c1e0bac8a33d177b5e1e52df81c3e00d3771a50454dd3e4bd251fa12573e83a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c1e0bac8a33d177b5e1e52df81c3e00d3771a50454dd3e4bd251fa12573e83a9->leave($__internal_c1e0bac8a33d177b5e1e52df81c3e00d3771a50454dd3e4bd251fa12573e83a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
