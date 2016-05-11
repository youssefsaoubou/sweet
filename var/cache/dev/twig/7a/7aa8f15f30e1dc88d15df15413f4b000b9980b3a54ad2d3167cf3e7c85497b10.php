<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_25d204944c45242b3774fbf585d1dac71f1f93fd37d10975bc03ddfadc6ad197 extends Twig_Template
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
        $__internal_fff124de1c88348609d2846a58782977b2d0d1b2041031f71f1bd33d8a00a872 = $this->env->getExtension("native_profiler");
        $__internal_fff124de1c88348609d2846a58782977b2d0d1b2041031f71f1bd33d8a00a872->enter($__internal_fff124de1c88348609d2846a58782977b2d0d1b2041031f71f1bd33d8a00a872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fff124de1c88348609d2846a58782977b2d0d1b2041031f71f1bd33d8a00a872->leave($__internal_fff124de1c88348609d2846a58782977b2d0d1b2041031f71f1bd33d8a00a872_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
