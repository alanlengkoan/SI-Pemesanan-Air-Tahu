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
class __TwigTemplate_3ea91dddc7b9c8f7bd097fd0c87550068d39bb3c6182032c4a67c3eb5e0da5aa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nota.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/nota.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail Nota";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
";
        // line 20
        echo "<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"row align-items-end\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Kode Order</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 28, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 28), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Nama</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 34, $this->source); })()), "nama", [], "any", false, false, false, 34), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Email</h5>
                            <input type=\"email\" class=\"form-control-plaintext\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>No. Telepon</h5>
                            <input type=\"number\" class=\"form-control-plaintext\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 46, $this->source); })()), "telepon", [], "any", false, false, false, 46), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jenis Kelamin</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 52
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 52, $this->source); })()), "kelamin", [], "any", false, false, false, 52), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Alamat</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 58, $this->source); })()), "alamat", [], "any", false, false, false, 58), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Tanggal Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 64, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jam Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 70, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 70), "H:i:s"), "html", null, true);
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
        // line 82
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 82, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 82), "c"))) ? ("COD") : ("Transfer"));
        echo "</span>
                        </p>
                        <p class=\"d-flex\">
                            <span>Status Pembayaran</span>
                            <span>";
        // line 86
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 86, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 86), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "</span>
                        </p>

                        ";
        // line 89
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 89, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 89), "t"))) {
            // line 90
            echo "                            <p class=\"d-flex\">
                                <span>Bank</span>
                                <span>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 92, $this->source); })()), "nama", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nomor Rekening</span>
                                <span>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 96, $this->source); })()), "rekening", [], "any", false, false, false, 96), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nama Penyetor</span>
                                <span>";
            // line 100
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 100, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 100), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 100, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 100), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Atas Nama</span>
                                <span>";
            // line 104
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 104, $this->source); })()), "atas_nama", [], "any", false, false, false, 104), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 104, $this->source); })()), "atas_nama", [], "any", false, false, false, 104), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>";
            // line 108
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 108, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 108), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 108, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 108), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Transfer</span>
                                <span>";
            // line 112
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 112, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 112), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 112, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 112), "H:i:s"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>";
            // line 116
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 116, $this->source); })()), "bukti", [], "any", false, false, false, 116), null))) {
                echo " - ";
            } else {
                echo " <img
                                        src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 117, $this->source); })()), "bukti", [], "any", false, false, false, 117))), "html", null, true);
                echo "\" width=\"100\"
                                        heigth=\"100\" /> ";
            }
            // line 118
            echo "</span>
                            </p>
                            <hr>
                            <p class=\"d-flex total-price\">
                                <span>Jumlah Transfer</span>
                                <span>";
            // line 123
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 123, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 123), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 123, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 123)), "html", null, true))));
            echo "</span>
                            </p>
                            ";
            // line 125
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 125, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 125), "0"))) {
                // line 126
                echo "                            <tr>
                                <td>
                                    <a href=\"/user/transfer/";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 128, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 128), "html", null, true);
                echo "\">Transfer</a>
                                </td>
                            </tr>
                            ";
            }
            // line 132
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 132, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 132), "c"))) {
            // line 133
            echo "                            <p class=\"d-flex\">
                                <span>Nama Bayar</span>
                                <span>";
            // line 135
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 135, $this->source); })()), "nama_bayar", [], "any", false, false, false, 135), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 135, $this->source); })()), "nama_bayar", [], "any", false, false, false, 135), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jumlah Bayar</span>
                                <span>";
            // line 139
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 139, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 139), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 139, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 139)), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Bayar</span>
                                <span>";
            // line 143
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 143, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 143), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 143, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 143), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Bayar</span>
                                <span>";
            // line 147
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 147, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 147), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 147, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 147), "H-i-s"), "html", null, true))));
            echo "</span>
                            </p>
                        ";
        }
        // line 150
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
        // line 166
        $context["sum"] = 0;
        // line 167
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_pemesanan_detail"]) || array_key_exists("data_pemesanan_detail", $context) ? $context["data_pemesanan_detail"] : (function () { throw new RuntimeError('Variable "data_pemesanan_detail" does not exist.', 167, $this->source); })()));
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
            // line 168
            echo "                    ";
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 168, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 168));
            // line 169
            echo "                    <tr>
                        <td>";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 170), "html", null, true);
            echo "</td>
                        <td><img src=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 171))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" /></td>
                        <td>
                            ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 173), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 176), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 179)), "html", null, true);
            echo "
                        </td>
                        <td>
                            <span id=\"sub-total\">";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 182)), "html", null, true);
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
        // line 186
        echo "                    <tr>
                        <td colspan=\"5\" align=\"center\">
                            Total
                        </td>
                        <td align=\"center\">
                            <span id=\"total\">";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 191, $this->source); })())), "html", null, true);
        echo "</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" align=\"center\">
                            Grand Total
                        </td>
                        <td align=\"center\">
                            <span id=\"total\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 199, $this->source); })())), "html", null, true);
        echo "</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"6\" align=\"center\">
                            <button class=\"btn btn-primary py-2 px-4\" type=\"button\" data-id=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 204, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 204), "html", null, true);
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

    }

    // line 215
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 216
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
        return array (  449 => 216,  442 => 215,  425 => 204,  417 => 199,  406 => 191,  399 => 186,  381 => 182,  375 => 179,  369 => 176,  363 => 173,  358 => 171,  354 => 170,  351 => 169,  348 => 168,  330 => 167,  328 => 166,  310 => 150,  304 => 147,  297 => 143,  290 => 139,  283 => 135,  279 => 133,  276 => 132,  269 => 128,  265 => 126,  263 => 125,  258 => 123,  251 => 118,  246 => 117,  240 => 116,  233 => 112,  226 => 108,  219 => 104,  212 => 100,  205 => 96,  198 => 92,  194 => 90,  192 => 89,  186 => 86,  179 => 82,  164 => 70,  155 => 64,  146 => 58,  137 => 52,  128 => 46,  119 => 40,  110 => 34,  101 => 28,  91 => 20,  88 => 18,  74 => 7,  67 => 5,  54 => 3,  37 => 1,);
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

{# begin:: form #}
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
                                <span>Tanggal Transfer</span>
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
