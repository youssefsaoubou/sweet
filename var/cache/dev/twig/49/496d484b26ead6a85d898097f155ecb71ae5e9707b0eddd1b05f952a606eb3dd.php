<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_aef2ef247296024528a3fe2b7f1520fdba87ea964b5a80a038c63acd0e8e8740 extends Twig_Template
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
        $__internal_cffb8f7cc94b420a7961dfe76cf3f31c2af85d45e7f22c3db317c96559f0da2e = $this->env->getExtension("native_profiler");
        $__internal_cffb8f7cc94b420a7961dfe76cf3f31c2af85d45e7f22c3db317c96559f0da2e->enter($__internal_cffb8f7cc94b420a7961dfe76cf3f31c2af85d45e7f22c3db317c96559f0da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cffb8f7cc94b420a7961dfe76cf3f31c2af85d45e7f22c3db317c96559f0da2e->leave($__internal_cffb8f7cc94b420a7961dfe76cf3f31c2af85d45e7f22c3db317c96559f0da2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
