<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_b2f842f52321e615eaf55abdc472cd62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  188 => 88,  179 => 84,  152 => 74,  129 => 64,  97 => 52,  146 => 48,  124 => 62,  118 => 36,  102 => 17,  65 => 16,  59 => 13,  53 => 11,  262 => 94,  257 => 91,  253 => 89,  250 => 88,  240 => 84,  234 => 83,  231 => 82,  226 => 81,  216 => 74,  210 => 70,  190 => 64,  180 => 62,  178 => 61,  174 => 60,  167 => 58,  155 => 75,  150 => 48,  137 => 46,  127 => 28,  104 => 34,  77 => 21,  90 => 32,  58 => 24,  34 => 26,  81 => 47,  63 => 20,  23 => 1,  110 => 22,  100 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 80,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 65,  128 => 49,  119 => 42,  107 => 36,  71 => 18,  38 => 6,  177 => 65,  165 => 64,  160 => 53,  135 => 47,  126 => 63,  114 => 59,  84 => 29,  70 => 21,  67 => 19,  61 => 12,  94 => 34,  89 => 28,  85 => 22,  75 => 43,  68 => 19,  56 => 11,  87 => 49,  21 => 2,  26 => 11,  93 => 30,  88 => 31,  78 => 26,  46 => 8,  27 => 3,  44 => 13,  31 => 4,  28 => 3,  196 => 66,  183 => 70,  171 => 81,  166 => 79,  163 => 78,  158 => 52,  156 => 58,  151 => 57,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 19,  105 => 18,  91 => 50,  62 => 25,  49 => 10,  24 => 21,  25 => 3,  19 => 19,  79 => 23,  72 => 21,  69 => 40,  47 => 8,  40 => 6,  37 => 5,  22 => 20,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 32,  98 => 34,  96 => 31,  83 => 25,  74 => 24,  66 => 39,  55 => 14,  52 => 10,  50 => 14,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 74,  168 => 80,  164 => 59,  162 => 62,  154 => 50,  149 => 73,  147 => 58,  144 => 53,  141 => 70,  133 => 45,  130 => 41,  125 => 40,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 33,  103 => 34,  99 => 31,  95 => 30,  92 => 29,  86 => 27,  82 => 28,  80 => 26,  73 => 16,  64 => 13,  60 => 19,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 3,);
    }
}
