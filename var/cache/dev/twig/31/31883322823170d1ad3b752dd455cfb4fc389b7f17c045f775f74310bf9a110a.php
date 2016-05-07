<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9cf6cebbb2375cb7bb5f7956d195adb4c8e1f0b68946c40e4b432c5644f5becf extends Twig_Template
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
        $__internal_4a89631f32c0c52fa0b32955744eeafd818b77f44f625145caa379ebee070966 = $this->env->getExtension("native_profiler");
        $__internal_4a89631f32c0c52fa0b32955744eeafd818b77f44f625145caa379ebee070966->enter($__internal_4a89631f32c0c52fa0b32955744eeafd818b77f44f625145caa379ebee070966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4a89631f32c0c52fa0b32955744eeafd818b77f44f625145caa379ebee070966->leave($__internal_4a89631f32c0c52fa0b32955744eeafd818b77f44f625145caa379ebee070966_prof);

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
