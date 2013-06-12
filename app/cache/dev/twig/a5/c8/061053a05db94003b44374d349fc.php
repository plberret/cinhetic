<?php

/* HeticSearchBundle:Actor:actor.html.twig */
class __TwigTemplate_a5c8061053a05db94003b44374d349fc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "actor"), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "actor"), "nom"), "html", null, true);
        echo "</h1>
\t</div>
\t<div>
\t\t<ul class=\"inline well well-small\">
\t\t\t";
        // line 10
        if (($this->getAttribute($this->getContext($context, "actor"), "dob") != null)) {
            // line 11
            echo "\t\t\t\t<li><strong>Date de naissance: </strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "actor"), "dob"), "d M Y"), "html", null, true);
            echo "</li>
\t\t\t";
        }
        // line 13
        echo "\t\t</ul>
\t</div>
\t
\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "actor", true), "film", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 17
            echo "\t\t<div class=\"cross_selling\">
\t\t\t<h3>Films de l'acteur</h3>
\t\t\t<div>
\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "actor"), "film"));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 22
                echo "\t\t\t\t\t\t<li class=\"span5\">
\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t";
                // line 24
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "film", true), "medias", array(), "any", false, true), 0, array(), "array", true, true)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "film"), "medias"), 0, array(), "array"), "picture"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "film"), "medias"), 0, array(), "array"), "legend"), "html", null, true);
                    echo "\" style=\"width: 90%;height: auto;margin: 20px auto;\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/films"), "html", null, true);
                    echo "/not-found.jpg\" alt=\"image not found\" style=\"width: 90%;height: auto;margin: 20px auto;\">
\t\t\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<h4 style=\"line-height: 26px;\"><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => $this->getAttribute($this->getContext($context, "film"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "film"), "title"), "html", null, true);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t<p>";
                // line 31
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "film"), "synopsis"), 220, true, "..."), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t";
        }
        // line 41
        echo "\t\t
";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Actor:actor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  58 => 17,  34 => 6,  81 => 15,  63 => 7,  23 => 1,  110 => 36,  100 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 23,  38 => 7,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 27,  70 => 12,  67 => 15,  61 => 13,  94 => 22,  89 => 20,  85 => 29,  75 => 13,  68 => 22,  56 => 16,  87 => 32,  21 => 2,  26 => 6,  93 => 30,  88 => 6,  78 => 14,  46 => 7,  27 => 4,  44 => 13,  31 => 5,  28 => 4,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 41,  105 => 40,  91 => 34,  62 => 23,  49 => 12,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 17,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 25,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 10,  41 => 7,  35 => 9,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 30,  99 => 31,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 26,  73 => 19,  64 => 21,  60 => 6,  57 => 11,  54 => 5,  51 => 13,  48 => 13,  45 => 11,  42 => 12,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
