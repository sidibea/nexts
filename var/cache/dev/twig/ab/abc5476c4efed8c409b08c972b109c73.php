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

/* proposedScene/view.html.twig */
class __TwigTemplate_1a0585d07194252d713b042324404070 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposedScene/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proposedScene/view.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 3, $this->source); })()), "scene", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " [Proposed] /";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 3, $this->source); })()), "count", [], "any", false, false, false, 3), "html", null, true);
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
        echo "    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 8, $this->source); })()), "scene", [], "any", false, false, false, 8), "storyline", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " [proposed] / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 8, $this->source); })()), "count", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li ><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 11, $this->source); })()), "scene", [], "any", false, false, false, 11), "storyline", [], "any", false, false, false, 11), "forum", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 11, $this->source); })()), "scene", [], "any", false, false, false, 11), "storyline", [], "any", false, false, false, 11), "forum", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</a> </li>
                <li ><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 12, $this->source); })()), "scene", [], "any", false, false, false, 12), "storyline", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 12, $this->source); })()), "scene", [], "any", false, false, false, 12), "storyline", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</a> </li>
                <li class=\"active\">read scenes </li>
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
        <div class=\"container clearfix notopmargin \" style=\"top: -2em; font-size: 1.2em; text-transform: uppercase; font-family: Courier\" >
            <span><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home / </a></span>
            <span><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 23, $this->source); })()), "scene", [], "any", false, false, false, 23), "storyline", [], "any", false, false, false, 23), "forum", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 23, $this->source); })()), "scene", [], "any", false, false, false, 23), "storyline", [], "any", false, false, false, 23), "forum", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo " / </a></span>
            <span><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 24, $this->source); })()), "scene", [], "any", false, false, false, 24), "storyline", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 24, $this->source); })()), "scene", [], "any", false, false, false, 24), "storyline", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        echo " / </a></span>
            <span class=\"active\">read scenes</span>

        </div>
        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\">
                <div class=\"clear\"></div>
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\"><b>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 32, $this->source); })()), "scene", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
        echo " </b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; word-spacing: 4px\">
                        ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 34, $this->source); })()), "scene", [], "any", false, false, false, 34), "content", [], "any", false, false, false, 34);
        echo "
                    </div>
                </div>
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\"><b>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 38, $this->source); })()), "scene", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
        echo " [Proposed] / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 38, $this->source); })()), "count", [], "any", false, false, false, 38), "html", null, true);
        echo "</b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; word-spacing: 4px\">
                        ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 40, $this->source); })()), "content", [], "any", false, false, false, 40);
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 44, $this->source); })()), "scene", [], "any", false, false, false, 44), "storyline", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"button button-3d button-large button-rounded button-green\">Exit scene</a>
                    ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 45, $this->source); })()), "scene", [], "any", false, false, false, 45), "storyline", [], "any", false, false, false, 45), "publishedBy", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45))) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_validate_scenes", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"button fright button-3d button-large button-rounded button-green\">Validate scene</a>

                    ";
        }
        // line 49
        echo "
                </div>
            </div>
            ";
        // line 52
        $this->loadTemplate("_sidebar.html.twig", "proposedScene/view.html.twig", 52)->display($context);
        // line 53
        echo "
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "proposedScene/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 53,  190 => 52,  185 => 49,  178 => 46,  176 => 45,  172 => 44,  165 => 40,  158 => 38,  151 => 34,  146 => 32,  133 => 24,  127 => 23,  123 => 22,  119 => 20,  112 => 19,  96 => 12,  90 => 11,  82 => 8,  78 => 6,  71 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{ proposed.scene.title }} [Proposed] /{{ proposed.count }} {% endblock %}

{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>{{  proposed.scene.storyline.title }} [proposed] / {{ proposed.count }}</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li ><a href=\"{{ path('app_forum_show', { 'id' : proposed.scene.storyline.forum.id }) }}\">{{ proposed.scene.storyline.forum.name }}</a> </li>
                <li ><a href=\"{{ path('ns_web_story_view', { 'id': proposed.scene.storyline.id }) }}\">{{ proposed.scene.storyline.title }}</a> </li>
                <li class=\"active\">read scenes </li>
            </ol>
        </div>
    </div>

{% endblock %}
{% block content %}
    <div class=\"content-wrap\">
        <div class=\"container clearfix notopmargin \" style=\"top: -2em; font-size: 1.2em; text-transform: uppercase; font-family: Courier\" >
            <span><a href=\"{{ path('app_home') }}\">Home / </a></span>
            <span><a href=\"{{ path('app_forum_show', { 'id' : proposed.scene.storyline.forum.id }) }}\">{{ proposed.scene.storyline.forum.name }} / </a></span>
            <span><a href=\"{{ path('ns_web_story_view', { 'id': proposed.scene.storyline.id }) }}\">{{ proposed.scene.storyline.title }} / </a></span>
            <span class=\"active\">read scenes</span>

        </div>
        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\">
                <div class=\"clear\"></div>
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\"><b>{{ proposed.scene.title }} </b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; word-spacing: 4px\">
                        {{ proposed.scene.content  | raw }}
                    </div>
                </div>
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\"><b>{{ proposed.scene.title }} [Proposed] / {{ proposed.count }}</b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; word-spacing: 4px\">
                        {{ proposed.content  | raw }}
                    </div>
                </div>
                <div class=\"form-group\">
                    <a href=\"{{ path('ns_web_scenes_view', { 'id': proposed.scene.storyline.id }) }}\" class=\"button button-3d button-large button-rounded button-green\">Exit scene</a>
                    {% if proposed.scene.storyline.publishedBy == app.user %}
                        <a href=\"{{ path('ns_web_validate_scenes', { 'id': proposed.id }) }}\" class=\"button fright button-3d button-large button-rounded button-green\">Validate scene</a>

                    {% endif %}

                </div>
            </div>
            {% include '_sidebar.html.twig' %}

        </div>

    </div>

{% endblock %}

", "proposedScene/view.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\ProposedScene\\view.html.twig");
    }
}
