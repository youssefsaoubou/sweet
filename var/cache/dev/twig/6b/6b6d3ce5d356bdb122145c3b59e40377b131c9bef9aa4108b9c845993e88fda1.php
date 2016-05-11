<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ce28201950f9158e5a3f51478ec935f1b49f4a3df4c8fe0740a9ca45aa48639d extends Twig_Template
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
        $__internal_8a6b97da4846315063b1507302aa0c941ea2dba1a4c636e3de27444e3636cc2d = $this->env->getExtension("native_profiler");
        $__internal_8a6b97da4846315063b1507302aa0c941ea2dba1a4c636e3de27444e3636cc2d->enter($__internal_8a6b97da4846315063b1507302aa0c941ea2dba1a4c636e3de27444e3636cc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8a6b97da4846315063b1507302aa0c941ea2dba1a4c636e3de27444e3636cc2d->leave($__internal_8a6b97da4846315063b1507302aa0c941ea2dba1a4c636e3de27444e3636cc2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
