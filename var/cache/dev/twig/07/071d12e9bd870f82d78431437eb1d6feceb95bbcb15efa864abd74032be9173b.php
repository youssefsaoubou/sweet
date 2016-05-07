<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1fac41481eda30ddfc5b43fcbedcbac71e0ea9d6b8ec37c9bbe3098aecca97fc extends Twig_Template
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
        $__internal_32ea07996ce7d690c5fbdbfa142fb88412718697997430d3d1f0491654d356e0 = $this->env->getExtension("native_profiler");
        $__internal_32ea07996ce7d690c5fbdbfa142fb88412718697997430d3d1f0491654d356e0->enter($__internal_32ea07996ce7d690c5fbdbfa142fb88412718697997430d3d1f0491654d356e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_32ea07996ce7d690c5fbdbfa142fb88412718697997430d3d1f0491654d356e0->leave($__internal_32ea07996ce7d690c5fbdbfa142fb88412718697997430d3d1f0491654d356e0_prof);

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
