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

/* index-4.html */
class __TwigTemplate_77254e9edf46f7bc450116793242db82c100df01a409dfa6f4b2555f07b47698 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index-4.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index-4.html"));

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
    <title>Sasoft - Software Landing Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel=\"shortcut icon\" href=\"assets/img/favicon.png\" type=\"image/x-icon\">

    <!-- ========== Start Stylesheet ========== -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/themify-icons.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/flaticon-set.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/magnific-popup.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/owl.carousel.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/owl.theme.default.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/animate.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/bootsnav.css\" rel=\"stylesheet\" />
    <link href=\"style.css\" rel=\"stylesheet\">
    <link href=\"assets/css/responsive.css\" rel=\"stylesheet\" />
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

            <div class=\"container-full\">

                <!-- Start Atribute Navigation -->
                <div class=\"attr-nav\">
                    <ul>
                        <li class=\"button\">
                            <a href=\"#\">Sign Up</a>
                        </li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"assets/img/logo.png\" class=\"logo\" alt=\"Logo\">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                    <ul class=\"nav navbar-nav navbar-center\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
                        <li class=\"dropdown active dropdown-right\">
                            <a href=\"#home\" class=\"dropdown-toggle smooth-menu active\" data-toggle=\"dropdown\" >Home</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"index.html\">Home Version One</a></li>
                                <li><a href=\"index-2.html\">Home Version Two</a></li>
                                <li><a href=\"index-3.html\">Home Version Three</a></li>
                                <li><a href=\"index-4.html\">Home Version Four</a></li>
                            </ul>
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
                        <li>
                            <a class=\"smooth-menu\" href=\"#pricing\">Pricing</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#blog\">Blog</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#contact\">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class=\"banner-area top-pad-95 half-ligh-shape bg-gray text-default\">
        <div class=\"container\">
            <div class=\"double-items\">
                <div class=\"row align-center\">

                    <div class=\"col-lg-6 info shape\">
                        <h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\">We're building software <strong>to manage business</strong></h2>
                        <p class=\"wow fadeInLeft\" data-wow-duration=\"1.5s\">
                            Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious.
                        </p>
                        <div class=\"bottom\">
                            <a class=\"btn btn-md btn-gradient wow fadeInDown\" data-wow-duration=\"1.8s\" href=\"#\">Get Started</a>
                            <a href=\"https://www.youtube.com/watch?v=owhuBrGIOsE\" class=\"popup-youtube video-btn wow fadeInUp\"><i class=\"fas fa-play\"></i>Watch Video</a>
                        </div>
                    </div>

                     <div class=\"col-lg-5 offset-lg-1 width-130 order-last thumb wow fadeInRight\" data-wow-duration=\"1s\">
                        <img src=\"assets/img/dashboard/4.png\" alt=\"Thumb\">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features Area 
    ============================================= -->
    <div class=\"features-carousel-area carousel-shadow half-bg bg-gray default-padding\">
        <!-- Fixed Shape -->
        <div class=\"shape-bottom\">
            <img src=\"assets/img/shape/1.svg\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">What Makes Sasoft Different?</h2>
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
                    <div class=\"feature-2-col-carousel owl-carousel owl-theme\">
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-label\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>Ticket Manage</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-speech-bubble\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>Live Messaging</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-email\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>Email Workflow</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-file\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>File Upload</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class=\"chooseus-area reverse default-padding-bottom\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"thumb col-lg-6\">
                    <img src=\"assets/img/illustration/6.png\" alt=\"Thumb\">
                </div>

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
                </div>

            </div>
        </div>
    </div>
    <!-- End Choose us Area -->

    <!-- Start Clients
    ============================================= -->
    <div class=\"clients-area bg-theme text-light default-padding\">
        <!-- Fixed BG -->
        <div class=\"fixed-bg\" style=\"background-image: url(assets/img/shape/10.png);\"></div>
        <!-- Fixed BG -->
        <div class=\"container\">
            <div class=\"row align-center\">

                <div class=\"col-lg-5 info\">
                    <h2>Trusted By The <br> World's Best Companies</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, mollitia? Hic blanditiis tempora.
                    </p>
                </div>
                
                <div class=\"col-lg-7\">
                    <div class=\"clients-carousel owl-carousel owl-theme\">
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Clients -->

    <!-- Start Features
    ============================================= -->
    <div id=\"features\" class=\"our-features-area relative default-padding\">
        <!-- Fixed BG -->
        <div class=\"fixed-bg\" style=\"background-image: url(assets/img/shape/11.png);\"></div>
        <!-- Fixed BG -->
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
        <div class=\"container\">
            <div class=\"feature-items text-center\">
                <div class=\"row\">
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                               <i class=\"flaticon-website\"></i>
                           </div>
                           <div class=\"info\">
                               <h4>Fully Customizable</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                               <i class=\"flaticon-drag\"></i>
                           </div>
                           <div class=\"info\">
                               <h4>Drag And Drop</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                               <i class=\"flaticon-showcase\"></i>
                           </div>
                           <div class=\"info\">
                               <h4>Perfect Showcase</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Overview 
    ============================================= -->
    <div id=\"overview\" class=\"overview-area overflow-hidden default-padding bg-gray\">
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
            <div class=\"overview-items\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <ul id=\"tabs\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\">
                                <a href=\"\" data-target=\"#tab1\" data-toggle=\"tab\" class=\"active nav-link\">Collaboration</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"\" data-target=\"#tab2\" data-toggle=\"tab\" class=\"nav-link\">Design & Technology</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"\" data-target=\"#tab3\" data-toggle=\"tab\" class=\"nav-link\">Generate Customize</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-8\">
                        <div id=\"tabsContent\" class=\"tab-content wow fadeInUp\" data-wow-delay=\"0.5s\">
                            <div id=\"tab1\" class=\"tab-pane fade active show\">
                                <div class=\"thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                    <div class=\"overlay\">
                                        
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab2\" class=\"tab-pane fade\">
                                <div class=\"thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>
                            </div>
                            <div id=\"tab3\" class=\"tab-pane fade\">
                                <div class=\"thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

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
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Ahem Natasha</h4>
                                <span>CEO of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Devid mark</h4>
                                <span>Designer of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Brave Hammam</h4>
                                <span>Manager of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Mickel Jonam</h4>
                                <span>Developer of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Pricing Area
    ============================================= -->
    <div id=\"pricing\" class=\"pricing-area default-padding-top bottom-less\">
        <!-- Fixed Shape -->
        <div class=\"shape-top\">
            <img src=\"assets/img/shape/9.png\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading light text-center\">
                        <h2 class=\"area-title\">Our Packages</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"pricing text-center\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 single-item\">
                        <div class=\"pricing-item\">
                            <ul>
                                <li class=\"pricing-header\">
                                    <h4>Trial Version</h4>
                                    <h2><sup>\$</sup>0 <sub>/ Mo</sub></h2>
                                </li>
                                <li><i class=\"fas fa-check-circle\"></i> Demo file</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Update</li>
                                <li><i class=\"fas fa-check-circle\"></i> File compressed</li>
                                <li><i class=\"fas fa-check-circle\"></i> Commercial use</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Support</li>
                                <li><i class=\"fas fa-minus-circle\"></i> 2 database</li>
                                <li><i class=\"fas fa-check-circle\"></i> Documetation</li>
                                <li class=\"footer\">
                                    <a class=\"btn circle btn-theme border btn-sm\" href=\"#\">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 single-item\">
                        <div class=\"pricing-item\">
                            <ul>
                                <li class=\"pricing-header\">
                                    <h4>Regular</h4>
                                    <h2><sup>\$</sup>29 <sub>/ Mo</sub></h2>
                                </li>
                                <li><i class=\"fas fa-check-circle\"></i> Demo file</li>
                                <li><i class=\"fas fa-check-circle\"></i> Update</li>
                                <li><i class=\"fas fa-check-circle\"></i> File compressed</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Commercial use</li>
                                <li><i class=\"fas fa-check-circle\"></i> Support</li>
                                <li><i class=\"fas fa-minus-circle\"></i> 5 database</li>
                                <li><i class=\"fas fa-check-circle\"></i> Documetation</li>
                                <li class=\"footer\">
                                    <a class=\"btn circle btn-theme effect btn-sm\" href=\"#\">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 single-item\">
                        <div class=\"pricing-item\">
                            <ul>
                                <li class=\"pricing-header\">
                                    <h4>Extended</h4>
                                    <h2><sup>\$</sup>59 <sub>/ Mo</sub></h2>
                                </li>
                                <li><i class=\"fas fa-check-circle\"></i> Demo file</li>
                                <li><i class=\"fas fa-check-circle\"></i> Update</li>
                                <li><i class=\"fas fa-minus-circle\"></i> File compressed</li>
                                <li><i class=\"fas fa-check-circle\"></i> Commercial use</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Support</li>
                                <li><i class=\"fas fa-check-circle\"></i> 8 database</li>
                                <li><i class=\"fas fa-check-circle\"></i> Documetation</li>
                                <li class=\"footer\">
                                    <a class=\"btn circle btn-theme border btn-sm\" href=\"#\">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

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

    <!-- Start Blog 
    ============================================= -->
    <div id=\"blog\" class=\"blog-area default-padding bg-gray bottom-less\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Latest News</h2>
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

                <!-- Single Item -->
                <div class=\"single-item col-lg-4 col-md-6\">
                    <div class=\"item\">
                        <div class=\"thumb\">
                            <a href=\"#\"><img src=\"assets/img/800x600.png\" alt=\"Thumb\"></a>
                            <div class=\"date\">12 Dec, 2020</div>
                        </div>
                        <div class=\"info\">
                            <div class=\"meta\">
                                <ul>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-comments\"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href=\"#\">Overcame breeding or my concerns removing. </a>
                            </h4>
                            <p>
                                Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous . 
                            </p>
                            <a href=\"#\" class=\"btn-simple\"><i class=\"fas fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class=\"single-item col-lg-4 col-md-6\">
                    <div class=\"item\">
                        <div class=\"thumb\">
                            <a href=\"#\"><img src=\"assets/img/800x600.png\" alt=\"Thumb\"></a>
                            <div class=\"date\">16 Aug, 2020</div>
                        </div>
                        <div class=\"info\">
                            <div class=\"meta\">
                                <ul>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-comments\"></i> 25 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href=\"#\">Made neat an on be gave show snug tore.</a>
                            </h4>
                            <p>
                                Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous . 
                            </p>
                            <a href=\"#\" class=\"btn-simple\"><i class=\"fas fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class=\"single-item col-lg-4 col-md-6\">
                    <div class=\"item\">
                        <div class=\"thumb\">
                            <a href=\"#\"><img src=\"assets/img/800x600.png\" alt=\"Thumb\"></a>
                            <div class=\"date\">28 Nov, 2020</div>
                        </div>
                        <div class=\"info\">
                            <div class=\"meta\">
                                <ul>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-comments\"></i> 25 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href=\"#\">Assurance concluded son something depending</a>
                            </h4>
                            <p>
                                Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous . 
                            </p>
                            <a href=\"#\" class=\"btn-simple\"><i class=\"fas fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Contact 
    ============================================= -->
    <div id=\"contact\" class=\"contact-area default-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 maps\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981\"></iframe>
                </div>
                <div class=\"col-lg-5 contact-forms\">
                    <h2 class=\"area-title\">We’d love to hear from <br> you anytime</h2>
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
                            <img src=\"assets/img/logo-light.png\" alt=\"Logo\">
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
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Compnay History</a>
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
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href=\"#\">validthemes</a></p>
                    </div>
                    <div class=\"col-lg-6 text-right link\">
                        <ul>
                            <li>
                                <a href=\"#\">Terms</a>
                            </li>
                            <li>
                                <a href=\"#\">Privacy</a>
                            </li>
                            <li>
                                <a href=\"#\">Support</a>
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
    <script src=\"assets/js/jquery-1.12.4.min.js\"></script>
    <script src=\"assets/js/popper.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/jquery.appear.js\"></script>
    <script src=\"assets/js/jquery.easing.min.js\"></script>
    <script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"assets/js/modernizr.custom.13711.js\"></script>
    <script src=\"assets/js/owl.carousel.min.js\"></script>
    <script src=\"assets/js/wow.min.js\"></script>
    <script src=\"assets/js/progress-bar.min.js\"></script>
    <script src=\"assets/js/isotope.pkgd.min.js\"></script>
    <script src=\"assets/js/imagesloaded.pkgd.min.js\"></script>
    <script src=\"assets/js/count-to.js\"></script>
    <script src=\"assets/js/YTPlayer.min.js\"></script>
    <script src=\"assets/js/bootsnav.js\"></script>
    <script src=\"assets/js/main.js\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index-4.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
    <title>Sasoft - Software Landing Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel=\"shortcut icon\" href=\"assets/img/favicon.png\" type=\"image/x-icon\">

    <!-- ========== Start Stylesheet ========== -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/themify-icons.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/flaticon-set.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/magnific-popup.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/owl.carousel.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/owl.theme.default.min.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/animate.css\" rel=\"stylesheet\" />
    <link href=\"assets/css/bootsnav.css\" rel=\"stylesheet\" />
    <link href=\"style.css\" rel=\"stylesheet\">
    <link href=\"assets/css/responsive.css\" rel=\"stylesheet\" />
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

            <div class=\"container-full\">

                <!-- Start Atribute Navigation -->
                <div class=\"attr-nav\">
                    <ul>
                        <li class=\"button\">
                            <a href=\"#\">Sign Up</a>
                        </li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"assets/img/logo.png\" class=\"logo\" alt=\"Logo\">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                    <ul class=\"nav navbar-nav navbar-center\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
                        <li class=\"dropdown active dropdown-right\">
                            <a href=\"#home\" class=\"dropdown-toggle smooth-menu active\" data-toggle=\"dropdown\" >Home</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"index.html\">Home Version One</a></li>
                                <li><a href=\"index-2.html\">Home Version Two</a></li>
                                <li><a href=\"index-3.html\">Home Version Three</a></li>
                                <li><a href=\"index-4.html\">Home Version Four</a></li>
                            </ul>
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
                        <li>
                            <a class=\"smooth-menu\" href=\"#pricing\">Pricing</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#blog\">Blog</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"#contact\">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class=\"banner-area top-pad-95 half-ligh-shape bg-gray text-default\">
        <div class=\"container\">
            <div class=\"double-items\">
                <div class=\"row align-center\">

                    <div class=\"col-lg-6 info shape\">
                        <h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\">We're building software <strong>to manage business</strong></h2>
                        <p class=\"wow fadeInLeft\" data-wow-duration=\"1.5s\">
                            Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious.
                        </p>
                        <div class=\"bottom\">
                            <a class=\"btn btn-md btn-gradient wow fadeInDown\" data-wow-duration=\"1.8s\" href=\"#\">Get Started</a>
                            <a href=\"https://www.youtube.com/watch?v=owhuBrGIOsE\" class=\"popup-youtube video-btn wow fadeInUp\"><i class=\"fas fa-play\"></i>Watch Video</a>
                        </div>
                    </div>

                     <div class=\"col-lg-5 offset-lg-1 width-130 order-last thumb wow fadeInRight\" data-wow-duration=\"1s\">
                        <img src=\"assets/img/dashboard/4.png\" alt=\"Thumb\">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features Area 
    ============================================= -->
    <div class=\"features-carousel-area carousel-shadow half-bg bg-gray default-padding\">
        <!-- Fixed Shape -->
        <div class=\"shape-bottom\">
            <img src=\"assets/img/shape/1.svg\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">What Makes Sasoft Different?</h2>
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
                    <div class=\"feature-2-col-carousel owl-carousel owl-theme\">
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-label\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>Ticket Manage</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-speech-bubble\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>Live Messaging</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-email\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>Email Workflow</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                        <!-- Single iTem -->
                        <div class=\"item\">
                            <div class=\"icon\">
                                <i class=\"flaticon-file\"></i>
                            </div>
                            <div class=\"info\">
                                <h4>File Upload</h4>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur, adipisicing elit. A perspiciatis, dolore dolor culpa, sequi aspernatur, aperiam recusandae in earum impedit debitis.
                                </p>
                                <a class=\"btn circle btn-gradient btn-sm\" href=\"#\">Read More</a>
                            </div>
                        </div>
                        <!-- EndSingle iTem -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class=\"chooseus-area reverse default-padding-bottom\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"thumb col-lg-6\">
                    <img src=\"assets/img/illustration/6.png\" alt=\"Thumb\">
                </div>

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
                </div>

            </div>
        </div>
    </div>
    <!-- End Choose us Area -->

    <!-- Start Clients
    ============================================= -->
    <div class=\"clients-area bg-theme text-light default-padding\">
        <!-- Fixed BG -->
        <div class=\"fixed-bg\" style=\"background-image: url(assets/img/shape/10.png);\"></div>
        <!-- Fixed BG -->
        <div class=\"container\">
            <div class=\"row align-center\">

                <div class=\"col-lg-5 info\">
                    <h2>Trusted By The <br> World's Best Companies</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, mollitia? Hic blanditiis tempora.
                    </p>
                </div>
                
                <div class=\"col-lg-7\">
                    <div class=\"clients-carousel owl-carousel owl-theme\">
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                        <div class=\"item\">
                            <img src=\"assets/img/150x80.png\" alt=\"Thumb\">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Clients -->

    <!-- Start Features
    ============================================= -->
    <div id=\"features\" class=\"our-features-area relative default-padding\">
        <!-- Fixed BG -->
        <div class=\"fixed-bg\" style=\"background-image: url(assets/img/shape/11.png);\"></div>
        <!-- Fixed BG -->
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
        <div class=\"container\">
            <div class=\"feature-items text-center\">
                <div class=\"row\">
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                               <i class=\"flaticon-website\"></i>
                           </div>
                           <div class=\"info\">
                               <h4>Fully Customizable</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                               <i class=\"flaticon-drag\"></i>
                           </div>
                           <div class=\"info\">
                               <h4>Drag And Drop</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-4 col-md-6\">
                        <div class=\"item\">
                            <div class=\"icon\">
                               <i class=\"flaticon-showcase\"></i>
                           </div>
                           <div class=\"info\">
                               <h4>Perfect Showcase</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Overview 
    ============================================= -->
    <div id=\"overview\" class=\"overview-area overflow-hidden default-padding bg-gray\">
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
            <div class=\"overview-items\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <ul id=\"tabs\" class=\"nav nav-tabs\">
                            <li class=\"nav-item\">
                                <a href=\"\" data-target=\"#tab1\" data-toggle=\"tab\" class=\"active nav-link\">Collaboration</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"\" data-target=\"#tab2\" data-toggle=\"tab\" class=\"nav-link\">Design & Technology</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"\" data-target=\"#tab3\" data-toggle=\"tab\" class=\"nav-link\">Generate Customize</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-8\">
                        <div id=\"tabsContent\" class=\"tab-content wow fadeInUp\" data-wow-delay=\"0.5s\">
                            <div id=\"tab1\" class=\"tab-pane fade active show\">
                                <div class=\"thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                    <div class=\"overlay\">
                                        
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab2\" class=\"tab-pane fade\">
                                <div class=\"thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>
                            </div>
                            <div id=\"tab3\" class=\"tab-pane fade\">
                                <div class=\"thumb\">
                                    <img src=\"assets/img/2440x1578.png\" alt=\"Thumb\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

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
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Ahem Natasha</h4>
                                <span>CEO of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Devid mark</h4>
                                <span>Designer of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Brave Hammam</h4>
                                <span>Manager of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class=\"single-item col-lg-3 col-md-6\">
                        <div class=\"item\">
                            <div class=\"thumb\">
                                <img src=\"assets/img/800x800.png\" alt=\"Thumb\">
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
                                <h4>Mickel Jonam</h4>
                                <span>Developer of Sasoft</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Pricing Area
    ============================================= -->
    <div id=\"pricing\" class=\"pricing-area default-padding-top bottom-less\">
        <!-- Fixed Shape -->
        <div class=\"shape-top\">
            <img src=\"assets/img/shape/9.png\" alt=\"Shape\">
        </div>
        <!-- End Fixed Shape -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading light text-center\">
                        <h2 class=\"area-title\">Our Packages</h2>
                        <div class=\"devider\"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"pricing text-center\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 single-item\">
                        <div class=\"pricing-item\">
                            <ul>
                                <li class=\"pricing-header\">
                                    <h4>Trial Version</h4>
                                    <h2><sup>\$</sup>0 <sub>/ Mo</sub></h2>
                                </li>
                                <li><i class=\"fas fa-check-circle\"></i> Demo file</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Update</li>
                                <li><i class=\"fas fa-check-circle\"></i> File compressed</li>
                                <li><i class=\"fas fa-check-circle\"></i> Commercial use</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Support</li>
                                <li><i class=\"fas fa-minus-circle\"></i> 2 database</li>
                                <li><i class=\"fas fa-check-circle\"></i> Documetation</li>
                                <li class=\"footer\">
                                    <a class=\"btn circle btn-theme border btn-sm\" href=\"#\">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 single-item\">
                        <div class=\"pricing-item\">
                            <ul>
                                <li class=\"pricing-header\">
                                    <h4>Regular</h4>
                                    <h2><sup>\$</sup>29 <sub>/ Mo</sub></h2>
                                </li>
                                <li><i class=\"fas fa-check-circle\"></i> Demo file</li>
                                <li><i class=\"fas fa-check-circle\"></i> Update</li>
                                <li><i class=\"fas fa-check-circle\"></i> File compressed</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Commercial use</li>
                                <li><i class=\"fas fa-check-circle\"></i> Support</li>
                                <li><i class=\"fas fa-minus-circle\"></i> 5 database</li>
                                <li><i class=\"fas fa-check-circle\"></i> Documetation</li>
                                <li class=\"footer\">
                                    <a class=\"btn circle btn-theme effect btn-sm\" href=\"#\">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 single-item\">
                        <div class=\"pricing-item\">
                            <ul>
                                <li class=\"pricing-header\">
                                    <h4>Extended</h4>
                                    <h2><sup>\$</sup>59 <sub>/ Mo</sub></h2>
                                </li>
                                <li><i class=\"fas fa-check-circle\"></i> Demo file</li>
                                <li><i class=\"fas fa-check-circle\"></i> Update</li>
                                <li><i class=\"fas fa-minus-circle\"></i> File compressed</li>
                                <li><i class=\"fas fa-check-circle\"></i> Commercial use</li>
                                <li><i class=\"fas fa-minus-circle\"></i> Support</li>
                                <li><i class=\"fas fa-check-circle\"></i> 8 database</li>
                                <li><i class=\"fas fa-check-circle\"></i> Documetation</li>
                                <li class=\"footer\">
                                    <a class=\"btn circle btn-theme border btn-sm\" href=\"#\">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

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

    <!-- Start Blog 
    ============================================= -->
    <div id=\"blog\" class=\"blog-area default-padding bg-gray bottom-less\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"site-heading text-center\">
                        <h2 class=\"area-title\">Latest News</h2>
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

                <!-- Single Item -->
                <div class=\"single-item col-lg-4 col-md-6\">
                    <div class=\"item\">
                        <div class=\"thumb\">
                            <a href=\"#\"><img src=\"assets/img/800x600.png\" alt=\"Thumb\"></a>
                            <div class=\"date\">12 Dec, 2020</div>
                        </div>
                        <div class=\"info\">
                            <div class=\"meta\">
                                <ul>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-comments\"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href=\"#\">Overcame breeding or my concerns removing. </a>
                            </h4>
                            <p>
                                Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous . 
                            </p>
                            <a href=\"#\" class=\"btn-simple\"><i class=\"fas fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class=\"single-item col-lg-4 col-md-6\">
                    <div class=\"item\">
                        <div class=\"thumb\">
                            <a href=\"#\"><img src=\"assets/img/800x600.png\" alt=\"Thumb\"></a>
                            <div class=\"date\">16 Aug, 2020</div>
                        </div>
                        <div class=\"info\">
                            <div class=\"meta\">
                                <ul>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-comments\"></i> 25 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href=\"#\">Made neat an on be gave show snug tore.</a>
                            </h4>
                            <p>
                                Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous . 
                            </p>
                            <a href=\"#\" class=\"btn-simple\"><i class=\"fas fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class=\"single-item col-lg-4 col-md-6\">
                    <div class=\"item\">
                        <div class=\"thumb\">
                            <a href=\"#\"><img src=\"assets/img/800x600.png\" alt=\"Thumb\"></a>
                            <div class=\"date\">28 Nov, 2020</div>
                        </div>
                        <div class=\"info\">
                            <div class=\"meta\">
                                <ul>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-user\"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fas fa-comments\"></i> 25 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href=\"#\">Assurance concluded son something depending</a>
                            </h4>
                            <p>
                                Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous . 
                            </p>
                            <a href=\"#\" class=\"btn-simple\"><i class=\"fas fa-angle-right\"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Contact 
    ============================================= -->
    <div id=\"contact\" class=\"contact-area default-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 maps\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981\"></iframe>
                </div>
                <div class=\"col-lg-5 contact-forms\">
                    <h2 class=\"area-title\">We’d love to hear from <br> you anytime</h2>
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
                            <img src=\"assets/img/logo-light.png\" alt=\"Logo\">
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
                                    <a href=\"#\"><i class=\"fas fa-angle-right\"></i> Compnay History</a>
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
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href=\"#\">validthemes</a></p>
                    </div>
                    <div class=\"col-lg-6 text-right link\">
                        <ul>
                            <li>
                                <a href=\"#\">Terms</a>
                            </li>
                            <li>
                                <a href=\"#\">Privacy</a>
                            </li>
                            <li>
                                <a href=\"#\">Support</a>
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
    <script src=\"assets/js/jquery-1.12.4.min.js\"></script>
    <script src=\"assets/js/popper.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/jquery.appear.js\"></script>
    <script src=\"assets/js/jquery.easing.min.js\"></script>
    <script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"assets/js/modernizr.custom.13711.js\"></script>
    <script src=\"assets/js/owl.carousel.min.js\"></script>
    <script src=\"assets/js/wow.min.js\"></script>
    <script src=\"assets/js/progress-bar.min.js\"></script>
    <script src=\"assets/js/isotope.pkgd.min.js\"></script>
    <script src=\"assets/js/imagesloaded.pkgd.min.js\"></script>
    <script src=\"assets/js/count-to.js\"></script>
    <script src=\"assets/js/YTPlayer.min.js\"></script>
    <script src=\"assets/js/bootsnav.js\"></script>
    <script src=\"assets/js/main.js\"></script>

</body>
</html>", "index-4.html", "C:\\Users\\X1\\Documents\\wdc\\templates\\index-4.html");
    }
}