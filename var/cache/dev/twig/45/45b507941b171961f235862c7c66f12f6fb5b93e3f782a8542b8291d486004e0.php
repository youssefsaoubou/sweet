<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_bcb9077716978c4c6619c373f2f365a58b58b6141bc42552e921f52bc3dede87 extends Twig_Template
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
        $__internal_2042a1dcbf265879e6da3896c414238885fe4dbd6809bb276cdea27f33e72752 = $this->env->getExtension("native_profiler");
        $__internal_2042a1dcbf265879e6da3896c414238885fe4dbd6809bb276cdea27f33e72752->enter($__internal_2042a1dcbf265879e6da3896c414238885fe4dbd6809bb276cdea27f33e72752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2042a1dcbf265879e6da3896c414238885fe4dbd6809bb276cdea27f33e72752->leave($__internal_2042a1dcbf265879e6da3896c414238885fe4dbd6809bb276cdea27f33e72752_prof);

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
