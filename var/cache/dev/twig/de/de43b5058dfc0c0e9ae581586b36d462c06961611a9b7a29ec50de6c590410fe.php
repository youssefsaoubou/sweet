<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8231ca5c1dba3660bd6661a5ab63c0cf5e6554472fe95e8a08f68321cf9f143b extends Twig_Template
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
        $__internal_d9119dbab4631814f3c61bec18d38c11f0bd5ff7a6393b7f5f3d5c6b7a19c19e = $this->env->getExtension("native_profiler");
        $__internal_d9119dbab4631814f3c61bec18d38c11f0bd5ff7a6393b7f5f3d5c6b7a19c19e->enter($__internal_d9119dbab4631814f3c61bec18d38c11f0bd5ff7a6393b7f5f3d5c6b7a19c19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d9119dbab4631814f3c61bec18d38c11f0bd5ff7a6393b7f5f3d5c6b7a19c19e->leave($__internal_d9119dbab4631814f3c61bec18d38c11f0bd5ff7a6393b7f5f3d5c6b7a19c19e_prof);

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
