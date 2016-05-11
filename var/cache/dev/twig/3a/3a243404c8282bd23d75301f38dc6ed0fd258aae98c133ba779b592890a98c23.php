<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4295061004848124ee0933a86d87aaf38129d4a81ea1b5b74f5432ceb51932c4 extends Twig_Template
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
        $__internal_90db41eb536d4a91bc5033fc066267611a6da7a1bceeccb69cdabb26a2e75b67 = $this->env->getExtension("native_profiler");
        $__internal_90db41eb536d4a91bc5033fc066267611a6da7a1bceeccb69cdabb26a2e75b67->enter($__internal_90db41eb536d4a91bc5033fc066267611a6da7a1bceeccb69cdabb26a2e75b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_90db41eb536d4a91bc5033fc066267611a6da7a1bceeccb69cdabb26a2e75b67->leave($__internal_90db41eb536d4a91bc5033fc066267611a6da7a1bceeccb69cdabb26a2e75b67_prof);

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
