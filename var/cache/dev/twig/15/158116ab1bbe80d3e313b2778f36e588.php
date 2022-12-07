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

/* Admin/layout.html.twig */
class __TwigTemplate_32fc99fafdd6c883f49a403020de5696 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'message' => [$this, 'block_message'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/layout.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/favicon/favicon.ico"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/cs-skin-elastic.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less') }}\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/scss/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/lib/chosen/chosen.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/morris.js/morris.css"), "html", null, true);
        echo "\">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logo2.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_homepage");
        echo "\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_forun");
        echo "\"> <i class=\"menu-icon fa fa-dashboard\"></i>Forums </a>
                </li>
                <li >
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_storyline");
        echo "\"> <i class=\"menu-icon fa fa-book \"></i>Storylines </a>
                </li>
                <li >
                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_scenes");
        echo "\"> <i class=\"menu-icon fa fa-pencil\"></i> Proposed Scenes </a>
                </li>
                <li >
                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_to_action");
        echo "\"> <i class=\"menu-icon fa fa-pencil\"></i> Call to Action </a>
                </li>
                <li >
                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_top_authors");
        echo "\"> <i class=\"menu-icon fa fa-pencil\"></i> Our top Authors </a>
                </li>

                <li class=\"nav-tree nav\">
                    <a href=\"#\"> <i class=\"menu-icon fa fa-book \"></i>Content Management </a>
                    <ul>
                        <li class=\"nav-item\">Call to action</li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id=\"right-panel\" class=\"right-panel\">

    <!-- Header-->
    <header id=\"header\" class=\"header\">

        <div class=\"header-menu\">

            <div class=\"col-sm-7\">
                <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
            </div>

            <div class=\"col-sm-5\">
                <div class=\"user-area dropdown float-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                    </a>

                    <div class=\"user-menu dropdown-menu\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>


                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                    </div>
                </div>

                <div class=\"language-select dropdown\" id=\"language-select\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <i class=\"flag-icon flag-icon-us\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                        <div class=\"dropdown-item\">
                            <span class=\"flag-icon flag-icon-fr\"></span>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-es\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-it\"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class=\"breadcrumbs\">
        ";
        // line 142
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 143
        echo "    </div>

    <div class=\"content mt-3\">
        ";
        // line 146
        $this->displayBlock('message', $context, $blocks);
        // line 158
        echo "

        ";
        // line 160
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/main.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/widgets.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 184
        $this->displayBlock('scripts', $context, $blocks);
        // line 185
        echo "
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Nextscenes | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 142
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 146
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        // line 147
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "session", [], "any", false, false, false, 147), "flashbag", [], "any", false, false, false, 147), "get", [0 => "success"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 148
            echo "                <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\">
                    <span class=\"badge badge-pill badge-warning\">Felicitation</span>
                    ";
            // line 150
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo ".
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 160
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 184
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
        return "Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 184,  397 => 160,  390 => 157,  377 => 150,  373 => 148,  368 => 147,  361 => 146,  348 => 142,  335 => 9,  326 => 185,  324 => 184,  320 => 183,  316 => 182,  311 => 180,  307 => 179,  303 => 178,  299 => 177,  295 => 176,  291 => 175,  287 => 174,  281 => 171,  277 => 170,  272 => 168,  263 => 161,  261 => 160,  257 => 158,  255 => 146,  250 => 143,  248 => 142,  172 => 69,  166 => 66,  160 => 63,  154 => 60,  148 => 57,  142 => 54,  133 => 48,  129 => 47,  106 => 27,  101 => 25,  97 => 24,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  63 => 14,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %} Nextscenes | {% endblock %}</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/nsadmin/favicon/favicon.ico') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/flag-icon.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/cs-skin-elastic.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less') }}\"> -->
    <link rel=\"stylesheet\" href=\"{{ asset('admin/scss/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/lib/chosen/chosen.min.css') }}\">
    <link href=\"{{ asset('admin/css/lib/vector-map/jqvmap.min.css') }}\" rel=\"stylesheet\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{ asset('admin/morris.js/morris.css') }}\">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><img src=\"{{ asset('admin/images/logo.png') }}\" alt=\"Logo\"></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"{{ asset('admin/images/logo2.png') }}\" alt=\"Logo\"></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"{{ path('ns_admin_homepage') }}\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                </li>
                <li class=\"active\">
                    <a href=\"{{ path('ns_admin_forun') }}\"> <i class=\"menu-icon fa fa-dashboard\"></i>Forums </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_storyline') }}\"> <i class=\"menu-icon fa fa-book \"></i>Storylines </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_scenes') }}\"> <i class=\"menu-icon fa fa-pencil\"></i> Proposed Scenes </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_to_action') }}\"> <i class=\"menu-icon fa fa-pencil\"></i> Call to Action </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_top_authors') }}\"> <i class=\"menu-icon fa fa-pencil\"></i> Our top Authors </a>
                </li>

                <li class=\"nav-tree nav\">
                    <a href=\"#\"> <i class=\"menu-icon fa fa-book \"></i>Content Management </a>
                    <ul>
                        <li class=\"nav-item\">Call to action</li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id=\"right-panel\" class=\"right-panel\">

    <!-- Header-->
    <header id=\"header\" class=\"header\">

        <div class=\"header-menu\">

            <div class=\"col-sm-7\">
                <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
            </div>

            <div class=\"col-sm-5\">
                <div class=\"user-area dropdown float-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                    </a>

                    <div class=\"user-menu dropdown-menu\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>


                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                    </div>
                </div>

                <div class=\"language-select dropdown\" id=\"language-select\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <i class=\"flag-icon flag-icon-us\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                        <div class=\"dropdown-item\">
                            <span class=\"flag-icon flag-icon-fr\"></span>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-es\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-it\"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class=\"breadcrumbs\">
        {% block breadcrumbs %} {% endblock %}
    </div>

    <div class=\"content mt-3\">
        {% block message %}
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\">
                    <span class=\"badge badge-pill badge-warning\">Felicitation</span>
                    {{ flashMessage }}.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>

            {% endfor %}
        {% endblock %}


        {% block content %} {% endblock %}


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src=\"{{ asset('admin/js/vendor/jquery-2.1.4.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"{{ asset('admin/js/plugins.js') }}\"></script>
<script src=\"{{ asset('admin/js/main.js') }}\"></script>


<script src=\"{{ asset('admin/js/lib/chart-js/Chart.bundle.js') }}\"></script>
<script src=\"{{ asset('admin/js/dashboard.js') }}\"></script>
<script src=\"{{ asset('admin/js/widgets.js') }}\"></script>
<script src=\"{{ asset('admin/js/lib/vector-map/jquery.vmap.js') }}\"></script>
<script src=\"{{ asset('admin/js/lib/vector-map/jquery.vmap.min.js') }}\"></script>
<script src=\"{{ asset('admin/js/lib/vector-map/jquery.vmap.sampledata.js') }}\"></script>
<script src=\"{{ asset('admin/js/lib/vector-map/country/jquery.vmap.world.js') }}\"></script>
<!-- Morris.js charts -->
<script src=\"{{ asset('admin/raphael/raphael.min.js') }}\"></script>
<script src=\"{{ asset('admin/morris.js/morris.min.js') }}\"></script>
{% block scripts %} {% endblock %}

</body>
</html>", "Admin/layout.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\Admin\\layout.html.twig");
    }
}
