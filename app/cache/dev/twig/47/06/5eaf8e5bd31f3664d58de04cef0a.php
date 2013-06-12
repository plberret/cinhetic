<?php

/* HeticSearchBundle:Film:film.html.twig */
class __TwigTemplate_47065eaf8e5bd31f3664d58de04cef0a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "title"), "html", null, true);
        echo "</h1>
\t</div>
\t<div>
\t\t<ul class=\"inline well well-small\">
\t\t\t";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "category"), "title") != null)) {
            // line 11
            echo "\t\t\t\t<li><i class=\"icon-tag\"></i> <strong>Catégorie: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "category"), "title"), "html", null, true);
            echo "</li>
\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "vues") != null)) {
            // line 14
            echo "\t\t\t\t<li><i class=\"icon-heart\"></i> <strong>Nombre de vue: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "vues"), "html", null, true);
            echo "</li>
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "dateParution"), "date") != null)) {
            // line 17
            echo "\t\t\t\t<li><i class=\"icon-time\"></i> <strong>Date de parution: </strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "dateParution"), "date"), "d M Y"), "html", null, true);
            echo "</li>
\t\t\t";
        }
        // line 19
        echo "\t\t</ul>
\t\t";
        // line 20
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "synopsis") != null)) {
            // line 21
            echo "\t\t\t<div><strong>Synopsis:</strong></div>
\t\t\t<p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "synopsis"), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 24
        echo "\t\t";
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "description") != null)) {
            // line 25
            echo "\t\t\t<hr />
\t\t\t<div><strong>Résumé:</strong></div>
\t\t\t<p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "description"), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 29
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "acteur", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 30
            echo "\t\t\t<hr />
\t\t\t<div style=\"margin-bottom: 10px; line-height: 23px;\"><strong>Acteurs:</strong></div>
\t\t\t<ul class=\"unstyled\">
\t\t\t\t";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "acteur"));
            foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
                // line 34
                echo "\t\t\t\t\t<li><i class=\"icon-user\"></i><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_acteur_view", array("id" => $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "id"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "nom"), "html", null, true);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "\t\t\t</ul>
\t\t";
        }
        // line 38
        echo "\t</div>
\t
\t";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 41
            echo "\t\t<hr />
\t\t<div class=\"galerie\">
\t\t\t<h3>Galerie</h3>
\t\t\t<div class=\"well\">
\t\t\t\t";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "medias"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 46
                echo "\t\t\t\t\t";
                if ((!(null === $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "picture")))) {
                    // line 47
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "picture"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "legend"), "html", null, true);
                    echo "\" width=\"134px\" height=\"auto\" style=\"margin: 10px 5px;\" />
\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 50
            echo "\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t<div class=\"apercu\">
\t\t\t<h3>Teaser du film</h3>
\t\t\t<div class=\"well\">
\t\t\t\t";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "medias"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 57
                echo "\t\t\t\t\t";
                if ((!(null === $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "video")))) {
                    // line 58
                    echo "\t\t\t\t\t\t<iframe width=\"740\" height=\"500\" src=\"http://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "video"), "html", null, true);
                    echo "\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 64
        echo "\t
\t";
        // line 65
        if ($this->getAttribute((isset($context["crossSelling"]) ? $context["crossSelling"] : null), 0, array(), "array", true, true)) {
            // line 66
            echo "\t\t<hr />
\t\t<div class=\"cross_selling\">
\t\t\t<h3>Ces films peuvent vous intéresser</h3>
\t\t\t<div>
\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crossSelling"]) ? $context["crossSelling"] : $this->getContext($context, "crossSelling")));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 72
                echo "\t\t\t\t\t\t<li class=\"span2\">
\t\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 74
                if ($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : null), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "picture"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "medias"), 0, array(), "array"), "legend"), "html", null, true);
                    echo "\" style=\"auto; height: width: 200px; margin: 10px auto;\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                    echo "/not-found.jpg\" alt=\"image not found\" style=\"auto; height: width: 200px; margin: 10px auto;\">
\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 80
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
            // line 83
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 87
        echo "\t
\t<hr />
\t<div class=\"comments\">
\t\t<h3>Commentaires</h3>
\t\t<div class=\"well\">
\t\t\t<div>
\t\t\t\t";
        // line 93
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "commentaires", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 94
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "commentaires"));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 95
                echo "\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<h4 style=\"font-size: 14px; font-weight: normal;\"><i class=\"icon-comment\"></i> Le <strong>";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "dateCreated"), "date"), "d M Y"), "html", null, true);
                echo "</strong>, <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "nom"), "html", null, true);
                echo "</strong> à dit :</h4>
\t\t\t\t\t\t\t<p>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "content"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<hr />
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 101
            echo "\t\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t    <div class=\"alert alert-block\">Aucun commentaire !</div>
\t\t\t\t";
        }
        // line 104
        echo "\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>Laisser un commentaire</h3>
\t\t\t\t";
        // line 107
        $this->env->loadTemplate("HeticSearchBundle:Form:comment_form.html.twig")->display(array_merge($context, array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"))));
        // line 108
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t\t
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Film:film.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 108,  295 => 107,  290 => 104,  286 => 102,  283 => 101,  273 => 97,  267 => 96,  264 => 95,  259 => 94,  257 => 93,  249 => 87,  243 => 83,  232 => 80,  229 => 79,  223 => 77,  213 => 75,  211 => 74,  207 => 73,  204 => 72,  200 => 71,  193 => 66,  191 => 65,  188 => 64,  183 => 61,  177 => 60,  171 => 58,  168 => 57,  164 => 56,  156 => 50,  150 => 49,  140 => 47,  137 => 46,  133 => 45,  127 => 41,  125 => 40,  121 => 38,  117 => 36,  104 => 34,  100 => 33,  95 => 30,  92 => 29,  87 => 27,  83 => 25,  80 => 24,  75 => 22,  72 => 21,  70 => 20,  67 => 19,  61 => 17,  58 => 16,  52 => 14,  49 => 13,  43 => 11,  41 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
