<?php

/* HeticSearchBundle:Form:search_form.html.twig */
class __TwigTemplate_7eaef0f3d46bcbab4a36c392f8a3c015 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_homepage"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"well\">
\t<fieldset>
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t<button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "HeticSearchBundle:Form:search_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,  81 => 15,  78 => 14,  70 => 12,  60 => 6,  54 => 5,  47 => 17,  44 => 13,  33 => 6,  23 => 1,  75 => 13,  72 => 22,  64 => 22,  53 => 14,  48 => 12,  43 => 10,  71 => 19,  66 => 25,  63 => 7,  57 => 13,  46 => 11,  42 => 12,  37 => 7,  35 => 9,  32 => 4,  29 => 5,);
    }
}
