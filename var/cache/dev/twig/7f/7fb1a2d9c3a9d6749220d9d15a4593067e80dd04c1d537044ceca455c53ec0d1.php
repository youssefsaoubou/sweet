<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3c76d3ca5a17d509a4006a5625401960d785d5cc82ff98cee19a61afcbaab4d8 extends Twig_Template
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
        $__internal_77c490f00dbc05c266de6caab8fc68920c4936e2c78094ee8f304e7991940c8f = $this->env->getExtension("native_profiler");
        $__internal_77c490f00dbc05c266de6caab8fc68920c4936e2c78094ee8f304e7991940c8f->enter($__internal_77c490f00dbc05c266de6caab8fc68920c4936e2c78094ee8f304e7991940c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77c490f00dbc05c266de6caab8fc68920c4936e2c78094ee8f304e7991940c8f->leave($__internal_77c490f00dbc05c266de6caab8fc68920c4936e2c78094ee8f304e7991940c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
