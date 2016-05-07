<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f5efdf5f95484fd907ef09c25fbfa1ea50633b0be1f37ca147bed80ab17ca91 extends Twig_Template
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
        $__internal_8bf7e56a15a516c212e54a33db7502ef4815ad7c733049f0c02a78fdb09493ee = $this->env->getExtension("native_profiler");
        $__internal_8bf7e56a15a516c212e54a33db7502ef4815ad7c733049f0c02a78fdb09493ee->enter($__internal_8bf7e56a15a516c212e54a33db7502ef4815ad7c733049f0c02a78fdb09493ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8bf7e56a15a516c212e54a33db7502ef4815ad7c733049f0c02a78fdb09493ee->leave($__internal_8bf7e56a15a516c212e54a33db7502ef4815ad7c733049f0c02a78fdb09493ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
