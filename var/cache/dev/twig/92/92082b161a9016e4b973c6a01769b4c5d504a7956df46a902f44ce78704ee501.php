<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2623fd6ef8a2105140b996fc0e37cf4e0892fdbca453e5e3aa8b738eef2eefff extends Twig_Template
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
        $__internal_854f8c7569202e3c5332a233bac3356ae031c8f3bbcc6218530122d1cc17738b = $this->env->getExtension("native_profiler");
        $__internal_854f8c7569202e3c5332a233bac3356ae031c8f3bbcc6218530122d1cc17738b->enter($__internal_854f8c7569202e3c5332a233bac3356ae031c8f3bbcc6218530122d1cc17738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_854f8c7569202e3c5332a233bac3356ae031c8f3bbcc6218530122d1cc17738b->leave($__internal_854f8c7569202e3c5332a233bac3356ae031c8f3bbcc6218530122d1cc17738b_prof);

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
