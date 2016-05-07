<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f12524ae8d2ce76a0791119a63028b816bf928737388270e67d7783a62fdf682 extends Twig_Template
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
        $__internal_6a1a04388777050b1c0b857fbb5d54130ea5c359b51a9c071373c6343ddfda27 = $this->env->getExtension("native_profiler");
        $__internal_6a1a04388777050b1c0b857fbb5d54130ea5c359b51a9c071373c6343ddfda27->enter($__internal_6a1a04388777050b1c0b857fbb5d54130ea5c359b51a9c071373c6343ddfda27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6a1a04388777050b1c0b857fbb5d54130ea5c359b51a9c071373c6343ddfda27->leave($__internal_6a1a04388777050b1c0b857fbb5d54130ea5c359b51a9c071373c6343ddfda27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
