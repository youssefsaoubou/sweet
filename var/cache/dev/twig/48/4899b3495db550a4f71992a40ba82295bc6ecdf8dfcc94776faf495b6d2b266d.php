<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8a9ad492c8fd9925c2881e646a816180cdbd9312322a07ecaf40722cda38d874 extends Twig_Template
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
        $__internal_0c137f24038c4a2b9e7ba6632571157ca4af2077b38e3700223de63187795568 = $this->env->getExtension("native_profiler");
        $__internal_0c137f24038c4a2b9e7ba6632571157ca4af2077b38e3700223de63187795568->enter($__internal_0c137f24038c4a2b9e7ba6632571157ca4af2077b38e3700223de63187795568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0c137f24038c4a2b9e7ba6632571157ca4af2077b38e3700223de63187795568->leave($__internal_0c137f24038c4a2b9e7ba6632571157ca4af2077b38e3700223de63187795568_prof);

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
