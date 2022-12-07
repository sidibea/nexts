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

/* home/index.html.twig */
class __TwigTemplate_171d6b76e4cea1bb879f64f4af9a310a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        // line 5
        echo "
    <!--BANNER START-->
    <div class=\"kode-banner\">
        <ul class=\"bxslider\">
            <li>
                <img src=\"images/banner-1.png\" alt=\"\">
                <div class=\"kode-caption-2\">
                    <h5>Do you want to write a book...?</h5>
                    <h5>Or Help others finish their book ?</h5>
                    <div class=\"caption-btns\">
                        <a href=\"#\">See More</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <div class=\"search-section\">
        <div class=\"container\">
            <!-- Nav tabs -->


            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"Basic\">
                    <div class=\"form-container\">
                        <div class=\"row\">
                            <div class=\"col-md-8 col-sm-4\">
                                <input type=\"text\" placeholder=\"Search here\">
                            </div>

                            <div class=\"col-md-3 col-sm-12\">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 48
        echo "    <!--BOOK GUIDE SECTION START-->
    <section>
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Welcome to Nextscenes !</h2>
                <p>Nextscenes® is an online multilingual platform for creative writing, where writers allow readers to help them propose the next scene of a story or write their own stories</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>

            <div class=\"row\">
                <div class=\"section-heading-1\">
                    <h2>Nextscenes®. Unleash your creative abilities. Tell Your Stories.</h2>
                    <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
                </div>
            </div>

            <!--SECTION CONTENT END-->
            <div class=\"row\">
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["call"]) || array_key_exists("call", $context) ? $context["call"] : (function () { throw new RuntimeError('Variable "call" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 68
            echo "                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"kode-service-3\">
                            <i class=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "icon", [], "any", false, false, false, 70), "html", null, true);
            echo "\"></i>
                            <h3><a href=\"#\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</a></h3>
                            <p> ";
            // line 72
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 72), 0, 110), "html", null, true);
            echo "... </p>
                            <a href=\"#\" class=\"read-more\">Read More</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </div>
        </div>
    </section>
    <!--BOOK GUIDE SECTION END-->
    <!--TOP SELLERS SECTION START-->
    <section class=\"lib-categories-section\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1 dark-sec\">
                <h2>Our Top trending forums</h2>
                <p>Here are some of the top trending forums that are available.</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\MainController::forumSlider"));
        // line 92
        echo "
        </div>
    </section>
    <!--TOP SELLERS SECTION END-->

    <!--VIDEO SECTION END-->
    <!--BEST SELLER SLIDER SECTION START-->
    <section class=\"lib-papular-books\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2> Our Author of the month</h2>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"kode-author kode-author-2\">
                        <a href=\"#\"><img src=\"images/author.png\" alt=\"\"></a>
                        <div class=\"kode-caption\">
                            <h4>Sekou Assane</h4>
                            <p>Authors</p>
                            <div class=\"social-icon\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <h2>About the Author</h2>
                    <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>

                </div>
            </div>
        </div>
    </section>
    <!--BEST SELLER SLIDER SECTION END-->

    <!--TOP AUTHOR START-->
    <section class=\"kode-lib-team-member\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Our Top Authors</h2>
                <p>Here are some of the Top Authors that are available in Books Library</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 144
            echo "                <div class=\"lib-authors\">
                    <div class=\"social-icons\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                        </ul>
                    </div>
                    <img src=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["a"], "imageFile"), "html", null, true);
            echo "\"/>
                    <div class=\"kode-caption\">
                        <h4>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 155), "html", null, true);
            echo "</h4>
                        <p>Author</p>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
        </div>
    </section>
    <!--BEST SELLER SLIDER SECTION START-->
    <section id=\"popularstories\" class=\"lib-papular-books\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Most Popular stories, Podcast & Videos</h2>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <div class=\"row\">
                <!--SECTION CONTENT END-->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active col-md-4 col-sm-3\">
                        <a href=\"#book1\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">

                                <img src=\"images/papular-books2.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3\">
                        <a href=\"#book2\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3\">
                        <a href=\"#book3\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books4.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3\">
                        <a href=\"#book4\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books5.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3 visible-lg visible-md\">
                        <a href=\"#book5\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books6.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3 visible-lg visible-md\">
                        <a href=\"#book6\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books7.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"book1\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Engaging Imagination</h2>
                                <h4>Gillian Judson</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>When asked what they want colleges to emphasize most, employers didn’t put science, computing, math, or business management first. According to 2013 employer survey, 95% of employers give hiring preference to college graduates with skills that will enable them to contribute to innovation in the workplace. that will enable them to contribute to innovation in the workplace in the city town of the lost vallies.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book2\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books11.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Deception</h2>
                                <h4>John M Fluid</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>The world's most infamous hacker offers an insider's view of the low-tech threats to high-tech security. Kevin Mitnick's exploits as a cyber-desperado and fugitive form one of the most exhaustive FBI manhunts in history and have spawned dozens of articles, books, films, and documentaries. Since his release from federal prison, in 1998 that will enable them to contribute to innovation in the workplace</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book3\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books22.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Last Days</h2>
                                <h4>Adam Nevill</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Last Days (winner of the British Fantasy Award for Best Horror Novel of the Year) by Adam Nevill is a Blair Witch style novel in which a documentary film-maker undertakes the investigation of a dangerous. When guerrilla documentary maker, Kyle Freeman, is asked to shoot a film on the notorious cult known as the Temple of the Last Days that will enable them to contribute to innovation in the workplace</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book4\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books33.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Catching Fire</h2>
                                <h4>Suzanne Collin</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Against all odds, Katniss Everdeen has won the annual Hunger Games with fellow district tribute Peeta Mellark. But it was a victory won by defiance of the Capitol and their harsh rules. Katniss and Peeta should be happy. After all, they have just won for themselves and their families a life of safety and plenty that will enable them to contribute to innovation in the workplace families a life of safety.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book5\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books44.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>The Fire of Life</h2>
                                <h4>Runshide </h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>“You’ve reached the age at which people in this family cross the border into the magical world. It’s your turn for an adventure—yes, it’s finally here!” So says Haroun to his younger brother, twelve-year-old Luka. The adventure begins one beautiful starry night in the land of Alifbay, when Luka’s father, Rashid that will enable them to contribute to innovation in the workplace families a life of safety.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book6\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books55.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>New Moon</h2>
                                <h4>Stephenie Meyer</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Legions of readers entranced by Twilight are hungry for more and they won't be disappointed. In New Moon, Stephenie Meyer delivers another irresistible combination of romance and suspense with a supernatural twist. The \"star-crossed\" lovers theme continues as Bella and Edward find themselves facing new obstacles that will enable them to contribute to innovation in the workplace families a life of safety.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BEST SELLER SLIDER SECTION END-->
    <!--TESTIMONIALS END-->
    <!--COUNT UP SECTION START-->
    <div class=\"lib-count-up-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">21</span>
                        <p>Authors</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">8589</span>
                        <p>No of Storyline</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">458</span>
                        <p>No of Scenes</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">750</span>
                        <p>No of Proposed scenes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--COUNT UP SECTION END-->

    <!--FROM THE BLOG SECTION END-->
    <!--GIFT CARD SECTION START-->
    <section class=\"lib-textimonials\">
        <div class=\"container\">
            <!--SECTION HEADING START-->
            <div class=\"section-heading-1 dark-sec\">
                <h2>What they think about us ? </h2>
                <p>What our audience say about us, their reviews and comments</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <!--SECTION HEADING END-->
            <div class=\"owl-testimonials owl-theme\">
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>I loved thrift books! It's refreshing to buy discounted books and have them shipped quickly. I could afford to buy 3 copies to hand out to friends also interested in the topic. Thank you!! Read more</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials1.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>You have great prices and the books are in the shape as stated. Although it takes so long for them to get to their destination. I have been ordering for years and get great books in the shape said.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials-img4.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>I have made many orders with Thrift Books. I always get exactly what I order in a timely manner at a great price. I have had to contact the customer service team once.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials-img3.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>I couldn't believe the prices for such great books, at no shipping! I am going to be a good customer at your store! And, I am telling my Facebook friends about.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials-img2.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>ordered 14 books, received 14 books within a week. very happy with customer support and with the receipt of books. Keep It Up Good Guide we love you the best books library available today.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/writer2.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>Thrift Books is the absolute best book seller on the Internet!! Their selection is marvelous, price/shipping unbeatable and timely service is outstanding.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/writer3.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
            </div>
        </div>
    </section>



    <!--BECOME A MEMBER END-->
    <!--NEWSLETTERS SECTION START-->
    <section class=\"kode-newsletters-2\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Subscribe Our Newsletter</h2>
                <p>Subscribe here with your email us and get up to date.</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <!--SECTION CONTENT END-->
            <div class=\"newsletters-container\">
                <div class=\"row\">
                    <div class=\"col-md-9 col-sm-8\">
                        <div class=\"input-container\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <input type=\"text\" placeholder=\"Subscribe us\">
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-4\">
                        <button>Subscribe<i class=\"fa fa-paper-plane\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--NEWSLETTERS SECTION END-->
    <section class=\"lib-contact-section\">
        <div class=\"location-text\">
            <i class=\"fa fa-map-marker\"></i>
            <h2>Baco Djicoroni ACI <br/> en face du Lycée Soundiata</h2>
            <p>Rue: 123 Porte: 930 BPE: 3001</p>
            <span><i class=\"fa fa-phone\"></i>+223 74 14 15 14</span>
        </div>
        <div class=\"kode-thumb\">

        </div>
        <div class=\"map-canvas\" id=\"map-canvas\"></div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 161,  252 => 155,  247 => 153,  236 => 144,  232 => 143,  179 => 92,  177 => 90,  162 => 77,  151 => 72,  147 => 71,  143 => 70,  139 => 68,  135 => 67,  114 => 48,  107 => 47,  60 => 5,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block slider %}

    <!--BANNER START-->
    <div class=\"kode-banner\">
        <ul class=\"bxslider\">
            <li>
                <img src=\"images/banner-1.png\" alt=\"\">
                <div class=\"kode-caption-2\">
                    <h5>Do you want to write a book...?</h5>
                    <h5>Or Help others finish their book ?</h5>
                    <div class=\"caption-btns\">
                        <a href=\"#\">See More</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <div class=\"search-section\">
        <div class=\"container\">
            <!-- Nav tabs -->


            <!-- Tab panes -->
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"Basic\">
                    <div class=\"form-container\">
                        <div class=\"row\">
                            <div class=\"col-md-8 col-sm-4\">
                                <input type=\"text\" placeholder=\"Search here\">
                            </div>

                            <div class=\"col-md-3 col-sm-12\">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <!--BOOK GUIDE SECTION START-->
    <section>
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Welcome to Nextscenes !</h2>
                <p>Nextscenes® is an online multilingual platform for creative writing, where writers allow readers to help them propose the next scene of a story or write their own stories</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>

            <div class=\"row\">
                <div class=\"section-heading-1\">
                    <h2>Nextscenes®. Unleash your creative abilities. Tell Your Stories.</h2>
                    <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
                </div>
            </div>

            <!--SECTION CONTENT END-->
            <div class=\"row\">
                {% for c in call %}
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"kode-service-3\">
                            <i class=\"{{ c.icon }}\"></i>
                            <h3><a href=\"#\">{{ c.title }}</a></h3>
                            <p> {{ c.description | slice(0, 110)}}... </p>
                            <a href=\"#\" class=\"read-more\">Read More</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    <!--BOOK GUIDE SECTION END-->
    <!--TOP SELLERS SECTION START-->
    <section class=\"lib-categories-section\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1 dark-sec\">
                <h2>Our Top trending forums</h2>
                <p>Here are some of the top trending forums that are available.</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            {{ render(controller(
                'App\\\\Controller\\\\MainController::forumSlider',
            )) }}
        </div>
    </section>
    <!--TOP SELLERS SECTION END-->

    <!--VIDEO SECTION END-->
    <!--BEST SELLER SLIDER SECTION START-->
    <section class=\"lib-papular-books\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2> Our Author of the month</h2>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"kode-author kode-author-2\">
                        <a href=\"#\"><img src=\"images/author.png\" alt=\"\"></a>
                        <div class=\"kode-caption\">
                            <h4>Sekou Assane</h4>
                            <p>Authors</p>
                            <div class=\"social-icon\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <h2>About the Author</h2>
                    <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>

                </div>
            </div>
        </div>
    </section>
    <!--BEST SELLER SLIDER SECTION END-->

    <!--TOP AUTHOR START-->
    <section class=\"kode-lib-team-member\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Our Top Authors</h2>
                <p>Here are some of the Top Authors that are available in Books Library</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            {% for a in authors %}
                <div class=\"lib-authors\">
                    <div class=\"social-icons\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                        </ul>
                    </div>
                    <img src=\"{{ vich_uploader_asset(a, 'imageFile') }}\"/>
                    <div class=\"kode-caption\">
                        <h4>{{ a.name }}</h4>
                        <p>Author</p>
                    </div>
                </div>

            {% endfor %}

        </div>
    </section>
    <!--BEST SELLER SLIDER SECTION START-->
    <section id=\"popularstories\" class=\"lib-papular-books\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Most Popular stories, Podcast & Videos</h2>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <div class=\"row\">
                <!--SECTION CONTENT END-->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active col-md-4 col-sm-3\">
                        <a href=\"#book1\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">

                                <img src=\"images/papular-books2.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3\">
                        <a href=\"#book2\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3\">
                        <a href=\"#book3\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books4.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3\">
                        <a href=\"#book4\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books5.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3 visible-lg visible-md\">
                        <a href=\"#book5\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books6.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                    <li role=\"presentation\" class=\"col-md-4 col-sm-3 visible-lg visible-md\">
                        <a href=\"#book6\" role=\"tab\" data-toggle=\"tab\">
                            <div class=\"lib-papular-thumb\">
                                <img src=\"images/papular-books7.png\" alt=\"\">
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"book1\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Engaging Imagination</h2>
                                <h4>Gillian Judson</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>When asked what they want colleges to emphasize most, employers didn’t put science, computing, math, or business management first. According to 2013 employer survey, 95% of employers give hiring preference to college graduates with skills that will enable them to contribute to innovation in the workplace. that will enable them to contribute to innovation in the workplace in the city town of the lost vallies.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book2\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books11.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Deception</h2>
                                <h4>John M Fluid</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>The world's most infamous hacker offers an insider's view of the low-tech threats to high-tech security. Kevin Mitnick's exploits as a cyber-desperado and fugitive form one of the most exhaustive FBI manhunts in history and have spawned dozens of articles, books, films, and documentaries. Since his release from federal prison, in 1998 that will enable them to contribute to innovation in the workplace</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book3\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books22.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Last Days</h2>
                                <h4>Adam Nevill</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Last Days (winner of the British Fantasy Award for Best Horror Novel of the Year) by Adam Nevill is a Blair Witch style novel in which a documentary film-maker undertakes the investigation of a dangerous. When guerrilla documentary maker, Kyle Freeman, is asked to shoot a film on the notorious cult known as the Temple of the Last Days that will enable them to contribute to innovation in the workplace</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book4\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books33.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>Catching Fire</h2>
                                <h4>Suzanne Collin</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Against all odds, Katniss Everdeen has won the annual Hunger Games with fellow district tribute Peeta Mellark. But it was a victory won by defiance of the Capitol and their harsh rules. Katniss and Peeta should be happy. After all, they have just won for themselves and their families a life of safety and plenty that will enable them to contribute to innovation in the workplace families a life of safety.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book5\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books44.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>The Fire of Life</h2>
                                <h4>Runshide </h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>“You’ve reached the age at which people in this family cross the border into the magical world. It’s your turn for an adventure—yes, it’s finally here!” So says Haroun to his younger brother, twelve-year-old Luka. The adventure begins one beautiful starry night in the land of Alifbay, when Luka’s father, Rashid that will enable them to contribute to innovation in the workplace families a life of safety.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"book6\">
                        <div class=\"lib-papular\">
                            <div class=\"kode-thumb\">
                                <img src=\"images/papular-books55.png\" alt=\"\">
                            </div>
                            <div class=\"kode-text\">
                                <h2>New Moon</h2>
                                <h4>Stephenie Meyer</h4>
                                <div class=\"rating\">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Legions of readers entranced by Twilight are hungry for more and they won't be disappointed. In New Moon, Stephenie Meyer delivers another irresistible combination of romance and suspense with a supernatural twist. The \"star-crossed\" lovers theme continues as Bella and Edward find themselves facing new obstacles that will enable them to contribute to innovation in the workplace families a life of safety.</p>
                                <div class=\"lib-price\">

                                    <a href=\"#\">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BEST SELLER SLIDER SECTION END-->
    <!--TESTIMONIALS END-->
    <!--COUNT UP SECTION START-->
    <div class=\"lib-count-up-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">21</span>
                        <p>Authors</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">8589</span>
                        <p>No of Storyline</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">458</span>
                        <p>No of Scenes</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"count-up\">
                        <span class=\"counter circle\">750</span>
                        <p>No of Proposed scenes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--COUNT UP SECTION END-->

    <!--FROM THE BLOG SECTION END-->
    <!--GIFT CARD SECTION START-->
    <section class=\"lib-textimonials\">
        <div class=\"container\">
            <!--SECTION HEADING START-->
            <div class=\"section-heading-1 dark-sec\">
                <h2>What they think about us ? </h2>
                <p>What our audience say about us, their reviews and comments</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <!--SECTION HEADING END-->
            <div class=\"owl-testimonials owl-theme\">
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>I loved thrift books! It's refreshing to buy discounted books and have them shipped quickly. I could afford to buy 3 copies to hand out to friends also interested in the topic. Thank you!! Read more</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials1.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>You have great prices and the books are in the shape as stated. Although it takes so long for them to get to their destination. I have been ordering for years and get great books in the shape said.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials-img4.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>I have made many orders with Thrift Books. I always get exactly what I order in a timely manner at a great price. I have had to contact the customer service team once.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials-img3.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>I couldn't believe the prices for such great books, at no shipping! I am going to be a good customer at your store! And, I am telling my Facebook friends about.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/testimonials-img2.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>ordered 14 books, received 14 books within a week. very happy with customer support and with the receipt of books. Keep It Up Good Guide we love you the best books library available today.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/writer2.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class=\"item\">
                    <div class=\"lib-testimonial-content\">
                        <div class=\"kode-text\">
                            <p>Thrift Books is the absolute best book seller on the Internet!! Their selection is marvelous, price/shipping unbeatable and timely service is outstanding.</p>
                        </div>
                        <div class=\"kode-thumb\">
                            <img src=\"images/writer3.png\" alt=\"\">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class=\"title\">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
            </div>
        </div>
    </section>



    <!--BECOME A MEMBER END-->
    <!--NEWSLETTERS SECTION START-->
    <section class=\"kode-newsletters-2\">
        <div class=\"container\">
            <!--SECTION CONTENT START-->
            <div class=\"section-heading-1\">
                <h2>Subscribe Our Newsletter</h2>
                <p>Subscribe here with your email us and get up to date.</p>
                <div class=\"kode-icon\"><i class=\"fa fa-book\"></i></div>
            </div>
            <!--SECTION CONTENT END-->
            <div class=\"newsletters-container\">
                <div class=\"row\">
                    <div class=\"col-md-9 col-sm-8\">
                        <div class=\"input-container\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <input type=\"text\" placeholder=\"Subscribe us\">
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-4\">
                        <button>Subscribe<i class=\"fa fa-paper-plane\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--NEWSLETTERS SECTION END-->
    <section class=\"lib-contact-section\">
        <div class=\"location-text\">
            <i class=\"fa fa-map-marker\"></i>
            <h2>Baco Djicoroni ACI <br/> en face du Lycée Soundiata</h2>
            <p>Rue: 123 Porte: 930 BPE: 3001</p>
            <span><i class=\"fa fa-phone\"></i>+223 74 14 15 14</span>
        </div>
        <div class=\"kode-thumb\">

        </div>
        <div class=\"map-canvas\" id=\"map-canvas\"></div>
    </section>
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\home\\index.html.twig");
    }
}
