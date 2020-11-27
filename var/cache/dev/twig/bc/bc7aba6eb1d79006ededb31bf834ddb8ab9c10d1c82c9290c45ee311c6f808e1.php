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

/* index.html.twig */
class __TwigTemplate_b02aea3c769d5c601ff3bc8ed11e33273f6e3f4e6c79aa2a9fe0b958483f5545 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Sasoft - Software Landing Page\">

    <!-- ========== Page Title ========== -->
    <title>WDC Solution LLC</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel=\"shortcut icon\" href=\"assets/img/favicon.png\" type=\"image/x-icon\">

    <!-- ========== Start Stylesheet ========== -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon-set.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootsnav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"assets/js/html5/html5shiv.min.js\"></script>
      <script src=\"assets/js/html5/respond.min.js\"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap\" rel=\"stylesheet\">

</head>

<body>

  <!-- Preloader Start -->
    <div class=\"se-pre-con\"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id=\"home\">

        <!-- Start Navigation -->
        <nav class=\"navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav\">

            <div class=\"container\">

                <!-- Start Atribute Navigation -->
                <div class=\"attr-nav\">
                    <ul>
                        <li class=\"button\"><a class=\"smooth-menu\" href=\"#contact\">Contact</a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img style=\"width:150px; height:50px\" src=\"assets/img/logo.png\" class=\"logo\" alt=\"Logo\">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                    <ul class=\"nav navbar-nav navbar-right\" data-in=\"#\" data-out=\"#\">
                        <li>
                            <a href=\"#home\" class=\"smooth-menu active\" >Home</a>
                            ";
        // line 88
        echo "                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#features\">Features</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#overview\">Overview</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#team\">Team</a>
                        </li>
                        ";
        // line 101
        echo "                        ";
        // line 104
        echo "                        ";
        // line 107
        echo "                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class=\"banner-area responsive-top-pad circle-shape text-center auto-height bg-shape bg-gray\" style=\"background-image: url(assets/img/shape/1.png);\">
        <div class=\"container\">
            <div class=\"content-box\">
                <div class=\"row align-center\">
                    <div class=\"col-lg-8 offset-lg-2 info\">
                        <h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\">Software Development<strong>Technology Integration</strong></h2>
                        <ul class=\"wow fadeInLeft\">
                            <li>
                                <div class=\"fun-fact\">
                                    <div class=\"timer\" data-to=\"6\" data-speed=\"2000\">6</div>
                                    <span class=\"medium\">Projects</span>
                                </div>
                            </li>
                            <li>
                                <div class=\"fun-fact\">
                                    <div class=\"timer\" data-to=\"4\" data-speed=\"2000\">4</div>
                                    <span class=\"medium\">Clients</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-8 offset-lg-2 wow fadeInUp\" data-wow-duration=\"1s\">
                        <div class=\"thumb-innner\">
                            <img src=\"assets/img/dashboard/4.png\" alt=\"Thumb\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star Features Area
    ============================================= -->
    <div class=\"features-area default-padding bottom-less\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">About us</h2>
                        <div class=\"devider\"></div>
                        <p>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"features-box text-center\">
                <div class=\"row\">
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"ti-mobile\"></i>
                            </div>
                            <h4>Mobile application</h4>
                            <p>
                                Mobile applications dedicated to pocket computers and smart phones or tablets with Android, iOS, Windows operating systems.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"ti-html5\"></i>
                            </div>
                            <h4>Web Development</h4>
                            <p>
                                Web-based software/application which can be accessed through any device (pc, notebook, smartphone, tablet) from wherever and whenever. <br>
                                Do you need latest website? <br>
                                Tell us what you need.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"ti-cloud\"></i>
                            </div>
                            <h4>Middleware Development</h4>
                            <p>
                                Bridging application that connects systems differing their operations, technology or utilization methods. <br>
                                Any problem have there company? <br> We have a solution for technology.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class=\"chooseus-area inc-technology relative left-border bg-gray default-padding-top\">
        <div class=\"container\">
            <div class=\"row\">


                <div class=\"info col-lg-6\">
                    <h5>Why choose us</h5>
                    <h2 class=\"area-title\">Create your app page <br> with expert developer</h2>
                    <ul>
                        <li>
                            <h5>First Working Process</h5>
                            <p>
                                Hardly suffer wisdom wishes valley as an. As friendship advantages resolution it alteration stimulated he or increasing. 
                            </p>
                        </li>
                        <li>
                            <h5>Dedicated Team Member</h5>
                            <p>
                                Offered mention greater fifteen one promise because nor. Why denoting speaking fat indulged saw dwelling raillery. 
                            </p>
                        </li>
                        <li>
                            <h5>24/7 Hours Support</h5>
                            <p>
                                Hardly suffer wisdom wishes valley as an. As friendship advantages resolution it alteration stimulated he or increasing. 
                            </p>
                        </li>
                    </ul>
                    <div class=\"technology\">
                        <h4>Technology we use</h4>
                        <div class=\"icon\">
                            <i class=\"fab fa-java\"></i>
                            <i class=\"fab fa-node-js\"></i>
                            <i class=\"fab fa-php\"></i>
                            <i class=\"fab fa-python\"></i>
                            <i class=\"fab fa-mailchimp\"></i>
                        </div>
                    </div>
                </div>


                <div class=\"thumb width-120 col-lg-6\">
                    <img src=\"assets/img/illustration/4.png\" alt=\"Thumb\">
                </div>

            </div>
        </div>
    </div>
    <!-- End Choose us Area -->

    <!-- Star Services Area
    ============================================= -->
    <div id=\"features\" class=\"services-area default-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Our Features</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-full\">
            <div class=\"col-lg-12\">
                <div class=\"services-box services-carousel owl-carousel owl-theme\">
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-drag\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>Drag And Drop</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-website\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>Fully Customizable</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-integration\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>App Integration</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-rgb-1\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>Color Schemes</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-resolution-1\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>High Resolution</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Process 
    ============================================= -->
    <div id=\"process\" class=\"process-area default-padding-bottom\">
        <!-- Fixed Shape -->
        <div class=\"shape-left-top shape opacity-default\">
            <img src=\"assets/img/shape/7.png\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row align-center\">
                <div class=\"col-lg-6 thumb\">
                    <img src=\"assets/img/illustration/7.png\" alt=\"Thumb\">
                </div>
                <div class=\"col-lg-6 info ml-auto\">
                    <h2 class=\"area-title\">Three Simple Step To Started Working Process</h2>
                    <ul>
                        <li>
                            <div class=\"icon\">
                                <i class=\"ti-search\"></i>
                                <span>01</span>
                            </div>
                            <div class=\"info\">
                                <h4>Researching</h4>
                                <p>
                                    We need to understand pleasure of customer so determine user experience and user interface.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"icon\">
                                <i class=\"ti-ruler-pencil\"></i>
                                <span>02</span>
                            </div>
                            <div class=\"info\">
                                <h4>Designing</h4>
                                <p>
                                    Draw sketch of application below user experience.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"icon\">
                                <i class=\"ti-world\"></i>
                                <span>03</span>
                            </div>
                            <div class=\"info\">
                                <h4>Development</h4>
                                <p>
                                    In many cases, contain 2 section development. First front development is mainly developing below sketch design and will be functional application, Second backend development is connect to database to have dynamically content and bridging another system and integrate 3rd application.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Start Overview 
    ============================================= -->
    <div id=\"overview\" class=\"overview-area relative bg-gray default-padding-top carousel-shadow\">
        <!-- Fixed Shape -->
        <div class=\"shape-bottom\">
            <img src=\"assets/img/shape/1.svg\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Quick Software Overview</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"overview-carousel owl-carousel owl-theme\">
                        <!-- Single Item -->
                        <div class=\"single-item\">
                            <div class=\"row\">

                                <div class=\"col-lg-8 order-last thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>

                                <div class=\"col-lg-4 info\">
                                    <div class=\"title\">
                                        <h4>App Integration</h4>
                                        <span>01</span>
                                    </div>
                                    <p>
                                        If continue building numerous of at relation in margaret. Lasted engage roused mother.
                                    </p>
                                    <p>
                                        Consectetur adipisicing, elit. Necessitatibus, vitae saepe esse voluptas perferendis! Quidem dignissimos rerum, praesentium officia tempore qui obcaecati sint id ea itaque quibusdam iste accusamus totam.
                                    </p>
                                    <a href=\"#\">Know more <i class=\"fas fa-angle-right\"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class=\"single-item\">
                            <div class=\"row\">

                                <div class=\"col-lg-8 order-last thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>

                                <div class=\"col-lg-4 info\">
                                    <div class=\"title\">
                                        <h4>App Customization</h4>
                                        <span>02</span>
                                    </div>
                                    <p>
                                        Delevary building numerous of at relation in margaret. Lasted engage roused mother.
                                    </p>
                                    <p>
                                        Consectetur adipisicing, elit. Necessitatibus, vitae saepe esse voluptas perferendis! Quidem dignissimos rerum, praesentium officia tempore qui obcaecati sint id ea itaque quibusdam iste accusamus totam.
                                    </p>
                                    <a href=\"#\">Know more <i class=\"fas fa-angle-right\"></i></a>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

    <!-- Star Faq
    ============================================= -->
    <div class=\"faq-area default-padding-top\">
        <div class=\"container\">
            <div class=\"faq-items\">
                <div class=\"row align-center\">

                    <div class=\"col-lg-6\">
                        <div class=\"thumb wow fadeInLeft\" data-wow-delay=\"0.5s\">
                            <img src=\"assets/img/illustration/9.png\" alt=\"Thumb\">
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"faq-content\">
                            <h2 class=\"area-title\">Answer & Question</h2>
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <h4 class=\"mb-0\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                              Do I need a business plan?
                                        </h4>
                                    </div>

                                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingTwo\">
                                        <h4 class=\"mb-0 collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                              How long should a business plan be?
                                        </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingFour\">
                                        <h4 class=\"mb-0 collapsed\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                          Where do I start?
                                      </h4>
                                    </div>
                                    <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->

    <!-- Start Team Area 
    ============================================= -->
    <div id=\"team\" class=\"team-area overflow-hidden default-padding bottom-less\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Innovative Team</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-full\">
            <div class=\"team-items text-center\">
                <!-- Fixed Shape -->
                <div class=\"shape\">
                    <img src=\"assets/img/shape/dotted-bg-2.png\" alt=\"Shape\">
                </div>
                <!-- End Fixed Shape -->
                <div class=\"row\">
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Shagai.png"), "html", null, true);
        echo "\" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Altanshagai</h4>
                                <span>CEO of WDC</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Bilguun.jpg"), "html", null, true);
        echo "\" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Bilguun-Erdene</h4>
                                <span>Project Manager of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Batbayar2.png"), "html", null, true);
        echo "\" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Batbayar</h4>
                                <span>Developer of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Sambuu.png"), "html", null, true);
        echo " \" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Gundsambuu</h4>
                                <span>Designer of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/tsogzolboo.jpg"), "html", null, true);
        echo " \" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Tsogzolboo</h4>
                                <span>Tester of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class=\"testimonials-area default-padding\">

        <!-- Fixed BG -->
        <div class=\"fixed-bg\" style=\"background-image: url(assets/img/map.svg);\"></div>
        <!-- Fixed BG -->
                        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Customers Review</h2>
                        <div class=\"devider\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"testimonial-items text-center\">
                        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"testimonial-carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <i class=\"flaticon-left-quotes-sign\"></i>
                                    <p>
                                        Instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry. 
                                    </p>
                                    <span>CEO of Sasoft</span>
                                    <h4>Junl Sarukh</h4>
                                </div>
                                <div class=\"carousel-item\">
                                    <i class=\"flaticon-left-quotes-sign\"></i>
                                    <p>
                                        Instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry.  
                                    </p>
                                    <span>Director of Sasoft</span>
                                    <h4>Anil Spia</h4>
                                </div>
                                <div class=\"carousel-item\">
                                    <i class=\"flaticon-left-quotes-sign\"></i>
                                    <p>
                                        Instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry. 
                                    </p>
                                    <span>Developer of Sasoft</span>
                                    <h4>Paul Munni</h4>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#testimonial-carousel\" data-slide-to=\"0\" class=\"active\">
                                    <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
                                </li>
                                <li data-target=\"#testimonial-carousel\" data-slide-to=\"1\">
                                    <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
                                </li>
                                <li data-target=\"#testimonial-carousel\" data-slide-to=\"2\">
                                    <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    

    <!-- Start Contact 
    ============================================= -->
    <div id=\"contact\" class=\"contact-area default-padding\">
        <div class=\"container\">
            <div class=\"row align-center\">
                <div class=\"col-lg-5 newsletter\">
                    <div class=\"newsletter-form text-light text-center\">
                        <i class=\"flaticon-email\"></i>
                        <p>
                            Nobis dolor maiores reprehenderit aut vel natus Blanditiis possimus, impedit tempora porro cum. Nostrum, dolorem eos ea ducimus.
                        </p>
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Name\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Email*\" type=\"email\">
                            </div>
                           <button type=\"submit\">Subscribe Now</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-7 contact-forms\">
                    <div class=\"form-box\">
                        <h2 class=\"area-title\">If you have any questions <br> contact with us</h2>
                        <form action=\"assets/mail/contact.php\" method=\"POST\" class=\"contact-form\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fas fa-user\"></i>
                                        <input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Name\" type=\"text\">
                                        <span class=\"alert-error\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <i class=\"fas fa-envelope\"></i>
                                        <input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email*\" type=\"email\">
                                        <span class=\"alert-error\"></span>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <i class=\"fas fa-phone\"></i>
                                        <input class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Phone\" type=\"text\">
                                        <span class=\"alert-error\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group comments\">
                                        <i class=\"fas fa-edit\"></i>
                                        <textarea class=\"form-control\" id=\"comments\" name=\"comments\" placeholder=\"Tell Us About Project *\"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <button type=\"submit\" name=\"submit\" id=\"submit\">
                                        Send Message <i class=\"fa fa-paper-plane\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class=\"col-lg-12 alert-notification\">
                                <div id=\"message\" class=\"alert-msg\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer 
    ============================================= -->
    <footer class=\"bg-dark text-light\">
        <!-- Shape -->
        <div class=\"footer-shape\">
            <img src=\"assets/img/shape/4.png\" alt=\"Shape\">
        </div>
        <!-- Shape -->
        <div class=\"container\">
            <div class=\"f-items default-padding\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 item\">
                        <div class=\"f-item about\">
                            <img style=\"width:150px;height:50px\" src=\"assets/img/logo-light.png\" alt=\"Logo\">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied new.
                            </p>
                            <form action=\"#\">
                                <input type=\"email\" placeholder=\"Your Email\" class=\"form-control\" name=\"email\">
                                <button type=\"submit\"> Get Started</button>  
                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 item\">
                        <div class=\"f-item link\">
                            <h4 class=\"widget-title\">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Home</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> About us</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Company History</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Features</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 item\">
                        <div class=\"f-item link\">
                            <h4 class=\"widget-title\">Community</h4>
                            <ul>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Career</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Services</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 item\">
                        <div class=\"f-item twitter-widget\">
                            <h4 class=\"widget-title\">Contact Info</h4>
                            <div class=\"address\">
                                <ul>
                                    <li>
                                        <div class=\"icon\">
                                            <i class=\"fas fa-home\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham AL 35235
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"icon\">
                                            <i class=\"fas fa-envelope\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <strong>Email:</strong>
                                            <a href=\"mailto:info@validtheme.com\">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"icon\">
                                            <i class=\"fas fa-phone\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <strong>Phone:</strong>
                                            <a href=\"tel:2151234567\">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href=\"#\">WDC</a></p>
                    </div>
                    <div class=\"col-lg-6 text-right link\">
                        <ul>
                            <li>
                                <a href=\"#\"><i class=\"ti-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"ti-linkedin\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script src=\"";
        // line 1027
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1028
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1029
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1030
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1031
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1032
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1033
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.custom.13711.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1034
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1035
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1036
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/progress-bar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1037
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1038
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1039
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/count-to.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1040
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/YTPlayer.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1041
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootsnav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1042
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1172 => 1042,  1168 => 1041,  1164 => 1040,  1160 => 1039,  1156 => 1038,  1152 => 1037,  1148 => 1036,  1144 => 1035,  1140 => 1034,  1136 => 1033,  1132 => 1032,  1128 => 1031,  1124 => 1030,  1120 => 1029,  1116 => 1028,  1112 => 1027,  795 => 713,  763 => 684,  731 => 655,  699 => 626,  669 => 599,  175 => 107,  173 => 104,  171 => 101,  159 => 88,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Sasoft - Software Landing Page\">

    <!-- ========== Page Title ========== -->
    <title>WDC Solution LLC</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel=\"shortcut icon\" href=\"assets/img/favicon.png\" type=\"image/x-icon\">

    <!-- ========== Start Stylesheet ========== -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/font-awesome.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/themify-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/flaticon-set.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/magnific-popup.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/owl.carousel.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/owl.theme.default.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/animate.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/bootsnav.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/responsive.css') }}\" rel=\"stylesheet\" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"assets/js/html5/html5shiv.min.js\"></script>
      <script src=\"assets/js/html5/respond.min.js\"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap\" rel=\"stylesheet\">

