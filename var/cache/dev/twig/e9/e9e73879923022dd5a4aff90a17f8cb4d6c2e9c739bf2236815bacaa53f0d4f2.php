<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b1bd134a72513c96a82601b1b9db858af195bf7a4bb4646663eadedc79ded5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be36006e9a265f5c58ae30c1b2c85c5576b37ec957a4d93d2a043b33bbdac93e = $this->env->getExtension("native_profiler");
        $__internal_be36006e9a265f5c58ae30c1b2c85c5576b37ec957a4d93d2a043b33bbdac93e->enter($__internal_be36006e9a265f5c58ae30c1b2c85c5576b37ec957a4d93d2a043b33bbdac93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be36006e9a265f5c58ae30c1b2c85c5576b37ec957a4d93d2a043b33bbdac93e->leave($__internal_be36006e9a265f5c58ae30c1b2c85c5576b37ec957a4d93d2a043b33bbdac93e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaaab4bc764feef63962c227627e6418525878bb1a75fe3003b7015116d2bd9f = $this->env->getExtension("native_profiler");
        $__internal_eaaab4bc764feef63962c227627e6418525878bb1a75fe3003b7015116d2bd9f->enter($__internal_eaaab4bc764feef63962c227627e6418525878bb1a75fe3003b7015116d2bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eaaab4bc764feef63962c227627e6418525878bb1a75fe3003b7015116d2bd9f->leave($__internal_eaaab4bc764feef63962c227627e6418525878bb1a75fe3003b7015116d2bd9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94dbc3282f9fc3a7348be8d4b6c14bdee75e29120d33477da61a013b6365ba8d = $this->env->getExtension("native_profiler");
        $__internal_94dbc3282f9fc3a7348be8d4b6c14bdee75e29120d33477da61a013b6365ba8d->enter($__internal_94dbc3282f9fc3a7348be8d4b6c14bdee75e29120d33477da61a013b6365ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_94dbc3282f9fc3a7348be8d4b6c14bdee75e29120d33477da61a013b6365ba8d->leave($__internal_94dbc3282f9fc3a7348be8d4b6c14bdee75e29120d33477da61a013b6365ba8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
