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

/* howTo.html.twig */
class __TwigTemplate_bf4b786f51ebbb63bbea8781b5531af8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "howTo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "howTo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " How nextscene works ! ";
        
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
            <h2>How it works ?</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">how-nextscenes-works</li>
            </ol>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"content-wrap\">
    <div class=\"container\">
        <div style=\"width: 100%\" class=\"postcontent nobootommargin clearfix\">
            <div class=\"title-block\">
                <h3>HOW NEXTSCENES WORKS</h3>
            </div>

            <div class=\"row herald-posts row-eq-height\">
                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\" aria-expanded=\"true\" class=\"\">

                                    Principles
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse in\" aria-expanded=\"true\" style=\"\">
                            <div class=\"panel-body\">

                                <h3 class=\"h3\">Principles</h3>
                                <div class=\"justify\"><p><strong><font size=\"3\" face=\"courier new\">Basic Concept.</font></strong></p>
                                    <div><font size=\"3\" face=\"courier new\">NextScenes is a web-based content development system that aims to develop a content from a pool of ideas contributed by various creative minds. The platform attempts to provide forums for latent creative writers who may not otherwise be able to write a full book on their own. By expressing their views on story lines through the contributions of Story Bursts, potential writers are able to release all their latent creative energies and Nextscenes will harness the products of the worldÃ¢ÂÂs best creative minds into very compelling reading materials. All contributors, the Power Users, are required to participate under a pseudonym.</font></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><font size=\"3\" face=\"courier new\">Imagine a storyline for a best seller or a blockbuster being developed from the ideas of a group of individualsÃ¢ÂÂ interpretation of what the next scene should be! With a major goal of stimulating the imaginations of creatives and free thinkers, this is the future of group content development. &nbsp;Next Scenes will present an opportunity for a communal way of content development where creative minds get exposure to the imagination of other minds. This will definitely be an innovation towards the way scripts are written and ultimately how publications and media content are developed.</font></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><font size=\"3\" face=\"courier new\">Next Scenes also presents an opportunity for the average Joe with an imagination to become a contributor/co-writer to a publication or media content that will be produced and distributed. This also opens the door to make returns on your imagination regardless of who you are or what you do. Producers and publishers can now also create media for the people by the people! You can call this Democratic Entertainment!\"</font></div>
                                    <div><font size=\"3\" face=\"courier new\">The ultimate goal is to compile books from the best inputs from these different sources: inputs with the most compelling contents. The successful contributors, those contributors whose materials were adopted for the books, will also benefit from the sales of the books when they are eventually published but in proportion to their contributions. Contributions are made in the form of Story Bursts, which are the proposed logical follow-up events or activities to those preceding scenes that have already been validated. The audience, all registered users, will rate the Story Bursts and the materials with the highest ratings will be adopted for the books. Registration into Nextscenes.com is FREE. Rating of Story Bursts, while voluntary, is very essential.</font></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><strong><font size=\"3\" face=\"courier new\">Basic Principle</font></strong></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><font size=\"3\" face=\"courier new\">The principle behind Nextscenes is simple. The story in any book comprises of different scenes. As a story line unfolds, a Power User that wishes to contribute will propose what a subsequent scene should be in no more than 500 words. A Power User will not contribute more than fifty times in the course of a book. Power Users will register into the Forums of their interest and commence contributions upon registration. A Power User may register in more than one Forum. Each Forum represents a particular genre of story.</font></div></div>\t\t\t\t\t\t\t  </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\" class=\"collapsed\" aria-expanded=\"false\">How It Works</a>
                            </h4>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
                            <div class=\"panel-body\">

                                <h3 class=\"h3\">How It Works</h3>
                                <div class=\"justify\"><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"text-decoration: underline;\"><b><font face=\"courier new\" size=\"4\">Ways of Writing on NextScenes&nbsp;</font></b></span></p>
                                    <p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font face=\"courier new\" size=\"3\"><br></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font face=\"courier new\" size=\"3\">There are three ways of writing your stories on the NextScenes platform:</font></p>
                                    <p style=\"margin-bottom: 0px; text-align: justify; line-height: normal; min-height: 14px;\"><font face=\"courier new\" size=\"3\"><br></font></p>
                                    <p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font face=\"courier new\" size=\"3\">First Register on nextscenes.com as:</font></p><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">a.</span><span class=\"Apple-tab-span\" style=\"font-family: 'courier new'; white-space: pre;\">\t</span><span style=\"font-family: 'courier new'; background-color: transparent;\">Regular User (with Read Only access)</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">b.</span><span class=\"Apple-tab-span\" style=\"font-family: 'courier new'; white-space: pre;\">\t</span><span style=\"font-family: 'courier new'; background-color: transparent;\">Power User (with Read and Write access)</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">c.</span><span class=\"Apple-tab-span\" style=\"font-family: 'courier new'; white-space: pre;\">\t</span><span style=\"font-family: 'courier new'; background-color: transparent;\">Moderator (Read/Write/Moderator Access). (Coming soon) &nbsp; &nbsp;&nbsp;</span></font></p></blockquote><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><br></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><br></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"4\">I.<span class=\"Apple-tab-span\" style=\"white-space: pre;\">\t</span>Collaborative writing</font></b><span style=\"font-size: medium; font-family: 'courier new'; background-color: transparent;\"> â This form of writing is for those writers who do not have the stamina to creatively start, develop and finish their own stories.</span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">With this method you can begin your story with a scene and invite other readers and writers to contribute to the development of your story either by suggesting follow up scenes to yours or voting for the scene that should serve as a follow up to yours.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">This method of writing is for the writer who is willing to surrender some creative control for the sake of literary innovation. The storyline should be moderated.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">Contact </span><a href=\"mailto:info@nextscenes.com\" style=\"font-family: 'courier new';\"><span style=\"text-decoration: underline ; color: #0079cd\">info@nextscenes.com</span></a><span style=\"font-family: 'courier new'; background-color: transparent;\"> for Moderator access.</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"3\"><br></font></b></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"4\">II.<span class=\"Apple-tab-span\" style=\"white-space: pre;\">\t</span>Group writing</font></b><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"4\"> â</font><font size=\"3\"> Let us say you have a group of friends who are passionate about writing and are willing to collectively write a book together but you will not all be in the same physical space during this period.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Group writing on NextScenes allows you to create a closed group where each member can make contributions towards a collective project.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Go to âCreate New Storyâ, enter the required information and click âProceed\"</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Under âSelect Visibility/Group Story Projectâ, select âGroup Story Projectâ, under âEnter Contributorâs Emailâ, click âAdd Userâ and invite members of your group.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Select category of Storyline.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Write your story into the text editor box.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"3\"><br></font></b></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"4\">III.<span class=\"Apple-tab-span\" style=\"white-space: pre;\">\t</span>Solo Writing</font></b><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"4\"> â</font><font size=\"3\"> With this method you can write down your own ideas at your own pace.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Go to âCreate New Storyâ, enter the required information and click âProceedâ</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">Under âSelect Visibility/Group Story Projectâ, select âMake Publicâ or âMake Privateâ.</span><span style=\"font-family: 'courier new'; background-color: transparent;\">&nbsp;</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Select category of Storyline</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Write your story into the text editor box.</font></span></p>
                                    <p style=\"margin-bottom: 0px; font-size: 12px; line-height: normal; font-family: Calibri; min-height: 14px;\"><br></p><p><b><font face=\"courier new\" size=\"4\"><u><br></u></font></b></p><p><b><font face=\"courier new\" size=\"4\"><u>The Process</u>.</font></b><br></p><p><font size=\"3\" face=\"courier new\"><strong>The Moderator will provide a topic or theme for any particular Genre or Forum. The details of the topic will set out the storyline and members of the public will determine how the storyline will develop</strong>.</font></p>
                                    <p><font size=\"3\" face=\"courier new\">The topic will be live online for all Users and Power <strong>Users </strong>to view but only Power Users will contribute to the storyline.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">A Power User will be expected to read the previous materials and propose a âBurstâ that will constitute a possible sequence to the previous scene but will still blend into the entire storyline line.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">Each âBurstâ should not be more than 500 words.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">All subscribers will be able to rate each âBurstâ on the scale of 1 to 10.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">The âBurstsâ with the highest ratings will be adopted for the storyline on a â the first received, the first to be adoptedâ rule.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">When a particular scene has been completed, it will form completed part of the storyline and the next scene will become active to receive submissions.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">And so on, and so forth, â¦.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">At the instance of the Moderator, the collected materials will be grouped in chapters, etc.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">The Moderator will determine the point at which the story will end.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">At the end of the exercise, the materials will be edited by professional editors and published as eBook or physical books.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">All recognized contributors to the final materials used for the book will be compensated from the proceeds of the sale of the books according to the previously laid down rules.</font></p></div>\t\t\t\t\t\t\t  </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\" class=\"collapsed\" aria-expanded=\"false\">FAQ</a>
                            </h4>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
                            <div class=\"panel-body\">

                                <h3 class=\"h3\">Faq</h3>
                                <div class=\"justify\"><p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">What
