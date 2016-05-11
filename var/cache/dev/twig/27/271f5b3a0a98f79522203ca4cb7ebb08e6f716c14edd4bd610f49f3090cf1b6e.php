<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5dc8fb28794ac6e5c9456adf3f6e460c9a917ba4c8c61fa83847e3bc10d4cd34 extends Twig_Template
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
        $__internal_f22aab775a628ff91c2f15b75e582e79f9d47c99c7b3ae5193c7086390ca4533 = $this->env->getExtension("native_profiler");
        $__internal_f22aab775a628ff91c2f15b75e582e79f9d47c99c7b3ae5193c7086390ca4533->enter($__internal_f22aab775a628ff91c2f15b75e582e79f9d47c99c7b3ae5193c7086390ca4533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f22aab775a628ff91c2f15b75e582e79f9d47c99c7b3ae5193c7086390ca4533->leave($__internal_f22aab775a628ff91c2f15b75e582e79f9d47c99c7b3ae5193c7086390ca4533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
