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

/* admin/laporan_pelanggan/view.html.twig */
class __TwigTemplate_6f089f15e6baf221a0e93a1362232e2718dcb8948ce17cd46fee8c19fbec8a2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/laporan_pelanggan/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Laporan";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 19
        echo "
";
        // line 21
        echo "<div class=\"container-fluid\">
    ";
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <h3 class=\"card-title\">Tabel</h3>
                        </div>
                        <div class=\"col text-right\">
                            <a class=\"btn btn-outline-primary btn-sm btn-rounded\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_laporan_pelanggan");
        echo "\">
                                <i class=\"fa fa-print\"></i>&nbsp;Cetak
                            </a>
                        </div>
                    </div>
                    <hr>
                    <table id=\"tabel_pelanggan\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Hp</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pelanggan"] ?? null));
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
            // line 50
            echo "                            <tr>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
            echo ".</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "kelamin", [], "any", false, false, false, 53), null))) ? ("-") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "kelamin", [], "any", false, false, false, 53), "L"))) ? ("Laki - laki") : ("Perempuan"))));
            echo "</td>
                                <td>";
            // line 54
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "telepon", [], "any", false, false, false, 54), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "telepon", [], "any", false, false, false, 54), "html", null, true))));
            echo "</td>
                                <td>";
            // line 55
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 55), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 55), "html", null, true))));
            echo "</td>
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
        // line 58
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 65
        echo "</div>
";
    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_pelanggan').DataTable();
    }();
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/laporan_pelanggan/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  190 => 70,  186 => 69,  181 => 65,  173 => 58,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  140 => 51,  137 => 50,  120 => 49,  100 => 32,  89 => 23,  86 => 21,  83 => 19,  76 => 14,  71 => 11,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan_pelanggan/view.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan_pelanggan\\view.html.twig");
    }
}
