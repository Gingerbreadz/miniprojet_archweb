<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a970200f54196b6537a7bf808164f30b2b3cd4675206b78dfd1e58494ce401a8 extends Twig_Template
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
        $__internal_39de3973b1ed9f827e1c27f2d95f2ed622bc67a432faa976159eae5c4489f0c4 = $this->env->getExtension("native_profiler");
        $__internal_39de3973b1ed9f827e1c27f2d95f2ed622bc67a432faa976159eae5c4489f0c4->enter($__internal_39de3973b1ed9f827e1c27f2d95f2ed622bc67a432faa976159eae5c4489f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_39de3973b1ed9f827e1c27f2d95f2ed622bc67a432faa976159eae5c4489f0c4->leave($__internal_39de3973b1ed9f827e1c27f2d95f2ed622bc67a432faa976159eae5c4489f0c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
