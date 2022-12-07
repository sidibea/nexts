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

/* user/register.html.twig */
class __TwigTemplate_cfcc6055433758c00bcfcfdd75e522e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
            <h2>Create a new account</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">register</li>
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
        <div style=\"width: 100%\" class=\"postcontent nobottommargin clearfix\">

            <div class=\"row\">
                <div class=\"col-md-4 nobottommargin\">
                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">1.</i></a>
                        </div>
                        <h3>Regular User.</h3>
                        <p>Regular Users can only read the stories in any Forum but cannot write in them. This is good for Users who do not want to write on the site.</p>
                    </div>
                </div>
                <div class=\"col-md-4 nobottommargin\">
                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">2.</i></a>
                        </div>
                        <h3>Power User.</h3>
                        <p> You can read, write in any Forum and propose scenes but cannot start a Storyline. This is good for Users who are not yet ready to start a book.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col_last nobottommargin\">
                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">3.</i></a>
                        </div>
                        <h3>Moderator.</h3>
                        <p>You can start a book, read and write in any Forum and propose scenes. This is good for Users ready to write their stories and publish their books.</p>
                    </div>
                </div>
            </div>

            <br>
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["method" => "post", "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
            ";
        // line 50
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "valid", [], "any", false, false, false, 50)) {
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "children", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 54
                echo "                    ";
                // line 55
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 56
                    echo "                        <div class=\"alert alert-warning\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
                    echo "</div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
            ";
        }
        // line 61
        echo "
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"register-form-name\">First name:</label>
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "firstname", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "

                </div>
                <div class=\"col-md-6 col_last\">
                    <label for=\"register-form-name\">Last name:</label>
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "lastname", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "

                </div>
            </div>
            <div class=\"clear\"></div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"register-form-name\">Email Address:</label>
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "

                </div>
                <div class=\"col-md-6 col_last\">
                    <label for=\"register-form-name\">Choose a username:</label>
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "username", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "

                </div>
            </div>
            <div class=\"clear\"></div>



            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"register-form-password\">Choose Password:</label>
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "plainPassword", [], "any", false, false, false, 95), "first", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "
                </div>

                <div class=\"col-md-6 col_last\">
                    <label for=\"register-form-repassword\">Re-enter Password:</label>
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "plainPassword", [], "any", false, false, false, 100), "second", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => ""]]);
        echo "
                </div>
            </div>

            <div class=\"clear\"></div>
            <div class=\"row\">
                <div class=\"col-md-12 \">
                    <label for=\"register-form-repassword\">Choose a subscription:</label>
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "roles", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "", "placeholder" => ""]]);
        echo "
                </div>
            </div>

            <div class=\"clear\"></div>
            <br>

            <div class=\"col_full nobottommargin\">
                <button class=\"button button-3d button-black nomargin\" id=\"register-form-submit\" name=\"register-form-submit\" value=\"register\">Register Now</button>
            </div>

            ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        echo "


        </div>

    </div>
    <div class=\"clear\"></div>
    <br>
    <br>
    <br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 119,  226 => 108,  215 => 100,  207 => 95,  193 => 84,  185 => 79,  173 => 70,  165 => 65,  159 => 61,  155 => 59,  149 => 58,  140 => 56,  135 => 55,  133 => 54,  128 => 53,  125 => 51,  123 => 50,  119 => 49,  83 => 15,  76 => 14,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Create a new account</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">register</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"container clearfix\">
        <div style=\"width: 100%\" class=\"postcontent nobottommargin clearfix\">

            <div class=\"row\">
                <div class=\"col-md-4 nobottommargin\">
                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">1.</i></a>
                        </div>
                        <h3>Regular User.</h3>
                        <p>Regular Users can only read the stories in any Forum but cannot write in them. This is good for Users who do not want to write on the site.</p>
                    </div>
                </div>
                <div class=\"col-md-4 nobottommargin\">
                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">2.</i></a>
                        </div>
                        <h3>Power User.</h3>
                        <p> You can read, write in any Forum and propose scenes but cannot start a Storyline. This is good for Users who are not yet ready to start a book.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col_last nobottommargin\">
                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">3.</i></a>
                        </div>
                        <h3>Moderator.</h3>
                        <p>You can start a book, read and write in any Forum and propose scenes. This is good for Users ready to write their stories and publish their books.</p>
                    </div>
                </div>
            </div>

            <br>
            {{ form_start(form, {'method': 'post', 'attr': {'class': 'fos_user_registration_register'}}) }}
            {% if not form.vars.valid %}

                {# Loop through every form item #}
                {% for child in form.children %}
                    {# Display the errors of the form item #}
                    {%for error in child.vars.errors%}
                        <div class=\"alert alert-warning\">{{error.message}}</div>
                    {%endfor%}
                {%endfor%}

            {%endif%}

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"register-form-name\">First name:</label>
                    {{ form_widget(form.firstname, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}

                </div>
                <div class=\"col-md-6 col_last\">
                    <label for=\"register-form-name\">Last name:</label>
                    {{ form_widget(form.lastname, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}

                </div>
            </div>
            <div class=\"clear\"></div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"register-form-name\">Email Address:</label>
                    {{ form_widget(form.email, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}

                </div>
                <div class=\"col-md-6 col_last\">
                    <label for=\"register-form-name\">Choose a username:</label>
                    {{ form_widget(form.username, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}

                </div>
            </div>
            <div class=\"clear\"></div>



            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"register-form-password\">Choose Password:</label>
                    {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}
                </div>

                <div class=\"col-md-6 col_last\">
                    <label for=\"register-form-repassword\">Re-enter Password:</label>
                    {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control ', 'placeholder': '' }}) }}
                </div>
            </div>

            <div class=\"clear\"></div>
            <div class=\"row\">
                <div class=\"col-md-12 \">
                    <label for=\"register-form-repassword\">Choose a subscription:</label>
                    {{ form_widget(form.roles, {'attr': {'class': '', 'placeholder': '' }}) }}
                </div>
            </div>

            <div class=\"clear\"></div>
            <br>

            <div class=\"col_full nobottommargin\">
                <button class=\"button button-3d button-black nomargin\" id=\"register-form-submit\" name=\"register-form-submit\" value=\"register\">Register Now</button>
            </div>

            {{ form_end(form) }}


        </div>

    </div>
    <div class=\"clear\"></div>
    <br>
    <br>
    <br>

{% endblock %}
", "user/register.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\user\\register.html.twig");
    }
}
