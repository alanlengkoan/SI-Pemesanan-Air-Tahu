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
class __TwigTemplate_f7565907036a1c92463843f3effa87b17ead4f3080bc71901c1ac548067b9441 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cetak.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cetak.html.twig"));

        // line 1
        echo "<h2>Detail Nota</h2>

<table>
    <tr>
        <td>Kode Order</td>
        <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 6, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 6), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 10, $this->source); })()), "nama", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 18, $this->source); })()), "telepon", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>";
        // line 22
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 22, $this->source); })()), "kelamin", [], "any", false, false, false, 22), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 26, $this->source); })()), "alamat", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Tanggal Pemesanan</td>
        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 30, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Jam Pemesanan</td>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 34, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 34), "H:i:s"), "html", null, true);
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
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 44, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 44), "c"))) ? ("COD") : ("Transfer"));
        echo "</td>
    </tr>
    <tr>
        <td>Status Pembayaran</td>
        <td>";
        // line 48
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 48, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 48), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "</td>
    </tr>
    ";
        // line 50
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 50, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 50), "t"))) {
            // line 51
            echo "    <tr>
        <td>Bank</td>
        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 53, $this->source); })()), "nama", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
    </tr>
    <tr>
        <td>Nomor Rekening</td>
        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 57, $this->source); })()), "rekening", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
    </tr>
    <tr>
        <td>Nama Penyetor</td>
        <td>";
            // line 61
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 61, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 61), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 61, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 61), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Atas Nama</td>
        <td>";
            // line 65
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 65, $this->source); })()), "atas_nama", [], "any", false, false, false, 65), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 65, $this->source); })()), "atas_nama", [], "any", false, false, false, 65), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Tanggal Transfer</td>
        <td>";
            // line 69
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 69, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 69), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 69, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 69), "d-m-Y"), "html", null, true))));
            echo "
        </td>
    </tr>
    <tr>
        <td>Jam Transfer</td>
        <td>";
            // line 74
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 74, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 74), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 74, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 74), "H:i:s"), "html", null, true))));
            echo "
        </td>
    </tr>
    <tr>
        <td>Jumlah Transfer</td>
        <td>";
            // line 79
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 79, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 79), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 79, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 79)), "html", null, true))));
            echo "
        </td>
    </tr>
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 82, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 82), "c"))) {
            // line 83
            echo "    <tr>
        <td>Nama Bayar</td>
        <td>";
            // line 85
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 85, $this->source); })()), "nama_bayar", [], "any", false, false, false, 85), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 85, $this->source); })()), "nama_bayar", [], "any", false, false, false, 85), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Jumlah Bayar</td>
        <td>";
            // line 89
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 89, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 89), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 89, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 89)), "html", null, true))));
            echo "</td>
    </tr>
    <tr>
        <td>Tanggal Bayar</td>
        <td>";
            // line 93
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 93, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 93), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 93, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 93), "d-m-Y"), "html", null, true))));
            echo "
        </td>
    </tr>
    <tr>
        <td>Jam Bayar</td>
        <td>";
            // line 98
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 98, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 98), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 98, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 98), "H-i-s"), "html", null, true))));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data_pemesanan_detail"]) || array_key_exists("data_pemesanan_detail", $context) ? $context["data_pemesanan_detail"] : (function () { throw new RuntimeError('Variable "data_pemesanan_detail" does not exist.', 120, $this->source); })()));
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
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 121, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 121));
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 143, $this->source); })())), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 151, $this->source); })())), "html", null, true);
        echo "</span>
            </td>
        </tr>
    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  319 => 151,  308 => 143,  301 => 138,  283 => 134,  277 => 131,  271 => 128,  265 => 125,  260 => 123,  257 => 122,  254 => 121,  236 => 120,  234 => 119,  215 => 102,  208 => 98,  200 => 93,  193 => 89,  186 => 85,  182 => 83,  180 => 82,  174 => 79,  166 => 74,  158 => 69,  151 => 65,  144 => 61,  137 => 57,  130 => 53,  126 => 51,  124 => 50,  119 => 48,  112 => 44,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Detail Nota</h2>

