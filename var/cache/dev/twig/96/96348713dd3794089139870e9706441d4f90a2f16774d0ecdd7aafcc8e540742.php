<?php

/* base.html.twig */
class __TwigTemplate_895ec9b6e7d46cb637e0566d0d98512924112b37c33b204cbe5abed3ccd22431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cf6880d2ee392709cd1cb059d87cd8631317918f139d661af91c4a8ee787955 = $this->env->getExtension("native_profiler");
        $__internal_0cf6880d2ee392709cd1cb059d87cd8631317918f139d661af91c4a8ee787955->enter($__internal_0cf6880d2ee392709cd1cb059d87cd8631317918f139d661af91c4a8ee787955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0cf6880d2ee392709cd1cb059d87cd8631317918f139d661af91c4a8ee787955->leave($__internal_0cf6880d2ee392709cd1cb059d87cd8631317918f139d661af91c4a8ee787955_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_692f82b68c4344fc9f2bfee9ae1630d2c0c9a81b01ed53cfbf21c3fb8c1eda45 = $this->env->getExtension("native_profiler");
        $__internal_692f82b68c4344fc9f2bfee9ae1630d2c0c9a81b01ed53cfbf21c3fb8c1eda45->enter($__internal_692f82b68c4344fc9f2bfee9ae1630d2c0c9a81b01ed53cfbf21c3fb8c1eda45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_692f82b68c4344fc9f2bfee9ae1630d2c0c9a81b01ed53cfbf21c3fb8c1eda45->leave($__internal_692f82b68c4344fc9f2bfee9ae1630d2c0c9a81b01ed53cfbf21c3fb8c1eda45_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62dbded6fb29ff21e9dea70ccf4b59f702e8ede3bc65e3de1d0609d285d41549 = $this->env->getExtension("native_profiler");
        $__internal_62dbded6fb29ff21e9dea70ccf4b59f702e8ede3bc65e3de1d0609d285d41549->enter($__internal_62dbded6fb29ff21e9dea70ccf4b59f702e8ede3bc65e3de1d0609d285d41549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_62dbded6fb29ff21e9dea70ccf4b59f702e8ede3bc65e3de1d0609d285d41549->leave($__internal_62dbded6fb29ff21e9dea70ccf4b59f702e8ede3bc65e3de1d0609d285d41549_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1da84f0b1165fd4ff5cd9c896fe16cef20b0e5969df370a381350dfb4fe25f = $this->env->getExtension("native_profiler");
        $__internal_3b1da84f0b1165fd4ff5cd9c896fe16cef20b0e5969df370a381350dfb4fe25f->enter($__internal_3b1da84f0b1165fd4ff5cd9c896fe16cef20b0e5969df370a381350dfb4fe25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b1da84f0b1165fd4ff5cd9c896fe16cef20b0e5969df370a381350dfb4fe25f->leave($__internal_3b1da84f0b1165fd4ff5cd9c896fe16cef20b0e5969df370a381350dfb4fe25f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eacefd09d3792f89c7f79b8f741f402eaa9b599e797317de387820ef50fd1107 = $this->env->getExtension("native_profiler");
        $__internal_eacefd09d3792f89c7f79b8f741f402eaa9b599e797317de387820ef50fd1107->enter($__internal_eacefd09d3792f89c7f79b8f741f402eaa9b599e797317de387820ef50fd1107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eacefd09d3792f89c7f79b8f741f402eaa9b599e797317de387820ef50fd1107->leave($__internal_eacefd09d3792f89c7f79b8f741f402eaa9b599e797317de387820ef50fd1107_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
