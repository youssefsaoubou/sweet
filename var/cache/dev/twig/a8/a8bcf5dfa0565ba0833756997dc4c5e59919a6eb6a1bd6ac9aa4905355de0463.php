<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c6feb18ee60ebb8f857b969b00a2f1e111d5efc867f75c7a3bbfc22d205ab90d extends Twig_Template
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
        $__internal_9cdc5e44b5e3d1be07d21dac943c277f5a86940a1f0a91aef4ae9f8f97e27251 = $this->env->getExtension("native_profiler");
        $__internal_9cdc5e44b5e3d1be07d21dac943c277f5a86940a1f0a91aef4ae9f8f97e27251->enter($__internal_9cdc5e44b5e3d1be07d21dac943c277f5a86940a1f0a91aef4ae9f8f97e27251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9cdc5e44b5e3d1be07d21dac943c277f5a86940a1f0a91aef4ae9f8f97e27251->leave($__internal_9cdc5e44b5e3d1be07d21dac943c277f5a86940a1f0a91aef4ae9f8f97e27251_prof);

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
