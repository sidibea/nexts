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

/* scenes/ProposedScene.html.twig */
class __TwigTemplate_100eeb949f2050b10472f5af6984b078 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scenes/ProposedScene.html.twig"));

        // line 1
        $context["t"] = 0;
        // line 2
        echo "

";
        // line 4
        if (twig_test_empty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <h4 style=\"color: red\">NO PROPOSED SCENES</h4>
";
        } else {
            // line 7
            echo "    <div class=\"row\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 8, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["proposed"]) {
                // line 9
                echo "

        ";
                // line 11
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11) % 3)) {
                    // line 12
                    echo "        <div class=\"col-md-4 feeds\">
            <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

                <div class=\"entry-c\">
                    <div class=\"entry-title\" style=\"font-family: Courier; word-spacing: 4px\">
                        <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "title", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a><a href=\"\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "title", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a> ";
                    if ((twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17))) {
                        echo "   <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["proposed"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                        echo "\" class=\" \"><i class=\"fa fa-pencil\"></i> </a>";
                    }
                    echo "</h4>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-user\"></i>Created by ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", [], "any", false, false, false, 20), "firstname", [], "any", false, false, false, 20), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", [], "any", false, false, false, 20), "lastname", [], "any", false, false, false, 20), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "createdAt", [], "any", false, false, false, 20), "d M Y  h:i:s"), "html", null, true);
                    echo "</li>
                    </ul>
                    <div class=\"entry-content\">
                        ";
                    // line 23
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["proposed"], "content", [], "any", false, false, false, 23)), 0, 100), "html", null, true);
                    echo "
                        <br> <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_proposed_scenes_view", ["id" => twig_get_attribute($this->env, $this->source, $context["proposed"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\" class=\"more-link\">Read scene</a>
                    </div>
                </div>
            </div>

        </div>
            <div class=\"line\"></div>
            </div>
         <div class=\"row\">

    ";
                } else {
                    // line 35
                    echo "<div class=\"col-md-4 feeds\">
    <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

        <div class=\"entry-c\">
            <div class=\"entry-title\">
                <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "title", [], "any", false, false, false, 40), "html", null, true);
                    echo " </a>  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", [], "any", false, false, false, 40) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["proposed"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                        echo "\" class=\" \"><i class=\"fa fa-pencil\"></i> </a>";
                    }
                    echo " </h4>
            </div>
            <ul class=\"entry-meta clearfix\">
                <li><i class=\"icon-user\"></i>Created by ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", [], "any", false, false, false, 43), "firstname", [], "any", false, false, false, 43), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", [], "any", false, false, false, 43), "lastname", [], "any", false, false, false, 43), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "createdAt", [], "any", false, false, false, 43), "d M Y  h:i:s"), "html", null, true);
                    echo "</li>
            </ul>
            <div class=\"entry-content\">
                ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["proposed"], "content", [], "any", false, false, false, 46)), 0, 100), "html", null, true);
                    echo "
                <br> <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_proposed_scenes_view", ["id" => twig_get_attribute($this->env, $this->source, $context["proposed"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "\" class=\"more-link\">Read scene</a>
            </div>
        </div>
    </div>
</div>


    ";
                }
                // line 55
                echo "

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposed'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
    </div>

";
        }
        // line 62
        echo "
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"myModalLabel\">Modal Heading</h4>
                <button type=\"button\" class=\"btn-close btn-sm\" data-bs-dismiss=\"modal\" aria-hidden=\"true\"></button>
            </div>
            <div class=\"modal-body\">
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href=\"#\" role=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"popover\" title=\"\" data-bs-content=\"And here's some amazing content. It's very engaging. right?\" data-original-title=\"A Title\">button</a> should trigger a popover on click.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href=\"#\" data-bs-toggle=\"tooltip\" title=\"\" data-original-title=\"Tooltip\">This link</a> and <a href=\"#\" data-bs-toggle=\"tooltip\" title=\"\" data-original-title=\"Tooltip\">that link</a> should have tooltips on hover.</p>
                <hr>
                <h4>Overflowing text to show scroll behavior</h4>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p class=\"mb-0\">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scenes/ProposedScene.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 62,  187 => 58,  171 => 55,  160 => 47,  156 => 46,  146 => 43,  134 => 40,  127 => 35,  113 => 24,  109 => 23,  99 => 20,  85 => 17,  78 => 12,  76 => 11,  72 => 9,  55 => 8,  52 => 7,  48 => 5,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set t = 0 %}


