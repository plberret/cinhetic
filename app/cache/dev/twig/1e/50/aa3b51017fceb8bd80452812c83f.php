<?php

/* HeticSearchBundle:Search:result.html.twig */
class __TwigTemplate_1e50aa3b51017fceb8bd80452812c83f extends Twig_Template
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
        echo "\t";
        $this->env->loadTemplate("HeticSearchBundle:Form:search_form.html.twig")->display($context);
        // line 6
        echo "\t<h3>Résultat de la recherche: </h3>
\t<!-- <div class=\"well\">
\t\t\t";
        // line 9
        echo "\t\t\t
\t\t</div> -->

\t<ul class=\"thumbnails\">
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 14
            echo "\t\t\t<li class=\"span5\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t";
            // line 16
            if ($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
                // line 17
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "picture"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "legend"), "html", null, true);
                echo "\" style=\"width: 90%;height: auto;margin: 20px auto;\">
\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                echo "/not-found.jpg\" alt=\"image not found\" style=\"width: 90%;height: auto;margin: 20px auto;\">
\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4 style=\"line-height: 26px;\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "title"), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t<p>";
            // line 23
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
        // line 28
        echo "\t</ul>

\t<div class=\"navigation\">
\t    
\t</div>
\t
\t";
        // line 34
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  90 => 28,  79 => 23,  73 => 22,  70 => 21,  64 => 19,  54 => 17,  52 => 16,  48 => 14,  44 => 13,  38 => 9,  34 => 6,  31 => 5,  28 => 4,);
    }
}
