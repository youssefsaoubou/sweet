<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b7988baf5cb31347806a1e977c84e2b18e9ea5a3b19d785f74e3138fe9743889 extends Twig_Template
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
        $__internal_b686c160fc2a5d01d1ec866dfbef7a75216934054c22ff75df9da65c1749e6b9 = $this->env->getExtension("native_profiler");
        $__internal_b686c160fc2a5d01d1ec866dfbef7a75216934054c22ff75df9da65c1749e6b9->enter($__internal_b686c160fc2a5d01d1ec866dfbef7a75216934054c22ff75df9da65c1749e6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b686c160fc2a5d01d1ec866dfbef7a75216934054c22ff75df9da65c1749e6b9->leave($__internal_b686c160fc2a5d01d1ec866dfbef7a75216934054c22ff75df9da65c1749e6b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
