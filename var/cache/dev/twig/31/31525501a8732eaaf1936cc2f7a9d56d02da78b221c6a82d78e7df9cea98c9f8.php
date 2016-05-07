<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_873a0ad1bb857a097ce72ac790a885ca92d766c0f471e28369a49e99143d7372 extends Twig_Template
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
        $__internal_f9622facd272ffefbed589a10613806dc7da5b315c4a8c60d53c45fa90ce74c3 = $this->env->getExtension("native_profiler");
        $__internal_f9622facd272ffefbed589a10613806dc7da5b315c4a8c60d53c45fa90ce74c3->enter($__internal_f9622facd272ffefbed589a10613806dc7da5b315c4a8c60d53c45fa90ce74c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f9622facd272ffefbed589a10613806dc7da5b315c4a8c60d53c45fa90ce74c3->leave($__internal_f9622facd272ffefbed589a10613806dc7da5b315c4a8c60d53c45fa90ce74c3_prof);

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
