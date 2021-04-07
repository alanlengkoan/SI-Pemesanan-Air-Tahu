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
class __TwigTemplate_eb51c80dff6fc806bef5e0f378def8ceafc6999c3f8ea5deec5237562c6c1ce4 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 28), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Nama</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "nama", [], "any", false, false, false, 34), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Email</h5>
                            <input type=\"email\" class=\"form-control-plaintext\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>No. Telepon</h5>
                            <input type=\"number\" class=\"form-control-plaintext\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "telepon", [], "any", false, false, false, 46), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jenis Kelamin</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 52
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kelamin", [], "any", false, false, false, 52), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Alamat</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "alamat", [], "any", false, false, false, 58), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Tanggal Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <h5>Jam Pemesanan</h5>
                            <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 70), "H:i:s"), "html", null, true);
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
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 82), "c"))) ? ("COD") : ("Transfer"));
        echo "</span>
                        </p>
                        <p class=\"d-flex\">
                            <span>Status Pembayaran</span>
                            <span>";
        // line 86
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 86), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "</span>
                        </p>

                        ";
        // line 89
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 89), "t"))) {
            // line 90
            echo "                            <p class=\"d-flex\">
                                <span>Bank</span>
                                <span>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nomor Rekening</span>
                                <span>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "rekening", [], "any", false, false, false, 96), "html", null, true);
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Nama Penyetor</span>
                                <span>";
            // line 100
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 100), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 100), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Atas Nama</span>
                                <span>";
            // line 104
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 104), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 104), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>";
            // line 108
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 108), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 108), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Transfer</span>
                                <span>";
            // line 112
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 112), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 112), "H:i:s"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Transfer</span>
                                <span>";
            // line 116
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 116), null))) {
                echo " - ";
            } else {
                echo " <img
                                        src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 117))), "html", null, true);
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
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 123), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 123)), "html", null, true))));
            echo "</span>
                            </p>
                            ";
            // line 125
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 125), "0"))) {
                // line 126
                echo "                            <tr>
                                <td>
                                    <a href=\"/user/transfer/";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 128), "html", null, true);
                echo "\">Transfer</a>
                                </td>
                            </tr>
                            ";
            }
            // line 132
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 132), "c"))) {
            // line 133
            echo "                            <p class=\"d-flex\">
                                <span>Nama Bayar</span>
                                <span>";
            // line 135
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 135), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 135), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jumlah Bayar</span>
                                <span>";
            // line 139
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 139), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 139)), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Tanggal Bayar</span>
                                <span>";
            // line 143
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 143), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 143), "d-m-Y"), "html", null, true))));
            echo "</span>
                            </p>
                            <p class=\"d-flex\">
                                <span>Jam Bayar</span>
                                <span>";
            // line 147
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 147), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 147), "H-i-s"), "html", null, true))));
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
            // line 168
            echo "                    ";
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 168));
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
        // line 199
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"6\" align=\"center\">
                            <button class=\"btn btn-primary py-2 px-4\" type=\"button\" data-id=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 204), "html", null, true);
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

    // line 215
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  428 => 216,  424 => 215,  410 => 204,  402 => 199,  391 => 191,  384 => 186,  366 => 182,  360 => 179,  354 => 176,  348 => 173,  343 => 171,  339 => 170,  336 => 169,  333 => 168,  315 => 167,  313 => 166,  295 => 150,  289 => 147,  282 => 143,  275 => 139,  268 => 135,  264 => 133,  261 => 132,  254 => 128,  250 => 126,  248 => 125,  243 => 123,  236 => 118,  231 => 117,  225 => 116,  218 => 112,  211 => 108,  204 => 104,  197 => 100,  190 => 96,  183 => 92,  179 => 90,  177 => 89,  171 => 86,  164 => 82,  149 => 70,  140 => 64,  131 => 58,  122 => 52,  113 => 46,  104 => 40,  95 => 34,  86 => 28,  76 => 20,  73 => 18,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/nota.html.twig", "/home/airtahu.online/templates/home/nota.html.twig");
    }
}
