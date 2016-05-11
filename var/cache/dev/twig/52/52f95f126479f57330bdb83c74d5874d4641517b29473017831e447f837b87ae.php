<?php

/* default/listing.html.twig */
class __TwigTemplate_a75a09e8928e2a68b9819c9dedd06e574b04c66d3ce5720ea7893ca8aa437d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/listing.html.twig", 1);
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
        $__internal_7579bbc2e11171be1e2bacf8d1cb72a03544a43c4c25d5ffd1b8ce0fe13157f5 = $this->env->getExtension("native_profiler");
        $__internal_7579bbc2e11171be1e2bacf8d1cb72a03544a43c4c25d5ffd1b8ce0fe13157f5->enter($__internal_7579bbc2e11171be1e2bacf8d1cb72a03544a43c4c25d5ffd1b8ce0fe13157f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7579bbc2e11171be1e2bacf8d1cb72a03544a43c4c25d5ffd1b8ce0fe13157f5->leave($__internal_7579bbc2e11171be1e2bacf8d1cb72a03544a43c4c25d5ffd1b8ce0fe13157f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_55715d9815db7c916884e35d33428cf7f45b5d2560b81590feb897b01ce28f56 = $this->env->getExtension("native_profiler");
        $__internal_55715d9815db7c916884e35d33428cf7f45b5d2560b81590feb897b01ce28f56->enter($__internal_55715d9815db7c916884e35d33428cf7f45b5d2560b81590feb897b01ce28f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"breadcrumbs\">
\t<div class=\"container\">
\t\t<a href=\"index.html\">home</a><span class=\"divider\">&nbsp;</span><a href=\"#\">women</a>
\t</div>
\t</section>
\t<!-- //end Breadcrumbs -->
\t<!-- Two columns content -->
\t<section class=\"container\">
\t<div class=\"row\">
\t\t<!-- Right column -->
\t\t<section class=\"col-sm-8 col-md-9 col-lg-10 content-center\">
\t\t<div class=\"row category-banners\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<a href=\"#\" title=\"category\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/category-banner1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></a>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<a href=\"#\" title=\"category\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/category-banner2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"divider divider-lg\">
\t\t</div>
\t\t<h1>Women</h1>
\t\t<!-- Description -->
\t\t<p>
\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Aenean dapibus, pede ac blandit tincidunt, ante nisi viverra libero, sit amet iaculis nisi tortor non orci. Ut in nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed in velit et lacus ullamcorper imperdiet.
\t\t</p>
\t\t<!-- //end Description -->
\t\t<!-- Filters -->
\t\t<div class=\"filters-panel\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-4 hidden-xs\">
\t\t\t\t\t<div class=\"view-mode\">
\t\t\t\t\t\t<a href=\"#\" class=\"view-grid active icon flaticon-tiles\"></a><a href=\"#\" class=\"view-list icon flaticon-menu29\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-4 hidden-xs\">
\t\t\t\t\t Show
\t\t\t\t\t<div class=\"btn-group btn-select perpage-select\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"value\">15</span><span class=\"caret min\"></span></a><a href=\"#\" class=\"icon flaticon-left33 sort-icon sort-icon-up\"></a><a href=\"#\" class=\"icon flaticon-left33 sort-icon sort-icon-down\"></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">30</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">50</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">100</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">All</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class=\"pagination pull-right text-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"icon flaticon-left33 pagination-prev\"></a><a href=\"#\">1</a><a href=\"#\">2</a><a href=\"#\">3</a><a href=\"#\">4</a><a href=\"#\" class=\"icon flaticon-play45 pagination-next\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- //end Filters -->
\t\t<!-- Listing products -->
\t\t<div class=\"products-list\">
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-listing-01.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"images/products/product-listing-02.jpg\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"label label-sale\">
\t\t\t\t\t\t\t<span>Sale</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"label label-sale-percent\">
\t\t\t\t\t\t\t<span>-25%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"label label-new\">
\t\t\t\t\t\t\t<span>New</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-01.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"countdown_box\">
\t\t\t\t\t\t<div class=\"countdown_inner\">
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\tspecial price valid:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"countdown1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t\t<i class=\"icon icon-color icon-color-pink\"></i><i class=\"icon icon-color icon-color-white\"></i><i class=\"icon icon-color icon-color-lightgrey\"></i><i class=\"icon icon-color icon-color-violet\"></i><i class=\"icon icon-color icon-color-blue\"></i><i class=\"icon icon-color icon-color-softyellow\"></i><i class=\"icon icon-color icon-color-lightgrayishpink\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-options-row\">
\t\t\t\t\t\t<i class=\"icon icon-color icon-color-pink\"></i><i class=\"icon icon-color icon-color-white\"></i><i class=\"icon icon-color icon-color-lightgrey\"></i><i class=\"icon icon-color icon-color-violet\"></i><i class=\"icon icon-color icon-color-blue\"></i><i class=\"icon icon-color icon-color-softyellow\"></i><i class=\"icon icon-color icon-color-lightgrayishpink\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-03.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-04.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t\t<i class=\"icon icon-color icon-color-pink\"></i><i class=\"icon icon-color icon-color-white\"></i><i class=\"icon icon-color icon-color-lightgrey\"></i><i class=\"icon icon-color icon-color-black\"></i><i class=\"icon icon-color icon-color-blue\"></i><i class=\"icon icon-color icon-color-softyellow\"></i><i class=\"icon icon-color icon-color-lightgrayishpink\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-options-row\">
\t\t\t\t\t\t<i class=\"icon icon-color icon-color-pink\"></i><i class=\"icon icon-color icon-color-white\"></i><i class=\"icon icon-color icon-color-lightgrey\"></i><i class=\"icon icon-color icon-color-black\"></i><i class=\"icon icon-color icon-color-blue\"></i><i class=\"icon icon-color icon-color-softyellow\"></i><i class=\"icon icon-color icon-color-lightgrayishpink\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-05.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-06.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-07.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-08.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-09.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-10.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-11.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"label label-sale\">
\t\t\t\t\t\t\t<span>Sale</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"label label-sale-percent\">
\t\t\t\t\t\t\t<span>-25%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"label label-new\">
\t\t\t\t\t\t\t<span>New</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-12.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-13.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-listing-14.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"product-preview-outer\">
\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-15.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-listing-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\tA Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"product-controls-list-row\">
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--
-->
\t\t</div>
\t\t<!-- product view ajax container -->
\t\t<div class=\"product-view-ajax-container\">
\t\t</div>
\t\t<!-- //end product view ajax container -->
\t\t<!-- Product view compact -->
\t\t<div class=\"product-view-ajax\">
\t\t\t<div class=\"layar\">
\t\t\t</div>
\t\t\t<div class=\"product-view-container\">
\t\t\t</div>
\t\t</div>
\t\t<!-- //end Product view compact -->
\t\t<!-- //end Listing products -->
\t\t<!-- Filters -->
\t\t<div class=\"filters-panel\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-4 hidden-xs\">
\t\t\t\t\t<div class=\"view-mode\">
\t\t\t\t\t\t<a href=\"#\" class=\"view-grid active\"><img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-grid.png"), "html", null, true);
        echo "\" alt=\"\"></a><a href=\"#\" class=\"view-list\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-list.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-4 hidden-xs\">
\t\t\t\t\t Show
\t\t\t\t\t<div class=\"btn-group btn-select perpage-select\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"value\">15</span><span class=\"caret min\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">30</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">50</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">100</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">All</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class=\"pagination pull-right text-right\">
\t\t\t\t\t\t<a href=\"#\">1</a><a href=\"#\">2</a><a href=\"#\">3</a><a href=\"#\">4</a><a href=\"#\">5</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- //end Filters -->
\t\t</section>
\t\t<!-- //end Right column -->
\t\t<!-- Left column -->
\t\t<aside class=\"col-sm-4 col-md-3 col-lg-2 content-aside\">
\t\t<div class=\"panel-group accordion-simple\">
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#box1\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> CATEGORY </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box1\" class=\"panel-collapse in\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul class=\"simple-list\">
\t\t\t\t\t\t\t<li><a href=\"listing.html\">Suits & Blazers (15)</a></li>
\t\t\t\t\t\t\t<li><a href=\"listing.html\">T-Shirts & Vests (15)</a></li>
\t\t\t\t\t\t\t<li><a href=\"listing.html\">Underwear & Socks (15)</a></li>
\t\t\t\t\t\t\t<li><a href=\"listing.html\">Jackets & Coats (15)</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#box2\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> PRICE SLIDER</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box2\" class=\"panel-collapse in\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"slider-range\">
\t\t\t\t\t\t\t<div class=\"min\">
\t\t\t\t\t\t\t\t\$<span id=\"value-lower\">19</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"max\">
\t\t\t\t\t\t\t\t\$<span id=\"value-upper\">3000</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" href=\"#box21\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> COLOR </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box21\" class=\"panel-collapse in\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul class=\"simple-list\">
\t\t\t\t\t\t\t<li class=\"color black\"><a href=\"listing.html\">Black (9)</a></li>
\t\t\t\t\t\t\t<li class=\"color brown\"><a href=\"listing.html\">Brown (2)</a></li>
\t\t\t\t\t\t\t<li class=\"color white\"><a href=\"listing.html\">White (1)</a></li>
\t\t\t\t\t\t\t<li class=\"color gray\"><a href=\"listing.html\">Gray (3)</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#box3\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> POPULAR TAGS</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box3\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<!-- Popular tags -->
\t\t\t\t\t\t<div class=\"cloud-tags\">
\t\t\t\t\t\t\t<a href=\"listing.html\" style=\"font-size: 0.92em\">Camera</a><a href=\"listing.html\" style=\"font-size: 1.31em\">Coats</a><a href=\"listing.html\" style=\"font-size: 1.15em\">Jackets</a><a href=\"listing.html\" style=\"font-size: 1.15em\">Jeans</a><a href=\"listing.html\" style=\"font-size: 1.15em\">Lingerie</a><a href=\"listing.html\" style=\"font-size: 1.15em\">Shirts</a><a href=\"listing.html\" style=\"font-size: 1.15em\">Shorts</a><a href=\"listing.html\" style=\"font-size: 1.15em\">Skirts</a><a href=\"listing.html\" style=\"font-size: 1.23em\">Tops</a><a href=\"listing.html\" style=\"font-size: 0.77em\">Apple</a><a href=\"listing.html\" style=\"font-size: 1.08em\">Awesome</a><a href=\"listing.html\" style=\"font-size: 0.92em\">Cool t-shirt</a><a href=\"listing.html\" style=\"font-size: 0.92em\">Dresses</a><a href=\"listing.html\" style=\"font-size: 0.92em\">Good laptop</a><a href=\"listing.html\" style=\"font-size: 0.92em\">Mobile</a><a href=\"listing.html\" style=\"font-size: 0.92em\">Nice notebook</a><a href=\"listing.html\" style=\"font-size: 1.12em\">Phone</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //end Popular tags -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#box22\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> PRICE SELECT</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box22\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul class=\"simple-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input name=\"checkbox-price-1\" type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t<span class=\"label\">\$0.00 - \$10,000.00 (13)</span></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input name=\"checkbox-price-2\" type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t<span class=\"label\">\$10,000.00 - \$20,000.00 (2)</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#box4\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> COMPARE PRODUCTS </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box4\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tYou have no items to compare.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#box5\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> COMMUNITY POLL</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box5\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form >
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>WHAT IS YOUR FAVORITE MAGENTO FEATURE?</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t\t\tLayered Navigation </label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\t\tPrice Rules </label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\">
\t\t\t\t\t\t\t\tCategory Management </label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios4\" value=\"option4\">
\t\t\t\t\t\t\t\tCompare Products </label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-cool\">Vote</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<a data-toggle=\"collapse\" class=\"collapsed\" href=\"#box23\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> BESTSELLERS </a>
\t\t\t\t</div>
\t\t\t\t<div id=\"box23\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"products-widget vertical\">
\t\t\t\t\t\t\t<div class=\"slides slick-style2\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive\" src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\">Product Example</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive\" src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-01.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\">Product Example</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive\" src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-03.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\">Product Example</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive\" src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-04.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\">Product Example</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive\" src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-05.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\">Product Example</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive\" src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-06.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"product.html\">Product Example</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</aside>
\t\t<!-- //end Left column -->
\t</div>
\t</section>
\t<!-- //end Two columns content -->
";
        
        $__internal_55715d9815db7c916884e35d33428cf7f45b5d2560b81590feb897b01ce28f56->leave($__internal_55715d9815db7c916884e35d33428cf7f45b5d2560b81590feb897b01ce28f56_prof);

    }

    public function getTemplateName()
    {
        return "default/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  910 => 774,  893 => 760,  876 => 746,  859 => 732,  842 => 718,  825 => 704,  656 => 540,  606 => 495,  575 => 467,  542 => 439,  509 => 411,  467 => 374,  434 => 346,  401 => 318,  368 => 290,  335 => 262,  302 => 234,  269 => 206,  230 => 172,  197 => 144,  149 => 101,  113 => 68,  61 => 19,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <section class="breadcrumbs">*/
/* 	<div class="container">*/
/* 		<a href="index.html">home</a><span class="divider">&nbsp;</span><a href="#">women</a>*/
/* 	</div>*/
/* 	</section>*/
/* 	<!-- //end Breadcrumbs -->*/
/* 	<!-- Two columns content -->*/
/* 	<section class="container">*/
/* 	<div class="row">*/
/* 		<!-- Right column -->*/
/* 		<section class="col-sm-8 col-md-9 col-lg-10 content-center">*/
/* 		<div class="row category-banners">*/
/* 			<div class="col-xs-6">*/
/* 				<a href="#" title="category"><img src="{{asset('images/category-banner1.jpg')}}" alt="" class="img-responsive"></a>*/
/* 			</div>*/
/* 			<div class="col-xs-6">*/
/* 				<a href="#" title="category"><img src="{{asset('images/category-banner2.jpg')}}" alt="" class="img-responsive"></a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="divider divider-lg">*/
/* 		</div>*/
/* 		<h1>Women</h1>*/
/* 		<!-- Description -->*/
/* 		<p>*/
/* 			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Aenean dapibus, pede ac blandit tincidunt, ante nisi viverra libero, sit amet iaculis nisi tortor non orci. Ut in nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed in velit et lacus ullamcorper imperdiet.*/
/* 		</p>*/
/* 		<!-- //end Description -->*/
/* 		<!-- Filters -->*/
/* 		<div class="filters-panel">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-3 col-md-3 col-lg-4 hidden-xs">*/
/* 					<div class="view-mode">*/
/* 						<a href="#" class="view-grid active icon flaticon-tiles"></a><a href="#" class="view-list icon flaticon-menu29"></a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-3 col-md-3 col-lg-4 hidden-xs">*/
/* 					 Show*/
/* 					<div class="btn-group btn-select perpage-select">*/
/* 						<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="value">15</span><span class="caret min"></span></a><a href="#" class="icon flaticon-left33 sort-icon sort-icon-up"></a><a href="#" class="icon flaticon-left33 sort-icon sort-icon-down"></a>*/
/* 						<ul class="dropdown-menu">*/
/* 							<li><a href="#">30</a></li>*/
/* 							<li><a href="#">50</a></li>*/
/* 							<li><a href="#">100</a></li>*/
/* 							<li><a href="#">All</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">*/
/* 					<div class="pagination pull-right text-right">*/
/* 						<a href="#" class="icon flaticon-left33 pagination-prev"></a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="icon flaticon-play45 pagination-next"></a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- //end Filters -->*/
/* 		<!-- Listing products -->*/
/* 		<div class="products-list">*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-listing-01.jpg" alt=""><img class="img-responsive img-second" src="images/products/product-listing-02.jpg" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="{{path('produits')}}">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="label label-sale">*/
/* 							<span>Sale</span>*/
/* 						</div>*/
/* 						<div class="label label-sale-percent">*/
/* 							<span>-25%</span>*/
/* 						</div>*/
/* 						<div class="label label-new">*/
/* 							<span>New</span>*/
/* 						</div>*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-01.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<div class="countdown_box">*/
/* 						<div class="countdown_inner">*/
/* 							<div class="title">*/
/* 								special price valid:*/
/* 							</div>*/
/* 							<div id="countdown1">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<div class="product-options">*/
/* 						<i class="icon icon-color icon-color-pink"></i><i class="icon icon-color icon-color-white"></i><i class="icon icon-color icon-color-lightgrey"></i><i class="icon icon-color icon-color-violet"></i><i class="icon icon-color icon-color-blue"></i><i class="icon icon-color icon-color-softyellow"></i><i class="icon icon-color icon-color-lightgrayishpink"></i>*/
/* 					</div>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<div class="product-options-row">*/
/* 						<i class="icon icon-color icon-color-pink"></i><i class="icon icon-color icon-color-white"></i><i class="icon icon-color icon-color-lightgrey"></i><i class="icon icon-color icon-color-violet"></i><i class="icon icon-color icon-color-blue"></i><i class="icon icon-color icon-color-softyellow"></i><i class="icon icon-color icon-color-lightgrayishpink"></i>*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-03.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-04.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<div class="product-options">*/
/* 						<i class="icon icon-color icon-color-pink"></i><i class="icon icon-color icon-color-white"></i><i class="icon icon-color icon-color-lightgrey"></i><i class="icon icon-color icon-color-black"></i><i class="icon icon-color icon-color-blue"></i><i class="icon icon-color icon-color-softyellow"></i><i class="icon icon-color icon-color-lightgrayishpink"></i>*/
/* 					</div>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<div class="product-options-row">*/
/* 						<i class="icon icon-color icon-color-pink"></i><i class="icon icon-color icon-color-white"></i><i class="icon icon-color icon-color-lightgrey"></i><i class="icon icon-color icon-color-black"></i><i class="icon icon-color icon-color-blue"></i><i class="icon icon-color icon-color-softyellow"></i><i class="icon icon-color icon-color-lightgrayishpink"></i>*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-05.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-06.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-07.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-08.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-09.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-10.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-11.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="label label-sale">*/
/* 							<span>Sale</span>*/
/* 						</div>*/
/* 						<div class="label label-sale-percent">*/
/* 							<span>-25%</span>*/
/* 						</div>*/
/* 						<div class="label label-new">*/
/* 							<span>New</span>*/
/* 						</div>*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-12.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-13.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview-image-outer">*/
/* 						<div class="preview">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-listing-14.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="product-preview-outer">*/
/* 				<div class="product-preview">*/
/* 					<div class="preview">*/
/* 						<div class="preview-image-outer">*/
/* 							<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-listing-15.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-listing-02.jpg')}}" alt=""></a>*/
/* 						</div>*/
/* 						<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 					</div>*/
/* 					<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 					<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 					<ul class="product-controls-list">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 					<div class="rating">*/
/* 						<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 					</div>*/
/* 					<div class="info">*/
/* 						A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash. A Black Multi-Coloured Printed Leggings for Women from Softwear. Made from Cotton and Lycra, this Leggings features Full Length, Designer printed , Casual wear, Normal Machine Wash.*/
/* 					</div>*/
/* 					<ul class="product-controls-list-row">*/
/* 						<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 						<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 						<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!--*/
/* -->*/
/* 		</div>*/
/* 		<!-- product view ajax container -->*/
/* 		<div class="product-view-ajax-container">*/
/* 		</div>*/
/* 		<!-- //end product view ajax container -->*/
/* 		<!-- Product view compact -->*/
/* 		<div class="product-view-ajax">*/
/* 			<div class="layar">*/
/* 			</div>*/
/* 			<div class="product-view-container">*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- //end Product view compact -->*/
/* 		<!-- //end Listing products -->*/
/* 		<!-- Filters -->*/
/* 		<div class="filters-panel">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-3 col-md-3 col-lg-4 hidden-xs">*/
/* 					<div class="view-mode">*/
/* 						<a href="#" class="view-grid active"><img src="{{asset('images/icon-grid.png')}}" alt=""></a><a href="#" class="view-list"><img src="{{asset('images/icon-list.png')}}" alt=""></a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-3 col-md-3 col-lg-4 hidden-xs">*/
/* 					 Show*/
/* 					<div class="btn-group btn-select perpage-select">*/
/* 						<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="value">15</span><span class="caret min"></span></a>*/
/* 						<ul class="dropdown-menu">*/
/* 							<li><a href="#">30</a></li>*/
/* 							<li><a href="#">50</a></li>*/
/* 							<li><a href="#">100</a></li>*/
/* 							<li><a href="#">All</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">*/
/* 					<div class="pagination pull-right text-right">*/
/* 						<a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- //end Filters -->*/
/* 		</section>*/
/* 		<!-- //end Right column -->*/
/* 		<!-- Left column -->*/
/* 		<aside class="col-sm-4 col-md-3 col-lg-2 content-aside">*/
/* 		<div class="panel-group accordion-simple">*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" href="#box1"><span class="arrow-down">+</span><span class="arrow-up">-</span> CATEGORY </a>*/
/* 				</div>*/
/* 				<div id="box1" class="panel-collapse in">*/
/* 					<div class="panel-body">*/
/* 						<ul class="simple-list">*/
/* 							<li><a href="listing.html">Suits & Blazers (15)</a></li>*/
/* 							<li><a href="listing.html">T-Shirts & Vests (15)</a></li>*/
/* 							<li><a href="listing.html">Underwear & Socks (15)</a></li>*/
/* 							<li><a href="listing.html">Jackets & Coats (15)</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" href="#box2"><span class="arrow-down">+</span><span class="arrow-up">-</span> PRICE SLIDER</a>*/
/* 				</div>*/
/* 				<div id="box2" class="panel-collapse in">*/
/* 					<div class="panel-body">*/
/* 						<div class="slider-range">*/
/* 							<div class="min">*/
/* 								$<span id="value-lower">19</span>*/
/* 							</div>*/
/* 							<div class="max">*/
/* 								$<span id="value-upper">3000</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" href="#box21"><span class="arrow-down">+</span><span class="arrow-up">-</span> COLOR </a>*/
/* 				</div>*/
/* 				<div id="box21" class="panel-collapse in">*/
/* 					<div class="panel-body">*/
/* 						<ul class="simple-list">*/
/* 							<li class="color black"><a href="listing.html">Black (9)</a></li>*/
/* 							<li class="color brown"><a href="listing.html">Brown (2)</a></li>*/
/* 							<li class="color white"><a href="listing.html">White (1)</a></li>*/
/* 							<li class="color gray"><a href="listing.html">Gray (3)</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" class="collapsed" href="#box3"><span class="arrow-down">+</span><span class="arrow-up">-</span> POPULAR TAGS</a>*/
/* 				</div>*/
/* 				<div id="box3" class="panel-collapse collapse">*/
/* 					<div class="panel-body">*/
/* 						<!-- Popular tags -->*/
/* 						<div class="cloud-tags">*/
/* 							<a href="listing.html" style="font-size: 0.92em">Camera</a><a href="listing.html" style="font-size: 1.31em">Coats</a><a href="listing.html" style="font-size: 1.15em">Jackets</a><a href="listing.html" style="font-size: 1.15em">Jeans</a><a href="listing.html" style="font-size: 1.15em">Lingerie</a><a href="listing.html" style="font-size: 1.15em">Shirts</a><a href="listing.html" style="font-size: 1.15em">Shorts</a><a href="listing.html" style="font-size: 1.15em">Skirts</a><a href="listing.html" style="font-size: 1.23em">Tops</a><a href="listing.html" style="font-size: 0.77em">Apple</a><a href="listing.html" style="font-size: 1.08em">Awesome</a><a href="listing.html" style="font-size: 0.92em">Cool t-shirt</a><a href="listing.html" style="font-size: 0.92em">Dresses</a><a href="listing.html" style="font-size: 0.92em">Good laptop</a><a href="listing.html" style="font-size: 0.92em">Mobile</a><a href="listing.html" style="font-size: 0.92em">Nice notebook</a><a href="listing.html" style="font-size: 1.12em">Phone</a>*/
/* 						</div>*/
/* 						<!-- //end Popular tags -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" class="collapsed" href="#box22"><span class="arrow-down">+</span><span class="arrow-up">-</span> PRICE SELECT</a>*/
/* 				</div>*/
/* 				<div id="box22" class="panel-collapse collapse">*/
/* 					<div class="panel-body">*/
/* 						<ul class="simple-list">*/
/* 							<li>*/
/* 							<input name="checkbox-price-1" type="checkbox" value="">*/
/* 							<span class="label">$0.00 - $10,000.00 (13)</span></li>*/
/* 							<li>*/
/* 							<input name="checkbox-price-2" type="checkbox" value="">*/
/* 							<span class="label">$10,000.00 - $20,000.00 (2)</span></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" class="collapsed" href="#box4"><span class="arrow-down">+</span><span class="arrow-up">-</span> COMPARE PRODUCTS </a>*/
/* 				</div>*/
/* 				<div id="box4" class="panel-collapse collapse">*/
/* 					<div class="panel-body">*/
/* 						<p>*/
/* 							You have no items to compare.*/
/* 						</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" class="collapsed" href="#box5"><span class="arrow-down">+</span><span class="arrow-up">-</span> COMMUNITY POLL</a>*/
/* 				</div>*/
/* 				<div id="box5" class="panel-collapse collapse">*/
/* 					<div class="panel-body">*/
/* 						<form >*/
/* 							<p>*/
/* 								<strong>WHAT IS YOUR FAVORITE MAGENTO FEATURE?</strong>*/
/* 							</p>*/
/* 							<div class="radio">*/
/* 								<label>*/
/* 								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>*/
/* 								Layered Navigation </label>*/
/* 							</div>*/
/* 							<div class="radio">*/
/* 								<label>*/
/* 								<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">*/
/* 								Price Rules </label>*/
/* 							</div>*/
/* 							<div class="radio">*/
/* 								<label>*/
/* 								<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">*/
/* 								Category Management </label>*/
/* 							</div>*/
/* 							<div class="radio">*/
/* 								<label>*/
/* 								<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">*/
/* 								Compare Products </label>*/
/* 							</div>*/
/* 							<button class="btn btn-cool">Vote</button>*/
/* 						</form>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel">*/
/* 				<div class="panel-heading">*/
/* 					<a data-toggle="collapse" class="collapsed" href="#box23"><span class="arrow-down">+</span><span class="arrow-up">-</span> BESTSELLERS </a>*/
/* 				</div>*/
/* 				<div id="box23" class="panel-collapse collapse">*/
/* 					<div class="panel-body">*/
/* 						<div class="products-widget vertical">*/
/* 							<div class="slides slick-style2">*/
/* 								<div class="carousel-item">*/
/* 									<div class="product">*/
/* 										<div class="preview-image-outer">*/
/* 											<a href="product.html" class="preview-image"><img class="img-responsive" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 										</div>*/
/* 										<p class="name">*/
/* 											<a href="product.html">Product Example</a>*/
/* 										</p>*/
/* 										<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 										<div class="rating">*/
/* 											<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="carousel-item">*/
/* 									<div class="product">*/
/* 										<div class="preview-image-outer">*/
/* 											<a href="product.html" class="preview-image"><img class="img-responsive" src="{{asset('images/products/product-01.jpg')}}" alt=""></a>*/
/* 										</div>*/
/* 										<p class="name">*/
/* 											<a href="product.html">Product Example</a>*/
/* 										</p>*/
/* 										<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 										<div class="rating">*/
/* 											<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="carousel-item">*/
/* 									<div class="product">*/
/* 										<div class="preview-image-outer">*/
/* 											<a href="product.html" class="preview-image"><img class="img-responsive" src="{{asset('images/products/product-03.jpg')}}" alt=""></a>*/
/* 										</div>*/
/* 										<p class="name">*/
/* 											<a href="product.html">Product Example</a>*/
/* 										</p>*/
/* 										<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 										<div class="rating">*/
/* 											<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="carousel-item">*/
/* 									<div class="product">*/
/* 										<div class="preview-image-outer">*/
/* 											<a href="product.html" class="preview-image"><img class="img-responsive" src="{{asset('images/products/product-04.jpg')}}" alt=""></a>*/
/* 										</div>*/
/* 										<p class="name">*/
/* 											<a href="product.html">Product Example</a>*/
/* 										</p>*/
/* 										<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 										<div class="rating">*/
/* 											<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="carousel-item">*/
/* 									<div class="product">*/
/* 										<div class="preview-image-outer">*/
/* 											<a href="product.html" class="preview-image"><img class="img-responsive" src="{{asset('images/products/product-05.jpg')}}" alt=""></a>*/
/* 										</div>*/
/* 										<p class="name">*/
/* 											<a href="product.html">Product Example</a>*/
/* 										</p>*/
/* 										<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 										<div class="rating">*/
/* 											<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="carousel-item">*/
/* 									<div class="product">*/
/* 										<div class="preview-image-outer">*/
/* 											<a href="product.html" class="preview-image"><img class="img-responsive" src="{{asset('images/products/product-06.jpg')}}" alt=""></a>*/
/* 										</div>*/
/* 										<p class="name">*/
/* 											<a href="product.html">Product Example</a>*/
/* 										</p>*/
/* 										<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 										<div class="rating">*/
/* 											<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		</aside>*/
/* 		<!-- //end Left column -->*/
/* 	</div>*/
/* 	</section>*/
/* 	<!-- //end Two columns content -->*/
/* {% endblock %}*/
/* */
