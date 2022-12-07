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

/* base.html.twig */
class __TwigTemplate_314c4926219138d0ddf5c9d45dceb2bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'slider' => [$this, 'block_slider'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 19:05:22 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nextscenes.com</title>
    <!-- CUSTOM STYLE -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- THEME TYPO -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themetypo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- BOOTSTRAP -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- COLOR FILE -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- FONT AWESOME -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- BX SLIDER -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Boostrap Slider -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Widgets -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/widget.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Owl Carusel -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- responsive -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Component -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dl-menu/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bookblock.css"), "html", null, true);
        echo "\" />
    ";
        // line 35
        $this->displayBlock('styles', $context, $blocks);
        // line 36
        echo "
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style>
        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border: 3px solid #1ABC9C;
            border-right: none;
            padding: 5px;
            height: 40px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .searchTerm:focus{
            color: #00B4CC;
        }

        .searchButton {
            width: 40px;
            height: 40px;
            border: 1px solid #1ABC9C;
            background: #1ABC9C;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }


    </style>
</head>
<body>
<div id=\"loader-wrapper\">
    <div id=\"loader\"></div>

    <div class=\"loader-section section-left\"></div>
    <div class=\"loader-section section-right\"></div>

</div>
<!--WRAPPER START-->
<div class=\"wrapper kode-header-class-3\">
    <!--HEADER START-->
    <header class=\"header-3\">
        <div class=\"logo-container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <!--LOGO START-->
                    <div class=\"logo\">
                        <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                    <!--LOGO END-->
                </div>
                <div class=\"col-md-9\">
                    <div class=\"top-strip\">
                        <div class=\"pull-left\">
                            ";
        // line 104
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 105
            echo "                                <div class=\"top-links\">
                                    <ul>
                                        <li >
                                            <a style=\"color: #0b2e13;\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><br>WELCOME ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "firstname", [], "any", false, false, false, 108), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "lastname", [], "any", false, false, false, 108), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"\">Messages</a></li>
                                                <li><a href=\"";
            // line 111
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profile");
            echo "\">Edit my profile</a></li>
                                                <li><a href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nucleos_user_change_password");
            echo "\">Change password</a></li>
                                                <li><a href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nucleos_user_security_logout");
            echo "\">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
        } else {
            // line 119
            echo "                                <ul class=\"my-account\">
                                    <li ><a style=\"color: #1ABC9C; font-weight: bold\" href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\"><i class=\"fa fa-user\"></i> Register</a></li>
                                    <li><a style=\"color: #1ABC9C; font-weight: bold\" href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nucleos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
                                </ul>
                            ";
        }
        // line 124
        echo "

                        </div>
                        <div class=\"social-icon\">
                            <a href=\"mailto:info@library-theme.com\" class=\"pull-left\">info@mynextscenes.com</a>
                            <ul>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-facebook\"></i></a></li>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-twitter\"></i></a></li>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-google-plus\"></i></a></li>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"kode-navigation\">
                        <ul>
                            <li><a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>

                            <li><a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums_display");
        echo "\">Forums</a>
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\MainController::forumMenu"));
        // line 143
        echo "
                            </li>
                            <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_story_create");
        echo "\">Create a new story</a></li>
                            <li><a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_podcasts");
        echo "\">Podcasts</a></li>
                            <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_how_it_works");
        echo "\">How nextscenes works </a></li>
                            <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_how_it_works");
        echo "\">Shop </a></li>
                            <li class=\"last\"><a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_contact");
        echo "\">Contact Us</a></li>


                        </ul>
                    </div>
                    <div id=\"kode-responsive-navigation\" class=\"dl-menuwrapper\">
                        <button class=\"dl-trigger\">Open Menu</button>
                        <ul class=\"dl-menu\">
                            <li class=\"menu-item kode-parent-menu\"><a href=\"\">Home</a></li>
                            <li class=\"menu-item kode-parent-menu\"><a href=\"\">Forums</a>
                                <ul class=\"dl-submenu\">
                                    <li><a href=\"\">Drama</a></li>
                                    <li><a href=\"\">Romance</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item kode-parent-menu last\"><a href=\"\">Create a new story</a></li>

                            <li class=\"menu-item kode-parent-menu\"><a href=\"\">How nextscenes works ?</a></li>
                            <li class=\"menu-item kode-parent-menu last\"><a href=\"\">Shop</a></li>
                            <li class=\"last\"><a href=\"\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--HEADER END-->
   ";
        // line 177
        $this->displayBlock('slider', $context, $blocks);
        // line 178
        echo "    <!--BANNER END-->

    <!--CONTENT START-->
    <div class=\"kode-content\">

        ";
        // line 183
        $this->displayBlock('content', $context, $blocks);
        // line 184
        echo "    </div>
    <!--CONTENT END-->
    <footer class=\"footer-2\">
        <div class=\"container\">
            <div class=\"lib-copyrights\">
                <p>Copyrights © 2022 Nextscenes®. All rights reserved. Nextscenes® is a registered Trademark</p>
                <div style=\"color: #fff\" class=\"copyright-links social-icon\"><a style=\"color: #fff\" href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_terms_of_use");
        echo "\">Terms of Use</a> / <a style=\"color: #fff\"  href=\"#\">Privacy Policy</a></div>

            </div>
            <div class=\"back-to-top\">
                <a href=\"#home\"><i class=\"fa fa-angle-up\"></i></a>
            </div>
        </div>
    </footer>
