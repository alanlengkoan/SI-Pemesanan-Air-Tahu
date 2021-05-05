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

/* home/cetak.html.twig */
class __TwigTemplate_e63b1198b7a0039609a09e052d9b9d7a5ef2c89a054ee015a130e874f9633067 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h2>Detail Nota</h2>

<table>
    <tr>
        <td>Kode Order</td>
        <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kd_pemesanan", [], "any", false, false, false, 6), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "nama", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "telepon", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>";
        // line 22
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "kelamin", [], "any", false, false, false, 22), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "alamat", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Tanggal Pemesanan</td>
        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Jam Pemesanan</td>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "tgl_pemesanan", [], "any", false, false, false, 34), "H:i:s"), "html", null, true);
        echo "</td>
    </tr>
</table>

<hr>

<h2>Pembayaran</h2>
<table>
    <tr>
        <td>Metode Pembayaran</td>
        <td>";
        // line 44
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 44), "c"))) ? ("COD") : ("Transfer"));
        echo "</td>
    </tr>
    <tr>
        <td>Status Pembayaran</td>
        <td>";
        // line 48
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "status_pembayaran", [], "any", false, false, false, 48), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "</td>
    </tr>
    ";
        // line 50
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 50), "t"))) {
            // line 51
            echo "    <tr>
        <td>Bank</td>
        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
    </tr>
    <tr>
        <td>Nomor Rekening</td>
        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "rekening", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
    </tr>
    <tr>
        <td>Nama Penyetor</td>
        <td>";
            // line 61
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 61), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama_penyetor", [], "any", false, false, false, 61), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Atas Nama</td>
        <td>";
            // line 65
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 65), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "atas_nama", [], "any", false, false, false, 65), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Tanggal Transfer</td>
        <td>";
            // line 69
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 69), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 69), "d-m-Y"), "html", null, true))));
            echo "
        </td>
    </tr>
    <tr>
        <td>Jam Transfer</td>
        <td>";
            // line 74
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 74), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "tanggal_transfer", [], "any", false, false, false, 74), "H:i:s"), "html", null, true))));
            echo "
        </td>
    </tr>
    <tr>
        <td>Jumlah Transfer</td>
        <td>";
            // line 79
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 79), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "jumlah_transfer", [], "any", false, false, false, 79)), "html", null, true))));
            echo "
        </td>
    </tr>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 82
($context["data_pemesanan"] ?? null), "metode_pembayaran", [], "any", false, false, false, 82), "c"))) {
            // line 83
            echo "    <tr>
        <td>Nama Bayar</td>
        <td>";
            // line 85
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 85), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "nama_bayar", [], "any", false, false, false, 85), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Jumlah Bayar</td>
        <td>";
            // line 89
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 89), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "jumlah_bayar", [], "any", false, false, false, 89)), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Tanggal Bayar</td>
        <td>";
            // line 93
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 93), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 93), "d-m-Y"), "html", null, true))));
            echo "
        </td>
    </tr>
    <tr>
        <td>Jam Bayar</td>
        <td>";
            // line 98
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 98), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_cod"] ?? null), "tanggal_bayar", [], "any", false, false, false, 98), "H-i-s"), "html", null, true))));
            echo "
        </td>
    </tr>
    ";
        }
        // line 102
        echo "</table>

<hr>

<h2>Pembelian</h2>

<table border=\"1\" cellspacing=\"0\" style=\"width: 100%\">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 119
        $context["sum"] = 0;
        // line 120
        echo "        ";
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
            // line 121
            echo "        ";
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 121));
            // line 122
            echo "        <tr>
            <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 125), "html", null, true);
            echo "
            </td>
            <td align=\"center\">
                ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 128), "html", null, true);
            echo "
            </td>
            <td align=\"center\">
                ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 131)), "html", null, true);
            echo "
            </td>
            <td align=\"center\">
                <span id=\"sub-total\">";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 134)), "html", null, true);
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
        // line 138
        echo "        <tr>
            <td colspan=\"4\" align=\"center\">
                Total
            </td>
            <td align=\"center\">
                <span id=\"total\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\" align=\"center\">
                Grand Total
            </td>
            <td align=\"center\">
                <span id=\"total\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
            </td>
        </tr>
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "home/cetak.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 151,  302 => 143,  295 => 138,  277 => 134,  271 => 131,  265 => 128,  259 => 125,  254 => 123,  251 => 122,  248 => 121,  230 => 120,  228 => 119,  209 => 102,  202 => 98,  194 => 93,  187 => 89,  180 => 85,  176 => 83,  174 => 82,  168 => 79,  160 => 74,  152 => 69,  145 => 65,  138 => 61,  131 => 57,  124 => 53,  120 => 51,  118 => 50,  113 => 48,  106 => 44,  93 => 34,  86 => 30,  79 => 26,  72 => 22,  65 => 18,  58 => 14,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/cetak.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\cetak.html.twig");
    }
}
