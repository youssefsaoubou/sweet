<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_610a6885318d8f38dc4dbcd5954b4850e6eb177f4397766e10c6d2b96d8e2bcc extends Twig_Template
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
        $__internal_13ef941942d63f516e7f3fcf7c71515dc227c46b61810637107709a45720992b = $this->env->getExtension("native_profiler");
        $__internal_13ef941942d63f516e7f3fcf7c71515dc227c46b61810637107709a45720992b->enter($__internal_13ef941942d63f516e7f3fcf7c71515dc227c46b61810637107709a45720992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_13ef941942d63f516e7f3fcf7c71515dc227c46b61810637107709a45720992b->leave($__internal_13ef941942d63f516e7f3fcf7c71515dc227c46b61810637107709a45720992b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
