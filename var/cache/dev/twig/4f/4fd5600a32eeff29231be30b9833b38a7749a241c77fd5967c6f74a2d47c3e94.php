<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_260bbf77ed67999727d93cb667ee13be0f7e6ca2796837cc08f5aaa33bc420ce extends Twig_Template
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
        $__internal_97464f767839dd767901fc14848ceb717c13adb678f6d6cecc0af1a3bbc2e6ec = $this->env->getExtension("native_profiler");
        $__internal_97464f767839dd767901fc14848ceb717c13adb678f6d6cecc0af1a3bbc2e6ec->enter($__internal_97464f767839dd767901fc14848ceb717c13adb678f6d6cecc0af1a3bbc2e6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_97464f767839dd767901fc14848ceb717c13adb678f6d6cecc0af1a3bbc2e6ec->leave($__internal_97464f767839dd767901fc14848ceb717c13adb678f6d6cecc0af1a3bbc2e6ec_prof);

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
