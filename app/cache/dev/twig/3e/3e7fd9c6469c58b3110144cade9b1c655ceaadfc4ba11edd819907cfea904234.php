<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_9f818cdec519f9788feeeccea1fdb702c1385dfe051f75f5f5fe3e9d43f72b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
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
        $__internal_591368a15a22ad03c38556bf2a90b6d1d42e1bc008c657b5bf72dcd5c3379b4b = $this->env->getExtension("native_profiler");
        $__internal_591368a15a22ad03c38556bf2a90b6d1d42e1bc008c657b5bf72dcd5c3379b4b->enter($__internal_591368a15a22ad03c38556bf2a90b6d1d42e1bc008c657b5bf72dcd5c3379b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591368a15a22ad03c38556bf2a90b6d1d42e1bc008c657b5bf72dcd5c3379b4b->leave($__internal_591368a15a22ad03c38556bf2a90b6d1d42e1bc008c657b5bf72dcd5c3379b4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2adda3dfeccd805ca7c16423b6d996e3e498a182ff7af4930481e3b8a3a3d38f = $this->env->getExtension("native_profiler");
        $__internal_2adda3dfeccd805ca7c16423b6d996e3e498a182ff7af4930481e3b8a3a3d38f->enter($__internal_2adda3dfeccd805ca7c16423b6d996e3e498a182ff7af4930481e3b8a3a3d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Commentaires : </h2>
\t\t\t<hr>
\t\t\t";
        // line 24
        echo "\t\t\t
\t\t\t<h3>Ajouter un commentaire</h3>
\t\t\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_start');
        echo "
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "comment", array()), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), "comment", array()), 'widget', array("attr" => array("rows" => "4", "class" => "form-control", "placeholder" => "Commenter ici!")));
        // line 33
        echo "
            </div>
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Publier votre commentaire\" />
            </div>
        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_end');
        echo "

\t\t\t
\t\t</div>
\t</div>

";
        
        $__internal_2adda3dfeccd805ca7c16423b6d996e3e498a182ff7af4930481e3b8a3a3d38f->leave($__internal_2adda3dfeccd805ca7c16423b6d996e3e498a182ff7af4930481e3b8a3a3d38f_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  82 => 33,  80 => 29,  76 => 28,  71 => 26,  67 => 24,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			<h2>Commentaires : </h2>*/
/* 			<hr>*/
/* 			{# {% for comment in comments %}*/
/*         		{{ comment.comment }}*/
/*     		*/
/*     		{% endfor %} #}*/
/* 			*/
/* 			<h3>Ajouter un commentaire</h3>*/
/* 				{{ form_start(Form) }}*/
/*             <div class="form-group">*/
/*                 {{ form_errors(commentForm.comment) }}*/
/*                 {{ form_widget(commentForm.comment, { 'attr':  {*/
/*                     'rows': '4',*/
/*                     'class': 'form-control',*/
/*                     'placeholder': 'Commenter ici!'*/
/*                 }}) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input type="submit" class="btn btn-primary" value="Publier votre commentaire" />*/
/*             </div>*/
/*         {{ form_end(Form) }}*/
/* */
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
