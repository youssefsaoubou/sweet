<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_69c4f4f02d7309f2f827747ea1368bc198c09c0b6f94fcfad33f5d4f196f64fc extends Twig_Template
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
        $__internal_fc0048d9fe971b714623e4d5dc37f2fee044ffd13495cdee5711b2c89002c742 = $this->env->getExtension("native_profiler");
        $__internal_fc0048d9fe971b714623e4d5dc37f2fee044ffd13495cdee5711b2c89002c742->enter($__internal_fc0048d9fe971b714623e4d5dc37f2fee044ffd13495cdee5711b2c89002c742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc0048d9fe971b714623e4d5dc37f2fee044ffd13495cdee5711b2c89002c742->leave($__internal_fc0048d9fe971b714623e4d5dc37f2fee044ffd13495cdee5711b2c89002c742_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c64349d8e8da6eed3db0d2ded28c32999402a8946d6adc3d80c187267dc7beff = $this->env->getExtension("native_profiler");
        $__internal_c64349d8e8da6eed3db0d2ded28c32999402a8946d6adc3d80c187267dc7beff->enter($__internal_c64349d8e8da6eed3db0d2ded28c32999402a8946d6adc3d80c187267dc7beff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c64349d8e8da6eed3db0d2ded28c32999402a8946d6adc3d80c187267dc7beff->leave($__internal_c64349d8e8da6eed3db0d2ded28c32999402a8946d6adc3d80c187267dc7beff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9479949771c4f4eb62a10330f62a2b54f5eb5b2561c59f771c825474f1ce5b2a = $this->env->getExtension("native_profiler");
        $__internal_9479949771c4f4eb62a10330f62a2b54f5eb5b2561c59f771c825474f1ce5b2a->enter($__internal_9479949771c4f4eb62a10330f62a2b54f5eb5b2561c59f771c825474f1ce5b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9479949771c4f4eb62a10330f62a2b54f5eb5b2561c59f771c825474f1ce5b2a->leave($__internal_9479949771c4f4eb62a10330f62a2b54f5eb5b2561c59f771c825474f1ce5b2a_prof);

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
