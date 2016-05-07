<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_daafd49a198975285405e5b7353ff1eb350dab73049c69f30a577b248548a6fb extends Twig_Template
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
        $__internal_fdf00d170fefbb71c21fb19c7f7930d4110d6994df6923672f17d884b4a6a5cf = $this->env->getExtension("native_profiler");
        $__internal_fdf00d170fefbb71c21fb19c7f7930d4110d6994df6923672f17d884b4a6a5cf->enter($__internal_fdf00d170fefbb71c21fb19c7f7930d4110d6994df6923672f17d884b4a6a5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fdf00d170fefbb71c21fb19c7f7930d4110d6994df6923672f17d884b4a6a5cf->leave($__internal_fdf00d170fefbb71c21fb19c7f7930d4110d6994df6923672f17d884b4a6a5cf_prof);

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
