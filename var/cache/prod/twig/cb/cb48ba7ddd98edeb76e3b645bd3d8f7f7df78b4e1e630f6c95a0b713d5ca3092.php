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

/* kurir/pemesanan/detail.html.twig */
class __TwigTemplate_9a9b4fbc125bb6558cc14f89f9a9e4f79443950e8d46650fde2671819c92a327 extends Template
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
        return "kurir/layout_kurir.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("kurir/layout_kurir.html.twig", "kurir/pemesanan/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detail Pemesanan";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 15
        echo "
";
        // line 17
        echo "<div class=\"container-fluid\">
    ";
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Biodata Pemesanan</h3>
                    <hr>
                    <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"nama\" class=\"text-dark\">
                                    <h4>Kode Order</h4>
                                </label>
                                <input type=\"text\" id=\"inpkdpemesanan\" class=\"form-control-plaintext\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 31), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"email\" class=\"text-dark\">
                                    <h4>Nama</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "nama", [], "any", false, false, false, 39), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Email</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>No. Telepon</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "telepon", [], "any", false, false, false, 55), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Jenis Kelamin</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 63
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kelamin", [], "any", false, false, false, 63), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Alamat</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "alamat", [], "any", false, false, false, 71), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Tanggal Pemesanan</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 79), "d-m-Y"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Jam Pemesanan</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 87), "H:i:s"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <br>
                        <h3 class=\"card-title\">Pembayaran</h3>
                        <hr>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Metode Pembayaran</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 98
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 98), "c"))) ? ("COD") : ("Transfer"));
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Status Pembayaran</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 106
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 106), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "\" readonly>
                            </div>
                        </div>
                        ";
        // line 109
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 109), "t"))) {
            // line 110
            echo "                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bank</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama", [], "any", false, false, false, 115), "html", null, true);
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Nomor Rekening</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "rekening", [], "any", false, false, false, 123), "html", null, true);
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Nomor Penyetor</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 131
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 131), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 131), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Atas Nama</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 139
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 139), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 139), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Transfer</h4>
                                    </label>
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 148
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 148), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 148)), "html", null, true))));
            echo "\" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 157
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 157), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 157), "d-m-Y"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 165
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 165), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 165), "H:i:s"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bukti</h4>
                                    </label>
                                    ";
            // line 173
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 173), null))) {
                // line 174
                echo "                                        - 
                                    ";
            } else {
                // line 176
                echo "                                        <a href=\"#\" onclick=\"viewImage()\">
                                            <img src=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 177))), "html", null, true);
                echo "\" width=\"100\" heigth=\"100\" />
                                        </a>
                                        <script>
                                            // untuk lihat gambar pada tab baru
                                            function viewImage(url) {
                                                window.open(\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 182))), "html", null, true);
                echo "\");
                                            }
                                        </script>
                                    ";
            }
            // line 186
            echo "                                </div>
                            </div>
                            ";
            // line 188
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pengantaran", [], "any", false, false, false, 188), "2"))) {
                // line 189
                echo "                                <button type=\"button\" class=\"btn btn-success btn-sm btn-rounded btn-block\" id=\"diterima\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 189), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-check\"></i>&nbsp;Diterima
                                </button>
                            ";
            }
            // line 193
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 193), "c"))) {
            // line 194
            echo "                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 199
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 199), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 199), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 207
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 207), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 207)), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 215
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 215), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 215), "d-m-Y"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 223
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 223), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 223), "H:i:s"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            ";
            // line 226
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 226), "0"))) {
                // line 227
                echo "                                 <div class=\"form-group\">
                                     <div class=\"col-xs-12\"><br>
                                        <a class=\"btn btn-lg btn-success btn-sm btn-rounded\" href=\"/kurir/pemesanan/bayar/";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 229), "html", null, true);
                echo "\"><i class=\"fa fa-money\"></i>&nbsp;Bayar</a>
                                     </div>
                                 </div>
                            ";
            }
            // line 233
            echo "                        ";
        }
        // line 234
        echo "                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 240
        echo "    ";
        // line 241
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel_pemesanan\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 260
        $context["sum"] = 0;
        // line 261
        echo "                                ";
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
            // line 262
            echo "                                ";
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 262));
            // line 263
            echo "                                <tr>
                                    <td>";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 264), "html", null, true);
            echo " </td>
                                    <td><img src=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 265))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" /></td>
                                    <td>";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 266), "html", null, true);
            echo "</td>
                                    <td>";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 267), "html", null, true);
            echo "</td>
                                    <td align=\"center\">";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 268)), "html", null, true);
            echo "</td>
                                    <td align=\"center\"><span id=\"sub-total\">";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 269)), "html", null, true);
            echo "</span></td>
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
        // line 272
        echo "                                <tr>
                                    <td colspan=\"5\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 277
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
        // line 285
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <a class=\"btn btn-lg btn-danger btn-sm btn-rounded\" href=\"/kurir/pemesanan\"><i class=\"fa fa-arrow-left\"></i>&nbsp;Kembali</a>
                    <a class=\"btn btn-lg btn-info btn-sm btn-rounded\" href=\"#\"><i class=\"fa fa-print\"></i>&nbsp;Cetak</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 299
        echo "</div>
";
    }

    // line 303
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        echo "<script>
    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#diterima', function() {
            var ini = \$(this);

            swal({
                title: \"Apakah Anda yakin barang telah diterima oleh pelanggan?\",
                text: \"Data yang telah diubah tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"../setor\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                        },
                        success: function (data) {
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
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
";
    }

    public function getTemplateName()
    {
        return "kurir/pemesanan/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 304,  522 => 303,  517 => 299,  501 => 285,  490 => 277,  483 => 272,  466 => 269,  462 => 268,  458 => 267,  454 => 266,  450 => 265,  446 => 264,  443 => 263,  440 => 262,  422 => 261,  420 => 260,  399 => 241,  397 => 240,  390 => 234,  387 => 233,  380 => 229,  376 => 227,  374 => 226,  368 => 223,  357 => 215,  346 => 207,  335 => 199,  328 => 194,  325 => 193,  317 => 189,  315 => 188,  311 => 186,  304 => 182,  296 => 177,  293 => 176,  289 => 174,  287 => 173,  276 => 165,  265 => 157,  253 => 148,  241 => 139,  230 => 131,  219 => 123,  208 => 115,  201 => 110,  199 => 109,  193 => 106,  182 => 98,  168 => 87,  157 => 79,  146 => 71,  135 => 63,  124 => 55,  113 => 47,  102 => 39,  91 => 31,  77 => 19,  74 => 17,  71 => 15,  64 => 10,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kurir/pemesanan/detail.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\kurir\\pemesanan\\detail.html.twig");
    }
}
