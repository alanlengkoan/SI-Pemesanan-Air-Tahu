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
class __TwigTemplate_a6bd25e899f40fbadbbbed67bd37369c94c2de4f509fb79cda3224303febe6d4 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/nota.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detail Nota";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 27), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Nama</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "nama", [], "any", false, false, false, 33), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Email</h5>
                            <input type=\"email\" class=\"form-control-plaintext\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>No. Telepon</h5>
                            <input type=\"number\" class=\"form-control-plaintext\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "telepon", [], "any", false, false, false, 45), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jenis Kelamin</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 51
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kelamin", [], "any", false, false, false, 51), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Alamat</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "alamat", [], "any", false, false, false, 57), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Tanggal Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 63), "d-m-Y"), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jam Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 69), "H:i:s"), "html", null, true);
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
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 81), "c"))) ? ("COD") : ("Transfer"));
        echo "</span>
                        </p>
                        <p class=\"d-flex\">
                            <span>Status Pembayaran</span>
                            <span>";
        // line 85
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 85), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "</span>
                        </p>

                        ";
        // line 88
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 88), "t"))) {
            // line 89
            echo "                            <p class=\"d-flex\">
                                <span>Bank</span>
                                <span>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama", [], "any", false, false, false, 91), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nomor Rekening</span>
                                <span>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "rekening", [], "any", false, false, false, 95), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nama Penyetor</span>
                                <span>";
            // line 99
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 99), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 99), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Atas Nama</span>
                                <span>";
            // line 103
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 103), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 103), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>";
            // line 107
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 107), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 107), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Transfer</span>
                                <span>";
            // line 111
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 111), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 111), "H:i:s"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Bukti Transfer</span>
                                <span>";
            // line 115
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 115), null))) {
                echo " - ";
            } else {
                echo " <img
                                        src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 116))), "html", null, true);
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
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 122), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 122)), "html", null, true))));
            echo "</span>
                            </p>
                            ";
            // line 124
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 124), "0"))) {
                // line 125
                echo "                            <tr>
                                <td>
                                    <a href=\"/user/transfer/";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 127), "html", null, true);
                echo "\">Transfer</a>
                                </td>
                            </tr>
                            ";
            }
            // line 131
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 131), "c"))) {
            // line 132
            echo "                            <p class=\"d-flex\">
                                <span>Nama Bayar</span>
                                <span>";
            // line 134
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 134), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 134), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jumlah Bayar</span>
                                <span>";
            // line 138
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 138), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 138)), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Bayar</span>
                                <span>";
            // line 142
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 142), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 142), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Bayar</span>
                                <span>";
            // line 146
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 146), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 146), "H-i-s"), "html", null, true))));
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
        $context['_seq'] = twig_ensure_traversable(($context["data_pemesanan_detail"] ?? null));
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
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 167));
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"6\" align=\"center\">
                            <button class=\"btn btn-primary py-2 px-4\" type=\"button\" data-id=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 203), "html", null, true);
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
    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  426 => 215,  422 => 214,  408 => 203,  400 => 198,  389 => 190,  382 => 185,  364 => 181,  358 => 178,  352 => 175,  346 => 172,  341 => 170,  337 => 169,  334 => 168,  331 => 167,  313 => 166,  311 => 165,  293 => 149,  287 => 146,  280 => 142,  273 => 138,  266 => 134,  262 => 132,  259 => 131,  252 => 127,  248 => 125,  246 => 124,  241 => 122,  234 => 117,  229 => 116,  223 => 115,  216 => 111,  209 => 107,  202 => 103,  195 => 99,  188 => 95,  181 => 91,  177 => 89,  175 => 88,  169 => 85,  162 => 81,  147 => 69,  138 => 63,  129 => 57,  120 => 51,  111 => 45,  102 => 39,  93 => 33,  84 => 27,  73 => 18,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/nota.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\nota.html.twig");
    }
}
