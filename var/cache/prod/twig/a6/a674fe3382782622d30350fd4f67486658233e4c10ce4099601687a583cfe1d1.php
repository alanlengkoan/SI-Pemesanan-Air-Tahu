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

/* admin/laporan_tahunan/tabel.html.twig */
class __TwigTemplate_fce417dded370d1f69c3411a0f3b4073e9375c437fd77c2cf9e14171efd4bf3a extends Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<div class=\"table-responsive\">
    <table id=\"tabel_laporan\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kode Order</th>
                <th>Tanggal Pembelian</th>
                <th>Jam Pembelian</th>
                <th>Total Pembelian</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context["tot_pembelian"] = 0;
        // line 17
        echo "        ";
        $context["tot_bayar"] = 0;
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 20
            echo "            <tr>
                <td rowspan=\"";
            // line 21
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $context["value"]) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 23
                echo "                    ";
                $context["tot_pembelian"] = (($context["tot_pembelian"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_pembelian", [], "any", false, false, false, 23));
                // line 24
                echo "                    ";
                $context["tot_bayar"] = (($context["tot_bayar"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_bayar", [], "any", false, false, false, 24));
                // line 25
                echo "                    <tr>
                        <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kode_order", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_pembelian", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jam_pembelian", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total_pembelian", [], "any", false, false, false, 29)), "html", null, true);
                echo "</td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total_bayar", [], "any", false, false, false, 30)), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
        <tfoot>
            <tr>
                <th colspan=\"4\" style=\"text-align: center;\">Total</th>
                <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["tot_pembelian"] ?? null)), "html", null, true);
        echo "</th>
                <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["tot_bayar"] ?? null)), "html", null, true);
        echo "</th>
            </tr>
        </tfoot>
    </table>
</div>

<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>

<script>
    var untukDataTabel = function () {
        \$('#tabel_laporan').DataTable();
    }();
</script>";
    }

    public function getTemplateName()
    {
        return "admin/laporan_tahunan/tabel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  141 => 46,  132 => 40,  128 => 39,  122 => 35,  115 => 33,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  77 => 22,  71 => 21,  68 => 20,  64 => 19,  61 => 18,  58 => 17,  56 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan_tahunan/tabel.html.twig", "/home/airtahu.online/templates/admin/laporan_tahunan/tabel.html.twig");
    }
}
