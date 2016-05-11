<?php

/* :default:404.html.twig */
class __TwigTemplate_e9e81bac2a35620b76642f33b970c804a642f2c243081aca9a5863abd1709265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:404.html.twig", 1);
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
        $__internal_9ef3cc5af5315aa54e4349168ee09fc31b4ee6abbfe9f1d40092dff04879f543 = $this->env->getExtension("native_profiler");
        $__internal_9ef3cc5af5315aa54e4349168ee09fc31b4ee6abbfe9f1d40092dff04879f543->enter($__internal_9ef3cc5af5315aa54e4349168ee09fc31b4ee6abbfe9f1d40092dff04879f543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ef3cc5af5315aa54e4349168ee09fc31b4ee6abbfe9f1d40092dff04879f543->leave($__internal_9ef3cc5af5315aa54e4349168ee09fc31b4ee6abbfe9f1d40092dff04879f543_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09444b134ecf5fce67953278992eaf4427d1778e731934a09b2068af8bb9ba6d = $this->env->getExtension("native_profiler");
        $__internal_09444b134ecf5fce67953278992eaf4427d1778e731934a09b2068af8bb9ba6d->enter($__internal_09444b134ecf5fce67953278992eaf4427d1778e731934a09b2068af8bb9ba6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09444b134ecf5fce67953278992eaf4427d1778e731934a09b2068af8bb9ba6d->leave($__internal_09444b134ecf5fce67953278992eaf4427d1778e731934a09b2068af8bb9ba6d_prof);

    }

    public function getTemplateName()
    {
        return ":default:404.html.twig";
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
