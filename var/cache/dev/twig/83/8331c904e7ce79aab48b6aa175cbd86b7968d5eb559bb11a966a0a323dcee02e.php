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
        $__internal_3d413b1ebbd3dd7df229fe3364beb5d2fa26a6508a7e679a1ec6b0b867eef833 = $this->env->getExtension("native_profiler");
        $__internal_3d413b1ebbd3dd7df229fe3364beb5d2fa26a6508a7e679a1ec6b0b867eef833->enter($__internal_3d413b1ebbd3dd7df229fe3364beb5d2fa26a6508a7e679a1ec6b0b867eef833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3d413b1ebbd3dd7df229fe3364beb5d2fa26a6508a7e679a1ec6b0b867eef833->leave($__internal_3d413b1ebbd3dd7df229fe3364beb5d2fa26a6508a7e679a1ec6b0b867eef833_prof);

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
