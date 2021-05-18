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

/* admin/laporan_pelanggan/detail.html.twig */
class __TwigTemplate_810f696aa8e9ad9662b55351123c54e3bd45ec4f552179726bcdf89ccc08da00 extends Template
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
        echo "<!-- CSS -->
<style media=\"screen\">
    .judul {
        padding: 4mm;
        text-align: center;
    }

    .nama {
        text-decoration: underline;
        font-weight: bold;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 5px;
    }

    h3 {
        font-family: times;
    }

    p {
        margin: 0;
    }
</style>
<!-- CSS -->

<div class=\"judul\">
    <table align=\"center\">
        <tr>
            <td align=\"center\">
                <h3>LAPORAN DETAIL PELANGGAN</h3>
                <h3>AIR TAHU SUPER</h3>
            </td>
        </tr>
    </table>
    <hr>
    <h3>Detail Pelanggan</h3>
    <table align=\"center\">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pelanggan"] ?? null), "nama", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pelanggan"] ?? null), "email", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>No. Hp</td>
            <td>:</td>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pelanggan"] ?? null), "telepon", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>";
        // line 63
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["pelanggan"] ?? null), "kelamin", [], "any", false, false, false, 63), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pelanggan"] ?? null), "alamat", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
        </tr>
    </table>

    <br>
    <h3>Detail Order</h3>
    <table align=\"center\" border=\"1\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Pemesanan</th>
                <th>Tanggal Pemesanan</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        ";
        // line 86
        $context["total"] = 0;
        // line 87
        echo "        <tbody>
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 89
            echo "            <tr>
                <td rowspan=\"";
            // line 90
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 90)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 90), "html", null, true);
            echo ".</td>
                <td rowspan=\"";
            // line 91
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 91)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "kd_order", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td rowspan=\"";
            // line 92
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 92)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "tgl_pemesanan", [], "any", false, false, false, 92), "d-m-Y"), "html", null, true);
            echo "</td>
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 94
                echo "                    ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 94));
                // line 95
                echo "                    <tr>
                        <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 96), "html", null, true);
                echo "</td>
                        <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
                        <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 98)), "html", null, true);
                echo "</td>
                        <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 99)), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
        <tfoot>
            <tr>
                <th colspan=\"6\" style=\"text-align: center;\">Total</th>
                <th>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["total"] ?? null)), "html", null, true);
        echo "</th>
            </tr>
        </tfoot>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/laporan_pelanggan/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 108,  228 => 104,  213 => 102,  204 => 99,  200 => 98,  196 => 97,  192 => 96,  189 => 95,  186 => 94,  182 => 93,  176 => 92,  170 => 91,  164 => 90,  161 => 89,  144 => 88,  141 => 87,  139 => 86,  118 => 68,  110 => 63,  102 => 58,  94 => 53,  86 => 48,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan_pelanggan/detail.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan_pelanggan\\detail.html.twig");
    }
}
