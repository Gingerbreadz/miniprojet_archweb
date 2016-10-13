<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_13847af28c7874a266bddeaa63df79b777151ddb4d5857044ab546d58eb00770 extends Twig_Template
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
        $__internal_1383c5cb384720b3d695ab3dd3e62c4e9dfcb614c9feec03cb22c1718fef7ef2 = $this->env->getExtension("native_profiler");
        $__internal_1383c5cb384720b3d695ab3dd3e62c4e9dfcb614c9feec03cb22c1718fef7ef2->enter($__internal_1383c5cb384720b3d695ab3dd3e62c4e9dfcb614c9feec03cb22c1718fef7ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1383c5cb384720b3d695ab3dd3e62c4e9dfcb614c9feec03cb22c1718fef7ef2->leave($__internal_1383c5cb384720b3d695ab3dd3e62c4e9dfcb614c9feec03cb22c1718fef7ef2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
