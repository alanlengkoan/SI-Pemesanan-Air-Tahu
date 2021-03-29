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

/* kurir/layout_kurir.html.twig */
class __TwigTemplate_c93eaea4ced5eeaabab67156797bba7a8dd91b54b8a070bc225df3961a3f1b1a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kurir/layout_kurir.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kurir/layout_kurir.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/logo.png"), "html", null, true);
        echo "\">

    ";
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/c3.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/chartist/dist/chartist.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/css/style.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 18
        echo "
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <style>
    .parsley-errors-list {
        color: red;
        list-style-type: none;
        padding: 0;
    }
    </style>
    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "</head>

<body>
    <div class=\"preloader\">
        <div class=\"lds-ripple\">
            <div class=\"lds-pos\"></div>
            <div class=\"lds-pos\"></div>
        </div>
    </div>
    <div id=\"main-wrapper\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
        data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
        <header class=\"topbar\" data-navbarbg=\"skin6\">
            <nav class=\"navbar top-navbar navbar-expand-md\">
                <div class=\"navbar-header\" data-logobg=\"skin6\">
                    <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
                    <div class=\"navbar-brand\">
                        <span>
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/logo.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"dark-logo logo\">
                        </span>
                    </div>
                    <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\">
                      <h3 class=\"page-title text-truncate text-dark font-weight-medium\">Sistem Informasi Penjualan Air Tahu</h3>
                    </ul>
                    <ul class=\"navbar-nav float-right\">
                        ";
        // line 57
        echo "                            <li class=\"nav-item dropdown no-arrow mx-1\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-bell fa-fw\"></i>
                                    ";
        // line 61
        echo "                                    <span class=\"badge badge-danger badge-counter count\">0</span>
                                    ";
        // line 63
        echo "                                </a>
                                <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                    aria-labelledby=\"alertsDropdown\">
                                    ";
        // line 67
        echo "                                    <h6 class=\"dropdown-header\">
                                        Kosong
                                    </h6>
                                    <div id=\"notification\"></div>
                                    ";
        // line 72
        echo "                                </div>
                            </li>
                        ";
        // line 75
        echo "                        ";
        // line 76
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "nama", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kurir_profil");
        echo "\"><i data-feather=\"user\" class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <i data-feather=\"power\" class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
                            </div>
                        </li>
                        ";
        // line 88
        echo "                    </ul>
                </div>
            </nav>
        </header>
        <aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
            <div class=\"scroll-sidebar\" data-sidebarbg=\"skin6\">
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kurir");
        echo "\">
                                <i class=\"fa fa-tachometer\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\">Transaksi</span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kurir_pemesanan");
        echo "\">
                                <i class=\"fa fa-shopping-cart\"></i>
                                <span class=\"hide-menu\">Pemesanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"page-wrapper\">
            ";
        // line 117
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "            ";
        // line 119
        echo "            <footer class=\"footer text-center text-muted\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air Tahu.
            </footer>
        </div>
    </div>

    ";
        // line 130
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/app-style-switcher.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/feather.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/c3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    ";
        // line 142
        echo "
      <script>
        load_notification()

        function load_notification() {
            \$.ajax({
                type: 'GET',
                url: '/kurir/load_notification',
                dataType: 'json',
                success: function (response) {                    
                    if (response.count > 0) {
                        \$('.count').html(response.count)
                        \$('.dropdown-header').html(\"Pemberitahuan baru\");

                        const order = response.result;
                        var html = \"\";
                        
                        order.forEach(function (object) {
                            html += `
                                <a class=\"dropdown-item d-flex align-items-center lihat\" data-id=\"` + object.kd_pemesanan + `\" href=\"/kurir/pemesanan/detail/` + object.kd_pemesanan + `\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-shopping-cart text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">` + format_date(object.tgl_pemesanan.date) + `</div>
                                        <span class=\"font-weight-bold\">` + object.kd_pemesanan + ` | ` + object.nama + `</span>
                                    </div>
                                </a>
                            `;
                        });

                        \$('#notification').html(html);
                    } else {
                        \$('.dropdown-header').html(\"Kosong\");
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Request Ajax Gagal : ' + xhr.responseText;
                    console.log(errorMsg);
                }
            });
        }

        setInterval(function() {
            load_notification()
        }, 5000);

        // untuk update baca pemberitahuan
        \$(document).on('click', '.lihat', function(){
            var ini = \$(this);
            \$.post('/kurir/read_notification', {kd_pemesanan: ini.data('id')});
        });

        function format_date(date) {
            var date = new Date(date);
            var result = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '-' + ('0' + (date.getMonth() + 1))) + '-' + date.getFullYear();
            return result;
        }
    </script>

    ";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 205
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
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

    // line 117
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

    // line 204
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
        return "kurir/layout_kurir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 204,  389 => 117,  371 => 28,  352 => 8,  340 => 205,  338 => 204,  274 => 142,  269 => 139,  265 => 138,  261 => 137,  257 => 136,  253 => 135,  249 => 134,  245 => 133,  241 => 132,  237 => 131,  232 => 130,  220 => 119,  218 => 118,  215 => 117,  201 => 105,  190 => 97,  179 => 88,  173 => 84,  169 => 83,  162 => 79,  157 => 76,  155 => 75,  151 => 72,  145 => 67,  140 => 63,  137 => 61,  132 => 57,  119 => 46,  100 => 29,  98 => 28,  86 => 18,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  65 => 12,  60 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Welcome{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/admin/images/logo.png') }}\">

    {# begin:: asset public css #}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/extra-libs/c3/c3.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/libs/chartist/dist/chartist.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/dist/css/style.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/font-awesome/css/font-awesome.min.css') }}\" />
    {# end:: asset public css #}

    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <style>
    .parsley-errors-list {
        color: red;
        list-style-type: none;
        padding: 0;
    }
    </style>
    {% block stylesheets %}{% endblock %}
</head>

<body>
    <div class=\"preloader\">
        <div class=\"lds-ripple\">
            <div class=\"lds-pos\"></div>
            <div class=\"lds-pos\"></div>
        </div>
    </div>
    <div id=\"main-wrapper\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
        data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
        <header class=\"topbar\" data-navbarbg=\"skin6\">
            <nav class=\"navbar top-navbar navbar-expand-md\">
                <div class=\"navbar-header\" data-logobg=\"skin6\">
                    <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
                    <div class=\"navbar-brand\">
                        <span>
                            <img src=\"{{ asset('assets/admin/images/logo.png') }}\" alt=\"homepage\" class=\"dark-logo logo\">
                        </span>
                    </div>
                    <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\">
                      <h3 class=\"page-title text-truncate text-dark font-weight-medium\">Sistem Informasi Penjualan Air Tahu</h3>
                    </ul>
                    <ul class=\"navbar-nav float-right\">
                        {# begin:: notifikasi #}
                            <li class=\"nav-item dropdown no-arrow mx-1\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-bell fa-fw\"></i>
                                    {# begin:: untuk jumlah notifikasi #}
                                    <span class=\"badge badge-danger badge-counter count\">0</span>
                                    {# end:: untuk jumlah notifikasi #}
                                </a>
                                <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                    aria-labelledby=\"alertsDropdown\">
                                    {# begin:: alert #}
                                    <h6 class=\"dropdown-header\">
                                        Kosong
                                    </h6>
                                    <div id=\"notification\"></div>
                                    {# end:: alert #}
                                </div>
                            </li>
                        {# end:: notifikasi #}
                        {# begin:: user #}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">{{ app.user.nama }}</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"{{ path('kurir_profil') }}\"><i data-feather=\"user\" class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"> <i data-feather=\"power\" class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
                            </div>
                        </li>
                        {# end:: user #}
                    </ul>
                </div>
            </nav>
        </header>
        <aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
            <div class=\"scroll-sidebar\" data-sidebarbg=\"skin6\">
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('kurir') }}\">
                                <i class=\"fa fa-tachometer\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\">Transaksi</span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('kurir_pemesanan') }}\">
                                <i class=\"fa fa-shopping-cart\"></i>
                                <span class=\"hide-menu\">Pemesanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"page-wrapper\">
            {# begin:: body #}
            {% block body %}{% endblock %}
            {# end:: body #}
            <footer class=\"footer text-center text-muted\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air Tahu.
            </footer>
        </div>
    </div>

    {# begin:: asset public js #}
    <script src=\"{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/app-style-switcher.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/feather.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/sidebarmenu.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/custom.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/c3/d3.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/c3/c3.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    {# end:: asset public js #}

      <script>
        load_notification()

        function load_notification() {
            \$.ajax({
                type: 'GET',
                url: '/kurir/load_notification',
                dataType: 'json',
                success: function (response) {                    
                    if (response.count > 0) {
                        \$('.count').html(response.count)
                        \$('.dropdown-header').html(\"Pemberitahuan baru\");

                        const order = response.result;
                        var html = \"\";
                        
                        order.forEach(function (object) {
                            html += `
                                <a class=\"dropdown-item d-flex align-items-center lihat\" data-id=\"` + object.kd_pemesanan + `\" href=\"/kurir/pemesanan/detail/` + object.kd_pemesanan + `\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-shopping-cart text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">` + format_date(object.tgl_pemesanan.date) + `</div>
                                        <span class=\"font-weight-bold\">` + object.kd_pemesanan + ` | ` + object.nama + `</span>
                                    </div>
                                </a>
                            `;
                        });

                        \$('#notification').html(html);
                    } else {
                        \$('.dropdown-header').html(\"Kosong\");
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Request Ajax Gagal : ' + xhr.responseText;
                    console.log(errorMsg);
                }
            });
        }

        setInterval(function() {
            load_notification()
        }, 5000);

        // untuk update baca pemberitahuan
        \$(document).on('click', '.lihat', function(){
            var ini = \$(this);
            \$.post('/kurir/read_notification', {kd_pemesanan: ini.data('id')});
        });

        function format_date(date) {
            var date = new Date(date);
            var result = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '-' + ('0' + (date.getMonth() + 1))) + '-' + date.getFullYear();
            return result;
        }
    </script>

    {% block javascripts %}{% endblock %}
</body>

</html>", "kurir/layout_kurir.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\kurir\\layout_kurir.html.twig");
    }
}
