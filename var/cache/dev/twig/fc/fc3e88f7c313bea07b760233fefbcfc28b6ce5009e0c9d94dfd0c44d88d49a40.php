<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dcd44fef04c0b84af175250f2a9a3e54a39e1df1922504778cb886aae53654fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4bfaa839b2f70044df14089a4b222352027df590848e4fbdb7a4811352e34eb4 = $this->env->getExtension("native_profiler");
        $__internal_4bfaa839b2f70044df14089a4b222352027df590848e4fbdb7a4811352e34eb4->enter($__internal_4bfaa839b2f70044df14089a4b222352027df590848e4fbdb7a4811352e34eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfaa839b2f70044df14089a4b222352027df590848e4fbdb7a4811352e34eb4->leave($__internal_4bfaa839b2f70044df14089a4b222352027df590848e4fbdb7a4811352e34eb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba58331660a60d1009c73c90b4de870a592d5b44fadeac69b698dac6902509c0 = $this->env->getExtension("native_profiler");
        $__internal_ba58331660a60d1009c73c90b4de870a592d5b44fadeac69b698dac6902509c0->enter($__internal_ba58331660a60d1009c73c90b4de870a592d5b44fadeac69b698dac6902509c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba58331660a60d1009c73c90b4de870a592d5b44fadeac69b698dac6902509c0->leave($__internal_ba58331660a60d1009c73c90b4de870a592d5b44fadeac69b698dac6902509c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d806ad8cd9b26c6677c069323a576762a6b7ed545649c94ead8244b062170ea9 = $this->env->getExtension("native_profiler");
        $__internal_d806ad8cd9b26c6677c069323a576762a6b7ed545649c94ead8244b062170ea9->enter($__internal_d806ad8cd9b26c6677c069323a576762a6b7ed545649c94ead8244b062170ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d806ad8cd9b26c6677c069323a576762a6b7ed545649c94ead8244b062170ea9->leave($__internal_d806ad8cd9b26c6677c069323a576762a6b7ed545649c94ead8244b062170ea9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8aa47499612f802b0fdc6343908e6de271bf90f7f4b762e001c7d0d5991aacc = $this->env->getExtension("native_profiler");
        $__internal_d8aa47499612f802b0fdc6343908e6de271bf90f7f4b762e001c7d0d5991aacc->enter($__internal_d8aa47499612f802b0fdc6343908e6de271bf90f7f4b762e001c7d0d5991aacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d8aa47499612f802b0fdc6343908e6de271bf90f7f4b762e001c7d0d5991aacc->leave($__internal_d8aa47499612f802b0fdc6343908e6de271bf90f7f4b762e001c7d0d5991aacc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
