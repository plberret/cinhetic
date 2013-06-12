<?php

/* HeticSearchBundle:Form:filter_search_form.html.twig */
class __TwigTemplate_23ba2558d5a8caf744081aec233ac6c3 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_result"), "html", null, true);
        echo "\" method=\"get\" accept-charset=\"utf-8\">
\t<div class=\"row\">
\t\t<div class=\"span3\">
\t\t\t<span>Trier par : </span>
\t\t\t<select name=\"sort\" id=\"sort\">
\t\t\t\t";
        // line 6
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Id", "a.id");
        echo "
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Title", "a.title");
        echo "
\t\t\t</select>
\t\t</div>
\t\t<div class=\"span3\">
\t\t\t<span>Résultats par page : </span>
\t\t\t<select name=\"nb\" id=\"nb\">
\t\t\t\t<option value=\"5\" ";
        // line 13
        if (($this->getContext($context, "limitPerPage") == 5)) {
            echo "selected";
        }
        echo " >5</option>
\t\t\t\t<option value=\"10\" ";
        // line 14
        if (($this->getContext($context, "limitPerPage") == 10)) {
            echo "selected";
        }
        echo " >10</option>
\t\t\t\t<option value=\"15\" ";
        // line 15
        if (($this->getContext($context, "limitPerPage") == 15)) {
            echo "selected";
        }
        echo " >15</option>
\t\t\t\t<option value=\"20\" ";
        // line 16
        if (($this->getContext($context, "limitPerPage") == 20)) {
            echo "selected";
        }
        echo " >20</option>
\t\t\t\t<option value=\"50\" ";
        // line 17
        if (($this->getContext($context, "limitPerPage") == 50)) {
            echo "selected";
        }
        echo " >50</option>
\t\t\t\t<option value=\"100\" ";
        // line 18
        if (($this->getContext($context, "limitPerPage") == 100)) {
            echo "selected";
        }
        echo " >100</option>
\t\t\t</select>
\t\t</div>
\t\t<input type=\"hidden\" name=\"t\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "searchQuery"), "html", null, true);
        echo "\" />
\t</div>
\t<button class=\"btn btn-primary\">Filtrer</button>
</form>";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Form:filter_search_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  59 => 16,  53 => 15,  262 => 94,  257 => 91,  253 => 89,  250 => 88,  240 => 84,  234 => 83,  231 => 82,  226 => 81,  216 => 74,  210 => 70,  190 => 64,  180 => 62,  178 => 61,  174 => 60,  167 => 58,  155 => 51,  150 => 48,  137 => 46,  127 => 41,  104 => 34,  77 => 21,  90 => 29,  58 => 16,  34 => 6,  81 => 15,  63 => 7,  23 => 1,  110 => 36,  100 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 80,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 18,  38 => 7,  177 => 65,  165 => 64,  160 => 53,  135 => 47,  126 => 45,  114 => 42,  84 => 27,  70 => 20,  67 => 19,  61 => 17,  94 => 22,  89 => 20,  85 => 29,  75 => 22,  68 => 19,  56 => 16,  87 => 27,  21 => 2,  26 => 6,  93 => 30,  88 => 26,  78 => 14,  46 => 12,  27 => 3,  44 => 13,  31 => 5,  28 => 6,  196 => 66,  183 => 70,  171 => 59,  166 => 71,  163 => 70,  158 => 52,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 38,  117 => 36,  105 => 40,  91 => 34,  62 => 17,  49 => 13,  24 => 3,  25 => 3,  19 => 1,  79 => 21,  72 => 21,  69 => 25,  47 => 14,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 25,  66 => 15,  55 => 15,  52 => 14,  50 => 14,  43 => 11,  41 => 13,  35 => 9,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 45,  130 => 41,  125 => 40,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 30,  99 => 31,  95 => 30,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 21,  60 => 6,  57 => 11,  54 => 5,  51 => 13,  48 => 13,  45 => 11,  42 => 11,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
