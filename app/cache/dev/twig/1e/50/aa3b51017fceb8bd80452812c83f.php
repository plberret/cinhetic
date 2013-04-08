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
        echo "\t<h1>Résultat de la recherche: </h1>
\t<ul class=\"media-list\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 8
            echo "\t\t\t<li class=\"media well\">
\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t<h4 class=\"media-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "title"), "html", null, true);
            echo "</h4>
\t\t\t\t\t<div><span class=\"icon-film\"> </span><strong> Catégorie: </strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "category"), "title"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"media\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis"), "html", null, true);
            echo "</div>
\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-inverse offset9\">Voir la fiche du film</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t</ul>
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
        return array (  65 => 17,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
