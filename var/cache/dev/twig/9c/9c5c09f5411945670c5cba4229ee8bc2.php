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

/* Admin/dashboard.html.twig */
class __TwigTemplate_259ccdef211aadcbf7e3e56d145fee32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("Admin/layout.html.twig", "Admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-sm-12 mb-4\">
        <div class=\"card-group\">
            <div class=\"card col-lg-3 col-md-6 no-padding bg-flat-color-1\">
                <div class=\"card-body\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-users text-light\"></i>
                    </div>

                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Users</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-2\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-book text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["storyline"]) || array_key_exists("storyline", $context) ? $context["storyline"] : (function () { throw new RuntimeError('Variable "storyline" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Storylines</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-3\">
                    <div class=\"h1 text-right mb-4\">
                        <i class=\"fa fa-pencil text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["scenes"]) || array_key_exists("scenes", $context) ? $context["scenes"] : (function () { throw new RuntimeError('Variable "scenes" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-5\">
                    <div class=\"h1 text-right text-light mb-4\">
                        <i class=\"fa fa-pencil-square\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new RuntimeError('Variable "proposed" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Proposed Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-4\">
                    <div class=\"h1 text-light text-right mb-4\">
                        <i class=\"fa fa-clock-o\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Articles</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4>STATS</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"custom-tab\">

                        <nav>
                            <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                <a class=\"nav-item nav-link active \" id=\"custom-nav-home-tab\" data-toggle=\"tab\" href=\"#custom-nav-home\" role=\"tab\" aria-controls=\"custom-nav-home\" aria-selected=\"true\">Storylines</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-profile-tab\" data-toggle=\"tab\" href=\"#custom-nav-profile\" role=\"tab\" aria-controls=\"custom-nav-profile\" aria-selected=\"false\">Scenes</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-contact-tab\" data-toggle=\"tab\" href=\"#custom-nav-contact\" role=\"tab\" aria-controls=\"custom-nav-contact\" aria-selected=\"false\">Proposed Scenes</a>
                            </div>
                        </nav>
                        <div class=\"tab-content pl-3 pt-2\" id=\"nav-tabContent\">
                            <div class=\"tab-pane fade active show\" id=\"custom-nav-home\" role=\"tabpanel\" aria-labelledby=\"custom-nav-home-tab\">
                                <div class=\"chart tab-pane active\" id=\"storyline-chart\" style=\"position: relative; height: 300px;\"></div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-profile\" role=\"tabpanel\" aria-labelledby=\"custom-nav-profile-tab\">
                                <div class=\"chart tab-pane active\" id=\"scene-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-contact\" role=\"tabpanel\" aria-labelledby=\"custom-nav-contact-tab\">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 106
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 107
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){
            'use strict';
            /* Morris.js Charts */
            // Sales chart
            var area = new Morris.Area({
                element   : 'storyline-chart',
                resize    : true,
                data      : [
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["storyChart"]) || array_key_exists("storyChart", $context) ? $context["storyChart"] : (function () { throw new RuntimeError('Variable "storyChart" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 117
            echo "                    { y: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "date", [], "any", false, false, false, 117), "html", null, true);
            echo "', storyline: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nbre", [], "any", false, false, false, 117), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['storyline' ],
                labels    : ['Storyline'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

            var line = new Morris.Line({
                element   : 'scene-chart',
                resize    : true,
                data      : [
                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sceneChart"]) || array_key_exists("sceneChart", $context) ? $context["sceneChart"] : (function () { throw new RuntimeError('Variable "sceneChart" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 134
            echo "                    { y: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "date", [], "any", false, false, false, 134), "html", null, true);
            echo "', scene: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nbre", [], "any", false, false, false, 134), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['scene' ],
                labels    : ['Scenes'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 137,  235 => 134,  231 => 133,  216 => 120,  204 => 117,  200 => 116,  189 => 107,  182 => 106,  131 => 61,  116 => 49,  101 => 37,  86 => 25,  71 => 13,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/layout.html.twig' %}

{% block content %}
    <div class=\"col-sm-12 mb-4\">
        <div class=\"card-group\">
            <div class=\"card col-lg-3 col-md-6 no-padding bg-flat-color-1\">
                <div class=\"card-body\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-users text-light\"></i>
                    </div>

                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ users }}</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Users</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-2\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-book text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ storyline }}</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Storylines</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-3\">
                    <div class=\"h1 text-right mb-4\">
                        <i class=\"fa fa-pencil text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ scenes }}</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-5\">
                    <div class=\"h1 text-right text-light mb-4\">
                        <i class=\"fa fa-pencil-square\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ proposed }}</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Proposed Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-4\">
                    <div class=\"h1 text-light text-right mb-4\">
                        <i class=\"fa fa-clock-o\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ articles }}</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Articles</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4>STATS</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"custom-tab\">

                        <nav>
                            <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                <a class=\"nav-item nav-link active \" id=\"custom-nav-home-tab\" data-toggle=\"tab\" href=\"#custom-nav-home\" role=\"tab\" aria-controls=\"custom-nav-home\" aria-selected=\"true\">Storylines</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-profile-tab\" data-toggle=\"tab\" href=\"#custom-nav-profile\" role=\"tab\" aria-controls=\"custom-nav-profile\" aria-selected=\"false\">Scenes</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-contact-tab\" data-toggle=\"tab\" href=\"#custom-nav-contact\" role=\"tab\" aria-controls=\"custom-nav-contact\" aria-selected=\"false\">Proposed Scenes</a>
                            </div>
                        </nav>
                        <div class=\"tab-content pl-3 pt-2\" id=\"nav-tabContent\">
                            <div class=\"tab-pane fade active show\" id=\"custom-nav-home\" role=\"tabpanel\" aria-labelledby=\"custom-nav-home-tab\">
                                <div class=\"chart tab-pane active\" id=\"storyline-chart\" style=\"position: relative; height: 300px;\"></div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-profile\" role=\"tabpanel\" aria-labelledby=\"custom-nav-profile-tab\">
                                <div class=\"chart tab-pane active\" id=\"scene-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-contact\" role=\"tabpanel\" aria-labelledby=\"custom-nav-contact-tab\">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){
            'use strict';
            /* Morris.js Charts */
            // Sales chart
            var area = new Morris.Area({
                element   : 'storyline-chart',
                resize    : true,
                data      : [
                    {% for key, val in storyChart %}
                    { y: '{{ val.date }}', storyline: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['storyline' ],
                labels    : ['Storyline'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

            var line = new Morris.Line({
                element   : 'scene-chart',
                resize    : true,
                data      : [
                    {% for key, val in sceneChart %}
                    { y: '{{ val.date }}', scene: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['scene' ],
                labels    : ['Scenes'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

        });
    </script>
{% endblock %}", "Admin/dashboard.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\Admin\\dashboard.html.twig");
    }
}
