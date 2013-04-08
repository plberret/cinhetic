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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"well\">
\t<fieldset>
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
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
        return array (  27 => 3,  19 => 1,  34 => 6,  31 => 5,  28 => 4,);
    }
}
