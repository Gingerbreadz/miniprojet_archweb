<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0382b7cc60145ab45996ba5bb2b8d108622369d426711a5b213f18592c04e658 extends Twig_Template
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
        $__internal_3f07f35eb4ee5166c61a87e2bd6e9f4a48dc24dd7b08a216d72322c50fe29fa3 = $this->env->getExtension("native_profiler");
        $__internal_3f07f35eb4ee5166c61a87e2bd6e9f4a48dc24dd7b08a216d72322c50fe29fa3->enter($__internal_3f07f35eb4ee5166c61a87e2bd6e9f4a48dc24dd7b08a216d72322c50fe29fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3f07f35eb4ee5166c61a87e2bd6e9f4a48dc24dd7b08a216d72322c50fe29fa3->leave($__internal_3f07f35eb4ee5166c61a87e2bd6e9f4a48dc24dd7b08a216d72322c50fe29fa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
