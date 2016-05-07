<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_af6984b54b8542e6b97d4e866269a36c68ab84251a0ee5470329c0abf0e9efb2 extends Twig_Template
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
        $__internal_26e943ee0b59bce92eed58d41f3cf728f86acf482cfbeee78562c2564b62d594 = $this->env->getExtension("native_profiler");
        $__internal_26e943ee0b59bce92eed58d41f3cf728f86acf482cfbeee78562c2564b62d594->enter($__internal_26e943ee0b59bce92eed58d41f3cf728f86acf482cfbeee78562c2564b62d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_26e943ee0b59bce92eed58d41f3cf728f86acf482cfbeee78562c2564b62d594->leave($__internal_26e943ee0b59bce92eed58d41f3cf728f86acf482cfbeee78562c2564b62d594_prof);

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
