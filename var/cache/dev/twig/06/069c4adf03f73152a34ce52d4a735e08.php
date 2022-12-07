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

/* story/view.html.twig */
class __TwigTemplate_01e157bb6db55b55d212341d1aaa5114 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "story/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "story/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li><a href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 11, $this->source); })()), "forum", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></li>
                <li class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier;  text-align: justify; word-spacing: 4px\">
            <div class=\"single-post nobottommargin\">
                <!-- Single Post
                ============================================= -->
                <div class=\"entry clearfix\">
                    <!-- Entry Title
                    ============================================= -->
                    <div class=\"entry-title\">
                        <h2 >";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo " <sup>";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 27, $this->source); })()), "publishedBy", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27))) {
            echo "<a style=\"font-size: 12px; color: #9f191f; \" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>Edit</a> ";
        }
        echo "</sup> </h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 33, $this->source); })()), "createdAt", [], "any", false, false, false, 33), "d, M, Y"), "html", null, true);
        echo " </li>
                        <li><a href=\"#\"><i class=\"icon-user\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 34, $this->source); })()), "publishedBy", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</a></li>
                        <li><i class=\"icon-folder-open\"></i> <a href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 35, $this->source); })()), "scenes", [], "any", false, false, false, 35)), "html", null, true);
        echo " scene(s)</a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class=\"entry-content notopmargin\">

                        <!-- Entry Image
                        ============================================= -->
                        <div class=\"entry-image alignleft\">
                            <div class=\"book-container\">
                                <div class=\"book\">
                                    <div class=\"book-cover\">
                                        <h1>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), "html", null, true);
        echo "</h1>
                                        <h2>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 49, $this->source); })()), "publishedBy", [], "any", false, false, false, 49), "firstname", [], "any", false, false, false, 49), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 49, $this->source); })()), "publishedBy", [], "any", false, false, false, 49), "lastname", [], "any", false, false, false, 49), "html", null, true);
        echo " </h2>
                                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 50, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" />
                                    </div>
                                    <div class=\"book-spine\">
                                        <h1>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), "html", null, true);
        echo "</h1>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .entry-image end -->

                        ";
        // line 60
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 0, 500);
        echo "
                        <br>


                        <div class=\"clear\"></div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_read_story", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>Read story</a>

                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 72
        if (((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 72, $this->source); })()), "contributors", [], "any", false, false, false, 72)) || (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72) == twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 72, $this->source); })()), "publishedBy", [], "any", false, false, false, 72))) || (twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 72, $this->source); })()), "type", [], "any", false, false, false, 72) == "Collaborative writing"))) {
            // line 73
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"button button-3d fright  button-rounded button-red\"><i class=\"icon-door\"></i>View scenes</a>
                                ";
        }
        // line 75
        echo "                            </div>
                        </div>
                        <div class=\"line\"></div>




                        <!-- Post Single - Share
                        ============================================= -->
                        <div class=\"si-share noborder clearfix\">
                            <span>Share this Storyline:</span>
                            <div>
                                <a href=\"#\" class=\"social-icon si-borderless si-facebook\">
                                    <i class=\"icon-facebook\"></i>
                                    <i class=\"icon-facebook\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-twitter\">
                                    <i class=\"icon-twitter\"></i>
                                    <i class=\"icon-twitter\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-pinterest\">
                                    <i class=\"icon-pinterest\"></i>
                                    <i class=\"icon-pinterest\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-gplus\">
                                    <i class=\"icon-gplus\"></i>
                                    <i class=\"icon-gplus\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-rss\">
                                    <i class=\"icon-rss\"></i>
                                    <i class=\"icon-rss\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-email3\">
                                    <i class=\"icon-email3\"></i>
                                    <i class=\"icon-email3\"></i>
                                </a>
                            </div>
                        </div><!-- Post Single - Share End -->

                    </div>
                </div><!-- .entry end -->



                <!-- Post Author Info
                ============================================= -->
                <div class=\"panel panel-default\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Author:  <span><a href=\"#\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 123, $this->source); })()), "publishedBy", [], "any", false, false, false, 123), "firstname", [], "any", false, false, false, 123), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 123, $this->source); })()), "publishedBy", [], "any", false, false, false, 123), "lastname", [], "any", false, false, false, 123), "html", null, true);
        echo "</a></span></h3>
                    </div>
                    <div class=\"panel-body\" >
                        <div class=\"author-image\">
                            ";
        // line 127
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 127, $this->source); })()), "publishedBy", [], "any", false, false, false, 127), "profile", [], "any", false, false, false, 127))) {
            // line 128
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 128, $this->source); })()), "publishedBy", [], "any", false, false, false, 128), "profileFile"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle\">
                            ";
        } else {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/icons/avatar.jpg")), "html", null, true);
            echo "\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">

                            ";
        }
        // line 133
        echo "                        </div>
                        ";
        // line 134
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 134, $this->source); })()), "publishedBy", [], "any", false, false, false, 134), "biographie", [], "any", false, false, false, 134))) {
            // line 135
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 135, $this->source); })()), "publishedBy", [], "any", false, false, false, 135), "biographie", [], "any", false, false, false, 135), "html", null, true);
            echo "
                        ";
        } else {
            // line 137
            echo "                            No Biography of the author
                        ";
        }
        // line 139
        echo "                    </div>
                </div><!-- Post Single - Author End -->

                <div class=\"line\"></div>

                <div class=\"row\">


                    <div class=\"col-md-12\">
                        ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 148, $this->source); })()), "publishedBy", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148))) {
            // line 149
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\" class=\"button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Add new scene</a>

                        ";
        }
        // line 152
        echo "                    </div>

                </div>

            </div>


        </div>
        ";
        // line 160
        $this->loadTemplate("_sidebar.html.twig", "story/view.html.twig", 160)->display($context);
        // line 161
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 166
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 167
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "story/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 167,  350 => 166,  340 => 161,  338 => 160,  328 => 152,  321 => 149,  319 => 148,  308 => 139,  304 => 137,  298 => 135,  296 => 134,  293 => 133,  286 => 130,  280 => 128,  278 => 127,  269 => 123,  219 => 75,  213 => 73,  211 => 72,  204 => 68,  193 => 60,  183 => 53,  177 => 50,  171 => 49,  167 => 48,  151 => 35,  147 => 34,  143 => 33,  128 => 27,  117 => 18,  110 => 17,  98 => 12,  94 => 11,  90 => 10,  85 => 8,  77 => 4,  70 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %} {{ story.title }} {% endblock %}
{% block slider %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>{{ story.title }}</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li><a href=\"#\">{{ story.forum.name }}</a></li>
                <li class=\"active\">{{ story.title }}</li>
            </ol>
        </div>
    </div>
{% endblock %}
{% block content %}
    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier;  text-align: justify; word-spacing: 4px\">
            <div class=\"single-post nobottommargin\">
                <!-- Single Post
                ============================================= -->
                <div class=\"entry clearfix\">
                    <!-- Entry Title
                    ============================================= -->
                    <div class=\"entry-title\">
                        <h2 >{{ story.title }} <sup>{% if app.user.id == story.publishedBy.id %}<a style=\"font-size: 12px; color: #9f191f; \" href=\"{{ path('ns_web_story_edit', { 'id': story.id }) }}\"><i class=\"icon-pencil\"></i>Edit</a> {% endif %}</sup> </h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> {{ story.createdAt | date('d, M, Y') }} </li>
                        <li><a href=\"#\"><i class=\"icon-user\"></i> {{ story.publishedBy.username }}</a></li>
                        <li><i class=\"icon-folder-open\"></i> <a href=\"#\">{{ story.scenes | length }} scene(s)</a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class=\"entry-content notopmargin\">

                        <!-- Entry Image
                        ============================================= -->
                        <div class=\"entry-image alignleft\">
                            <div class=\"book-container\">
                                <div class=\"book\">
                                    <div class=\"book-cover\">
                                        <h1>{{ story.title }}</h1>
                                        <h2>{{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }} </h2>
                                        <img src=\"{{ vich_uploader_asset(story, 'imageFile') }}\" />
                                    </div>
                                    <div class=\"book-spine\">
                                        <h1>{{ story.title }}</h1>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .entry-image end -->

                        {{ story.description   |slice(0, 500)|raw  }}
                        <br>


                        <div class=\"clear\"></div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <a href=\"{{ path('ns_web_read_story', { 'id': story.id }) }}\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>Read story</a>

                            </div>
                            <div class=\"col-md-6\">
                                {% if (app.user in story.contributors) or app.user == story.publishedBy or story.type == 'Collaborative writing' %}
                                    <a href=\"{{ path('ns_web_scenes_view', { 'id': story.id }) }}\" class=\"button button-3d fright  button-rounded button-red\"><i class=\"icon-door\"></i>View scenes</a>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"line\"></div>




                        <!-- Post Single - Share
                        ============================================= -->
                        <div class=\"si-share noborder clearfix\">
                            <span>Share this Storyline:</span>
                            <div>
                                <a href=\"#\" class=\"social-icon si-borderless si-facebook\">
                                    <i class=\"icon-facebook\"></i>
                                    <i class=\"icon-facebook\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-twitter\">
                                    <i class=\"icon-twitter\"></i>
                                    <i class=\"icon-twitter\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-pinterest\">
                                    <i class=\"icon-pinterest\"></i>
                                    <i class=\"icon-pinterest\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-gplus\">
                                    <i class=\"icon-gplus\"></i>
                                    <i class=\"icon-gplus\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-rss\">
                                    <i class=\"icon-rss\"></i>
                                    <i class=\"icon-rss\"></i>
                                </a>
                                <a href=\"#\" class=\"social-icon si-borderless si-email3\">
                                    <i class=\"icon-email3\"></i>
                                    <i class=\"icon-email3\"></i>
                                </a>
                            </div>
                        </div><!-- Post Single - Share End -->

                    </div>
                </div><!-- .entry end -->



                <!-- Post Author Info
                ============================================= -->
                <div class=\"panel panel-default\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Author:  <span><a href=\"#\">{{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }}</a></span></h3>
                    </div>
                    <div class=\"panel-body\" >
                        <div class=\"author-image\">
                            {% if story.publishedBy.profile is not empty %}
                                <img src=\"{{ vich_uploader_asset(story.publishedBy, 'profileFile') }}\" alt=\"\" class=\"img-circle\">
                            {% else %}
                                <img src=\"{{ absolute_url(asset('assets/front/images/icons/avatar.jpg')) }}\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">

                            {% endif %}
                        </div>
                        {% if story.publishedBy.biographie is not null %}
                            {{ story.publishedBy.biographie }}
                        {% else %}
                            No Biography of the author
                        {% endif %}
                    </div>
                </div><!-- Post Single - Author End -->

                <div class=\"line\"></div>

                <div class=\"row\">


                    <div class=\"col-md-12\">
                        {% if app.user.id == story.publishedBy.id %}
                            <a href=\"{{ path('ns_web_scenes_add', { 'id': story.id }) }}\" class=\"button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Add new scene</a>

                        {% endif %}
                    </div>

                </div>

            </div>


        </div>
        {% include '_sidebar.html.twig' %}

    </div>

{% endblock %}

{% block scripts %}

{% endblock %}
", "story/view.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\story\\view.html.twig");
    }
}
