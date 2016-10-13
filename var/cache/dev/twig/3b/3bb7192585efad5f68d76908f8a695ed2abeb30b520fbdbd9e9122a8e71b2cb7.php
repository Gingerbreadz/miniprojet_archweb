<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5530db847346649b9cdb77cdbaac3cead753046685b38d7e73310e0de69061bd extends Twig_Template
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
        $__internal_d9f6390ce1af8a833484f19a41459380f660164565cc83f442fcc7e541f7fad6 = $this->env->getExtension("native_profiler");
        $__internal_d9f6390ce1af8a833484f19a41459380f660164565cc83f442fcc7e541f7fad6->enter($__internal_d9f6390ce1af8a833484f19a41459380f660164565cc83f442fcc7e541f7fad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d9f6390ce1af8a833484f19a41459380f660164565cc83f442fcc7e541f7fad6->leave($__internal_d9f6390ce1af8a833484f19a41459380f660164565cc83f442fcc7e541f7fad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
