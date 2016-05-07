<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e44ac01d3385dba04d6932a93f2a159cb3645d04252af9aadbc1ff244fed4c55 extends Twig_Template
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
        $__internal_4996cb49164fbc190450729d86d3c49a2f7d86ab00fdf70caf44eaecb3aa7a27 = $this->env->getExtension("native_profiler");
        $__internal_4996cb49164fbc190450729d86d3c49a2f7d86ab00fdf70caf44eaecb3aa7a27->enter($__internal_4996cb49164fbc190450729d86d3c49a2f7d86ab00fdf70caf44eaecb3aa7a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4996cb49164fbc190450729d86d3c49a2f7d86ab00fdf70caf44eaecb3aa7a27->leave($__internal_4996cb49164fbc190450729d86d3c49a2f7d86ab00fdf70caf44eaecb3aa7a27_prof);

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
