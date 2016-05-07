<?php

/* subscribe.html.twig */
class __TwigTemplate_ece2b4121a39054ad05feb654e77ee70002cb18404df038e57babc7135db38f0 extends Twig_Template
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
        $__internal_c8fe18f3a2d59dd2aabc8bf0ab828fbdbdafa17f30dee003170aad36ec154575 = $this->env->getExtension("native_profiler");
        $__internal_c8fe18f3a2d59dd2aabc8bf0ab828fbdbdafa17f30dee003170aad36ec154575->enter($__internal_c8fe18f3a2d59dd2aabc8bf0ab828fbdbdafa17f30dee003170aad36ec154575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subscribe.html.twig"));

        // line 1
        $this->displayBlock('subscribe', $context, $blocks);
        
        $__internal_c8fe18f3a2d59dd2aabc8bf0ab828fbdbdafa17f30dee003170aad36ec154575->leave($__internal_c8fe18f3a2d59dd2aabc8bf0ab828fbdbdafa17f30dee003170aad36ec154575_prof);

    }

    public function block_subscribe($context, array $blocks = array())
    {
        $__internal_7e2447f1c458bd511c34dccba08d468429cf1de98be8530229d28aefcde7b0d0 = $this->env->getExtension("native_profiler");
        $__internal_7e2447f1c458bd511c34dccba08d468429cf1de98be8530229d28aefcde7b0d0->enter($__internal_7e2447f1c458bd511c34dccba08d468429cf1de98be8530229d28aefcde7b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subscribe"));

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
        
        $__internal_7e2447f1c458bd511c34dccba08d468429cf1de98be8530229d28aefcde7b0d0->leave($__internal_7e2447f1c458bd511c34dccba08d468429cf1de98be8530229d28aefcde7b0d0_prof);

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
