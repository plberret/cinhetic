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

\t<div class=\"span12 offset1\">
\t\t";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t</div>
\t
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t<h1>Layout</h1>
\t\t";
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
        return array (  75 => 23,  72 => 22,  66 => 25,  64 => 22,  53 => 14,  48 => 12,  43 => 10,  37 => 7,  32 => 4,  29 => 3,);
    }
}
