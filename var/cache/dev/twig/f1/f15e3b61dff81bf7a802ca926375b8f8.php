<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* proposedScene/edit.html.twig */
class __TwigTemplate_6731b5d69b0243352816454f1b7ea0c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'slider' => [$this, 'block_slider'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposedScene/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proposedScene/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Scenes</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "<div class=\"content-wrap\">

    <div class=\"container\">
        <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; width: 100%; text-align: justify; word-spacing: 4px\">
            <div class=\"clear\"></div>
            <div id=\"proposenewscene\" >
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "

    ";
        // line 30
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'errors');
        echo "
    <div class=\"row\">
        <div class=\"form-group\">
            <label for=\"nom_carte\">Title</label>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
        </div>

        <div class=\"form-group\">
            <label for=\"nom_carte\">Content</label>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "content", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
        </div>

        <div class=\" line\"></div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Submit</button>

        </div>

    </div>


    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'rest');
        echo "

    ";
        // line 55
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
</div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "proposedScene/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 55,  151 => 52,  135 => 39,  127 => 34,  119 => 30,  114 => 27,  106 => 21,  99 => 20,  84 => 10,  76 => 6,  69 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{ story.title }} {% endblock %}

{% block slider %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>{{ proposed.title }}</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Scenes</li>
            </ol>
        </div>
    </div>
{% endblock %}


{% block content %}
<div class=\"content-wrap\">

    <div class=\"container\">
        <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; width: 100%; text-align: justify; word-spacing: 4px\">
            <div class=\"clear\"></div>
            <div id=\"proposenewscene\" >
    {{ form_start(form) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}
    <div class=\"row\">
        <div class=\"form-group\">
            <label for=\"nom_carte\">Title</label>
            {{ form_widget(form.title, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
        </div>

        <div class=\"form-group\">
            <label for=\"nom_carte\">Content</label>
            {{ form_widget(form.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
        </div>

        <div class=\" line\"></div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Submit</button>

        </div>

    </div>


    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}
</div>
        </div>
    </div>
</div>
{% endblock %}
", "proposedScene/edit.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\proposedScene\\edit.html.twig");
    }
}
