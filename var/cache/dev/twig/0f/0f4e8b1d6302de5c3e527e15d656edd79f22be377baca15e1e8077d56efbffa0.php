<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a2da17b92a181a05cbe30a85a29f9f39f046364073a5e339fee3d96fcac397fb extends Twig_Template
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
        $__internal_1fbdaf791152640882b77509314ed5e5a2a96dddcc9cff09d35a4a79f08d9db6 = $this->env->getExtension("native_profiler");
        $__internal_1fbdaf791152640882b77509314ed5e5a2a96dddcc9cff09d35a4a79f08d9db6->enter($__internal_1fbdaf791152640882b77509314ed5e5a2a96dddcc9cff09d35a4a79f08d9db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1fbdaf791152640882b77509314ed5e5a2a96dddcc9cff09d35a4a79f08d9db6->leave($__internal_1fbdaf791152640882b77509314ed5e5a2a96dddcc9cff09d35a4a79f08d9db6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
