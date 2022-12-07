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

/* story/firstscene.html.twig */
class __TwigTemplate_5c0c0896d99ca4c43ba9799e3a6e461a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "story/firstscene.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "story/firstscene.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Create your  first scene ";
        
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
            <h3 class=\"title\">Add your first scene </h3>
            <div class=\"postcontent nobottommargin clearfix\">

                <div class=\"col_full nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">2.</i></a>
                        </div>
                        <h3>Step 2: Create your first scene here.</h3>
                        <p>Start writing your book here</p>
                    </div>

                </div>
                <div class=\"line \"></div>

                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "

                ";
        // line 27
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => "Write the title of the first scene "]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Scene</label>
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "content", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => "Write your first scene here"]]);
        echo "
                    </div>


                    <div class=\" line\"></div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                    </div>

                </div>


                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'rest');
        echo "

                ";
        // line 51
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "story/firstscene.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 51,  129 => 48,  113 => 35,  106 => 31,  98 => 27,  93 => 24,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Create your  first scene {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <h3 class=\"title\">Add your first scene </h3>
            <div class=\"postcontent nobottommargin clearfix\">

                <div class=\"col_full nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">2.</i></a>
                        </div>
                        <h3>Step 2: Create your first scene here.</h3>
                        <p>Start writing your book here</p>
                    </div>

                </div>
                <div class=\"line \"></div>

                {{ form_start(form) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"row\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        {{ form_widget(form.title, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': 'Write the title of the first scene ' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Scene</label>
                        {{ form_widget(form.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': 'Write your first scene here' }}) }}
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

", "story/firstscene.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\story\\firstscene.html.twig");
    }
}
