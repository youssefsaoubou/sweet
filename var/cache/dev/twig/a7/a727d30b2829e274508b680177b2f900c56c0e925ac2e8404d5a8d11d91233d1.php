<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_693d8fa7619dc246a350d07d89dcb80e443ee87b01452d47499864633f3907ac extends Twig_Template
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
        $__internal_4a37f4d1a7493c57f2b91db075456523d4aca81c3d47627a09504377819bb288 = $this->env->getExtension("native_profiler");
        $__internal_4a37f4d1a7493c57f2b91db075456523d4aca81c3d47627a09504377819bb288->enter($__internal_4a37f4d1a7493c57f2b91db075456523d4aca81c3d47627a09504377819bb288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4a37f4d1a7493c57f2b91db075456523d4aca81c3d47627a09504377819bb288->leave($__internal_4a37f4d1a7493c57f2b91db075456523d4aca81c3d47627a09504377819bb288_prof);

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
