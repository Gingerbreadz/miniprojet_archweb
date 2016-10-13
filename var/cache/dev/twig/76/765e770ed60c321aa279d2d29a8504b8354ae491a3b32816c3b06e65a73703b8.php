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
        $__internal_bb752e442488e4a5d3837391c6b4519527ff2959d34063896e642128888099fa = $this->env->getExtension("native_profiler");
        $__internal_bb752e442488e4a5d3837391c6b4519527ff2959d34063896e642128888099fa->enter($__internal_bb752e442488e4a5d3837391c6b4519527ff2959d34063896e642128888099fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bb752e442488e4a5d3837391c6b4519527ff2959d34063896e642128888099fa->leave($__internal_bb752e442488e4a5d3837391c6b4519527ff2959d34063896e642128888099fa_prof);

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
