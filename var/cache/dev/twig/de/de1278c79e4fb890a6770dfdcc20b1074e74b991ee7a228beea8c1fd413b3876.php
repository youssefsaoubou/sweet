<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6f65b4031cdf76ca88f05f5b80f0b2ce0eda6fb71a8af1ab41bbca8bed24d23f extends Twig_Template
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
        $__internal_6964309fab4f9a76b362bd3f0d1117d7ff5363ea3d77d17cbd90382d7e80a4bd = $this->env->getExtension("native_profiler");
        $__internal_6964309fab4f9a76b362bd3f0d1117d7ff5363ea3d77d17cbd90382d7e80a4bd->enter($__internal_6964309fab4f9a76b362bd3f0d1117d7ff5363ea3d77d17cbd90382d7e80a4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6964309fab4f9a76b362bd3f0d1117d7ff5363ea3d77d17cbd90382d7e80a4bd->leave($__internal_6964309fab4f9a76b362bd3f0d1117d7ff5363ea3d77d17cbd90382d7e80a4bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1d42cdc14a901409d36f87eb867df894ca88f1a5a612b4401b4ba63d92d6dbf = $this->env->getExtension("native_profiler");
        $__internal_f1d42cdc14a901409d36f87eb867df894ca88f1a5a612b4401b4ba63d92d6dbf->enter($__internal_f1d42cdc14a901409d36f87eb867df894ca88f1a5a612b4401b4ba63d92d6dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1d42cdc14a901409d36f87eb867df894ca88f1a5a612b4401b4ba63d92d6dbf->leave($__internal_f1d42cdc14a901409d36f87eb867df894ca88f1a5a612b4401b4ba63d92d6dbf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5f80930701106c1f6b82646fb4c6253b7da32b0808679a40cefc68d752f34d1 = $this->env->getExtension("native_profiler");
        $__internal_b5f80930701106c1f6b82646fb4c6253b7da32b0808679a40cefc68d752f34d1->enter($__internal_b5f80930701106c1f6b82646fb4c6253b7da32b0808679a40cefc68d752f34d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5f80930701106c1f6b82646fb4c6253b7da32b0808679a40cefc68d752f34d1->leave($__internal_b5f80930701106c1f6b82646fb4c6253b7da32b0808679a40cefc68d752f34d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32feb63bf06e9cd9adda956ac6151fb044d083b1347c822be569c342c1613dae = $this->env->getExtension("native_profiler");
        $__internal_32feb63bf06e9cd9adda956ac6151fb044d083b1347c822be569c342c1613dae->enter($__internal_32feb63bf06e9cd9adda956ac6151fb044d083b1347c822be569c342c1613dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32feb63bf06e9cd9adda956ac6151fb044d083b1347c822be569c342c1613dae->leave($__internal_32feb63bf06e9cd9adda956ac6151fb044d083b1347c822be569c342c1613dae_prof);

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
