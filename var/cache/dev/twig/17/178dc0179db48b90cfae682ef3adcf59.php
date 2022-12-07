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

/* podcast/index.html.twig */
class __TwigTemplate_c227cf73d28225efe994b2f1dfc55206 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "podcast/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "podcast/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dark.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/swiper.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <!-- Music Specific Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/music.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <!-- / -->

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("one-page/css/et-line.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/css/fonts.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <!-- Bootstrap Switch CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/components/bs-switches.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <!-- Theme color -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/colors.php"), "html", null, true);
        echo "?color=ed215e\" type=\"text/css\" />

    <!-- Audio Player Plugin CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/css/mediaelement/mediaelementplayer.css"), "html", null, true);
        echo "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 31
        echo "    <section  id=\"slider\" class=\"slider-element swiper_wrapper \" style=\"background: #131722; \" data-effect=\"fade\" data-loop=\"true\" data-speed=\"1000\">
        <div style=\"margin-top: 20px\" class=\"swiper-container swiper-parent\">
            <div style=\"background-image: url(";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner.png"), "html", null, true);
        echo "); \" class=\"swiper-wrapper\">
                <div class=\"swiper-slide dark\">
                    <div class=\"container\">
                        <div  class=\"slider-caption \">
                            <div>
                                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_podcast_new");
        echo "\" style=\"top: 130px; left: 300px; position: relative\"  class=\"button button-rounded \" ><i class=\"icon-plus-sign\"></i>Submit your podcast</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide-bg\"></div>
                </div>

            </div>
            <div style=\"float: left\" class=\"slider-arrow-left bg-transparent\"><i class=\"icon-line-arrow-left\"></i></div>
            <div style=\"float: right\" class=\"slider-arrow-right bg-transparent\"><i class=\"icon-line-arrow-right\"></i></div>
        </div>
    </section>

    <!-- Slider
            ============================================= -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "    <div class=\"container clearfix\" style=\"z-index: 7;\">

        <div class=\"heading-block bottommargin-sm border-0 dark\">
            <h3 style=\"color: #000\">Latest podcasts</h3>
        </div>

        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>


    </div>


    <!-- Audio Player
