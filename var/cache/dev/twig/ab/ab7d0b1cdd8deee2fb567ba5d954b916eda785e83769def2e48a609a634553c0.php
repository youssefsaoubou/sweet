<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5fb1a4268d01f5dd88930e08e01fae65310c001959c86a8fafba42c44e47cce3 extends Twig_Template
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
        $__internal_15cfe1498509e328d2a95e4888ac5fa7f7953bcc9fa5194a7a9ddd3579f68e99 = $this->env->getExtension("native_profiler");
        $__internal_15cfe1498509e328d2a95e4888ac5fa7f7953bcc9fa5194a7a9ddd3579f68e99->enter($__internal_15cfe1498509e328d2a95e4888ac5fa7f7953bcc9fa5194a7a9ddd3579f68e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_15cfe1498509e328d2a95e4888ac5fa7f7953bcc9fa5194a7a9ddd3579f68e99->leave($__internal_15cfe1498509e328d2a95e4888ac5fa7f7953bcc9fa5194a7a9ddd3579f68e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
