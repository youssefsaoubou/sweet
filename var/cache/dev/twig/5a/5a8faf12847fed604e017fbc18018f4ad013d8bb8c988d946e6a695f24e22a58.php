<?php

/* default/paniervide.html.twig */
class __TwigTemplate_8cec70f61738993af5694f04cdb6b51b70db88743249fc37850f68cc2e6946f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/paniervide.html.twig", 1);
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
        $__internal_41ad22ca520f716b519f653f7c740af8ddcc65fbefbb1dfd1b6ec99abf2d8a23 = $this->env->getExtension("native_profiler");
        $__internal_41ad22ca520f716b519f653f7c740af8ddcc65fbefbb1dfd1b6ec99abf2d8a23->enter($__internal_41ad22ca520f716b519f653f7c740af8ddcc65fbefbb1dfd1b6ec99abf2d8a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/paniervide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ad22ca520f716b519f653f7c740af8ddcc65fbefbb1dfd1b6ec99abf2d8a23->leave($__internal_41ad22ca520f716b519f653f7c740af8ddcc65fbefbb1dfd1b6ec99abf2d8a23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e854e8133bf0cd594680d701ba6fa38235fad2d8111bd662a574c04ed23b7857 = $this->env->getExtension("native_profiler");
        $__internal_e854e8133bf0cd594680d701ba6fa38235fad2d8111bd662a574c04ed23b7857->enter($__internal_e854e8133bf0cd594680d701ba6fa38235fad2d8111bd662a574c04ed23b7857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- Breadcrumbs-->
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
\t\t\t<div class=\"big-icon\">
\t\t\t\t<span class=\"icon flaticon-shopping185\"></span>
\t\t\t</div>
\t\t\t<h1>Shopping Cart is Empty <span class=\"sub-header\">You have no items in your shopping cart.</span></h1>
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
\t\t<div class=\"divider-lg\">
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
        
        $__internal_e854e8133bf0cd594680d701ba6fa38235fad2d8111bd662a574c04ed23b7857->leave($__internal_e854e8133bf0cd594680d701ba6fa38235fad2d8111bd662a574c04ed23b7857_prof);

    }

    public function getTemplateName()
    {
        return "default/paniervide.html.twig";
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
/* 	<!-- Breadcrumbs-->*/
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
/* 			<div class="big-icon">*/
/* 				<span class="icon flaticon-shopping185"></span>*/
/* 			</div>*/
/* 			<h1>Shopping Cart is Empty <span class="sub-header">You have no items in your shopping cart.</span></h1>*/
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
/* 		<div class="divider-lg">*/
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
/* */
