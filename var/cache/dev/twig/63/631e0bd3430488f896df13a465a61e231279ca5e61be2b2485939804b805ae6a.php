<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_305c297c861d6b7322208089bed97ce52f3c77c0b7d5aa7dd02e16b59e42aed4 extends Twig_Template
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
        $__internal_7d82ce2266e35dc34a2a7bacc508a30c4f6f6188dfd3e2dfbd99d535feba80a3 = $this->env->getExtension("native_profiler");
        $__internal_7d82ce2266e35dc34a2a7bacc508a30c4f6f6188dfd3e2dfbd99d535feba80a3->enter($__internal_7d82ce2266e35dc34a2a7bacc508a30c4f6f6188dfd3e2dfbd99d535feba80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7d82ce2266e35dc34a2a7bacc508a30c4f6f6188dfd3e2dfbd99d535feba80a3->leave($__internal_7d82ce2266e35dc34a2a7bacc508a30c4f6f6188dfd3e2dfbd99d535feba80a3_prof);

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
