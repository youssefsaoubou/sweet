<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_822e5e47e1350e02d1c3728680d3d77a9c91f1d1825022bccdb4a61f39d9906b extends Twig_Template
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
        $__internal_cd03f62d57f270777b9e0b65287d5f00850eb136cef9b2b418635abcfa0ee68c = $this->env->getExtension("native_profiler");
        $__internal_cd03f62d57f270777b9e0b65287d5f00850eb136cef9b2b418635abcfa0ee68c->enter($__internal_cd03f62d57f270777b9e0b65287d5f00850eb136cef9b2b418635abcfa0ee68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cd03f62d57f270777b9e0b65287d5f00850eb136cef9b2b418635abcfa0ee68c->leave($__internal_cd03f62d57f270777b9e0b65287d5f00850eb136cef9b2b418635abcfa0ee68c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
