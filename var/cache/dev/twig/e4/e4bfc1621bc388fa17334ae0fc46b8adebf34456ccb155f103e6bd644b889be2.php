<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ba2571e9cc59217575730398db87e48166d3ee21691351dbefef49e343aee84f extends Twig_Template
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
        $__internal_64fdcf45146d30f9e03caf0742495a9a44c32d3459901b2da679d853c2429010 = $this->env->getExtension("native_profiler");
        $__internal_64fdcf45146d30f9e03caf0742495a9a44c32d3459901b2da679d853c2429010->enter($__internal_64fdcf45146d30f9e03caf0742495a9a44c32d3459901b2da679d853c2429010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_64fdcf45146d30f9e03caf0742495a9a44c32d3459901b2da679d853c2429010->leave($__internal_64fdcf45146d30f9e03caf0742495a9a44c32d3459901b2da679d853c2429010_prof);

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
