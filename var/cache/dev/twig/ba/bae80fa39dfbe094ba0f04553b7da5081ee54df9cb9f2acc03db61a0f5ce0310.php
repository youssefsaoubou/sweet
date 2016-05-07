<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9cc3048855a30b0e2d2f7e2c002bcee173f63ac2eab80b404a0fa29a1efda68e extends Twig_Template
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
        $__internal_da8670949781b6a6eda5f36dcfdb85c9cf634f566b4c5567e2a5a1cc7eb6e4fd = $this->env->getExtension("native_profiler");
        $__internal_da8670949781b6a6eda5f36dcfdb85c9cf634f566b4c5567e2a5a1cc7eb6e4fd->enter($__internal_da8670949781b6a6eda5f36dcfdb85c9cf634f566b4c5567e2a5a1cc7eb6e4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_da8670949781b6a6eda5f36dcfdb85c9cf634f566b4c5567e2a5a1cc7eb6e4fd->leave($__internal_da8670949781b6a6eda5f36dcfdb85c9cf634f566b4c5567e2a5a1cc7eb6e4fd_prof);

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
