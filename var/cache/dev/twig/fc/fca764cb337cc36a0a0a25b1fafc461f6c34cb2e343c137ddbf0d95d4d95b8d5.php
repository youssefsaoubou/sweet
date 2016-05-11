<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3645943cdba8f1885814ff8d2452b331a876e4b2daca68a0075c8f3a21fd3afe extends Twig_Template
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
        $__internal_be3214bd8b585401e1e2f2b8536d242612b2a6d84ad1bfa24d46825ee8dfae0e = $this->env->getExtension("native_profiler");
        $__internal_be3214bd8b585401e1e2f2b8536d242612b2a6d84ad1bfa24d46825ee8dfae0e->enter($__internal_be3214bd8b585401e1e2f2b8536d242612b2a6d84ad1bfa24d46825ee8dfae0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_be3214bd8b585401e1e2f2b8536d242612b2a6d84ad1bfa24d46825ee8dfae0e->leave($__internal_be3214bd8b585401e1e2f2b8536d242612b2a6d84ad1bfa24d46825ee8dfae0e_prof);

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