\t============================================= -->
    <audio id=\"audio-player\" preload=\"none\" class=\"mejs__player\" controls data-mejsoptions='{\"defaultAudioHeight\": \"50\", \"alwaysShowControls\": \"true\"}' style=\"max-width:100%;\">
        <source src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/src/audios/nashe-si.mp3"), "html", null, true);
        echo "\" type=\"audio/mp3\">
    </audio>

    <!-- Default Track - onLoad
    ============================================= -->
    <div id=\"track-onload\" data-track=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/tracks/clean-clean.mp3"), "html", null, true);
        echo "\" data-poster=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/images/popular-songs/7.jpg"), "html", null, true);
        echo "\" data-title=\"Clean Clean\" data-singer=\"R Costello\"></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 206
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 207
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Audio player Plugin
    ============================================= -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("demos/music/js/mediaelement/mediaelement-and-player.js"), "html", null, true);
        echo "\"></script>

    <script>

        // Custom Tab jQuery
        // jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
        // \tvar gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

        // \tif( gridContainerAvailable.length > 0 ) {
        // \t\tgridContainerAvailable.each( function(){
        // \t\t\tvar portfolioGrid = jQuery(this);

        // \t\t\tif( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
        // \t\t\t\tportfolioGrid.isotope('layout');
        // \t\t\t\tjQuery(window).trigger('resize');
        // \t\t\t\tportfolioGrid.addClass('tabs-enabled-grid-container');
        // \t\t\t}
        // \t\t});
        // \t}
        // });

        // Music playing Scripts
        var trackPlaying = '',
            audioPlayer = document.getElementById('audio-player');

        audioPlayer.addEventListener(\"ended\", function(){
            jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
        });

        audioPlayer.addEventListener(\"pause\", function(){
            jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
        });

        function changeAudio( sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true ) {
            var audio = \$(\"#audio-player\"),
                clickEl = jQuery('[data-track=\"'+sourceUrl+'\"]'),
                playerId = audio.closest('.mejs__container').attr('id'),
                playerObject = mejs.players[playerId];

            jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

            if( sourceUrl == trackPlaying ) {
                if (playerObject.node.paused) {
                    playerObject.play();
                    clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
                } else {
                    playerObject.pause();
                    clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
                }
                return true;
            }

            trackPlaying = sourceUrl;

            audio.attr( 'poster', posterUrl );
            audio.attr( 'title', trackTitle );

            jQuery('.mejs__layers').html('').html('<div class=\"mejs-track-artwork\"><img src=\"'+ posterUrl +'\" alt=\"Track Poster\" /></div><div class=\"mejs-track-details\"><h3>'+ trackTitle +'<br><span>'+ trackSinger +'</span></h3></div>');

            if( sourceUrl != '' ) {
                playerObject.setSrc( sourceUrl );
            }
            playerObject.pause();
            playerObject.load();

            if( playAudio == true ) {
                playerObject.play();
                jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
            }
        }

        jQuery('.track-list').on( 'click', function(){
            var audioTrack = jQuery(this).attr('data-track'), // Track url
                posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
                trackTitle = jQuery(this).attr('data-title'); // Track Title
            trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

            changeAudio( audioTrack, posterUrl, trackTitle, trackSinger );
            return false;
        });

        jQuery(window).on( 'load', function(){
            var trackOnload = jQuery('#track-onload');

            if( trackOnload.length > 0 ) {
                var audioTrack = trackOnload.attr('data-track'), // Track url
                    posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
                    trackTitle = trackOnload.attr('data-title'); // Track Title
                trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

                setTimeout( function(){
                    changeAudio( audioTrack, posterUrl, trackTitle, trackSinger, false );
                }, 500);
            }
        });

    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "podcast/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 211,  349 => 207,  342 => 206,  330 => 202,  322 => 197,  180 => 57,  173 => 56,  149 => 38,  141 => 33,  137 => 31,  130 => 30,  120 => 27,  114 => 24,  106 => 19,  100 => 16,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 8,  71 => 5,  67 => 4,  62 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/dark.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/swiper.css') }}\" type=\"text/css\" />

    <!-- Music Specific Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset('demos/music/music.css') }}\" type=\"text/css\" />
    <!-- / -->

    <link rel=\"stylesheet\" href=\"{{ asset('css/font-icons.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('one-page/css/et-line.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"{{ asset('demos/music/css/fonts.css') }}\" type=\"text/css\" />

    <!-- Bootstrap Switch CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/components/bs-switches.css') }}\" type=\"text/css\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <!-- Theme color -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/colors.php') }}?color=ed215e\" type=\"text/css\" />

    <!-- Audio Player Plugin CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('demos/music/css/mediaelement/mediaelementplayer.css') }}\">

{% endblock %}
{% block slider %}
    <section  id=\"slider\" class=\"slider-element swiper_wrapper \" style=\"background: #131722; \" data-effect=\"fade\" data-loop=\"true\" data-speed=\"1000\">
        <div style=\"margin-top: 20px\" class=\"swiper-container swiper-parent\">
            <div style=\"background-image: url({{ asset('images/banner.png') }}); \" class=\"swiper-wrapper\">
                <div class=\"swiper-slide dark\">
                    <div class=\"container\">
                        <div  class=\"slider-caption \">
                            <div>
                                <a href=\"{{ path('app_podcast_new') }}\" style=\"top: 130px; left: 300px; position: relative\"  class=\"button button-rounded \" ><i class=\"icon-plus-sign\"></i>Submit your podcast</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide-bg\"></div>
                </div>

            </div>
            <div style=\"float: left\" class=\"slider-arrow-left bg-transparent\"><i class=\"icon-line-arrow-left\"></i></div>
            <div style=\"float: right\" class=\"slider-arrow-right bg-transparent\"><i class=\"icon-line-arrow-right\"></i></div>
        </div>
    </section>

    <!-- Slider
            ============================================= -->

{% endblock %}

{% block content %}
    <div class=\"container clearfix\" style=\"z-index: 7;\">

        <div class=\"heading-block bottommargin-sm border-0 dark\">
            <h3 style=\"color: #000\">Latest podcasts</h3>
        </div>

        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"books-listing-4\">
                <div class=\"kode-thumb\">
                    <a href=\"#\"><img src=\"images/book.png\" alt=\"\"></a>
                </div>
                <div class=\"kode-text\">
                    <h3><a href=\"#\">Basic Time Management Course</a></h3>
                    <p>Sed ut perspiciatis</p>
                </div>
                <div class=\"book-price\">
                    <p>\$24.75</p>
                    <div class=\"rating\">
                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                </div>
                <a href=\"#\" class=\"add-to-cart\">Play now</a>
            </div>
        </div>


    </div>


    <!-- Audio Player