</div>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dl-menu/jquery.dlmenu.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/hash.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/booklet-lib.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquerypp.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.bookblock.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
</body>
";
        // line 216
        $this->displayBlock('scripts', $context, $blocks);
        // line 217
        echo "<!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 19:11:43 GMT -->
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 177
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 183
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 216
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 216,  447 => 183,  434 => 177,  421 => 35,  412 => 217,  410 => 216,  405 => 214,  400 => 212,  396 => 211,  392 => 210,  388 => 209,  384 => 208,  380 => 207,  376 => 206,  372 => 205,  368 => 204,  364 => 203,  360 => 202,  356 => 201,  351 => 199,  339 => 190,  331 => 184,  329 => 183,  322 => 178,  320 => 177,  289 => 149,  285 => 148,  281 => 147,  277 => 146,  273 => 145,  269 => 143,  267 => 142,  263 => 141,  258 => 139,  241 => 124,  235 => 121,  231 => 120,  228 => 119,  219 => 113,  215 => 112,  211 => 111,  203 => 108,  198 => 105,  196 => 104,  184 => 97,  121 => 36,  119 => 35,  115 => 34,  111 => 33,  106 => 31,  102 => 30,  97 => 28,  92 => 26,  87 => 24,  82 => 22,  77 => 20,  72 => 18,  67 => 16,  62 => 14,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 19:05:22 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nextscenes.com</title>
    <!-- CUSTOM STYLE -->
    <link href=\"{{ asset('style.css') }}\" rel=\"stylesheet\">
    <!-- THEME TYPO -->
    <link href=\"{{ asset('css/themetypo.css') }}\" rel=\"stylesheet\">
    <!-- BOOTSTRAP -->
    <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\">
    <!-- COLOR FILE -->
    <link href=\"{{ asset('css/color.css') }}\" rel=\"stylesheet\">
    <!-- FONT AWESOME -->
    <link href=\"{{ asset('css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- BX SLIDER -->
    <link href=\"{{ asset('css/jquery.bxslider.css') }}\" rel=\"stylesheet\">
    <!-- Boostrap Slider -->
    <link href=\"{{ asset('css/bootstrap-slider.css') }}\" rel=\"stylesheet\">
    <!-- Widgets -->
    <link href=\"{{ asset('css/widget.css') }}\" rel=\"stylesheet\">
    <!-- Owl Carusel -->
    <link href=\"{{ asset('css/owl.carousel.css') }}\" rel=\"stylesheet\">
    <!-- responsive -->
    <link href=\"{{ asset('css/responsive.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <!-- Component -->
    <link href=\"{{ asset('js/dl-menu/component.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bookblock.css') }}\" />
    {% block styles %} {% endblock %}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style>
        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border: 3px solid #1ABC9C;
            border-right: none;
            padding: 5px;
            height: 40px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .searchTerm:focus{
            color: #00B4CC;
        }

        .searchButton {
            width: 40px;
            height: 40px;
            border: 1px solid #1ABC9C;
            background: #1ABC9C;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }


    </style>
</head>
<body>
<div id=\"loader-wrapper\">
    <div id=\"loader\"></div>

    <div class=\"loader-section section-left\"></div>
    <div class=\"loader-section section-right\"></div>

</div>
<!--WRAPPER START-->
<div class=\"wrapper kode-header-class-3\">
    <!--HEADER START-->
    <header class=\"header-3\">
        <div class=\"logo-container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <!--LOGO START-->
                    <div class=\"logo\">
                        <a href=\"{{ path('app_home') }}\"><img src=\"{{ asset('images/logo-2.png') }}\" alt=\"\"></a>
                    </div>
                    <!--LOGO END-->
                </div>
                <div class=\"col-md-9\">
                    <div class=\"top-strip\">
                        <div class=\"pull-left\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <div class=\"top-links\">
                                    <ul>
                                        <li >
                                            <a style=\"color: #0b2e13;\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><br>WELCOME {{ app.user.firstname }} {{ app.user.lastname}} <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"\">Messages</a></li>
                                                <li><a href=\"{{ path('app_edit_profile') }}\">Edit my profile</a></li>
                                                <li><a href=\"{{ path('nucleos_user_change_password') }}\">Change password</a></li>
                                                <li><a href=\"{{ path('nucleos_user_security_logout') }}\">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            {% else %}
                                <ul class=\"my-account\">
                                    <li ><a style=\"color: #1ABC9C; font-weight: bold\" href=\"{{ path('app_registration') }}\"><i class=\"fa fa-user\"></i> Register</a></li>
                                    <li><a style=\"color: #1ABC9C; font-weight: bold\" href=\"{{ path('nucleos_user_security_login')  }}\"><i class=\"fa fa-sign-in\"></i> Login</a></li>
                                </ul>
                            {% endif %}


                        </div>
                        <div class=\"social-icon\">
                            <a href=\"mailto:info@library-theme.com\" class=\"pull-left\">info@mynextscenes.com</a>
                            <ul>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-facebook\"></i></a></li>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-twitter\"></i></a></li>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-google-plus\"></i></a></li>
                                <li><a style=\"color: #1ABC9C;\" href=\"#\"><i style=\"color: #1ABC9C;\" class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"kode-navigation\">
                        <ul>
                            <li><a href=\"{{ path('app_home') }}\">Home</a></li>

                            <li><a href=\"{{ path('ns_web_forums_display') }}\">Forums</a>
                                {{ render(controller(
                                    'App\\\\Controller\\\\MainController::forumMenu')) }}
                            </li>
                            <li><a href=\"{{ path('app_story_create') }}\">Create a new story</a></li>
                            <li><a href=\"{{ path('app_podcasts') }}\">Podcasts</a></li>
                            <li><a href=\"{{ path('ns_web_how_it_works') }}\">How nextscenes works </a></li>
                            <li><a href=\"{{ path('ns_web_how_it_works') }}\">Shop </a></li>
                            <li class=\"last\"><a href=\"{{ path('ns_web_contact') }}\">Contact Us</a></li>


                        </ul>
                    </div>
                    <div id=\"kode-responsive-navigation\" class=\"dl-menuwrapper\">
                        <button class=\"dl-trigger\">Open Menu</button>
                        <ul class=\"dl-menu\">
                            <li class=\"menu-item kode-parent-menu\"><a href=\"\">Home</a></li>
                            <li class=\"menu-item kode-parent-menu\"><a href=\"\">Forums</a>
                                <ul class=\"dl-submenu\">
                                    <li><a href=\"\">Drama</a></li>
                                    <li><a href=\"\">Romance</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item kode-parent-menu last\"><a href=\"\">Create a new story</a></li>

                            <li class=\"menu-item kode-parent-menu\"><a href=\"\">How nextscenes works ?</a></li>
                            <li class=\"menu-item kode-parent-menu last\"><a href=\"\">Shop</a></li>
                            <li class=\"last\"><a href=\"\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--HEADER END-->
   {% block slider %} {% endblock %}
    <!--BANNER END-->

    <!--CONTENT START-->
    <div class=\"kode-content\">

        {% block content %} {% endblock %}
    </div>
    <!--CONTENT END-->
    <footer class=\"footer-2\">
        <div class=\"container\">
            <div class=\"lib-copyrights\">
                <p>Copyrights © 2022 Nextscenes®. All rights reserved. Nextscenes® is a registered Trademark</p>
                <div style=\"color: #fff\" class=\"copyright-links social-icon\"><a style=\"color: #fff\" href=\"{{ path('ns_web_terms_of_use') }}\">Terms of Use</a> / <a style=\"color: #fff\"  href=\"#\">Privacy Policy</a></div>

            </div>
            <div class=\"back-to-top\">
                <a href=\"#home\"><i class=\"fa fa-angle-up\"></i></a>
            </div>
        </div>
    </footer>
</div>
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"{{ asset('js/modernizr.custom.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.bxslider.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-slider.js') }}\"></script>
<script src=\"{{ asset('js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('js/dl-menu/jquery.dlmenu.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('lib/hash.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('lib/booklet-lib.js') }}\"></script>
<script src=\"{{ asset('js/jquerypp.custom.js') }}\"></script>
<script src=\"{{ asset('js/jquery.bookblock.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
<script src=\"{{ asset('js/functions.js') }}\"></script>
</body>
{% block scripts %} {% endblock %}
<!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 19:11:43 GMT -->
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\base.html.twig");
    }
}
