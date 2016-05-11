<?php

/* subscribe.html.twig */
class __TwigTemplate_df2c6acc6ad1607f177e54295602cadf7e3170607758c0abaf923a10dedbd572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subscribe' => array($this, 'block_subscribe'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9088ed6b4d63752b557b52aa8751435975d4daa2067c94fd68ee7ca06aa1cbf = $this->env->getExtension("native_profiler");
        $__internal_f9088ed6b4d63752b557b52aa8751435975d4daa2067c94fd68ee7ca06aa1cbf->enter($__internal_f9088ed6b4d63752b557b52aa8751435975d4daa2067c94fd68ee7ca06aa1cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subscribe.html.twig"));

        // line 1
        $this->displayBlock('subscribe', $context, $blocks);
        
        $__internal_f9088ed6b4d63752b557b52aa8751435975d4daa2067c94fd68ee7ca06aa1cbf->leave($__internal_f9088ed6b4d63752b557b52aa8751435975d4daa2067c94fd68ee7ca06aa1cbf_prof);

    }

    public function block_subscribe($context, array $blocks = array())
    {
        $__internal_a054e4bbf31750e3e566220e4093188092be5b696c51d4bde1f4814070de732e = $this->env->getExtension("native_profiler");
        $__internal_a054e4bbf31750e3e566220e4093188092be5b696c51d4bde1f4814070de732e->enter($__internal_a054e4bbf31750e3e566220e4093188092be5b696c51d4bde1f4814070de732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subscribe"));

        // line 2
        echo "<!-- Subscribe -->
        <section class=\"content container\">
        <div class=\"subscribe\">
            <div class=\"row collapsed-block\">
                <div class=\"col-sm-12 col-md-3 col-lg-3\">
                    <h3>NEWSLETTER SIGNUP <a class=\"expander visible-sm visible-xs\" href=\"#TabBlock-1\">+</a></h3>
                </div>
                <div class=\"col-sm-12 col-md-9 col-lg-9 tabBlock\" id=\"TabBlock-1\">
                    <form class=\"form-inline\" >
                        <div class=\"row\">
                            <div class=\"col-sm-5 col-md-5\">
                                <input type=\"text\" class=\"form-control pull-right\" value=\"Your E-mail...\" onblur=\"if (this.value == '') {this.value = 'Your E-mail...';}\" onfocus=\"if(this.value == 'Your E-mail...') {this.value = '';}\">
                                <div class=\"divider divider-sm visible-xs\">
                                </div>
                            </div>
                            <div class=\"col-sm-2 col-md-2\">
                                <button type=\"submit\" class=\"button btn-cool\"><span class=\"icon flaticon-new78\"></span>subscribe</button>
                                <div class=\"divider divider-sm visible-xs\">
                                </div>
                            </div>
                            <div class=\"col-sm-5 col-md-4\">
                                <p>
                                    Enter your email and we'll send you a coupon with 10% off your next order.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
        <!-- //end Subscribe -->
";
        
        $__internal_a054e4bbf31750e3e566220e4093188092be5b696c51d4bde1f4814070de732e->leave($__internal_a054e4bbf31750e3e566220e4093188092be5b696c51d4bde1f4814070de732e_prof);

    }

    public function getTemplateName()
    {
        return "subscribe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block subscribe %}*/
/* <!-- Subscribe -->*/
/*         <section class="content container">*/
/*         <div class="subscribe">*/
/*             <div class="row collapsed-block">*/
/*                 <div class="col-sm-12 col-md-3 col-lg-3">*/
/*                     <h3>NEWSLETTER SIGNUP <a class="expander visible-sm visible-xs" href="#TabBlock-1">+</a></h3>*/
/*                 </div>*/
/*                 <div class="col-sm-12 col-md-9 col-lg-9 tabBlock" id="TabBlock-1">*/
/*                     <form class="form-inline" >*/
/*                         <div class="row">*/
/*                             <div class="col-sm-5 col-md-5">*/
/*                                 <input type="text" class="form-control pull-right" value="Your E-mail..." onblur="if (this.value == '') {this.value = 'Your E-mail...';}" onfocus="if(this.value == 'Your E-mail...') {this.value = '';}">*/
/*                                 <div class="divider divider-sm visible-xs">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-2 col-md-2">*/
/*                                 <button type="submit" class="button btn-cool"><span class="icon flaticon-new78"></span>subscribe</button>*/
/*                                 <div class="divider divider-sm visible-xs">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-5 col-md-4">*/
/*                                 <p>*/
/*                                     Enter your email and we'll send you a coupon with 10% off your next order.*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </section>*/
/*         <!-- //end Subscribe -->*/
/* {% endblock %}*/
