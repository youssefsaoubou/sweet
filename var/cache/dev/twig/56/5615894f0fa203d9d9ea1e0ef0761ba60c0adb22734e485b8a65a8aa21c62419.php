<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f1c381758243791b0d3715a9ded62261448db68220b24232ea5227bdc31db82f extends Twig_Template
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
        $__internal_4993a96c7d1e82ef0b70067213b3ac0d71ad5559efeec822f8f44776c9f50b39 = $this->env->getExtension("native_profiler");
        $__internal_4993a96c7d1e82ef0b70067213b3ac0d71ad5559efeec822f8f44776c9f50b39->enter($__internal_4993a96c7d1e82ef0b70067213b3ac0d71ad5559efeec822f8f44776c9f50b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4993a96c7d1e82ef0b70067213b3ac0d71ad5559efeec822f8f44776c9f50b39->leave($__internal_4993a96c7d1e82ef0b70067213b3ac0d71ad5559efeec822f8f44776c9f50b39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
