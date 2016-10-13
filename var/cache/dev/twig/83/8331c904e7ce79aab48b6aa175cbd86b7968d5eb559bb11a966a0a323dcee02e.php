<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dcaf07fb1c906466409ea475c825ee159e4dae5b94346fd99f8c75a42d92caec extends Twig_Template
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
        $__internal_7450153cff4302227c93f4098f0dcd11cdba8eabff7aae46e3a08cf4c0b5c32f = $this->env->getExtension("native_profiler");
        $__internal_7450153cff4302227c93f4098f0dcd11cdba8eabff7aae46e3a08cf4c0b5c32f->enter($__internal_7450153cff4302227c93f4098f0dcd11cdba8eabff7aae46e3a08cf4c0b5c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7450153cff4302227c93f4098f0dcd11cdba8eabff7aae46e3a08cf4c0b5c32f->leave($__internal_7450153cff4302227c93f4098f0dcd11cdba8eabff7aae46e3a08cf4c0b5c32f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
