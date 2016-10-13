<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_54a18bb0d4d2079cc6ffa3b2e1a6d9e6a79b3c1eab9ff33652b57287402ad4de extends Twig_Template
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
        $__internal_e649c20b22d300f49a8aff7f4dd9453cca231b6ed62f165a0171490f1ffe09f7 = $this->env->getExtension("native_profiler");
        $__internal_e649c20b22d300f49a8aff7f4dd9453cca231b6ed62f165a0171490f1ffe09f7->enter($__internal_e649c20b22d300f49a8aff7f4dd9453cca231b6ed62f165a0171490f1ffe09f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e649c20b22d300f49a8aff7f4dd9453cca231b6ed62f165a0171490f1ffe09f7->leave($__internal_e649c20b22d300f49a8aff7f4dd9453cca231b6ed62f165a0171490f1ffe09f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
