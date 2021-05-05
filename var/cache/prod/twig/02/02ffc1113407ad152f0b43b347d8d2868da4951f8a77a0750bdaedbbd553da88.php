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

/* kurir/pemesanan/view.html.twig */
class __TwigTemplate_7f67db10c0306c691a58f0d2cc30638fa9b3df7ad9fe5e198e61644387fe7423 extends Template
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
        return "kurir/layout_kurir.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("kurir/layout_kurir.html.twig", "kurir/pemesanan/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pemesanan";
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
        ";
        // line 24
        $context["status_pengantaran"] = [0 => "Dikemas", 1 => "Dikirim", 2 => "Diterima"];
        // line 25
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pemesanan"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 26
            echo "        <div class=\"col-12 mt-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 31), "html", null, true);
            echo "
                        </div>
                        <div class=\"col-6 text-right\">
                            <a class=\"btn btn-outline-info btn-sm btn-rounded\" href=\"pemesanan/detail/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 34), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fas fa-info-circle\"></i>&nbsp;Detail</a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Order</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"grid-container\">
                                Nama
                            </div>
                        </div>
                        <div class=\"col-lg-6 \">
                            <div class=\"grid-container\">
                                : ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 48), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"grid-container\">
                                Tanggal Pemesanan
                            </div>
                        </div>
                        <div class=\"col-lg-6 \">
                            <div class=\"grid-container\">
                                : ";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 60), "d-m-Y"), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"grid-container\">
                                Jam Pemesanan
                            </div>
                        </div>
                        <div class=\"col-lg-6 \">
                            <div class=\"grid-container\">
                                : ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 72), "H:m:s"), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"grid-container\">
                                Status Pengantaran
                            </div>
                        </div>
                        <div class=\"col-lg-6 \">
                            <div class=\"grid-container\">
                                : ";
            // line 84
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["status_pengantaran"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["rows"], "status_pengantaran", [], "any", false, false, false, 84)] ?? null) : null), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"grid-container\">
                                Total
                            </div>
                        </div>
                        <div class=\"col-lg-6 \">
                            <div class=\"grid-container\">
                                : ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total", [], "any", false, false, false, 96)), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>
    ";
        // line 106
        echo "</div>
";
    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
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
    }

    public function getTemplateName()
    {
        return "kurir/pemesanan/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 112,  215 => 111,  211 => 110,  206 => 106,  203 => 104,  189 => 96,  174 => 84,  159 => 72,  144 => 60,  129 => 48,  112 => 34,  106 => 31,  99 => 26,  94 => 25,  92 => 24,  89 => 23,  86 => 21,  83 => 19,  76 => 14,  71 => 11,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kurir/pemesanan/view.html.twig", "/home/airtahu.online/templates/kurir/pemesanan/view.html.twig");
    }
}
