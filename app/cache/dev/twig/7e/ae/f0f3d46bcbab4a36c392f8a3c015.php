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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hetic_search_result"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"well\">
\t<legend>Rechercher un film</legend>
\t<fieldset>
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"span4\">
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label" => "Nom du fim"));
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
\t\t\t\t<div id=\"ajaxFilm\"></div>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'label', array("label" => "Catégorie"));
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t<div class=\"row\">
\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<div class=\"span3\">
\t\t\t\t<span>Résultats par page : </span>
\t\t\t\t<select name=\"nb\" id=\"nb\">
\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t<option value=\"15\">15</option>
\t\t\t\t\t<option value=\"20\">20</option>
\t\t\t\t\t<option value=\"50\">50</option>
\t\t\t\t\t<option value=\"100\">100</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
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
        return array (  66 => 21,  58 => 16,  54 => 15,  50 => 14,  43 => 10,  39 => 9,  35 => 8,  28 => 4,  19 => 1,);
    }
}
