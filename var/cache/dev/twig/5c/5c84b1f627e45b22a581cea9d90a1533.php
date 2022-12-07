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

/* scenes/read.html.twig */
class __TwigTemplate_7db3b014534af1be83d54ccc9d567a77 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scenes/read.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scenes/read.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 3, $this->source); })()), "storyline", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 9, $this->source); })()), "storyline", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Storyline</a></li>
                <li class=\"active\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 13, $this->source); })()), "storyline", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    <div class=\"content-wrap\">
        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                <div class=\"clear\"></div>
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 25, $this->source); })()), "storyline", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                        ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27);
        echo "
                    </div>
                </div>



            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scenes/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  119 => 25,  112 => 20,  105 => 19,  93 => 13,  84 => 9,  76 => 5,  69 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{ scene.storyline.title }} {% endblock %}
{% block slider %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>{{ scene.storyline.title }}:{{ scene.title }}</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Storyline</a></li>
                <li class=\"active\">{{ scene.storyline.title }}</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"content-wrap\">
        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                <div class=\"clear\"></div>
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>{{ scene.storyline.title }}:{{ scene.title }}</b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                        {{ scene.content  | raw }}
                    </div>
                </div>



            </div>
        </div>
    </div>

{% endblock %}

", "scenes/read.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\scenes\\read.html.twig");
    }
}
