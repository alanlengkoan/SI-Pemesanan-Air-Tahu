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

/* home/nota.html.twig */
class __TwigTemplate_e13ed078646425ac8e77681d0b5c33e7b21a50c95648566e45fb7b487de49773 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nota.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nota.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/nota.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail Nota";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Detail Nota</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 18
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"row align-items-end\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Kode Order</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 27, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 27), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Nama</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 33, $this->source); })()), "nama", [], "any", false, false, false, 33), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Email</h5>
                            <input type=\"email\" class=\"form-control-plaintext\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>No. Telepon</h5>
                            <input type=\"number\" class=\"form-control-plaintext\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 45, $this->source); })()), "telepon", [], "any", false, false, false, 45), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jenis Kelamin</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 51
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 51, $this->source); })()), "kelamin", [], "any", false, false, false, 51), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Alamat</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 57, $this->source); })()), "alamat", [], "any", false, false, false, 57), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Tanggal Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 63, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 63), "d-m-Y"), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jam Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 69, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 69), "H:i:s"), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"cart-detail cart-total p-3 p-md-4\">
                        <h3 class=\"billing-heading mb-4\">Pembayaran</h3>
                        <p class=\"d-flex\">
                            <span>Metdoe Pembayaran</span>
                            <span>";
        // line 81
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 81, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 81), "c"))) ? ("COD") : ("Transfer"));
        echo "</span>
                        </p>
                        <p class=\"d-flex\">
                            <span>Status Pembayaran</span>
                            <span>";
        // line 85
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 85, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 85), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "</span>
                        </p>

                        ";
        // line 88
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 88, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 88), "t"))) {
            // line 89
            echo "                            <p class=\"d-flex\">
                                <span>Bank</span>
                                <span>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 91, $this->source); })()), "nama", [], "any", false, false, false, 91), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nomor Rekening</span>
                                <span>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 95, $this->source); })()), "rekening", [], "any", false, false, false, 95), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nama Penyetor</span>
                                <span>";
            // line 99
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 99, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 99), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 99, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 99), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Atas Nama</span>
                                <span>";
            // line 103
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 103, $this->source); })()), "atas_nama", [], "any", false, false, false, 103), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 103, $this->source); })()), "atas_nama", [], "any", false, false, false, 103), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>";
            // line 107
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 107, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 107), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 107, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 107), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Transfer</span>
                                <span>";
            // line 111
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 111, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 111), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 111, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 111), "H:i:s"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Bukti Transfer</span>
                                <span>";
            // line 115
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 115, $this->source); })()), "bukti", [], "any", false, false, false, 115), null))) {
                echo " - ";
            } else {
                echo " <img
                                        src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 116, $this->source); })()), "bukti", [], "any", false, false, false, 116))), "html", null, true);
                echo "\" width=\"100\"
                                        heigth=\"100\" /> ";
            }
            // line 117
            echo "</span>
                            </p>
                            <hr>
                            <p class=\"d-flex total-price\">
                                <span>Jumlah Transfer</span>
                                <span>";
            // line 122
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 122, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 122), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 122, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 122)), "html", null, true))));
            echo "</span>
                            </p>
                            ";
            // line 124
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 124, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 124), "0"))) {
                // line 125
                echo "                            <tr>
                                <td>
                                    <a href=\"/user/transfer/";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 127, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 127), "html", null, true);
                echo "\">Transfer</a>
                                </td>
                            </tr>
                            ";
            }
            // line 131
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 131, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 131), "c"))) {
            // line 132
            echo "                            <p class=\"d-flex\">
                                <span>Nama Bayar</span>
                                <span>";
            // line 134
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 134, $this->source); })()), "nama_bayar", [], "any", false, false, false, 134), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 134, $this->source); })()), "nama_bayar", [], "any", false, false, false, 134), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jumlah Bayar</span>
                                <span>";
            // line 138
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 138, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 138), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 138, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 138)), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Bayar</span>
                                <span>";
            // line 142
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 142, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 142), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 142, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 142), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Bayar</span>
                                <span>";
            // line 146
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 146, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 146), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 146, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 146), "H-i-s"), "html", null, true))));
            echo "</span>
                            </p>
                        ";
        }
        // line 149
        echo "                    </div>
                </div>
            </div>

            <table class=\"table border\">
                <thead class=\"thead-primary\">
                    <tr>
                        <th>No.</th>
                        <th>&nbsp;</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 165
        $context["sum"] = 0;
        // line 166
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_pemesanan_detail"]) || array_key_exists("data_pemesanan_detail", $context) ? $context["data_pemesanan_detail"] : (function () { throw new RuntimeError('Variable "data_pemesanan_detail" does not exist.', 166, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 167
            echo "                    ";
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 167, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 167));
            // line 168
            echo "                    <tr>
                        <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
                        <td><img src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 170))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" /></td>
                        <td>
                            ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 172), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 175), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 178)), "html", null, true);
            echo "
                        </td>
                        <td>
                            <span id=\"sub-total\">";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 181)), "html", null, true);
            echo "</span>
                        </td>
                    </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                    <tr>
                        <td colspan=\"5\" align=\"center\">
                            Total
                        </td>
                        <td align=\"center\">
                            <span id=\"total\">";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 190, $this->source); })())), "html", null, true);
        echo "</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" align=\"center\">
                            Grand Total
                        </td>
                        <td align=\"center\">
                            <span id=\"total\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 198, $this->source); })())), "html", null, true);
        echo "</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"6\" align=\"center\">
                            <button class=\"btn btn-primary py-2 px-4\" type=\"button\" data-id=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 203, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 203), "html", null, true);
        echo "\" id=\"cetak\"> Cetak </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "<script>
    // untuk cetak
    var untukGetIdData = function() {
        \$(document).on('click', '#cetak', function () {
            var ini = \$(this);
            var id = ini.data('id');

            window.location = '/user/cetak/' + id;
        });
    }();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/nota.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 215,  458 => 214,  438 => 203,  430 => 198,  419 => 190,  412 => 185,  394 => 181,  388 => 178,  382 => 175,  376 => 172,  371 => 170,  367 => 169,  364 => 168,  361 => 167,  343 => 166,  341 => 165,  323 => 149,  317 => 146,  310 => 142,  303 => 138,  296 => 134,  292 => 132,  289 => 131,  282 => 127,  278 => 125,  276 => 124,  271 => 122,  264 => 117,  259 => 116,  253 => 115,  246 => 111,  239 => 107,  232 => 103,  225 => 99,  218 => 95,  211 => 91,  207 => 89,  205 => 88,  199 => 85,  192 => 81,  177 => 69,  168 => 63,  159 => 57,  150 => 51,  141 => 45,  132 => 39,  123 => 33,  114 => 27,  103 => 18,  89 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Detail Nota{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Detail Nota</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"row align-items-end\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Kode Order</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.kd_pemesanan }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Nama</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.nama }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Email</h5>
                            <input type=\"email\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.email }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>No. Telepon</h5>
                            <input type=\"number\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.telepon }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jenis Kelamin</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pemesanan.kelamin == 'L') ? 'Laki - laki' : 'Perempuan' }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Alamat</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.alamat }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Tanggal Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.tgl_pemesanan|date('d-m-Y') }}\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jam Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.tgl_pemesanan|date('H:i:s') }}\" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"cart-detail cart-total p-3 p-md-4\">
                        <h3 class=\"billing-heading mb-4\">Pembayaran</h3>
                        <p class=\"d-flex\">
                            <span>Metdoe Pembayaran</span>
                            <span>{{ (data_pemesanan.metode_pembayaran == 'c') ? 'COD' : 'Transfer' }}</span>
                        </p>
                        <p class=\"d-flex\">
                            <span>Status Pembayaran</span>
                            <span>{{ (data_pemesanan.status_pembayaran == 0) ? 'Menunggu Pembayaran' : 'Telah Melakukan Pembayaran' }}</span>
                        </p>

                        {% if data_pemesanan.metode_pembayaran == 't' %}
                            <p class=\"d-flex\">
                                <span>Bank</span>
                                <span>{{ data_pembayaran_detail.nama }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nomor Rekening</span>
                                <span>{{ data_pembayaran_detail.rekening }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nama Penyetor</span>
                                <span>{{ (data_pembayaran_detail.nama_penyetor == null) ? '-' : data_pembayaran_detail.nama_penyetor }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Atas Nama</span>
                                <span>{{ (data_pembayaran_detail.atas_nama == null) ? '-' : data_pembayaran_detail.atas_nama }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>{{ (data_pembayaran_detail.tanggal_transfer == null) ? '-' : data_pembayaran_detail.tanggal_transfer|date('d-m-Y') }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Transfer</span>
                                <span>{{ (data_pembayaran_detail.tanggal_transfer == null) ? '-' : data_pembayaran_detail.tanggal_transfer|date('H:i:s') }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Bukti Transfer</span>
                                <span>{% if (data_pembayaran_detail.bukti == null) %} - {% else %} <img
                                        src=\"{{ asset('uploads/bukti/'~data_pembayaran_detail.bukti) }}\" width=\"100\"
                                        heigth=\"100\" /> {% endif %}</span>
                            </p>
                            <hr>
                            <p class=\"d-flex total-price\">
                                <span>Jumlah Transfer</span>
                                <span>{{ (data_pembayaran_detail.jumlah_transfer == null) ? '-' : data_pembayaran_detail.jumlah_transfer|format_rp }}</span>
                            </p>
                            {% if data_pemesanan.status_pembayaran == '0' %}
                            <tr>
                                <td>
                                    <a href=\"/user/transfer/{{ data_pemesanan.kd_pemesanan }}\">Transfer</a>
                                </td>
                            </tr>
                            {% endif %}
                        {% elseif data_pemesanan.metode_pembayaran == 'c' %}
                            <p class=\"d-flex\">
                                <span>Nama Bayar</span>
                                <span>{{ (data_pembayaran_cod.nama_bayar == null) ? '-' : data_pembayaran_cod.nama_bayar }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jumlah Bayar</span>
                                <span>{{ (data_pembayaran_cod.jumlah_bayar == null) ? '-' : data_pembayaran_cod.jumlah_bayar|format_rp }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Bayar</span>
                                <span>{{ (data_pembayaran_cod.tanggal_bayar == null) ? '-' : data_pembayaran_cod.tanggal_bayar|date('d-m-Y') }}</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Bayar</span>
                                <span>{{ (data_pembayaran_cod.tanggal_bayar == null) ? '-' : data_pembayaran_cod.tanggal_bayar|date('H-i-s') }}</span>
                            </p>
                        {% endif %}
                    </div>
                </div>
            </div>

            <table class=\"table border\">
                <thead class=\"thead-primary\">
                    <tr>
                        <th>No.</th>
                        <th>&nbsp;</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    {% set sum = 0 %}
                    {% for rows in data_pemesanan_detail %}
                    {% set sum = sum + rows.sub_total  %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td><img src=\"{{ asset('uploads/produk/'~rows.gambar) }}\" width=\"100\" heigth=\"100\" /></td>
                        <td>
                            {{ rows.nama }}
                        </td>
                        <td>
                            {{ rows.jumlah }}
                        </td>
                        <td>
                            {{ rows.harga|format_rp }}
                        </td>
                        <td>
                            <span id=\"sub-total\">{{ rows.sub_total|format_rp }}</span>
                        </td>
                    </tr>
                    {% endfor %}
                    <tr>
                        <td colspan=\"5\" align=\"center\">
                            Total
                        </td>
                        <td align=\"center\">
                            <span id=\"total\">{{ sum|format_rp }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" align=\"center\">
                            Grand Total
                        </td>
                        <td align=\"center\">
                            <span id=\"total\">{{ sum|format_rp }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"6\" align=\"center\">
                            <button class=\"btn btn-primary py-2 px-4\" type=\"button\" data-id=\"{{ data_pemesanan.kd_pemesanan }}\" id=\"cetak\"> Cetak </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
{% endblock %}

{% block javascripts %}
<script>
    // untuk cetak
    var untukGetIdData = function() {
        \$(document).on('click', '#cetak', function () {
            var ini = \$(this);
            var id = ini.data('id');

            window.location = '/user/cetak/' + id;
        });
    }();
</script>
{% endblock %}", "home/nota.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\nota.html.twig");
    }
}
