<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ba3ac1a6a0a8f0d7620f78ed57ab60401cf5937ccf981a66eb6b7e2ba9b2d16f extends Twig_Template
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
        $__internal_9bdf93eb6ed893d0cf19243ea2cf7c5d30d7c847330f3c0bb57c3be0ae504020 = $this->env->getExtension("native_profiler");
        $__internal_9bdf93eb6ed893d0cf19243ea2cf7c5d30d7c847330f3c0bb57c3be0ae504020->enter($__internal_9bdf93eb6ed893d0cf19243ea2cf7c5d30d7c847330f3c0bb57c3be0ae504020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9bdf93eb6ed893d0cf19243ea2cf7c5d30d7c847330f3c0bb57c3be0ae504020->leave($__internal_9bdf93eb6ed893d0cf19243ea2cf7c5d30d7c847330f3c0bb57c3be0ae504020_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
