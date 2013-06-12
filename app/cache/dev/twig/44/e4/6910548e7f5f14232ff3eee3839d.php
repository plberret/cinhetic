<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_44e46910548e7f5f14232ff3eee3839d extends Twig_Template
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
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "filterFieldName"), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fields"));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "field"), "html", null, true);
            echo "\"";
            if (($this->getContext($context, "selectedField") == $this->getContext($context, "field"))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "selectedValue"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "filterValueName"), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "button"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 48,  124 => 38,  118 => 36,  102 => 32,  65 => 16,  59 => 11,  53 => 13,  262 => 94,  257 => 91,  253 => 89,  250 => 88,  240 => 84,  234 => 83,  231 => 82,  226 => 81,  216 => 74,  210 => 70,  190 => 64,  180 => 62,  178 => 61,  174 => 60,  167 => 58,  155 => 51,  150 => 48,  137 => 46,  127 => 39,  104 => 34,  77 => 21,  90 => 28,  58 => 24,  34 => 6,  81 => 15,  63 => 7,  23 => 1,  110 => 36,  100 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 80,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 18,  38 => 9,  177 => 65,  165 => 64,  160 => 53,  135 => 47,  126 => 45,  114 => 42,  84 => 27,  70 => 21,  67 => 19,  61 => 17,  94 => 22,  89 => 20,  85 => 22,  75 => 27,  68 => 19,  56 => 16,  87 => 27,  21 => 2,  26 => 6,  93 => 30,  88 => 26,  78 => 14,  46 => 11,  27 => 3,  44 => 13,  31 => 5,  28 => 4,  196 => 66,  183 => 70,  171 => 59,  166 => 71,  163 => 70,  158 => 52,  156 => 58,  151 => 57,  142 => 59,  138 => 42,  136 => 56,  121 => 38,  117 => 36,  105 => 40,  91 => 34,  62 => 25,  49 => 12,  24 => 3,  25 => 3,  19 => 1,  79 => 23,  72 => 21,  69 => 25,  47 => 14,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 34,  101 => 32,  98 => 34,  96 => 31,  83 => 25,  74 => 19,  66 => 15,  55 => 14,  52 => 9,  50 => 14,  43 => 10,  41 => 13,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 50,  149 => 49,  147 => 58,  144 => 53,  141 => 51,  133 => 45,  130 => 41,  125 => 40,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 33,  103 => 30,  99 => 31,  95 => 30,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 22,  64 => 19,  60 => 6,  57 => 15,  54 => 17,  51 => 13,  48 => 7,  45 => 13,  42 => 10,  39 => 9,  36 => 5,  33 => 5,  30 => 10,);
    }
}
