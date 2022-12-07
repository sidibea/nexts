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

/* story/index.html.twig */
class __TwigTemplate_a0aac9ce904febdbb506e6192a9523cb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "story/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "story/index.html.twig", 1);
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
            <h2>Create new storyline</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li class=\"active\">Create new storyline</li>
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
        <div class=\"postcontent nobottommargin clearfix\">

            <div class=\"row\">
                <div class=\"col-md-12 nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">1.</i></a>
                        </div>
                        <h3>Step 1: Enter the information about your storyline.</h3>
                    </div>

                </div>
            </div>
            <div class=\"line \"></div>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "

            ";
        // line 34
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'errors');
        echo "
            <div class=\"row\">
                ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "valid", [], "any", false, false, false, 36)) {
            // line 37
            echo "
                    ";
            // line 39
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "children", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 40
                echo "                        ";
                // line 41
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 42
                    echo "                            <div class=\"alert alert-warning\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
                    echo "</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
                ";
        }
        // line 47
        echo "            </div>
            <div class=\"row notopmargin\">
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Forum - <span style=\"font-size: 12px; text-transform: lowercase\">The genre of your storyline</span></label>
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "forum", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Mode of writing - <span style=\"font-size: 12px; text-transform: lowercase\">Audience or non audience participation</span></label>
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control select-1 storyType", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group form-group1 contributors\">
                    <label for=\"nom_carte\">Contributors</label>
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "contributors", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control  select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Title</label>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "title", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control ", "id" => "nom_carte", "placeholder" => ""]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Description - <span style=\"font-size: 12px; text-transform: lowercase\">Synopsis of your storyline</span></label>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control ", "id" => "nom_carte", "rows" => "10"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Cover</label>
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "imageFile", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "file ", "id" => "nom_carte", "rows" => "10"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    <label for=\"nom_carte\">Active</label>
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "isEnabled", [], "any", false, false, false, 76), 'widget', ["attr" => ["checked" => "checked", "data-on-text" => "YES", "data-off-text" => "NO", "class" => "form-control bt-switch", "id" => "nom_carte", "rows" => "10"]]);
        echo "
                </div>


                <div class=\" line\"></div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                </div>

            </div>


            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'rest');
        echo "

            ";
        // line 92
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        echo "

        </div>
        ";
        // line 95
        $this->loadTemplate("_sidebar.html.twig", "story/index.html.twig", 95)->display($context);
        // line 96
        echo "
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 103
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){

            \$('.form-group1').hide();
            \$('#storyline_type').change(function(){
                if(\$('#storyline_type').val() == 'Group writing') {
                    \$('.form-group1').show();

                } else {
                    \$('.form-group1').hide();
                }
            });

            // Multiple Select
            \$(\".select-1\").select2({
                placeholder: \"Select Contributors\"
            });
            jQuery(\".bt-switch\").bootstrapSwitch();






        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "story/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 103,  242 => 102,  231 => 96,  229 => 95,  222 => 92,  217 => 89,  201 => 76,  193 => 71,  186 => 67,  179 => 63,  172 => 59,  165 => 55,  158 => 51,  152 => 47,  148 => 45,  142 => 44,  133 => 42,  128 => 41,  126 => 40,  121 => 39,  118 => 37,  116 => 36,  110 => 34,  105 => 31,  87 => 15,  80 => 14,  67 => 7,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Create new storyline</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li class=\"active\">Create new storyline</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\">

            <div class=\"row\">
                <div class=\"col-md-12 nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">1.</i></a>
                        </div>
                        <h3>Step 1: Enter the information about your storyline.</h3>
                    </div>

                </div>
            </div>
            <div class=\"line \"></div>
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
            <div class=\"row notopmargin\">
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Forum - <span style=\"font-size: 12px; text-transform: lowercase\">The genre of your storyline</span></label>
                    {{ form_widget(form.forum, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Mode of writing - <span style=\"font-size: 12px; text-transform: lowercase\">Audience or non audience participation</span></label>
                    {{ form_widget(form.type, {'attr': {'class': 'form-control select-1 storyType', 'id': 'nom_carte', 'placeholder': '' }}) }}
                </div>
                <div class=\"form-group form-group1 contributors\">
                    <label for=\"nom_carte\">Contributors</label>
                    {{ form_widget(form.contributors, {'attr': {'class': 'form-control  select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Title</label>
                    {{ form_widget(form.title, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Description - <span style=\"font-size: 12px; text-transform: lowercase\">Synopsis of your storyline</span></label>
                    {{ form_widget(form.description, {'attr': {  'class': 'form-control ', 'id': 'nom_carte', 'rows': '10' }}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"nom_carte\">Cover</label>
                    {{ form_widget(form.imageFile, {'attr': { 'class': 'file ', 'id': 'nom_carte', 'rows': '10' }}) }}
                </div>

                <div class=\"form-group\">
                    <label for=\"nom_carte\">Active</label>
                    {{ form_widget(form.isEnabled, {'attr': { 'checked':'checked', 'data-on-text': 'YES', 'data-off-text': 'NO','class': 'form-control bt-switch', 'id': 'nom_carte', 'rows': '10' }}) }}
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
        {% include '_sidebar.html.twig' %}

    </div>


{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){

            \$('.form-group1').hide();
            \$('#storyline_type').change(function(){
                if(\$('#storyline_type').val() == 'Group writing') {
                    \$('.form-group1').show();

                } else {
                    \$('.form-group1').hide();
                }
            });

            // Multiple Select
            \$(\".select-1\").select2({
                placeholder: \"Select Contributors\"
            });
            jQuery(\".bt-switch\").bootstrapSwitch();






        });
    </script>

{% endblock %}
", "story/index.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\story\\index.html.twig");
    }
}
