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

/* _sidebar.html.twig */
class __TwigTemplate_5e85b8472c7922275bac342e310bae2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar nobottommargin col_last clearfix\">

    <div class=\"forum\">

        <div class=\"sidebar-widgets-wrap\">

            <div class=\"widget widget_links clearfix\">

                <div class=\"fancy-title title-bottom-border\">
                    <h3>FORUMS</h3>
                </div>

                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ForumController::vertical"));
        echo "


            </div>

            <div class=\"widget clearfix\">

                <h4>Facebook Feeds</h4>
                <div id=\"dribbble-widge\">
                    <div id=\"fb-root\"></div>
                    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0&appId=679267767248029&autoLogAppEvents=1\" nonce=\"hvGEXP9R\"></script>
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/IRYobo\" data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/IRYobo\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/IRYobo\">IR-Yobo</a></blockquote></div>
                </div>

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <h4>Update !!</h4>
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/open.png")), "html", null, true);
        echo "\" />

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/google-play.png")), "html", null, true);
        echo "\" />

            </div>

        </div>
    </div>


</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  76 => 32,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar nobottommargin col_last clearfix\">

    <div class=\"forum\">

        <div class=\"sidebar-widgets-wrap\">

            <div class=\"widget widget_links clearfix\">

                <div class=\"fancy-title title-bottom-border\">
                    <h3>FORUMS</h3>
                </div>

                {{ render(controller('App\\\\Controller\\\\ForumController::vertical')) }}


            </div>

            <div class=\"widget clearfix\">

                <h4>Facebook Feeds</h4>
                <div id=\"dribbble-widge\">
                    <div id=\"fb-root\"></div>
                    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0&appId=679267767248029&autoLogAppEvents=1\" nonce=\"hvGEXP9R\"></script>
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/IRYobo\" data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/IRYobo\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/IRYobo\">IR-Yobo</a></blockquote></div>
                </div>

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <h4>Update !!</h4>
                <img src=\"{{ absolute_url(asset('images/open.png')) }}\" />

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <img src=\"{{ absolute_url(asset('images/google-play.png')) }}\" />

            </div>

        </div>
    </div>


</div>
", "_sidebar.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\_sidebar.html.twig");
    }
}
