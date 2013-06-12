<?php

/* HeticSearchBundle:Home:index.html.twig */
class __TwigTemplate_1170bc166915baf9652e98fc2ea4d703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSearchBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HeticSearchBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        $this->env->loadTemplate("HeticSearchBundle:Form:search_form.html.twig")->display($context);
        // line 5
        echo "\t\t
\t\t<div>
\t\t\t<h3 style=\"font-size: 20px;\"><span class=\"icon-heart\" style=\"vertical-align: 0px;\"></span> Films les plus populaires</h3>
\t\t\t<div>
\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["best_films"]) ? $context["best_films"] : $this->getContext($context, "best_films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 11
            echo "\t\t\t\t\t\t<li class=\"span2\">
\t\t\t\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 13
            if ($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
                // line 14
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "picture"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "legend"), "html", null, true);
                echo "\" style=\"auto; height: width: 200px; margin: 10px auto;\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/not-found.jpg\" alt=\"image not found\" style=\"auto; height: width: 200px; margin: 10px auto;\">
\t\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t<div>
\t\t\t<h3 style=\"font-size: 20px;\"><span class=\"icon-eye-open\" style=\"vertical-align: 0px;\"></span> Derniers films ajoutés</h3>
\t\t\t<div>
\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_films"]) ? $context["last_films"] : $this->getContext($context, "last_films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 31
            echo "\t\t\t\t\t\t<li class=\"span2\">
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "picture"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "legend"), "html", null, true);
                echo "\" style=\"auto; height: width: 200px; margin: 10px auto;\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/not-found.jpg\" alt=\"image not found\" style=\"auto; height: width: 200px; margin: 10px auto;\">
\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t
\t";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  149 => 49,  146 => 48,  138 => 42,  127 => 39,  124 => 38,  118 => 36,  108 => 34,  106 => 33,  102 => 32,  99 => 31,  95 => 30,  85 => 22,  74 => 19,  71 => 18,  65 => 16,  55 => 14,  53 => 13,  49 => 12,  46 => 11,  42 => 10,  35 => 5,  32 => 4,  29 => 3,);
    }
}