\t============================================= -->
    <audio id=\"audio-player\" preload=\"none\" class=\"mejs__player\" controls data-mejsoptions='{\"defaultAudioHeight\": \"50\", \"alwaysShowControls\": \"true\"}' style=\"max-width:100%;\">
        <source src=\"{{ asset('demos/music/src/audios/nashe-si.mp3') }}\" type=\"audio/mp3\">
    </audio>

    <!-- Default Track - onLoad
    ============================================= -->
    <div id=\"track-onload\" data-track=\"{{ asset('demos/music/tracks/clean-clean.mp3') }}\" data-poster=\"{{ asset('demos/music/images/popular-songs/7.jpg') }}\" data-title=\"Clean Clean\" data-singer=\"R Costello\"></div>

{% endblock %}

{% block scripts %}
    <script src=\"{{ asset('js/plugins.min.js') }}\"></script>

    <!-- Audio player Plugin
    ============================================= -->
    <script src=\"{{ asset('demos/music/js/mediaelement/mediaelement-and-player.js') }}\"></script>

    <script>

        // Custom Tab jQuery
        // jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
        // \tvar gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

        // \tif( gridContainerAvailable.length > 0 ) {
        // \t\tgridContainerAvailable.each( function(){
        // \t\t\tvar portfolioGrid = jQuery(this);

        // \t\t\tif( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
        // \t\t\t\tportfolioGrid.isotope('layout');
        // \t\t\t\tjQuery(window).trigger('resize');
        // \t\t\t\tportfolioGrid.addClass('tabs-enabled-grid-container');
        // \t\t\t}
        // \t\t});
        // \t}
        // });

        // Music playing Scripts
        var trackPlaying = '',
            audioPlayer = document.getElementById('audio-player');

        audioPlayer.addEventListener(\"ended\", function(){
            jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
        });

        audioPlayer.addEventListener(\"pause\", function(){
            jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
        });

        function changeAudio( sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true ) {
            var audio = \$(\"#audio-player\"),
                clickEl = jQuery('[data-track=\"'+sourceUrl+'\"]'),
                playerId = audio.closest('.mejs__container').attr('id'),
                playerObject = mejs.players[playerId];

            jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

            if( sourceUrl == trackPlaying ) {
                if (playerObject.node.paused) {
                    playerObject.play();
                    clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
                } else {
                    playerObject.pause();
                    clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
                }
                return true;
            }

            trackPlaying = sourceUrl;

            audio.attr( 'poster', posterUrl );
            audio.attr( 'title', trackTitle );

            jQuery('.mejs__layers').html('').html('<div class=\"mejs-track-artwork\"><img src=\"'+ posterUrl +'\" alt=\"Track Poster\" /></div><div class=\"mejs-track-details\"><h3>'+ trackTitle +'<br><span>'+ trackSinger +'</span></h3></div>');

            if( sourceUrl != '' ) {
                playerObject.setSrc( sourceUrl );
            }
            playerObject.pause();
            playerObject.load();

            if( playAudio == true ) {
                playerObject.play();
                jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
            }
        }

        jQuery('.track-list').on( 'click', function(){
            var audioTrack = jQuery(this).attr('data-track'), // Track url
                posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
                trackTitle = jQuery(this).attr('data-title'); // Track Title
            trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

            changeAudio( audioTrack, posterUrl, trackTitle, trackSinger );
            return false;
        });

        jQuery(window).on( 'load', function(){
            var trackOnload = jQuery('#track-onload');

            if( trackOnload.length > 0 ) {
                var audioTrack = trackOnload.attr('data-track'), // Track url
                    posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
                    trackTitle = trackOnload.attr('data-title'); // Track Title
                trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

                setTimeout( function(){
                    changeAudio( audioTrack, posterUrl, trackTitle, trackSinger, false );
                }, 500);
            }
        });

    </script>

{% endblock %}", "podcast/index.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\podcast\\index.html.twig");
    }
}
