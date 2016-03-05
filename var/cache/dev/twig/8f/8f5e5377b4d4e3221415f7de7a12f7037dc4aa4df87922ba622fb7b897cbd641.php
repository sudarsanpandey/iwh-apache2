<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_960e4479900076089042579ea1784f2786512d3bdafea8374f0143578dd3c07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a057abad1d2c7244dc5632feaa04da4f3bfd52fecb8c0c1d8ce2d3780b93aa2 = $this->env->getExtension("native_profiler");
        $__internal_5a057abad1d2c7244dc5632feaa04da4f3bfd52fecb8c0c1d8ce2d3780b93aa2->enter($__internal_5a057abad1d2c7244dc5632feaa04da4f3bfd52fecb8c0c1d8ce2d3780b93aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a057abad1d2c7244dc5632feaa04da4f3bfd52fecb8c0c1d8ce2d3780b93aa2->leave($__internal_5a057abad1d2c7244dc5632feaa04da4f3bfd52fecb8c0c1d8ce2d3780b93aa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c7e66550827bbc34da724f7e9166a56d7e98a92874a44d276acc34e3e0c264b = $this->env->getExtension("native_profiler");
        $__internal_5c7e66550827bbc34da724f7e9166a56d7e98a92874a44d276acc34e3e0c264b->enter($__internal_5c7e66550827bbc34da724f7e9166a56d7e98a92874a44d276acc34e3e0c264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c7e66550827bbc34da724f7e9166a56d7e98a92874a44d276acc34e3e0c264b->leave($__internal_5c7e66550827bbc34da724f7e9166a56d7e98a92874a44d276acc34e3e0c264b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3737296b9a517ea0cf8cdfb489ac4ef99b571ab75d32bcfb8a42a2dadf16624 = $this->env->getExtension("native_profiler");
        $__internal_f3737296b9a517ea0cf8cdfb489ac4ef99b571ab75d32bcfb8a42a2dadf16624->enter($__internal_f3737296b9a517ea0cf8cdfb489ac4ef99b571ab75d32bcfb8a42a2dadf16624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3737296b9a517ea0cf8cdfb489ac4ef99b571ab75d32bcfb8a42a2dadf16624->leave($__internal_f3737296b9a517ea0cf8cdfb489ac4ef99b571ab75d32bcfb8a42a2dadf16624_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2696c9653048904bd1bd8d79e7e3e10e638a9434dc22dbbc332afc2792eddcb3 = $this->env->getExtension("native_profiler");
        $__internal_2696c9653048904bd1bd8d79e7e3e10e638a9434dc22dbbc332afc2792eddcb3->enter($__internal_2696c9653048904bd1bd8d79e7e3e10e638a9434dc22dbbc332afc2792eddcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2696c9653048904bd1bd8d79e7e3e10e638a9434dc22dbbc332afc2792eddcb3->leave($__internal_2696c9653048904bd1bd8d79e7e3e10e638a9434dc22dbbc332afc2792eddcb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
