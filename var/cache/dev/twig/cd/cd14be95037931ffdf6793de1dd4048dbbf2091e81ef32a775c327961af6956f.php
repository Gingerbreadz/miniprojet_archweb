<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6a830128bf3e449ca03e8492b5b986bfcec27ae9c9f2190746c2abcfba9c4528 extends Twig_Template
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
        $__internal_cf68e2696060b42bba63a36148df164d1b2e03f9a9e65911dc75947100e80279 = $this->env->getExtension("native_profiler");
        $__internal_cf68e2696060b42bba63a36148df164d1b2e03f9a9e65911dc75947100e80279->enter($__internal_cf68e2696060b42bba63a36148df164d1b2e03f9a9e65911dc75947100e80279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cf68e2696060b42bba63a36148df164d1b2e03f9a9e65911dc75947100e80279->leave($__internal_cf68e2696060b42bba63a36148df164d1b2e03f9a9e65911dc75947100e80279_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
