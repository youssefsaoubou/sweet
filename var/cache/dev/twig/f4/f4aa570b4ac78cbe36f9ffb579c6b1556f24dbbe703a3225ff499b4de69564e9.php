<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e72c4d73e22ff82ee8b281f1d02ea76665ed1d59a8f4b02a1774dd8581c755b4 extends Twig_Template
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
        $__internal_10bdba85d6a3187a471e7a7e98e3b125a095585430be7be920a97880c7fe626e = $this->env->getExtension("native_profiler");
        $__internal_10bdba85d6a3187a471e7a7e98e3b125a095585430be7be920a97880c7fe626e->enter($__internal_10bdba85d6a3187a471e7a7e98e3b125a095585430be7be920a97880c7fe626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_10bdba85d6a3187a471e7a7e98e3b125a095585430be7be920a97880c7fe626e->leave($__internal_10bdba85d6a3187a471e7a7e98e3b125a095585430be7be920a97880c7fe626e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
