<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7788c43d3cf1962cbdcad4e18189e1e42f5cb3fa93c5e1e44b950b7cb8c894e2 extends Twig_Template
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
        $__internal_4282883b9991a68896b0af4127c9a078f5e54c3ed4e4d7fe3ad50359ba9e92ac = $this->env->getExtension("native_profiler");
        $__internal_4282883b9991a68896b0af4127c9a078f5e54c3ed4e4d7fe3ad50359ba9e92ac->enter($__internal_4282883b9991a68896b0af4127c9a078f5e54c3ed4e4d7fe3ad50359ba9e92ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4282883b9991a68896b0af4127c9a078f5e54c3ed4e4d7fe3ad50359ba9e92ac->leave($__internal_4282883b9991a68896b0af4127c9a078f5e54c3ed4e4d7fe3ad50359ba9e92ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
