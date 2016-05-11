<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c908bf1918de33f906338684e9dbe400b6318ec0904556909b3008305c3df5a7 extends Twig_Template
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
        $__internal_1e5a36e29b47d6d5c22ab6a41f675ad9ba5613324fee22a9c14c868bb76c3002 = $this->env->getExtension("native_profiler");
        $__internal_1e5a36e29b47d6d5c22ab6a41f675ad9ba5613324fee22a9c14c868bb76c3002->enter($__internal_1e5a36e29b47d6d5c22ab6a41f675ad9ba5613324fee22a9c14c868bb76c3002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1e5a36e29b47d6d5c22ab6a41f675ad9ba5613324fee22a9c14c868bb76c3002->leave($__internal_1e5a36e29b47d6d5c22ab6a41f675ad9ba5613324fee22a9c14c868bb76c3002_prof);

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
