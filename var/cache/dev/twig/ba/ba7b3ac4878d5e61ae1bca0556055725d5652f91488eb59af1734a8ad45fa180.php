<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6234966190da9501cc1b82ad52197fc4e995f784d180c65e95cfba4bcf1ecd63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_52511ea2686bcce3cdb1dc2305a468e4f0e69cb5641200f773acc0043e6ccfe6 = $this->env->getExtension("native_profiler");
        $__internal_52511ea2686bcce3cdb1dc2305a468e4f0e69cb5641200f773acc0043e6ccfe6->enter($__internal_52511ea2686bcce3cdb1dc2305a468e4f0e69cb5641200f773acc0043e6ccfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52511ea2686bcce3cdb1dc2305a468e4f0e69cb5641200f773acc0043e6ccfe6->leave($__internal_52511ea2686bcce3cdb1dc2305a468e4f0e69cb5641200f773acc0043e6ccfe6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_820b05917174562906d273c5f6102984e8bbb5e2434cc13b7d5826be033f59c7 = $this->env->getExtension("native_profiler");
        $__internal_820b05917174562906d273c5f6102984e8bbb5e2434cc13b7d5826be033f59c7->enter($__internal_820b05917174562906d273c5f6102984e8bbb5e2434cc13b7d5826be033f59c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_820b05917174562906d273c5f6102984e8bbb5e2434cc13b7d5826be033f59c7->leave($__internal_820b05917174562906d273c5f6102984e8bbb5e2434cc13b7d5826be033f59c7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a68fc0457cba8982cba658255a7617937709a0c082d56d5ac71a512aee72a16d = $this->env->getExtension("native_profiler");
        $__internal_a68fc0457cba8982cba658255a7617937709a0c082d56d5ac71a512aee72a16d->enter($__internal_a68fc0457cba8982cba658255a7617937709a0c082d56d5ac71a512aee72a16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a68fc0457cba8982cba658255a7617937709a0c082d56d5ac71a512aee72a16d->leave($__internal_a68fc0457cba8982cba658255a7617937709a0c082d56d5ac71a512aee72a16d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cbff65d43e29f34795496452b2e6f10c19e0885e936580bf0acd3d338990b28 = $this->env->getExtension("native_profiler");
        $__internal_5cbff65d43e29f34795496452b2e6f10c19e0885e936580bf0acd3d338990b28->enter($__internal_5cbff65d43e29f34795496452b2e6f10c19e0885e936580bf0acd3d338990b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5cbff65d43e29f34795496452b2e6f10c19e0885e936580bf0acd3d338990b28->leave($__internal_5cbff65d43e29f34795496452b2e6f10c19e0885e936580bf0acd3d338990b28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
