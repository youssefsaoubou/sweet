<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_539e34aa5df48790d30e49b677b987e1dd93e16918365f4db11f6605ab26d18c extends Twig_Template
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
        $__internal_2f68c68f6d5178413f239d883a08eb91530322f9f99c8f0447a738f3c52ce24e = $this->env->getExtension("native_profiler");
        $__internal_2f68c68f6d5178413f239d883a08eb91530322f9f99c8f0447a738f3c52ce24e->enter($__internal_2f68c68f6d5178413f239d883a08eb91530322f9f99c8f0447a738f3c52ce24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f68c68f6d5178413f239d883a08eb91530322f9f99c8f0447a738f3c52ce24e->leave($__internal_2f68c68f6d5178413f239d883a08eb91530322f9f99c8f0447a738f3c52ce24e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