is Next Scenes?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Next Scenes is a web-based platform that
allows writers to create literary content solely or collaboratively.</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Writers can either writer their books
privately or create a scene, make it public and allow for other writers to
suggest scenes to build up a story.</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">It's called collaborative writing and it
can be quite fun!</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Why
Next Scenes?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">It is popular opinion that other forms
media are suppressing the art of writing so Next Scenes was created simply to
make writing and reading cool again by bringing an edge to it. </font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">With Next Scenes you do not have to be
taken away from your love of writing by your mobile device because you can
write on you mobile device!</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Also Next Scenes wants the writer to
concentrate on writing that is why we can publish your books and distribute
them through the Next Scenes store and other retailers.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">I am
not an English speaker and I cannot write in English</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">No problem. Next Scenes is a multi lingual
platform and currently works can be created in English, French and Spanish.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">What
do I get as an author if my book is published?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Next Scenes is here to turn aspiring
authors into published author and get their works distributed and monetized.</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Authors keep 75% on each sale.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Can
authors freely price their works?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Of course! However we will provide a guide
for what we think will be a reasonable price because we want books to be
affordable but the final say rests on the shoulders of the owner of the work.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Where
will my books be sold?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Through the Next Scenes store, books are
made available worldwide.</font></span></p>

                                    <p class=\"MsoNormal\"><font size=\"3\" face=\"courier new\"><span lang=\"EN-GB\"></span><b>I</b><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">
