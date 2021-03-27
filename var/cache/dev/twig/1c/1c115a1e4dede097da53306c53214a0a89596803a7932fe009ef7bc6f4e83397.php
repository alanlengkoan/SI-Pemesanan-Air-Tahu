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

/* admin/pemesanan/view.html.twig */
class __TwigTemplate_6b2d5fe2cf392f4771b7f0b7e23a1cc58f58bf5f3ae07f6ba83fff198a94f90a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/pemesanan/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pemesanan";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 14, $this->source); })()), "html", null, true);
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
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel_pemesanan\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Kode Order</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Jam Pemesanan</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Status Pengantaran</th>
                                    <th>Total</th>
                                    <th>Jumlah Transfer</th>
                                    <th>Jumlah Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 48
        $context["status_pengantaran"] = [0 => "Dikemas", 1 => "Dikirim", 2 => "Diterima"];
        // line 49
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pemesanan"]) || array_key_exists("pemesanan", $context) ? $context["pemesanan"] : (function () { throw new RuntimeError('Variable "pemesanan" does not exist.', 49, $this->source); })()));
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
            echo "                                <tr>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
            echo " </td>
                                    <td align=\"center\">
                                        <a class=\"btn btn-outline-info btn-sm btn-rounded\" href=\"pemesanan/detail/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 53), "html", null, true);
            echo "\" target=\"_blank\">
                                            <i class=\"fas fa-info-circle\"></i>&nbsp;Detail
                                        </a>
                                        <a class=\"btn btn-outline-secondary btn-sm btn-rounded\" href=\"pemesanan/tracking/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 56), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-check\"></i>&nbsp;Tracking
                                        </a>
                                        ";
            // line 59
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "pilih_kurir", [], "any", false, false, false, 59), "n"))) {
                // line 60
                echo "                                        <button type=\"button\" class=\"btn btn-outline-success btn-sm btn-rounded\" id=\"pilih-kurir\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 60), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modalPilihKurir\">
                                            <i class=\"fas fa-tasks\"></i>&nbsp;Pilih Kurir
                                        </button>                                        
                                        ";
            }
            // line 64
            echo "                                    </td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 68), "H:m:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "metode_pembayaran", [], "any", false, false, false, 69), "c"))) ? ("COD") : ("Transfer"));
            echo "</td>
                                    <td>
                                        ";
            // line 71
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status_pembayaran", [], "any", false, false, false, 71), 0))) {
                // line 72
                echo "                                        Menunggu Pembayaran
                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 73
$context["rows"], "status_pembayaran", [], "any", false, false, false, 73), 1))) {
                // line 74
                echo "                                        Telah Melakukan Pembayaran
                                        ";
            } else {
                // line 76
                echo "                                        -
                                        ";
            }
            // line 78
            echo "                                    </td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status_pengantaran"]) || array_key_exists("status_pengantaran", $context) ? $context["status_pengantaran"] : (function () { throw new RuntimeError('Variable "status_pengantaran" does not exist.', 79, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rows"], "status_pengantaran", [], "any", false, false, false, 79), [], "array", false, false, false, 79), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total", [], "any", false, false, false, 80)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "transfer", [], "any", false, false, false, 81)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "bayar", [], "any", false, false, false, 82)), "html", null, true);
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
        // line 85
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 93
        echo "</div>

