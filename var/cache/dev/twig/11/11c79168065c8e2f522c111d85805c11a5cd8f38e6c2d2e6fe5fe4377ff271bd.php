<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_42cc907c26c88f9215da0e849bcff5192f0ae84932e4bfbf891f9f4422f39d36 extends Twig_Template
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
        $__internal_858375640e2b395ad67902ff02f5b382536d945f5550f54333c45b34a2bf7ef5 = $this->env->getExtension("native_profiler");
        $__internal_858375640e2b395ad67902ff02f5b382536d945f5550f54333c45b34a2bf7ef5->enter($__internal_858375640e2b395ad67902ff02f5b382536d945f5550f54333c45b34a2bf7ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_858375640e2b395ad67902ff02f5b382536d945f5550f54333c45b34a2bf7ef5->leave($__internal_858375640e2b395ad67902ff02f5b382536d945f5550f54333c45b34a2bf7ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
