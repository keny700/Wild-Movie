<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_61c97542499adddf37b322b179681b6137061d3f5941d3d0689f62bc16cdbb78 extends Twig_Template
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
        $__internal_ddca315c6a4da14ea02046e81b75a35bf5710fddcd2d20fc0c042052b987693d = $this->env->getExtension("native_profiler");
        $__internal_ddca315c6a4da14ea02046e81b75a35bf5710fddcd2d20fc0c042052b987693d->enter($__internal_ddca315c6a4da14ea02046e81b75a35bf5710fddcd2d20fc0c042052b987693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddca315c6a4da14ea02046e81b75a35bf5710fddcd2d20fc0c042052b987693d->leave($__internal_ddca315c6a4da14ea02046e81b75a35bf5710fddcd2d20fc0c042052b987693d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3aa75d68a858114b417b0a1598dec2ef853b3665e41985f8d291663894d0532b = $this->env->getExtension("native_profiler");
        $__internal_3aa75d68a858114b417b0a1598dec2ef853b3665e41985f8d291663894d0532b->enter($__internal_3aa75d68a858114b417b0a1598dec2ef853b3665e41985f8d291663894d0532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3aa75d68a858114b417b0a1598dec2ef853b3665e41985f8d291663894d0532b->leave($__internal_3aa75d68a858114b417b0a1598dec2ef853b3665e41985f8d291663894d0532b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bc0aa935751ed4aba49a25b9e13f69afe2455ed453c8a2e41fba7b9137fcc8b = $this->env->getExtension("native_profiler");
        $__internal_3bc0aa935751ed4aba49a25b9e13f69afe2455ed453c8a2e41fba7b9137fcc8b->enter($__internal_3bc0aa935751ed4aba49a25b9e13f69afe2455ed453c8a2e41fba7b9137fcc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3bc0aa935751ed4aba49a25b9e13f69afe2455ed453c8a2e41fba7b9137fcc8b->leave($__internal_3bc0aa935751ed4aba49a25b9e13f69afe2455ed453c8a2e41fba7b9137fcc8b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67e5f941b78c4ef153b5f776850d7d21cbca84f9813257f10e0aacba49e4bf1c = $this->env->getExtension("native_profiler");
        $__internal_67e5f941b78c4ef153b5f776850d7d21cbca84f9813257f10e0aacba49e4bf1c->enter($__internal_67e5f941b78c4ef153b5f776850d7d21cbca84f9813257f10e0aacba49e4bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67e5f941b78c4ef153b5f776850d7d21cbca84f9813257f10e0aacba49e4bf1c->leave($__internal_67e5f941b78c4ef153b5f776850d7d21cbca84f9813257f10e0aacba49e4bf1c_prof);

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
