<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5ca1b8adeb1adfea4aa3340dfc7a6e8894ab1d4d375820e77c5382b358d61b03 extends Twig_Template
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
        $__internal_8ae7367cfc61120bd553820927f1e4db9ec0096bf6c7f71d67fb9608db8f2436 = $this->env->getExtension("native_profiler");
        $__internal_8ae7367cfc61120bd553820927f1e4db9ec0096bf6c7f71d67fb9608db8f2436->enter($__internal_8ae7367cfc61120bd553820927f1e4db9ec0096bf6c7f71d67fb9608db8f2436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8ae7367cfc61120bd553820927f1e4db9ec0096bf6c7f71d67fb9608db8f2436->leave($__internal_8ae7367cfc61120bd553820927f1e4db9ec0096bf6c7f71d67fb9608db8f2436_prof);

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
