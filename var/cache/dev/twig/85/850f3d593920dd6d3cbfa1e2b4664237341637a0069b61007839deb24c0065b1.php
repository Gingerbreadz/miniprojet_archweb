<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c08741808b27d5b580d4d16a008e435af21241b083cc5511627fdfed8469f050 extends Twig_Template
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
        $__internal_e32242cdcd4e9025f45111c7c03a0896f0c31d4879a57d47c20d2998d3c23d3a = $this->env->getExtension("native_profiler");
        $__internal_e32242cdcd4e9025f45111c7c03a0896f0c31d4879a57d47c20d2998d3c23d3a->enter($__internal_e32242cdcd4e9025f45111c7c03a0896f0c31d4879a57d47c20d2998d3c23d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e32242cdcd4e9025f45111c7c03a0896f0c31d4879a57d47c20d2998d3c23d3a->leave($__internal_e32242cdcd4e9025f45111c7c03a0896f0c31d4879a57d47c20d2998d3c23d3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
