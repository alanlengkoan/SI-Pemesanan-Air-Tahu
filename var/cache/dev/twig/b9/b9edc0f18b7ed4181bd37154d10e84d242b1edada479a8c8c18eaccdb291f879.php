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

/* admin/layout_admin.html.twig */
class __TwigTemplate_8d8251b0309964240e523cb5b32de2b7abb573bdbd70b035b3236c53934ea088 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

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
        echo "                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>
                        ";
        // line 107
        echo "                        ";
        // line 108
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "nama", [], "any", false, false, false, 111), "html", null, true);
        echo "</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profil");
        echo "\"><i data-feather=\"user\" class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <i data-feather=\"power\" class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
                            </div>
                        </li>
                        ";
        // line 120
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
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                                <i class=\"fa fa-tachometer\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Master </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bank");
        echo "\">
                                <i class=\"fa fa-bank\"></i>
                                <span class=\"hide-menu\"> Bank </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk");
        echo "\">
                                <i class=\"fas fa-tag\"></i>
                                <span class=\"hide-menu\"> Produk </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock");
        echo "\">
                                <i class=\"fa fa-houzz\"></i>
                                <span class=\"hide-menu\"> Stock </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelanggan");
        echo "\">
                                <i class=\"fa fa-users\"></i>
                                <span class=\"hide-menu\"> Pelanggan </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_kurir");
        echo "\">
                                <i class=\"fa fa-motorcycle\"></i>
                                <span class=\"hide-menu\"> Kurir </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Transaksi </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pemesanan");
        echo "\">
                                <i class=\"fa fa-shopping-cart\"></i>
                                <span class=\"hide-menu\"> Pemesanan </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pembelian");
        echo "\">
                                <i class=\"fa fa-shopping-bag\"></i>
                                <span class=\"hide-menu\"> Pembelian </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Laporan </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laporan");
        echo "\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laporan_bulanan");
        echo "\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan Bulanan</span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laporan_tahunan");
        echo "\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan Tahunan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"page-wrapper\">
            ";
        // line 207
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 208
        echo "            ";
        // line 209
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
        // line 220
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/app-style-switcher.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/feather.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/c3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    ";
        // line 232
        echo "
    ";
        // line 233
        $this->displayBlock('javascripts', $context, $blocks);
        // line 234
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

    // line 207
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

    // line 233
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
        return "admin/layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 233,  441 => 207,  423 => 28,  404 => 8,  392 => 234,  390 => 233,  387 => 232,  382 => 229,  378 => 228,  374 => 227,  370 => 226,  366 => 225,  362 => 224,  358 => 223,  354 => 222,  350 => 221,  345 => 220,  333 => 209,  331 => 208,  328 => 207,  314 => 195,  305 => 189,  296 => 183,  285 => 175,  276 => 169,  265 => 161,  256 => 155,  247 => 149,  238 => 143,  229 => 137,  218 => 129,  207 => 120,  201 => 116,  197 => 115,  190 => 111,  185 => 108,  183 => 107,  132 => 57,  119 => 46,  100 => 29,  98 => 28,  86 => 18,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  65 => 12,  60 => 9,  56 => 8,  47 => 1,);
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
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
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
                                <a class=\"dropdown-item\" href=\"{{ path('admin_profil') }}\"><i data-feather=\"user\" class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
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
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin') }}\">
                                <i class=\"fa fa-tachometer\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Master </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('bank') }}\">
                                <i class=\"fa fa-bank\"></i>
                                <span class=\"hide-menu\"> Bank </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('produk') }}\">
                                <i class=\"fas fa-tag\"></i>
                                <span class=\"hide-menu\"> Produk </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('stock') }}\">
                                <i class=\"fa fa-houzz\"></i>
                                <span class=\"hide-menu\"> Stock </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('pelanggan') }}\">
                                <i class=\"fa fa-users\"></i>
                                <span class=\"hide-menu\"> Pelanggan </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_kurir') }}\">
                                <i class=\"fa fa-motorcycle\"></i>
                                <span class=\"hide-menu\"> Kurir </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Transaksi </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('pemesanan') }}\">
                                <i class=\"fa fa-shopping-cart\"></i>
                                <span class=\"hide-menu\"> Pemesanan </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('pembelian') }}\">
                                <i class=\"fa fa-shopping-bag\"></i>
                                <span class=\"hide-menu\"> Pembelian </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Laporan </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('laporan') }}\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('laporan_bulanan') }}\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan Bulanan</span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('laporan_tahunan') }}\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan Tahunan</span>
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

    {% block javascripts %}{% endblock %}
</body>

</html>", "admin/layout_admin.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\layout_admin.html.twig");
    }
}
