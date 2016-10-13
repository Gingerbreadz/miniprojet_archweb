<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_95d5abba814d0266de7f9e8a869f5ca3f793b5a7b411ecbcc1d21e2593ebb99b extends Twig_Template
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
        $__internal_b689f174a7ffa95d0ba58d161da994314b729a60479f578b5c9363fbb6c8a844 = $this->env->getExtension("native_profiler");
        $__internal_b689f174a7ffa95d0ba58d161da994314b729a60479f578b5c9363fbb6c8a844->enter($__internal_b689f174a7ffa95d0ba58d161da994314b729a60479f578b5c9363fbb6c8a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b689f174a7ffa95d0ba58d161da994314b729a60479f578b5c9363fbb6c8a844->leave($__internal_b689f174a7ffa95d0ba58d161da994314b729a60479f578b5c9363fbb6c8a844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
