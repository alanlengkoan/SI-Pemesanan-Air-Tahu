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
class __TwigTemplate_e06bc93150af908dceef3242714880b22ffb4ca71a9f844566d848b51a168102 extends Template
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Selamat Datang!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 191
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  428 => 191,  416 => 108,  404 => 22,  391 => 6,  382 => 192,  380 => 191,  377 => 190,  372 => 187,  368 => 186,  364 => 185,  360 => 184,  356 => 183,  352 => 182,  348 => 181,  344 => 180,  340 => 179,  336 => 178,  332 => 177,  327 => 176,  324 => 174,  318 => 169,  315 => 167,  277 => 131,  273 => 130,  269 => 129,  250 => 112,  247 => 110,  245 => 109,  242 => 108,  239 => 106,  233 => 101,  227 => 98,  222 => 97,  220 => 96,  215 => 94,  211 => 93,  206 => 91,  202 => 90,  197 => 88,  193 => 87,  187 => 84,  184 => 83,  182 => 82,  169 => 72,  164 => 70,  158 => 66,  155 => 64,  148 => 58,  140 => 56,  134 => 53,  130 => 52,  127 => 51,  125 => 50,  102 => 29,  95 => 23,  93 => 22,  90 => 21,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 11,  56 => 8,  51 => 6,  44 => 1,);
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

</html>", "layout.html.twig", "/home/airtahu.online/templates/layout.html.twig");
    }
}
