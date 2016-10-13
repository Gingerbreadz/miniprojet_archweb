<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2ee87068bba4fe8b3e5389242e3b5667acb7e87b3da6ceeaf3d18e3e86b0aa96 extends Twig_Template
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
        $__internal_282b4fdd3ab95aa486a566f05cbd20e51c6253342a69756083d85d57096995c8 = $this->env->getExtension("native_profiler");
        $__internal_282b4fdd3ab95aa486a566f05cbd20e51c6253342a69756083d85d57096995c8->enter($__internal_282b4fdd3ab95aa486a566f05cbd20e51c6253342a69756083d85d57096995c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_282b4fdd3ab95aa486a566f05cbd20e51c6253342a69756083d85d57096995c8->leave($__internal_282b4fdd3ab95aa486a566f05cbd20e51c6253342a69756083d85d57096995c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
