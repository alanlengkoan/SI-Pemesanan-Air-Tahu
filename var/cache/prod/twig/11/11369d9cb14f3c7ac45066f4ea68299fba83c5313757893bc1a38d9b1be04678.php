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

/* admin/laporan_bulanan/export.html.twig */
class __TwigTemplate_1b6176b8058c1e6cc220ddb6b0450e471226ac3a7c9c320c236d3e6bf3d09de2 extends Template
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
                <h3>LAPORAN PENJUALAN</h3>
                <h3>AIR TAHU SUPER</h3>
            </td>
        </tr>
    </table>
    <hr>

    <table align=\"center\" border=\"1\">
        <thead>
            <tr>
                <th>Kode Order</th>
                <th>Nama</th>
                <th>Tanggal Pembelian</th>
                <th>Jam Pembelian</th>
                <th>Total Pembelian</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        ";
        // line 55
        $context["tot_pembelian"] = 0;
        // line 56
        echo "        ";
        $context["tot_bayar"] = 0;
        // line 57
        echo "
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pemesanan"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 59
            echo "        <tr>
            <td rowspan=\"";
            // line 60
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $context["value"]) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 62
                echo "            ";
                $context["tot_pembelian"] = (($context["tot_pembelian"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_pembelian", [], "any", false, false, false, 62));
                // line 63
                echo "            ";
                $context["tot_bayar"] = (($context["tot_bayar"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_bayar", [], "any", false, false, false, 63));
                // line 64
                echo "            <tr>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kode_order", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_pembelian", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jam_pembelian", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total_pembelian", [], "any", false, false, false, 68)), "html", null, true);
                echo "</td>
                <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total_bayar", [], "any", false, false, false, 69)), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <tr>
            <td colspan=\"4\" style=\"text-align: center;\">Total</td>
            <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["tot_pembelian"] ?? null)), "html", null, true);
        echo "</td>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["tot_bayar"] ?? null)), "html", null, true);
        echo "</td>
        </tr>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/laporan_bulanan/export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 77,  163 => 76,  159 => 74,  152 => 72,  143 => 69,  139 => 68,  135 => 67,  131 => 66,  127 => 65,  124 => 64,  121 => 63,  118 => 62,  114 => 61,  108 => 60,  105 => 59,  101 => 58,  98 => 57,  95 => 56,  93 => 55,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan_bulanan/export.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan_bulanan\\export.html.twig");
    }
}
