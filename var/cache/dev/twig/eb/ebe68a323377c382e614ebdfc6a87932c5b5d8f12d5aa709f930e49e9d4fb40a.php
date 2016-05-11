<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b1562af8a9df087ea7f210e1da2c0d85ef7ed57c8bd41ec0d0cbb369de0ec0af extends Twig_Template
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
        $__internal_d3032ae89e51e6ee28800caab3c9d2b2a65773d58d8c439c7b53d5f8695b3168 = $this->env->getExtension("native_profiler");
        $__internal_d3032ae89e51e6ee28800caab3c9d2b2a65773d58d8c439c7b53d5f8695b3168->enter($__internal_d3032ae89e51e6ee28800caab3c9d2b2a65773d58d8c439c7b53d5f8695b3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d3032ae89e51e6ee28800caab3c9d2b2a65773d58d8c439c7b53d5f8695b3168->leave($__internal_d3032ae89e51e6ee28800caab3c9d2b2a65773d58d8c439c7b53d5f8695b3168_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
