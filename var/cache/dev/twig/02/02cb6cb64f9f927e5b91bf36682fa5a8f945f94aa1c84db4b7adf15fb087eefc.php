<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9631b0835d2b29f529c789dd7416b19e47ae2a5a0400729dea1c61bace85513b extends Twig_Template
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
        $__internal_c9f9dc7c3f6beb934b6686c456244d36a16aee07032eb3cb504ab4eb315aba01 = $this->env->getExtension("native_profiler");
        $__internal_c9f9dc7c3f6beb934b6686c456244d36a16aee07032eb3cb504ab4eb315aba01->enter($__internal_c9f9dc7c3f6beb934b6686c456244d36a16aee07032eb3cb504ab4eb315aba01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c9f9dc7c3f6beb934b6686c456244d36a16aee07032eb3cb504ab4eb315aba01->leave($__internal_c9f9dc7c3f6beb934b6686c456244d36a16aee07032eb3cb504ab4eb315aba01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
