<?php

/* :default:login.html.twig */
class __TwigTemplate_5611136f8969e849e1869d55d6eef60c7cae7d731b051b574a8be5b5791de6f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:login.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_818dcdc0b3417ef544eef4ccea9108895f496c153ca79f5c165afd6520920809 = $this->env->getExtension("native_profiler");
        $__internal_818dcdc0b3417ef544eef4ccea9108895f496c153ca79f5c165afd6520920809->enter($__internal_818dcdc0b3417ef544eef4ccea9108895f496c153ca79f5c165afd6520920809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818dcdc0b3417ef544eef4ccea9108895f496c153ca79f5c165afd6520920809->leave($__internal_818dcdc0b3417ef544eef4ccea9108895f496c153ca79f5c165afd6520920809_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_311f89a8d8416e67d91916fcaf57c5237050c4e39d30b4924cbbeea828557e24 = $this->env->getExtension("native_profiler");
        $__internal_311f89a8d8416e67d91916fcaf57c5237050c4e39d30b4924cbbeea828557e24->enter($__internal_311f89a8d8416e67d91916fcaf57c5237050c4e39d30b4924cbbeea828557e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "
<!-- Bootstrap core CSS -->
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- CSS modules -->
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/flaticon/flaticon.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/liMarquee.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.nouislider.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-select.css"), "html", null, true);
        echo "\">
<!-- Custom styles for this template -->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/coolbaby.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/css/settings.css"), "html", null, true);
        echo "\" media=\"screen\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/css/extralayers.css"), "html", null, true);
        echo "\" media=\"screen\"/>

";
        
        $__internal_311f89a8d8416e67d91916fcaf57c5237050c4e39d30b4924cbbeea828557e24->leave($__internal_311f89a8d8416e67d91916fcaf57c5237050c4e39d30b4924cbbeea828557e24_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_96edeae3d7c909753a4770a0f47f5a63359bda2d81f235fa6ec4c708f1611969 = $this->env->getExtension("native_profiler");
        $__internal_96edeae3d7c909753a4770a0f47f5a63359bda2d81f235fa6ec4c708f1611969->enter($__internal_96edeae3d7c909753a4770a0f47f5a63359bda2d81f235fa6ec4c708f1611969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "<!-- Breadcrumbs-->
\t\t<section class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<a href=\"index.html\">home</a><span class=\"divider\">&nbsp;</span><span>SHOPPING CART</span>
\t\t</div>
\t\t</section>
\t\t<!-- //end Breadcrumbs -->
\t\t<!--Page Content-->
\t\t<section class=\"content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"subtitle\">
\t\t\t\t<div>
\t\t\t\t\t<span>Login</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"divider divider-sm\">
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"rect-nohover rect-equal-height\">
\t\t\t\t\t\t<h2>NEW CUSTOMERS</h2>
\t\t\t\t\t\t<div class=\"divider-xs\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tBy creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<button class=\"btn btn-cool btn-md-sm btn-bottom\" type=\"submit\">Create an account</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"rect-nohover rect-equal-height\">
\t\t\t\t\t\t<h2>REGISTERED CUSTOMERS</h2>
\t\t\t\t\t\t<div class=\"divider-xs\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tIf you have an account with us, please log in.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"divider-sm\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"your-name\" type=\"text\" class=\"form-control\" placeholder=\"Your name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"divider-sm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t Forgot Your Password?
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"divider-sm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-cool btn-md-sm btn-bottom\" type=\"submit\">Login</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider divider-lg\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"subtitle\">
\t\t\t\t<div class=\"subtitle\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<span>Social Connect</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\tYou can connect store account with you Social account so you could login easier in the future.
\t\t\t</div>
\t\t\t<div class=\"divider divider-md\">
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<a href=\"#\" class=\"sign-btn sign-btn-facebook\"><span class=\"icon flaticon-facebook12\"></span>Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" class=\"sign-btn sign-btn-twitter\"><span class=\"icon flaticon-social19\"></span>Sign in</a>
\t\t\t</div>
\t\t</div>
\t\t</section>
\t\t<!-- //end Page Content -->
";
        
        $__internal_96edeae3d7c909753a4770a0f47f5a63359bda2d81f235fa6ec4c708f1611969->leave($__internal_96edeae3d7c909753a4770a0f47f5a63359bda2d81f235fa6ec4c708f1611969_prof);

    }

    // line 100
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5e6ae05b5372e590cf49b326f3743ff4ec44d1e76542578b2e1e091da97748ff = $this->env->getExtension("native_profiler");
        $__internal_5e6ae05b5372e590cf49b326f3743ff4ec44d1e76542578b2e1e091da97748ff->enter($__internal_5e6ae05b5372e590cf49b326f3743ff4ec44d1e76542578b2e1e091da97748ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 101
        echo "<script src=\"asset('js/jquery-1.11.3.min.js')}}\"></script>
<script src=\"asset('js/modernizr.custom.02163.js')}}\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.finger.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/doubletaptogo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.liMarquee.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.plugin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"asaset('js/jquery.countdown.min.js')}}\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/cloudzoom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/coolbaby.js"), "html", null, true);
        echo "\"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.ini.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_5e6ae05b5372e590cf49b326f3743ff4ec44d1e76542578b2e1e091da97748ff->leave($__internal_5e6ae05b5372e590cf49b326f3743ff4ec44d1e76542578b2e1e091da97748ff_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 121,  258 => 120,  254 => 119,  249 => 117,  245 => 116,  241 => 115,  236 => 113,  232 => 112,  228 => 111,  224 => 110,  220 => 109,  216 => 108,  212 => 107,  208 => 106,  204 => 105,  200 => 104,  196 => 103,  192 => 101,  186 => 100,  101 => 21,  95 => 20,  85 => 17,  81 => 16,  76 => 14,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block css %}*/
/* */
/* <!-- Bootstrap core CSS -->*/
/* <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">*/
/* <!-- CSS modules -->*/
/* <link rel="stylesheet" href="{{asset('fonts/flaticon/flaticon.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/slick.css')}}"/>*/
/* <link rel="stylesheet" href="{{asset('css/liMarquee.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/colorbox.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/jquery.nouislider.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}">*/
/* <!-- Custom styles for this template -->*/
/* <link href="{{asset('css/coolbaby.css')}}" rel="stylesheet">*/
/* <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->*/
/* <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen"/>*/
/* <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/extralayers.css')}}" media="screen"/>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <!-- Breadcrumbs-->*/
/* 		<section class="breadcrumbs">*/
/* 		<div class="container">*/
/* 			<a href="index.html">home</a><span class="divider">&nbsp;</span><span>SHOPPING CART</span>*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Breadcrumbs -->*/
/* 		<!--Page Content-->*/
/* 		<section class="content">*/
/* 		<div class="container">*/
/* 			<div class="subtitle">*/
/* 				<div>*/
/* 					<span>Login</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="divider divider-sm">*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<div class="rect-nohover rect-equal-height">*/
/* 						<h2>NEW CUSTOMERS</h2>*/
/* 						<div class="divider-xs">*/
/* 						</div>*/
/* 						<p>*/
/* 							By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.*/
/* 						</p>*/
/* 						<button class="btn btn-cool btn-md-sm btn-bottom" type="submit">Create an account</button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<div class="rect-nohover rect-equal-height">*/
/* 						<h2>REGISTERED CUSTOMERS</h2>*/
/* 						<div class="divider-xs">*/
/* 						</div>*/
/* 						<p>*/
/* 							If you have an account with us, please log in.*/
/* 						</p>*/
/* 						<div class="divider-sm">*/
/* 						</div>*/
/* 						<form action="#">*/
/* 							<div class="form-group">*/
/* 								<input name="your-name" type="text" class="form-control" placeholder="Your name">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input name="password" type="password" class="form-control" placeholder="Password">*/
/* 							</div>*/
/* 							<div class="divider-sm">*/
/* 							</div>*/
/* 							<p>*/
/* 								 Forgot Your Password?*/
/* 							</p>*/
/* 							<div class="divider-sm">*/
/* 							</div>*/
/* 							<button class="btn btn-cool btn-md-sm btn-bottom" type="submit">Login</button>*/
/* 						</form>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="divider divider-lg">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="subtitle">*/
/* 				<div class="subtitle">*/
/* 					<div>*/
/* 						<span>Social Connect</span>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="text-center">*/
/* 				You can connect store account with you Social account so you could login easier in the future.*/
/* 			</div>*/
/* 			<div class="divider divider-md">*/
/* 			</div>*/
/* 			<div class="text-center">*/
/* 				<a href="#" class="sign-btn sign-btn-facebook"><span class="icon flaticon-facebook12"></span>Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="sign-btn sign-btn-twitter"><span class="icon flaticon-social19"></span>Sign in</a>*/
/* 			</div>*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Page Content -->*/
/* {% endblock %}*/
/* {% block javascript %}*/
/* <script src="asset('js/jquery-1.11.3.min.js')}}"></script>*/
/* <script src="asset('js/modernizr.custom.02163.js')}}"></script>*/
/* <script src="{{asset('js/jquery.finger.min.js')}}"></script>*/
/* <script src="{{asset('js/doubletaptogo.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>*/
/* <script src="{{asset('js/slick.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.parallax.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.inview.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.liMarquee.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.isotope.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.plugin.min.js')}}"></script>*/
/* <script src="asaset('js/jquery.countdown.min.js')}}"></script>*/
/* <script src="{{asset('js/cloudzoom.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap-select.js')}}"></script>*/
/* <script src="{{asset('js/coolbaby.js')}}"></script>*/
/* <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.ini.js')}}"></script>*/
/* */
/* {% endblock %}*/
