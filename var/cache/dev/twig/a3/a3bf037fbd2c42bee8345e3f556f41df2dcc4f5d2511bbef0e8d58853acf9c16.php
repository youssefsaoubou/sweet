<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b7c9ed2e9fded0508becb0c3ee357ced499da2ca94e569a3afce557b32f96dfe extends Twig_Template
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
        $__internal_555a1f9af040ece07c5038f7a4f598559e638ce4c844cc34d7cb2b163e6f1b48 = $this->env->getExtension("native_profiler");
        $__internal_555a1f9af040ece07c5038f7a4f598559e638ce4c844cc34d7cb2b163e6f1b48->enter($__internal_555a1f9af040ece07c5038f7a4f598559e638ce4c844cc34d7cb2b163e6f1b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_555a1f9af040ece07c5038f7a4f598559e638ce4c844cc34d7cb2b163e6f1b48->leave($__internal_555a1f9af040ece07c5038f7a4f598559e638ce4c844cc34d7cb2b163e6f1b48_prof);

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
