<?php

/* FrontendBundle:Default:newfilm.html.twig */
class __TwigTemplate_339f8996329a0c177ac6be08ee4c99e478d951aa3679556b95bde59eb8c662f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:newfilm.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"col-md-6 col-md-offset-3 form-new\">
\t
\t<div class=\"col-md-12\">
\t\t<h1>Ajoutez un nouveau film</h1>
\t\t<hr>
\t</div>

\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parution", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parution", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "folder", array()), 'label');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "folder", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<hr>
\t\t\t<input type=\"submit\">
\t\t</div>

\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:newfilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  88 => 35,  82 => 32,  76 => 29,  70 => 26,  64 => 23,  58 => 20,  52 => 17,  46 => 14,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-md-6 col-md-offset-3 form-new">*/
/* 	*/
/* 	<div class="col-md-12">*/
/* 		<h1>Ajoutez un nouveau film</h1>*/
/* 		<hr>*/
/* 	</div>*/
/* */
/* 	{{ form_start(form) }}*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.titre) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.titre) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.description) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.description) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.parution) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.parution) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_label(form.folder) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			{{ form_widget(form.folder) }}*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			<hr>*/
/* 			<input type="submit">*/
/* 		</div>*/
/* */
/* 	{{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %} */
