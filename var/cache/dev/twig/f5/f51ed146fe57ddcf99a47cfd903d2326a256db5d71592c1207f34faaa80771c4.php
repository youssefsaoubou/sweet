<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0ebc6b1832d874fce9faf4d9116088a8fd8572c3657fbdacc460ff5ba53b76bb extends Twig_Template
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
        $__internal_060e472e22279eb648b31a999189d11916df6d4cab7ea2726f8be4334faebf46 = $this->env->getExtension("native_profiler");
        $__internal_060e472e22279eb648b31a999189d11916df6d4cab7ea2726f8be4334faebf46->enter($__internal_060e472e22279eb648b31a999189d11916df6d4cab7ea2726f8be4334faebf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_060e472e22279eb648b31a999189d11916df6d4cab7ea2726f8be4334faebf46->leave($__internal_060e472e22279eb648b31a999189d11916df6d4cab7ea2726f8be4334faebf46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
