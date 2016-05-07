<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2413a3879bae9c81a57bf4f93656a4c71d196ffe3e77855a1260879199293f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa9d8d2c2d770c1812298bffa8a6b1aa70f95e3074439a51c7df464a17ac3832 = $this->env->getExtension("native_profiler");
        $__internal_fa9d8d2c2d770c1812298bffa8a6b1aa70f95e3074439a51c7df464a17ac3832->enter($__internal_fa9d8d2c2d770c1812298bffa8a6b1aa70f95e3074439a51c7df464a17ac3832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9d8d2c2d770c1812298bffa8a6b1aa70f95e3074439a51c7df464a17ac3832->leave($__internal_fa9d8d2c2d770c1812298bffa8a6b1aa70f95e3074439a51c7df464a17ac3832_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49ec3e6f52ca7f29d68435e56244cf2fc390c20887a47af6aaa5f9c890d6e1dc = $this->env->getExtension("native_profiler");
        $__internal_49ec3e6f52ca7f29d68435e56244cf2fc390c20887a47af6aaa5f9c890d6e1dc->enter($__internal_49ec3e6f52ca7f29d68435e56244cf2fc390c20887a47af6aaa5f9c890d6e1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49ec3e6f52ca7f29d68435e56244cf2fc390c20887a47af6aaa5f9c890d6e1dc->leave($__internal_49ec3e6f52ca7f29d68435e56244cf2fc390c20887a47af6aaa5f9c890d6e1dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7884e69771bd036f91e123deedba8d84ab8ec48f5a230b9c37b1b835cff5ae59 = $this->env->getExtension("native_profiler");
        $__internal_7884e69771bd036f91e123deedba8d84ab8ec48f5a230b9c37b1b835cff5ae59->enter($__internal_7884e69771bd036f91e123deedba8d84ab8ec48f5a230b9c37b1b835cff5ae59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7884e69771bd036f91e123deedba8d84ab8ec48f5a230b9c37b1b835cff5ae59->leave($__internal_7884e69771bd036f91e123deedba8d84ab8ec48f5a230b9c37b1b835cff5ae59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_482395545880563bf90605936862dcc87a52b29d70f58613ea088e9ecb4d8677 = $this->env->getExtension("native_profiler");
        $__internal_482395545880563bf90605936862dcc87a52b29d70f58613ea088e9ecb4d8677->enter($__internal_482395545880563bf90605936862dcc87a52b29d70f58613ea088e9ecb4d8677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_482395545880563bf90605936862dcc87a52b29d70f58613ea088e9ecb4d8677->leave($__internal_482395545880563bf90605936862dcc87a52b29d70f58613ea088e9ecb4d8677_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
