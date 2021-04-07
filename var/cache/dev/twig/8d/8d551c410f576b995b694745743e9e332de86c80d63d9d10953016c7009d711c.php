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

/* admin/laporan/export.html.twig */
class __TwigTemplate_62a6c8ac7299701986f0a7cb2cd6a8582ff03da6738b40eb62a1528388fa6996 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan/export.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan/export.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["pemesanan"]) || array_key_exists("pemesanan", $context) ? $context["pemesanan"] : (function () { throw new RuntimeError('Variable "pemesanan" does not exist.', 58, $this->source); })()));
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
                $context["tot_pembelian"] = ((isset($context["tot_pembelian"]) || array_key_exists("tot_pembelian", $context) ? $context["tot_pembelian"] : (function () { throw new RuntimeError('Variable "tot_pembelian" does not exist.', 62, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_pembelian", [], "any", false, false, false, 62));
                // line 63
                echo "            ";
                $context["tot_bayar"] = ((isset($context["tot_bayar"]) || array_key_exists("tot_bayar", $context) ? $context["tot_bayar"] : (function () { throw new RuntimeError('Variable "tot_bayar" does not exist.', 63, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_bayar", [], "any", false, false, false, 63));
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["tot_pembelian"]) || array_key_exists("tot_pembelian", $context) ? $context["tot_pembelian"] : (function () { throw new RuntimeError('Variable "tot_pembelian" does not exist.', 76, $this->source); })())), "html", null, true);
        echo "</td>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["tot_bayar"]) || array_key_exists("tot_bayar", $context) ? $context["tot_bayar"] : (function () { throw new RuntimeError('Variable "tot_bayar" does not exist.', 77, $this->source); })())), "html", null, true);
        echo "</td>
        </tr>
    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/laporan/export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 77,  169 => 76,  165 => 74,  158 => 72,  149 => 69,  145 => 68,  141 => 67,  137 => 66,  133 => 65,  130 => 64,  127 => 63,  124 => 62,  120 => 61,  114 => 60,  111 => 59,  107 => 58,  104 => 57,  101 => 56,  99 => 55,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CSS -->
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
        {% set tot_pembelian = 0 %}
        {% set tot_bayar = 0 %}

        {% for key, value in pemesanan %}
        <tr>
            <td rowspan=\"{{ value|length + 1 }}\">{{ key }}</td>
            {% for rows in value %}
            {% set tot_pembelian = tot_pembelian + rows.total_pembelian  %}
            {% set tot_bayar = tot_bayar + rows.total_bayar  %}
            <tr>
                <td>{{ rows.kode_order }}</td>
                <td>{{ rows.tanggal_pembelian }}</td>
                <td>{{ rows.jam_pembelian }}</td>
                <td>{{ rows.total_pembelian|format_rp }}</td>
                <td>{{ rows.total_bayar|format_rp }}</td>
            </tr>
            {% endfor %}
        </tr>
        {% endfor %}
        <tr>
            <td colspan=\"4\" style=\"text-align: center;\">Total</td>
            <td>{{ tot_pembelian|format_rp }}</td>
            <td>{{ tot_bayar|format_rp }}</td>
        </tr>
    </table>
</div>", "admin/laporan/export.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan\\export.html.twig");
    }
}
