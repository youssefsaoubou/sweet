<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_185fe8328cc484ba74756d26b8e6d7a910b007d03bd4cf062375bfe9a6c2563a extends Twig_Template
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
        $__internal_1a656443290f881dc5839ca048796d1d68d4c88abaf0da6c066976f0366aba90 = $this->env->getExtension("native_profiler");
        $__internal_1a656443290f881dc5839ca048796d1d68d4c88abaf0da6c066976f0366aba90->enter($__internal_1a656443290f881dc5839ca048796d1d68d4c88abaf0da6c066976f0366aba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1a656443290f881dc5839ca048796d1d68d4c88abaf0da6c066976f0366aba90->leave($__internal_1a656443290f881dc5839ca048796d1d68d4c88abaf0da6c066976f0366aba90_prof);

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
