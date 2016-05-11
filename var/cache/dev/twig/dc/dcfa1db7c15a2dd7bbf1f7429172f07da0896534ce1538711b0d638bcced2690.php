<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_782498e6afa8ff4a4b7381bf816ca9eba908f35447042214e938c048848317c9 extends Twig_Template
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
        $__internal_97f3e10f17e3b1d7e9affb2be49728dad24bc67c98556c1bff3a3da00fdd9067 = $this->env->getExtension("native_profiler");
        $__internal_97f3e10f17e3b1d7e9affb2be49728dad24bc67c98556c1bff3a3da00fdd9067->enter($__internal_97f3e10f17e3b1d7e9affb2be49728dad24bc67c98556c1bff3a3da00fdd9067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_97f3e10f17e3b1d7e9affb2be49728dad24bc67c98556c1bff3a3da00fdd9067->leave($__internal_97f3e10f17e3b1d7e9affb2be49728dad24bc67c98556c1bff3a3da00fdd9067_prof);

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