{% if pagination is empty %}
    <h4 style=\"color: red\">NO PROPOSED SCENES</h4>
{% else %}
    <div class=\"row\">
    {% for proposed in pagination %}


        {% if loop.index is divisible by(3) %}
        <div class=\"col-md-4 feeds\">
            <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

                <div class=\"entry-c\">
                    <div class=\"entry-title\" style=\"font-family: Courier; word-spacing: 4px\">
                        <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> {{ proposed.title }}</a><a href=\"\"> {{ proposed.title }}</a> {% if proposed.publishedBy == app.user %}   <a href=\"{{ path('ns_web_scenes_edit', { 'id': proposed.id }) }}\" class=\" \"><i class=\"fa fa-pencil\"></i> </a>{% endif %}</h4>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-user\"></i>Created by {{ proposed.publishedBy.firstname }} {{ proposed.publishedBy.lastname }} {{ proposed.createdAt | date('d M Y  h:i:s') }}</li>
                    </ul>
                    <div class=\"entry-content\">
                        {{ proposed.content  | striptags | raw | slice(0, 100)}}
                        <br> <a href=\"{{ path('ns_web_proposed_scenes_view', { 'id': proposed.id }) }}\" class=\"more-link\">Read scene</a>
                    </div>
                </div>
            </div>

        </div>
            <div class=\"line\"></div>
            </div>
         <div class=\"row\">

    {% else  %}
<div class=\"col-md-4 feeds\">
    <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

        <div class=\"entry-c\">
            <div class=\"entry-title\">
                <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> {{ proposed.title }} </a>  {% if proposed.publishedBy == app.user %}<a href=\"{{ path('ns_web_scenes_edit', { 'id': proposed.id }) }}\" class=\" \"><i class=\"fa fa-pencil\"></i> </a>{% endif %} </h4>
            </div>
            <ul class=\"entry-meta clearfix\">
                <li><i class=\"icon-user\"></i>Created by {{ proposed.publishedBy.firstname }} {{ proposed.publishedBy.lastname }} {{ proposed.createdAt | date('d M Y  h:i:s') }}</li>
            </ul>
            <div class=\"entry-content\">
                {{ proposed.content  | striptags | raw | slice(0, 100) }}
                <br> <a href=\"{{ path('ns_web_proposed_scenes_view', { 'id': proposed.id }) }}\" class=\"more-link\">Read scene</a>
            </div>
        </div>
    </div>
</div>


    {% endif %}


    {% endfor %}

    </div>

{% endif %}

<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"myModalLabel\">Modal Heading</h4>
                <button type=\"button\" class=\"btn-close btn-sm\" data-bs-dismiss=\"modal\" aria-hidden=\"true\"></button>
            </div>
            <div class=\"modal-body\">
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

                <h4>Popover in a modal</h4>
                <p>This <a href=\"#\" role=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"popover\" title=\"\" data-bs-content=\"And here's some amazing content. It's very engaging. right?\" data-original-title=\"A Title\">button</a> should trigger a popover on click.</p>

                <h4>Tooltips in a modal</h4>
                <p><a href=\"#\" data-bs-toggle=\"tooltip\" title=\"\" data-original-title=\"Tooltip\">This link</a> and <a href=\"#\" data-bs-toggle=\"tooltip\" title=\"\" data-original-title=\"Tooltip\">that link</a> should have tooltips on hover.</p>
                <hr>
                <h4>Overflowing text to show scroll behavior</h4>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p class=\"mb-0\">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div>
", "scenes/ProposedScene.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\scenes\\ProposedScene.html.twig");
    }
}
