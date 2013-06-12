<?php

/* HeticSearchBundle:Search:index.html.twig */
class __TwigTemplate_a0292d76d6762d9e4ab02627610fe5c4 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<h1>Rechercher un film</h1>
\t";
        // line 6
        $this->env->loadTemplate("HeticSearchBundle:Form:search_form.html.twig")->display($context);
        // line 7
        echo "\t<div class=\"well\">
\t\t<h2>Derniers films</h2>
\t\t<ul>
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_films"]) ? $context["last_films"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 11
            echo "\t\t\t    <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "title"), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "\t\t</ul>
\t</div>
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  66 => 18,  63 => 17,  57 => 13,  46 => 11,  42 => 10,  37 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
