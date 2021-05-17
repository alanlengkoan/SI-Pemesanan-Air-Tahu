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

    <table align=\"center\" border=\"1\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Pemesanan</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Pemesanan</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        ";
        // line 57
        $context["total"] = 0;
        // line 58
        echo "        <tbody>
            ";
        // line 59
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
            // line 60
            echo "            <tr>
                <td rowspan=\"";
            // line 61
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 61)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
            echo ".</td>
                <td rowspan=\"";
            // line 62
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 62)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "kd_order", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td rowspan=\"";
            // line 63
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 63)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nama_pelanggan", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td rowspan=\"";
            // line 64
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 64)) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "tgl_pemesanan", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
            echo "</td>
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["value"], "detail", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 66
                echo "                    ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 66));
                // line 67
                echo "                    <tr>
                        <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                        <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                        <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 70)), "html", null, true);
                echo "</td>
                        <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 71)), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
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
        // line 76
        echo "        </tbody>
        <tfoot>
            <tr>
                <th colspan=\"6\" style=\"text-align: center;\">Total</th>
                <th>";
        // line 80
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
        return array (  196 => 80,  190 => 76,  175 => 74,  166 => 71,  162 => 70,  158 => 69,  154 => 68,  151 => 67,  148 => 66,  144 => 65,  138 => 64,  132 => 63,  126 => 62,  120 => 61,  117 => 60,  100 => 59,  97 => 58,  95 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan_pelanggan/detail.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan_pelanggan\\detail.html.twig");
    }
}
