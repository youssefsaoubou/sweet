<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3d1669c59f515113eca4a86aa5538003e65e081067dfba9554d57ebbb277739c extends Twig_Template
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
        $__internal_baa860dba1b24fb7030f8448bb89d001f21e544b3db94705ee632bbf84496f6c = $this->env->getExtension("native_profiler");
        $__internal_baa860dba1b24fb7030f8448bb89d001f21e544b3db94705ee632bbf84496f6c->enter($__internal_baa860dba1b24fb7030f8448bb89d001f21e544b3db94705ee632bbf84496f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_baa860dba1b24fb7030f8448bb89d001f21e544b3db94705ee632bbf84496f6c->leave($__internal_baa860dba1b24fb7030f8448bb89d001f21e544b3db94705ee632bbf84496f6c_prof);

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
