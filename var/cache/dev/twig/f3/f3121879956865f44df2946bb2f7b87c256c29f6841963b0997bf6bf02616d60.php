<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_acd2b9f84b37c8ec6d8724d1236e5254db35473b7491c14dd81a863bb16dcd26 extends Twig_Template
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
        $__internal_401a5d0d73cb224aec89da08e015ce5b0118271223c121204ae54aba273270d8 = $this->env->getExtension("native_profiler");
        $__internal_401a5d0d73cb224aec89da08e015ce5b0118271223c121204ae54aba273270d8->enter($__internal_401a5d0d73cb224aec89da08e015ce5b0118271223c121204ae54aba273270d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_401a5d0d73cb224aec89da08e015ce5b0118271223c121204ae54aba273270d8->leave($__internal_401a5d0d73cb224aec89da08e015ce5b0118271223c121204ae54aba273270d8_prof);

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
