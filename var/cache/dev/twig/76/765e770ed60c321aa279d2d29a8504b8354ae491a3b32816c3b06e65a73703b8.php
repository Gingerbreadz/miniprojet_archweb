<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_52b024dadf85ef98fb40bb97573efb2b48118b3254c7199207e87edcd5cc70ba extends Twig_Template
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
        $__internal_4cfcc6ff3c0ad1d622940f865ef6e3a6bcdd13e14b09a50dff89ac8451c2f153 = $this->env->getExtension("native_profiler");
        $__internal_4cfcc6ff3c0ad1d622940f865ef6e3a6bcdd13e14b09a50dff89ac8451c2f153->enter($__internal_4cfcc6ff3c0ad1d622940f865ef6e3a6bcdd13e14b09a50dff89ac8451c2f153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4cfcc6ff3c0ad1d622940f865ef6e3a6bcdd13e14b09a50dff89ac8451c2f153->leave($__internal_4cfcc6ff3c0ad1d622940f865ef6e3a6bcdd13e14b09a50dff89ac8451c2f153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
