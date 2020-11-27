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

/* blog-single.html */
class __TwigTemplate_cf0920cedc27b83956e5d24f9f417a0d1eb3af994f868bfe9f5d1864c6dc365a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog-single.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog-single.html"));

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
        <nav class=\"navbar navbar-default navbar-sticky bootsnav on no-full\">

            <div class=\"container\">

                <!-- Start Atribute Navigation -->
                <div class=\"attr-nav\">
                    <ul>
                        <li class=\"button\"><a href=\"#\">Free Trial</a></li>
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
                    <ul class=\"nav navbar-nav navbar-center\" data-in=\"#\" data-out=\"#\">
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
                            <a class=\"smooth-menu\" href=\"index.html#features\">Features</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#overview\">Overview</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#team\">Team</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#pricing\">Pricing</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#blog\">Blog</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#contact\">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class=\"breadcrumb-area shadow dark bg-cover text-center text-light\" style=\"background-image: url(assets/img/2440x1578.png);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <h1>Error Page</h1>
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fas fa-home\"></i> Home</a></li>
                        <li><a href=\"#\">Pages</a></li>
                        <li class=\"active\">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class=\"blog-area single full-blog full-blog default-padding\">
        <div class=\"container\">
            <div class=\"blog-items\">
                <div class=\"row\">
                    <div class=\"blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12\">
                        <div class=\"item\">

                            <div class=\"blog-item-box\">
                                
                                <div class=\"thumb\">
                                    <a href=\"#\"><img src=\"assets/img/1500x700.png\" alt=\"Thumb\"></a>
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
                                    <h2>
                                        <a href=\"#\">Overcame breeding or my concerns removings of management. </a>
                                    </h2>
                                    <p>
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
                                    </p>
                                    <p>
                                        New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <blockquote>
                                        He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness.
                                    </blockquote>
                                    <p>
                                        Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <h4>Conduct replied off led whether?</h4>
                                    <ul>
                                        <li>Pretty merits waited six</li>
                                        <li>General few civilly amiable pleased account carried.</li>
                                        <li>Continue indulged speaking</li>
                                        <li>Narrow formal length my highly</li>
                                        <li>Occasional pianoforte alteration unaffected impossible</li>
                                    </ul>
                                    <p>
                                        Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Iure, laudantium, tempore. Autem dolore repellat, omnis quam? Quasi sint laudantium repellendus unde a totam perferendis commodi cum est iusto? Minima, laborum. 
                                    </p>

                                    
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Pagination -->
                        <div class=\"post-pagi-area\">
                            <a href=\"#\">
                                <i class=\"fas fa-angle-double-left\"></i> Previus Post
                                <h5>Hello World</h5>
                            </a>
                            <a href=\"#\">
                                Next Post <i class=\"fas fa-angle-double-right\"></i>
                                <h5>The earth brown</h5>
                            </a>
                        </div>
                        <!-- End Post Pagination -->

                        <!-- Start Post Tags-->
                        <div class=\"post-tags share\">
                            <div class=\"tags\">
                                <a href=\"#\">Analysis</a>
                                <a href=\"#\">Process</a>
                            </div>
                            <div class=\"social\">
                                <ul>
                                    <li class=\"facebook\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"twitter\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"pinterest\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-pinterest-p\"></i>
                                        </a>
                                    </li>
                                    <li class=\"linkedin\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                        <!-- Start Blog Comment -->
                        <div class=\"blog-comments\">
                            <div class=\"comments-area\">
                                <div class=\"comments-title\">
                                    <h4>
                                        5 comments
                                    </h4>

                                    <div class=\"comments-list\">
                                        <div class=\"commen-item\">
                                            <div class=\"avatar\">
                                                <img src=\"assets/img/800x800.png\" alt=\"Author\">
                                            </div>
                                            <div class=\"content\">
                                                <div class=\"title\">
                                                    <h5>Jonathom Doe</h5>
                                                    <span>28 Aug, 2020</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                                <div class=\"comments-info\">
                                                    <a href=\"\"><i class=\"fa fa-reply\"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"comments-list\">
                                        <div class=\"commen-item\">
                                            <div class=\"avatar\">
                                                <img src=\"assets/img/800x800.png\" alt=\"Author\">
                                            </div>
                                            <div class=\"content\">
                                                <div class=\"title\">
                                                    <h5>Jonathom Doe</h5>
                                                    <span>28 Aug, 2020</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                                <div class=\"comments-info\">
                                                    <a href=\"\"><i class=\"fa fa-reply\"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"commen-item reply\">
                                            <div class=\"avatar\">
                                                <img src=\"assets/img/800x800.png\" alt=\"Author\">
                                            </div>
                                            <div class=\"content\">
                                                <div class=\"title\">
                                                    <h5>Spart Lee</h5>
                                                    <span>17 Feb, 2020</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                                <div class=\"comments-info\">
                                                    <a href=\"\"><i class=\"fa fa-reply\"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"comments-form\">
                                    <div class=\"title\">
                                        <h4>Leave a comments</h4>
                                    </div>
                                    <form action=\"#\" class=\"contact-comments\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <!-- Name -->
                                                    <input name=\"name\" class=\"form-control\" placeholder=\"Name *\" type=\"text\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <!-- Email -->
                                                    <input name=\"email\" class=\"form-control\" placeholder=\"Email *\" type=\"email\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group comments\">
                                                    <!-- Comment -->
                                                    <textarea class=\"form-control\" placeholder=\"Comment\"></textarea>
                                                </div>
                                                <div class=\"form-group full-width submit\">
                                                    <button type=\"submit\">
                                                        Post Comments
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Comments Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

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
        return "blog-single.html";
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
        <nav class=\"navbar navbar-default navbar-sticky bootsnav on no-full\">

            <div class=\"container\">

                <!-- Start Atribute Navigation -->
                <div class=\"attr-nav\">
                    <ul>
                        <li class=\"button\"><a href=\"#\">Free Trial</a></li>
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
                    <ul class=\"nav navbar-nav navbar-center\" data-in=\"#\" data-out=\"#\">
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
                            <a class=\"smooth-menu\" href=\"index.html#features\">Features</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#overview\">Overview</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#team\">Team</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#pricing\">Pricing</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#blog\">Blog</a>
                        </li>
                        <li>
                            <a class=\"smooth-menu\" href=\"index.html#contact\">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class=\"breadcrumb-area shadow dark bg-cover text-center text-light\" style=\"background-image: url(assets/img/2440x1578.png);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <h1>Error Page</h1>
                    <ul class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fas fa-home\"></i> Home</a></li>
                        <li><a href=\"#\">Pages</a></li>
                        <li class=\"active\">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class=\"blog-area single full-blog full-blog default-padding\">
        <div class=\"container\">
            <div class=\"blog-items\">
                <div class=\"row\">
                    <div class=\"blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12\">
                        <div class=\"item\">

                            <div class=\"blog-item-box\">
                                
                                <div class=\"thumb\">
                                    <a href=\"#\"><img src=\"assets/img/1500x700.png\" alt=\"Thumb\"></a>
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
                                    <h2>
                                        <a href=\"#\">Overcame breeding or my concerns removings of management. </a>
                                    </h2>
                                    <p>
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
                                    </p>
                                    <p>
                                        New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <blockquote>
                                        He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness.
                                    </blockquote>
                                    <p>
                                        Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <h4>Conduct replied off led whether?</h4>
                                    <ul>
                                        <li>Pretty merits waited six</li>
                                        <li>General few civilly amiable pleased account carried.</li>
                                        <li>Continue indulged speaking</li>
                                        <li>Narrow formal length my highly</li>
                                        <li>Occasional pianoforte alteration unaffected impossible</li>
                                    </ul>
                                    <p>
                                        Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Iure, laudantium, tempore. Autem dolore repellat, omnis quam? Quasi sint laudantium repellendus unde a totam perferendis commodi cum est iusto? Minima, laborum. 
                                    </p>

                                    
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Pagination -->
                        <div class=\"post-pagi-area\">
                            <a href=\"#\">
                                <i class=\"fas fa-angle-double-left\"></i> Previus Post
                                <h5>Hello World</h5>
                            </a>
                            <a href=\"#\">
                                Next Post <i class=\"fas fa-angle-double-right\"></i>
                                <h5>The earth brown</h5>
                            </a>
                        </div>
                        <!-- End Post Pagination -->

                        <!-- Start Post Tags-->
                        <div class=\"post-tags share\">
                            <div class=\"tags\">
                                <a href=\"#\">Analysis</a>
                                <a href=\"#\">Process</a>
                            </div>
                            <div class=\"social\">
                                <ul>
                                    <li class=\"facebook\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"twitter\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"pinterest\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-pinterest-p\"></i>
                                        </a>
                                    </li>
                                    <li class=\"linkedin\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                        <!-- Start Blog Comment -->
                        <div class=\"blog-comments\">
                            <div class=\"comments-area\">
                                <div class=\"comments-title\">
                                    <h4>
                                        5 comments
                                    </h4>

                                    <div class=\"comments-list\">
                                        <div class=\"commen-item\">
                                            <div class=\"avatar\">
                                                <img src=\"assets/img/800x800.png\" alt=\"Author\">
                                            </div>
                                            <div class=\"content\">
                                                <div class=\"title\">
                                                    <h5>Jonathom Doe</h5>
                                                    <span>28 Aug, 2020</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                                <div class=\"comments-info\">
                                                    <a href=\"\"><i class=\"fa fa-reply\"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"comments-list\">
                                        <div class=\"commen-item\">
                                            <div class=\"avatar\">
                                                <img src=\"assets/img/800x800.png\" alt=\"Author\">
                                            </div>
                                            <div class=\"content\">
                                                <div class=\"title\">
                                                    <h5>Jonathom Doe</h5>
                                                    <span>28 Aug, 2020</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                                <div class=\"comments-info\">
                                                    <a href=\"\"><i class=\"fa fa-reply\"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"commen-item reply\">
                                            <div class=\"avatar\">
                                                <img src=\"assets/img/800x800.png\" alt=\"Author\">
                                            </div>
                                            <div class=\"content\">
                                                <div class=\"title\">
                                                    <h5>Spart Lee</h5>
                                                    <span>17 Feb, 2020</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                </p>
                                                <div class=\"comments-info\">
                                                    <a href=\"\"><i class=\"fa fa-reply\"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"comments-form\">
                                    <div class=\"title\">
                                        <h4>Leave a comments</h4>
                                    </div>
                                    <form action=\"#\" class=\"contact-comments\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <!-- Name -->
                                                    <input name=\"name\" class=\"form-control\" placeholder=\"Name *\" type=\"text\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <!-- Email -->
                                                    <input name=\"email\" class=\"form-control\" placeholder=\"Email *\" type=\"email\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group comments\">
                                                    <!-- Comment -->
                                                    <textarea class=\"form-control\" placeholder=\"Comment\"></textarea>
                                                </div>
                                                <div class=\"form-group full-width submit\">
                                                    <button type=\"submit\">
                                                        Post Comments
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Comments Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

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
</html>", "blog-single.html", "C:\\Users\\X1\\Documents\\wdc\\templates\\blog-single.html");
    }
}