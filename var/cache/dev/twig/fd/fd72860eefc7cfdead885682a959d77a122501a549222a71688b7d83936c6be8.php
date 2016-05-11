<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c2a5bd829c03519884ff609f8c8ebc67db92216e59da3aeb9c198faeac49c7fe extends Twig_Template
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
        $__internal_779ad445e45dbeb9a0a7fdf219c2bbaf03d14933d0416c01325fba4ee69e2831 = $this->env->getExtension("native_profiler");
        $__internal_779ad445e45dbeb9a0a7fdf219c2bbaf03d14933d0416c01325fba4ee69e2831->enter($__internal_779ad445e45dbeb9a0a7fdf219c2bbaf03d14933d0416c01325fba4ee69e2831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_779ad445e45dbeb9a0a7fdf219c2bbaf03d14933d0416c01325fba4ee69e2831->leave($__internal_779ad445e45dbeb9a0a7fdf219c2bbaf03d14933d0416c01325fba4ee69e2831_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
