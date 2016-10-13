<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5530db847346649b9cdb77cdbaac3cead753046685b38d7e73310e0de69061bd extends Twig_Template
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
        $__internal_f76652e5b0bc0862d5406a529788e493db4ceb597869a2e40c4501a3bb2843d8 = $this->env->getExtension("native_profiler");
        $__internal_f76652e5b0bc0862d5406a529788e493db4ceb597869a2e40c4501a3bb2843d8->enter($__internal_f76652e5b0bc0862d5406a529788e493db4ceb597869a2e40c4501a3bb2843d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f76652e5b0bc0862d5406a529788e493db4ceb597869a2e40c4501a3bb2843d8->leave($__internal_f76652e5b0bc0862d5406a529788e493db4ceb597869a2e40c4501a3bb2843d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
