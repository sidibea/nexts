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

/* security/login.html.twig */
class __TwigTemplate_ddc4bfe268512efc3a772a1fc93f78c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Login to your account</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Login</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\">
            ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                <div class=\"style-msg errormsg\">
                    <div class=\"sb-msg\"><i class=\"icon-remove\"></i><strong>Oh snap!</strong> ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            echo "</div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                </div>
                <div>
            ";
        }
        // line 26
        echo "

            <div class=\"panel panel-primary divcenter noradius noborder\" style=\" background-color: rgba(255,255,255,0.93);\">
                <div class=\"panel-body\" style=\"padding: 40px;\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'errors');
        echo "

                    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                        <h3>Login to your Account</h3>

                        <div class=\"col-md-12\">
                            <label for=\"login-form-username\">Username</label>
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "_username", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                        <div class=\"col-md-12\">
                            <label for=\"login-form-password\">Password</label>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "_password", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-md-6 nobottommargin\">

                           <br> ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "save", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "button button-3d button-black nomargin"]]);
        echo "

                        </div>
                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

                    <div class=\"col-md-6\">
                        <br>
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nucleos_user_resetting_request");
        echo "\" class=\"fright\">Forgot Password?</a><br>

                        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
        echo "\" class=\"\">Don't have account yet ? Register now</a>
                    </div>

                    <div class=\"line line-sm\"></div>
                    <div class=\"center\">
                        <h4 style=\"margin-bottom: 15px;\">or Login with:</h4>
                        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_facebook_start");
        echo "\" class=\"button button-rounded si-facebook si-colored\">Facebook</a>
                        <span class=\"d-none d-md-inline-block\">or</span>
                        <a href=\"#\" class=\"button button-rounded si-twitter si-colored\">Twitter</a>
                    </div>

                </div>
            </div>


        </div><!-- .postcontent end -->


</div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  153 => 55,  148 => 53,  141 => 49,  135 => 46,  128 => 42,  120 => 37,  112 => 32,  107 => 30,  101 => 26,  93 => 21,  90 => 20,  88 => 19,  83 => 16,  76 => 15,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block slider %}
    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Login to your account</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Login</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}

    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\">
            {% if error %}
                <div class=\"style-msg errormsg\">
                    <div class=\"sb-msg\"><i class=\"icon-remove\"></i><strong>Oh snap!</strong> {{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                </div>
                <div>
            {% endif %}


            <div class=\"panel panel-primary divcenter noradius noborder\" style=\" background-color: rgba(255,255,255,0.93);\">
                <div class=\"panel-body\" style=\"padding: 40px;\">
                    {{ form_errors(form) }}

                    {{ form_start(form) }}
                        <h3>Login to your Account</h3>

                        <div class=\"col-md-12\">
                            <label for=\"login-form-username\">Username</label>
                            {{ form_widget(form._username, {'attr': { 'class':'form-control' }}) }}
                        </div>

                        <div class=\"col-md-12\">
                            <label for=\"login-form-password\">Password</label>
                            {{ form_widget(form._password, {'attr': { 'class':'form-control' }}) }}
                        </div>
                        <div class=\"col-md-6 nobottommargin\">

                           <br> {{ form_widget(form.save, {'attr': { 'class':'button button-3d button-black nomargin' }}) }}

                        </div>
                    {{ form_end(form) }}

                    <div class=\"col-md-6\">
                        <br>
                        <a href=\"{{ path('nucleos_user_resetting_request') }}\" class=\"fright\">Forgot Password?</a><br>

                        <a href=\"{{ path('app_registration') }}\" class=\"\">Don't have account yet ? Register now</a>
                    </div>

                    <div class=\"line line-sm\"></div>
                    <div class=\"center\">
                        <h4 style=\"margin-bottom: 15px;\">or Login with:</h4>
                        <a href=\"{{ path('connect_facebook_start') }}\" class=\"button button-rounded si-facebook si-colored\">Facebook</a>
                        <span class=\"d-none d-md-inline-block\">or</span>
                        <a href=\"#\" class=\"button button-rounded si-twitter si-colored\">Twitter</a>
                    </div>

                </div>
            </div>


        </div><!-- .postcontent end -->


</div>
    </div>

{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\security\\login.html.twig");
    }
}
