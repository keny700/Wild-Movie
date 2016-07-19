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
        $__internal_d78bca3f111127d2900e3cf435e44ad0ddecddb6c6b1a87ba0265fb59f589b16 = $this->env->getExtension("native_profiler");
        $__internal_d78bca3f111127d2900e3cf435e44ad0ddecddb6c6b1a87ba0265fb59f589b16->enter($__internal_d78bca3f111127d2900e3cf435e44ad0ddecddb6c6b1a87ba0265fb59f589b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d78bca3f111127d2900e3cf435e44ad0ddecddb6c6b1a87ba0265fb59f589b16->leave($__internal_d78bca3f111127d2900e3cf435e44ad0ddecddb6c6b1a87ba0265fb59f589b16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_194f80ea94f5f9434b10acb7f9dcc41ec6ffa5f35567a6de9875c7c628db8182 = $this->env->getExtension("native_profiler");
        $__internal_194f80ea94f5f9434b10acb7f9dcc41ec6ffa5f35567a6de9875c7c628db8182->enter($__internal_194f80ea94f5f9434b10acb7f9dcc41ec6ffa5f35567a6de9875c7c628db8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "        \t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "
    \t\t
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        
        $__internal_194f80ea94f5f9434b10acb7f9dcc41ec6ffa5f35567a6de9875c7c628db8182->leave($__internal_194f80ea94f5f9434b10acb7f9dcc41ec6ffa5f35567a6de9875c7c628db8182_prof);

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
        return array (  103 => 38,  96 => 33,  94 => 29,  90 => 28,  85 => 26,  81 => 24,  71 => 21,  67 => 20,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/* 			{% for comment in comments %}*/
/*         		{{ comment.comment }}*/
/*     		*/
/*     		{% endfor %}*/
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
