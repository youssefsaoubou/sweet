<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_499e22d3183f7eac7752c93d1af2f153e2c3e69a3f0807c9210cd3f05de052e4 extends Twig_Template
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
        $__internal_e8c1f25f27a91b98e79f3d3c74c906985aaf105a702c5d8584ff9cf67002418e = $this->env->getExtension("native_profiler");
        $__internal_e8c1f25f27a91b98e79f3d3c74c906985aaf105a702c5d8584ff9cf67002418e->enter($__internal_e8c1f25f27a91b98e79f3d3c74c906985aaf105a702c5d8584ff9cf67002418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e8c1f25f27a91b98e79f3d3c74c906985aaf105a702c5d8584ff9cf67002418e->leave($__internal_e8c1f25f27a91b98e79f3d3c74c906985aaf105a702c5d8584ff9cf67002418e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