";
        // line 96
        echo "<div class=\"modal fade\" id=\"modalPilihKurir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Data Kurir</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <table id=\"tabel_kurir\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Hp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kurir"]) || array_key_exists("kurir", $context) ? $context["kurir"] : (function () { throw new RuntimeError('Variable "kurir" does not exist.', 119, $this->source); })()));
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
            // line 120
            echo "                        <tr>
                            <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 121), "html", null, true);
            echo ".</td>
                            <td>
                                <button class=\"btn btn-outline-secondary btn-sm btn-rounded pilih-kurir-ini\" id=\"pilih-kurir-ini\" data-id_users=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_users", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                                    <i class=\"fas fa-check\"></i>&nbsp;Pilih
                                </button>
                            </td>
                            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
                            <td>";
            // line 128
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "kelamin", [], "any", false, false, false, 128), null))) ? ("-") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "kelamin", [], "any", false, false, false, 128), "L"))) ? ("Laki - laki") : ("Perempuan"))));
            echo "</td>
                            <td>";
            // line 129
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "telepon", [], "any", false, false, false, 129), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "telepon", [], "any", false, false, false, 129), "html", null, true))));
            echo "</td>
                            <td>";
            // line 130
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 130), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 130), "html", null, true))));
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
        // line 133
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_pemesanan').DataTable();
        \$('#tabel_kurir').DataTable();
    }();

    // untuk pilih kurir
    var untukPilihKurir = function() {
        \$(document).on('click', '#pilih-kurir', function() {
            var ini = \$(this);
            let id = ini.data('id');
            \$('.pilih-kurir-ini').attr('data-kd_pemesanan', id);
        });
        
        \$(document).on('click', '#pilih-kurir-ini', function() {
            var ini = \$(this);
            let id_users = ini.data('id_users');
            let kd_pemesanan = ini.data('kd_pemesanan');
            
            swal({
                title: \"Apakah Anda yakin ingin memilih kurir tersebut?\",
                text: \"Akun yang telah dipilih tidak dapat diubah!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"pemesanan/pilih_kurir\",
                        dataType: 'json',
                        data: {
                            id_users: id_users,
                            kd_pemesanan: kd_pemesanan
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                        },
                        success: function (response) {
                            swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/pemesanan/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 145,  404 => 144,  394 => 143,  378 => 133,  361 => 130,  357 => 129,  353 => 128,  349 => 127,  342 => 123,  337 => 121,  334 => 120,  317 => 119,  292 => 96,  288 => 93,  279 => 85,  262 => 82,  258 => 81,  254 => 80,  250 => 79,  247 => 78,  243 => 76,  239 => 74,  237 => 73,  234 => 72,  232 => 71,  227 => 69,  223 => 68,  219 => 67,  215 => 66,  211 => 65,  208 => 64,  200 => 60,  198 => 59,  192 => 56,  186 => 53,  181 => 51,  178 => 50,  160 => 49,  158 => 48,  131 => 23,  128 => 21,  125 => 19,  118 => 14,  113 => 11,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout_admin.html.twig' %}

{% block title %}Pemesanan{% endblock %}

{% block stylesheets %}
<link href=\"{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
{# begin:: head #}
<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">{{ halaman }}</h2>
        </div>
    </div>
</div>
{# end:: head #}

{# begin:: body #}
<div class=\"container-fluid\">
    {# begin:: tabel #}
    <div class=\"row\">
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
                                    <th>Aksi</th>
                                    <th>Kode Order</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Jam Pemesanan</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Status Pengantaran</th>
                                    <th>Total</th>
                                    <th>Jumlah Transfer</th>
                                    <th>Jumlah Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% set status_pengantaran = ['Dikemas', 'Dikirim', 'Diterima'] %}
                                {% for rows in pemesanan %}
                                <tr>
                                    <td>{{ loop.index }} </td>
                                    <td align=\"center\">
                                        <a class=\"btn btn-outline-info btn-sm btn-rounded\" href=\"pemesanan/detail/{{ rows.kd_pemesanan }}\" target=\"_blank\">
                                            <i class=\"fas fa-info-circle\"></i>&nbsp;Detail
                                        </a>
                                        <a class=\"btn btn-outline-secondary btn-sm btn-rounded\" href=\"pemesanan/tracking/{{ rows.kd_pemesanan }}\">
                                            <i class=\"fas fa-check\"></i>&nbsp;Tracking
                                        </a>
                                        {% if rows.pilih_kurir == \"n\" %}
                                        <button type=\"button\" class=\"btn btn-outline-success btn-sm btn-rounded\" id=\"pilih-kurir\" data-id=\"{{ rows.kd_pemesanan }}\" data-toggle=\"modal\" data-target=\"#modalPilihKurir\">
                                            <i class=\"fas fa-tasks\"></i>&nbsp;Pilih Kurir
                                        </button>                                        
                                        {% endif %}
                                    </td>
                                    <td>{{ rows.kd_pemesanan }}</td>
                                    <td>{{ rows.nama }}</td>
                                    <td>{{ rows.tgl_pemesanan|date('d-m-Y') }}</td>
                                    <td>{{ rows.tgl_pemesanan|date('H:m:s') }}</td>
                                    <td>{{ (rows.metode_pembayaran == 'c') ? 'COD' : 'Transfer' }}</td>
                                    <td>
                                        {% if rows.status_pembayaran == 0 %}
                                        Menunggu Pembayaran
                                        {% elseif rows.status_pembayaran == 1 %}
                                        Telah Melakukan Pembayaran
                                        {% else %}
                                        -
                                        {% endif %}
                                    </td>
                                    <td>{{ status_pengantaran[rows.status_pengantaran] }}</td>
                                    <td>{{ rows.total|format_rp }}</td>
                                    <td>{{ rows.transfer|format_rp }}</td>
                                    <td>{{ rows.bayar|format_rp }}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# end:: tabel #}
</div>

{# begin:: modal add #}
<div class=\"modal fade\" id=\"modalPilihKurir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Data Kurir</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <table id=\"tabel_kurir\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Hp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for rows in kurir %}
                        <tr>
                            <td>{{ loop.index }}.</td>
                            <td>
                                <button class=\"btn btn-outline-secondary btn-sm btn-rounded pilih-kurir-ini\" id=\"pilih-kurir-ini\" data-id_users=\"{{ rows.id_users }}\">
                                    <i class=\"fas fa-check\"></i>&nbsp;Pilih
                                </button>
                            </td>
                            <td>{{ rows.nama }}</td>
                            <td>{{ (rows.kelamin == null ? \"-\" : (rows.kelamin == \"L\" ? \"Laki - laki\" : \"Perempuan\")) }}</td>
                            <td>{{ (rows.telepon == null ? \"-\" : rows.telepon) }}</td>
                            <td>{{ (rows.alamat == null ? \"-\" : rows.alamat) }}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{# end:: modal add #}
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin/dist/js/pages/datatable/datatable-basic.init.js') }}\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_pemesanan').DataTable();
        \$('#tabel_kurir').DataTable();
    }();

    // untuk pilih kurir
    var untukPilihKurir = function() {
        \$(document).on('click', '#pilih-kurir', function() {
            var ini = \$(this);
            let id = ini.data('id');
            \$('.pilih-kurir-ini').attr('data-kd_pemesanan', id);
        });
        
        \$(document).on('click', '#pilih-kurir-ini', function() {
            var ini = \$(this);
            let id_users = ini.data('id_users');
            let kd_pemesanan = ini.data('kd_pemesanan');
            
            swal({
                title: \"Apakah Anda yakin ingin memilih kurir tersebut?\",
                text: \"Akun yang telah dipilih tidak dapat diubah!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"pemesanan/pilih_kurir\",
                        dataType: 'json',
                        data: {
                            id_users: id_users,
                            kd_pemesanan: kd_pemesanan
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                        },
                        success: function (response) {
                            swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
{% endblock %}", "admin/pemesanan/view.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\pemesanan\\view.html.twig");
    }
}
