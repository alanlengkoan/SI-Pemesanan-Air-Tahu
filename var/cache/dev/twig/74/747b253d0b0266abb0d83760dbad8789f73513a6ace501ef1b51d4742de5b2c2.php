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

/* layout.html.twig */
class __TwigTemplate_a7c5f3c53341910e0ae9102bd66d4789f814f97f0c8cdcb20ded2efa4e5d4d3b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Air Tahu | ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/logo.png"), "html", null, true);
        echo "\">
    
    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
</head>

<body>
    ";
        // line 29
        echo "    <div class=\"wrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 d-flex align-items-center\">
                    <p class=\"mb-0 phone pl-md-2\">
                        <a href=\"#\" class=\"mr-2\"><span class=\"fa fa-phone mr-1\"></span>+62 823-8577-2148</a>
                        <a href=\"#\"><span class=\"fa fa-paper-plane mr-1\"></span>an.three20@gmail.com</a>
                    </p>
                </div>
                <div class=\"col-md-6 d-flex justify-content-md-end\">
                    <div class=\"social-media mr-4\">
                        <p class=\"mb-0 d-flex\">
                            <a href=\"https://m.facebook.com/airtahusuper/?ref=bookmarks\" target=\"_blank\" class=\"d-flex align-items-center justify-content-center\">
                                <span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span>
                            </a>
                            <a href=\"https://www.instagram.com/airtahusuper\" target=\"_blank\" class=\"d-flex align-items-center justify-content-center\">
                                <span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span>
                            </a>
                        </p>
                    </div>
                    <div class=\"reg\">
                        ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "                            <p class=\"mb-0\">
                                <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\" class=\"mr-2\">Profil</a>
                                <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Keluar</a>
                            </p>
                        ";
        } else {
            // line 56
            echo "                            <p class=\"mb-0\"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"mr-2\">Daftar</a> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_user");
            echo "\">Masuk</a></p>
                        ";
        }
        // line 58
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 64
        echo "
    ";
        // line 66
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/\">Air Tahu <span>Super</span></a>
            <div class=\"order-lg-last btn-group\">
                <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("keranjang");
        echo "\" class=\"btn-cart dropdown-toggle dropdown-toggle-split\">
                    <span class=\"flaticon-shopping-bag\"></span>
                    <div class=\"d-flex justify-content-center align-items-center\"><small>";
        // line 72
        ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->jumlahKeranjang(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "id_users", [], "any", false, false, false, 72)), "html", null, true))) : (print ("0")));
        echo "</small></div>
                </a>
            </div>

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\"
                aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                ";
        // line 82
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "get", [0 => "_route"], "method", false, false, false, 82);
        // line 83
        echo "                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"";
        // line 84
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 84, $this->source); })()), "index"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"/\">Beranda</a>
                    </li>
                    <li class=\"";
        // line 87
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 87, $this->source); })()), "tentang"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tentang");
        echo "\">Tentang</a>
                    </li>
                    <li class=\"";
        // line 90
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 90, $this->source); })()), "kontak"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontak");
        echo "\">Kontak</a>
                    </li>
                    <li class=\"";
        // line 93
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 93, $this->source); })()), "produk_sel"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\">Produk</a>
                    </li>
                    ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96)) {
            // line 97
            echo "                    <li class=\"";
            echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 97, $this->source); })()), "riwayat"))) ? ("active") : (""));
            echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("riwayat");
            echo "\">Riwayat</a>
                    </li>
                    ";
        }
        // line 101
        echo "                </ul>
            </div>
        </div>
    </nav>
    ";
        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "    ";
        // line 110
        echo "
    ";
        // line 112
        echo "    <footer class=\"ftco-footer\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-sm-12 col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2 logo\"><a href=\"#\">Air Tahu <span>Super</span></a></h2>
                        <p>Silahkan cari kami di :</p>
                        <ul class=\"ftco-footer-social list-unstyled mt-2\">
                            <li class=\"ftco-animate\"><a href=\"https://m.facebook.com/airtahusuper/?ref=bookmarks\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"https://www.instagram.com/airtahusuper\" target=\"_blank\"><span class=\"fa fa-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md\">
                    <div class=\"ftco-footer-widget mb-4 ml-md-4\">
                        <h2 class=\"ftco-heading-2\">Informasi</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\"><span class=\"fa fa-chevron-right mr-2\"></span>Produk</a></li>
                            <li><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tentang");
        echo "\"><span class=\"fa fa-chevron-right mr-2\"></span>Tentang</a></li>
                            <li><a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontak");
        echo "\"><span class=\"fa fa-chevron-right mr-2\"></span>Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">Ada pertanyaan?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon fa fa-map marker\"></span><span class=\"text\">Jl. Ade Irma Nasution No. 14B, Ujung Pandang Baru, Kec. Tallo, Kota Makassar, Sulawesi Selatan 90215.</p></span></li>
                                <li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+62 823-8577-2148</span></a></li>
                                <li><a href=\"#\"><span class=\"icon fa fa-paper-plane pr-4\"></span><span class=\"text\">an.three20@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid px-0 py-5 bg-black\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <p class=\"mb-0\" style=\"color: rgba(255,255,255,.5);\">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air Tahu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    ";
        // line 167
        echo "
    ";
        // line 169
        echo "    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\">
        <circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\" />
        <circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\" /></svg>
    </div>
    ";
        // line 174
        echo "
    ";
        // line 176
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/main.js"), "html", null, true);
        echo "\"></script>
    </script>
    ";
        // line 190
        echo "
    ";
        // line 191
        $this->displayBlock('javascripts', $context, $blocks);
        // line 192
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Selamat Datang!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 191,  434 => 108,  416 => 22,  397 => 6,  385 => 192,  383 => 191,  380 => 190,  375 => 187,  371 => 186,  367 => 185,  363 => 184,  359 => 183,  355 => 182,  351 => 181,  347 => 180,  343 => 179,  339 => 178,  335 => 177,  330 => 176,  327 => 174,  321 => 169,  318 => 167,  280 => 131,  276 => 130,  272 => 129,  253 => 112,  250 => 110,  248 => 109,  245 => 108,  242 => 106,  236 => 101,  230 => 98,  225 => 97,  223 => 96,  218 => 94,  214 => 93,  209 => 91,  205 => 90,  200 => 88,  196 => 87,  190 => 84,  187 => 83,  185 => 82,  172 => 72,  167 => 70,  161 => 66,  158 => 64,  151 => 58,  143 => 56,  137 => 53,  133 => 52,  130 => 51,  128 => 50,  105 => 29,  98 => 23,  96 => 22,  93 => 21,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  64 => 11,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Air Tahu | {% block title %}Selamat Datang!{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/admin/images/logo.png') }}\">
    
    {# begin:: asset public css #}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/style.css') }}\">
    {# end:: asset public css #}

    {% block stylesheets %}{% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
</head>

<body>
    {# begin:: navbar head #}
    <div class=\"wrap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 d-flex align-items-center\">
                    <p class=\"mb-0 phone pl-md-2\">
                        <a href=\"#\" class=\"mr-2\"><span class=\"fa fa-phone mr-1\"></span>+62 823-8577-2148</a>
                        <a href=\"#\"><span class=\"fa fa-paper-plane mr-1\"></span>an.three20@gmail.com</a>
                    </p>
                </div>
                <div class=\"col-md-6 d-flex justify-content-md-end\">
                    <div class=\"social-media mr-4\">
                        <p class=\"mb-0 d-flex\">
                            <a href=\"https://m.facebook.com/airtahusuper/?ref=bookmarks\" target=\"_blank\" class=\"d-flex align-items-center justify-content-center\">
                                <span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span>
                            </a>
                            <a href=\"https://www.instagram.com/airtahusuper\" target=\"_blank\" class=\"d-flex align-items-center justify-content-center\">
                                <span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span>
                            </a>
                        </p>
                    </div>
                    <div class=\"reg\">
                        {% if app.user %}
                            <p class=\"mb-0\">
                                <a href=\"{{ path('profil') }}\" class=\"mr-2\">Profil</a>
                                <a href=\"{{ path('app_logout') }}\">Keluar</a>
                            </p>
                        {% else %}
                            <p class=\"mb-0\"> <a href=\"{{ path('register') }}\" class=\"mr-2\">Daftar</a> <a href=\"{{ path('login_user') }}\">Masuk</a></p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# end:: navbar head #}

    {# begin:: navbar #}
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/\">Air Tahu <span>Super</span></a>
            <div class=\"order-lg-last btn-group\">
                <a href=\"{{ path('keranjang') }}\" class=\"btn-cart dropdown-toggle dropdown-toggle-split\">
                    <span class=\"flaticon-shopping-bag\"></span>
                    <div class=\"d-flex justify-content-center align-items-center\"><small>{{ (app.user) ? app.user.id_users|count : '0' }}</small></div>
                </a>
            </div>

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\"
                aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                {% set current_path = app.request.get('_route') %}
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"{{ (current_path == 'index') ? 'active' : '' }} nav-item\">
                        <a class=\"nav-link\" href=\"/\">Beranda</a>
                    </li>
                    <li class=\"{{ (current_path == 'tentang') ? 'active' : '' }} nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('tentang') }}\">Tentang</a>
                    </li>
                    <li class=\"{{ (current_path == 'kontak') ? 'active' : '' }} nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('kontak') }}\">Kontak</a>
                    </li>
                    <li class=\"{{ (current_path == 'produk_sel') ? 'active' : '' }} nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('produk_sel') }}\">Produk</a>
                    </li>
                    {% if app.user %}
                    <li class=\"{{ (current_path == 'riwayat') ? 'active' : '' }} nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('riwayat') }}\">Riwayat</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
    {# end:: navbar #}

    {# begin:: body #}
    {% block body %}{% endblock %}
    {# end:: body #}

    {# begin:: footer #}
    <footer class=\"ftco-footer\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-sm-12 col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2 logo\"><a href=\"#\">Air Tahu <span>Super</span></a></h2>
                        <p>Silahkan cari kami di :</p>
                        <ul class=\"ftco-footer-social list-unstyled mt-2\">
                            <li class=\"ftco-animate\"><a href=\"https://m.facebook.com/airtahusuper/?ref=bookmarks\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"https://www.instagram.com/airtahusuper\" target=\"_blank\"><span class=\"fa fa-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md\">
                    <div class=\"ftco-footer-widget mb-4 ml-md-4\">
                        <h2 class=\"ftco-heading-2\">Informasi</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"{{ path('produk_sel') }}\"><span class=\"fa fa-chevron-right mr-2\"></span>Produk</a></li>
                            <li><a href=\"{{ path('tentang') }}\"><span class=\"fa fa-chevron-right mr-2\"></span>Tentang</a></li>
                            <li><a href=\"{{ path('kontak') }}\"><span class=\"fa fa-chevron-right mr-2\"></span>Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">Ada pertanyaan?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon fa fa-map marker\"></span><span class=\"text\">Jl. Ade Irma Nasution No. 14B, Ujung Pandang Baru, Kec. Tallo, Kota Makassar, Sulawesi Selatan 90215.</p></span></li>
                                <li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+62 823-8577-2148</span></a></li>
                                <li><a href=\"#\"><span class=\"icon fa fa-paper-plane pr-4\"></span><span class=\"text\">an.three20@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid px-0 py-5 bg-black\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <p class=\"mb-0\" style=\"color: rgba(255,255,255,.5);\">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air Tahu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {# end:: footer #}

    {# begin:: loader #}
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\">
        <circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\" />
        <circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\" /></svg>
    </div>
    {# end:: loader #}

    {# begin:: asset public js #}
    <script src=\"{{ asset('assets/user/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/jquery-migrate-3.0.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/jquery.easing.1.3.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/jquery.waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/jquery.stellar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/jquery.animateNumber.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/scrollax.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/main.js') }}\"></script>
    </script>
    {# end:: asset public js #}

    {% block javascripts %}{% endblock %}
</body>

</html>", "layout.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\layout.html.twig");
    }
}
