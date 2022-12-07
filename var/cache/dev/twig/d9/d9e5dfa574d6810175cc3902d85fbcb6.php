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

/* contact.html.twig */
class __TwigTemplate_e8b598e80025ed7ee4dc64ae0976da30 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Contact us ";
        
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
            <h2>Get in touch</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">contact-us</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <!-- Postcontent
            ============================================= -->
            <div style=\"width: 100%\" class=\"postcontent nobottommargin\">

                <div class=\"row\">
                    <div class=\"col_half\">
                        <address>
                            <strong>Nextscenes Mali:</strong><br>
                            (Division of Ginco Group SARL)<br>
                            P/C 754, Rue 623<br>
                            Baco Djicoroni ACI<br>
                            Bamako, Mali
                        </address>
                        <abbr title=\"Phone Number\"><strong>Line 1:</strong></abbr> (223) 74 14 15 14 <br>
                        <abbr title=\"Fax\"><strong>Line 2:</strong></abbr> (223) 73 03 39 39<br>
                        <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@nextscenes.com
                        <br>
                        <div class=\"row\">&nbsp;</div>
                    </div>
                    <div class=\"col_half col_last\">
                        <address>
                            <strong>Nextscenes Nigeria:</strong><br>
                            (Division of Intdigits Nig. Ltd) <br>
                            43 Wahabi Larinde Street <br>
                            Maguloku - Oshodi<br>
                            Lagos, Nigeria<br>
                        </address>
                        <abbr title=\"Phone Number\"><strong>Line 1:</strong></abbr> (234) 811 819 5734 <br>
                        <abbr title=\"Fax\"><strong>Line 2:</strong></abbr> (234) 806 410 5588<br>
                        <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@nextscenes.com
                    </div>
                </div>
                <div class=\"row\">
                    <section id=\"google-map\" class=\"gmap \"></section>

                </div>

                <div class=\"row\">
                    <h3>Send us an Email</h3>

                    <div class=\"contact-widget\">

                        <div class=\"contact-form-result\"></div>

                        <form class=\"nobottommargin\" id=\"template-contactform\" name=\"template-contactform\" action=\"include/sendemail.php\" method=\"post\">

                            <div class=\"form-process\"></div>

                            <div class=\"col_one_third\">
                                <label for=\"template-contactform-name\">Name <small>*</small></label>
                                <input type=\"text\" id=\"template-contactform-name\" name=\"template-contactform-name\" value=\"\" class=\"sm-form-control required\" />
                            </div>

                            <div class=\"col_one_third\">
                                <label for=\"template-contactform-email\">Email <small>*</small></label>
                                <input type=\"email\" id=\"template-contactform-email\" name=\"template-contactform-email\" value=\"\" class=\"required email sm-form-control\" />
                            </div>

                            <div class=\"col_one_third col_last\">
                                <label for=\"template-contactform-phone\">Phone</label>
                                <input type=\"text\" id=\"template-contactform-phone\" name=\"phone\" value=\"\" class=\"sm-form-control\" />
                            </div>

                            <div class=\"clear\"></div>

                            <div class=\"col_full\">
                                <label for=\"template-contactform-subject\">Subject <small>*</small></label>
                                <input type=\"text\" id=\"template-contactform-subject\" name=\"subject\" value=\"\" class=\"required sm-form-control\" />
                            </div>



                            <div class=\"clear\"></div>

                            <div class=\"col_full\">
                                <label for=\"template-contactform-message\">Message <small>*</small></label>
                                <textarea class=\"required sm-form-control\" id=\"template-contactform-message\" name=\"template-contactform-message\" rows=\"6\" cols=\"30\"></textarea>
                            </div>

                            <div class=\"col_full hidden\">
                                <input type=\"text\" id=\"template-contactform-botcheck\" name=\"template-contactform-botcheck\" value=\"\" class=\"sm-form-control\" />
                            </div>

                            <div class=\"col_full\">
                                <button class=\"button button-3d nomargin\" type=\"submit\" id=\"template-contactform-submit\" name=\"template-contactform-submit\" value=\"submit\">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div><!-- .postcontent end -->



        </div>

    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 126
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 127
        echo "    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js\"></script>

    <script type=\"text/javascript\">

        \$('#google-map').gMap({

            address: 'Bamako, Mali',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: \"Melbourne, Australia\",
                    html: '<div style=\"width: 300px;\"><h4 style=\"margin-bottom: 8px;\">Hi, we\\'re <span>Nextscenes</span></h4><p class=\"nobottommargin\">we re an online multilingual platform for creative writing where writers allow readers to help them propose the next scene of a story or write their own stories.</p></div>',
                    icon: {
                        image: \"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/icons/map-icon-red.png")), "html", null, true);
        echo "\",
                        iconsize: [32, 39],
                        iconanchor: [13,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 141,  220 => 127,  213 => 126,  102 => 19,  95 => 18,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Contact us {% endblock %}

{% block slider %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>Get in touch</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">contact-us</li>
            </ol>
        </div>
    </div>
{% endblock %}
{% block content %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <!-- Postcontent
            ============================================= -->
            <div style=\"width: 100%\" class=\"postcontent nobottommargin\">

                <div class=\"row\">
                    <div class=\"col_half\">
                        <address>
                            <strong>Nextscenes Mali:</strong><br>
                            (Division of Ginco Group SARL)<br>
                            P/C 754, Rue 623<br>
                            Baco Djicoroni ACI<br>
                            Bamako, Mali
                        </address>
                        <abbr title=\"Phone Number\"><strong>Line 1:</strong></abbr> (223) 74 14 15 14 <br>
                        <abbr title=\"Fax\"><strong>Line 2:</strong></abbr> (223) 73 03 39 39<br>
                        <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@nextscenes.com
                        <br>
                        <div class=\"row\">&nbsp;</div>
                    </div>
                    <div class=\"col_half col_last\">
                        <address>
                            <strong>Nextscenes Nigeria:</strong><br>
                            (Division of Intdigits Nig. Ltd) <br>
                            43 Wahabi Larinde Street <br>
                            Maguloku - Oshodi<br>
                            Lagos, Nigeria<br>
                        </address>
                        <abbr title=\"Phone Number\"><strong>Line 1:</strong></abbr> (234) 811 819 5734 <br>
                        <abbr title=\"Fax\"><strong>Line 2:</strong></abbr> (234) 806 410 5588<br>
                        <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@nextscenes.com
                    </div>
                </div>
                <div class=\"row\">
                    <section id=\"google-map\" class=\"gmap \"></section>

                </div>

                <div class=\"row\">
                    <h3>Send us an Email</h3>

                    <div class=\"contact-widget\">

                        <div class=\"contact-form-result\"></div>

                        <form class=\"nobottommargin\" id=\"template-contactform\" name=\"template-contactform\" action=\"include/sendemail.php\" method=\"post\">

                            <div class=\"form-process\"></div>

                            <div class=\"col_one_third\">
                                <label for=\"template-contactform-name\">Name <small>*</small></label>
                                <input type=\"text\" id=\"template-contactform-name\" name=\"template-contactform-name\" value=\"\" class=\"sm-form-control required\" />
                            </div>

                            <div class=\"col_one_third\">
                                <label for=\"template-contactform-email\">Email <small>*</small></label>
                                <input type=\"email\" id=\"template-contactform-email\" name=\"template-contactform-email\" value=\"\" class=\"required email sm-form-control\" />
                            </div>

                            <div class=\"col_one_third col_last\">
                                <label for=\"template-contactform-phone\">Phone</label>
                                <input type=\"text\" id=\"template-contactform-phone\" name=\"phone\" value=\"\" class=\"sm-form-control\" />
                            </div>

                            <div class=\"clear\"></div>

                            <div class=\"col_full\">
                                <label for=\"template-contactform-subject\">Subject <small>*</small></label>
                                <input type=\"text\" id=\"template-contactform-subject\" name=\"subject\" value=\"\" class=\"required sm-form-control\" />
                            </div>



                            <div class=\"clear\"></div>

                            <div class=\"col_full\">
                                <label for=\"template-contactform-message\">Message <small>*</small></label>
                                <textarea class=\"required sm-form-control\" id=\"template-contactform-message\" name=\"template-contactform-message\" rows=\"6\" cols=\"30\"></textarea>
                            </div>

                            <div class=\"col_full hidden\">
                                <input type=\"text\" id=\"template-contactform-botcheck\" name=\"template-contactform-botcheck\" value=\"\" class=\"sm-form-control\" />
                            </div>

                            <div class=\"col_full\">
                                <button class=\"button button-3d nomargin\" type=\"submit\" id=\"template-contactform-submit\" name=\"template-contactform-submit\" value=\"submit\">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div><!-- .postcontent end -->



        </div>

    </div>


{% endblock %}


{% block scripts %}
    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js\"></script>

    <script type=\"text/javascript\">

        \$('#google-map').gMap({

            address: 'Bamako, Mali',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: \"Melbourne, Australia\",
                    html: '<div style=\"width: 300px;\"><h4 style=\"margin-bottom: 8px;\">Hi, we\\'re <span>Nextscenes</span></h4><p class=\"nobottommargin\">we re an online multilingual platform for creative writing where writers allow readers to help them propose the next scene of a story or write their own stories.</p></div>',
                    icon: {
                        image: \"{{ absolute_url(asset('assets/front/images/icons/map-icon-red.png')) }}\",
                        iconsize: [32, 39],
                        iconanchor: [13,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });

    </script>
{% endblock %}
", "contact.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\contact.html.twig");
    }
}
