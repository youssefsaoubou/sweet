<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81379caa85b2552726b3db74137f1c3c4f4984ae6154ab8ad0a36a4cbfbaa198 extends Twig_Template
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
        $__internal_6dc4ae0d22f4e1b2f30418c8cce31eb9f4f86ca219fc5e903daeeceb7c12b6ac = $this->env->getExtension("native_profiler");
        $__internal_6dc4ae0d22f4e1b2f30418c8cce31eb9f4f86ca219fc5e903daeeceb7c12b6ac->enter($__internal_6dc4ae0d22f4e1b2f30418c8cce31eb9f4f86ca219fc5e903daeeceb7c12b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6dc4ae0d22f4e1b2f30418c8cce31eb9f4f86ca219fc5e903daeeceb7c12b6ac->leave($__internal_6dc4ae0d22f4e1b2f30418c8cce31eb9f4f86ca219fc5e903daeeceb7c12b6ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
