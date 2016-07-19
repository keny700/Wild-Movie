<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_55f514164da78fa06b2fb411d1ec4d30e4787cf56a4c50d4379409848973ac38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
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
\t<h2> Télécharge cette maquette et intégre ta page ici-même.
\tLe contenu est bien entendu fictif. Ne rentre pas un article en BDD, nous te demandons juste d'intégrer la page. (Le header et le footer sont déjà présent !!!)</h2>

\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/image.png"), "html", null, true);
        echo "\">

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h2> Télécharge cette maquette et intégre ta page ici-même.*/
/* 	Le contenu est bien entendu fictif. Ne rentre pas un article en BDD, nous te demandons juste d'intégrer la page. (Le header et le footer sont déjà présent !!!)</h2>*/
/* */
/* 	<img src="{{ asset('img/image.png') }}">*/
/* */
/* {% endblock %}*/
