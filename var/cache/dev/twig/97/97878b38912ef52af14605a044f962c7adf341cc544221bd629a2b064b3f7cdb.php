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
        $__internal_d208d6df99ad3b52215e36f5285826788cd826260bf557dfc3e2d1432d2737d4 = $this->env->getExtension("native_profiler");
        $__internal_d208d6df99ad3b52215e36f5285826788cd826260bf557dfc3e2d1432d2737d4->enter($__internal_d208d6df99ad3b52215e36f5285826788cd826260bf557dfc3e2d1432d2737d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d208d6df99ad3b52215e36f5285826788cd826260bf557dfc3e2d1432d2737d4->leave($__internal_d208d6df99ad3b52215e36f5285826788cd826260bf557dfc3e2d1432d2737d4_prof);

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
