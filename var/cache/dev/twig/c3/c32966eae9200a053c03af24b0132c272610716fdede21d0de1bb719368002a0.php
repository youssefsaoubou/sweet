<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9d5516b77d0e34de332b04276b14d86265e4b7db0afdb9829011be99e12e0d4a extends Twig_Template
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
        $__internal_d7fca9f199b20fa84600203d5ddc3440e25f20d98adc0568ff734c5f064f8727 = $this->env->getExtension("native_profiler");
        $__internal_d7fca9f199b20fa84600203d5ddc3440e25f20d98adc0568ff734c5f064f8727->enter($__internal_d7fca9f199b20fa84600203d5ddc3440e25f20d98adc0568ff734c5f064f8727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d7fca9f199b20fa84600203d5ddc3440e25f20d98adc0568ff734c5f064f8727->leave($__internal_d7fca9f199b20fa84600203d5ddc3440e25f20d98adc0568ff734c5f064f8727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
