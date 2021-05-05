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

/* admin/pemesanan/detail.html.twig */
class __TwigTemplate_ede221bdaf19fd5317a64a008a865723969b908100fd9dfbaf753ad788ddceb9 extends Template
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
        return "admin/layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/pemesanan/detail.html.twig", 1);
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
                                        <h4>Jumlah Transfer</h4>
                                    </label>
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" name=\"inpjumlahtransfer\" id=\"inpjumlahtransfer\" ";
            // line 158
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 158), null))) ? (print ("class=\"form-control\" placeholder=\"Jumlah transfer\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\"")) : (print (twig_escape_filter($this->env, (("class=form-control-plaintext placeholder=" . $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 158))) . " readonly"), "html", null, true))));
            echo " />
                                        ";
            // line 159
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 159), null))) {
                // line 160
                echo "                                        <div class=\"input-group-prepend\">
                                            <button class=\"btn btn-primary btn-outline\" id=\"btn-simpan\" type=\"button\"><i class=\"fa fa-save\"></i></button>
                                        </div>
                                        ";
            }
            // line 164
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 172
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 172), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 172), "d-m-Y"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 180
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 180), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 180), "H:i:s"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bukti</h4>
                                    </label>
                                    ";
            // line 188
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 188), null))) {
                // line 189
                echo "                                        - 
                                    ";
            } else {
                // line 191
                echo "                                        <a href=\"#\" onclick=\"viewImage()\">
                                            <img src=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 192))), "html", null, true);
                echo "\" width=\"100\" heigth=\"100\" />
                                        </a>

                                        <script>
                                            // untuk lihat gambar pada tab baru
                                            function viewImage(url) {
                                                window.open(\"";
                // line 198
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "bukti", [], "any", false, false, false, 198))), "html", null, true);
                echo "\");
                                            }
                                        </script>
                                    ";
            }
            // line 202
            echo "                                </div>
                            </div>
                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 204
($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 204), "c"))) {
            // line 205
            echo "                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 210
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 210), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 210), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 218
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 218), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 218)), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 226
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 226), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 226), "d-m-Y"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 234
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 234), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 234), "H:i:s"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                        ";
        }
        // line 238
        echo "                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 244
        echo "    ";
        // line 245
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
        // line 264
        $context["sum"] = 0;
        // line 265
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
            // line 266
            echo "                                ";
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 266));
            // line 267
            echo "                                <tr>
                                    <td>";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), "html", null, true);
            echo " </td>
                                    <td><img src=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 269))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" /></td>
                                    <td>";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 270), "html", null, true);
            echo "</td>
                                    <td>";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 271), "html", null, true);
            echo "</td>
                                    <td align=\"center\">";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 272)), "html", null, true);
            echo "</td>
                                    <td align=\"center\"><span id=\"sub-total\">";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 273)), "html", null, true);
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
        // line 276
        echo "                                <tr>
                                    <td colspan=\"5\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 281
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
        // line 289
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <a class=\"btn btn-lg btn-danger btn-sm btn-rounded\" href=\"/admin/pemesanan\"><i class=\"fa fa-arrow-left\"></i>&nbsp;Kembali</a>
                    <a class=\"btn btn-lg btn-info btn-sm btn-rounded\" href=\"#\"><i class=\"fa fa-print\"></i>&nbsp;Cetak</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 303
        echo "</div>
";
    }

    // line 307
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 308
        echo "<script>
    var untukUbahAkun = function() {
        \$(document).on('click', '#btn-simpan', function(e) {
            e.preventDefault();
            var ini = \$(this);
            var kdPemesanan = \$('#inpkdpemesanan').attr('placeholder');
            var jumlahTransfer = \$('#inpjumlahtransfer').val();

            if (jumlahTransfer === '') {
                \$('#inpjumlahtransfer').attr('required', 'required');
                alert('Jumlah Transfer tidak boleh kosong!');
            } else {
                \$.ajax({
                    method: 'post',
                    url: '/admin/pembayaran_transfer',
                    dataType: 'json',
                    data: {
                        inpkdorder: kdPemesanan,
                        inpjumlahtransfer: jumlahTransfer,
                    },
                    beforeSend: function () {
                        ini.attr('disabled', 'disabled');
                    },
                    success: function (data) {
                        alert(data.msg);
                        location.reload()
                    }
                });
            }
        });
    }();

    // untuk angka
    function justAngka(e) {
        if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    };

    // untuk format harga
    function autoSeparator(Num) {
        Num += '';
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\\d+)(\\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '\$1' + '.' + '\$2');
        return x1 + x2;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/pemesanan/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 308,  520 => 307,  515 => 303,  499 => 289,  488 => 281,  481 => 276,  464 => 273,  460 => 272,  456 => 271,  452 => 270,  448 => 269,  444 => 268,  441 => 267,  438 => 266,  420 => 265,  418 => 264,  397 => 245,  395 => 244,  388 => 238,  381 => 234,  370 => 226,  359 => 218,  348 => 210,  341 => 205,  339 => 204,  335 => 202,  328 => 198,  319 => 192,  316 => 191,  312 => 189,  310 => 188,  299 => 180,  288 => 172,  278 => 164,  272 => 160,  270 => 159,  266 => 158,  253 => 148,  241 => 139,  230 => 131,  219 => 123,  208 => 115,  201 => 110,  199 => 109,  193 => 106,  182 => 98,  168 => 87,  157 => 79,  146 => 71,  135 => 63,  124 => 55,  113 => 47,  102 => 39,  91 => 31,  77 => 19,  74 => 17,  71 => 15,  64 => 10,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/pemesanan/detail.html.twig", "/home/airtahu.online/templates/admin/pemesanan/detail.html.twig");
    }
}
