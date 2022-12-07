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

/* Admin/Story/list.html.twig */
class __TwigTemplate_a9831ed87b1e1e002fe7cf0adf08df02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Story/list.html.twig"));

        $this->parent = $this->loadTemplate("Admin/layout.html.twig", "Admin/Story/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 4
        echo "    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Storylines</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li class=\"\">Dashboard</li>
                    <li class=\"active\">Storylines</li>
                </ol>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    <div class=\"animated fadeIn\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "isSorted", [0 => "s.title"], "method", false, false, false, 34)) {
            echo " class=\"sorted\"";
        }
        echo " scope=\"col\">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "Title", "s.title");
        echo "</th>
                                <th>Forum</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">Proposer</th>
                                <th scope=\"col\">Published At</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 45
            echo "                                <tr>
                                    <th scope=\"row\"><img class=\"image_fade\" style=\"width: 50px; height: 50px \" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
            echo "\"/></th>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "forum", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["story"], "description", [], "any", false, false, false, 49)), 0, 100), "html", null, true);
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "createdAt", [], "any", false, false, false, 51), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["story"], "isEnabled", [], "any", false, false, false, 53) == true)) {
                // line 54
                echo "                                            <span class=\"badge badge-success\">Active</span>
                                        ";
            } else {
                // line 56
                echo "                                            <span class=\"badge badge-danger\">Desactive</span>
                                        ";
            }
            // line 58
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" target=\"_blank\"  class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
                                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"   class=\"btn btn-warning\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"  class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "

                            </tbody>
                        </table>
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
        return "Admin/Story/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 67,  174 => 62,  170 => 61,  166 => 60,  162 => 58,  158 => 56,  154 => 54,  152 => 53,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  124 => 45,  120 => 44,  103 => 34,  91 => 24,  84 => 23,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Admin/layout.html.twig\" %}

{% block breadcrumbs %}
    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Storylines</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li class=\"\">Dashboard</li>
                    <li class=\"active\">Storylines</li>
                </ol>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"animated fadeIn\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th {% if pagination.isSorted('s.title') %} class=\"sorted\"{% endif %} scope=\"col\">{{ knp_pagination_sortable(pagination, 'Title', 's.title') }}</th>
                                <th>Forum</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">Proposer</th>
                                <th scope=\"col\">Published At</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for story in pagination %}
                                <tr>
                                    <th scope=\"row\"><img class=\"image_fade\" style=\"width: 50px; height: 50px \" src=\"{{ vich_uploader_asset(story, 'imageFile') }}\"/></th>
                                    <td>{{ story.title }}</td>
                                    <td>{{ story.forum.name }}</td>
                                    <td>{{ story.description |striptags|slice(0, 100) }}</td>
                                    <td>{{ story.publishedBy.username }}</td>
                                    <td>{{ story.createdAt | date('d-m-Y') }}</td>
                                    <td>
                                        {% if story.isEnabled == true %}
                                            <span class=\"badge badge-success\">Active</span>
                                        {% else %}
                                            <span class=\"badge badge-danger\">Desactive</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" target=\"_blank\"  class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
                                        <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\"   class=\"btn btn-warning\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\"  class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>

                                </tr>
                            {% endfor %}


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Admin/Story/list.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\Admin\\Story\\list.html.twig");
    }
}
