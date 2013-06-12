<?php

/* HeticSearchBundle:Category:category.html.twig */
class __TwigTemplate_88365e822784158d02cb4fd884e4b719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HeticSearchBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "\t<div class=\"row\">
\t\t<h1 class=\"span8\" style=\"font-size: 28px;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title"), "html", null, true);
        echo "</h1>
\t</div>
\t<hr />
\t<h2 style=\"font-size: 20px;\">Films appartenant à la catégorie</h2>
\t<ul class=\"thumbnails\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "film"));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 12
            echo "\t\t\t<li class=\"span5\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t";
            // line 14
            if ($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
                // line 15
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "picture"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "legend"), "html", null, true);
                echo "\" style=\"width: 90%;height: auto;margin: 20px auto;\">
\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/not-found.jpg\" alt=\"image not found\" style=\"width: 90%;height: auto;margin: 20px auto;\">
\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4 style=\"line-height: 26px;\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "title"), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t<p>";
            // line 21
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis"), 220, true, "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t</ul>
\t\t
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  77 => 21,  71 => 20,  68 => 19,  62 => 17,  52 => 15,  50 => 14,  46 => 12,  42 => 11,  34 => 6,  31 => 5,  28 => 4,);
    }
}
