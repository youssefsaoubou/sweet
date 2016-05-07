<?php

/* default/404.html.twig */
class __TwigTemplate_367e8095b1aab04332cfbf971e9960f193e2a640b664e853155d6444340e190e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9978d83706ec37ff85e20c857e52f91ddd3c2849d845b12c954de32d6fa35ac2 = $this->env->getExtension("native_profiler");
        $__internal_9978d83706ec37ff85e20c857e52f91ddd3c2849d845b12c954de32d6fa35ac2->enter($__internal_9978d83706ec37ff85e20c857e52f91ddd3c2849d845b12c954de32d6fa35ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9978d83706ec37ff85e20c857e52f91ddd3c2849d845b12c954de32d6fa35ac2->leave($__internal_9978d83706ec37ff85e20c857e52f91ddd3c2849d845b12c954de32d6fa35ac2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af5e7e8540d88fe3050e0c22328a9ebba87d2548c241fed8154ee12935db3db7 = $this->env->getExtension("native_profiler");
        $__internal_af5e7e8540d88fe3050e0c22328a9ebba87d2548c241fed8154ee12935db3db7->enter($__internal_af5e7e8540d88fe3050e0c22328a9ebba87d2548c241fed8154ee12935db3db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Breadcrumbs-->
\t\t<section class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<a href=\"index.html\">home</a><span class=\"divider\">&nbsp;</span><span>Shopping Cart</span>
\t\t</div>
\t\t</section>
\t\t<!-- //end Breadcrumbs -->
\t\t<!--Page Content-->
\t\t<section class=\"container content\">
\t\t<div class=\"subtitle\">
\t\t\t<div>
\t\t\t\t<span>Shopping Cart</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"divider-lg\">
\t\t</div>
\t\t<div class=\"divider-lg\">
\t\t</div>
\t\t<div class=\"text-center\">
\t\t\t<div class=\"extra-big-icon\">
\t\t\t\t<span class=\"icon flaticon-404\"></span>
\t\t\t</div>
\t\t\t<h1>Sorry!<span class=\"sub-header\">The page you requested was not found, and we have a fine guess why.</span></h1>
\t\t\t<ul class=\"arrow-list\">
\t\t\t\t<li>If you typed the URL directly, please make sure the spelling is correct.</li>
\t\t\t\t<li>If you clicked on a link to get here, the link is outdated.</li>
\t\t\t</ul>
\t\t\t<div class=\"divider-lg\">
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"btn btn-cool btn-lg\">BACK TO PREVIOUS PAGE </a>
\t\t</div>
\t\t<div class=\"divider-lg\">
\t\t</div>
\t\t<div class=\"divider-lg\">
\t\t</div>
\t\t<div class=\"divider-lg\">
\t\t</div>
\t\t</section>
\t\t<!-- //end Page Content -->
\t\t
";
        
        $__internal_af5e7e8540d88fe3050e0c22328a9ebba87d2548c241fed8154ee12935db3db7->leave($__internal_af5e7e8540d88fe3050e0c22328a9ebba87d2548c241fed8154ee12935db3db7_prof);

    }

    public function getTemplateName()
    {
        return "default/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <!-- Breadcrumbs-->*/
/* 		<section class="breadcrumbs">*/
/* 		<div class="container">*/
/* 			<a href="index.html">home</a><span class="divider">&nbsp;</span><span>Shopping Cart</span>*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Breadcrumbs -->*/
/* 		<!--Page Content-->*/
/* 		<section class="container content">*/
/* 		<div class="subtitle">*/
/* 			<div>*/
/* 				<span>Shopping Cart</span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="divider-lg">*/
/* 		</div>*/
/* 		<div class="divider-lg">*/
/* 		</div>*/
/* 		<div class="text-center">*/
/* 			<div class="extra-big-icon">*/
/* 				<span class="icon flaticon-404"></span>*/
/* 			</div>*/
/* 			<h1>Sorry!<span class="sub-header">The page you requested was not found, and we have a fine guess why.</span></h1>*/
/* 			<ul class="arrow-list">*/
/* 				<li>If you typed the URL directly, please make sure the spelling is correct.</li>*/
/* 				<li>If you clicked on a link to get here, the link is outdated.</li>*/
/* 			</ul>*/
/* 			<div class="divider-lg">*/
/* 			</div>*/
/* 			<a href="#" class="btn btn-cool btn-lg">BACK TO PREVIOUS PAGE </a>*/
/* 		</div>*/
/* 		<div class="divider-lg">*/
/* 		</div>*/
/* 		<div class="divider-lg">*/
/* 		</div>*/
/* 		<div class="divider-lg">*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Page Content -->*/
/* 		*/
/* {% endblock %}*/
