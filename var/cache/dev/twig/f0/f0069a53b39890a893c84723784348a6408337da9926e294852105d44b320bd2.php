<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ad38dd71b52075928a406dc7c47bca7b13d7b90adc0650a7d98b70155e3f92e8 extends Twig_Template
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
        $__internal_77d93b3b4e0a6c909b7342a8290ffd5448b8ef67fe48c86fbaf3124f86e32de7 = $this->env->getExtension("native_profiler");
        $__internal_77d93b3b4e0a6c909b7342a8290ffd5448b8ef67fe48c86fbaf3124f86e32de7->enter($__internal_77d93b3b4e0a6c909b7342a8290ffd5448b8ef67fe48c86fbaf3124f86e32de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_77d93b3b4e0a6c909b7342a8290ffd5448b8ef67fe48c86fbaf3124f86e32de7->leave($__internal_77d93b3b4e0a6c909b7342a8290ffd5448b8ef67fe48c86fbaf3124f86e32de7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
