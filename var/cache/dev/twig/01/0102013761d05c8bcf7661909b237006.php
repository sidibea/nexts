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

/* scenes/add.html.twig */
class __TwigTemplate_db9dc97ddaf5dcacd54b3187251692f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scenes/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scenes/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Add new scene ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <h3 class=\"title\">Add new scene </h3>
            <div class=\"postcontent nobottommargin clearfix\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

                ";
        // line 13
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
        echo "
                <div class=\"row\">
                    ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) {
            // line 16
            echo "
                        ";
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 19
                echo "                            ";
                // line 20
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 21
                    echo "                                <div class=\"alert alert-warning\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 21), "html", null, true);
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
                    ";
        }
        // line 26
        echo "                </div>
                <div class=\"row\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Scene</label>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
                    </div>

                    <div class=\" line\"></div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                    </div>

                </div>


                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'rest');
        echo "
                ";
        // line 48
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scenes/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 48,  154 => 46,  139 => 34,  132 => 30,  126 => 26,  122 => 24,  116 => 23,  107 => 21,  102 => 20,  100 => 19,  95 => 18,  92 => 16,  90 => 15,  84 => 13,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Add new scene {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <h3 class=\"title\">Add new scene </h3>
            <div class=\"postcontent nobottommargin clearfix\">
                {{ form_start(form) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"row\">
                    {% if not form.vars.valid %}

                        {# Loop through every form item #}
                        {% for child in form.children %}
                            {# Display the errors of the form item #}
                            {%for error in child.vars.errors%}
                                <div class=\"alert alert-warning\">{{error.message}}</div>
                            {%endfor%}
                        {%endfor%}

                    {%endif%}
                </div>
                <div class=\"row\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        {{ form_widget(form.title, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Scene</label>
                        {{ form_widget(form.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                    </div>

                    <div class=\" line\"></div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                    </div>

                </div>


                {{ form_rest(form) }}
                {# Fermeture de la balise <form> du formulaire HTML #}
                {{ form_end(form) }}

            </div>
        </div>
    </section>

{% endblock %}

", "scenes/add.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\scenes\\add.html.twig");
    }
}
