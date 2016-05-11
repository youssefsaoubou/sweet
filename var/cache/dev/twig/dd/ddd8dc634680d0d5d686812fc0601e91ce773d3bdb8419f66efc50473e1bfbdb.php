<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2cfeceecc506e641e425d6f2a49b4a603ede7278aff05cd3f1b3069ff5edbc0d extends Twig_Template
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
        $__internal_2a3941d66bc90591c366e0d496a3aaca0f77590252812d3ae153b2c30836e76e = $this->env->getExtension("native_profiler");
        $__internal_2a3941d66bc90591c366e0d496a3aaca0f77590252812d3ae153b2c30836e76e->enter($__internal_2a3941d66bc90591c366e0d496a3aaca0f77590252812d3ae153b2c30836e76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2a3941d66bc90591c366e0d496a3aaca0f77590252812d3ae153b2c30836e76e->leave($__internal_2a3941d66bc90591c366e0d496a3aaca0f77590252812d3ae153b2c30836e76e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
