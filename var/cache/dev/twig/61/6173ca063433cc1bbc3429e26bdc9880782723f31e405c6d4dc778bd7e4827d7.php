<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a1f2fa28c6809766b52f91c373ae8949be68289973f4000c821aa60605abe079 extends Twig_Template
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
        $__internal_48d015887c9ce7aaa2a1069a4c060d76634ce01e9e91348c7b76ceca80cce528 = $this->env->getExtension("native_profiler");
        $__internal_48d015887c9ce7aaa2a1069a4c060d76634ce01e9e91348c7b76ceca80cce528->enter($__internal_48d015887c9ce7aaa2a1069a4c060d76634ce01e9e91348c7b76ceca80cce528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48d015887c9ce7aaa2a1069a4c060d76634ce01e9e91348c7b76ceca80cce528->leave($__internal_48d015887c9ce7aaa2a1069a4c060d76634ce01e9e91348c7b76ceca80cce528_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfd952d9ac07c9c247030e760abfebb419d105d78819de85fc70c9936ad80437 = $this->env->getExtension("native_profiler");
        $__internal_cfd952d9ac07c9c247030e760abfebb419d105d78819de85fc70c9936ad80437->enter($__internal_cfd952d9ac07c9c247030e760abfebb419d105d78819de85fc70c9936ad80437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cfd952d9ac07c9c247030e760abfebb419d105d78819de85fc70c9936ad80437->leave($__internal_cfd952d9ac07c9c247030e760abfebb419d105d78819de85fc70c9936ad80437_prof);

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