already have my book written, can I sell on the Next Scenes store?</span></b></font></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Yes you can. Even if you did not write on
our platform we can still provide publishing and distribution services for 25%
of the sale of each unit.</font></span></p>



                                    <p class=\"MsoNormal\"><font size=\"3\" face=\"courier new\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">How
does Next Scenes protect authors from piracy?</span></b><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">&nbsp;</span></b>

                                        </font></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">By applying existing laws and anti piracy regulations.</font></span></p><p class=\"MsoNormal\"><font size=\"3\" face=\"courier new\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">Are
there any restrictions on content that can be published?</span></b><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">&nbsp;</span></b>

                                        </font></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Yes, the contents should be free of distractions, allowing users to concentrate on the principal messages of the platform.</font></span></p><p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Can
Next Scenes publish my books in hard copies?</font></span></b></p><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\"><div><span lang=\"EN-GB\">Yes,&nbsp;</span><span lang=\"EN-GB\">Next Scenes publish my books in hard copies.</span></div><div style=\"font-weight: bold;\"><b><span lang=\"EN-GB\"><br></span></b><b><span lang=\"EN-GB\">I
need to promote my books too can Next Scenes help?</span></b></div></font></span><div><font size=\"3\" face=\"courier new\"><br></font></div><font size=\"3\" face=\"courier new\">Yes,&nbsp;<span lang=\"EN-GB\">Next Scenes can help you to promote your books.</span></font><div><b><u><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\"><br></font></span></u></b></div><div><font size=\"3\" face=\"courier new\"><b><u><span lang=\"EN-GB\">Publishing
Terms and Conditions</span></u></b>



                                        </font><p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">The term of this agreement will begin upon your acceptance of it and
