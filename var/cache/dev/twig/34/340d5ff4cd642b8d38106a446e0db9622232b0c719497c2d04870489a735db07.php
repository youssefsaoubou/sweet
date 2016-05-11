<?php

/* base.html.twig */
class __TwigTemplate_329b39f9b051d671c35f8e69872d8b389919e2bbf45734eaa51a62642e5e3201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_626e211f746264ee12e7189964f0d877eaf334f0a21a7c59f57b5ee816317c3a = $this->env->getExtension("native_profiler");
        $__internal_626e211f746264ee12e7189964f0d877eaf334f0a21a7c59f57b5ee816317c3a->enter($__internal_626e211f746264ee12e7189964f0d877eaf334f0a21a7c59f57b5ee816317c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
      <meta charset=\"utf-8\">
<!--[if IE]>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<![endif]--  >
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<title>Mansourya Création </title>
<link rel=\"shortcut icon\" href=\"favicon.ico\">
<!-- Bootstrap core CSS -->
";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 30
        echo "    </head>
    <body>
        <body class=\"responsive\">
<div class=\"loader\">
    <div class=\"fond\">
        <div class=\"contener_general\">
            <div class=\"contener_mixte\">
                <div class=\"ballcolor ball_1\">
                     &nbsp;
                </div>
            </div>
            <div class=\"contener_mixte\">
                <div class=\"ballcolor ball_2\">
                     &nbsp;
                </div>
            </div>
            <div class=\"contener_mixte\">
                <div class=\"ballcolor ball_3\">
                     &nbsp;
                </div>
            </div>
            <div class=\"contener_mixte\">
                <div class=\"ballcolor ball_4\">
                     &nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 59
        $this->loadTemplate("menumobile.html.twig", "base.html.twig", 59)->display($context);
        // line 60
        echo "<!-- //end Off Canvas Menu -->
<!-- //end Off Canvas Menu -->
<div id=\"outer\">
    <div id=\"outer-canvas\">
        <!-- Navbar -->
        <header>
        <!-- Search -->
        <div id=\"openSearch\">
            <div class=\"container\">
                <div class=\"inside\">
                    <form id=\"searchHeader\" method=\"get\" action=\"#\">
                        <div class=\"input-outer\">
                            <input type=\"text\" class=\"search-input\" value=\"SEARCH...\" onblur=\"if (this.value == '') {this.value = 'SEARCH...';}\" onfocus=\"if(this.value == 'SEARCH...') {this.value = '';}\">
                        </div>
                        <div class=\"button-outer\">
                            <button type=\"button\" class=\"pull-right search-close\"><i class=\"icon\">&#10005;</i></button>
                            <button type=\"submit\" class=\"pull-right\"><i class=\"icon icon-xl flaticon-zoom45\"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- //end Search -->
        <div id=\"newsLine\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-md-2 hidden-xs\">
                        <div class=\"title upper\">
                            <i class=\"icon flaticon-news\"></i>Nouvelles
                        </div>
                    </div>
                    <div class=\"col-xs-5 col-sm-6 col-md-7 col-xs-push-1 col-sm-push-0\">
                        <div id=\"newsCarousel\" class=\"slick-style1\">
                            <div class=\"item upper\">
                                <div class=\"marquee\">
                                    <span class=\"date\">10.10.2015.</span> Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellus id nisi vitae odio pretium aliquam.
                                </div>
                            </div>
                            <div class=\"item upper\">
                                <div class=\"marquee\">
                                    <span class=\"date\">14.10.2015.</span> Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellus id nisi vitae odio pretium aliquam.
                                </div>
                            </div>
                            <div class=\"item upper\">
                                <div class=\"marquee\">
                                    <span class=\"date\">20.10.2015.</span> Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellu id nisi vitae odio pretium aliquam.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-5 col-sm-3 col-md-2 top-link pull-right\">
                        <div class=\"btn-outer btn-search\">
                            <a href=\"#\" class=\"btn btn-xs btn-default\" data-toggle=\"dropdown\"><span class=\"icon icon-lg flaticon-zoom45\"></span></a>
                        </div>
                        <div class=\"btn-outer btn-shopping-cart\">
                            <a href=\"#drop-shopcart\" class=\"btn btn-xs btn-default open-cart\" data-toggle=\"dropdown\"><span class=\"icon icon-md flaticon-shopping66\"></span><span class=\"badge\">3</span></a>
                            <div class=\"hidden\">
                                <div id=\"drop-shopcart\" class=\"shoppingcart-box\">
                                    <div class=\"title\">
                                         Shopping cart
                                    </div>
                                    <div class=\" hidden\" id=\"liTemplate\">
                                        <div class=\"item animate-delay fadeInRight\">
                                            <div class=\"image\">
                                            </div>
                                            <div class=\"description\">
                                                <span class=\"product-name\"></span><strong class=\"price\"></strong>
                                            </div>
                                            <div class=\"buttons\">
                                                <a href=\"#\" class=\"icon icon-sm flaticon-write13\"></a><a href=\"#\" class=\"icon icon-sm flaticon-recycle59 remove-from-cart\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"list animate-delay-outer\">
                                        <div class=\"item animate-delay fadeInRight\">
                                            <div class=\"image\">
                                                <a href=\"product.html\" class=\"preview-image\"><img src=\"images/products/product-03.jpg\" alt=\"\"></a>
                                            </div>
                                            <div class=\"description\">
                                                <a href=\"#\">Mauris et ligula quis</a><strong class=\"price\">1 x \$44.95</strong>
                                            </div>
                                            <div class=\"buttons\">
                                                <a href=\"#\" class=\"icon icon-sm flaticon-write13\"></a><a href=\"#\" class=\"icon icon-sm flaticon-recycle59 remove-from-cart\"></a>
                                            </div>
                                        </div>
                                        <div class=\"item animate-delay fadeInRight\">
                                            <div class=\"image\">
                                                <a href=\"product.html\" class=\"preview-image\"><img src=\"images/products/product-05.jpg\" alt=\"\"></a>
                                            </div>
                                            <div class=\"description\">
                                                <a href=\"#\">Mauris et ligula quis</a><strong class=\"price\">1 x \$44.95</strong>
                                            </div>
                                            <div class=\"buttons\">
                                                <a href=\"#\" class=\"icon icon-sm flaticon-write13\"></a><a href=\"#\" class=\"icon icon-sm flaticon-recycle59 remove-from-cart\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"total\">
                                         Total: <strong>\$44.95</strong>
                                    </div>
                                    <div class=\"empty\">
                                         Shopping cart is empty
                                    </div>
                                    <a href=\"checkout.html\" class=\"btn btn-cool\">Proceed to Checkout</a>
                                    <div class=\"view-link\">
                                        <a href=\"shopping-cart.html\">View shopping cart </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to top -->
        <div class=\"back-to-top\">
            <span class=\"arrow-up\"><img src=\"images/icon-scroll-arrow.png\" alt=\"\"></span><img src=\"images/icon-scroll-mouse.png\" alt=\"\">
        </div>
        <!-- //end Back to top -->
        <section class=\"navbar\">
        <div class=\"background\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"header-left col-sm-5 col-md-8\">
                        <div class=\"row\">
                            <div class=\"navbar-welcome col-md-6 compact-hidden hidden-sm hidden-xs\">
                                 Bienvenue !
                            </div>
                            <!-- Mobile menu Button-->
                            <div class=\"col-xs-2 visible-xs\">
                                <div class=\"expand-nav compact-hidden\">
                                    <a href=\"#off-canvas-menu\" id=\"off-canvas-menu-toggle\"><span class=\"icon icon-xl flaticon-menu29\"></span></a>
                                </div>
                            </div>
                            <!-- //end Mobile menu Button -->
                            <!-- Logo -->
                            <div class=\"navbar-logo col-xs-10 col-sm-10 col-md-6 text-center\">
                                <a href=\"index.html\"><img src=\"images/logo.png\" alt=\"Coolbaby\"></a>
                            </div>
                            <!-- //end Logo -->
                            <div class=\"clearfix visible-xs\">
                            </div>
                            <!-- Secondary menu -->
                            <div class=\"top-link pull-right compact-visible\">
                                <div class=\"btn-outer btn-shopping-cart\">
                                    <a href=\"#drop-shopcart\" class=\"btn btn-xs btn-default open-cart\" data-toggle=\"dropdown\"><span class=\"icon icon-md flaticon-shopping66\"></span><span class=\"badge\">3</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"navbar-secondary-menu col-sm-7 col-md-4 compact-hidden\">
                        <div class=\"btn-group\">
                            <a href=\"#\" title=\"Account\" class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon icon-lg flaticon-business137\"></span><span class=\"drop-title\">Account</span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Account</a></li>
                                <li><a href=\"#\">Wishlist</a></li>
                                <li><a href=\"#\">Checkout</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"page-logination.html\">Log In</a></li>
                                <li><a href=\"page-logination.html\">Sign Up</a></li>
                            </ul>
                        </div>
                        <div class=\"btn-group\">
                            <a href=\"#\" title=\"Language\" class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon icon-md flaticon-oval33\"></span><span class=\"drop-title\">Language</span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-en\">&nbsp;</span> English</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-de\">&nbsp;</span> German</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-fr\">&nbsp;</span> French</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-da\">&nbsp;</span> Danish</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-el\">&nbsp;</span> Greek</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-es\">&nbsp;</span> Spanish</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-it\">&nbsp;</span> Italian</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-nl\">&nbsp;</span> Dutch</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-pl\">&nbsp;</span> Polish</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-pt\">&nbsp;</span> Portuguese</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-ru\">&nbsp;</span> Russian</a></li>
                                <li><a href=\"#\"><span class=\"icon-flag icon-flag-sv\">&nbsp;</span> Swedish</a></li>
                            </ul>
                        </div>
                        <div class=\"btn-group\">
                            <a href=\"#\" title=\"Currency\" class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon\">\$</span><span class=\"drop-title\">Currency</span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">(\$) US Dollars</a></li>
                                <li><a href=\"#\">(€) Euro</a></li>
                                <li><a href=\"#\">(&pound;) British Pounds</a></li>
                            </ul>
                        </div>
                        <div class=\"btn-group\">
                            <a href=\"#\" title=\"Compare\" class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon icon-lg flaticon-bars34\"></span><span class=\"drop-title\">Compare</span></a>
                            <div class=\"dropdown-menu shoppingcart-box empty\" role=\"menu\">
                                 No items to compare
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main menu -->
            <!-- Main menu -->
            ";
        // line 258
        $this->loadTemplate("menu.html.twig", "base.html.twig", 258)->display($context);
        // line 259
        echo "        <!-- //end Main menu -->
        </div>
        </section>
        <!-- Navbar height -->
        <div class=\"navbar-height\">
        </div>
        <!-- //end Navbar height -->
        </header>
        <!-- //end Navbar -->
        <!-- Services -->
        <section class=\"services-block hidden-xs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-lg-4\">
                    <a href=\"index.html\" class=\"item anim-icon\"><span class=\"icon\"><img src=\"images/anim-icon-1.gif\" data-hover=\"images/anim-icon-1-hover.gif\" alt=\"\"/></span><span class=\"title\">Livraison gratuite à partire de 1000 dhs</span></a>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-lg-4\">
                    <a href=\"index.html\" class=\"item anim-icon\"><span class=\"icon\"><img src=\"images/anim-icon-2.gif\" data-hover=\"images/anim-icon-2-hover.gif\" alt=\"\"/></span><span class=\"title\">30 jours de retour</span></a>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-lg-4\">
                    <a href=\"index.html\" class=\"item anim-icon\"><span class=\"icon\"><img src=\"images/anim-icon-3.gif\" data-hover=\"images/anim-icon-3-hover.gif\" alt=\"\"/></span><span class=\"title\">24/7 Support </span></a>
                </div>
            </div>
        </div>
        </section>
        <!-- //end Services -->
        <!-- Slider -->
        <!-- //end Slider -->
        <!--Gallery-->
     ";
        // line 288
        $this->displayBlock('body', $context, $blocks);
        // line 290
        echo "    
    ";
        // line 291
        $this->loadTemplate("subscribe.html.twig", "base.html.twig", 291)->display($context);
        echo " 
    ";
        // line 292
        $this->loadTemplate("footer.html.twig", "base.html.twig", 292)->display($context);
        // line 293
        echo "        <div id=\"outer-overlay\">
        </div>
        <!-- //end Footer -->
    </div>
</div>
<!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
<![endif]-->
";
        // line 302
        $this->displayBlock('javascripts', $context, $blocks);
        // line 325
        echo "</body>
</html>
";
        
        $__internal_626e211f746264ee12e7189964f0d877eaf334f0a21a7c59f57b5ee816317c3a->leave($__internal_626e211f746264ee12e7189964f0d877eaf334f0a21a7c59f57b5ee816317c3a_prof);

    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
        $__internal_2e5faed3a332d3be1f3d48bcfc747c160f226d1805d1f9c84daa1a699618e856 = $this->env->getExtension("native_profiler");
        $__internal_2e5faed3a332d3be1f3d48bcfc747c160f226d1805d1f9c84daa1a699618e856->enter($__internal_2e5faed3a332d3be1f3d48bcfc747c160f226d1805d1f9c84daa1a699618e856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- CSS modules -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/flaticon/flaticon.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/liMarquee.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.nouislider.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elevatezoom.css"), "html", null, true);
        echo "\">
<!-- Custom styles for this template -->
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/coolbaby.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/css/settings.css"), "html", null, true);
        echo "\" media=\"screen\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/css/extralayers.css"), "html", null, true);
        echo "\" media=\"screen\"/>
