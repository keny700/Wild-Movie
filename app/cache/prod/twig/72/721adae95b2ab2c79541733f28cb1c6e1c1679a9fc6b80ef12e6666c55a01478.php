<?php

/* ::base.html.twig */
class __TwigTemplate_ac3729329e715f96a4a2832d90d75490eb128a39d16f8c6c20e9e1ae97310ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Wild-Movie</title>
        <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    <body>

      <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Wild-Movie</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
              <button type=\"button\" class=\"btn btn-warning btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
                Voir les instructions
              </button>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                <li><a href=\"#\">Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
              ";
        } else {
            // line 41
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
                <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
              ";
        }
        // line 44
        echo "
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
      <div class=\"col-md-12 empty\">
      
      </div>

      <div class=\"col-md-12 footer\">
        <h4>Wild-Movie - Projet d'entraînement</h4>
        <h3>Wild Code School 2016</h3>
      </div>



      <!-- Modal -->
      <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
              <h4 class=\"modal-title\" id=\"myModalLabel\">Instructions</h4>
            </div>
            <div class=\"modal-body\">
              <p>Bonjour à toi Wilder !</p>

              <p>Bienvenue dans cet examen BLANC.</p>

              <p>Ce projet va te permettre de t'entraîner à la logique algorythmique ainsi qu'à l'intégration d'une nouvelle fonctionnalitée.</p>

              <p>L'exercice se découpe en 2 parties.</p>

              <p>- l'intégration (HTML / CSS) d'une page \"article\" <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\"><strong>ici</strong></a></p>
              <p>- l'intégration d'une fonctionnalité de commentaires sur la fiche d'un film (la réponse aux commentaires est falcultative).<strong> Tu devras d'abord ajouter un film dans la BDD <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("admin_film_new");
        echo "\">ici </strong></a> ! </p>

              <p>Bon courage ! </p>
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
          </div>
        </div>
      </div>

    </body>
</html>
";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  163 => 50,  145 => 85,  141 => 84,  108 => 53,  106 => 50,  98 => 44,  93 => 42,  88 => 41,  83 => 39,  78 => 38,  76 => 37,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Wild-Movie</title>*/
/*         <script type="text/javascript" src="{{ asset('js/script.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*     </head>*/
/*     <body>*/
/* */
/*       <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <!-- Brand and toggle get grouped for better mobile display -->*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Wild-Movie</a>*/
/*           </div>*/
/* */
/*           <!-- Collect the nav links, forms, and other content for toggling -->*/
/*           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*               <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">*/
/*                 Voir les instructions*/
/*               </button>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*               {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 <li><a href="#">Bonjour {{ app.user.username }}</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_logout')}}">Se déconnecter</a></li>*/
/*               {% else %}*/
/*                 <li><a href="{{ path('fos_user_registration_register')}}">S'enregistrer</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_login')}}">Se connecter</a></li>*/
/*               {% endif %}*/
/* */
/*             </ul>*/
/*           </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*       </nav>*/
/* */
/*       {% block body %}*/
/* */
/*       {% endblock %}*/
/* */
/*       <div class="col-md-12 empty">*/
/*       */
/*       </div>*/
/* */
/*       <div class="col-md-12 footer">*/
/*         <h4>Wild-Movie - Projet d'entraînement</h4>*/
/*         <h3>Wild Code School 2016</h3>*/
/*       </div>*/
/* */
/* */
/* */
/*       <!-- Modal -->*/
/*       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog" role="document">*/
/*           <div class="modal-content">*/
/*             <div class="modal-header">*/
/*               <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                 <span aria-hidden="true">&times;</span>*/
/*               </button>*/
/*               <h4 class="modal-title" id="myModalLabel">Instructions</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*               <p>Bonjour à toi Wilder !</p>*/
/* */
/*               <p>Bienvenue dans cet examen BLANC.</p>*/
/* */
/*               <p>Ce projet va te permettre de t'entraîner à la logique algorythmique ainsi qu'à l'intégration d'une nouvelle fonctionnalitée.</p>*/
/* */
/*               <p>L'exercice se découpe en 2 parties.</p>*/
/* */
/*               <p>- l'intégration (HTML / CSS) d'une page "article" <a href="{{ path('article_show') }}"><strong>ici</strong></a></p>*/
/*               <p>- l'intégration d'une fonctionnalité de commentaires sur la fiche d'un film (la réponse aux commentaires est falcultative).<strong> Tu devras d'abord ajouter un film dans la BDD <a href="{{ path('admin_film_new') }}">ici </strong></a> ! </p>*/
/* */
/*               <p>Bon courage ! </p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*               <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