<table>
    <tr>
        <td>Kode Order</td>
        <td>{{ data_pemesanan.kd_pemesanan }}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>{{ data_pemesanan.nama }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ data_pemesanan.email }}</td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td>{{ data_pemesanan.telepon }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>{{ (data_pemesanan.kelamin == 'L') ? 'Laki - laki' : 'Perempuan' }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{ data_pemesanan.alamat }}</td>
    </tr>
    <tr>
        <td>Tanggal Pemesanan</td>
        <td>{{ data_pemesanan.tgl_pemesanan|date('d-m-Y') }}</td>
    </tr>
    <tr>
        <td>Jam Pemesanan</td>
        <td>{{ data_pemesanan.tgl_pemesanan|date('H:i:s') }}</td>
    </tr>
</table>

<hr>

<h2>Pembayaran</h2>
<table>
    <tr>
        <td>Metode Pembayaran</td>
        <td>{{ (data_pemesanan.metode_pembayaran == 'c') ? 'COD' : 'Transfer' }}</td>
    </tr>
    <tr>
        <td>Status Pembayaran</td>
        <td>{{ (data_pemesanan.status_pembayaran == 0) ? 'Menunggu Pembayaran' : 'Telah Melakukan Pembayaran' }}</td>
    </tr>
    {% if data_pemesanan.metode_pembayaran == 't' %}
    <tr>
        <td>Bank</td>
        <td>{{ data_pembayaran_detail.nama }}</td>
    </tr>
    <tr>
        <td>Nomor Rekening</td>
        <td>{{ data_pembayaran_detail.rekening }}</td>
    </tr>
    <tr>
        <td>Nama Penyetor</td>
        <td>{{ (data_pembayaran_detail.nama_penyetor == null) ? '-' : data_pembayaran_detail.nama_penyetor }}</td>
    </tr>
    <tr>
        <td>Atas Nama</td>
        <td>{{ (data_pembayaran_detail.atas_nama == null) ? '-' : data_pembayaran_detail.atas_nama }}</td>
    </tr>
    <tr>
        <td>Tanggal Transfer</td>
        <td>{{ (data_pembayaran_detail.tanggal_transfer == null) ? '-' : data_pembayaran_detail.tanggal_transfer|date('d-m-Y') }}
        </td>
    </tr>
    <tr>
        <td>Jam Transfer</td>
        <td>{{ (data_pembayaran_detail.tanggal_transfer == null) ? '-' : data_pembayaran_detail.tanggal_transfer|date('H:i:s') }}
        </td>
    </tr>
    <tr>
        <td>Jumlah Transfer</td>
        <td>{{ (data_pembayaran_detail.jumlah_transfer == null) ? '-' : data_pembayaran_detail.jumlah_transfer|format_rp }}
        </td>
    </tr>
    {% elseif data_pemesanan.metode_pembayaran == 'c' %}
    <tr>
        <td>Nama Bayar</td>
        <td>{{ (data_pembayaran_cod.nama_bayar == null) ? '-' : data_pembayaran_cod.nama_bayar }}</td>
    </tr>
    <tr>
        <td>Jumlah Bayar</td>
        <td>{{ (data_pembayaran_cod.jumlah_bayar == null) ? '-' : data_pembayaran_cod.jumlah_bayar|format_rp }}</td>
    </tr>
    <tr>
        <td>Tanggal Bayar</td>
        <td>{{ (data_pembayaran_cod.tanggal_bayar == null) ? '-' : data_pembayaran_cod.tanggal_bayar|date('d-m-Y') }}
        </td>
    </tr>
    <tr>
        <td>Jam Bayar</td>
        <td>{{ (data_pembayaran_cod.tanggal_bayar == null) ? '-' : data_pembayaran_cod.tanggal_bayar|date('H-i-s') }}
        </td>
    </tr>
    {% endif %}
</table>

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
        {% set sum = 0 %}
        {% for rows in data_pemesanan_detail %}
        {% set sum = sum + rows.sub_total  %}
        <tr>
            <td>{{ loop.index }}</td>
            <td>
                {{ rows.nama }}
            </td>
            <td align=\"center\">
                {{ rows.jumlah }}
            </td>
            <td align=\"center\">
                {{ rows.harga|format_rp }}
            </td>
            <td align=\"center\">
                <span id=\"sub-total\">{{ rows.sub_total|format_rp }}</span>
            </td>
        </tr>
        {% endfor %}
        <tr>
            <td colspan=\"4\" align=\"center\">
                Total
            </td>
            <td align=\"center\">
                <span id=\"total\">{{ sum|format_rp }}</span>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\" align=\"center\">
                Grand Total
            </td>
            <td align=\"center\">
                <span id=\"total\">{{ sum|format_rp }}</span>
            </td>
        </tr>
    </tbody>
</table>", "home/cetak.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\cetak.html.twig");
    }
}
