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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "title"), "html", null, true);
        echo "</h1>
\t<div class=\"well\">
\t\t<ul class=\"inline\">
\t\t\t";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "category"), "title") != null)) {
            // line 9
            echo "\t\t\t\t<li><strong>Catégorie: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "category"), "title"), "html", null, true);
            echo "</li>
\t\t\t";
        }
        // line 11
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "vues") != null)) {
            // line 12
            echo "\t\t\t\t<li><strong>Nombre de vue: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "vues"), "html", null, true);
            echo "</li>
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "category"), "title") != null)) {
            // line 15
            echo "\t\t\t\t<li><strong>Date de parution: </strong>";
            echo "</li>
\t\t\t";
        }
        // line 17
        echo "\t\t</ul>
\t\t";
        // line 18
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "acteur") != null)) {
            // line 19
            echo "\t\t\t<div><strong>Acteurs:</strong></div>
\t\t\t<ul>
\t\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "acteur"));
            foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
                // line 22
                echo "\t\t\t\t\t<li> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : null), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : null), "nom"), "html", null, true);
                echo " </li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "\t\t\t</ul>
\t\t";
        }
        // line 26
        echo "\t\t";
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "description") != null)) {
            // line 27
            echo "\t\t\t<div><strong>Résumé:</strong></div>
\t\t\t<p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "description"), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 30
        echo "\t</div>
\t<div class=\"well\">
\t\t<h2>Galerie</h2>
\t</div>
\t<div class=\"well\">
\t\t<h2>Ces films peuvent vous intéresser</h2>
\t</div>
\t<div class=\"well\">
\t\t<h2>Commentaires</h2>
\t\t<div class=\"media\">
\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "commentaires"));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 41
            echo "\t\t\t\t<div class=\"media-body well\">
\t\t\t\t\t<ul class=\"inline\">
\t\t\t\t\t\t<li><strong>Utilisateur: </strong>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "nom"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t<li><strong>email: </strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "email"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t<li><strong>Date: </strong>";
            // line 45
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "content"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "\t\t</div>
\t\t<div class=\"well\">
\t\t\t<h3>Laisser un commentaire</h3>
\t\t\t";
        // line 53
        $this->env->loadTemplate("HeticSearchBundle:Form:comment_form.html.twig")->display(array_merge($context, array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "id"))));
        // line 54
        echo "\t\t</div>
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
        return array (  150 => 54,  148 => 53,  143 => 50,  134 => 47,  130 => 45,  126 => 44,  122 => 43,  118 => 41,  114 => 40,  102 => 30,  97 => 28,  94 => 27,  91 => 26,  87 => 24,  76 => 22,  72 => 21,  68 => 19,  66 => 18,  63 => 17,  58 => 15,  55 => 14,  49 => 12,  46 => 11,  40 => 9,  38 => 8,  31 => 5,  28 => 4,);
    }
}
