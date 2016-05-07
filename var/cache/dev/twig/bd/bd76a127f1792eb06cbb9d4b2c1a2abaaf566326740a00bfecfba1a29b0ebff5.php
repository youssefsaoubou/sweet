<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_48d22595b32509ea5662bc79e19a12f70bec5488432082758dc9d06f583b2f71 extends Twig_Template
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
        $__internal_cd35c6938504157fac897559f674159709d5eb9f115d70ae59b60b9249e841d4 = $this->env->getExtension("native_profiler");
        $__internal_cd35c6938504157fac897559f674159709d5eb9f115d70ae59b60b9249e841d4->enter($__internal_cd35c6938504157fac897559f674159709d5eb9f115d70ae59b60b9249e841d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cd35c6938504157fac897559f674159709d5eb9f115d70ae59b60b9249e841d4->leave($__internal_cd35c6938504157fac897559f674159709d5eb9f115d70ae59b60b9249e841d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
