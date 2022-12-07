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

/* scenes/view.html.twig */
class __TwigTemplate_0b48eb2ab511e7e998a0de174535ab6a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scenes/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scenes/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>View scenes</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Login</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"content-wrap\">

        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; width: 100%; text-align: justify; word-spacing: 4px\">
                <div class=\"clear\"></div>
                ";
        // line 26
        if (((isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new RuntimeError('Variable "scene" does not exist.', 26, $this->source); })()) != null)) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["scene"]) {
                // line 28
                echo "                        <div class=\" panel panel-default\">
                            <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["scene"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo "</b></div>
                            <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                                ";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["scene"], "content", [], "any", false, false, false, 31);
                echo "
                            </div>
                        </div>

                        <div class=\"clear\"></div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scene'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    <div class=\"line\"></div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41) != "Solo writing")) {
                // line 42
                echo "                                <h3 class=\"title-bottom-border uppercase\">Proposed Scenes</h3>
                                ";
                // line 43
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SceneController::proposedScene", ["story" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 45
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", [0 => "id"], "method", false, false, false, 45)]));
                // line 46
                echo "
                            ";
            }
            // line 48
            echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12 \" >
                            <div class=\"clear\"></div>
                            <div class=\"row\">
                                ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 56, $this->source); })()), "publishedBy", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56))) {
                // line 57
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57) == "Solo writing")) {
                    // line 58
                    echo "                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58) == "Collaborative writing")) {
                    // line 59
                    echo "                                        ";
                    if ((twig_in_filter("ROLE_POWER_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 59, $this->source); })()), "publishedBy", [], "any", false, false, false, 59), "roles", [], "any", false, false, false, 59)) || twig_in_filter("ROLE_MODERATOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 59, $this->source); })()), "publishedBy", [], "any", false, false, false, 59), "roles", [], "any", false, false, false, 59)))) {
                        // line 60
                        echo "
                                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                        <a href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
                        echo "\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>
                                         ";
                    }
                    // line 64
                    echo "                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64) == "Group writing")) {
                    // line 65
                    echo "                                        ";
                    $context["contributors"] = [];
                    // line 66
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 66, $this->source); })()), "contributors", [], "any", false, false, false, 66));
                    foreach ($context['_seq'] as $context["_key"] => $context["contributor"]) {
                        // line 67
                        echo "                                            ";
                        $context["contributors"] = twig_array_merge((isset($context["contributors"]) || array_key_exists("contributors", $context) ? $context["contributors"] : (function () { throw new RuntimeError('Variable "contributors" does not exist.', 67, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["contributor"], "id", [], "any", false, false, false, 67)]);
                        // line 68
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contributor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "
                                        ";
                    // line 70
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), (isset($context["contributors"]) || array_key_exists("contributors", $context) ? $context["contributors"] : (function () { throw new RuntimeError('Variable "contributors" does not exist.', 70, $this->source); })()))) {
                        // line 71
                        echo "                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                            <a href=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new RuntimeError('Variable "story" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]), "html", null, true);
                        echo "\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>

                                        ";
                    }
                    // line 75
                    echo "
                                    ";
                }
                // line 77
                echo "                                ";
            } else {
                // line 78
                echo "                                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#addNewScene\" aria-expanded=\"false\" aria-controls=\"newScene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-book-open\"></i> Add new scene</a>
                                    <div class=\"panel-group\" id=\"accordion\">
                                        <div id=\"addNewScene\" class=\"panel-collapse collapse\">
                                            ";
                // line 81
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 81, $this->source); })()), 'form_start');
                echo "

                                            ";
                // line 84
                echo "                                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 84, $this->source); })()), 'errors');
                echo "
                                            <div class=\"row\">
                                                ";
                // line 86
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "
                                                    ";
                    // line 89
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 89, $this->source); })()), "children", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 90
                        echo "                                                        ";
                        // line 91
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 92
                            echo "                                                            <div class=\"alert alert-warning\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 92), "html", null, true);
                            echo "</div>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "
                                                ";
                }
                // line 97
                echo "                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group\">
                                                    <label for=\"nom_carte\">Title</label>
                                                    ";
                // line 101
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 101, $this->source); })()), "title", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
                echo "
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"nom_carte\">Scene</label>
                                                    ";
                // line 105
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 105, $this->source); })()), "content", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
                echo "
                                                </div>

                                                <div class=\" line\"></div>

                                                <div class=\"form-group\">
                                                    <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                                                </div>

                                            </div>


                                            ";
                // line 117
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 117, $this->source); })()), 'rest');
                echo "
                                            ";
                // line 119
                echo "                                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sceneForm"]) || array_key_exists("sceneForm", $context) ? $context["sceneForm"] : (function () { throw new RuntimeError('Variable "sceneForm" does not exist.', 119, $this->source); })()), 'form_end');
                echo "
                                        </div>
                                    </div>

                                ";
            }
            // line 124
            echo "                            </div>
                            <div class=\"panel-group\" id=\"accordion\">
                                <div id=\"proposenewscene\" class=\"panel-collapse collapse\">
                                    ";
            // line 127
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_start');
            echo "

                                    ";
            // line 130
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'errors');
            echo "
                                    <div class=\"row\">
                                        <div class=\"form-group\">
                                            <label for=\"nom_carte\">Title</label>
                                            ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "title", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
            echo "
                                        </div>

                                        <div class=\"form-group\">
                                            <label for=\"nom_carte\">Content</label>
                                            ";
            // line 139
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "content", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => ""]]);
            echo "
                                        </div>

                                        <div class=\" line\"></div>

                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Submit</button>

                                        </div>

                                    </div>


                                    ";
            // line 152
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), 'rest');
            echo "

                                    ";
            // line 155
            echo "                                    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), 'form_end');
            echo "
                                </div>
                            </div>



                        </div>
                    </div>
                ";
        } else {
            // line 164
            echo "                    <h3 class=\"red center\" style=\"color: red\">No scene in this storyline !</h3>
                ";
        }
        // line 166
        echo "

            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 174
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 175
        echo "    <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
    <script type=\"text/javascript\">
        \$('.feed').infiniteScroll({
            path: '.pagination__next',
            append: '.article',
            status: '.scroller-status',
            hideNav: '.pagination',
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scenes/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 175,  397 => 174,  384 => 166,  380 => 164,  367 => 155,  362 => 152,  346 => 139,  338 => 134,  330 => 130,  325 => 127,  320 => 124,  311 => 119,  307 => 117,  292 => 105,  285 => 101,  279 => 97,  275 => 95,  269 => 94,  260 => 92,  255 => 91,  253 => 90,  248 => 89,  245 => 87,  243 => 86,  237 => 84,  232 => 81,  227 => 78,  224 => 77,  220 => 75,  214 => 72,  211 => 71,  209 => 70,  206 => 69,  200 => 68,  197 => 67,  192 => 66,  189 => 65,  186 => 64,  181 => 62,  177 => 60,  174 => 59,  171 => 58,  168 => 57,  166 => 56,  156 => 48,  152 => 46,  150 => 45,  149 => 43,  146 => 42,  144 => 41,  138 => 37,  126 => 31,  121 => 29,  118 => 28,  113 => 27,  111 => 26,  104 => 21,  97 => 20,  77 => 6,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{ story.title }} {% endblock %}

{% block slider %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>View scenes</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">Login</li>
            </ol>
        </div>
    </div>
{% endblock %}


{% block content %}
    <div class=\"content-wrap\">

        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; width: 100%; text-align: justify; word-spacing: 4px\">
                <div class=\"clear\"></div>
                {% if scene != null %}
                    {% for scene in pagination %}
                        <div class=\" panel panel-default\">
                            <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>{{ scene.title }}</b></div>
                            <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                                {{ scene.content  | raw }}
                            </div>
                        </div>

                        <div class=\"clear\"></div>
                    {% endfor %}
                    <div class=\"line\"></div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {% if story.type != \"Solo writing\" %}
                                <h3 class=\"title-bottom-border uppercase\">Proposed Scenes</h3>
                                {{ render(controller(
                                    'App\\\\Controller\\\\SceneController::proposedScene',
                                    { 'story': app.request.get('id') }
                                )) }}
                            {% endif %}

                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12 \" >
                            <div class=\"clear\"></div>
                            <div class=\"row\">
                                {% if app.user.id != story.publishedBy.id  %}
                                    {% if story.type == \"Solo writing\" %}
                                    {% elseif story.type == \"Collaborative writing\" %}
                                        {% if   'ROLE_POWER_USER' in story.publishedBy.roles or 'ROLE_MODERATOR' in story.publishedBy.roles %}

                                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                        <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>
                                         {% endif %}
                                        {% elseif story.type == \"Group writing\" %}
                                        {% set contributors = [] %}
                                        {% for contributor in story.contributors %}
                                            {% set contributors = contributors |merge([contributor.id]) %}
                                        {% endfor %}

                                        {% if app.user.id in contributors %}
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                            <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>

                                        {% endif %}

                                    {% endif %}
                                {% else %}
                                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#addNewScene\" aria-expanded=\"false\" aria-controls=\"newScene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-book-open\"></i> Add new scene</a>
                                    <div class=\"panel-group\" id=\"accordion\">
                                        <div id=\"addNewScene\" class=\"panel-collapse collapse\">
                                            {{ form_start(sceneForm) }}

                                            {# Les erreurs générales du formulaire. #}
                                            {{ form_errors(sceneForm) }}
                                            <div class=\"row\">
                                                {% if not sceneForm.vars.valid %}

                                                    {# Loop through every form item #}
                                                    {% for child in sceneForm.children %}
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
                                                    {{ form_widget(sceneForm.title, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"nom_carte\">Scene</label>
                                                    {{ form_widget(sceneForm.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                                </div>

                                                <div class=\" line\"></div>

                                                <div class=\"form-group\">
                                                    <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                                                </div>

                                            </div>


                                            {{ form_rest(sceneForm) }}
                                            {# Fermeture de la balise <form> du formulaire HTML #}
                                            {{ form_end(sceneForm) }}
                                        </div>
                                    </div>

                                {% endif %}
                            </div>
                            <div class=\"panel-group\" id=\"accordion\">
                                <div id=\"proposenewscene\" class=\"panel-collapse collapse\">
                                    {{ form_start(form) }}

                                    {# Les erreurs générales du formulaire. #}
                                    {{ form_errors(form) }}
                                    <div class=\"row\">
                                        <div class=\"form-group\">
                                            <label for=\"nom_carte\">Title</label>
                                            {{ form_widget(form.title, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                        </div>

                                        <div class=\"form-group\">
                                            <label for=\"nom_carte\">Content</label>
                                            {{ form_widget(form.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                        </div>

                                        <div class=\" line\"></div>

                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Submit</button>

                                        </div>

                                    </div>


                                    {{ form_rest(form) }}

                                    {# Fermeture de la balise <form> du formulaire HTML #}
                                    {{ form_end(form) }}
                                </div>
                            </div>



                        </div>
                    </div>
                {% else %}
                    <h3 class=\"red center\" style=\"color: red\">No scene in this storyline !</h3>
                {% endif %}


            </div>
        </div>
    </div>

{% endblock %}

{% block scripts %}
    <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
    <script type=\"text/javascript\">
        \$('.feed').infiniteScroll({
            path: '.pagination__next',
            append: '.article',
            status: '.scroller-status',
            hideNav: '.pagination',
        });
    </script>
{% endblock %}
", "scenes/view.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\scenes\\view.html.twig");
    }
}
