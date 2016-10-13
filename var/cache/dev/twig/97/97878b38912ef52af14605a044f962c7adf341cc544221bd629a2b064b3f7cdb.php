<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ada0776bbb4f91a1febd53056700dd1bc7831c9329ad0cb005f11b724de65021 extends Twig_Template
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
        $__internal_0d24092f48e7d40acb15a21dda2fabb1646b05b007b452124f74fa0a998bd338 = $this->env->getExtension("native_profiler");
        $__internal_0d24092f48e7d40acb15a21dda2fabb1646b05b007b452124f74fa0a998bd338->enter($__internal_0d24092f48e7d40acb15a21dda2fabb1646b05b007b452124f74fa0a998bd338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0d24092f48e7d40acb15a21dda2fabb1646b05b007b452124f74fa0a998bd338->leave($__internal_0d24092f48e7d40acb15a21dda2fabb1646b05b007b452124f74fa0a998bd338_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
