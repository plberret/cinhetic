<?php

/* HeticSearchBundle::layout.html.twig */
class __TwigTemplate_e40094a6b0688d9078a4861e7e595aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'leftcol' => array($this, 'block_leftcol'),
            'content' => array($this, 'block_content'),
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
        echo "\t<header>
\t\t<div class=\"navbar \">
\t\t\t<div class=\"navbar-inner\">
\t\t\t\t<a class=\"brand\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_homepage"), "html", null, true);
        echo "\">Cin'Hetic</a>
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t<li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_homepage"), "html", null, true);
        echo "\">Rechercher</a></li>
\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_about"), "html", null, true);
        echo "\">About</a></li>
\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_contact"), "html", null, true);
        echo "\">Contact</a></li>
\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div><!-- end navbar -->
\t</header>
\t
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "\t<div class=\"flash-notice alert alert-success span11 offset1\">
\t\t";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t
\t<div class=\"row offset1\">
\t\t<div class=\"span3\">
\t\t\t";
        // line 29
        $this->displayBlock('leftcol', $context, $blocks);
        // line 32
        echo "\t\t</div>
\t\t<div class=\"span10\">
\t\t\t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "\t\t</div>
\t</div>
\t
";
    }

    // line 29
    public function block_leftcol($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t\t";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HeticSearchBundle:Default:leftCol"));
        echo "
\t\t\t";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  103 => 30,  100 => 29,  93 => 35,  91 => 34,  87 => 32,  80 => 26,  68 => 22,  64 => 21,  54 => 14,  44 => 10,  38 => 7,  33 => 4,  30 => 3,  154 => 50,  149 => 49,  146 => 48,  138 => 42,  127 => 39,  124 => 38,  118 => 36,  108 => 34,  106 => 33,  102 => 32,  99 => 31,  95 => 30,  85 => 29,  74 => 19,  71 => 23,  65 => 16,  55 => 14,  53 => 13,  49 => 12,  46 => 11,  42 => 10,  35 => 5,  32 => 4,  29 => 3,);
    }
}
