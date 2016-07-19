<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_4f01c9b66ae019e12e057c33af3df2be4b7e10e95c78f0df490fc120c52b2b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:index.html.twig", 1);
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
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div id=\"myCarousel\" class=\"carousel slide main-carousel\" data-ride=\"carousel\">
\t\t  <!-- Indicators -->
\t\t  <ol class=\"carousel-indicators\">
\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t  </ol>

\t\t  <!-- Wrapper for slides -->
\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t    <div class=\"item active\">
\t\t      <img class=\"img-style-1\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      <img class=\"img-style-1\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
\t\t    </div>
\t\t  </div>

\t\t  <!-- Left and right controls -->
\t\t  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t    <span class=\"sr-only\">Previous</span>
\t\t  </a>
\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t    <span class=\"sr-only\">Next</span>
\t\t  </a>
\t\t</div>
\t</div>

\t<div class=\"col-md-5 col-md-offset-1\">
\t\t<h3>Les films à l'affiche !</h3>
\t\t<hr>

\t\t";
        // line 39
        $context["compteur"] = 0;
        // line 40
        echo "
\t\t";
        // line 41
        if (twig_test_empty((isset($context["movies"]) ? $context["movies"] : null))) {
            // line 42
            echo "\t\t\t<h3>Ajouter un film en base de donnée pour continuer <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_film_new");
            echo "\">ici</a> !</h3>
\t\t";
        }
        // line 44
        echo "
\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 46
            echo "\t\t\t";
            if (((isset($context["compteur"]) ? $context["compteur"] : null) != 5)) {
                // line 47
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
                echo "\"><img class=\"card-img-top img-style-2\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute($context["movie"], "folder", array())) . "")), "html", null, true);
                echo "\" alt=\"film\"></a>
\t\t\t\t</div>
\t\t\t\t";
                // line 50
                $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : null) + 1);
                // line 51
                echo "\t\t\t";
            }
            // line 52
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
\t</div>

\t<div class=\"col-md-5\">
\t\t<h3>Derniers articles</h3>
\t\t<hr>
\t\t
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Décès de l’homme qui connaissait le mec qui était le cousin du type qui était pote avec Jean Dujardin...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Un chaton aurait trouvé refuge dans la gorge du chanteur Garou depuis 1983...</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Éric et Ramzy forcés de re-tourner leur film après avoir oublié le cache de l’objectif sur la caméra</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t<div class=\"col-md-12 article-style-1\">
\t\t\t<p><strong>Fan de Star Wars, il dépense 200.000 euros pour ressembler à un sabre laser</strong></h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
\t\t</div>
\t\t
\t</div>

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  112 => 52,  109 => 51,  107 => 50,  100 => 48,  97 => 47,  94 => 46,  90 => 45,  87 => 44,  81 => 42,  79 => 41,  76 => 40,  74 => 39,  51 => 19,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div id="myCarousel" class="carousel slide main-carousel" data-ride="carousel">*/
/* 		  <!-- Indicators -->*/
/* 		  <ol class="carousel-indicators">*/
/* 		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/* 		    <li data-target="#myCarousel" data-slide-to="1"></li>*/
/* 		  </ol>*/
/* */
/* 		  <!-- Wrapper for slides -->*/
/* 		  <div class="carousel-inner" role="listbox">*/
/* 		    <div class="item active">*/
/* 		      <img class="img-style-1" src="{{ asset('img/photo1.jpg') }}" alt="Chania">*/
/* 		    </div>*/
/* 		    <div class="item">*/
/* 		      <img class="img-style-1" src="{{ asset('img/photo1.jpg') }}" alt="Chania">*/
/* 		    </div>*/
/* 		  </div>*/
/* */
/* 		  <!-- Left and right controls -->*/
/* 		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/* 		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/* 		    <span class="sr-only">Previous</span>*/
/* 		  </a>*/
/* 		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/* 		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/* 		    <span class="sr-only">Next</span>*/
/* 		  </a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-5 col-md-offset-1">*/
/* 		<h3>Les films à l'affiche !</h3>*/
/* 		<hr>*/
/* */
/* 		{% set compteur = 0 %}*/
/* */
/* 		{% if movies is empty %}*/
/* 			<h3>Ajouter un film en base de donnée pour continuer <a href="{{ path('admin_film_new') }}">ici</a> !</h3>*/
/* 		{% endif %}*/
/* */
/* 		{% for movie in movies %}*/
/* 			{% if compteur != 5 %}*/
/* 				<div class="col-md-4">*/
/* 					<a href="{{ path('film_show', {'id': movie.id}) }}"><img class="card-img-top img-style-2" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}" alt="film"></a>*/
/* 				</div>*/
/* 				{% set compteur = compteur + 1 %}*/
/* 			{% endif %}*/
/* */
/* 		{% endfor %}*/
/* */
/* 	</div>*/
/* */
/* 	<div class="col-md-5">*/
/* 		<h3>Derniers articles</h3>*/
/* 		<hr>*/
/* 		*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Décès de l’homme qui connaissait le mec qui était le cousin du type qui était pote avec Jean Dujardin...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Un chaton aurait trouvé refuge dans la gorge du chanteur Garou depuis 1983...</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Éric et Ramzy forcés de re-tourner leur film après avoir oublié le cache de l’objectif sur la caméra</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		<div class="col-md-12 article-style-1">*/
/* 			<p><strong>Fan de Star Wars, il dépense 200.000 euros pour ressembler à un sabre laser</strong></h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* */
/* {% endblock %}*/
