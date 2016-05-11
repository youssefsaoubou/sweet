<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_38c6622b0f4dd5483a8fe98ba68fe65c66113d58048fc504c6d884e3197dede8 extends Twig_Template
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
        $__internal_9f7df3de1caaf02d94b217879bf6de134c603b629db299b09c3cbd1cf82c11cb = $this->env->getExtension("native_profiler");
        $__internal_9f7df3de1caaf02d94b217879bf6de134c603b629db299b09c3cbd1cf82c11cb->enter($__internal_9f7df3de1caaf02d94b217879bf6de134c603b629db299b09c3cbd1cf82c11cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9f7df3de1caaf02d94b217879bf6de134c603b629db299b09c3cbd1cf82c11cb->leave($__internal_9f7df3de1caaf02d94b217879bf6de134c603b629db299b09c3cbd1cf82c11cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
