<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_9e17c5e91063b1117083afc9ac06d5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 88,  179 => 84,  152 => 74,  129 => 64,  97 => 52,  146 => 48,  124 => 62,  118 => 36,  102 => 32,  65 => 16,  59 => 36,  53 => 17,  262 => 94,  257 => 91,  253 => 89,  250 => 88,  240 => 84,  234 => 83,  231 => 82,  226 => 81,  216 => 74,  210 => 70,  190 => 64,  180 => 62,  178 => 61,  174 => 60,  167 => 58,  155 => 75,  150 => 48,  137 => 46,  127 => 39,  104 => 34,  77 => 21,  90 => 28,  58 => 24,  34 => 26,  81 => 47,  63 => 20,  23 => 1,  110 => 36,  100 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 80,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 65,  128 => 49,  119 => 42,  107 => 36,  71 => 18,  38 => 6,  177 => 65,  165 => 64,  160 => 53,  135 => 47,  126 => 63,  114 => 59,  84 => 48,  70 => 21,  67 => 19,  61 => 17,  94 => 51,  89 => 28,  85 => 22,  75 => 43,  68 => 19,  56 => 35,  87 => 49,  21 => 2,  26 => 6,  93 => 30,  88 => 26,  78 => 14,  46 => 11,  27 => 3,  44 => 13,  31 => 25,  28 => 6,  196 => 66,  183 => 70,  171 => 81,  166 => 79,  163 => 78,  158 => 52,  156 => 58,  151 => 57,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 36,  105 => 55,  91 => 50,  62 => 25,  49 => 12,  24 => 21,  25 => 3,  19 => 19,  79 => 23,  72 => 21,  69 => 40,  47 => 14,  40 => 8,  37 => 10,  22 => 20,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 56,  101 => 32,  98 => 34,  96 => 31,  83 => 25,  74 => 24,  66 => 39,  55 => 14,  52 => 10,  50 => 14,  43 => 7,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 74,  168 => 80,  164 => 59,  162 => 62,  154 => 50,  149 => 73,  147 => 58,  144 => 53,  141 => 70,  133 => 45,  130 => 41,  125 => 40,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 33,  103 => 34,  99 => 31,  95 => 30,  92 => 29,  86 => 27,  82 => 22,  80 => 26,  73 => 22,  64 => 38,  60 => 19,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 30,  42 => 29,  39 => 11,  36 => 5,  33 => 8,  30 => 7,);
    }
}
