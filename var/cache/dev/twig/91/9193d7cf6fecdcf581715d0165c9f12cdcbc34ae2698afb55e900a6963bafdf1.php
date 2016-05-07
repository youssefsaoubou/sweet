<?php

/* default/product.html.twig */
class __TwigTemplate_9d21f913a25f8525fc005b23ad295827a611eb654706ca6d49fdfe6bed1d617d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/product.html.twig", 2);
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
        $__internal_3d49387ecbce5df756e46044958f426d3757103db93c691ec800a2361f6e6d1e = $this->env->getExtension("native_profiler");
        $__internal_3d49387ecbce5df756e46044958f426d3757103db93c691ec800a2361f6e6d1e->enter($__internal_3d49387ecbce5df756e46044958f426d3757103db93c691ec800a2361f6e6d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d49387ecbce5df756e46044958f426d3757103db93c691ec800a2361f6e6d1e->leave($__internal_3d49387ecbce5df756e46044958f426d3757103db93c691ec800a2361f6e6d1e_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_40dc9477bbd8b36ae7e5abc9a8e6039ed18120ed173b43d90063537ea8236963 = $this->env->getExtension("native_profiler");
        $__internal_40dc9477bbd8b36ae7e5abc9a8e6039ed18120ed173b43d90063537ea8236963->enter($__internal_40dc9477bbd8b36ae7e5abc9a8e6039ed18120ed173b43d90063537ea8236963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- CSS modules -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/flaticon/flaticon.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/liMarquee.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.nouislider.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elevatezoom.css"), "html", null, true);
        echo "\">
<!-- Custom styles for this template -->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/coolbaby.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_40dc9477bbd8b36ae7e5abc9a8e6039ed18120ed173b43d90063537ea8236963->leave($__internal_40dc9477bbd8b36ae7e5abc9a8e6039ed18120ed173b43d90063537ea8236963_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a540dc3bc4f9816226b38f0a33cc57de0048b7c790a28035e9002ca601fdf7c = $this->env->getExtension("native_profiler");
        $__internal_9a540dc3bc4f9816226b38f0a33cc57de0048b7c790a28035e9002ca601fdf7c->enter($__internal_9a540dc3bc4f9816226b38f0a33cc57de0048b7c790a28035e9002ca601fdf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<section class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<a href=\"index.html\">home</a><span class=\"divider\">&nbsp;</span><a href=\"#\">women</a><span class=\"divider\">&nbsp;</span>Hilfiger Denim Martina Bomber Jacket
\t\t</div>
\t\t</section>
\t\t<!-- //end Breadcrumbs -->
\t\t<section class=\"container product-view\">
\t\t<div class=\"product-images-cell\">
\t\t\t<div class=\"single-carousel-outer\">
\t\t\t\t<div id=\"hover-left\">
\t\t\t\t</div>
\t\t\t\t<div id=\"hover-right\">
\t\t\t\t</div>
\t\t\t\t<div class=\"single-product-carousel slick-style4\">
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div><div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div><div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"elevatezoom\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3-zoom.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slider-nav-outer\">
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"slider-nav\">
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/productpage-img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"product-info-cell\">
\t\t\t<h2>Hilfiger Denim Martina Bomber Jacket</h2>
\t\t\t<span class=\"price old\">\$214.99</span><span class=\"price new\">\$214.99</span>
\t\t\t<div class=\"rating\">
\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t</div>
\t\t\t<p>
\t\t\t\t<span><strong>In Stock</strong></span><span>SKU: 00065</span>
\t\t\t</p>
\t\t\t<div class=\"line-divider\">
\t\t\t</div>
\t\t\t<div class=\"divider divider-sm\">
\t\t\t</div>
\t\t\t<form action=\"#\">
\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t<i class=\"disable icon icon-size\">S</i><i class=\"icon icon-size\">M</i><i class=\"disable icon icon-size\">L</i><i class=\"disable icon icon-size\">XL</i><i class=\"disable icon icon-size\">XXL</i>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t<i class=\"icon icon-color icon-color-pink\"></i><i class=\"icon icon-color icon-color-white\"></i><i class=\"icon icon-color icon-color-grey\"></i><i class=\"icon icon-color icon-color-marine\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-inputs\">
\t\t\t\t\t<label>Qty:</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control input-quantity\" value=\"1\">
\t\t\t\t\t<button class=\"btn btn-cool btn-lg\" type=\"submit\"><i class=\"icon flaticon-shopping66\"></i>ADD TO CART</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"divider divider-sm\">
\t\t\t</div>
\t\t\t<div class=\"panel-group accordion-simple\" id=\"product-accordion\">
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#product-accordion\" href=\"#product-description\" class=\"collapsed\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> Description </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"product-description\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t Lorem ipsum dolor sit amet, consectetuer adipiscing elittellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#product-accordion\" href=\"#product-size\" class=\"collapsed\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> Size & Fit </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"product-size\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#product-accordion\" href=\"#product-with\" class=\"collapsed\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> Shown With </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"product-with\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#product-accordion\" href=\"#product-shipping\" class=\"collapsed\"><span class=\"arrow-down\">+</span><span class=\"arrow-up\">-</span> Shipping &amp; Returns </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"product-shipping\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"divider divider-xs\">
\t\t\t</div>
\t\t\t<div class=\"social-buttons\">
\t\t\t\t<span class=\"pull-left\">Share:&nbsp;&nbsp;&nbsp;&nbsp;</span>
\t\t\t\t<ul class=\"socials\">
\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-facebook12\"></span></a></li>
\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-twitter20\"></span></a></li>
\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-google10\"></span></a></li>
\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-pinterest9\"></span></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\">
\t\t\t</div>
\t\t</div>
\t\t</section>
\t\t<!-- New Products -->
\t\t<section class=\"container content slider-products\">
\t\t<div class=\"dotted-line right-space\">
\t\t</div>
\t\t<!-- Products list -->
\t\t<div class=\"pull-left vertical_title_outer right-space\">
\t\t\t<div>
\t\t\t\t<span>New Products</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"pull-left carousel_outer\">
\t\t\t<div class=\"product-carousel\">
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-01.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<div class=\"product-options\">
\t\t\t\t\t\t\t<i class=\"icon icon-color icon-color-pink\"></i><i class=\"icon icon-color icon-color-white\"></i><i class=\"icon icon-color icon-color-grey\"></i><i class=\"icon icon-color icon-color-marine\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"label label-sale\">
\t\t\t\t\t\t\t\t<span>Sale</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"label label-sale-percent\">
\t\t\t\t\t\t\t\t<span>-25%</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"label label-new\">
\t\t\t\t\t\t\t\t<span>New</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-02.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-03.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown_box\">
\t\t\t\t\t\t\t<div class=\"countdown_inner\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\tspecial price valid:
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"countdown1\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-04.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-05.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-06.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"images/products/product-01.jpg\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-03.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-04.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-05.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"product-preview\">
\t\t\t\t\t\t<div class=\"preview\">
\t\t\t\t\t\t\t<div class=\"preview-image-outer\">
\t\t\t\t\t\t\t\t<a href=\"product.html\" class=\"preview-image\"><img class=\"img-responsive img-default\" src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-06.jpg"), "html", null, true);
        echo "\" alt=\"\"><img class=\"img-responsive img-second\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/products/product-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"_ajax_view-product.html\" class=\"quick-view\"><span>Quick View</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3 class=\"title\"><a href=\"product.html\">Product Example</a></h3>
\t\t\t\t\t\t<span class=\"price new\">\$214.99</span><span class=\"price old\">\$214.99</span>
\t\t\t\t\t\t<ul class=\"product-controls-list\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-bars34\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon flaticon-heart68\"></span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#drop-shopcart\" class='add-to-cart open-cart'><span class=\"icon flaticon-shopping66\"></span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i><i class=\"icon flaticon-star129 icon-xs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- product view ajax container -->
\t\t\t<div class=\"product-view-ajax-container\">
\t\t\t</div>
\t\t\t<!-- //end product view ajax container -->
\t\t\t<!-- Product view compact -->
\t\t\t<div class=\"product-view-ajax\">
\t\t\t\t<div class=\"layar\">
\t\t\t\t</div>
\t\t\t\t<div class=\"product-view-container\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- //end Product view compact -->
\t\t</div>
\t\t<!-- //end Products list -->
\t\t<div class=\"clearfix\">
\t\t</div>
\t\t</sect

";
        
        $__internal_9a540dc3bc4f9816226b38f0a33cc57de0048b7c790a28035e9002ca601fdf7c->leave($__internal_9a540dc3bc4f9816226b38f0a33cc57de0048b7c790a28035e9002ca601fdf7c_prof);

    }

    // line 484
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7057b7ea972ef387084443d87fd1b738c46dbaac7cc0295d9635b866fb65db39 = $this->env->getExtension("native_profiler");
        $__internal_7057b7ea972ef387084443d87fd1b738c46dbaac7cc0295d9635b866fb65db39->enter($__internal_7057b7ea972ef387084443d87fd1b738c46dbaac7cc0295d9635b866fb65db39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 485
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.custom.02163.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.finger.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/doubletaptogo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.liMarquee.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.plugin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.elevateZoom-3.0.8.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/coolbaby.js"), "html", null, true);
        echo "\"></script>
<script>
jQuery(function (\$j) {
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (windowWidth > 480) {
\t\t\$j('.elevatezoom').elevateZoom({}); 
    }
\telse { \$j('.elevatezoom').elevateZoom({zoomType : \"inner\"});}
    \$j(window).resize(function () {
\t\tvar windowWidth = window.innerWidth || document.documentElement.clientWidth;
\t\t\$j('.zoomContainer').remove();
\t\t\$j('.elevatezoom').removeData('elevateZoom');
\t\tif (windowWidth > 480) {
\t\t\t\$j('.elevatezoom').elevateZoom({}); 
\t\t}
\t\telse { \$j('.elevatezoom').elevateZoom({zoomType : \"inner\"});}
\t\t})
})
</script>
";
        
        $__internal_7057b7ea972ef387084443d87fd1b738c46dbaac7cc0295d9635b866fb65db39->leave($__internal_7057b7ea972ef387084443d87fd1b738c46dbaac7cc0295d9635b866fb65db39_prof);

    }

    public function getTemplateName()
    {
        return "default/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 501,  762 => 500,  758 => 499,  754 => 498,  750 => 497,  746 => 496,  742 => 495,  738 => 494,  734 => 493,  730 => 492,  726 => 491,  722 => 490,  718 => 489,  714 => 488,  710 => 487,  706 => 486,  701 => 485,  695 => 484,  650 => 447,  625 => 427,  600 => 407,  575 => 387,  550 => 367,  527 => 347,  504 => 327,  481 => 307,  458 => 287,  426 => 258,  403 => 238,  368 => 206,  257 => 98,  251 => 95,  245 => 92,  239 => 89,  233 => 86,  227 => 83,  221 => 80,  215 => 77,  209 => 74,  196 => 66,  188 => 63,  180 => 60,  173 => 58,  165 => 55,  157 => 52,  150 => 50,  142 => 47,  134 => 44,  126 => 41,  118 => 38,  110 => 35,  93 => 20,  87 => 19,  77 => 14,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  42 => 4,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
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
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <section class="breadcrumbs">*/
/* 		<div class="container">*/
/* 			<a href="index.html">home</a><span class="divider">&nbsp;</span><a href="#">women</a><span class="divider">&nbsp;</span>Hilfiger Denim Martina Bomber Jacket*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Breadcrumbs -->*/
/* 		<section class="container product-view">*/
/* 		<div class="product-images-cell">*/
/* 			<div class="single-carousel-outer">*/
/* 				<div id="hover-left">*/
/* 				</div>*/
/* 				<div id="hover-right">*/
/* 				</div>*/
/* 				<div class="single-product-carousel slick-style4">*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img1.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img1-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img2.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img2-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img3.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img3-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img1.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img1-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img2.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img2-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img3.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img3-zoom.jpg')}}" alt=""/>*/
/* 					</div><div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img1.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img1-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img2.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img2-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img3.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img3-zoom.jpg')}}" alt=""/>*/
/* 					</div><div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img1.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img1-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img2.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img2-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<img class="elevatezoom" src="{{asset('images/products/productpage-img3.jpg')}}" data-zoom-image="{{asset('images/products/productpage-img3-zoom.jpg')}}" alt=""/>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="slider-nav-outer">*/
/* 				<div class="wrapper">*/
/* 					<div class="slider-nav">*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img1.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img2.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img3.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img1.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img2.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img3.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img1.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img2.jpg')}}" alt="">*/
/* 						</div>*/
/* 						<div class="carousel-item">*/
/* 							<img src="{{asset('images/products/productpage-img3.jpg')}}" alt="">*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="product-info-cell">*/
/* 			<h2>Hilfiger Denim Martina Bomber Jacket</h2>*/
/* 			<span class="price old">$214.99</span><span class="price new">$214.99</span>*/
/* 			<div class="rating">*/
/* 				<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 			</div>*/
/* 			<p>*/
/* 				<span><strong>In Stock</strong></span><span>SKU: 00065</span>*/
/* 			</p>*/
/* 			<div class="line-divider">*/
/* 			</div>*/
/* 			<div class="divider divider-sm">*/
/* 			</div>*/
/* 			<form action="#">*/
/* 				<div class="product-options">*/
/* 					<i class="disable icon icon-size">S</i><i class="icon icon-size">M</i><i class="disable icon icon-size">L</i><i class="disable icon icon-size">XL</i><i class="disable icon icon-size">XXL</i>*/
/* 				</div>*/
/* 				<div class="product-options">*/
/* 					<i class="icon icon-color icon-color-pink"></i><i class="icon icon-color icon-color-white"></i><i class="icon icon-color icon-color-grey"></i><i class="icon icon-color icon-color-marine"></i>*/
/* 				</div>*/
/* 				<div class="form-inputs">*/
/* 					<label>Qty:</label>*/
/* 					<input type="text" class="form-control input-quantity" value="1">*/
/* 					<button class="btn btn-cool btn-lg" type="submit"><i class="icon flaticon-shopping66"></i>ADD TO CART</button>*/
/* 				</div>*/
/* 			</form>*/
/* 			<div class="divider divider-sm">*/
/* 			</div>*/
/* 			<div class="panel-group accordion-simple" id="product-accordion">*/
/* 				<div class="panel">*/
/* 					<div class="panel-heading">*/
/* 						<a data-toggle="collapse" data-parent="#product-accordion" href="#product-description" class="collapsed"><span class="arrow-down">+</span><span class="arrow-up">-</span> Description </a>*/
/* 					</div>*/
/* 					<div id="product-description" class="panel-collapse collapse">*/
/* 						<div class="panel-body">*/
/* 							 Lorem ipsum dolor sit amet, consectetuer adipiscing elittellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus.*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="panel">*/
/* 					<div class="panel-heading">*/
/* 						<a data-toggle="collapse" data-parent="#product-accordion" href="#product-size" class="collapsed"><span class="arrow-down">+</span><span class="arrow-up">-</span> Size & Fit </a>*/
/* 					</div>*/
/* 					<div id="product-size" class="panel-collapse collapse">*/
/* 						<div class="panel-body">*/
/* 							 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="panel">*/
/* 					<div class="panel-heading">*/
/* 						<a data-toggle="collapse" data-parent="#product-accordion" href="#product-with" class="collapsed"><span class="arrow-down">+</span><span class="arrow-up">-</span> Shown With </a>*/
/* 					</div>*/
/* 					<div id="product-with" class="panel-collapse collapse">*/
/* 						<div class="panel-body">*/
/* 							 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="panel">*/
/* 					<div class="panel-heading">*/
/* 						<a data-toggle="collapse" data-parent="#product-accordion" href="#product-shipping" class="collapsed"><span class="arrow-down">+</span><span class="arrow-up">-</span> Shipping &amp; Returns </a>*/
/* 					</div>*/
/* 					<div id="product-shipping" class="panel-collapse collapse">*/
/* 						<div class="panel-body">*/
/* 							 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="divider divider-xs">*/
/* 			</div>*/
/* 			<div class="social-buttons">*/
/* 				<span class="pull-left">Share:&nbsp;&nbsp;&nbsp;&nbsp;</span>*/
/* 				<ul class="socials">*/
/* 					<li><a href="#"><span class="icon flaticon-facebook12"></span></a></li>*/
/* 					<li><a href="#"><span class="icon flaticon-twitter20"></span></a></li>*/
/* 					<li><a href="#"><span class="icon flaticon-google10"></span></a></li>*/
/* 					<li><a href="#"><span class="icon flaticon-pinterest9"></span></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="clearfix">*/
/* 			</div>*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- New Products -->*/
/* 		<section class="container content slider-products">*/
/* 		<div class="dotted-line right-space">*/
/* 		</div>*/
/* 		<!-- Products list -->*/
/* 		<div class="pull-left vertical_title_outer right-space">*/
/* 			<div>*/
/* 				<span>New Products</span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="pull-left carousel_outer">*/
/* 			<div class="product-carousel">*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-01.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<div class="product-options">*/
/* 							<i class="icon icon-color icon-color-pink"></i><i class="icon icon-color icon-color-white"></i><i class="icon icon-color icon-color-grey"></i><i class="icon icon-color icon-color-marine"></i>*/
/* 						</div>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="label label-sale">*/
/* 								<span>Sale</span>*/
/* 							</div>*/
/* 							<div class="label label-sale-percent">*/
/* 								<span>-25%</span>*/
/* 							</div>*/
/* 							<div class="label label-new">*/
/* 								<span>New</span>*/
/* 							</div>*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-02.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-03.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<div class="countdown_box">*/
/* 							<div class="countdown_inner">*/
/* 								<div class="title">*/
/* 									special price valid:*/
/* 								</div>*/
/* 								<div id="countdown1">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-04.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-05.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-06.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="images/products/product-01.jpg" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-02.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-03.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-04.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-05.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="carousel-item">*/
/* 					<div class="product-preview">*/
/* 						<div class="preview">*/
/* 							<div class="preview-image-outer">*/
/* 								<a href="product.html" class="preview-image"><img class="img-responsive img-default" src="{{asset('images/products/product-06.jpg')}}" alt=""><img class="img-responsive img-second" src="{{asset('images/products/product-02.jpg')}}" alt=""></a>*/
/* 							</div>*/
/* 							<a href="_ajax_view-product.html" class="quick-view"><span>Quick View</span></a>*/
/* 						</div>*/
/* 						<h3 class="title"><a href="product.html">Product Example</a></h3>*/
/* 						<span class="price new">$214.99</span><span class="price old">$214.99</span>*/
/* 						<ul class="product-controls-list">*/
/* 							<li><a href="#"><span class="icon flaticon-bars34"></span></a></li>*/
/* 							<li><a href="#"><span class="icon flaticon-heart68"></span></a></li>*/
/* 							<li><a href="#drop-shopcart" class='add-to-cart open-cart'><span class="icon flaticon-shopping66"></span></a></li>*/
/* 						</ul>*/
/* 						<div class="rating">*/
/* 							<i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i><i class="icon flaticon-star129 icon-xs"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- product view ajax container -->*/
/* 			<div class="product-view-ajax-container">*/
/* 			</div>*/
/* 			<!-- //end product view ajax container -->*/
/* 			<!-- Product view compact -->*/
/* 			<div class="product-view-ajax">*/
/* 				<div class="layar">*/
/* 				</div>*/
/* 				<div class="product-view-container">*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- //end Product view compact -->*/
/* 		</div>*/
/* 		<!-- //end Products list -->*/
/* 		<div class="clearfix">*/
/* 		</div>*/
/* 		</sect*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
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
/* <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.isotope.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.plugin.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.countdown.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>*/
/* <script src="{{asset('js/coolbaby.js')}}"></script>*/
/* <script>*/
/* jQuery(function ($j) {*/
/*     var windowWidth = window.innerWidth || document.documentElement.clientWidth;*/
/*     if (windowWidth > 480) {*/
/* 		$j('.elevatezoom').elevateZoom({}); */
/*     }*/
/* 	else { $j('.elevatezoom').elevateZoom({zoomType : "inner"});}*/
/*     $j(window).resize(function () {*/
/* 		var windowWidth = window.innerWidth || document.documentElement.clientWidth;*/
/* 		$j('.zoomContainer').remove();*/
/* 		$j('.elevatezoom').removeData('elevateZoom');*/
/* 		if (windowWidth > 480) {*/
/* 			$j('.elevatezoom').elevateZoom({}); */
/* 		}*/
/* 		else { $j('.elevatezoom').elevateZoom({zoomType : "inner"});}*/
/* 		})*/
/* })*/
/* </script>*/
/* {% endblock %}*/
