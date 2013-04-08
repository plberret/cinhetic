<?php

/* HeticSearchBundle:Search:film.html.twig */
class __TwigTemplate_d4148e39b1aa17ef30c5f295d4b34a9e extends Twig_Template
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
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "title"), "html", null, true);
        echo "</h1>
\t<div class=\"well\">
\t\t<ul class=\"inline\">
\t\t\t<li><strong>Catégorie: </strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "category"), "title"), "html", null, true);
        echo "</li>
\t\t\t<li><strong>Nombre de vue: </strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "vues"), "html", null, true);
        echo "</li>
\t\t\t<li><strong>Date de parution: </strong>";
        // line 10
        echo "</li>
\t\t</ul>
\t\t<div><strong>Acteurs:</strong></div>
\t\t<ul>
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "acteur"));
        foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
            // line 15
            echo "\t\t\t\t<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "nom"), "html", null, true);
            echo " </li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t\t</ul>
\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "description"), "html", null, true);
        echo "</p>
\t</div>
\t<div class=\"well\">
\t\t<h2>Galerie</h2>
\t</div>
\t<div class=\"well\">
\t\t<h2>Ces films peuvent vous intéresser</h2>
\t</div>
\t<div class=\"well\">
\t\t<h2>Commentaires</h2>
\t</div>
\t<div class=\"well\">
\t\t<h3>Laisser un commentaire</h3>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Search:film.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  67 => 17,  56 => 15,  52 => 14,  46 => 10,  42 => 9,  38 => 8,  31 => 5,  28 => 4,);
    }
}