";
        
        $__internal_2e5faed3a332d3be1f3d48bcfc747c160f226d1805d1f9c84daa1a699618e856->leave($__internal_2e5faed3a332d3be1f3d48bcfc747c160f226d1805d1f9c84daa1a699618e856_prof);

    }

    // line 288
    public function block_body($context, array $blocks = array())
    {
        $__internal_c81f83b9855b002b0764c979a805a030f0d10ff7ff32a1e41e892be3263164d4 = $this->env->getExtension("native_profiler");
        $__internal_c81f83b9855b002b0764c979a805a030f0d10ff7ff32a1e41e892be3263164d4->enter($__internal_c81f83b9855b002b0764c979a805a030f0d10ff7ff32a1e41e892be3263164d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 289
        echo "     ";
        
        $__internal_c81f83b9855b002b0764c979a805a030f0d10ff7ff32a1e41e892be3263164d4->leave($__internal_c81f83b9855b002b0764c979a805a030f0d10ff7ff32a1e41e892be3263164d4_prof);

    }

    // line 302
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3499ec60ff879695517ce62cbaa77985cae140cb776c78348b01f283ac0ae71f = $this->env->getExtension("native_profiler");
        $__internal_3499ec60ff879695517ce62cbaa77985cae140cb776c78348b01f283ac0ae71f->enter($__internal_3499ec60ff879695517ce62cbaa77985cae140cb776c78348b01f283ac0ae71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 303
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.custom.02163.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.finger.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/doubletaptogo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.liMarquee.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.plugin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/cloudzoom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/coolbaby.js"), "html", null, true);
        echo "\"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.ini.js"), "html", null, true);
        echo "\"></script>
