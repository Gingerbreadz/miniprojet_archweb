<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_364b9a243e3688203535b29996acf57305a645cc580bf6563e6bec35dd1820e0 extends Twig_Template
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
        $__internal_07a35e0da618cbef00bedcc637fd96c5c7fdac00d97fc3a2a14b00317aa63fc2 = $this->env->getExtension("native_profiler");
        $__internal_07a35e0da618cbef00bedcc637fd96c5c7fdac00d97fc3a2a14b00317aa63fc2->enter($__internal_07a35e0da618cbef00bedcc637fd96c5c7fdac00d97fc3a2a14b00317aa63fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_07a35e0da618cbef00bedcc637fd96c5c7fdac00d97fc3a2a14b00317aa63fc2->leave($__internal_07a35e0da618cbef00bedcc637fd96c5c7fdac00d97fc3a2a14b00317aa63fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
