<?php

/* HeticSearchBundle:Form:comment_form.html.twig */
class __TwigTemplate_e401d7d9d107f29f2797ae1b046f1578 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_view", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
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
        return "HeticSearchBundle:Form:comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,  150 => 54,  148 => 53,  143 => 50,  134 => 47,  130 => 45,  126 => 44,  122 => 43,  118 => 41,  114 => 40,  102 => 30,  97 => 28,  94 => 27,  91 => 26,  87 => 24,  76 => 22,  72 => 21,  68 => 19,  66 => 18,  63 => 17,  58 => 15,  55 => 14,  49 => 12,  46 => 11,  40 => 9,  38 => 8,  31 => 5,  28 => 4,);
    }
}
