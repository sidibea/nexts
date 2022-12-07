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

/* podcast/new.html.twig */
class __TwigTemplate_afd4cace91efc069d958416f9d8ce266 extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "podcast/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "podcast/new.html.twig", 1);
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
            <h2>Publish your podcast</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li class=\"active\">Podcasts</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <div class=\"container clearfix\">
        <div class=\"row\">
            <div class=\"postcontent  nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Title</label>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Forum</label>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "forum", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Description</label>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Fichier audio</label>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "fichierFile", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control ", "accept" => ".mp3"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Cover</label>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "imageFile", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control ", "accept" => ".jpg,.jpeg,.png,.gif"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Active</label>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "isEnabled", [], "any", false, false, false, 41), 'widget', ["attr" => ["checked" => "checked", "data-on-text" => "YES", "data-off-text" => "NO", "class" => "form-control bt-switch", "id" => "nom_carte", "rows" => "10"]]);
        echo "

                </div>
                <div class=\" line\"></div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                </div>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'rest');
        echo "
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "

            </div>
            ";
        // line 53
        $this->loadTemplate("_sidebar.html.twig", "podcast/new.html.twig", 53)->display($context);
        // line 54
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 60
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){




            jQuery(\".bt-switch\").bootstrapSwitch();






        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "podcast/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  166 => 59,  156 => 54,  154 => 53,  148 => 50,  144 => 49,  133 => 41,  126 => 37,  119 => 33,  112 => 29,  105 => 25,  98 => 21,  92 => 18,  87 => 15,  80 => 14,  67 => 7,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Publish your podcast</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li class=\"active\">Podcasts</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"container clearfix\">
        <div class=\"row\">
            <div class=\"postcontent  nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                {{ form_start(form) }}
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Title</label>
                    {{ form_widget(form.title, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Forum</label>
                    {{ form_widget(form.forum, {'attr': {'class': 'form-control ','placeholder': '' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Description</label>
                    {{ form_widget(form.description, {'attr': {'class': 'form-control ',  'placeholder': '' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Fichier audio</label>
                    {{ form_widget(form.fichierFile, {'attr': {'class': 'form-control ',  'accept': '.mp3' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Cover</label>
                    {{ form_widget(form.imageFile, {'attr': {'class': 'form-control ',  'accept': '.jpg,.jpeg,.png,.gif' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Active</label>
                    {{ form_widget(form.isEnabled, {'attr': { 'checked':'checked', 'data-on-text': 'YES', 'data-off-text': 'NO','class': 'form-control bt-switch', 'id': 'nom_carte', 'rows': '10' }}) }}

                </div>
                <div class=\" line\"></div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                </div>
                {{ form_rest(form) }}
                {{ form_end(form) }}

            </div>
            {% include '_sidebar.html.twig' %}

        </div>
    </div>
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){




            jQuery(\".bt-switch\").bootstrapSwitch();






        });
    </script>

{% endblock %}
", "podcast/new.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\podcast\\new.html.twig");
    }
}
