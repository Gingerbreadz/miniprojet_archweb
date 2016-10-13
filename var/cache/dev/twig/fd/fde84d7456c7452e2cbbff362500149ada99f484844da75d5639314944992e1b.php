<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_635afbb7c7d11669f2bb880c295ce663ad0f8111e61b2ec912c0b29d2664e0b6 extends Twig_Template
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
        $__internal_9c02aea96871553575e83255db005830aeed7fa7bde68ca12204156824a0d3e3 = $this->env->getExtension("native_profiler");
        $__internal_9c02aea96871553575e83255db005830aeed7fa7bde68ca12204156824a0d3e3->enter($__internal_9c02aea96871553575e83255db005830aeed7fa7bde68ca12204156824a0d3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9c02aea96871553575e83255db005830aeed7fa7bde68ca12204156824a0d3e3->leave($__internal_9c02aea96871553575e83255db005830aeed7fa7bde68ca12204156824a0d3e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
