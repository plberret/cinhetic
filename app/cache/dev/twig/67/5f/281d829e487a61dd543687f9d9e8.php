<?php

/* HeticSearchBundle::leftcol.html.twig */
class __TwigTemplate_675f281d829e487a61dd543687f9d9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"accordion\" id=\"accordion2\">
\t<div class=\"accordion-group\">
\t\t<div class=\"accordion-heading\">
\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\"><i class=\"icon-th-large\"></i>  Genres</a>
\t\t</div>
\t\t<div id=\"collapseOne\" class=\"accordion-body collapse in\">
\t\t\t<div class=\"accordion-inner\">
\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "\t\t\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_category_view", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\" style=\"color: #000;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"accordion-group\">
\t\t<div class=\"accordion-heading\">
\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\"><i class=\"icon-user\"></i> Acteurs</a>
\t\t</div>
\t\t<div id=\"collapseTwo\" class=\"accordion-body collapse\">
\t\t\t<div class=\"accordion-inner\">
\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 25
            echo "\t\t\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_acteur_view", array("id" => $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "id"))), "html", null, true);
            echo "\" style=\"color: #000;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "nom"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle::leftcol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  58 => 24,  45 => 13,  34 => 11,  19 => 1,  81 => 15,  78 => 14,  75 => 27,  70 => 12,  63 => 7,  60 => 6,  47 => 17,  23 => 1,  110 => 34,  103 => 30,  100 => 29,  93 => 35,  91 => 34,  87 => 32,  80 => 26,  68 => 22,  64 => 21,  54 => 5,  44 => 13,  38 => 7,  33 => 6,  30 => 10,  154 => 50,  149 => 49,  146 => 48,  138 => 42,  127 => 39,  124 => 38,  118 => 36,  108 => 34,  106 => 33,  102 => 32,  99 => 31,  95 => 30,  85 => 29,  74 => 19,  71 => 23,  65 => 16,  55 => 14,  53 => 13,  49 => 12,  46 => 11,  42 => 12,  35 => 9,  32 => 4,  29 => 5,);
    }
}
