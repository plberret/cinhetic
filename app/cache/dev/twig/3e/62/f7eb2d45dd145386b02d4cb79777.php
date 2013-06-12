<?php

/* ::base.html.twig */
class __TwigTemplate_3e62f7eb2d45dd145386b02d4cb79777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "\t\t
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  78 => 14,  75 => 13,  70 => 12,  63 => 7,  60 => 6,  47 => 17,  23 => 1,  110 => 34,  103 => 30,  100 => 29,  93 => 35,  91 => 34,  87 => 32,  80 => 26,  68 => 22,  64 => 21,  54 => 5,  44 => 13,  38 => 7,  33 => 6,  30 => 3,  154 => 50,  149 => 49,  146 => 48,  138 => 42,  127 => 39,  124 => 38,  118 => 36,  108 => 34,  106 => 33,  102 => 32,  99 => 31,  95 => 30,  85 => 29,  74 => 19,  71 => 23,  65 => 16,  55 => 14,  53 => 13,  49 => 12,  46 => 11,  42 => 12,  35 => 9,  32 => 4,  29 => 5,);
    }
}
