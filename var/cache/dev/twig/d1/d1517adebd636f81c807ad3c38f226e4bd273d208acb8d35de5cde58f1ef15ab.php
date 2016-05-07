<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_23c4ae70c572dd6beeaeca6c9c66db34f9b4ffc3e9678dbf2ecbe234d568fd68 extends Twig_Template
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
        $__internal_a598b45d972c0e42d0967e176b1955c6f32206bb3f2e8fd8ecf188ad10172e93 = $this->env->getExtension("native_profiler");
        $__internal_a598b45d972c0e42d0967e176b1955c6f32206bb3f2e8fd8ecf188ad10172e93->enter($__internal_a598b45d972c0e42d0967e176b1955c6f32206bb3f2e8fd8ecf188ad10172e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a598b45d972c0e42d0967e176b1955c6f32206bb3f2e8fd8ecf188ad10172e93->leave($__internal_a598b45d972c0e42d0967e176b1955c6f32206bb3f2e8fd8ecf188ad10172e93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
