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

/* story/read.html.twig */
class __TwigTemplate_2b2c256f0f4c3043d8a110462c261c39 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "story/read.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "story/read.html.twig", 1);
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
        echo "    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Login</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["scene"]) {
            // line 19
            echo "        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px; \">
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["scene"], "storyline", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["scene"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                        ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["scene"], "content", [], "any", false, false, false, 24);
            echo "
                    </div>

                </div>

                ";
            // line 29
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()));
            echo "



            </div>
            ";
            // line 34
            $this->loadTemplate("_sidebar.html.twig", "story/read.html.twig", 34)->display($context);
            // line 35
            echo "
        </div>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "story/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 35,  148 => 34,  140 => 29,  132 => 24,  125 => 22,  120 => 19,  102 => 18,  95 => 17,  80 => 8,  76 => 6,  69 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{ story.title }} {% endblock %}

{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>{{ story.title }}</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Login</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
    {% for scene in pagination %}
        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px; \">
                <div class=\" panel panel-default\">
                    <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>{{ scene.storyline.title }}:{{ scene.title }}</b></div>
                    <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                        {{ scene.content  | raw }}
                    </div>

                </div>

                {{ knp_pagination_render(pagination) }}



            </div>
            {% include '_sidebar.html.twig' %}

        </div>

    {% endfor %}
{% endblock %}


", "story/read.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\story\\read.html.twig");
    }
}
