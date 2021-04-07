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
class __TwigTemplate_7d16952aec0aafcb83b6ec89bd06227704b2b36f6414ef2c726e7e3464c3d4dc extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50)) {
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
        ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->jumlahKeranjang(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 72), "id_users", [], "any", false, false, false, 72)), "html", null, true))) : (print ("0")));
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
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 82), "get", [0 => "_route"], "method", false, false, false, 82);
        // line 83
        echo "                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"";
        // line 84
        echo (((0 === twig_compare(($context["current_path"] ?? null), "index"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"/\">Beranda</a>
                    </li>
                    <li class=\"";
        // line 87
        echo (((0 === twig_compare(($context["current_path"] ?? null), "tentang"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tentang");
        echo "\">Tentang</a>
                    </li>
                    <li class=\"";
        // line 90
        echo (((0 === twig_compare(($context["current_path"] ?? null), "kontak"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontak");
        echo "\">Kontak</a>
                    </li>
                    <li class=\"";
        // line 93
        echo (((0 === twig_compare(($context["current_path"] ?? null), "produk_sel"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\">Produk</a>
                    </li>
                    ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 96)) {
            // line 97
            echo "                    <li class=\"";
            echo (((0 === twig_compare(($context["current_path"] ?? null), "riwayat"))) ? ("active") : (""));
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
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Selamat Datang!";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 191
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  404 => 191,  398 => 108,  392 => 22,  385 => 6,  379 => 192,  377 => 191,  374 => 190,  369 => 187,  365 => 186,  361 => 185,  357 => 184,  353 => 183,  349 => 182,  345 => 181,  341 => 180,  337 => 179,  333 => 178,  329 => 177,  324 => 176,  321 => 174,  315 => 169,  312 => 167,  274 => 131,  270 => 130,  266 => 129,  247 => 112,  244 => 110,  242 => 109,  239 => 108,  236 => 106,  230 => 101,  224 => 98,  219 => 97,  217 => 96,  212 => 94,  208 => 93,  203 => 91,  199 => 90,  194 => 88,  190 => 87,  184 => 84,  181 => 83,  179 => 82,  166 => 72,  161 => 70,  155 => 66,  152 => 64,  145 => 58,  137 => 56,  131 => 53,  127 => 52,  124 => 51,  122 => 50,  99 => 29,  92 => 23,  90 => 22,  87 => 21,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  58 => 11,  53 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/home/airtahu.online/templates/layout.html.twig");
    }
}
