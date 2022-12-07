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

/* includes/forum-slider.html.twig */
class __TwigTemplate_df5b125c6e704cee704a256965cae7e7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/forum-slider.html.twig"));

        // line 1
        echo "<!--SECTION CONTENT END-->
<ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 3, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 4
            echo "        <li role=\"presentation\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 4) == 1)) {
                echo "active";
            }
            echo "\"><a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo "</a></li>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
</ul>

<!-- Tab panes -->
<div class=\"tab-content\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 12, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 13
            echo "        <div role=\"tabpanel\" class=\"tab-pane  ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13) == 1)) {
                echo "active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
            <ul class=\"bxslider-4\">
                <li>
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["f"], "storylines", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
                // line 17
                echo "                        <!--PRODUCT GRID START-->
                        <div class=\"col-md-3 col-sm-6 best-seller-pro\">
                            <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">
                                <div class=\"book-container\">
                                    <div class=\"book\">
                                        <div class=\"book-cover\">
                                            <h1>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "</h1>
                                            <h2>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", [], "any", false, false, false, 24), "lastname", [], "any", false, false, false, 24), "html", null, true);
                echo " </h2>
                                            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.png"), "html", null, true);
                echo "\" />
                                        </div>
                                        <div class=\"book-spine\">
                                            <h1>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", [], "any", false, false, false, 28), "html", null, true);
                echo "</h1>
                                        </div>
                                    </div>
                                </div>

                            </a>
                            <div class=\"kode-caption\">
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"add-to-cart\">View</a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
                    <!--PRODUCT GRID END-->
                </li>

            </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/forum-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 49,  174 => 42,  164 => 38,  151 => 28,  145 => 25,  139 => 24,  135 => 23,  128 => 19,  124 => 17,  120 => 16,  109 => 13,  92 => 12,  85 => 7,  61 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--SECTION CONTENT END-->
<ul class=\"nav nav-tabs\" role=\"tablist\">
    {% for f in forums %}
        <li role=\"presentation\" class=\"{% if loop.index == 1 %}active{% endif %}\"><a href=\"#{{ f.id }}\" role=\"tab\" data-toggle=\"tab\">{{ f.name }}</a></li>

    {% endfor %}

</ul>

<!-- Tab panes -->
<div class=\"tab-content\">
    {% for f in forums %}
        <div role=\"tabpanel\" class=\"tab-pane  {% if loop.index == 1 %}active{% endif %}\" id=\"{{ f.id }}\">
            <ul class=\"bxslider-4\">
                <li>
                    {% for story in f.storylines %}
                        <!--PRODUCT GRID START-->
                        <div class=\"col-md-3 col-sm-6 best-seller-pro\">
                            <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\">
                                <div class=\"book-container\">
                                    <div class=\"book\">
                                        <div class=\"book-cover\">
                                            <h1>{{ story.title }}</h1>
                                            <h2>{{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }} </h2>
                                            <img src=\"{{ asset('images/2.png') }}\" />
                                        </div>
                                        <div class=\"book-spine\">
                                            <h1>{{ story.title }}</h1>
                                        </div>
                                    </div>
                                </div>

                            </a>
                            <div class=\"kode-caption\">
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" class=\"add-to-cart\">View</a>
                            </div>
                        </div>
                    {% endfor %}

                    <!--PRODUCT GRID END-->
                </li>

            </ul>
        </div>
    {% endfor %}
</div>
", "includes/forum-slider.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\includes\\forum-slider.html.twig");
    }
}
