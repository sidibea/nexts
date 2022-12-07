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

/* Admin/topAuthors/list.html.twig */
class __TwigTemplate_b34264c3efb857595375592c6cb78c27 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/topAuthors/list.html.twig"));

        $this->parent = $this->loadTemplate("Admin/layout.html.twig", "Admin/topAuthors/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 5
        echo "    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Top authors section</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li class=\"\">Dashboard</li>
                    <li class=\"active\">Top Authors</li>
                </ol>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_top_authors_new");
        echo "\" class=\"btn btn-secondary\">New item</a><br>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong class=\"card-title\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 35), "html", null, true);
        echo " items </strong>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), "isSorted", [0 => "v.title"], "method", false, false, false, 42)) {
            echo " class=\"sorted\"";
        }
        echo " scope=\"col\">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 42, $this->source); })()), "Name", "v.name");
        echo "</th>
                                <th scope=\"col\">Biographie</th>
                                <th scope=\"col\"></th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 50
            echo "                                <tr>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                    <td>";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["c"], "biography", [], "any", false, false, false, 52);
            echo "</td>
                                    <td>
                                        <a href=\"\"  class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"\"  class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "

                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"navigation center\">
                            ";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 67, $this->source); })()));
        echo "
                        </div>

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
        return "Admin/topAuthors/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  155 => 60,  141 => 52,  137 => 51,  134 => 50,  130 => 49,  116 => 42,  106 => 35,  96 => 28,  91 => 25,  84 => 24,  60 => 5,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Admin/layout.html.twig\" %}


{% block breadcrumbs %}
    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Top authors section</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li class=\"\">Dashboard</li>
                    <li class=\"active\">Top Authors</li>
                </ol>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"{{ path('ns_admin_top_authors_new') }}\" class=\"btn btn-secondary\">New item</a><br>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong class=\"card-title\">{{ pagination.getTotalItemCount }} items </strong>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th {% if pagination.isSorted('v.title') %} class=\"sorted\"{% endif %} scope=\"col\">{{ knp_pagination_sortable(pagination, 'Name', 'v.name') }}</th>
                                <th scope=\"col\">Biographie</th>
                                <th scope=\"col\"></th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for c in pagination %}
                                <tr>
                                    <td>{{ c.name }}</td>
                                    <td>{{ c.biography |raw }}</td>
                                    <td>
                                        <a href=\"\"  class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"\"  class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>

                                </tr>
                            {% endfor %}


                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"navigation center\">
                            {{ knp_pagination_render(pagination) }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Admin/topAuthors/list.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\Admin\\topAuthors\\list.html.twig");
    }
}
