<?php

/* :Pagination:twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_0a3c8b278b636103f8e5fc4a96203f7f extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (($this->getContext($context, "startPage") > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (($this->getContext($context, "startPage") == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (($this->getContext($context, "startPage") != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "
    ";
            // line 62
            if (($this->getContext($context, "pageCount") > $this->getContext($context, "endPage"))) {
                // line 63
                echo "        ";
                if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 1))) {
                    // line 64
                    echo "            ";
                    if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => ($this->getContext($context, "pageCount") - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getContext($context, "pageCount") - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "pageCount")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "pageCount"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return ":Pagination:twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  766 => 179,  758 => 175,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  466 => 75,  463 => 74,  450 => 72,  448 => 71,  438 => 69,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  405 => 58,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  329 => 26,  323 => 24,  316 => 22,  295 => 16,  290 => 14,  287 => 13,  269 => 5,  267 => 4,  260 => 330,  256 => 328,  254 => 327,  238 => 319,  236 => 313,  233 => 312,  215 => 285,  213 => 274,  205 => 267,  200 => 262,  197 => 261,  192 => 251,  184 => 239,  346 => 321,  343 => 320,  299 => 278,  20 => 1,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 180,  756 => 174,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 146,  679 => 453,  675 => 452,  671 => 451,  667 => 135,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 108,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 88,  170 => 84,  385 => 160,  382 => 48,  367 => 42,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 20,  308 => 130,  292 => 15,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 6,  270 => 110,  261 => 105,  249 => 100,  244 => 322,  242 => 96,  237 => 93,  228 => 305,  225 => 87,  223 => 297,  218 => 286,  206 => 77,  204 => 76,  159 => 193,  148 => 46,  344 => 119,  332 => 116,  324 => 139,  321 => 23,  318 => 111,  315 => 110,  306 => 107,  303 => 128,  300 => 105,  297 => 277,  291 => 102,  274 => 97,  265 => 107,  263 => 95,  255 => 103,  212 => 79,  175 => 65,  161 => 199,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 43,  348 => 322,  334 => 27,  327 => 140,  293 => 118,  288 => 101,  276 => 113,  273 => 112,  271 => 111,  259 => 103,  251 => 101,  248 => 324,  243 => 92,  221 => 85,  219 => 84,  202 => 265,  195 => 252,  191 => 67,  185 => 66,  172 => 64,  153 => 77,  134 => 158,  113 => 40,  76 => 31,  188 => 88,  179 => 84,  152 => 74,  129 => 64,  97 => 52,  146 => 178,  124 => 62,  118 => 49,  102 => 30,  65 => 20,  59 => 36,  53 => 11,  262 => 104,  257 => 91,  253 => 89,  250 => 325,  240 => 92,  234 => 83,  231 => 306,  226 => 298,  216 => 74,  210 => 273,  190 => 242,  180 => 63,  178 => 66,  174 => 214,  167 => 58,  155 => 75,  150 => 55,  137 => 46,  127 => 60,  104 => 87,  77 => 25,  90 => 27,  58 => 14,  34 => 26,  81 => 47,  63 => 21,  23 => 1,  110 => 38,  100 => 33,  480 => 162,  474 => 77,  469 => 76,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 70,  437 => 147,  435 => 68,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 59,  402 => 57,  398 => 129,  393 => 52,  387 => 50,  384 => 49,  381 => 120,  379 => 47,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 21,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 115,  283 => 100,  278 => 8,  268 => 85,  264 => 3,  258 => 329,  252 => 326,  247 => 78,  241 => 321,  235 => 85,  229 => 87,  224 => 81,  220 => 295,  214 => 69,  208 => 268,  169 => 207,  143 => 43,  140 => 42,  132 => 65,  128 => 49,  119 => 114,  107 => 37,  71 => 19,  38 => 10,  177 => 64,  165 => 83,  160 => 53,  135 => 62,  126 => 63,  114 => 59,  84 => 48,  70 => 19,  67 => 16,  61 => 2,  94 => 51,  89 => 28,  85 => 26,  75 => 43,  68 => 20,  56 => 35,  87 => 49,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 13,  27 => 5,  44 => 8,  31 => 25,  28 => 3,  196 => 92,  183 => 70,  171 => 81,  166 => 79,  163 => 78,  158 => 80,  156 => 192,  151 => 185,  142 => 59,  138 => 69,  136 => 165,  121 => 61,  117 => 39,  105 => 55,  91 => 50,  62 => 19,  49 => 12,  24 => 21,  25 => 3,  19 => 19,  79 => 25,  72 => 21,  69 => 40,  47 => 10,  40 => 11,  37 => 7,  22 => 20,  246 => 323,  157 => 56,  145 => 74,  139 => 166,  131 => 157,  123 => 61,  120 => 20,  115 => 40,  111 => 107,  108 => 56,  101 => 86,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 39,  55 => 17,  52 => 16,  50 => 10,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 24,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 241,  182 => 85,  176 => 220,  173 => 85,  168 => 80,  164 => 200,  162 => 54,  154 => 186,  149 => 73,  147 => 75,  144 => 173,  141 => 70,  133 => 45,  130 => 39,  125 => 42,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 34,  99 => 68,  95 => 39,  92 => 31,  86 => 27,  82 => 25,  80 => 24,  73 => 23,  64 => 38,  60 => 20,  57 => 19,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 10,  36 => 5,  33 => 5,  30 => 3,);
    }
}
