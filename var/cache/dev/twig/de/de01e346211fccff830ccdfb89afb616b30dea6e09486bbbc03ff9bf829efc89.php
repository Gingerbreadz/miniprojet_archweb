<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4310de4839db262c76abb2978771176cb947623087805e3a979edc94daf68b85 extends Twig_Template
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
        $__internal_db812f422400d810f907e5e0a7b00e5c6edd5489bb0ddf20aa5801d0713ae84e = $this->env->getExtension("native_profiler");
        $__internal_db812f422400d810f907e5e0a7b00e5c6edd5489bb0ddf20aa5801d0713ae84e->enter($__internal_db812f422400d810f907e5e0a7b00e5c6edd5489bb0ddf20aa5801d0713ae84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_db812f422400d810f907e5e0a7b00e5c6edd5489bb0ddf20aa5801d0713ae84e->leave($__internal_db812f422400d810f907e5e0a7b00e5c6edd5489bb0ddf20aa5801d0713ae84e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