will continue until you terminate it or we terminate it.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes reserves the right to terminate this agreement and authors'
access to their account at any time. Authors will be notified upon termination.
</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Following termination or suspension, Next Scenes may fulfill any
customer orders for digital books pending as of the date of termination or
suspension and may continue to keep digital copies of such books to provide
continuing access to or re-downloads of those books or otherwise support customers
who have purchased a digital book prior to termination or suspension.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors are entitled to terminate at any time by providing a notice of
termination in which event Next Scenes will discontinue with the listing and
selling of their books within 7 working days from notice of termination. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><u><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Digital Book
Distribution Rights</font></span></u></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">1. DELIVERIES,
ACCEPTANCE AND WITHDRAWAL</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Delivery</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must provide Next Scenes with the digital books at their own
expense they wish to distribute through the Next Scenes platform.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must deliver all electronic files free and clear of viruses,
worms and other potentially harmful or disrupting code.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Content Requirements</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must ensure that all digital books content is non-offensive at
the time of submission.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes is entitled to remove or modify the metadata, cover art and
product description authors provide for their digital books for any reason,
including if it is determined that it does not comply with content
requirements. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may not include in any digital book any advertisements or other
content that is primarily intended to advertise or promote products or
services. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must also ensure that all metadata provided to Next Scenes is
current, complete, and accurate.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Rejection</font></span></b></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US;mso-bidi-font-weight:bold\">Next Scenes is </span><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\">entitled to
determine what content will be accepted and distributed through the platform at
our sole discretion. </span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If we request that you provide additional information relating to your
digital books, such as information confirming that you have all rights required
to permit our distribution of the digital books, you will promptly provide the
information requested, and you represent and warrant that any information and
documentation you provide to us in response to such a request will be current,
complete, and accurate. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">You authorize us, directly or through third parties, to make any
inquiries we consider appropriate to verify your rights to permit our
distribution of the digital books and the accuracy of the information or
documentation you provide to us with respect to those rights.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Withdrawal</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may withdraw their digital books from further sale on the
platform at any time on a 7 working days advance notice by following the
current platform procedures for digital book withdrawal or un-publishing. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may fulfill any customer orders completed through the date
the digital books are available for sale. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Reformatting</font></span></b></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may, in our discretion, reformat digital books and authors
agree that unintentional errors may occur during this process.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If such errors do occur, authors may remove the affected Digital Book
from further sale on the platform.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may also, in our discretion, correct any errors existing in
a digital book file as it is delivered to us</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">2. MARKETING AND
PROMOTION</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Marketing and Promotion</span></b><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes will have sole discretion in determining all marketing and
promotions efforts related to the sale of digital books through the platform.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may, without limitation, promote digital books by making
certain portions of the books available to prospective customers without charge
and allow prospective customers to view certain portion of the book in relation
to search queries.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must acknowledge that Next Scenes holds no obligation to market,
distribute, or offer for sale any digital book, or to continue marketing;
distributing or selling a digital book after it has commenced doing so.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">3. PRICING</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Authors' List Price</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors will be solely responsible for pricing their works.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may also change their list price and such changes will be
effective within 7 working days.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Currency Conversion</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may sell digital book in other countries using foreign
currencies.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">In such event, the submitted list price will be converted to another
currency at an exchange rate that we shall determine.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may periodically update the converted list price to reflect
current exchange rates. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">The converted list price in the sale currency will serve as the author's
list price when we offer and sell the digital book in the sale currency. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors' royalties will also be calculated based on the converted list
price in the sale currency.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Customer Prices</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes is solely responsible for processing payments, payment
collection and related customer service, and will have sole ownership and
control of all customer data obtained in relation to the platform.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">4. ROYALTIES AND
PAYMENTS</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Royalties</font></span></b></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If Authors are not in breach of their obligations as stated under this
agreement, Next Scenes will pay the applicable royalty of 75%, net of refunds,
bad debt, and any VAT, sales or other taxes charged to a customer or applied
with respect to sales to a customer.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">When Do We Pay You</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes will pay royalties due on digital book sales approximately
90 days following the end of the calendar month during which the sales were
made. At the time of payment, we will make available to you an online report
detailing sales of digital books and corresponding royalties.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Payment Currencies</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If Authors change their payment currency, the change will be effective
on the first day of the following calendar month (unless we make an earlier
period available). </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If Next Scenes pay in a currency other than the sale currency, the
royalties due from the sale currency will be converted to the payment currency
at an exchange rate we determine, which will be inclusive of all fees and
charges for the conversion.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Payment Policies<br></font></span></b></p><p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"></span></b><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\">Next Scenes may require the provision of certain information or to
register a valid bank account into the author's Next Scenes account in order to
receive royalty payments, in which case we will not be obligated to make royalty
payments until this has been done. </span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may establish other payment policies from time to time, such
as minimum payment amounts for different payment methods and check fees.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Payment Disputes</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may not bring a suit or other legal proceeding against Next
Scenes with regard to any statement unless you it is brought within six months
after the date the statement is available. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Any such proceeding will be limited to a determination of the amount of
monies, if any; payable by Next Scenes to the author for the accounting periods
in question, and the author's sole remedy will be the recovery of those monies
with no interest.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">5. FORCE MAJEURE</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes will not be liable to authors for any failure or delay in
the performance of its obligations under this agreement caused by any event or
circumstance beyond its control, including, but not limited to,
denial-of-service attacks, insurrection, fires, flood, storm, explosions, acts
of God, war, terrorism, and labor conditions.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">6.
REPRESENTATIONS, WARRANTIES AND INDEMNITIES</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">You represent and warrant that: </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(a) You have the full right, power and authority to enter into and fully
perform this Agreement and will comply with the terms of this Agreement; </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(b) Prior to you or your designee's delivery of any content, you will
have obtained all rights that are necessary for the exercise the rights granted
under this Agreement; </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(c) Neither the exercise of the rights authorized under this Agreement
nor any materials embodied in the content nor its sale or distribution as
authorized in this Agreement will violate or infringe upon the intellectual
property, proprietary or other rights of any person or entity, including,
without limitation, contractual rights, copyrights, trademarks, common law
rights, rights of publicity, or privacy, or moral rights, or contain defamatory
material or violate any laws or regulations of any jurisdiction; </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(d) You will ensure that all Digital Books delivered under the Next
Scenes platform comply with the technical delivery specifications provided by
us</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(e) You will be solely responsible for accounting and paying any
co-owners or co-administrators of any Digital Book or portion thereof any
royalties with respect to the uses of the content and their respective shares,
if any, of any monies payable under this Agreement. To the fullest extent
permitted by applicable law, you will indemnify, defend and hold Next Scenes,
its officers, directors, employees, affiliates, subcontractors and assigns
harmless from and against any loss, claim, liability, damage, action or cause
of action (including reasonable attorneys' fees) that arises from any breach of
your representations, warranties or obligations set forth in this Agreement. We
will be entitled, at our expense, to participate in the defense and settlement
of the claim or action with counsel of our own choosing.</font></span></p></div></div>\t\t\t\t\t\t\t  </div>
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

    public function getTemplateName()
    {
        return "howTo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  94 => 19,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} How nextscene works ! {% endblock %}

{% block slider %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    <div class=\"kode-inner-banner\">
        <div class=\"kode-page-heading\">
            <h2>How it works ?</h2>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\">how-nextscenes-works</li>
            </ol>
        </div>
    </div>
{% endblock %}

{% block content %}
<div class=\"content-wrap\">
    <div class=\"container\">
        <div style=\"width: 100%\" class=\"postcontent nobootommargin clearfix\">
            <div class=\"title-block\">
                <h3>HOW NEXTSCENES WORKS</h3>
            </div>

            <div class=\"row herald-posts row-eq-height\">
                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\" aria-expanded=\"true\" class=\"\">

                                    Principles
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse in\" aria-expanded=\"true\" style=\"\">
                            <div class=\"panel-body\">

                                <h3 class=\"h3\">Principles</h3>
                                <div class=\"justify\"><p><strong><font size=\"3\" face=\"courier new\">Basic Concept.</font></strong></p>
                                    <div><font size=\"3\" face=\"courier new\">NextScenes is a web-based content development system that aims to develop a content from a pool of ideas contributed by various creative minds. The platform attempts to provide forums for latent creative writers who may not otherwise be able to write a full book on their own. By expressing their views on story lines through the contributions of Story Bursts, potential writers are able to release all their latent creative energies and Nextscenes will harness the products of the worldÃ¢ÂÂs best creative minds into very compelling reading materials. All contributors, the Power Users, are required to participate under a pseudonym.</font></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><font size=\"3\" face=\"courier new\">Imagine a storyline for a best seller or a blockbuster being developed from the ideas of a group of individualsÃ¢ÂÂ interpretation of what the next scene should be! With a major goal of stimulating the imaginations of creatives and free thinkers, this is the future of group content development. &nbsp;Next Scenes will present an opportunity for a communal way of content development where creative minds get exposure to the imagination of other minds. This will definitely be an innovation towards the way scripts are written and ultimately how publications and media content are developed.</font></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><font size=\"3\" face=\"courier new\">Next Scenes also presents an opportunity for the average Joe with an imagination to become a contributor/co-writer to a publication or media content that will be produced and distributed. This also opens the door to make returns on your imagination regardless of who you are or what you do. Producers and publishers can now also create media for the people by the people! You can call this Democratic Entertainment!\"</font></div>
                                    <div><font size=\"3\" face=\"courier new\">The ultimate goal is to compile books from the best inputs from these different sources: inputs with the most compelling contents. The successful contributors, those contributors whose materials were adopted for the books, will also benefit from the sales of the books when they are eventually published but in proportion to their contributions. Contributions are made in the form of Story Bursts, which are the proposed logical follow-up events or activities to those preceding scenes that have already been validated. The audience, all registered users, will rate the Story Bursts and the materials with the highest ratings will be adopted for the books. Registration into Nextscenes.com is FREE. Rating of Story Bursts, while voluntary, is very essential.</font></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><strong><font size=\"3\" face=\"courier new\">Basic Principle</font></strong></div>
                                    <div><font size=\"3\" face=\"courier new\">&nbsp;</font></div>
                                    <div><font size=\"3\" face=\"courier new\">The principle behind Nextscenes is simple. The story in any book comprises of different scenes. As a story line unfolds, a Power User that wishes to contribute will propose what a subsequent scene should be in no more than 500 words. A Power User will not contribute more than fifty times in the course of a book. Power Users will register into the Forums of their interest and commence contributions upon registration. A Power User may register in more than one Forum. Each Forum represents a particular genre of story.</font></div></div>\t\t\t\t\t\t\t  </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\" class=\"collapsed\" aria-expanded=\"false\">How It Works</a>
                            </h4>
                        </div>
                        <div id=\"collapse2\" class=\"panel-collapse collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
                            <div class=\"panel-body\">

                                <h3 class=\"h3\">How It Works</h3>
                                <div class=\"justify\"><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"text-decoration: underline;\"><b><font face=\"courier new\" size=\"4\">Ways of Writing on NextScenes&nbsp;</font></b></span></p>
                                    <p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font face=\"courier new\" size=\"3\"><br></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font face=\"courier new\" size=\"3\">There are three ways of writing your stories on the NextScenes platform:</font></p>
                                    <p style=\"margin-bottom: 0px; text-align: justify; line-height: normal; min-height: 14px;\"><font face=\"courier new\" size=\"3\"><br></font></p>
                                    <p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font face=\"courier new\" size=\"3\">First Register on nextscenes.com as:</font></p><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">a.</span><span class=\"Apple-tab-span\" style=\"font-family: 'courier new'; white-space: pre;\">\t</span><span style=\"font-family: 'courier new'; background-color: transparent;\">Regular User (with Read Only access)</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">b.</span><span class=\"Apple-tab-span\" style=\"font-family: 'courier new'; white-space: pre;\">\t</span><span style=\"font-family: 'courier new'; background-color: transparent;\">Power User (with Read and Write access)</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">c.</span><span class=\"Apple-tab-span\" style=\"font-family: 'courier new'; white-space: pre;\">\t</span><span style=\"font-family: 'courier new'; background-color: transparent;\">Moderator (Read/Write/Moderator Access). (Coming soon) &nbsp; &nbsp;&nbsp;</span></font></p></blockquote><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><br></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><br></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"4\">I.<span class=\"Apple-tab-span\" style=\"white-space: pre;\">\t</span>Collaborative writing</font></b><span style=\"font-size: medium; font-family: 'courier new'; background-color: transparent;\"> â This form of writing is for those writers who do not have the stamina to creatively start, develop and finish their own stories.</span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">With this method you can begin your story with a scene and invite other readers and writers to contribute to the development of your story either by suggesting follow up scenes to yours or voting for the scene that should serve as a follow up to yours.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">This method of writing is for the writer who is willing to surrender some creative control for the sake of literary innovation. The storyline should be moderated.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">Contact </span><a href=\"mailto:info@nextscenes.com\" style=\"font-family: 'courier new';\"><span style=\"text-decoration: underline ; color: #0079cd\">info@nextscenes.com</span></a><span style=\"font-family: 'courier new'; background-color: transparent;\"> for Moderator access.</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"3\"><br></font></b></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"4\">II.<span class=\"Apple-tab-span\" style=\"white-space: pre;\">\t</span>Group writing</font></b><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"4\"> â</font><font size=\"3\"> Let us say you have a group of friends who are passionate about writing and are willing to collectively write a book together but you will not all be in the same physical space during this period.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Group writing on NextScenes allows you to create a closed group where each member can make contributions towards a collective project.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Go to âCreate New Storyâ, enter the required information and click âProceed\"</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Under âSelect Visibility/Group Story Projectâ, select âGroup Story Projectâ, under âEnter Contributorâs Emailâ, click âAdd Userâ and invite members of your group.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Select category of Storyline.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Write your story into the text editor box.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"3\"><br></font></b></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><b style=\"font-family: 'courier new';\"><font size=\"4\">III.<span class=\"Apple-tab-span\" style=\"white-space: pre;\">\t</span>Solo Writing</font></b><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"4\"> â</font><font size=\"3\"> With this method you can write down your own ideas at your own pace.</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Go to âCreate New Storyâ, enter the required information and click âProceedâ</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><font size=\"3\"><span style=\"font-family: 'courier new'; background-color: transparent;\">Under âSelect Visibility/Group Story Projectâ, select âMake Publicâ or âMake Privateâ.</span><span style=\"font-family: 'courier new'; background-color: transparent;\">&nbsp;</span></font></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Select category of Storyline</font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\"><br></font></span></p><p style=\"margin-bottom: 0px; text-align: justify; line-height: normal;\"><span style=\"font-family: 'courier new'; background-color: transparent;\"><font size=\"3\">Write your story into the text editor box.</font></span></p>
                                    <p style=\"margin-bottom: 0px; font-size: 12px; line-height: normal; font-family: Calibri; min-height: 14px;\"><br></p><p><b><font face=\"courier new\" size=\"4\"><u><br></u></font></b></p><p><b><font face=\"courier new\" size=\"4\"><u>The Process</u>.</font></b><br></p><p><font size=\"3\" face=\"courier new\"><strong>The Moderator will provide a topic or theme for any particular Genre or Forum. The details of the topic will set out the storyline and members of the public will determine how the storyline will develop</strong>.</font></p>
                                    <p><font size=\"3\" face=\"courier new\">The topic will be live online for all Users and Power <strong>Users </strong>to view but only Power Users will contribute to the storyline.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">A Power User will be expected to read the previous materials and propose a âBurstâ that will constitute a possible sequence to the previous scene but will still blend into the entire storyline line.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">Each âBurstâ should not be more than 500 words.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">All subscribers will be able to rate each âBurstâ on the scale of 1 to 10.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">The âBurstsâ with the highest ratings will be adopted for the storyline on a â the first received, the first to be adoptedâ rule.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">When a particular scene has been completed, it will form completed part of the storyline and the next scene will become active to receive submissions.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">And so on, and so forth, â¦.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">At the instance of the Moderator, the collected materials will be grouped in chapters, etc.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">The Moderator will determine the point at which the story will end.</font></p>
                                    <p><strong><font size=\"3\" face=\"courier new\">At the end of the exercise, the materials will be edited by professional editors and published as eBook or physical books.</font></strong></p>
                                    <p><font size=\"3\" face=\"courier new\">All recognized contributors to the final materials used for the book will be compensated from the proceeds of the sale of the books according to the previously laid down rules.</font></p></div>\t\t\t\t\t\t\t  </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\" class=\"collapsed\" aria-expanded=\"false\">FAQ</a>
                            </h4>
                        </div>
                        <div id=\"collapse3\" class=\"panel-collapse collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
                            <div class=\"panel-body\">

                                <h3 class=\"h3\">Faq</h3>
                                <div class=\"justify\"><p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">What
is Next Scenes?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Next Scenes is a web-based platform that
allows writers to create literary content solely or collaboratively.</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Writers can either writer their books
privately or create a scene, make it public and allow for other writers to
suggest scenes to build up a story.</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">It's called collaborative writing and it
can be quite fun!</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Why
Next Scenes?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">It is popular opinion that other forms
media are suppressing the art of writing so Next Scenes was created simply to
make writing and reading cool again by bringing an edge to it. </font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">With Next Scenes you do not have to be
taken away from your love of writing by your mobile device because you can
write on you mobile device!</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Also Next Scenes wants the writer to
concentrate on writing that is why we can publish your books and distribute
them through the Next Scenes store and other retailers.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">I am
not an English speaker and I cannot write in English</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">No problem. Next Scenes is a multi lingual
platform and currently works can be created in English, French and Spanish.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">What
do I get as an author if my book is published?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Next Scenes is here to turn aspiring
authors into published author and get their works distributed and monetized.</font></span></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Authors keep 75% on each sale.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Can
authors freely price their works?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Of course! However we will provide a guide
for what we think will be a reasonable price because we want books to be
affordable but the final say rests on the shoulders of the owner of the work.</font></span></p>



                                    <p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Where
will my books be sold?</font></span></b></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Through the Next Scenes store, books are
made available worldwide.</font></span></p>

                                    <p class=\"MsoNormal\"><font size=\"3\" face=\"courier new\"><span lang=\"EN-GB\"></span><b>I</b><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">
already have my book written, can I sell on the Next Scenes store?</span></b></font></p>



                                    <p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Yes you can. Even if you did not write on
our platform we can still provide publishing and distribution services for 25%
of the sale of each unit.</font></span></p>



                                    <p class=\"MsoNormal\"><font size=\"3\" face=\"courier new\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">How
does Next Scenes protect authors from piracy?</span></b><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">&nbsp;</span></b>

                                        </font></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">By applying existing laws and anti piracy regulations.</font></span></p><p class=\"MsoNormal\"><font size=\"3\" face=\"courier new\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">Are
there any restrictions on content that can be published?</span></b><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\">&nbsp;</span></b>

                                        </font></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Yes, the contents should be free of distractions, allowing users to concentrate on the principal messages of the platform.</font></span></p><p class=\"MsoNormal\"><b style=\"mso-bidi-font-weight:normal\"><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\">Can
Next Scenes publish my books in hard copies?</font></span></b></p><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\"><div><span lang=\"EN-GB\">Yes,&nbsp;</span><span lang=\"EN-GB\">Next Scenes publish my books in hard copies.</span></div><div style=\"font-weight: bold;\"><b><span lang=\"EN-GB\"><br></span></b><b><span lang=\"EN-GB\">I
need to promote my books too can Next Scenes help?</span></b></div></font></span><div><font size=\"3\" face=\"courier new\"><br></font></div><font size=\"3\" face=\"courier new\">Yes,&nbsp;<span lang=\"EN-GB\">Next Scenes can help you to promote your books.</span></font><div><b><u><span lang=\"EN-GB\"><font size=\"3\" face=\"courier new\"><br></font></span></u></b></div><div><font size=\"3\" face=\"courier new\"><b><u><span lang=\"EN-GB\">Publishing
Terms and Conditions</span></u></b>



                                        </font><p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">The term of this agreement will begin upon your acceptance of it and
will continue until you terminate it or we terminate it.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes reserves the right to terminate this agreement and authors'
access to their account at any time. Authors will be notified upon termination.
</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Following termination or suspension, Next Scenes may fulfill any
customer orders for digital books pending as of the date of termination or
suspension and may continue to keep digital copies of such books to provide
continuing access to or re-downloads of those books or otherwise support customers
who have purchased a digital book prior to termination or suspension.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors are entitled to terminate at any time by providing a notice of
termination in which event Next Scenes will discontinue with the listing and
selling of their books within 7 working days from notice of termination. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><u><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Digital Book
Distribution Rights</font></span></u></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">1. DELIVERIES,
ACCEPTANCE AND WITHDRAWAL</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Delivery</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must provide Next Scenes with the digital books at their own
expense they wish to distribute through the Next Scenes platform.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must deliver all electronic files free and clear of viruses,
worms and other potentially harmful or disrupting code.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Content Requirements</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must ensure that all digital books content is non-offensive at
the time of submission.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes is entitled to remove or modify the metadata, cover art and
product description authors provide for their digital books for any reason,
including if it is determined that it does not comply with content
requirements. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may not include in any digital book any advertisements or other
content that is primarily intended to advertise or promote products or
services. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must also ensure that all metadata provided to Next Scenes is
current, complete, and accurate.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Rejection</font></span></b></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US;mso-bidi-font-weight:bold\">Next Scenes is </span><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\">entitled to
determine what content will be accepted and distributed through the platform at
our sole discretion. </span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If we request that you provide additional information relating to your
digital books, such as information confirming that you have all rights required
to permit our distribution of the digital books, you will promptly provide the
information requested, and you represent and warrant that any information and
documentation you provide to us in response to such a request will be current,
complete, and accurate. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">You authorize us, directly or through third parties, to make any
inquiries we consider appropriate to verify your rights to permit our
distribution of the digital books and the accuracy of the information or
documentation you provide to us with respect to those rights.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Withdrawal</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may withdraw their digital books from further sale on the
platform at any time on a 7 working days advance notice by following the
current platform procedures for digital book withdrawal or un-publishing. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may fulfill any customer orders completed through the date
the digital books are available for sale. </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Reformatting</font></span></b></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may, in our discretion, reformat digital books and authors
agree that unintentional errors may occur during this process.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If such errors do occur, authors may remove the affected Digital Book
from further sale on the platform.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may also, in our discretion, correct any errors existing in
a digital book file as it is delivered to us</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">2. MARKETING AND
PROMOTION</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Marketing and Promotion</span></b><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes will have sole discretion in determining all marketing and
promotions efforts related to the sale of digital books through the platform.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may, without limitation, promote digital books by making
certain portions of the books available to prospective customers without charge
and allow prospective customers to view certain portion of the book in relation
to search queries.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors must acknowledge that Next Scenes holds no obligation to market,
distribute, or offer for sale any digital book, or to continue marketing;
distributing or selling a digital book after it has commenced doing so.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">3. PRICING</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Authors' List Price</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors will be solely responsible for pricing their works.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may also change their list price and such changes will be
effective within 7 working days.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Currency Conversion</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may sell digital book in other countries using foreign
currencies.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">In such event, the submitted list price will be converted to another
currency at an exchange rate that we shall determine.</font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may periodically update the converted list price to reflect
current exchange rates. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">The converted list price in the sale currency will serve as the author's
list price when we offer and sell the digital book in the sale currency. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors' royalties will also be calculated based on the converted list
price in the sale currency.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Customer Prices</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes is solely responsible for processing payments, payment
collection and related customer service, and will have sole ownership and
control of all customer data obtained in relation to the platform.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">4. ROYALTIES AND
PAYMENTS</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Royalties</font></span></b></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If Authors are not in breach of their obligations as stated under this
agreement, Next Scenes will pay the applicable royalty of 75%, net of refunds,
bad debt, and any VAT, sales or other taxes charged to a customer or applied
with respect to sales to a customer.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">When Do We Pay You</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes will pay royalties due on digital book sales approximately
90 days following the end of the calendar month during which the sales were
made. At the time of payment, we will make available to you an online report
detailing sales of digital books and corresponding royalties.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Payment Currencies</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If Authors change their payment currency, the change will be effective
on the first day of the following calendar month (unless we make an earlier
period available). </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">If Next Scenes pay in a currency other than the sale currency, the
royalties due from the sale currency will be converted to the payment currency
at an exchange rate we determine, which will be inclusive of all fees and
charges for the conversion.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">Payment Policies<br></font></span></b></p><p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\"></span></b><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\">Next Scenes may require the provision of certain information or to
register a valid bank account into the author's Next Scenes account in order to
receive royalty payments, in which case we will not be obligated to make royalty
payments until this has been done. </span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes may establish other payment policies from time to time, such
as minimum payment amounts for different payment methods and check fees.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><font size=\"3\" face=\"courier new\"><b><span style=\"mso-bidi-font-family:OpenSans-Semibold;
mso-ansi-language:EN-US\">Payment Disputes</span></b><span style=\"mso-bidi-font-family:
OpenSans;mso-ansi-language:EN-US\"></span></font></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Authors may not bring a suit or other legal proceeding against Next
Scenes with regard to any statement unless you it is brought within six months
after the date the statement is available. </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Any such proceeding will be limited to a determination of the amount of
monies, if any; payable by Next Scenes to the author for the accounting periods
in question, and the author's sole remedy will be the recovery of those monies
with no interest.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">5. FORCE MAJEURE</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">Next Scenes will not be liable to authors for any failure or delay in
the performance of its obligations under this agreement caused by any event or
circumstance beyond its control, including, but not limited to,
denial-of-service attacks, insurrection, fires, flood, storm, explosions, acts
of God, war, terrorism, and labor conditions.</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:EN-US\"><font size=\"3\" face=\"courier new\">6.
REPRESENTATIONS, WARRANTIES AND INDEMNITIES</font></span></b></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">You represent and warrant that: </font></span></p>

                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(a) You have the full right, power and authority to enter into and fully
perform this Agreement and will comply with the terms of this Agreement; </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(b) Prior to you or your designee's delivery of any content, you will
have obtained all rights that are necessary for the exercise the rights granted
under this Agreement; </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(c) Neither the exercise of the rights authorized under this Agreement
nor any materials embodied in the content nor its sale or distribution as
authorized in this Agreement will violate or infringe upon the intellectual
property, proprietary or other rights of any person or entity, including,
without limitation, contractual rights, copyrights, trademarks, common law
rights, rights of publicity, or privacy, or moral rights, or contain defamatory
material or violate any laws or regulations of any jurisdiction; </font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(d) You will ensure that all Digital Books delivered under the Next
Scenes platform comply with the technical delivery specifications provided by
us</font></span></p>



                                        <p class=\"MsoNormal\" style=\"mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none\"><span style=\"mso-bidi-font-family:OpenSans;mso-ansi-language:
EN-US\"><font size=\"3\" face=\"courier new\">(e) You will be solely responsible for accounting and paying any
co-owners or co-administrators of any Digital Book or portion thereof any
royalties with respect to the uses of the content and their respective shares,
if any, of any monies payable under this Agreement. To the fullest extent
permitted by applicable law, you will indemnify, defend and hold Next Scenes,
its officers, directors, employees, affiliates, subcontractors and assigns
harmless from and against any loss, claim, liability, damage, action or cause
of action (including reasonable attorneys' fees) that arises from any breach of
your representations, warranties or obligations set forth in this Agreement. We
will be entitled, at our expense, to participate in the defense and settlement
of the claim or action with counsel of our own choosing.</font></span></p></div></div>\t\t\t\t\t\t\t  </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}
", "howTo.html.twig", "C:\\xampp\\htdocs\\nextscenes\\templates\\howTo.html.twig");
    }
}
