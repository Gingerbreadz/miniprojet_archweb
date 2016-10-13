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
        $__internal_c3b8377a970aa2d9e21477222cfb734369790cc7842039e0abf9216405036353 = $this->env->getExtension("native_profiler");
        $__internal_c3b8377a970aa2d9e21477222cfb734369790cc7842039e0abf9216405036353->enter($__internal_c3b8377a970aa2d9e21477222cfb734369790cc7842039e0abf9216405036353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c3b8377a970aa2d9e21477222cfb734369790cc7842039e0abf9216405036353->leave($__internal_c3b8377a970aa2d9e21477222cfb734369790cc7842039e0abf9216405036353_prof);

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
