<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_edd059a5aa3480520a9b53a348339fd7696291eb8b118c60605a9b3fbd737490 extends Twig_Template
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
        $__internal_4f2ff1486b0033447c5d9b1a3efb03d8ec966563149fc6d8473a25542a027144 = $this->env->getExtension("native_profiler");
        $__internal_4f2ff1486b0033447c5d9b1a3efb03d8ec966563149fc6d8473a25542a027144->enter($__internal_4f2ff1486b0033447c5d9b1a3efb03d8ec966563149fc6d8473a25542a027144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2ff1486b0033447c5d9b1a3efb03d8ec966563149fc6d8473a25542a027144->leave($__internal_4f2ff1486b0033447c5d9b1a3efb03d8ec966563149fc6d8473a25542a027144_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0de9dc0d9259d82b2f5e76b522792ad35f4385ac58e566d15a95804b9120119 = $this->env->getExtension("native_profiler");
        $__internal_a0de9dc0d9259d82b2f5e76b522792ad35f4385ac58e566d15a95804b9120119->enter($__internal_a0de9dc0d9259d82b2f5e76b522792ad35f4385ac58e566d15a95804b9120119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0de9dc0d9259d82b2f5e76b522792ad35f4385ac58e566d15a95804b9120119->leave($__internal_a0de9dc0d9259d82b2f5e76b522792ad35f4385ac58e566d15a95804b9120119_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d198081ff6780261b01d7c65319860f930efebcf4b971badc7c0e71ff2561dd3 = $this->env->getExtension("native_profiler");
        $__internal_d198081ff6780261b01d7c65319860f930efebcf4b971badc7c0e71ff2561dd3->enter($__internal_d198081ff6780261b01d7c65319860f930efebcf4b971badc7c0e71ff2561dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d198081ff6780261b01d7c65319860f930efebcf4b971badc7c0e71ff2561dd3->leave($__internal_d198081ff6780261b01d7c65319860f930efebcf4b971badc7c0e71ff2561dd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4c01cbfcf16b4710346a9d1c6b7e72720d71b5c88db5c14a4967f738634cc26 = $this->env->getExtension("native_profiler");
        $__internal_a4c01cbfcf16b4710346a9d1c6b7e72720d71b5c88db5c14a4967f738634cc26->enter($__internal_a4c01cbfcf16b4710346a9d1c6b7e72720d71b5c88db5c14a4967f738634cc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4c01cbfcf16b4710346a9d1c6b7e72720d71b5c88db5c14a4967f738634cc26->leave($__internal_a4c01cbfcf16b4710346a9d1c6b7e72720d71b5c88db5c14a4967f738634cc26_prof);

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
