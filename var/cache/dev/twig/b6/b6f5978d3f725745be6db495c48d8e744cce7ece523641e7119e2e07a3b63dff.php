<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7e069bd675fc7183e3f580bdf5800b92ea85cdfd178c13871a6bf5e0e7d80125 extends Twig_Template
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
        $__internal_93c5776485e89dd3622664e1e0e55a67ba1e13c8620adf42f97caab23b3a62b7 = $this->env->getExtension("native_profiler");
        $__internal_93c5776485e89dd3622664e1e0e55a67ba1e13c8620adf42f97caab23b3a62b7->enter($__internal_93c5776485e89dd3622664e1e0e55a67ba1e13c8620adf42f97caab23b3a62b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_93c5776485e89dd3622664e1e0e55a67ba1e13c8620adf42f97caab23b3a62b7->leave($__internal_93c5776485e89dd3622664e1e0e55a67ba1e13c8620adf42f97caab23b3a62b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
