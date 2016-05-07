<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8475ba3057fe2a10df307415d8be879d96ae423c496825dbbc1ea0cc31e07e7f extends Twig_Template
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
        $__internal_79074016d6b76a25b6e438d37abd19241a539dbc4ea5c0bf367ce84d44deb25c = $this->env->getExtension("native_profiler");
        $__internal_79074016d6b76a25b6e438d37abd19241a539dbc4ea5c0bf367ce84d44deb25c->enter($__internal_79074016d6b76a25b6e438d37abd19241a539dbc4ea5c0bf367ce84d44deb25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_79074016d6b76a25b6e438d37abd19241a539dbc4ea5c0bf367ce84d44deb25c->leave($__internal_79074016d6b76a25b6e438d37abd19241a539dbc4ea5c0bf367ce84d44deb25c_prof);

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
