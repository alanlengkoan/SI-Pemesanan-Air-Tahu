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
class __TwigTemplate_00f22918b1c45ccb9bc88d4e5985adea0e007b48007994731f19194268623db2 extends Template
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
    <style>
    .parsley-errors-list {
        color: red;
        list-style-type: none;
        padding: 0;
    }
    </style>
    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
</head>

<body>
    ";
        // line 36
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
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "                            <p class=\"mb-0\">
                                <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\" class=\"mr-2\">Profil</a>
                                <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Keluar</a>
                            </p>
                        ";
        } else {
            // line 63
            echo "                            <p class=\"mb-0\"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"mr-2\">Daftar</a> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_user");
            echo "\">Masuk</a></p>
                        ";
        }
        // line 65
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 71
        echo "
    ";
        // line 73
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/\">Air Tahu <span>Super</span></a>
            <div class=\"order-lg-last btn-group\">
                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("keranjang");
        echo "\" class=\"btn-cart dropdown-toggle dropdown-toggle-split\">
                    <span class=\"flaticon-shopping-bag\"></span>
                    <div class=\"d-flex justify-content-center align-items-center\"><small>";
        // line 79
        ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79)) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->jumlahKeranjang(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79), "id_users", [], "any", false, false, false, 79)), "html", null, true))) : (print ("0")));
        echo "</small></div>
                </a>
            </div>

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\"
                aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                ";
        // line 89
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "get", [0 => "_route"], "method", false, false, false, 89);
        // line 90
        echo "                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"";
        // line 91
        echo (((0 === twig_compare(($context["current_path"] ?? null), "index"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"/\">Beranda</a>
                    </li>
                    <li class=\"";
        // line 94
        echo (((0 === twig_compare(($context["current_path"] ?? null), "tentang"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tentang");
        echo "\">Tentang</a>
                    </li>
                    <li class=\"";
        // line 97
        echo (((0 === twig_compare(($context["current_path"] ?? null), "kontak"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontak");
        echo "\">Kontak</a>
                    </li>
                    <li class=\"";
        // line 100
        echo (((0 === twig_compare(($context["current_path"] ?? null), "produk_sel"))) ? ("active") : (""));
        echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\">Produk</a>
                    </li>
                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 103)) {
            // line 104
            echo "                    <li class=\"";
            echo (((0 === twig_compare(($context["current_path"] ?? null), "riwayat"))) ? ("active") : (""));
            echo " nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("riwayat");
            echo "\">Riwayat</a>
                    </li>
                    ";
        }
        // line 108
        echo "                </ul>
            </div>
        </div>
    </nav>
    ";
        // line 113
        echo "
    ";
        // line 115
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "    ";
        // line 117
        echo "
    ";
        // line 119
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
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\"><span class=\"fa fa-chevron-right mr-2\"></span>Produk</a></li>
                            <li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tentang");
        echo "\"><span class=\"fa fa-chevron-right mr-2\"></span>Tentang</a></li>
                            <li><a href=\"";
        // line 138
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
        // line 174
        echo "
    ";
        // line 176
        echo "    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\">
        <circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\" />
        <circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\" /></svg>
    </div>
    ";
        // line 181
        echo "
    ";
        // line 183
        echo "    <div class=\"modal fade\" id=\"modalRating\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h6>Status Pemesanan</h6>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row text-center pt-2\">
                        <div class=\"col-12\">
                            <h2 style=\"margin-bottom: 10px; font-size: 25px;\">Pesanan telah diterima</h2>
                            <form id=\"form-submit\" action=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_rating");
        echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"id_users\" id=\"id_users\" />
                                <input type=\"hidden\" name=\"kd_pemesanan\" id=\"kd_pemesanan\" />

                                <p style=\"margin-bottom: 0; text-align: left;\">Beri rating :</p>
                                <div class=\"row justify-content-center\">
                                    <div class=\"col-7 col-sm-5 col-md-5 col-lg-5\">
                                        <div class=\"rating\">
                                            <input type=\"radio\" name=\"bintang\" id=\"bintang1\" value=\"5\"><label for=\"bintang1\"></label>
                                            <input type=\"radio\" name=\"bintang\" id=\"bintang2\" value=\"4\"><label for=\"bintang2\"></label>
                                            <input type=\"radio\" name=\"bintang\" id=\"bintang3\" value=\"3\"><label for=\"bintang3\"></label>
                                            <input type=\"radio\" name=\"bintang\" id=\"bintang4\" value=\"2\"><label for=\"bintang4\"></label>
                                            <input type=\"radio\" name=\"bintang\" id=\"bintang5\" value=\"1\"><label for=\"bintang5\"></label>
                                        </div>
                                    </div>
                                </div>
                                <p style=\"margin-bottom: 0; text-align: left;\">Punya saran buat kami ?</p>
                                <div class=\"form-group\">
                                    <textarea class=\"form-control\" name=\"komentar\" id=\"komentar\" rows=\"5\" cols=\"5\"></textarea>
                                </div>
                                <input type=\"submit\" name=\"submit\" value=\"Selesai\" class=\"btn btn-primary\" data-dismiss=\"modalRating\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 222
        echo "
    ";
        // line 224
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    ";
        // line 239
        echo "
    <script>
        load_rating()

        function load_rating() {
            \$.ajax({
                type: 'GET',
                url: '/user/load_rating',
                dataType: 'json',
                success: function (response) {
                    const pemesanan = response.pemesanan;
                    pemesanan.forEach(function (object) {
                        \$('#id_users').val(object.id_users);
                        \$('#kd_pemesanan').val(object.kd_pemesanan);
                        \$('#modalRating').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Request Ajax Gagal : ' + xhr.responseText;
                    console.log(errorMsg);
                }
            });
        }

        // untuk submit rating
        var untukSubmitRating = function() {
        \$('#form-submit').submit(function(e) {
            e.preventDefault();

            \$('#komentar').attr('required', 'required');

            if (\$('#form-submit').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {},
                    success: function(data) {
                        swal({
                            title: data.title,
                            text: data.text,
                            icon: data.type,
                            button: data.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();
    </script>

    ";
        // line 299
        $this->displayBlock('javascripts', $context, $blocks);
        // line 300
        echo "</body>

</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Selamat Datang!";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 115
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 299
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
        return array (  517 => 299,  511 => 115,  505 => 29,  498 => 6,  492 => 300,  490 => 299,  428 => 239,  422 => 235,  418 => 234,  414 => 233,  410 => 232,  406 => 231,  402 => 230,  398 => 229,  394 => 228,  390 => 227,  386 => 226,  382 => 225,  377 => 224,  374 => 222,  343 => 193,  331 => 183,  328 => 181,  322 => 176,  319 => 174,  281 => 138,  277 => 137,  273 => 136,  254 => 119,  251 => 117,  249 => 116,  246 => 115,  243 => 113,  237 => 108,  231 => 105,  226 => 104,  224 => 103,  219 => 101,  215 => 100,  210 => 98,  206 => 97,  201 => 95,  197 => 94,  191 => 91,  188 => 90,  186 => 89,  173 => 79,  168 => 77,  162 => 73,  159 => 71,  152 => 65,  144 => 63,  138 => 60,  134 => 59,  131 => 58,  129 => 57,  106 => 36,  99 => 30,  97 => 29,  87 => 21,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  58 => 11,  53 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/home/airtahu.online/templates/layout.html.twig");
    }
}
