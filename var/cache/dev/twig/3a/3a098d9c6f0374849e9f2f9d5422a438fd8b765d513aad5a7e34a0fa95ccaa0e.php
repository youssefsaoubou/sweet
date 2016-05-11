<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8317c02f7c487e5072f5f9bbd0ed18bcb64b69da0ec9088ce975ce4417a455cd extends Twig_Template
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
        $__internal_99a24b5035acedc93e32505e8566fdb2498e38b31ac21dff6e5b610201cd2f9f = $this->env->getExtension("native_profiler");
        $__internal_99a24b5035acedc93e32505e8566fdb2498e38b31ac21dff6e5b610201cd2f9f->enter($__internal_99a24b5035acedc93e32505e8566fdb2498e38b31ac21dff6e5b610201cd2f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_99a24b5035acedc93e32505e8566fdb2498e38b31ac21dff6e5b610201cd2f9f->leave($__internal_99a24b5035acedc93e32505e8566fdb2498e38b31ac21dff6e5b610201cd2f9f_prof);

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
