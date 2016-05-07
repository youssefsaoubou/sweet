<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4cdd3c69b4877978eb0d5666cad5aaf365d839757f38fe71e3a0d96feae58539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_266a724c8a690fc74aca834006e360fb9b7be815d97d5f4cbdd8c6755b87e302 = $this->env->getExtension("native_profiler");
        $__internal_266a724c8a690fc74aca834006e360fb9b7be815d97d5f4cbdd8c6755b87e302->enter($__internal_266a724c8a690fc74aca834006e360fb9b7be815d97d5f4cbdd8c6755b87e302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_266a724c8a690fc74aca834006e360fb9b7be815d97d5f4cbdd8c6755b87e302->leave($__internal_266a724c8a690fc74aca834006e360fb9b7be815d97d5f4cbdd8c6755b87e302_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23b90218fae802fe5129d632a62d06b32079814fbd80b887d66fd7ee7af4f63d = $this->env->getExtension("native_profiler");
        $__internal_23b90218fae802fe5129d632a62d06b32079814fbd80b887d66fd7ee7af4f63d->enter($__internal_23b90218fae802fe5129d632a62d06b32079814fbd80b887d66fd7ee7af4f63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23b90218fae802fe5129d632a62d06b32079814fbd80b887d66fd7ee7af4f63d->leave($__internal_23b90218fae802fe5129d632a62d06b32079814fbd80b887d66fd7ee7af4f63d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
