<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0f76a4d36cb58972afa432b3c7cd2bfcbbaa755920c6fa46a0de3297d493b024 extends Twig_Template
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
        $__internal_e683a522674ff0a1d72b4190d9aba3fd1a6e78776ed84f40c0f5a1b9a4423660 = $this->env->getExtension("native_profiler");
        $__internal_e683a522674ff0a1d72b4190d9aba3fd1a6e78776ed84f40c0f5a1b9a4423660->enter($__internal_e683a522674ff0a1d72b4190d9aba3fd1a6e78776ed84f40c0f5a1b9a4423660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e683a522674ff0a1d72b4190d9aba3fd1a6e78776ed84f40c0f5a1b9a4423660->leave($__internal_e683a522674ff0a1d72b4190d9aba3fd1a6e78776ed84f40c0f5a1b9a4423660_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
