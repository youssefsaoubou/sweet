<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_208cb91160803ea119ccc212953b405045f5b1a7cef71aef10896c9861a6ea48 extends Twig_Template
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
        $__internal_1fd3cdf130a305e1d9a3dac43e630d5ae47c9e690921cd117b1c815577a3cc88 = $this->env->getExtension("native_profiler");
        $__internal_1fd3cdf130a305e1d9a3dac43e630d5ae47c9e690921cd117b1c815577a3cc88->enter($__internal_1fd3cdf130a305e1d9a3dac43e630d5ae47c9e690921cd117b1c815577a3cc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1fd3cdf130a305e1d9a3dac43e630d5ae47c9e690921cd117b1c815577a3cc88->leave($__internal_1fd3cdf130a305e1d9a3dac43e630d5ae47c9e690921cd117b1c815577a3cc88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
