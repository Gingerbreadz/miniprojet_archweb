<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_84b0a5012e8e6277c6ebb58eb9be3f2eb5ed68feeced18ff08d6b67057409a0e extends Twig_Template
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
        $__internal_94c96e0bbad620599952ba92e01d82fb48eecea523f6beb4e2ee0327951c12ce = $this->env->getExtension("native_profiler");
        $__internal_94c96e0bbad620599952ba92e01d82fb48eecea523f6beb4e2ee0327951c12ce->enter($__internal_94c96e0bbad620599952ba92e01d82fb48eecea523f6beb4e2ee0327951c12ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_94c96e0bbad620599952ba92e01d82fb48eecea523f6beb4e2ee0327951c12ce->leave($__internal_94c96e0bbad620599952ba92e01d82fb48eecea523f6beb4e2ee0327951c12ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
