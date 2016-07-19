<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b7df747eb4679f2e587a2a22bd03eab22b1e7ca82008fea23baa090b512af8e6 extends Twig_Template
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
        $__internal_4d2d7db652c1067ba74c1993368631a988c6484efe7fba36345014abb2508ea7 = $this->env->getExtension("native_profiler");
        $__internal_4d2d7db652c1067ba74c1993368631a988c6484efe7fba36345014abb2508ea7->enter($__internal_4d2d7db652c1067ba74c1993368631a988c6484efe7fba36345014abb2508ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2d7db652c1067ba74c1993368631a988c6484efe7fba36345014abb2508ea7->leave($__internal_4d2d7db652c1067ba74c1993368631a988c6484efe7fba36345014abb2508ea7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a0e846ac105bcb66c155bfeb0743562b24ac726cd266c72e4c291b71f460f9b = $this->env->getExtension("native_profiler");
        $__internal_5a0e846ac105bcb66c155bfeb0743562b24ac726cd266c72e4c291b71f460f9b->enter($__internal_5a0e846ac105bcb66c155bfeb0743562b24ac726cd266c72e4c291b71f460f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a0e846ac105bcb66c155bfeb0743562b24ac726cd266c72e4c291b71f460f9b->leave($__internal_5a0e846ac105bcb66c155bfeb0743562b24ac726cd266c72e4c291b71f460f9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f7647c3826796b6c009fdd77ec2ad3f5d12fbd50ce4ad88af978614786bd5c4 = $this->env->getExtension("native_profiler");
        $__internal_9f7647c3826796b6c009fdd77ec2ad3f5d12fbd50ce4ad88af978614786bd5c4->enter($__internal_9f7647c3826796b6c009fdd77ec2ad3f5d12fbd50ce4ad88af978614786bd5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f7647c3826796b6c009fdd77ec2ad3f5d12fbd50ce4ad88af978614786bd5c4->leave($__internal_9f7647c3826796b6c009fdd77ec2ad3f5d12fbd50ce4ad88af978614786bd5c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c094d6caa1b1b10e77815fdf52c4b36c72c1a0ffb7a8ba1190457d782923d21 = $this->env->getExtension("native_profiler");
        $__internal_9c094d6caa1b1b10e77815fdf52c4b36c72c1a0ffb7a8ba1190457d782923d21->enter($__internal_9c094d6caa1b1b10e77815fdf52c4b36c72c1a0ffb7a8ba1190457d782923d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9c094d6caa1b1b10e77815fdf52c4b36c72c1a0ffb7a8ba1190457d782923d21->leave($__internal_9c094d6caa1b1b10e77815fdf52c4b36c72c1a0ffb7a8ba1190457d782923d21_prof);

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
