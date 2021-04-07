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
class __TwigTemplate_ffa64716ffd5d178038f989aaf19df4c813d3725488775208ed415687489d7f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan_tahunan/tabel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan_tahunan/tabel.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()));
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
                $context["tot_pembelian"] = ((isset($context["tot_pembelian"]) || array_key_exists("tot_pembelian", $context) ? $context["tot_pembelian"] : (function () { throw new RuntimeError('Variable "tot_pembelian" does not exist.', 23, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_pembelian", [], "any", false, false, false, 23));
                // line 24
                echo "                    ";
                $context["tot_bayar"] = ((isset($context["tot_bayar"]) || array_key_exists("tot_bayar", $context) ? $context["tot_bayar"] : (function () { throw new RuntimeError('Variable "tot_bayar" does not exist.', 24, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "total_bayar", [], "any", false, false, false, 24));
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["tot_pembelian"]) || array_key_exists("tot_pembelian", $context) ? $context["tot_pembelian"] : (function () { throw new RuntimeError('Variable "tot_pembelian" does not exist.', 39, $this->source); })())), "html", null, true);
        echo "</th>
                <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["tot_bayar"]) || array_key_exists("tot_bayar", $context) ? $context["tot_bayar"] : (function () { throw new RuntimeError('Variable "tot_bayar" does not exist.', 40, $this->source); })())), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  151 => 47,  147 => 46,  138 => 40,  134 => 39,  128 => 35,  121 => 33,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  90 => 24,  87 => 23,  83 => 22,  77 => 21,  74 => 20,  70 => 19,  67 => 18,  64 => 17,  62 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\" />

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
        {% set tot_pembelian = 0 %}
        {% set tot_bayar = 0 %}

        {% for key, value in data %}
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
        </tbody>
        <tfoot>
            <tr>
                <th colspan=\"4\" style=\"text-align: center;\">Total</th>
                <th>{{ tot_pembelian|format_rp }}</th>
                <th>{{ tot_bayar|format_rp }}</th>
            </tr>
        </tfoot>
    </table>
</div>

<script src=\"{{ asset('assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin/dist/js/pages/datatable/datatable-basic.init.js') }}\"></script>

<script>
    var untukDataTabel = function () {
        \$('#tabel_laporan').DataTable();
    }();
</script>", "admin/laporan_tahunan/tabel.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan_tahunan\\tabel.html.twig");
    }
}
