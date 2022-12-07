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

/* forum/index.html.twig */
class __TwigTemplate_306cf3cc49dbea22500d11a80d3ecfb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Explore ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " storylines</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums_display");
        echo "\">Forums</a></li>
                <li class=\"active\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"container clearfix\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"postcontent  nobottommargin clearfix\" style=\"font-family: Courier; width: 100%; text-align: justify; word-spacing: 4px\">

                    <!-- Posts
                    ============================================= -->
                    <div id=\"posts\" class=\"small-thumbs alt\">
                        <div class=\"fancy-title title-double-border\">
                            <h1>All <span>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</span> Storylines</h1>
                        </div>
                        ";
        // line 27
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 27, $this->source); })()), "storylines", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 28, $this->source); })()), "storylines", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
                // line 29
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "forum", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                                    <div class=\"entry clearfix\">
                                        <div class=\"entry-image\">
                                            <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
                    echo "\" data-lightbox=\"image\">
                                                <img class=\"image_fade\" src=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 33), "html", null, true);
                    echo "\">
                                            </a>
                                        </div>
                                        <div class=\"entry-c\">
                                            <div class=\"entry-title\">
                                                <h2><a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 38), "html", null, true);
                    echo "</a></h2>
                                            </div>
                                            <ul class=\"entry-meta clearfix\">
                                                <li><i class=\"icon-calendar3\"></i> ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "createdAt", [], "any", false, false, false, 41), "d M Y"), "html", null, true);
                    echo "</li>
                                                <li><a href=\"#\"><i class=\"icon-user\"></i> ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", [], "any", false, false, false, 42), "firstname", [], "any", false, false, false, 42), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", [], "any", false, false, false, 42), "lastname", [], "any", false, false, false, 42), "html", null, true);
                    echo "</a></li>
                                                <li><i class=\"icon-folder-open\"></i> <a href=\"\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "scenes", [], "any", false, false, false, 43)), "html", null, true);
                    echo " scenes</a></li>
                                            </ul>
                                            <div class=\"entry-content\">
                                                ";
                    // line 47
                    echo "                                                    ";
                    echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "description", [], "any", false, false, false, 47), 0, 200);
                    echo "... ";
                    // line 48
                    echo "                                                ";
                    // line 49
                    echo "                                                <br> <br>
                                                <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                    echo "\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>View details</a>
                                            </div>
                                        </div>
                                    </div>

                                ";
                }
                // line 56
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
                        ";
        } else {
            // line 59
            echo "                            <h4>OOOPPS.! THERE IS NO STORYLINE UNDER THIS FORUM.</h4>



                        ";
        }
        // line 64
        echo "





                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->
                    <ul class=\"pager nomargin\">
                        <li class=\"previous\"><a href=\"#\">&larr; Older</a></li>
                        <li class=\"next\"><a href=\"#\">Newer &rarr;</a></li>
                    </ul><!-- .pager end -->

                </div><!-- .postcontent end -->
            </div>
            <div class=\"col-md-4\">
                ";
        // line 82
        $this->loadTemplate("_sidebar.html.twig", "forum/index.html.twig", 82)->display($context);
        // line 83
        echo "            </div>
        </div>





    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "forum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 83,  219 => 82,  199 => 64,  192 => 59,  188 => 57,  182 => 56,  173 => 50,  170 => 49,  168 => 48,  164 => 47,  158 => 43,  152 => 42,  148 => 41,  140 => 38,  130 => 33,  126 => 32,  122 => 30,  119 => 29,  114 => 28,  112 => 27,  107 => 25,  96 => 16,  89 => 15,  77 => 9,  73 => 8,  69 => 7,  64 => 5,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Explore {{ forum.name }} storylines</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li><a href=\"{{ path('ns_web_forums_display') }}\">Forums</a></li>
                <li class=\"active\">{{ forum.name }}</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"container clearfix\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"postcontent  nobottommargin clearfix\" style=\"font-family: Courier; width: 100%; text-align: justify; word-spacing: 4px\">

                    <!-- Posts
                    ============================================= -->
                    <div id=\"posts\" class=\"small-thumbs alt\">
                        <div class=\"fancy-title title-double-border\">
                            <h1>All <span>{{ forum.name }}</span> Storylines</h1>
                        </div>
                        {% if forum.storylines|length > 0 %}
                            {% for story in forum.storylines %}
                                {% if forum.id == story.forum.id %}
                                    <div class=\"entry clearfix\">
                                        <div class=\"entry-image\">
                                            <a href=\"{{ vich_uploader_asset(story, 'imageFile') }}\" data-lightbox=\"image\">
                                                <img class=\"image_fade\" src=\"{{ vich_uploader_asset(story, 'imageFile') }}\" alt=\"{{ story.title }}\">
                                            </a>
                                        </div>
                                        <div class=\"entry-c\">
                                            <div class=\"entry-title\">
                                                <h2><a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\">{{ story.title }}</a></h2>
                                            </div>
                                            <ul class=\"entry-meta clearfix\">
                                                <li><i class=\"icon-calendar3\"></i> {{  story.createdAt | date('d M Y') }}</li>
                                                <li><a href=\"#\"><i class=\"icon-user\"></i> {{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }}</a></li>
                                                <li><i class=\"icon-folder-open\"></i> <a href=\"\">{{ story.scenes | length }} scenes</a></li>
                                            </ul>
                                            <div class=\"entry-content\">
                                                {% autoescape %}
                                                    {{ story.description  |slice(0, 200)| raw }}... {# var won't be escaped #}
                                                {% endautoescape %}
                                                <br> <br>
                                                <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>View details</a>
                                            </div>
                                        </div>
                                    </div>

                                {% endif %}
                            {% endfor %}

                        {% else %}
                            <h4>OOOPPS.! THERE IS NO STORYLINE UNDER THIS FORUM.</h4>



                        {% endif %}






                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->
                    <ul class=\"pager nomargin\">
                        <li class=\"previous\"><a href=\"#\">&larr; Older</a></li>
                        <li class=\"next\"><a href=\"#\">Newer &rarr;</a></li>
                    </ul><!-- .pager end -->

                </div><!-- .postcontent end -->
            </div>
            <div class=\"col-md-4\">
                {% include '_sidebar.html.twig' %}
            </div>
        </div>





    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
{% endblock %}
", "forum/index.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\forum\\index.html.twig");
    }
}
