<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_660f1fe057d183181a4ee3855e98f7081db4b89fdd6a44ffc1afaacf595edb6d extends Twig_Template
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
        $__internal_32394e2510bca2bbeb3e842ca406bd649a97c78c1f9df590bdfdffb8160a0196 = $this->env->getExtension("native_profiler");
        $__internal_32394e2510bca2bbeb3e842ca406bd649a97c78c1f9df590bdfdffb8160a0196->enter($__internal_32394e2510bca2bbeb3e842ca406bd649a97c78c1f9df590bdfdffb8160a0196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_32394e2510bca2bbeb3e842ca406bd649a97c78c1f9df590bdfdffb8160a0196->leave($__internal_32394e2510bca2bbeb3e842ca406bd649a97c78c1f9df590bdfdffb8160a0196_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