<script src=\"js/jquery.nouislider.all.min.js\"></script>
";
        
        $__internal_3499ec60ff879695517ce62cbaa77985cae140cb776c78348b01f283ac0ae71f->leave($__internal_3499ec60ff879695517ce62cbaa77985cae140cb776c78348b01f283ac0ae71f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 322,  489 => 321,  485 => 320,  480 => 318,  476 => 317,  472 => 316,  468 => 315,  464 => 314,  460 => 313,  456 => 312,  452 => 311,  448 => 310,  444 => 309,  440 => 308,  436 => 307,  432 => 306,  428 => 305,  424 => 304,  419 => 303,  413 => 302,  406 => 289,  400 => 288,  391 => 28,  387 => 27,  382 => 25,  377 => 23,  373 => 22,  369 => 21,  365 => 20,  361 => 19,  357 => 18,  353 => 17,  347 => 15,  341 => 14,  332 => 325,  330 => 302,  319 => 293,  317 => 292,  313 => 291,  310 => 290,  308 => 288,  277 => 259,  275 => 258,  75 => 60,  73 => 59,  42 => 30,  40 => 14,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*       <meta charset="utf-8">*/
/* <!--[if IE]>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <![endif]--  >*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* <title>Mansourya Création </title>*/
/* <link rel="shortcut icon" href="favicon.ico">*/
/* <!-- Bootstrap core CSS -->*/
/* {% block css %}*/
/* <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">*/
/* <!-- CSS modules -->*/
/* <link rel="stylesheet" href="{{asset('fonts/flaticon/flaticon.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/slick.css')}}"/>*/
/* <link rel="stylesheet" href="{{asset('css/liMarquee.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/colorbox.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/jquery.nouislider.css')}}">*/
/* <link rel="stylesheet" href="{{asset('css/elevatezoom.css')}}">*/
/* <!-- Custom styles for this template -->*/
/* <link href="{{asset('css/coolbaby.css')}}" rel="stylesheet">*/
/* <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->*/
/* <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen"/>*/
/* <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/extralayers.css')}}" media="screen"/>*/
/* {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <body class="responsive">*/
/* <div class="loader">*/
/*     <div class="fond">*/
/*         <div class="contener_general">*/
/*             <div class="contener_mixte">*/
/*                 <div class="ballcolor ball_1">*/
/*                      &nbsp;*/
/*                 </div>*/
/*             </div>*/
/*             <div class="contener_mixte">*/
/*                 <div class="ballcolor ball_2">*/
/*                      &nbsp;*/
/*                 </div>*/
/*             </div>*/
/*             <div class="contener_mixte">*/
/*                 <div class="ballcolor ball_3">*/
/*                      &nbsp;*/
/*                 </div>*/
/*             </div>*/
/*             <div class="contener_mixte">*/
/*                 <div class="ballcolor ball_4">*/
/*                      &nbsp;*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% include 'menumobile.html.twig' %}*/
/* <!-- //end Off Canvas Menu -->*/
/* <!-- //end Off Canvas Menu -->*/
/* <div id="outer">*/
/*     <div id="outer-canvas">*/
/*         <!-- Navbar -->*/
/*         <header>*/
/*         <!-- Search -->*/
/*         <div id="openSearch">*/
/*             <div class="container">*/
/*                 <div class="inside">*/
/*                     <form id="searchHeader" method="get" action="#">*/
/*                         <div class="input-outer">*/
/*                             <input type="text" class="search-input" value="SEARCH..." onblur="if (this.value == '') {this.value = 'SEARCH...';}" onfocus="if(this.value == 'SEARCH...') {this.value = '';}">*/
/*                         </div>*/
/*                         <div class="button-outer">*/
/*                             <button type="button" class="pull-right search-close"><i class="icon">&#10005;</i></button>*/
/*                             <button type="submit" class="pull-right"><i class="icon icon-xl flaticon-zoom45"></i></button>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- //end Search -->*/
/*         <div id="newsLine">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 col-md-2 hidden-xs">*/
/*                         <div class="title upper">*/
/*                             <i class="icon flaticon-news"></i>Nouvelles*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-5 col-sm-6 col-md-7 col-xs-push-1 col-sm-push-0">*/
/*                         <div id="newsCarousel" class="slick-style1">*/
/*                             <div class="item upper">*/
/*                                 <div class="marquee">*/
/*                                     <span class="date">10.10.2015.</span> Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellus id nisi vitae odio pretium aliquam.*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item upper">*/
/*                                 <div class="marquee">*/
/*                                     <span class="date">14.10.2015.</span> Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellus id nisi vitae odio pretium aliquam.*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item upper">*/
/*                                 <div class="marquee">*/
/*                                     <span class="date">20.10.2015.</span> Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellu id nisi vitae odio pretium aliquam.*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-5 col-sm-3 col-md-2 top-link pull-right">*/
/*                         <div class="btn-outer btn-search">*/
/*                             <a href="#" class="btn btn-xs btn-default" data-toggle="dropdown"><span class="icon icon-lg flaticon-zoom45"></span></a>*/
/*                         </div>*/
/*                         <div class="btn-outer btn-shopping-cart">*/
/*                             <a href="#drop-shopcart" class="btn btn-xs btn-default open-cart" data-toggle="dropdown"><span class="icon icon-md flaticon-shopping66"></span><span class="badge">3</span></a>*/
/*                             <div class="hidden">*/
/*                                 <div id="drop-shopcart" class="shoppingcart-box">*/
/*                                     <div class="title">*/
/*                                          Shopping cart*/
/*                                     </div>*/
/*                                     <div class=" hidden" id="liTemplate">*/
/*                                         <div class="item animate-delay fadeInRight">*/
/*                                             <div class="image">*/
/*                                             </div>*/
/*                                             <div class="description">*/
/*                                                 <span class="product-name"></span><strong class="price"></strong>*/
/*                                             </div>*/
/*                                             <div class="buttons">*/
/*                                                 <a href="#" class="icon icon-sm flaticon-write13"></a><a href="#" class="icon icon-sm flaticon-recycle59 remove-from-cart"></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="list animate-delay-outer">*/
/*                                         <div class="item animate-delay fadeInRight">*/
/*                                             <div class="image">*/
/*                                                 <a href="product.html" class="preview-image"><img src="images/products/product-03.jpg" alt=""></a>*/
/*                                             </div>*/
/*                                             <div class="description">*/
/*                                                 <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>*/
/*                                             </div>*/
/*                                             <div class="buttons">*/
/*                                                 <a href="#" class="icon icon-sm flaticon-write13"></a><a href="#" class="icon icon-sm flaticon-recycle59 remove-from-cart"></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="item animate-delay fadeInRight">*/
/*                                             <div class="image">*/
/*                                                 <a href="product.html" class="preview-image"><img src="images/products/product-05.jpg" alt=""></a>*/
/*                                             </div>*/
/*                                             <div class="description">*/
/*                                                 <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>*/
/*                                             </div>*/
/*                                             <div class="buttons">*/
/*                                                 <a href="#" class="icon icon-sm flaticon-write13"></a><a href="#" class="icon icon-sm flaticon-recycle59 remove-from-cart"></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="total">*/
/*                                          Total: <strong>$44.95</strong>*/
/*                                     </div>*/
/*                                     <div class="empty">*/
/*                                          Shopping cart is empty*/
/*                                     </div>*/
/*                                     <a href="checkout.html" class="btn btn-cool">Proceed to Checkout</a>*/
/*                                     <div class="view-link">*/
/*                                         <a href="shopping-cart.html">View shopping cart </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Back to top -->*/
/*         <div class="back-to-top">*/
/*             <span class="arrow-up"><img src="images/icon-scroll-arrow.png" alt=""></span><img src="images/icon-scroll-mouse.png" alt="">*/
/*         </div>*/
/*         <!-- //end Back to top -->*/
/*         <section class="navbar">*/
/*         <div class="background">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="header-left col-sm-5 col-md-8">*/
/*                         <div class="row">*/
/*                             <div class="navbar-welcome col-md-6 compact-hidden hidden-sm hidden-xs">*/
/*                                  Bienvenue !*/
/*                             </div>*/
/*                             <!-- Mobile menu Button-->*/
/*                             <div class="col-xs-2 visible-xs">*/
/*                                 <div class="expand-nav compact-hidden">*/
/*                                     <a href="#off-canvas-menu" id="off-canvas-menu-toggle"><span class="icon icon-xl flaticon-menu29"></span></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- //end Mobile menu Button -->*/
/*                             <!-- Logo -->*/
/*                             <div class="navbar-logo col-xs-10 col-sm-10 col-md-6 text-center">*/
/*                                 <a href="index.html"><img src="images/logo.png" alt="Coolbaby"></a>*/
/*                             </div>*/
/*                             <!-- //end Logo -->*/
/*                             <div class="clearfix visible-xs">*/
/*                             </div>*/
/*                             <!-- Secondary menu -->*/
/*                             <div class="top-link pull-right compact-visible">*/
/*                                 <div class="btn-outer btn-shopping-cart">*/
/*                                     <a href="#drop-shopcart" class="btn btn-xs btn-default open-cart" data-toggle="dropdown"><span class="icon icon-md flaticon-shopping66"></span><span class="badge">3</span></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="navbar-secondary-menu col-sm-7 col-md-4 compact-hidden">*/
/*                         <div class="btn-group">*/
/*                             <a href="#" title="Account" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="icon icon-lg flaticon-business137"></span><span class="drop-title">Account</span></a>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 <li><a href="#">Account</a></li>*/
/*                                 <li><a href="#">Wishlist</a></li>*/
/*                                 <li><a href="#">Checkout</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="page-logination.html">Log In</a></li>*/
/*                                 <li><a href="page-logination.html">Sign Up</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="btn-group">*/
/*                             <a href="#" title="Language" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="icon icon-md flaticon-oval33"></span><span class="drop-title">Language</span></a>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-en">&nbsp;</span> English</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-de">&nbsp;</span> German</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-fr">&nbsp;</span> French</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-da">&nbsp;</span> Danish</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-el">&nbsp;</span> Greek</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-es">&nbsp;</span> Spanish</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-it">&nbsp;</span> Italian</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-nl">&nbsp;</span> Dutch</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-pl">&nbsp;</span> Polish</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-pt">&nbsp;</span> Portuguese</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-ru">&nbsp;</span> Russian</a></li>*/
/*                                 <li><a href="#"><span class="icon-flag icon-flag-sv">&nbsp;</span> Swedish</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="btn-group">*/
/*                             <a href="#" title="Currency" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="icon">$</span><span class="drop-title">Currency</span></a>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 <li><a href="#">($) US Dollars</a></li>*/
/*                                 <li><a href="#">(€) Euro</a></li>*/
/*                                 <li><a href="#">(&pound;) British Pounds</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="btn-group">*/
/*                             <a href="#" title="Compare" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="icon icon-lg flaticon-bars34"></span><span class="drop-title">Compare</span></a>*/
/*                             <div class="dropdown-menu shoppingcart-box empty" role="menu">*/
/*                                  No items to compare*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Main menu -->*/
/*             <!-- Main menu -->*/
/*             {% include 'menu.html.twig' %}*/
/*         <!-- //end Main menu -->*/
/*         </div>*/
/*         </section>*/
/*         <!-- Navbar height -->*/
/*         <div class="navbar-height">*/
/*         </div>*/
/*         <!-- //end Navbar height -->*/
/*         </header>*/
/*         <!-- //end Navbar -->*/
/*         <!-- Services -->*/
/*         <section class="services-block hidden-xs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12 col-sm-4 col-lg-4">*/
/*                     <a href="index.html" class="item anim-icon"><span class="icon"><img src="images/anim-icon-1.gif" data-hover="images/anim-icon-1-hover.gif" alt=""/></span><span class="title">Livraison gratuite à partire de 1000 dhs</span></a>*/
/*                 </div>*/
/*                 <div class="col-xs-12 col-sm-4 col-lg-4">*/
/*                     <a href="index.html" class="item anim-icon"><span class="icon"><img src="images/anim-icon-2.gif" data-hover="images/anim-icon-2-hover.gif" alt=""/></span><span class="title">30 jours de retour</span></a>*/
/*                 </div>*/
/*                 <div class="col-xs-12 col-sm-4 col-lg-4">*/
/*                     <a href="index.html" class="item anim-icon"><span class="icon"><img src="images/anim-icon-3.gif" data-hover="images/anim-icon-3-hover.gif" alt=""/></span><span class="title">24/7 Support </span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </section>*/
/*         <!-- //end Services -->*/
/*         <!-- Slider -->*/
/*         <!-- //end Slider -->*/
/*         <!--Gallery-->*/
/*      {% block body %}*/
/*      {% endblock %}*/
/*     */
/*     {% include 'subscribe.html.twig' %} */
/*     {% include 'footer.html.twig' %}*/
/*         <div id="outer-overlay">*/
/*         </div>*/
/*         <!-- //end Footer -->*/
/*     </div>*/
/* </div>*/
/* <!--[if lt IE 9]>*/
/*     <script src="js/html5shiv.js"></script>*/
/*     <script src="js/respond.min.js"></script>*/
/* <![endif]-->*/
/* {% block javascripts %}*/
/* <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>*/
/* <script src="{{asset('js/modernizr.custom.02163.js')}}"></script>*/
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
/* <script src="{{asset('js/jquery.countdown.min.js')}}"></script>*/
/* <script src="{{asset('js/cloudzoom.js')}}"></script>*/
/* <script src="{{asset('js/coolbaby.js')}}"></script>*/
/* <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.ini.js')}}"></script>*/
/* <script src="js/jquery.nouislider.all.min.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