</head>

<body>

  <!-- Preloader Start -->
    <div class=\"se-pre-con\"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id=\"home\">

        <!-- Start Navigation -->
        <nav class=\"navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav\">

            <div class=\"container\">

                <!-- Start Atribute Navigation -->
                <div class=\"attr-nav\">
                    <ul>
                        <li class=\"button\"><a class=\"smooth-menu\" href=\"#contact\">Contact</a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img style=\"width:150px; height:50px\" src=\"assets/img/logo.png\" class=\"logo\" alt=\"Logo\">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                    <ul class=\"nav navbar-nav navbar-right\" data-in=\"#\" data-out=\"#\">
                        <li>
                            <a href=\"#home\" class=\"smooth-menu active\" >Home</a>
                            {# <ul class=\"dropdown-menu\">
                                <li><a href=\"index.html\">Home Version One</a></li>
                                <li><a href=\"index-2.html\">Home Version Two</a></li>
                                <li><a href=\"index-3.html\">Home Version Three</a></li>
                                <li><a href=\"index-4.html\">Home Version Four</a></li>
                            </ul> #}
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#features\">Features</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#overview\">Overview</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#team\">Team</a>
                        </li>
                        {# <li>
                            <a class=\"smooth-menu\" href=\"#pricing\">Pricing</a>
                        </li> #}
                        {# <li>
                            <a class=\"smooth-menu\" href=\"#blog\">Blog</a>
                        </li> #}
                        {# <li>
                            <a class=\"smooth-menu\" href=\"#contact\">Contact</a>
                        </li> #}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class=\"banner-area responsive-top-pad circle-shape text-center auto-height bg-shape bg-gray\" style=\"background-image: url(assets/img/shape/1.png);\">
        <div class=\"container\">
            <div class=\"content-box\">
                <div class=\"row align-center\">
                    <div class=\"col-lg-8 offset-lg-2 info\">
                        <h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\">Software Development<strong>Technology Integration</strong></h2>
                        <ul class=\"wow fadeInLeft\">
                            <li>
                                <div class=\"fun-fact\">
                                    <div class=\"timer\" data-to=\"6\" data-speed=\"2000\">6</div>
                                    <span class=\"medium\">Projects</span>
                                </div>
                            </li>
                            <li>
                                <div class=\"fun-fact\">
                                    <div class=\"timer\" data-to=\"4\" data-speed=\"2000\">4</div>
                                    <span class=\"medium\">Clients</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-8 offset-lg-2 wow fadeInUp\" data-wow-duration=\"1s\">
                        <div class=\"thumb-innner\">
                            <img src=\"assets/img/dashboard/4.png\" alt=\"Thumb\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star Features Area
    ============================================= -->
    <div class=\"features-area default-padding bottom-less\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">About us</h2>
                        <div class=\"devider\"></div>
                        <p>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"features-box text-center\">
                <div class=\"row\">
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"ti-mobile\"></i>
                            </div>
                            <h4>Mobile application</h4>
                            <p>
                                Mobile applications dedicated to pocket computers and smart phones or tablets with Android, iOS, Windows operating systems.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"ti-html5\"></i>
                            </div>
                            <h4>Web Development</h4>
                            <p>
                                Web-based software/application which can be accessed through any device (pc, notebook, smartphone, tablet) from wherever and whenever. <br>
                                Do you need latest website? <br>
                                Tell us what you need.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"ti-cloud\"></i>
                            </div>
                            <h4>Middleware Development</h4>
                            <p>
                                Bridging application that connects systems differing their operations, technology or utilization methods. <br>
                                Any problem have there company? <br> We have a solution for technology.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class=\"chooseus-area inc-technology relative left-border bg-gray default-padding-top\">
        <div class=\"container\">
            <div class=\"row\">


                <div class=\"info col-lg-6\">
                    <h5>Why choose us</h5>
                    <h2 class=\"area-title\">Create your app page <br> with expert developer</h2>
                    <ul>
                        <li>
                            <h5>First Working Process</h5>
                            <p>
                                Hardly suffer wisdom wishes valley as an. As friendship advantages resolution it alteration stimulated he or increasing. 
                            </p>
                        </li>
                        <li>
                            <h5>Dedicated Team Member</h5>
                            <p>
                                Offered mention greater fifteen one promise because nor. Why denoting speaking fat indulged saw dwelling raillery. 
                            </p>
                        </li>
                        <li>
                            <h5>24/7 Hours Support</h5>
                            <p>
                                Hardly suffer wisdom wishes valley as an. As friendship advantages resolution it alteration stimulated he or increasing. 
                            </p>
                        </li>
                    </ul>
                    <div class=\"technology\">
                        <h4>Technology we use</h4>
                        <div class=\"icon\">
                            <i class=\"fab fa-java\"></i>
                            <i class=\"fab fa-node-js\"></i>
                            <i class=\"fab fa-php\"></i>
                            <i class=\"fab fa-python\"></i>
                            <i class=\"fab fa-mailchimp\"></i>
                        </div>
                    </div>
                </div>


                <div class=\"thumb width-120 col-lg-6\">
                    <img src=\"assets/img/illustration/4.png\" alt=\"Thumb\">
                </div>

            </div>
        </div>
    </div>
    <!-- End Choose us Area -->

    <!-- Star Services Area
    ============================================= -->
    <div id=\"features\" class=\"services-area default-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Our Features</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-full\">
            <div class=\"col-lg-12\">
                <div class=\"services-box services-carousel owl-carousel owl-theme\">
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-drag\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>Drag And Drop</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-website\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>Fully Customizable</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-integration\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>App Integration</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-rgb-1\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>Color Schemes</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                   <!-- Single Item -->
                   <div class=\"item\">
                       <div class=\"icon\">
                           <i class=\"flaticon-resolution-1\"></i>
                       </div>
                       <div class=\"info\">
                           <h4>High Resolution</h4>
                           <p>
                               Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted
                           </p>
                       </div>
                   </div>
                   <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Process 
    ============================================= -->
    <div id=\"process\" class=\"process-area default-padding-bottom\">
        <!-- Fixed Shape -->
        <div class=\"shape-left-top shape opacity-default\">
            <img src=\"assets/img/shape/7.png\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row align-center\">
                <div class=\"col-lg-6 thumb\">
                    <img src=\"assets/img/illustration/7.png\" alt=\"Thumb\">
                </div>
                <div class=\"col-lg-6 info ml-auto\">
                    <h2 class=\"area-title\">Three Simple Step To Started Working Process</h2>
                    <ul>
                        <li>
                            <div class=\"icon\">
                                <i class=\"ti-search\"></i>
                                <span>01</span>
                            </div>
                            <div class=\"info\">
                                <h4>Researching</h4>
                                <p>
                                    We need to understand pleasure of customer so determine user experience and user interface.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"icon\">
                                <i class=\"ti-ruler-pencil\"></i>
                                <span>02</span>
                            </div>
                            <div class=\"info\">
                                <h4>Designing</h4>
                                <p>
                                    Draw sketch of application below user experience.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"icon\">
                                <i class=\"ti-world\"></i>
                                <span>03</span>
                            </div>
                            <div class=\"info\">
                                <h4>Development</h4>
                                <p>
                                    In many cases, contain 2 section development. First front development is mainly developing below sketch design and will be functional application, Second backend development is connect to database to have dynamically content and bridging another system and integrate 3rd application.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Start Overview 
    ============================================= -->
    <div id=\"overview\" class=\"overview-area relative bg-gray default-padding-top carousel-shadow\">
        <!-- Fixed Shape -->
        <div class=\"shape-bottom\">
            <img src=\"assets/img/shape/1.svg\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Quick Software Overview</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"overview-carousel owl-carousel owl-theme\">
                        <!-- Single Item -->
                        <div class=\"single-item\">
                            <div class=\"row\">

                                <div class=\"col-lg-8 order-last thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>

                                <div class=\"col-lg-4 info\">
                                    <div class=\"title\">
                                        <h4>App Integration</h4>
                                        <span>01</span>
                                    </div>
                                    <p>
                                        If continue building numerous of at relation in margaret. Lasted engage roused mother.
                                    </p>
                                    <p>
                                        Consectetur adipisicing, elit. Necessitatibus, vitae saepe esse voluptas perferendis! Quidem dignissimos rerum, praesentium officia tempore qui obcaecati sint id ea itaque quibusdam iste accusamus totam.
                                    </p>
                                    <a href=\"#\">Know more <i class=\"fas fa-angle-right\"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class=\"single-item\">
                            <div class=\"row\">

                                <div class=\"col-lg-8 order-last thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>

                                <div class=\"col-lg-4 info\">
                                    <div class=\"title\">
                                        <h4>App Customization</h4>
                                        <span>02</span>
                                    </div>
                                    <p>
                                        Delevary building numerous of at relation in margaret. Lasted engage roused mother.
                                    </p>
                                    <p>
                                        Consectetur adipisicing, elit. Necessitatibus, vitae saepe esse voluptas perferendis! Quidem dignissimos rerum, praesentium officia tempore qui obcaecati sint id ea itaque quibusdam iste accusamus totam.
                                    </p>
                                    <a href=\"#\">Know more <i class=\"fas fa-angle-right\"></i></a>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

    <!-- Star Faq
    ============================================= -->
    <div class=\"faq-area default-padding-top\">
        <div class=\"container\">
            <div class=\"faq-items\">
                <div class=\"row align-center\">

                    <div class=\"col-lg-6\">
                        <div class=\"thumb wow fadeInLeft\" data-wow-delay=\"0.5s\">
                            <img src=\"assets/img/illustration/9.png\" alt=\"Thumb\">
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"faq-content\">
                            <h2 class=\"area-title\">Answer & Question</h2>
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <h4 class=\"mb-0\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                              Do I need a business plan?
                                        </h4>
                                    </div>

                                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingTwo\">
                                        <h4 class=\"mb-0 collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                              How long should a business plan be?
                                        </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingFour\">
                                        <h4 class=\"mb-0 collapsed\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                          Where do I start?
                                      </h4>
                                    </div>
                                    <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->

    <!-- Start Team Area 
    ============================================= -->
    <div id=\"team\" class=\"team-area overflow-hidden default-padding bottom-less\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Innovative Team</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-full\">
            <div class=\"team-items text-center\">
                <!-- Fixed Shape -->
                <div class=\"shape\">
                    <img src=\"assets/img/shape/dotted-bg-2.png\" alt=\"Shape\">
                </div>
                <!-- End Fixed Shape -->
                <div class=\"row\">
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"{{asset('assets/img/team/Shagai.png')}}\" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Altanshagai</h4>
                                <span>CEO of WDC</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"{{asset('assets/img/team/Bilguun.jpg')}}\" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Bilguun-Erdene</h4>
                                <span>Project Manager of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"{{asset('assets/img/team/Batbayar2.png')}}\" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Batbayar</h4>
                                <span>Developer of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"{{ asset('assets/img/team/Sambuu.png') }} \" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Gundsambuu</h4>
                                <span>Designer of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img class=\"teamimg\" src=\"{{ asset('assets/img/team/tsogzolboo.jpg') }} \" alt=\"Thumb\">
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\">
                                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        </li>
                                        <li class=\"twitter\">
                                            <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        </li>
                                        <li class=\"instagram\">
                                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        </li>
                                        <li class=\"linkedin\">
                                            <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info\">
                                <h4>Tsogzolboo</h4>
                                <span>Tester of WDC</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class=\"testimonials-area default-padding\">

        <!-- Fixed BG -->
        <div class=\"fixed-bg\" style=\"background-image: url(assets/img/map.svg);\"></div>
        <!-- Fixed BG -->
                        
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Customers Review</h2>
                        <div class=\"devider\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"testimonial-items text-center\">
                        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"testimonial-carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <i class=\"flaticon-left-quotes-sign\"></i>
                                    <p>
                                        Instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry. 
                                    </p>
                                    <span>CEO of Sasoft</span>
                                    <h4>Junl Sarukh</h4>
                                </div>
                                <div class=\"carousel-item\">
                                    <i class=\"flaticon-left-quotes-sign\"></i>
                                    <p>
                                        Instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry.  
                                    </p>
                                    <span>Director of Sasoft</span>
                                    <h4>Anil Spia</h4>
                                </div>
                                <div class=\"carousel-item\">
                                    <i class=\"flaticon-left-quotes-sign\"></i>
                                    <p>
                                        Instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry. 
                                    </p>
                                    <span>Developer of Sasoft</span>
                                    <h4>Paul Munni</h4>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#testimonial-carousel\" data-slide-to=\"0\" class=\"active\">
                                    <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
                                </li>
                                <li data-target=\"#testimonial-carousel\" data-slide-to=\"1\">
                                    <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
                                </li>
                                <li data-target=\"#testimonial-carousel\" data-slide-to=\"2\">
                                    <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    

    <!-- Start Contact 
    ============================================= -->
    <div id=\"contact\" class=\"contact-area default-padding\">
        <div class=\"container\">
            <div class=\"row align-center\">
                <div class=\"col-lg-5 newsletter\">
                    <div class=\"newsletter-form text-light text-center\">
                        <i class=\"flaticon-email\"></i>
                        <p>
                            Nobis dolor maiores reprehenderit aut vel natus Blanditiis possimus, impedit tempora porro cum. Nostrum, dolorem eos ea ducimus.
                        </p>
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Name\" type=\"text\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Email*\" type=\"email\">
                            </div>
                           <button type=\"submit\">Subscribe Now</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-7 contact-forms\">
                    <div class=\"form-box\">
                        <h2 class=\"area-title\">If you have any questions <br> contact with us</h2>
                        <form action=\"assets/mail/contact.php\" method=\"POST\" class=\"contact-form\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fas fa-user\"></i>
                                        <input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Name\" type=\"text\">
                                        <span class=\"alert-error\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <i class=\"fas fa-envelope\"></i>
                                        <input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email*\" type=\"email\">
                                        <span class=\"alert-error\"></span>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"form-group\">
                                        <i class=\"fas fa-phone\"></i>
                                        <input class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Phone\" type=\"text\">
                                        <span class=\"alert-error\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group comments\">
                                        <i class=\"fas fa-edit\"></i>
                                        <textarea class=\"form-control\" id=\"comments\" name=\"comments\" placeholder=\"Tell Us About Project *\"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <button type=\"submit\" name=\"submit\" id=\"submit\">
                                        Send Message <i class=\"fa fa-paper-plane\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class=\"col-lg-12 alert-notification\">
                                <div id=\"message\" class=\"alert-msg\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer 
    ============================================= -->
    <footer class=\"bg-dark text-light\">
        <!-- Shape -->
        <div class=\"footer-shape\">
            <img src=\"assets/img/shape/4.png\" alt=\"Shape\">
        </div>
        <!-- Shape -->
        <div class=\"container\">
            <div class=\"f-items default-padding\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 item\">
                        <div class=\"f-item about\">
                            <img style=\"width:150px;height:50px\" src=\"assets/img/logo-light.png\" alt=\"Logo\">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied new.
                            </p>
                            <form action=\"#\">
                                <input type=\"email\" placeholder=\"Your Email\" class=\"form-control\" name=\"email\">
                                <button type=\"submit\"> Get Started</button>  
                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 item\">
                        <div class=\"f-item link\">
                            <h4 class=\"widget-title\">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Home</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> About us</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Company History</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Features</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 item\">
                        <div class=\"f-item link\">
                            <h4 class=\"widget-title\">Community</h4>
                            <ul>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Career</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Services</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 item\">
                        <div class=\"f-item twitter-widget\">
                            <h4 class=\"widget-title\">Contact Info</h4>
                            <div class=\"address\">
                                <ul>
                                    <li>
                                        <div class=\"icon\">
                                            <i class=\"fas fa-home\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham AL 35235
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"icon\">
                                            <i class=\"fas fa-envelope\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <strong>Email:</strong>
                                            <a href=\"mailto:info@validtheme.com\">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"icon\">
                                            <i class=\"fas fa-phone\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <strong>Phone:</strong>
                                            <a href=\"tel:2151234567\">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href=\"#\">WDC</a></p>
                    </div>
                    <div class=\"col-lg-6 text-right link\">
                        <ul>
                            <li>
                                <a href=\"#\"><i class=\"ti-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"ti-linkedin\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script src=\"{{ asset('assets/js/jquery-1.12.4.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popper.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/jquery.appear.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.easing.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/modernizr.custom.13711.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/wow.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/progress-bar.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/count-to.js')}}\"></script>
    <script src=\"{{ asset('assets/js/YTPlayer.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootsnav.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>
</html>", "index.html.twig", "C:\\Users\\X1\\Documents\\wdc\\templates\\index.html.twig");
    }
}
